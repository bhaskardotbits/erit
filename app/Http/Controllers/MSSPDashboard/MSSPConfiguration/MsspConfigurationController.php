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


            if($request->method() == 'POST') {
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

                   if($data['status'] == 'success') {
                        $jobSchedule->map_reference   = $data['data']['MAP']['@attributes']['value'];
                        $jobSchedule->launch_date = $data['data']['MAP']['HEADER']['KEY'][2];
                        $jobSchedule->status      = $data['data']['MAP']['HEADER']['KEY'][9];
                        $jobSchedule->save();
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
