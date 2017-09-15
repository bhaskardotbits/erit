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
                        <li><a href="{{ url('/admin-module/user-configuration') }}">User Configuration</a></li>
                        <li><a href="{{ url('/admin-module/user-configuration/mssp-configuration') }}">MSSP
                                Configuration</a></li>
                        <li class="active"><a
                                    href="{{ url('/admin-module/user-configuration/mssp-configuration/add-user') }}">Add
                                New User</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row mar-b10">
            <div class="col-md-12">
                <div class="tabs_wrps">

                    @include('admin-module.navigation-bar')

                    <div class="tab-content">
                        <div role="tabpanel">
                            <div class="row mar-b10">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right">
                                    <a class="btn btn-primary mar-l10" href="#">Connect to
                                        HR</a>
                                    <a class="btn btn-primary mar-l10"
                                       href="{{ url('/admin-module/user-configuration/mssp-configuration/add-user') }}">Add
                                        New
                                        User</a></div>
                            </div>
                            <div class="panel-group accordion_wrps" id="eccrequestform_accrd" role="tablist"
                                 aria-multiselectable="true">
                                <div class="panel panel-default submitapproval">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title"> Create New User with Role</h4>
                                    </div>
                                    <div id="eccform_summary" class="panel-collapse collapse in" role="tabpanel"
                                         aria-labelledby="headingOne">

                                        <div class="panel-body">

                                            <form role="form" method="POST"
                                                  action="{{ url('/admin-module/user-configuration/mssp-configuration/add-user') }}">
                                                {{ csrf_field() }}
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <h3 class="mar-t0 sub-heading">Employee Info </h3>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group{{ $errors->has('employee_id') ? ' has-error' : '' }}">
                                                            <label class="control-label">Employee Id</label>
                                                            <input id="employee_id" type="text" class="form-control"
                                                                   name="employee_id" placeholder="Employee Id"
                                                                   value="{{ old('employee_id') }}" required>
                                                            @if ($errors->has('employee_id'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('employee_id') }}</strong>
                                                                </span>
                                                            @endif

                                                        </div>
                                                    </div>


                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                                            <label class="control-label">First Name</label>
                                                            <input id="first_name" type="text" class="form-control"
                                                                   name="first_name" placeholder="First name"
                                                                   value="{{ old('first_name') }}" required>
                                                            @if ($errors->has('first_name'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('first_name') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                                            <label class="control-label">Last Name</label>
                                                            <input id="last_name" type="text" class="form-control"
                                                                   name="last_name" placeholder="Last name"
                                                                   value="{{ old('last_name') }}" required>
                                                            @if ($errors->has('last_name'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('last_name') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group{{ $errors->has('address1') ? ' has-error' : '' }}">
                                                            <label class="control-label">Address 1</label>
                                                            <input id="address1" type="text" class="form-control"
                                                                   name="address1" placeholder="Address 1"
                                                                   value="{{ old('address1') }}" required>
                                                            @if ($errors->has('address1'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('address1') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group{{ $errors->has('address2') ? ' has-error' : '' }}">
                                                            <label class="control-label">Address 2</label>
                                                            <input id="address2" type="text" class="form-control"
                                                                   name="address2" placeholder="Address 2"
                                                                   value="{{ old('address2') }}">
                                                            @if ($errors->has('address2'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('address2') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                                                            <label class="control-label">City</label>
                                                            <input id="city" type="text" class="form-control"
                                                                   name="city" placeholder="City"
                                                                   value="{{ old('city') }}" required>
                                                            @if ($errors->has('city'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('city') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                                                            <label class="control-label">Office Location State</label>
                                                            <input id="state" type="text" class="form-control"
                                                                   name="state" placeholder="Office Location State"
                                                                   value="{{ old('state') }}" required>
                                                            @if ($errors->has('state'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('state') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                                                            <label class="control-label">Office Location Country</label>
                                                            <input id="country" type="text" class="form-control"
                                                                   name="country" placeholder="Office Location Country"
                                                                   value="{{ old('country') }}" required>
                                                            @if ($errors->has('country'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('country') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                                            <label class="control-label">Phone</label>
                                                            <input id="phone" type="text" class="form-control"
                                                                   name="phone" placeholder="Phone"
                                                                   value="{{ old('phone') }}" required>
                                                            @if ($errors->has('phone'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('phone') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                            <label class="control-label">Email Address</label>
                                                            <input id="email" type="email" class="form-control"
                                                                   name="email" placeholder="Email Address"
                                                                   value="{{ old('email') }}" required>
                                                            @if ($errors->has('email'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('email') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group{{ $errors->has('job_title') ? ' has-error' : '' }}">
                                                            <label class="control-label">Job title</label>
                                                            <input id="job_title" type="text" class="form-control"
                                                                   name="job_title" placeholder="Job title"
                                                                   value="{{ old('job_title') }}" required>
                                                            @if ($errors->has('job_title'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('job_title') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>


                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <h3 class="mar-t0 sub-heading">Access Module Info  </h3>
                                                    </div>


                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group{{ $errors->has('module') ? ' has-error' : '' }}">
                                                            <label class="control-label">Module</label>
                                                            <select class="form-control" id="module" name="module">
                                                                <?php foreach($user->account->accountModules as $accountModule){ ?>
                                                                <option value="<?=$accountModule->module->id;?>" {{ old('module') == $accountModule->module->id ? ' selected="selected"' : '' }}><?=$accountModule->module->name;?></option>
                                                                <?php } ?>
                                                            </select>
                                                            @if ($errors->has('module'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('module') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <a href="javascript:void(0);" class="add-module">Add</a>
                                                    </div>

                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 js-submodules-list">

                                                    </div>




                                                    {{--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Module</label>
                                                            <select class="form-control modules_dropdown">
                                                                <option value="Audit Dashboard">Audit Dashboard</option>
                                                                <option value="Cyber Risk underwriting Dashboard">Cyber Risk
                                                                    underwriting Dashboard
                                                                </option>
                                                                <option value="Firewall Exception Request">Firewall
                                                                    Exception Request
                                                                </option>
                                                                <option value="Governance Dashboard">Governance Dashboard
                                                                </option>
                                                                <option value="Global Risk Dashboard">Global Risk
                                                                    Dashboard
                                                                </option>
                                                                <option value="Identity &amp; Access Management">Identity
                                                                    &amp; Access Management
                                                                </option>
                                                                <option value="Incident Management">Incident Management
                                                                </option>
                                                                <option value="Integrated Threat Management">Integrated
                                                                    Threat Management
                                                                </option>
                                                                <option value="Outage Dashboard">Outage Dashboard</option>
                                                                <option value="Risk Register">Risk Register</option>
                                                                <option value="Risk Event">Risk Event</option>
                                                                <option value="Remediation Dashboard">Remediation
                                                                    Dashboard
                                                                </option>
                                                                <option value="Termination Dashboard">Termination
                                                                    Dashboard
                                                                </option>
                                                                <option value="Top 10 IT risk heatmap">Top 10 IT risk
                                                                    heatmap
                                                                </option>
                                                                <option value="Assets Management">Assets Management</option>
                                                                <option value="Vendor risk Management">Vendor risk
                                                                    Management
                                                                </option>
                                                                <option value="Vulnerability Management Dashboard">
                                                                    Vulnerability Management Dashboard
                                                                </option>
                                                                <option value="Compliance Management Dashboard">Compliance
                                                                    Management Dashboard
                                                                </option>
                                                                <option value="Custom WorkFlow">Custom WorkFlow</option>
                                                                <option value="Custom Assessment">Custom Assessment</option>
                                                                <option value="Survey">Survey</option>
                                                                <option value="FICO Risk Score">FICO Risk Score</option>
                                                                <option value="Rules Engine">Rules Engine</option>
                                                                <option value="PCI-DSS Assessment">PCI-DSS Assessment
                                                                </option>
                                                                <option value="Custom Dashboard">Custom Dashboard</option>
                                                                <option value="Face Recognition Dashboard">Face Recognition
                                                                    Dashboard
                                                                </option>
                                                                <option value="Cloud Security Assessment">Cloud Security
                                                                    Assessment
                                                                </option>
                                                                <option value="MSSP">MSSP</option>
                                                            </select>
                                                        </div>
                                                    </div>


                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Sub Module</label>

                                                            <div class="please_select_module">
                                                                <div class="form-control">Please select module</div>
                                                            </div>

                                                        </div>
                                                    </div>--}}

                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <h3 class="mar-t0 sub-heading">Justification and Approval Info   </h3>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group{{ $errors->has('role_id') ? ' has-error' : '' }}">
                                                            <label class="control-label">User Role</label>
                                                            <select class="form-control" id="role_id" name="role_id">
                                                                <?php foreach($roles as $role){ ?>
                                                                <option value="<?=$role->id;?>" {{ old('role_id') == $role->id ? ' selected="selected"' : '' }}><?=$role->name;?></option>
                                                                <?php } ?>
                                                            </select>
                                                            @if ($errors->has('role_id'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('role_id') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>




                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group{{ $errors->has('dashboard_page') ? ' has-error' : '' }}">
                                                            <label class="control-label">Dashboard Page</label>
                                                            <input id="dashboard_page" type="text" class="form-control"
                                                                   name="dashboard_page" placeholder="Dashboard Page"
                                                                   value="{{ old('dashboard_page') }}">
                                                            @if ($errors->has('dashboard_page'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('dashboard_page') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group{{ $errors->has('business_justification') ? ' has-error' : '' }}">
                                                            <label class="control-label">Business Justification</label>
                                                            <input id="business_justification" type="text" class="form-control"
                                                                   name="business_justification" placeholder="Business Justification"
                                                                   value="{{ old('business_justification') }}">
                                                            @if ($errors->has('business_justification'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('business_justification') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group{{ $errors->has('manager_name') ? ' has-error' : '' }}">
                                                            <label class="control-label">Manager Name</label>
                                                            <input id="manager_name" type="text" class="form-control"
                                                                   name="manager_name" placeholder="Manager Name"
                                                                   value="{{ old('manager_name') }}">
                                                            @if ($errors->has('manager_name'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('manager_name') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group{{ $errors->has('manager_email') ? ' has-error' : '' }}">
                                                            <label class="control-label">Manager Email</label>
                                                            <input id="manager_email" type="text" class="form-control"
                                                                   name="manager_email" placeholder="Manager Email"
                                                                   value="{{ old('manager_email') }}">
                                                            @if ($errors->has('manager_email'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('manager_email') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    {{--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Business Unit</label>
                                                            <select class="form-control">
                                                                <option>BU 1</option>
                                                                <option>BU 2</option>
                                                                <option>BU 3</option>
                                                                <option>BU 4</option>
                                                                <option>BU 5</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Access Status</label>
                                                            <input type="text" class="form-control"/>
                                                        </div>
                                                    </div>--}}

                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group{{ $errors->has('start_date') ? ' has-error' : '' }}">
                                                            <label class="control-label">Access Start Date</label>
                                                            <input id="start_date" type="text" class="form-control"
                                                                   name="start_date" placeholder="Access Start Date"
                                                                   value="{{ old('start_date') }}" required>
                                                            @if ($errors->has('start_date'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('start_date') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group{{ $errors->has('end_date') ? ' has-error' : '' }}">
                                                            <label class="control-label">Access End Date</label>
                                                            <input id="end_date" type="text" class="form-control"
                                                                   name="end_date" placeholder="Access End Date"
                                                                   value="{{ old('end_date') }}">
                                                            @if ($errors->has('end_date'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('end_date') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-group{{ $errors->has('comments') ? ' has-error' : '' }}">
                                                            <label class="control-label">Comments</label>
                                                            <textarea id="comments" class="form-control"
                                                                   name="comments" placeholder="Comments"
                                                                      rows="5">{{ old('end_date') }}</textarea>
                                                            @if ($errors->has('comments'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('comments') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right">
                                                        <button type="submit"
                                                                class="btn btn-primary mar-l10" rel="">Submit
                                                        </button>
                                                        <a href="{{ url('/admin-module/user-configuration/mssp-configuration') }}"
                                                           class="btn btn-danger mar-l10" rel="">Cancel</a>
                                                    </div>
                                                </div>

                                            </form>


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

    var options = {
        data:  <?=json_encode($dotbits_users);?>,

        getValue: "employee_id",

        template: {
            type: "custom",
            method: function(value, item) {
                return value + " | " + item.first_name + " " + item.last_name;
            }
        },

        list: {
            match: {
                enabled: true
            },

            onSelectItemEvent: function() {
                var selectedData = $("#employee_id").getSelectedItemData();

                $("#first_name").val(selectedData.first_name);
                $("#last_name").val(selectedData.last_name);
                $("#address1").val(selectedData.address1);
                $("#address2").val(selectedData.address2);
                $("#city").val(selectedData.city);
                $("#state").val(selectedData.state);
                $("#country").val(selectedData.country);
                $("#email").val(selectedData.email);
                $("#phone").val(selectedData.phone);
                $("#job_title").val(selectedData.job_title);
                $("#manager_name").val(selectedData.manager_first_name + ' ' + selectedData.manager_last_name);
                $("#manager_email").val(selectedData.manager_email);
            }
        }
    };

    $("#employee_id").easyAutocomplete(options);


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