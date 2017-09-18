@extends('layouts.main')

@section('content')
<style>
    iframe{
        overflow:hidden;
    }
</style>
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

                    <div class="main-container mainconta_ops">
                        <div class="container-fluid">
                            <!-- main start here -->
                            <div class="main">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                        <div class="row mar-b10">
                                            <div class="col-md-12 threepanel">
                                                <div class="tabs_wrps bgwhite">
                                                    <div class="tab-content">
                                                        <div role="tabpanel" class="tab-pane active" id="dsmsspservice_dashboard_main">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">


                                                                        <div class="row">
                                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                                <div class="form-group">
                                                                                    <label class="control-label">Global</label>
                                                                                    <select class="form-control">
                                                                                        <option>All</option>
                                                                                        <option>North America</option>
                                                                                    </select>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                                <div class="form-group">
                                                                                    <label class="control-label">Region</label>
                                                                                    <select class="form-control">
                                                                                        <option>All</option>
                                                                                        <option>Servicing</option>
                                                                                    </select>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                                                <div class="form-group">
                                                                                    <label class="control-label">Sub Region</label>
                                                                                    <select class="form-control">
                                                                                        <option>All</option>
                                                                                        <option>Servicing</option>
                                                                                    </select>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                                                <div class="form-group">
                                                                                    <label class="control-label">Business Unit</label>
                                                                                    <select class="form-control">
                                                                                        <option>All</option>
                                                                                        <option>BU 1</option>
                                                                                        <option>BU 2</option>
                                                                                    </select>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                                                <div class="form-group">
                                                                                    <label class="control-label">Date</label>
                                                                                    <div class="input-group">
                                                                                        <input type="text" class="form-control daterange-session" placeholder="Feed Date 2017-01-31"/>
                                                                                        <div class="input-group-addon"><i class="fa fa-calendar pull-right"></i></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                                <div class="panel panel-default chart" id="panel_1" data-chart="0">
                                                                                    <div class="panel-heading" role="tab">
                                                                                        <h4 class="panel-title"> Chart 1 </h4>
                                                                                    </div>
                                                                                    <div class="panel-body">
                                                                                        <div class="createdatasource" id="panel_1_chart"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                                <div class="panel panel-default chart" id="panel_2" data-chart="1">
                                                                                    <div class="panel-heading" role="tab">
                                                                                        <h4 class="panel-title"> Chart 2</h4>
                                                                                    </div>
                                                                                    <div class="panel-body">
                                                                                        <div class="createdatasource" id="panel_2_chart"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="panel panel-default">
                                                                                    <div class="panel-heading" role="tab">
                                                                                        <h4 class="panel-title"> Domain Hierarchy report
                                                                                            <div class="pnrht_settwps"> <a href="#" class="maximize_clk" data-toggle="tooltip" data-placement="top" title="Maximize"><i class="fa fa-arrows-alt"></i></a> <a href="#" class="setting_clk" data-toggle="modal" data-target="#popovercontent" data-tt="tooltip" data-placement="top" title="Settings"><i class="fa fa-cog"></i></a><a href="#" class="help_clk" data-toggle="tooltip" data-placement="top" title="Help"><i class="fa fa-info"></i></a></div>
                                                                                        </h4>
                                                                                    </div>
                                                                                    <div class="panel-body">
                                                                                        <div id="dsgra_domain_hierarchy_report"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                                <div class="panel panel-default">
                                                                                    <div class="panel-heading" role="tab">
                                                                                        <h4 class="panel-title"> Number of Servers by Status
                                                                                            <div class="pnrht_settwps"> <a href="#" class="maximize_clk" data-toggle="tooltip" data-placement="top" title="Maximize"><i class="fa fa-arrows-alt"></i></a> <a href="#" class="setting_clk" data-toggle="modal" data-target="#popovercontent" data-tt="tooltip" data-placement="top" title="Settings"><i class="fa fa-cog"></i></a> <a href="#" class="help_clk" data-toggle="tooltip" data-placement="top" title="Help"><i class="fa fa-info"></i></a></div>
                                                                                        </h4>
                                                                                    </div>
                                                                                    <div class="panel-body">
                                                                                        <table class="table table-bordered table-hover">
                                                                                            <thead>
                                                                                            <tr>
                                                                                                <th>Name</th>
                                                                                                <th>Number</th>
                                                                                            </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                            <tr>
                                                                                                <td>Rogue Servers</td>
                                                                                                <td>10</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Live Servers</td>
                                                                                                <td>5</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Orphan Servers</td>
                                                                                                <td>3</td>
                                                                                            </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div role="tabpanel" class="tab-pane" id="dsmsspservice_config">
                                                            <form>
                                                                <div class="row mar-b20">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <h3 class="mar-t0  sub-heading">Task Title</h3>
                                                                    </div>
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Title</label>
                                                                            <input type="text" class="form-control"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Task Owner</label>
                                                                            <select class="form-control">
                                                                                <option>--Select--</option>
                                                                                <option></option>
                                                                                <option></option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Option Profile</label>
                                                                            <select class="form-control">
                                                                                <option>--Select--</option>
                                                                                <option></option>
                                                                                <option></option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row mar-b20">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <h3 class="mar-t0  sub-heading">Target Domains</h3>
                                                                    </div>
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Asset Groups</label>
                                                                            <select class="form-control">
                                                                                <option>--Select--</option>
                                                                                <option></option>
                                                                                <option></option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Assets from Asset Groups</label>
                                                                            <div class="row">
                                                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                                    <label for="assetgroup_domains" class="checkbox_square">
                                                                                        <input type="checkbox" id="assetgroup_domains"/><span></span><span>Domains</span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                                    <label for="assetgroup_ips" class="checkbox_square">
                                                                                        <input type="checkbox" id="assetgroup_ips"/><span></span><span>IPs</span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Domains / Netblocks</label>
                                                                            <select class="form-control">
                                                                                <option>--Select--</option>
                                                                                <option></option>
                                                                                <option></option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row mar-b20">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <h3 class="mar-t0  sub-heading">Scheduling</h3>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Start</label>
                                                                            <div class="row">
                                                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                                    <input type="text" class="form-control"/>
                                                                                </div>
                                                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                                    <select class="form-control">
                                                                                        <option>Time Zone</option>
                                                                                        <option></option>
                                                                                        <option></option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Duration</label>
                                                                            <div class="row">
                                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                                    <label for="checkbox_duration" class="checkbox_square">
                                                                                        <input type="checkbox" id="checkbox_duration"/><span></span><span></span>
                                                                                    </label>
                                                                                    <div class="col-sm-4" style="float: none; display: inline-flex;"><select class="form-control">
                                                                                            <option>Select</option>
                                                                                            <option></option>
                                                                                            <option></option>
                                                                                        </select></div>
                                                                                    After
                                                                                    <div class="col-sm-3" style="float: none; display: inline-flex;">
                                                                                        <select class="form-control">
                                                                                            <option>01</option>
                                                                                            <option>02</option>
                                                                                            <option>03</option>
                                                                                            <option>04</option>
                                                                                            <option>05</option>
                                                                                            <option>06</option>
                                                                                            <option>07</option>
                                                                                            <option>08</option>
                                                                                            <option>09</option>
                                                                                            <option>10</option>
                                                                                            <option>11</option>
                                                                                            <option>12</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    Hours
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Occurs</label>
                                                                            <div class="row">
                                                                                <div class="col-sm-2" style="display: inline-flex; float: none;">
                                                                                    <select class="form-control">
                                                                                        <option>--Select--</option>
                                                                                        <option></option>
                                                                                        <option></option>
                                                                                    </select></div>
                                                                                <div class="col-sm-2" style="display: inline-flex; float: none;"><input type="text" class="form-control"/></div>
                                                                                Days
                                                                                <label for="checkbox_occursafter" class="checkbox_square">
                                                                                    <input type="checkbox" id="checkbox_occursafter"/><span></span><span></span>
                                                                                </label>
                                                                                End After
                                                                                <div class="col-sm-2" style="display: inline-flex; float: none;"><input type="text" class="form-control"/></div>
                                                                                Occurrences
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row mar-b20">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <h3 class="mar-t0  sub-heading">Notifications</h3>
                                                                    </div>
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Set up email notifications for you and other users.</label>
                                                                            <div class="row">
                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <div class="">
                                                                                        <label for="notifications_beforemapstart" class="checkbox_square">
                                                                                            <input type="checkbox" id="notifications_beforemapstart"/><span></span><span></span>
                                                                                        </label>
                                                                                        Send notification
                                                                                        <div class="col-sm-1" style="display: inline-flex; float: none;">
                                                                                            <input type="text" class="form-control"/>
                                                                                        </div>
                                                                                        <div class="col-sm-2" style="display: inline-flex; float: none;">
                                                                                            <select class="form-control" style="width: 120px !important; float: none;">
                                                                                                <option>--Select Days--</option>
                                                                                                <option></option>
                                                                                                <option></option>
                                                                                            </select>
                                                                                        </div>
                                                                                        before map starts
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <label for="notifications_aftermapcompletes" class="checkbox_square">
                                                                                        <input type="checkbox" id="notifications_aftermapcompletes"/><span></span>
                                                                                        <span></span>
                                                                                    </label>
                                                                                    Send notification after map completes
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="mar-b20">
                                                                            <p><strong>Recipients</strong></p>
                                                                            <p>We'll notify the task owner. To add more users, select from your distribution groups.</p>
                                                                            <p>Distribution Groups: <a href="ds_add_group.php" class="mar-l10 btn btn-default"><i class="fa fa-plus"></i>  Add Group</a></p>
                                                                        </div>
                                                                        <div class="mar-b20">
                                                                            <p><strong>Custom Message</strong></p>
                                                                            <p>The email will always include info like the title, owner, option profile and start time.</p>
                                                                            <div class="row"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <div class="form-group">
                                                                                        <label class="control-label">Custom message for email sent before map starts</label>
                                                                                        <textarea class="form-control" placeholder="A map is scheduled to start soon." rows="5"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <div class="form-group">
                                                                                        <label class="control-label">Custom message for email sent after map completes</label>
                                                                                        <textarea class="form-control" placeholder="A map is finished." rows="5"></textarea>
                                                                                    </div>
                                                                                </div></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                                                    <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Cancel</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div role="tabpanel" class="tab-pane" id="dsmsspservice_launchpad">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading" role="tab" id="headingOne">
                                                                    <h4 class="panel-title"> Users List</h4>
                                                                </div>
                                                                <div class="panel-body">

                                                                    <table class="table table-bordered table-hover">
                                                                        <thead>
                                                                        <tr>
                                                                            <th class="text-left">Title</th>
                                                                            <th class="text-left">Targets</th>
                                                                            <th class="text-left">Launched User</th>
                                                                            <th class="text-left">Reference</th>
                                                                            <th class="text-left">Date</th>
                                                                            <th class="text-left">Status</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <tr>
                                                                            <td>Client1</td>
                                                                            <td>Fastraxpos.com</td>
                                                                            <td>Sriharsha V</td>
                                                                            <td>map/150232155 12345</td>
                                                                            <td class="text-center">08/14/2017 at 11:08:02 (GMT-05:00)</td>
                                                                            <td class="text-center">Finished</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Client2</td>
                                                                            <td>Fastraxpos.com</td>
                                                                            <td>Sriharsha V</td>
                                                                            <td>map/150232155 12345</td>
                                                                            <td class="text-center">08/14/2017 at 11:08:02 (GMT-05:00)</td>
                                                                            <td class="text-center">Finished</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Client3</td>
                                                                            <td>Fastraxpos.com</td>
                                                                            <td>Sriharsha V</td>
                                                                            <td>map/150232155 12345</td>
                                                                            <td class="text-center">08/14/2017 at 11:08:02 (GMT-05:00)</td>
                                                                            <td class="text-center">Finished</td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="dsgra_nosof_domains_scanned_div" class="charts_table" style="display: none">
                                                @include('mssp-dashboard.mssp-services.reporting-services.vulnerability-scan-tables.table_numberofdomainsscanned')
                                            </div>
                                            <div id="dsgra_hosts_scan_by_operating_system_div" class="charts_table" style="display: none">
                                               @include('mssp-dashboard.mssp-services.reporting-services.vulnerability-scan-tables.table_hostsscannedbyoperatingsystem')
                                            </div>
                                        </div>


                                        <table id="dsgra_hosts_scan_by_operating_system_datatable" style="display:none;">
                                            <thead>
                                            <tr>
                                                <th></th>
                                                <th>Minimal</th>
                                                <th>Medium</th>
                                                <th>Serious</th>
                                                <th>Critical</th>
                                                <th>Urgent</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th>Windows</th>
                                                <td>29</td>
                                                <td>30</td>
                                                <td>21</td>
                                                <td>30</td>
                                                <td>21</td>
                                            </tr>
                                            <tr>
                                                <th>Unix</th>
                                                <td>61</td>
                                                <td>30</td>
                                                <td>9</td>
                                                <td>30</td>
                                                <td>9</td>
                                            </tr>
                                            <tr>
                                                <th>Redhat</th>
                                                <td>21</td>
                                                <td>10</td>
                                                <td>9</td>
                                                <td>10</td>
                                                <td>9</td>
                                            </tr>
                                            <tr>
                                                <th>Linux</th>
                                                <td>50</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>10</td>
                                            </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
        @include('mssp-dashboard.mssp-services.popup-over-content')

