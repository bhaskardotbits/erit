
@section('content')
    <div class="main">
        <div class="heading-actions">
            <div class="wrapper heading-wrapper">
                <h1 class="pull-left"><a href="{{ url('/dashboard') }}" class="btn btn-default btn-circle"><i
                                class="fa fa-home"></i></a> Change Password </h1>
                <div class="pull-right">
                    <ol class="breadcrumb mb-0">
                        <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                        <li><a href="{{ url('/admin-profile') }}">Profile</a></li>
                        <li class="active"><a href="{{ url('/admin-change-password') }}">Change Password</a></li>
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
                                        <h4 class="panel-title">Change Password</h4>
                                    </div>
                                    <div id="eccform_summary" class="panel-collapse collapse in" role="tabpanel"
                                         aria-labelledby="headingOne">

                                        <div class="panel-body">
                                            <form role="form" method="POST"action="{{ url('/admin-change-password') }}">
                                                {{ csrf_field() }}
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <label>Current Password</label>
                                                                <input id="old_password" type="password" class="form-control"
                                                                       name="old_password" placeholder="Current Password"
                                                                       value="{{ old('old_password')  }}"  required>
                                                                @if ($errors->has('old_password'))
                                                                    <span class="help-block">
                                                                    <strong>{{ $errors->first('old_password') }}</strong>
                                                                </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <label>New Password</label>
                                                                <input id="new_password" type="password" class="form-control"
                                                                       name="new_password" placeholder="New Password"
                                                                       value="{{ old('employee_id')  }}" required>
                                                                @if ($errors->has('new_password'))
                                                                    <span class="help-block">
                                                                    <strong>{{ $errors->first('new_password') }}</strong>
                                                                </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <label>Confirm New Password</label>
                                                                <input id="confirm_password" type="password" class="form-control"
                                                                       name="confirm_password" placeholder="Confirm New Password"
                                                                       value="{{ old('confirm_password')  }}" required>
                                                                @if ($errors->has('confirm_password'))
                                                                    <span class="help-block">
                                                                    <strong>{{ $errors->first('confirm_password') }}</strong>
                                                                </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right">
                                                            <button type="submit"
                                                                    class="btn btn-primary mar-l10" rel="">Update
                                                            </button>
                                                            <a href="{{ url('/dashboard') }}" type="button" class="btn btn-danger mar-l10">Cancel</a>
                                                        </div>
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