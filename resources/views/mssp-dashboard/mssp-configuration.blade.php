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
                        <li class="active"><a href="{{ url('/mssp-dashboard/mssp-configuration') }}">MSSP Dashboard</a></li>
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
                    <div class="tab-content ">

                        <div role="tabpanel" class="tab-pane " id="mssptabs_useraccountinfo">


                        </div>
                        <div role="tabpanel" class="tab-pane active" id="mssptabs_dashboard">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">.
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="mssp_panelhide">
                                                <div class="row">

                                                    <div class="col-lg-vm_tab12 col-md-12 col-sm-12 col-xs-12">
                                                        <h3 class="sub-heading mar-t0">Account Information</h3>

                                                    </div>
                                                    <!--<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                                                        <div class="dash_bxblock clr_blue dashbx_sm">
                                                            <b class="badge badge-success"><i
                                                                        class="fa fa-check"></i></b>
                                                            <a href="javascript:void(0);" class="mssp_btn"
                                                               data-hide="mssp_panelhide" data-show="mssp_modal_users">

                                                                <i class="fa fa-users icon"></i>
                                                                <span>Profile</span></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                                                        <div class="dash_bxblock clr_blue dashbx_sm <?php /*?>stepnext_disabled<?php */?>">
                                                            <b class="badge badge-success"><i
                                                                        class="fa fa-check"></i></b>
                                                            <a href="javascript:void(0);" class="mssp_btn"
                                                               data-hide="mssp_panelhide"
                                                               data-show="mssp_modal_business_units">
                                                                <img class="icon" src="{{ url('images/business_unit_icon.png')}}"/>
                                                                <span>Business Units</span></a>
                                                        </div>
                                                    </div>-->
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                                                        <div class="dash_bxblock clr_blue dashbx_sm <?php /*?>stepnext_disabled<?php */?>">
                                                            <b class="badge badge-success"><i
                                                                        class="fa fa-check"></i></b>
                                                            <a href="javascript:void(0);" class="mssp_btn"
                                                               data-hide="mssp_panelhide"
                                                               data-show="mssp_modal_distribution_groups">
                                                                <img class="icon"
                                                                     src="{{ url('images/distribution_groups_icon.png')}}"/>
                                                                <span>Distribution Groups</span></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <h3 class="sub-heading">Domain and Asset Configuration</h3>

                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                                                        <div class="dash_bxblock clr_blue dashbx_sm <?php /*?>stepnext_disabled<?php */?>">
                                                            <b class="badge badge-success"><i
                                                                        class="fa fa-check"></i></b>
                                                            <a href="{{ url('/mssp-dashboard/mssp-configuration/domains') }}" class="mssp_btn"
                                                               data-hide="mssp_panelhide" data-show="mssp_modal_domain">
                                                                <img class="icon" src="{{ url('images/domain_icon.png')}}"/>
                                                                <span>Domain</span></a>


                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                                                        <div class="dash_bxblock clr_blue dashbx_sm <?php /*?>stepnext_disabled<?php */?>">
                                                            <b class="badge badge-success"><i
                                                                        class="fa fa-check"></i></b>
                                                            <a href="javascript:void(0);" class="mssp_btn"
                                                               data-hide="mssp_panelhide"
                                                               data-show="mssp_modal_hostips">
                                                                <i class="fa fa-server icon"></i>
                                                                <span>Host Ip's</span></a>


                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                                                        <div class="dash_bxblock clr_blue dashbx_sm <?php /*?>stepnext_disabled<?php */?>">
                                                            <b class="badge badge-success"><i
                                                                        class="fa fa-check"></i></b>
                                                            <a href="javascript:void(0);" class="mssp_btn"
                                                               data-hide="mssp_panelhide"
                                                               data-show="mssp_modal_assetgroups">
                                                                <img class="icon" src="{{ url('images/assets-icon.png')}}"/>
                                                                <span>Asset Groups</span></a>


                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <h3 class="sub-heading">Schedule and Launch information</h3>

                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                                                        <div class="dash_bxblock clr_blue dashbx_sm <?php /*?>stepnext_disabled<?php */?>">
                                                            <b class="badge badge-success"><i
                                                                        class="fa fa-check"></i></b>
                                                            <a href="{{ url('/mssp-dashboard/mssp-configuration/domain-scan-launch') }}" class="mssp_btn"
                                                               data-hide="mssp_panelhide"
                                                               data-show="mssp_modal_domainscan">
                                                                <img class="icon" src="{{ url('images/gn_ds_icon.png')}}"/>
                                                                <span>Domain Scan</span></a>


                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                                                        <div class="dash_bxblock clr_blue dashbx_sm <?php /*?>stepnext_disabled<?php */?>">
                                                            <b class="badge badge-success"><i
                                                                        class="fa fa-check"></i></b>
                                                            <a href="javascript:void(0);" class="mssp_btn"
                                                               data-hide="mssp_panelhide" data-show="mssp_modal_vs">
                                                                <img class="icon" src="{{ url('images/gn_vs_icon.png')}}"/>
                                                                <span>Vulnerability Scan</span></a>


                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                                                        <div class="dash_bxblock clr_blue dashbx_sm <?php /*?>stepnext_disabled<?php */?>">
                                                            <b class="badge badge-success"><i
                                                                        class="fa fa-check"></i></b>
                                                            <a href="javascript:void(0);" class="mssp_btn"
                                                               data-hide="mssp_panelhide" data-show="mssp_modal_pc">
                                                                <img class="icon" src="{{ url('images/gn_pc_icon.png')}}"/>
                                                                <span>Policy Compliance</span></a>


                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                                                        <div class="dash_bxblock clr_blue dashbx_sm <?php /*?>stepnext_disabled<?php */?>">
                                                            <b class="badge badge-success"><i
                                                                        class="fa fa-check"></i></b>
                                                            <a href="javascript:void(0);" class="mssp_btn"
                                                               data-hide="mssp_panelhide" data-show="mssp_modal_tp">
                                                                <img class="icon" src="{{ url('images/gn_tp_icon.png')}}"/>
                                                                <span>Threat Protection</span></a>


                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                                                        <div class="dash_bxblock clr_blue dashbx_sm <?php /*?>stepnext_disabled<?php */?>">
                                                            <b class="badge badge-success"><i
                                                                        class="fa fa-check"></i></b>
                                                            <a href="javascript:void(0);" class="mssp_btn"
                                                               data-hide="mssp_panelhide" data-show="mssp_modal_saq">
                                                                <img class="icon" src="{{ url('images/gn_saq_icon.png')}}"/>
                                                                <span>Source Assessment Questionnaire</span></a>


                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                                                        <div class="dash_bxblock clr_blue dashbx_sm <?php /*?>stepnext_disabled<?php */?>">
                                                            <b class="badge badge-success"><i
                                                                        class="fa fa-check"></i></b>
                                                            <a href="javascript:void(0);" class="mssp_btn"
                                                               data-hide="mssp_panelhide" data-show="mssp_modal_was">
                                                                <img class="icon" src="{{ url('images/gn_was_icon.png')}}"/>
                                                                <span>Web Application Services</span></a>


                                                        </div>
                                                    </div>
                                                </div>

                                            </div>


                                            <div class="mssp_innerpanel">

                                                <div class="" id="mssp_modal_users" style="display: none">
                                                    <a class="btn btn-primary mssp_btn_back">Back</a>

                                                    <h3 class="sub-heading">Users</h3>

                                                    <?php //include('mssp_services/mssp_modal_users.php')?>

                                                </div>


                                                <div class="" id="mssp_modal_business_units" style="display: none">
                                                    <a class="btn btn-primary mssp_btn_back">Back</a>
                                                    <h3 class="sub-heading">Business Units</h3>
                                                    <?php //include('mssp_services/mssp_modal_business_units.php')?>
                                                </div>

                                                <div class="" id="mssp_modal_distribution_groups" style="display: none">
                                                    <a class="btn btn-primary mssp_btn_back">Back</a>
                                                    <h3 class="sub-heading">Distribution Groups</h3>
                                                    <?php //include('mssp_services/mssp_modal_distribution_groups.php')?>
                                                </div>

                                                <div class="" id="mssp_modal_domain" style="display: none">
                                                    <a class="btn btn-primary mssp_btn_back">Back</a>
                                                    <h3 class="sub-heading">Domain</h3>
                                                    <?php //include('mssp_services/mssp_modal_domain.php')?>
                                                </div>

                                                <div class="" id="mssp_modal_hostips" style="display: none">
                                                    <a class="btn btn-primary mssp_btn_back">Back</a>
                                                    <h3 class="sub-heading">Host Ip's</h3>
                                                    <?php //include('mssp_services/mssp_modal_hostips.php')?>
                                                </div>


                                                <div class="" id="mssp_modal_assetgroups" style="display: none">
                                                    <a class="btn btn-primary mssp_btn_back">Back</a>
                                                    <h3 class="sub-heading">Asset Groups</h3>
                                                    <?php //include('mssp_services/mssp_modal_assetgroups.php')?>
                                                </div>


                                                <div class="" id="mssp_modal_domainscan" style="display: none">
                                                    <a class="btn btn-primary mssp_btn_back">Back</a>
                                                    <h3 class="sub-heading">Domain Scan</h3>
                                                    <?php //include('mssp_services/mssp_modal_domainscan.php')?>
                                                </div>

                                                <div class="" id="mssp_modal_vs" style="display: none">
                                                    <a class="btn btn-primary mssp_btn_back">Back</a>
                                                    <h3 class="sub-heading">Vulnerability Scan</h3>
                                                    <?php //include('mssp_services/mssp_modal_vs.php')?>
                                                </div>


                                                <div class="" id="mssp_modal_pc" style="display: none">
                                                    <a class="btn btn-primary mssp_btn_back">Back</a>
                                                    <h3 class="sub-heading">Policy Compliance</h3>
                                                    <?php //include('mssp_services/mssp_modal_pc.php')?>
                                                </div>


                                                <div class="" id="mssp_modal_tp" style="display: none">
                                                    <a class="btn btn-primary mssp_btn_back">Back</a>
                                                    <h3 class="sub-heading">Threat Protection</h3>
                                                    <?php //include('mssp_services/mssp_modal_tp.php')?>
                                                </div>


                                                <div class="" id="mssp_modal_saq" style="display: none">
                                                    <a class="btn btn-primary mssp_btn_back">Back</a>
                                                    <h3 class="sub-heading">Source Assessment Questionnaire</h3>
                                                    <?php //('mssp_services/mssp_modal_saq.php')?>
                                                </div>

                                                <div class="" id="mssp_modal_was" style="display: none">
                                                    <a class="btn btn-primary mssp_btn_back">Back</a>
                                                    <h3 class="sub-heading">Web Application Services</h3>
                                                    <?php //include('mssp_services/mssp_modal_was.php')?>
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
