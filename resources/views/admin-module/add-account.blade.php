
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
                        <li><a href="{{ url('/admin-module/account-settings') }}">Account Settings</a></li>
                        <li class="active"><a
                                    href="{{ url('/admin-module/account-settings/add-account') }}">Add
                                New Account</a></li>
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

                            <div class="panel-group accordion_wrps" id="eccrequestform_accrd" role="tablist"
                                 aria-multiselectable="true">
                                <div class="panel panel-default submitapproval">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title"> Create New Account</h4>
                                    </div>
                                    <div id="eccform_summary" class="panel-collapse collapse in" role="tabpanel"
                                         aria-labelledby="headingOne">

                                        <div class="panel-body">

                                            <form role="form" method="POST"action="{{ url('/admin-module/account-settings/add-account') }}">
                                                {{ csrf_field() }}
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <h3 class="mar-t0 sub-heading">Company Info </h3>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group{{ $errors->has('company_name') ? ' has-error' : '' }}">
                                                            <label class="control-label">Company Name</label>
                                                            <input id="company_name" type="text" class="form-control"
                                                                   name="company_name" placeholder="Company name"
                                                                   value="{{ old('company_name') }}" required>
                                                            @if ($errors->has('company_name'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('company_name') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
                                                            <label class="control-label">Website</label>
                                                            <input id="website" type="text" class="form-control"
                                                                   name="website" placeholder="Website"
                                                                   value="{{ old('website') }}" required>
                                                            @if ($errors->has('website'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('website') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group{{ $errors->has('year_found') ? ' has-error' : '' }}">
                                                            <label class="control-label">Year Found</label>
                                                            <input id="year_found" type="text" class="form-control"
                                                                   name="year_found" placeholder="Year Found"
                                                                   value="{{ old('year_found') }}" required>
                                                            @if ($errors->has('year_found'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('year_found') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group{{ $errors->has('company_type') ? ' has-error' : '' }}">
                                                            <label class="control-label">Company Type</label>
                                                            <input id="company_type" type="text" class="form-control"
                                                                   name="company_type" placeholder="Company Type"
                                                                   value="{{ old('company_type') }}" required>
                                                            @if ($errors->has('company_type'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('company_type') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group{{ $errors->has('company_size') ? ' has-error' : '' }}">
                                                            <label class="control-label">Company Size</label>
                                                            <input id="company_size" type="text" class="form-control"
                                                                   name="company_size" placeholder="Company Size"
                                                                   value="{{ old('company_size') }}" required>
                                                            @if ($errors->has('company_size'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('company_size') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group{{ $errors->has('no_of_asstes') ? ' has-error' : '' }}">
                                                            <label class="control-label">No Of Asstes</label>
                                                            <input id="no_of_asstes" type="text" class="form-control"
                                                                   name="no_of_asstes" placeholder="Company Size"
                                                                   value="{{ old('no_of_asstes') }}" required>
                                                            @if ($errors->has('no_of_asstes'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('No Of Asstes') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <h3 class="mar-t0 sub-heading">Responsible Person Info </h3>
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
                                                                <?php foreach($modules as $module){ ?>
                                                                <option value="<?=$module->id;?>"><?=$module->name;?></option>
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