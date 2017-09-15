@extends('layouts.main')

@section('content')

    <div class="main">
        <div class="heading-actions">
            <div class="wrapper heading-wrapper">
                <h1 class="pull-left"><a href="{{ url('/dashboard') }}" class="btn btn-default btn-circle"><i
                                class="fa fa-home"></i></a> MSSP Dashboard</h1>
                <div class="pull-right">
                    <ol class="breadcrumb mb-0">
                        <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                        <li ><a href="{{ url('/mssp-dashboard/mssp-services') }}">MSSP Services</a></li>
                        <li class="active"><a href="{{ url('/mssp-dashboard/mssp-services/reporting-services') }}">Reporting Services</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="tabs_wrps">

                @include('mssp-dashboard.navigation-bar')


                <!-- Nav tabs -->
                    <!-- Tab panes -->
                    <div class="panel panel-default mssps_bxblock mssp_leftnav mssp_sdbrleftnav">
                        <div class="panel-body">
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                                <div class="dash_bxblock clr_cyan dashbx_sm">
                                    <a href="#">
                                        <img class="icon" src="{{ url('images/gn_risk_icon.png') }}" />
                                        <span>MSSP Risk Dashboard Reports</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                                <div class="dash_bxblock clr_cyan dashbx_sm">
                                    <a href="javascript:"><img class="icon" src="{{ url('images/gn_ds_icon.png') }}" />
                                        <span>Domain Scan reports</span></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                                <div class="dash_bxblock clr_cyan dashbx_sm">
                                    <!--<a href="#" data-toggle="modal" data-target="#vm_tab"><img class="icon fa" src="images/vm.png" />
                                <span>VM</span></a>-->
                                    <a href="{{ url('/mssp-dashboard/mssp-services/reporting-services/vulnerability-scan-reports') }}"><img class="icon" src="{{ url('images/gn_vs_icon.png') }}" />
                                        <span>Vulnerability Scan reports</span></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                                <div class="dash_bxblock clr_cyan dashbx_sm">
                                    <a href="#" data-toggle="modal" data-target="#tp_tab"><img class="icon" src="{{ url('images/gn_tp_icon.png') }}" />
                                        <span>Threat Protection Reports</span></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                                <div class="dash_bxblock clr_cyan dashbx_sm">
                                    <a href="#">
                                        <img class="icon" src="{{ url('images/gn_pci_icon.png') }}" />
                                        <span>Policy Compliance Reports</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                                <div class="dash_bxblock clr_cyan dashbx_sm">
                                    <a href="#" data-toggle="modal" data-target="#was_tab"><img class="icon" src="{{ url('images/gn_was_icon.png') }}" />
                                        <span>Web Application Services Reports</span></a>
                                </div>
                            </div>
                            <!--<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                                <div class="dash_bxblock clr_cyan dashbx_sm">
                                    <a href="#" data-toggle="modal" data-target="#pc_tab"><img class="icon" src="images/gn_pc_icon.png" />
                                <span>Policy Compliance</span></a>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                                <div class="dash_bxblock clr_cyan dashbx_sm">
                                    <a href="#" data-toggle="modal" data-target="#saq_tab"><img class="icon" src="images/gn_saq_icon.png" />
                                <span>Source Assessment Questionnaire</span></a>
                                </div>
                            </div>-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
