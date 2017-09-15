
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
                        <li class="active" ><a href="{{ url('/admin-module/general-settings') }}">General Settings</a> </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row mar-b10">
            <div class="col-md-12">
                <div class="tabs_wrps">

                    @include('admin-module.navigation-bar')

                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="admin_dashboard_main">
                            <div class="row">
                                <div> Coming soon...</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection