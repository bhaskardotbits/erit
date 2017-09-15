
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
                        <li><a href="{{ url('/admin-module/user-configuration') }}">User Configuration</a> </li>
                        <li class="active" ><a href="{{ url('/admin-module/user-configuration/mssp-configuration') }}">MSSP Configuration</a> </li>
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
                                    <a class="btn btn-primary mar-l10" href="#">Connect to HR</a>
                                    <a class="btn btn-primary mar-l10" href="{{ url('/admin-module/user-configuration/mssp-configuration/add-user') }}">Add New User</a> </div>
                            </div>
                            <div class="panel-group accordion_wrps" id="eccrequestform_accrd" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default submitapproval">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title"> Users List</h4>
                                    </div>
                                    <div id="eccform_summary" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            <div class="search">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <div class="form-group">
                                                            <input class="form-control" placeholder="By Name"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <div class="form-group">
                                                            <input class="form-control" placeholder="By BU"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                        <div class="form-group">
                                                            <button class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i> Search</button>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <table class="table table-bordered table-hover">
                                                <thead>
                                                <tr>
                                                    <th class="text-left">Employee Id</th>
                                                    <th class="text-left">Name</th>
                                                    <th class="text-left">Location</th>
                                                    <th class="text-left">Job Title</th>
                                                    <th class="text-left">Email</th>
                                                    <th class="text-left">Business Unit</th>
                                                    <th class="text-left">Access Status</th>
                                                    <th class="text-left">User Roles</th>
                                                    <th class="text-left">Access Start Date</th>
                                                    <th class="text-left">Access End Date</th>
                                                    <th class="text-left">Edit</th>
                                                </tr>
                                                <?php foreach($users as $user){ ?>
                                                <tr>
                                                    <td valign="middle"><?=$user->employee_id;?></td>
                                                    <td valign="middle"><?=$user->first_name. ' ' . $user->last_name;?></td>
                                                    <td valign="middle"><?=$user->city;?></td>
                                                    <td valign="middle"><?=$user->job_title;?></td>
                                                    <td valign="middle"><?=$user->email;?></td>
                                                    <td valign="middle"> - </td>
                                                    <td align="center" valign="middle"><?=$user->is_active == 1 ? 'Active' : 'In-active';?></td>
                                                    <td align="center" valign="middle"><?=$user->role->name;?></td>
                                                    <td align="center" valign="middle"><?=$user->start_date;?></td>
                                                    <td align="center" valign="middle"><?=$user->end_date;?></td>
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
