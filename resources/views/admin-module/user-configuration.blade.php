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
                        <li class="active" ><a href="{{ url('/admin-module/user-configuration') }}">User Configuration</a> </li>
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
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">

                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 basic-pkg advanced-pkg professional-pkg enterprise-pkg disabled_dash">
                                            <div class="dash_bxblock clr_blue dashbx_sm">
                                                <a href="#"><i class="fa fa-file-text-o"></i>
                                                    <span>Audit Configuration</span></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 basic-pkg advanced-pkg professional-pkg enterprise-pkg disabled_dash">
                                            <div class="dash_bxblock clr_blue dashbx_sm">
                                                <a href="#"><i class="fa fa-lock"></i>
                                                    <span>Cyber Risk underwriting Configuration</span></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 advanced-pkg professional-pkg enterprise-pkg disabled_dash">
                                            <div class="dash_bxblock clr_blue dashbx_sm">
                                                <a href="#"><i class="fa fa-object-group"></i>
                                                    <span>Firewall Exception Request Configuration</span></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 basic-pkg advanced-pkg professional-pkg enterprise-pkg disabled_dash">
                                            <div class="dash_bxblock clr_blue dashbx_sm">
                                                <a href="#"><i class="fa fa-bank"></i>
                                                    <span>Governance Configuration</span></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 basic-pkg advanced-pkg professional-pkg enterprise-pkg disabled_dash">
                                            <div class="dash_bxblock clr_blue dashbx_sm">
                                                <a href="#"><i class="fa fa-globe"></i>
                                                    <span>Global Risk Configuration</span></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 basic-pkg advanced-pkg professional-pkg enterprise-pkg disabled_dash">
                                            <div class="dash_bxblock clr_blue dashbx_sm">
                                                <a href="#"><i class="fa fa-key"></i>
                                                    <span>Identity &amp; Access Management Configuration</span></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 basic-pkg advanced-pkg professional-pkg enterprise-pkg disabled_dash">
                                            <div class="dash_bxblock clr_blue dashbx_sm">
                                                <a href="#"><i class="fa fa-exclamation-triangle "></i>
                                                    <span>Incident Mangement Configuration</span></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 basic-pkg advanced-pkg professional-pkg enterprise-pkg disabled_dash">
                                            <div class="dash_bxblock clr_blue dashbx_sm">
                                                <a href="#"><i class="fa fa-dashboard"></i>
                                                    <span>Integrated Threat Management Configuration</span></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 basic-pkg advanced-pkg professional-pkg enterprise-pkg disabled_dash">
                                            <div class="dash_bxblock clr_blue dashbx_sm">
                                                <a href="#"><img class="icon fa" src="{{ url('/images/outage-dashboard.png') }}" />
                                                    <span>Outage Configuration </span></a>
                                            </div>
                                        </div>

                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 advanced-pkg professional-pkg enterprise-pkg disabled_dash">
                                            <div class="dash_bxblock clr_blue dashbx_sm">
                                                <a href="#"><i class="fa fa-edit"></i>
                                                    <span>Risk Register Configuration</span></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 advanced-pkg professional-pkg enterprise-pkg disabled_dash">
                                            <div class="dash_bxblock clr_blue dashbx_sm">
                                                <a href="#"><i class="fa fa-calendar"></i>
                                                    <span>Risk Event Configuration</span></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 basic-pkg advanced-pkg professional-pkg enterprise-pkg disabled_dash">
                                            <div class="dash_bxblock clr_blue dashbx_sm">
                                                <a href="#"><i class="fa fa-medkit"></i>
                                                    <span>Remediation Configuration</span></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 basic-pkg advanced-pkg professional-pkg enterprise-pkg disabled_dash">
                                            <div class="dash_bxblock clr_blue dashbx_sm">
                                                <a href="#"><i class="fa fa-user-times"></i>
                                                    <span>Termination Configuration</span></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 basic-pkg advanced-pkg professional-pkg enterprise-pkg disabled_dash">
                                            <div class="dash_bxblock clr_blue dashbx_sm">
                                                <a href="#"><img class="icon fa" src="{{ url('/images/risk-heat-map.png') }}" />
                                                    <span>Top 10 IT risk heatmap Configuration</span></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 basic-pkg  advanced-pkg professional-pkg enterprise-pkg disabled_dash">
                                            <div class="dash_bxblock clr_blue dashbx_sm">
                                                <a href="#"><img class="icon fa" src="{{ url('/images/assets-icon.png') }}" />
                                                    <span>Assets Management Configuration</span></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 advanced-pkg professional-pkg enterprise-pkg disabled_dash">
                                            <div class="dash_bxblock clr_blue dashbx_sm">
                                                <a href="#"><i class="fa fa-user-secret"></i>
                                                    <span>Vendor risk Management Configuration</span></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 basic-pkg advanced-pkg professional-pkg enterprise-pkg disabled_dash">
                                            <div class="dash_bxblock clr_blue dashbx_sm">
                                                <a href="#"><i class="fa fa-shield "></i>
                                                    <span>Vulnerability  Management Configuration</span></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12  enterprise-pkg disabled_dash">
                                            <div class="dash_bxblock clr_blue dashbx_sm">
                                                <a href="#"><i class="fa fa-gavel "></i>
                                                    <span>Compliance Management Configuration</span></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 enterprise-pkg disabled_dash">
                                            <div class="dash_bxblock clr_blue dashbx_sm">
                                                <a href="#"><i class="fa fa-steam "></i>
                                                    <span>Custom WorkFlow Configuration</span></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 enterprise-pkg disabled_dash ">
                                            <div class="dash_bxblock clr_blue dashbx_sm">
                                                <a href="#"><i class="fa fa-file-text-o "></i>
                                                    <span>Custom Assessment Configuration</span></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 professional-pkg enterprise-pkg disabled_dash ">
                                            <div class="dash_bxblock clr_blue dashbx_sm">
                                                <a href="# "><i class="fa fa-bookmark-o "></i>
                                                    <span>Survey Configuration</span></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 enterprise-pkg disabled_dash ">
                                            <div class="dash_bxblock clr_blue dashbx_sm">
                                                <a href="# "><i class="fa fa-line-chart "></i>
                                                    <span>FICO Risk Score Configuration</span></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 enterprise-pkg disabled_dash ">
                                            <div class="dash_bxblock clr_blue dashbx_sm">
                                                <a href="#"><img class="icon fa" src="{{ url('/images/rules_engine_icon.png') }}" />
                                                    <span>Rules Engine Configuration</span></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 enterprise-pkg disabled_dash ">
                                            <div class="dash_bxblock clr_blue dashbx_sm">
                                                <a href="#"><img class="icon fa" src="{{ url('/images/pci-dss.png') }}" />
                                                    <span>PCI-DSS Assessment Configuration</span></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12  enterprise-pkg disabled_dash">

                                            <div class="dash_bxblock clr_blue dashbx_sm">
                                                <a href="#"><i class="fa  fa-edit"></i>
                                                    <span>Custom Dashboard Configuration</span></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12  enterprise-pkg disabled_dash">
                                            <div class="dash_bxblock clr_blue dashbx_sm">
                                                <a href="#"><img class="icon fa" src="{{ url('/images/face-recognition.png') }}" />
                                                    <span>Face Recognition Configuration</span></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12  enterprise-pkg disabled_dash">
                                            <div class="dash_bxblock clr_blue dashbx_sm">
                                                <a href="#"><i class="fa fa-cloud "></i>
                                                    <span>Cloud Security Assessment Configuration</span></a>
                                            </div>
                                        </div>

                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12  enterprise-pkg mssp-pkg">
                                            <div class="dash_bxblock clr_blue dashbx_sm">
                                                <a href="{{ url('/admin-module/user-configuration/mssp-configuration') }}" ><img class="icon fa" src="{{ url('/images/mssp_icon.png') }}" />
                                                    <span>MSSP Configuration</span></a>
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