@endsection

        @section('extra-js')
        <script type="text/javascript">

            var js_ds_graphs = {

                'dsgra_nosof_domains_scanned'  :  {
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false,
                        type: 'pie'
                    },
                    title: {
                        text: 'Total number of domains scanned - 10'
                    },
                    tooltip: {
                        pointFormat: '<b>{point.y}</b>'
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: true,
                                format: '{point.y} % ',
                                style: {
                                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                                }
                            },
                            showInLegend: true
                        },
                        series: {
                            cursor: 'pointer',
                            events: {
                                click: function (event) { console.log(event.point.name);
                                    $('.threepanel').hide();
                                    drilldownTo('dsgra_nosof_domains_scanned_div',event.point.name);

                                }
                            }
                        }
                    },
                    series: [{
                        name: 'Domains Scanned',
                        colorByPoint: true,
                        data: [{
                            name: 'Internal Domains',
                            y: 58
                        }, {
                            name: 'External Domains',
                            y: 42,
                            sliced: true,
                            selected: true
                        }]
                    }]
                },

                'dsgra_hosts_scan_by_operating_system' :  {

                    chart: {
                        type: 'column',
                    },
                    colors: [
                        '#7cb5ec',
                        '#009688',
                        '#4CAF50',
                        '#f39c12',
                        '#F44336'
                    ],
                    title: {
                        text: ''
                    },
                    xAxis: {
                        categories: [
                            'Windows',
                            'Unix',
                            'Redhat',
                            'Linux',
                            'Others'
                        ],
                        title: {
                            text: 'Operating systems'
                        }
                    },
                    series: [{
                        showInLegend: false,
                        data: [34.4, 21.8, 20.1, 20, 19.6],
                    }],
                    yAxis: {
                        allowDecimals: false,
                        title: {
                            text: 'Count of Hosts'
                        }
                    },
                    plotOptions: {
                        column: {
                            colorByPoint: true,
                            stacking: 'normal'
                        },
                        series: {
                            cursor: 'pointer',
                            events: {
                                click: function (event) {
                                    drilldownTo('dsgra_hosts_scan_by_operating_system_div',event.point.category);
                                }
                            }
                        }
                    },
                    /*colorAxis: {
                         dataClasses: [{
                             name: 'Minimal',
                             color : '#7cb5ec',
                         }, {
                             name: 'Medium',
                             color : '#009688',
                         }, {
                             name: 'Serious',
                             color : '#4CAF50',
                         }, {
                             name: 'Critical',
                             color : '#f39c12',
                         }, {
                             name: 'Urgent',
                             color : '#F44336',
                         }]
                     },*/
                    /* tooltip: {
                         formatter: function() {
                             return '<b>' + this.series.name + '</b><br/>' +
                                 this.point.y + ' ' + this.point.name.toLowerCase();
                         }
                     }*/
                },

                //'dsgra_domain_hierarchy_report' : {}

            };

            var js_ds_graph_titles = {

                'dsgra_nosof_domains_scanned'  : 'Number of Domains Scanned <div class="pnrht_settwps"><a href="#" class="maximize_clk" data-toggle="tooltip" data-placement="top" title="Maximize"><i class="fa fa-arrows-alt"></i></a> <a href="#" class="setting_clk" data-toggle="modal" data-target="#popovercontent" data-tt="tooltip" data-placement="top" title="Settings"><i class="fa fa-cog"></i></a> <a href="#" class="help_clk" data-toggle="tooltip" data-placement="top" title="Help"><i class="fa fa-info"></i></a></div>',

                'dsgra_hosts_scan_by_operating_system' : 'Hosts Scanned by Operating system <div class="pnrht_settwps"><a href="#" class="maximize_clk" data-toggle="tooltip" data-placement="top" title="Maximize"><i class="fa fa-arrows-alt"></i></a> <a href="#" class="setting_clk" data-toggle="modal" data-target="#popovercontent" data-tt="tooltip" data-placement="top" title="Settings"><i class="fa fa-cog"></i></a> <a href="#" class="help_clk" data-toggle="tooltip" data-placement="top" title="Help"><i class="fa fa-info"></i></a></div>',

                //'dsgra_domain_hierarchy_report' : 'Domain Hierarchy report',

            };

            var js_graphs_loaded = [ '', '', '', '', '', '' ];

            $(function() {
                $('.chart_draggable').draggable({
                    helper: "clone",
                    opacity: "0.5"
                });

                $('.chart').droppable({
                    accept: '.chart_draggable',
                    drop: function(event, ui){
                        loadHighChart($(ui.draggable).attr("id"), $(this).attr("id"));
                    }
                });
            });

            function loadHighChart(elementId, panelId)
            {
                var HighChartProperties = js_ds_graphs[elementId];
                //$('#' + panelId + '_chart').highcharts().destroy();
                $("#" + panelId).find("h4.panel-title").html(js_ds_graph_titles[elementId]);
                Highcharts.chart( panelId + '_chart', HighChartProperties);
                var chart_element = $("#" + panelId).data("chart");
                js_graphs_loaded[chart_element] = elementId;
                $('.chart_draggable').show();
                $.each(js_graphs_loaded, function( index, value ) {
                    if(value.length > 0) {
                        $('#' + value).hide();
                    }
                });
            }

            $(function() {
                var current_graph = 1
                $.each(js_ds_graph_titles, function( index, value ) {
                    if(current_graph <= 6){
                        loadHighChart(index, 'panel_' + current_graph);
                        current_graph++;
                    }
                });
            });

            function drilldownTo(div,name) {
                $('.threepanel').hide();
                $('.'+div+'_title').html(name);
                $('#'+div).show();
            }

            function backtoPanel(id)
            {
                $('.threepanel').show();
                $('#'+id).hide();
                $('.charts_table').hide();

            }

            $(document).ready(function () {

                $("input[name=targethosts_radio]").change(function () {
                    if (this.value == 'Assets') {

                        $("div#targethosts_radio_assets_div").show();
                        $("div#targethosts_radio_tags_div").hide();
                    } else if (this.value == 'Tags') {

                        $("div#targethosts_radio_tags_div").show();
                        $("div#targethosts_radio_assets_div").hide();
                    }
                });

                $(document).on("click", ".maximize_clk", function () {
                    var paneldiv = $(this).closest('.panel');
                    var paneldivmain = $(paneldiv).closest('.col-lg-6');
                    $(paneldivmain).addClass("maximize_panel");
                    $(paneldivmain).wrap("<div class='modal_wrap'></div>");

                    $(this).removeClass('maximize_clk');
                    $(this).addClass('minimize_clk');
                    $(this).attr('title', "minimize");
                    $(this).attr('data-original-title', "minimize");

                    var HighChartProperties = js_ds_graphs[js_graphs_loaded[paneldiv.data('chart')]];
                    var chart = Highcharts.chart(paneldiv.attr("id") + '_chart', HighChartProperties);

                    chart.setSize(
                        $(".maximize_panel").innerWidth() - 50,
                        $(".maximize_panel").innerHeight() - 50,
                        false
                    );
                });

                $(document).on("click", ".minimize_clk", ".modal_wrap", function () {
                    var paneldiv = $(this).closest('.panel');
                    var paneldivmain = $(paneldiv).closest('.col-lg-6');
                    $(paneldivmain).removeClass("maximize_panel");
                    $(paneldivmain).unwrap();
                    $(this).removeClass('minimize_clk');
                    $(this).addClass('maximize_clk');
                    $(this).attr('title', "maximize");
                    $(this).attr('data-original-title', "maximize");

                    var HighChartProperties = js_ds_graphs[js_graphs_loaded[paneldiv.data('chart')]];
                    Highcharts.chart(paneldiv.attr("id") + '_chart', HighChartProperties);

                });
            });
        </script>
        <script>
            $( document ).ready( function () {
                $( "a.add_distribution_group_modal" ).click( function () {

                    $( '#ds_tab' ).modal( 'hide' );

                    $( '#add_distribution_group' ).modal( 'show' );


                } );

            } );
            $( document ).ready( function () {
                $( ".email_list_btn" ).click( function () {
                    $( "#add_emaillist" ).modal( "hide" );
                    $( ".dc_placeholder" ).hide();
                    $( ".email_list" ).show();
                    $( ".email_list_content" ).show();
                } );
            } );
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js"></script>
        <script>

            function expand(d){
                var children = (d.children)?d.children:d._children;
                if (d._children) {
                    d.children = d._children;
                    d._children = null;
                }
                if(children)
                    children.forEach(expand);
            }

            function expandAll(){
                expand(root);
                update(root);
            }

            function collapseAll(){
                root.children.forEach(collapse);
                collapse(root);
                update(root);
            }

            var margin = {top: 20, right: 120, bottom: 20, left: 120},
                width = 960 - margin.right - margin.left,
                height = 800 - margin.top - margin.bottom;

            var i = 0,
                duration = 750,
                root;

            var tree = d3.layout.tree()
                .size([height, width]);

            var diagonal = d3.svg.diagonal()
                .projection(function(d) { return [d.y, d.x]; });

            var svg = d3.select("#dsgra_domain_hierarchy_report").append("svg")
                .attr("width", width + margin.right + margin.left)
                .attr("height", height + margin.top + margin.bottom)
                .append("g")
                .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

            var flare =
                {
                    "name": "dotbits.com",
                    "children": [
                        {
                            "name": "ip-184-168-5-50",
                            "children": [
                                {"name": "ns57", "size": 17010},
                            ]

                        },
                        {
                            "name": "internal network 107",
                            "children": [
                                {"name": "dotbits", "size": 17010},
                            ]
                        },
                        {
                            "name": "be40",
                            "children": [
                                {"name": "ip-184-168-5-46", "size": 17010},
                            ]
                        },
                        {
                            "name": "Orphans",
                            "children": [
                                {
                                    "name": "qu-in-127",

                                },
                                {
                                    "name": "ce-in-127",

                                },
                                {
                                    "name": "dh-in-127",

                                }
                            ]
                        },

                    ]
                };
            root = flare;
            root.x0 = height / 2;
            root.y0 = 0;

            function update(source) {

                // Compute the new tree layout.
                var nodes = tree.nodes(root).reverse(),
                    links = tree.links(nodes);

                // Normalize for fixed-depth.
                nodes.forEach(function(d) { d.y = d.depth * 180; });

                // Update the nodes…
                var node = svg.selectAll("g.node")
                    .data(nodes, function(d) { return d.id || (d.id = ++i); });

                // Enter any new nodes at the parent's previous position.
                var nodeEnter = node.enter().append("g")
                    .attr("class", "node")
                    .attr("transform", function(d) { return "translate(" + source.y0 + "," + source.x0 + ")"; })
                    .on("click", click)
                    .on("mouseover", mouseover)
                    .on("mouseout", mouseout);

                nodeEnter.append("circle")
                    .attr("r", 1e-6)
                    .style("fill", function(d) { return d._children ? "lightsteelblue" : "#fff"; });

                nodeEnter.append("text")
                    .attr("x", function(d) { return d.children || d._children ? -10 : 10; })
                    .attr("dy", ".35em")
                    .attr("text-anchor", function(d) { return d.children || d._children ? "end" : "start"; })
                    .text(function(d) { return d.name; })
                    .style("fill-opacity", 1e-6);

                // Transition nodes to their new position.
                var nodeUpdate = node.transition()
                    .duration(duration)
                    .attr("transform", function(d) { return "translate(" + d.y + "," + d.x + ")"; });

                nodeUpdate.select("circle")
                    .attr("r", 4.5)
                    .style("fill", function(d) { return d._children ? "lightsteelblue" : "#fff"; });

                nodeUpdate.select("text")
                    .style("fill-opacity", 1);

                // Transition exiting nodes to the parent's new position.
                var nodeExit = node.exit().transition()
                    .duration(duration)
                    .attr("transform", function(d) { return "translate(" + source.y + "," + source.x + ")"; })
                    .remove();

                nodeExit.select("circle")
                    .attr("r", 1e-6);

                nodeExit.select("text")
                    .style("fill-opacity", 1e-6);

                // Update the links…
                var link = svg.selectAll("path.link")
                    .data(links, function(d) { return d.target.id; });

                // Enter any new links at the parent's previous position.
                link.enter().insert("path", "g")
                    .attr("class", "link")
                    .attr("d", function(d) {
                        var o = {x: source.x0, y: source.y0};
                        return diagonal({source: o, target: o});
                    });

                // Transition links to their new position.
                link.transition()
                    .duration(duration)
                    .attr("d", diagonal);

                // Transition exiting nodes to the parent's new position.
                link.exit().transition()
                    .duration(duration)
                    .attr("d", function(d) {
                        var o = {x: source.x, y: source.y};
                        return diagonal({source: o, target: o});
                    })
                    .remove();

                // Stash the old positions for transition.
                nodes.forEach(function(d) {
                    d.x0 = d.x;
                    d.y0 = d.y;
                });
            }

            // Toggle children on click.
            function click(d) {
                if (d.children) {
                    d._children = d.children;
                    d.children = null;
                } else {
                    d.children = d._children;
                    d._children = null;
                }
                update(d);
            }

            function mouseover(d) {
                d3.select(this).append("text")
                    .attr("class", "hover")
                    .attr('transform', function(d){
                        return 'translate(5, -10)';
                    })
                    .text(d.name + ": " + d.id);
            }

            // Toggle children on click.
            function mouseout(d) {
                d3.select(this).select("text.hover").remove();
            }

            function collapse(d) {
                if (d.children) {
                    d._children = d.children;
                    d._children.forEach(collapse);
                    d.children = null;
                }
            }

            update(root);

            d3.select(self.frameElement).style("height", "450px","width","100%");



        </script>

@endsection