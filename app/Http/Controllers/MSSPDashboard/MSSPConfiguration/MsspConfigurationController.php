<?php

    namespace App\Http\Controllers\MSSPDashboard\MSSPConfiguration;

    use App\Domain;
    use App\Http\Controllers\Controller;
    use App\JobScheduleDomains;
    use App\JobSchedules;
    use App\Services\QualysService;
    use App\User;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Http\Request;

    class MsspConfigurationController extends Controller
    {
        public function __construct()
        {

        }

        public function domains()
        {
            $data['user']    = Auth::user();
            $data['domains'] = Domain::where([
                'account_id' => $data['user']->account_id
            ])->get();

            return view('mssp-dashboard/mssp-configuration/domains', $data);
        }

        public function addDomain(Request $request)
        {
            if($request->method() == 'POST') {
                $user = Auth::user();

                $post_data               = $request->except('_token');
                $post_data['account_id'] = $user->account_id;
                $post_data['created_by'] = $user->id;

                Domain::create($post_data);

                return redirect('mssp-dashboard/mssp-configuration/domains')
                    ->with('status', 'Domain added successfully!');

            } else {
                return redirect('mssp-dashboard/mssp-configuration/domains')
                    ->with('status', 'Error occured while adding new domain. Please try again.');
            }
        }

        public function domainScanLaunch(Request $request)
        {
            $data['user']    = Auth::user();
            $data['domains'] = Domain::where(['account_id' =>  $data['user']->account_id])->get();
            $data['users']   = User::where(['account_id' =>  $data['user']->account_id])->get();

            if($request->method() == 'POST') {
                $postData = $request->except('_token');

                $jobSchedule = JobSchedules::create([
                                                        'account_id'    => $data['user']->account_id,
                                                        'title'         => $postData['title'],
                                                        'task_owner_id' => $postData['task_owner_id'],
                                                        'asset_domain'  => $postData['asset_domain'],
                                                        'asset_ip'      => $postData['asset_ip'],
                                                        'created_by'    => $data['user']->id
                                                    ]);

                foreach($postData['job_schedule_domains'] as $domainId){
                    JobScheduleDomains::create([
                                                   'job_schedule_id' => $jobSchedule->id,
                                                   'domain_id'       => $domainId,
                                               ]);
                }
            }

            $data['jobSchedules'] = JobSchedules::where(['account_id' =>  $data['user']->account_id])->get();

            return view('mssp-dashboard/mssp-configuration/domain-scan-launch', $data);
        }

        public function ajaxDomainScanLaunch(Request $request, QualysService $qualysService)
        {
            $return = [
                'status'      => 'failure',
                'message'     => 'Invalid data',
                'status_code' => 201
            ];


            if($request->method() == 'GET') {
                $user = Auth::user();


                $jobSchedule = JobSchedules::where([
                                            'account_id' => $user->account_id,
                                            'id'         => $request->input('id')
                                        ])->first();


                $return = [
                    'status'      => 'failure',
                    'message'     => 'Invalid domain',
                    'status_code' => 201
                ];

                if($jobSchedule) {

                    $domains = [];

                    foreach($jobSchedule->jobScheduleDomains as $jobScheduleDomain){
                        $domains = $jobScheduleDomain->domain->domains;
                    }

                    $data = $qualysService->launchDomainScan([
                                                                 'map_title' => $jobSchedule->title,
                                                                 'domain'    => $domains
                                                             ]);

                    dd($data);

                    if($data['status'] == 'success') {
                        if(isset($data['data']) && isset($data['data']['MAP']) && isset($data['data']['MAP']['@attributes'])) {
                            $jobSchedule->map_reference = $data['data']['MAP']['@attributes']['value'];
                            $jobSchedule->launch_date   = $data['data']['MAP']['HEADER']['KEY'][2];
                            $jobSchedule->status        = $data['data']['MAP']['HEADER']['KEY'][9];
                            $jobSchedule->save();

                            $mapHeaderDetails = $jobSchedule->mapHeaderDetails()->create([
                                                                                             'user_name'        => $data['data']['MAP']['HEADER']['KEY'][0],
                                                                                             'company'          => $data['data']['MAP']['HEADER']['KEY'][1],
                                                                                             'map_display_date' => $data['data']['MAP']['HEADER']['KEY'][2],
                                                                                            // 'map_date'         => $data['data']['MAP']['HEADER']['KEY'][2],
                                                                                             'title'            => $data['data']['MAP']['HEADER']['KEY'][3],
                                                                                             'target'           => $data['data']['MAP']['HEADER']['KEY'][5],
                                                                                             'nbhost_total'     => $data['data']['MAP']['HEADER']['KEY'][5],
                                                                                            // 'duration'         => $data['data']['MAP']['HEADER']['KEY'][6],
                                                                                             'scan_host'        => $data['data']['MAP']['HEADER']['KEY'][7],
                                                                                             'report_type'      => $data['data']['MAP']['HEADER']['KEY'][9],
                                                                                             'map_status'       => $data['data']['MAP']['HEADER']['KEY'][9],
                                                                                             'map_options'      => $data['data']['MAP']['HEADER']['KEY'][10]
                                                                                         ]);

                            if(isset($data['data']['MAP']['IP'])) {
                                foreach($data['data']['MAP']['IP'] as $ipDetails) {

                                    $discoveryMethods = [];
                                    if(isset($ipDetails['DISCOVERY'])){
                                        foreach($ipDetails['DISCOVERY'] as $discoveryMethodDetails){
                                            if(isset($discoveryMethodDetails['@attributes'])){
                                                $discoveryMethods[] = $discoveryMethodDetails['@attributes']['method'];
                                            }
                                        }
                                    }

                                    $portLists        = [];
                                    if(isset($ipDetails['PORT'])){
                                        foreach($ipDetails['PORT'] as $portValueDetails){
                                            if(isset($portValueDetails['@attributes'])){
                                                $portLists[] = $portValueDetails['@attributes']['value'];
                                            }
                                        }
                                    }

                                    $linkValues       = [];
                                    if(isset($ipDetails['LINK'])){
                                        foreach($ipDetails['LINK'] as $linkValueDetails){
                                            if(isset($linkValueDetails['@attributes'])){
                                                $linkValues[] = $linkValueDetails['@attributes']['value'];
                                            }
                                        }
                                    }

                                    $jobSchedule->mapIpDetails()->create([
                                                                             'map_header_detail_id'  => $mapHeaderDetails->id,
                                                                             'ip_address'            => isset($ipDetails['@attributes']['value']) ? $ipDetails['@attributes']['value'] : null,
                                                                             'ip_name'               => isset($ipDetails['@attributes']['name']) ? $ipDetails['@attributes']['name'] : null,
                                                                             'ip_type'               => isset($ipDetails['@attributes']['type']) ? $ipDetails['@attributes']['type'] : null,
                                                                             'ip_os'                 => isset($ipDetails['@attributes']['os']) ? $ipDetails['@attributes']['os'] : null,
                                                                             'ip_account'            => isset($ipDetails['@attributes']['account']) ? $ipDetails['@attributes']['account'] : null,
                                                                             'ip_netbios'            => isset($ipDetails['@attributes']['netbios']) ? $ipDetails['@attributes']['netbios'] : null,
                                                                             'discovery_method_list' => (count($discoveryMethods) > 0) ? implode(',', $discoveryMethods) : null,
                                                                             'port_list'             => (count($portLists) > 0) ? implode(',', $portLists) : null,
                                                                             'link_value'            => (count($linkValues) > 0) ? implode(',', $linkValues) : null
                                                                         ]);
                                }
                            }


                        }
                    }

                    $return = [
                        'status'      => 'success',
                        'message'     => 'Domain scan launched successfully.',
                        'data'        => $data,
                        'status_code' => 201
                    ];
                }
            }

            return response()->json($return, 201);
        }
    }
