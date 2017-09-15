
@section('content')
    <div class="main">
        <div class="heading-actions">
            <div class="wrapper heading-wrapper">
                <h1 class="pull-left"><a href="{{ url('/dashboard') }}" class="btn btn-default btn-circle"><i
                                class="fa fa-home"></i></a> Admin Module</h1>
                <div class="pull-right">
                    <ol class="breadcrumb mb-0">
                        <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                        <li class="active"><a href="{{ url('/admin-profile') }}">Profile</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row mar-b10">
            <div class="col-md-12">
                <div class="tabs_wrps">

                   {{-- @include('admin-module.navigation-bar')--}}

                    <div class="tab-content">
                        <div role="tabpanel">

                            <div class="panel-group accordion_wrps" id="eccrequestform_accrd" role="tablist"
                                 aria-multiselectable="true">
                                <div class="panel panel-default submitapproval">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">Profile</h4>
                                    </div>
                                    <div id="eccform_summary" class="panel-collapse collapse in" role="tabpanel"
                                         aria-labelledby="headingOne">

                                        <div class="panel-body">
                                            <form role="form" method="POST"action="{{ url('/admin-profile') }}">
                                                {{ csrf_field() }}
                                            <div class="panel-body">

                                                <div class="row">
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                        <div class="profile_imagewrps">
                                                            <img src="images/profilepic_img_lg.png" style="width: 100%;" class="img-responsive"/>
                                                            <a href="javascript:" class="btn btn-primary btn-block">Upload a Photo</a>
                                                        </div>


                                                        <div class="clearfix mar-t20">
                                                            <ul class="list-unstyled">
                                                                <li><a href="{{ url('/admin-change-password') }}" class="btn btn-default btn-block mar-b10">Change Password</a></li>
                                                                <li><a href="reporting_hierarchy.php" class="btn btn-default btn-block mar-b10">Reporting Hierarchy</a></li>
                                                                <li><a href="mssp_dashboard2.php" class="btn btn-default btn-block mar-b10">Module Access</a></li>
                                                            </ul>

                                                        </div>
                                                    </div>

                                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">

                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group{{ $errors->has('employee_id') ? ' has-error' : '' }}">
                                                                    <label class="control-label">Employee Id<span class="req_mandatory">*</span></label>
                                                                    <input id="employee_id" type="text" class="form-control"
                                                                           name="employee_id" placeholder="Employee Id"
                                                                           value="{{ old('employee_id') ? old('employee_id') : $user->employee_id  }}" >
                                                                    @if ($errors->has('employee_id'))
                                                                        <span class="help-block">
                                                                    <strong>{{ $errors->first('employee_id') }}</strong>
                                                                </span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                                                    <label class="control-label">First Name<span class="req_mandatory">*</span></label>
                                                                    <input id="first_name" type="text" class="form-control"
                                                                           name="first_name" placeholder="First Name"
                                                                           value="{{ old('first_name') ? old('first_name') : $user->first_name }}" required>
                                                                    @if ($errors->has('first_name'))
                                                                        <span class="help-block">
                                                                    <strong>{{ $errors->first('first_name') }}</strong>
                                                                </span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                                                    <label class="control-label">Last Name<span class="req_mandatory">*</span></label>
                                                                    <input id="last_name" type="text" class="form-control"
                                                                           name="last_name" placeholder="Last Name"
                                                                           value="{{ old('last_name') ? old('last_name') : $user->last_name }}" required>
                                                                    @if ($errors->has('last_name'))
                                                                        <span class="help-block">
                                                                    <strong>{{ $errors->first('last_name') }}</strong>
                                                                </span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                                                                    <label class="control-label">Office state State<span class="req_mandatory">*</span></label>
                                                                    <input id="state" type="text" class="form-control"
                                                                           name="state" placeholder="Office state State"
                                                                           value="{{ old('state')  ? old('state') : $user->state }}" required>
                                                                    @if ($errors->has('state'))
                                                                        <span class="help-block">
                                                                    <strong>{{ $errors->first('state') }}</strong>
                                                                </span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                                                                    <label class="control-label">Office Location Country<span class="req_mandatory">*</span></label>
                                                                    <input id="country" type="text" class="form-control"
                                                                           name="country" placeholder="Office Location Country"
                                                                           value="{{ old('country')  ? old('country') : $user->country}}" required>
                                                                    @if ($errors->has('country'))
                                                                        <span class="help-block">
                                                                    <strong>{{ $errors->first('country') }}</strong>
                                                                </span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                                    <label class="control-label">Email<span class="req_mandatory">*</span></label>
                                                                    <input id="email" type="text" class="form-control"
                                                                           name="email" placeholder="Email"
                                                                           value="{{ old('email')  ? old('email') : $user->email}}" required>
                                                                    @if ($errors->has('email'))
                                                                        <span class="help-block">
                                                                    <strong>{{ $errors->first('email') }}</strong>
                                                                </span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                                                    <label class="control-label">Contact Number<span class="req_mandatory">*</span></label>
                                                                    <input id="phone" type="text" class="form-control"
                                                                           name="phone" placeholder="Contact Number"
                                                                           value="{{ old('phone') ? old('phone') : $user->phone }}" required>
                                                                    @if ($errors->has('phone'))
                                                                        <span class="help-block">
                                                                    <strong>{{ $errors->first('phone') }}</strong>
                                                                </span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group{{ $errors->has('job_title') ? ' has-error' : '' }}">
                                                                    <label class="control-label">Job title <span class="req_mandatory">*</span></label>
                                                                    <input id="job_title" type="text" class="form-control"
                                                                           name="job_title" placeholder="Job title "
                                                                           value="{{ old('job_title') ? old('job_title') : $user->job_title }}" required>
                                                                    @if ($errors->has('job_title'))
                                                                        <span class="help-block">
                                                                    <strong>{{ $errors->first('job_title') }}</strong>
                                                                </span>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group{{ $errors->has('job_title') ? ' has-error' : '' }}">
                                                                    <label class="control-label">Role Type <span class="req_mandatory">*</span></label>
                                                                        <select id="role_id"  class="form-control"  name="role_id"
                                                                                 required>
                                                                            <?php foreach($roles as $role){ if($user->role_id == $role->id) {?>
                                                                            <option value="<?=$role->id;?>" {{ $user->role_id == $role->id ? ' selected="selected"' : '' }}><?=$role->name;?></option>
                                                                            <?php }} ?>
                                                                        </select>
                                                                </div>
                                                            </div>


                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group{{ $errors->has('manager_name') ? ' has-error' : '' }}">
                                                                    <label class="control-label">Manager Name<span class="req_mandatory">*</span></label>
                                                                    <input id="manager_name" type="text" class="form-control"
                                                                           name="manager_name" placeholder="Manager Name"
                                                                           value="{{ old('manager_name') ? old('manager_name') : $user->manager_name }}" required>
                                                                    @if ($errors->has('manager_name'))
                                                                        <span class="help-block">
                                                                    <strong>{{ $errors->first('manager_name') }}</strong>
                                                                </span>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group{{ $errors->has('manager_email') ? ' has-error' : '' }}">
                                                                    <label class="control-label">Manager Email<span class="req_mandatory">*</span></label>
                                                                    <input id="manager_email" type="text" class="form-control"
                                                                           name="manager_email" placeholder="Manager Email"
                                                                           value="{{ old('manager_email') ? old('manager_email') : $user->manager_email }}" required>
                                                                    @if ($errors->has('manager_email'))
                                                                        <span class="help-block">
                                                                    <strong>{{ $errors->first('manager_email') }}</strong>
                                                                </span>
                                                                    @endif
                                                                </div>
                                                            </div>





                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group{{ $errors->has('business_unit_id') ? ' has-error' : '' }}">
                                                                    <label class="control-label">Business Unit<span class="req_mandatory">*</span></label>
                                                                    <select id="business_unit_id"  class="form-control"      name="business_unit_id"                                                                     name="business_unit_id" placeholder="Business Unit"
                                                                            value="{{ old('business_unit_id') ? old('business_unit_id') : $user->business_unit_id }}" >
                                                                        <?php foreach($businessUnits as $businessUnit){ ?>
                                                                        <option value="<?=$businessUnit->id;?>" {{ old('business_unit_id') == $businessUnit->id ? ' selected="selected"' : '' }}><?=$businessUnit->name;?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                    @if ($errors->has('business_unit_id'))
                                                                        <span class="help-block">
                                                                    <strong>{{ $errors->first('business_unit_id') }}</strong>
                                                                </span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right">
                                                                <button type="submit"
                                                                        class="btn btn-primary mar-l10" rel="">Ok
                                                                </button>
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
        </div>
    </div>
@endsection


@section('extra-js')
    <script type="text/javascript">
        var loadedModules = [];

        $.ajaxSetup({headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'}});

        $(document).on('click', '.js-submodule-remove', function () {
            loadedModules.splice(loadedModules.indexOf($(this).data("id")), 1);
            $(this).closest("div.row").remove();
        });

        $(document).on('click', '.add-module', function () {
            var currentScope = this;
            var module_id = $("#module").val();

            if(loadedModules.indexOf(module_id) !== -1) {
                alert("Module is already added.")
            } else {

                $.ajax({
                    url: "{{ url('/admin-module/ajax-submodules-list') }}",
                    method: "POST",
                    data: {id: module_id },
                    beforeSend: function (xhr) {

                    }
                }).done(function (res) {

                    if(res.status == 'success'){

                        loadedModules.push(module_id);

                        var html = '<div class="row" id="module_block_' + res.data.id + '">';
                        html += '<div class="col-md-12"><h3>';
                        html += res.data.name;
                        html += '</h3>';
                        html += '<a class="btn btn-danger btn-remove pull-right js-submodule-remove" data-id="' + res.data.id + '"> X </a>';
                        html += '</div><div class="col-md-12"><div class="grpckbx_wrps mar-b20">';
                        $.each(res.data.submodules, function( index, submodule ) {
                            html += '<div class="sub_modules col-md-4">';
                            html += '<label for="modules_' + res.data.id + '_' + submodule.id + '" class="checkbox_squaremhs">';
                            html += '<input name="modules[' + res.data.id + '][' + submodule.id + ']" id="modules_' + res.data.id + '_' + submodule.id + '" type="checkbox"><span></span>' + submodule.name;
                            html += '</label>';
                            html += '</div>';
                        });
                        html += '</div></div></div>';

                        $(".js-submodules-list").append(html);
                    }

                }).fail(function (jqXHR, textStatus) {

                });

            }
        });
    </script>
@endsection