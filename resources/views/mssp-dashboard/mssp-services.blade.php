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
                        <li class="active"><a href="{{ url('/mssp-dashboard/mssp-services') }}">MSSP Services</a></li>
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
                        <div class="row selectchart">

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="panel panel-default mssps_bxblock mssp_leftnav mssp_sdbrleftnav">
                                    <div class="panel-body">
                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                                            <div class="dash_bxblock clr_cyan dashbx_sm">
                                                <a href="{{ url('/mssp-dashboard/mssp-services/professional-services') }}" ><img class="icon" src="{{ url('images/gn_professional_services_icon.png')}}" />
                                                    <span>Professional Services</span></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                                            <div class="dash_bxblock clr_cyan dashbx_sm">
                                                <a href="{{ url('/mssp-dashboard/mssp-services/reporting-services') }}"><img class="icon" src="{{ url('images/gn_report_services_icon.png')}}" />
                                                    <span>Reporting Services</span></a>
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
