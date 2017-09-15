
@section('content')
    <div class="main">
        <div class="heading-actions">
            <div class="wrapper heading-wrapper">
                <h1 class="pull-left"><a href="{{ url('/dashboard') }}" class="btn btn-default btn-circle"><i
                                class="fa fa-home"></i></a> Admin Module</h1>
                <div class="pull-right">
                    <ol class="breadcrumb mb-0">
                        <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                        <li><a href="{{ url('/admin-module') }}">Admin Module</a></li>
                        <li class="active" ><a href="{{ url('/admin-module/account-settings') }}">Account Settings</a> </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row mar-b10">
            <div class="col-md-12">
                <div class="tabs_wrps">

                    @include('admin-module.navigation-bar')

                    <div class="tab-content">
                        <div role="tabpanel" >
                            <div class="row mar-b10">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right">
                                    <a class="btn btn-primary mar-l10" href="{{ url('/admin-module/account-settings/add-account') }}">Add New Account</a> </div>
                            </div>
                            <div class="panel-group accordion_wrps" id="eccrequestform_accrd" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default submitapproval">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title"> Accounts List</h4>
                                    </div>
                                    <div id="eccform_summary" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            <table class="table table-bordered table-hover">
                                                <thead>
                                                <tr>
                                                    <th class="text-left">Username</th>
                                                    <th class="text-left">Name</th>
                                                    <th class="text-left">Modules</th>
                                                    <th class="text-left">Email</th>
                                                    <th class="text-left">Company Name</th>
                                                    <th class="text-left">Website</th>
                                                    <th class="text-left">Year found</th>
                                                    <th class="text-left">Company Type</th>
                                                    <th class="text-left">Company Size</th>
                                                    <th class="text-left">Edit</th>
                                                </tr>
                                                <?php foreach($accounts as $account){ ?>
                                                <tr>
                                                    <td valign="middle"><?=$account->mainUser->login_name;?></td>
                                                    <td valign="middle"><?=$account->mainUser->first_name. ' ' . $account->mainUser->last_name;?></td>
                                                    <td valign="middle">
                                                        <?php if($account->accountModules){ ?>
                                                        <ul>
                                                    <?php foreach($account->accountModules as $accountModule){ ?>
                                                        <li><?=$accountModule->module->name;?></li>
                                                        <?php } ?>
                                                        </ul>
                                                            <?php } ?>
                                                    </td>
                                                    <td valign="middle"><?=$account->mainUser->email;?></td>
                                                    <td valign="middle"><?=$account->company_name;?></td>
                                                    <td valign="middle"><?=$account->website;?></td>
                                                    <td valign="middle"><?=$account->year_found;?></td>
                                                    <td valign="middle"><?=$account->company_type;?></td>
                                                    <td valign="middle"><?=$account->company_size;?></td>
                                                    <td align="center" valign="middle"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#create_user_modal_edit"><i class="fa fa-pencil"></i></button>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                                </thead>
                                            </table>

                                            <div class="row mar-b20">
                                                <div class="col-md-4"></div>
                                                <div class="col-md-4">
                                                    <ul class="pagination mar-t0 mar-b0 pull-left">
                                                        <li><span><i class="fa fa-step-backward"></i></span>
                                                        </li>
                                                        <li><span><i class="fa fa-backward"></i></span>
                                                        </li>
                                                        <li><span class="noborder">Page</span><a href="#">1</a>
                                                        </li>
                                                        <li><span class="noborder">of 12</span>
                                                        </li>
                                                        <li><span><i class="fa fa-forward"></i></span>
                                                        </li>
                                                        <li><span><i class="fa fa-step-forward"></i></span>
                                                        </li>

                                                    </ul>
                                                    <div class="col-md-2">
                                                        <select>
                                                            <option>10</option>
                                                            <option>20</option>
                                                            <option>30</option>
                                                            <option>40</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection