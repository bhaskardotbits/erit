@extends('layouts.main')

@section('content')
    <!-- content end here -->
    <!-- main start here -->
    <div class="main">
        <div class="heading-actions">
            <div class="wrapper heading-wrapper">
                <h1 class="pull-left" data-toggle="tooltip"><a href="{{ url('/dashboard') }}"
                                                               class="btn btn-default btn-circle"><i
                                class="fa fa-home"></i></a> Enterprise Risk Intelligence Tool</h1>

                <div class="pull-right">
                    <ol class="breadcrumb mb-0">
                        <li><a href="dashboard.php"></a></li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="errsdes_bxblk clr_02">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"><img
                                    class="animated bounceIn icon fa img-responsive dashboard-icon"
                                    src="images/attacks-icon.png"/>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">

                            <span class="errsblk_count">200 Attacks</span>
                            <div class="errsblk_desc">Average number of successful cyber attacks</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="errsdes_bxblk clr_03">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"><img
                                    class="animated bounceIn icon fa img-responsive dashboard-icon"
                                    src="images/profit-growth-icon.png"/>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <span class="errsblk_count">$11.56 Million</span>
                            <div class="errsblk_desc">Average annualized cost of a successful cyber attack</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="errsdes_bxblk clr_04">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"><img
                                    class="animated bounceIn icon fa img-responsive dashboard-icon"
                                    src="images/clock-day-icon.png"/></div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <span class="errsblk_count">32 Days</span>
                            <div class="errsblk_desc">Average time to resolve a cyber attack</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="errsdes_bxblk clr_05">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"><img
                                    class="animated bounceIn icon fa img-responsive dashboard-icon"
                                    src="images/increase-icon.png"/>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <span class="errsblk_count">33% Increase</span>
                            <div class="errsblk_desc">Net increase in time to remediate attack over the past year</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="panel-group accordion_wrps">
                    <div class="panel panel-default">
                        <div id="tab_project01" class="panel-collapse collapse in" role="tabpanel"
                             aria-labelledby="headingOne">
                            <div class="panel-body">
                                <div class="row">
                                    <?php if(in_array(Auth::user()->role_id, [1,2])){ ?>
                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 basic-pkg advanced-pkg professional-pkg enterprise-pkg mssp-pkg">
                                        <div class="dash_bxblock clr_blue",>
                                            <a href="{{ url('/admin-module') }}"><img class="icon fa"
                                                                             src="images/admin-icon.png"/>
                                                <span>Admin Module</span></a>
                                        </div>
                                    </div>
                                        <?php } ?>
                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 basic-pkg advanced-pkg professional-pkg enterprise-pkg disabled_dash">
                                        <div class="dash_bxblock clr_deeporange">
                                            <a href="audit_dashboard.php"><i class="fa fa-file-text-o"></i>
                                                <span>Audit Dashboard</span></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 basic-pkg advanced-pkg professional-pkg enterprise-pkg disabled_dash">
                                        <div class="dash_bxblock clr_red">
                                            <a href="urp_dashboard.php"><i class="fa fa-lock"></i>
                                                <span>Cyber Risk underwriting Dashboard</span></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 advanced-pkg professional-pkg enterprise-pkg disabled_dash">
                                        <div class="dash_bxblock clr_indigo">
                                            <a href="ecc_dashboard.php"><i class="fa fa-object-group"></i>
                                                <span>Firewall Exception Request</span></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 basic-pkg advanced-pkg professional-pkg enterprise-pkg disabled_dash">
                                        <div class="dash_bxblock clr_red">
                                            <a href="governance.php"><i class="fa fa-bank"></i>
                                                <span>Governance Dashboard</span></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 basic-pkg advanced-pkg professional-pkg enterprise-pkg disabled_dash">
                                        <div class="dash_bxblock clr_teal">
                                            <a href="global_risk_dashboard.php"><i class="fa fa-globe"></i>
                                                <span>Global Risk Dashboard</span></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 basic-pkg advanced-pkg professional-pkg enterprise-pkg disabled_dash">
                                        <div class="dash_bxblock clr_deeppurple">
                                            <a href="privileged_accessd_dashboard.php"><i class="fa fa-key"></i>
                                                <span>Identity &amp; Access Management</span></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 basic-pkg advanced-pkg professional-pkg enterprise-pkg disabled_dash">
                                        <div class="dash_bxblock clr_indigo">
                                            <a href="incident_management.php"><i
                                                        class="fa fa-exclamation-triangle "></i>
                                                <span>Incident Management</span></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 basic-pkg advanced-pkg professional-pkg enterprise-pkg disabled_dash">
                                        <div class="dash_bxblock clr_green">
                                            <a href="#"><i class="fa fa-dashboard"></i>
                                                <span>Integrated Threat Management</span></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 basic-pkg advanced-pkg professional-pkg enterprise-pkg disabled_dash">
                                        <div class="dash_bxblock clr_blue">
                                            <a href="outage_dashboard.php"><img class="icon fa"
                                                                                src="images/outage-dashboard.png"/>
                                                <span>Outage Dashboard</span></a>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 advanced-pkg professional-pkg enterprise-pkg disabled_dash">
                                        <div class="dash_bxblock clr_pink">
                                            <a href="create_risk.php"><i class="fa fa-edit"></i>
                                                <span>Risk Register</span></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 advanced-pkg professional-pkg enterprise-pkg disabled_dash">
                                        <div class="dash_bxblock clr_purple">
                                            <a href="risk_events.php"><i class="fa fa-calendar"></i>
                                                <span>Risk Event</span></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 basic-pkg advanced-pkg professional-pkg enterprise-pkg disabled_dash">
                                        <div class="dash_bxblock clr_cyan">
                                            <a href="remediation_dashboard.php"><i class="fa fa-medkit"></i>
                                                <span>Remediation Dashboard</span></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 basic-pkg advanced-pkg professional-pkg enterprise-pkg disabled_dash">
                                        <div class="dash_bxblock clr_red">
                                            <a href="termination_dashboard.php"><i class="fa fa-user-times"></i>
                                                <span>Termination Dashboard</span></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 basic-pkg advanced-pkg professional-pkg enterprise-pkg disabled_dash">
                                        <div class="dash_bxblock clr_purple">
                                            <a href="top10-risk.php"><img class="icon fa"
                                                                          src="images/risk-heat-map.png"/>
                                                <span>Top 10 IT risk heatmap</span></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 basic-pkg  advanced-pkg professional-pkg enterprise-pkg disabled_dash">
                                        <div class="dash_bxblock clr_lime">
                                            <a href="assets_management.php"><img class="icon fa"
                                                                                 src="images/assets-icon.png"/>
                                                <span>Assets Management</span></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 advanced-pkg professional-pkg enterprise-pkg disabled_dash">
                                        <div class="dash_bxblock clr_lightgreen">
                                            <a href="vrm_dashboard.php"><i class="fa fa-user-secret"></i>
                                                <span>Vendor risk Management</span></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 basic-pkg advanced-pkg professional-pkg enterprise-pkg disabled_dash">
                                        <div class="dash_bxblock clr_lightblue">
                                            <a href="vulnerability.php"><i class="fa fa-shield "></i>
                                                <span>Vulnerability  Management Dashboard</span></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12  enterprise-pkg disabled_dash">
                                        <div class="dash_bxblock clr_deeporange">
                                            <a href="cm_dashboard.php"><i class="fa fa-gavel "></i>
                                                <span>Compliance Management Dashboard</span></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 enterprise-pkg disabled_dash">
                                        <div class="dash_bxblock clr_red ">
                                            <a href="custom_workflow.php"><i class="fa fa-steam "></i>
                                                <span>Custom WorkFlow</span></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 enterprise-pkg disabled_dash">
                                        <div class="dash_bxblock clr_indigo ">
                                            <a href="custom_assesment.php"><i class="fa fa-file-text-o "></i>
                                                <span>Custom Assessment</span></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 professional-pkg enterprise-pkg disabled_dash">
                                        <div class="dash_bxblock clr_teal ">
                                            <a href="# "><i class="fa fa-bookmark-o "></i>
                                                <span>Survey</span></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 enterprise-pkg disabled_dash">
                                        <div class="dash_bxblock clr_green ">
                                            <a href="# "><i class="fa fa-line-chart "></i>
                                                <span>FICO Risk Score</span></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 enterprise-pkg disabled_dash">
                                        <div class="dash_bxblock clr_green ">
                                            <a href="rules_engine.php"><img class="icon fa"
                                                                            src="images/rules_engine_icon.png"/>
                                                <span>Rules Engine</span></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 enterprise-pkg disabled_dash">
                                        <div class="dash_bxblock clr_green">
                                            <a href="pci_dss_dashboard.php"><img class="icon fa"
                                                                                 src="images/pci-dss.png"/>
                                                <span>PCI-DSS Assessment </span></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12  enterprise-pkg disabled_dash">
                                        <div class="dash_bxblock clr_deeporange">
                                            <a href="custom_dashboard.php"><i class="fa  fa-edit"></i>
                                                <span>Custom Dashboard</span></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12  enterprise-pkg disabled_dash">
                                        <div class="dash_bxblock clr_indigo">
                                            <a href="face_recognition_dashboard.php"><img class="icon fa"
                                                                                          src="images/face-recognition.png"/>
                                                <span>Face Recognition Dashboard</span></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12  enterprise-pkg disabled_dash">
                                        <div class="dash_bxblock clr_blue">
                                            <a href="caiq_dashboard.php"><i class="fa fa-cloud "></i>
                                                <span>Cloud Security Assessment </span></a>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12  enterprise-pkg mssp-pkg">
                                        <div class="dash_bxblock clr_blue">
                                            <a href="{{ url('/mssp-dashboard/mssp-configuration') }}"><img class="icon fa"
                                                                               src="images/mssp_icon.png"/>
                                                <span>MSSP </span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row ">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                <table class="table table-striped ">
                    <thead>
                    <tr>
                        <th class="text-left "><i class="fa fa-dashboard "></i> Dashboards</th>
                        <th class="text-left "><i class="fa fa-map-signs "></i> Workflows</th>
                        <th class="text-left "><i class="fa fa-file-text-o "></i> Assessments</th>
                        <th class="text-left ">Surveys</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><a href="audit_dashboard.php ">Audit Dashboard</a></td>
                        <td><a href="ecc_dashboard.php ">Firewall Exception Request</a></td>
                        <td><a href="risk_assesment.php">Application Security Risk Assessment</a></td>
                        <td><a href="# ">Customer Satisfaction Survey</a></td>
                    </tr>
                    <tr>
                        <td><a href="urp_dashboard.php ">Cyber Risk Underwriting Dashboard</a></td>
                        <td><a href="risk_register.php ">Risk Register</a></td>
                        <td><a href="app_risk_rating.php">Application Risk Rating</a></td>
                        <td><a href="# ">Vendor Survey</a></td>
                    </tr>
                    <tr>
                        <td><a href="governance.php ">Governance Dashboard</a></td>
                        <td><a href="risk_events.php ">Risk Event</a></td>
                        <td><a href="app_risk_assessment.php">Vulnerabilty Risk Assessment</a></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td><a href="iam_dashboard.php ">Identity Access Management Dashboard</a></td>
                        <td><a href="# ">User Entitlement</a></td>
                        <td><a href="# ">Vendor Risk Assessment</a></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td><a href="remediation_dashboard.php ">Remediation Dashboard</a></td>
                        <td><a href="# ">Vendor Risk management</a></td>
                        <td><a href="# ">PCI-DSS Assessment&nbsp</a></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td><a href="termination_dashboard.php ">Termination Dashboard</a></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td><a href="# ">Vendor Risk Management Dashboard</a></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td><a href="vulnerability.php ">Vulnerability Management Dashboard</a></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- main end here -->
        <!-- content end here -->
    </div>
@endsection
