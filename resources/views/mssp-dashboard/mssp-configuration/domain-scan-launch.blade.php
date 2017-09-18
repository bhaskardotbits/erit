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
                        <li><a href="{{ url('/mssp-dashboard/mssp-configuration') }}">MSSP Dashboard</a></li>
                        <li class="active"><a href="{{ url('/mssp-dashboard/mssp-configuration/domain-scan-launch') }}">Domain scan launch</a>
                        </li>
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

                        <div class="row">
                            <div class="col-md-12">
                                <div class="tabs_wrps bgwhite">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active">
                                            <a href="#dsmsspservice_config" aria-controls="dsmsspservice_config"
                                               role="tab" data-toggle="tab">Job Scheduling</a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#dsmsspservice_launchpad" aria-controls="dsmsspservice_launchpad"
                                               role="tab" data-toggle="tab">Launch Pad</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="dsmsspservice_config">
                                            <form role="form" method="POST"
                                                  action="{{ url('/mssp-dashboard/mssp-configuration/domain-scan-launch') }}">
                                                {{ csrf_field() }}
                                                <div class="row mar-b20">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <h3 class="mar-t0  sub-heading">Task Title</h3>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                                            <label class="control-label">Title</label>
                                                            <input id="title" type="text" class="form-control"
                                                                   name="title" placeholder="Title"
                                                                   value="{{ old('title') }}" required>
                                                            @if ($errors->has('title'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('title') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group{{ $errors->has('task_owner_id') ? ' has-error' : '' }}">
                                                            <label class="control-label">Task Owner</label>
                                                            <select id="task_owner_id" name="task_owner_id"
                                                                    class="form-control" required>
                                                                <option>--Select--</option>
                                                                <?php foreach($users as $user){ ?>
                                                                <option value="<?=$user->id;?>"{{ ($user->id == old('title')) ? ' selected="selected"' : '' }}><?=$user->first_name . ' ' . $user->last_name; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                            @if ($errors->has('task_owner_id'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('task_owner_id') }}</strong>
                                                                </span>
                                                            @endif
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
                                                            <label class="control-label">Assets from Asset
                                                                Groups</label>
                                                            <div class="row">
                                                                <input type="hidden" name="asset_domain"
                                                                       value="0"/>
                                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                    <label for="asset_domain"
                                                                           class="checkbox_square">
                                                                        <input type="checkbox" name="asset_domain"
                                                                               id="asset_domain" value="1"/>
                                                                        <span></span>
                                                                        <span>Domains</span>
                                                                    </label>
                                                                </div>
                                                                <input type="hidden" name="asset_ip"
                                                                       value="0"/>
                                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                    <label for="asset_ip" class="checkbox_square">
                                                                        <input type="checkbox" name="asset_ip"
                                                                               id="asset_ip" value="1"/>
                                                                        <span></span>
                                                                        <span>IPs</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Domains / Netblocks</label>
                                                            <select name="job_schedule_domains[]" id="job_schedule_domains" required class="form-control">
                                                                <?php foreach($domains as $domain){ ?>
                                                                <option value="<?=$domain->id;?>"><?=$domain->domains; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mar-b20">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <h3 class="mar-t0 mar-b20 sub-heading">Scheduling</h3>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-lg-offset-1">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                                    <label class="control-label">Start</label>
                                                                </div>
                                                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                        <input type="text"
                                                                               class="form-control daterange-session"
                                                                               placeholder="Select Date"
                                                                               style="width: 100%; float: left"/>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                        <select class="form-control">
                                                                            <option>Time Zone</option>
                                                                            <option>CST</option>
                                                                            <option>EST</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                                    <label class="control-label">Duration</label>

                                                                </div>

                                                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">

                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                        <div class="pull-left"
                                                                             style="width:7%; margin-top: 7px;">
                                                                            <label class="checkbok">
                                                                                <input id="duration" type="checkbox"/>
                                                                            </label>

                                                                        </div>

                                                                        <div style="width:93%" class="pull-left">
                                                                            <select class="form-control">
                                                                                <option>after</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12"
                                                                         style="line-height: 40px;">
                                                                        After
                                                                    </div>

                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
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
                                                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12"
                                                                         style="line-height: 40px;">
                                                                        Hours
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                                    <label class="control-label">Occurs</label>

                                                                </div>

                                                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                        <select class="form-control">
                                                                            <option>Daily</option>
                                                                            <option>Weekly</option>
                                                                            <option>Monthly</option>
                                                                            <option>Quarterly</option>
                                                                        </select>

                                                                    </div>


                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                        <div class="row">
                                                                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                                                                <input type="text"
                                                                                       class="form-control"/>

                                                                            </div>
                                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"
                                                                                 style="line-height: 40px;">
                                                                                Days
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mar-t10">
                                                                        <div class="row">
                                                                            <div class="col-lg-4 col-md-4 col-sm- col-xs-12"
                                                                                 style="line-height: 40px;">
                                                                                <label class="checkbok">
                                                                                    <input id="duration"
                                                                                           type="checkbox"/> Ends After
                                                                                </label>
                                                                            </div>

                                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                                <input type="text"
                                                                                       class="form-control"/>

                                                                            </div>
                                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"
                                                                                 style="line-height: 40px;">
                                                                                Occurences
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <h3 class="mar-t0  sub-heading">Notifications</h3>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Set up email notifications for
                                                                you and other users.</label>
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="">
                                                                        <label for="notifications_beforemapstart"
                                                                               class="checkbox_square">
                                                                            <input type="checkbox"
                                                                                   id="notifications_beforemapstart"/><span></span><span></span>
                                                                        </label>
                                                                        Send notification
                                                                        <div class="col-sm-1"
                                                                             style="display: inline-flex; float: none;">
                                                                            <input type="text" class="form-control"/>
                                                                        </div>
                                                                        <div class="col-sm-2"
                                                                             style="display: inline-flex; float: none;">
                                                                            <select class="form-control"
                                                                                    style="width: 120px !important; float: none;">
                                                                                <option>--Select Days--</option>
                                                                                <option></option>
                                                                                <option></option>
                                                                            </select>
                                                                        </div>
                                                                        before map starts
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <label for="notifications_aftermapcompletes"
                                                                           class="checkbox_square">
                                                                        <input type="checkbox"
                                                                               id="notifications_aftermapcompletes"/><span></span>
                                                                        <span></span>
                                                                    </label>
                                                                    Send notification after map completes
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="mar-b20">
                                                            <p><strong>Recipients</strong></p>
                                                            <p>We'll notify the task owner. To add more users, select
                                                                from your distribution groups.</p>
                                                            <p>Distribution Groups: <a href="#"
                                                                                       class="add_distribution_group_modal mar-l10 btn btn-default"><i
                                                                            class="fa fa-plus"></i> Add Group</a></p>
                                                        </div>
                                                        <div class="mar-b20">
                                                            <p><strong>Custom Message</strong></p>
                                                            <p>The email will always include info like the title, owner,
                                                                option profile and start time.</p>
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Custom message for
                                                                            email sent before map starts</label>
                                                                        <textarea class="form-control"
                                                                                  placeholder="A map is scheduled to start soon."
                                                                                  rows="5"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Custom message for
                                                                            email sent after map completes</label>
                                                                        <textarea class="form-control"
                                                                                  placeholder="A map is finished."
                                                                                  rows="5"></textarea>
                                                                    </div>
                                                                </div>


                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right">
                                                        <button type="submit"
                                                                class="btn btn-primary mar-l10" rel="">Submit
                                                        </button>
                                                        <a href="{{ url('/mssp-dashboard/mssp-configuration') }}"
                                                           class="btn btn-danger mar-l10" rel="">Cancel</a>
                                                    </div>
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
                                                            <th class="text-left">Domains</th>
                                                            <th class="text-left">Task Owner</th>
                                                            <th class="text-left">Launched User</th>
                                                            <th class="text-left">Reference</th>
                                                            <th class="text-left">Date</th>
                                                            <th class="text-left">Status</th>
                                                            <th class="text-left">&nbsp;</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php foreach($jobSchedules as $jobSchedule){ ?>
                                                        <tr>
                                                            <td><?=$jobSchedule->title;?></td>
                                                            <td>
                                                                <?php foreach($jobSchedule->jobScheduleDomains as $jobScheduleDomain){ ?>
                                                                <?=$jobScheduleDomain->domain->domains;?>
                                                                <?php } ?>
                                                            </td>
                                                            <td><?=$jobSchedule->taskOwner->first_name . ' '. $jobSchedule->taskOwner->last_name;?></td>
                                                            <td><?=$jobSchedule->createdByUser->first_name . ' '. $jobSchedule->createdByUser->last_name;?></td>
                                                            <td><?=$jobSchedule->map_reference;?></td>
                                                            <td><?=$jobSchedule->launch_date;?></td>
                                                            <td><?=$jobSchedule->status;?></td>
                                                            <td class="text-center"><a href="javascript:vaoid(0);"
                                                                                       data-id="<?=$jobSchedule->id;?>"
                                                                                       class="btn btn-warning launch-domain">
                                                                    <?=($jobSchedule->status == 'FINISHED') ? 'Relaunch' : 'Start';?>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <?php } ?>

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
                </div>
            </div>
        </div>
    </div>

@endsection

@section('extra-js')
    <script type="text/javascript">
        $.ajaxSetup({headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'}});
        $(document).on('click', '.launch-domain', function () {
            var currentScope = this
            $.ajax({
                url: "{{ url('/mssp-dashboard/mssp-configuration/add-domain-scan-launch') }}",
                method: "GET",
                data: {id: $(currentScope).data("id")},
                beforeSend: function (xhr) {
                    $(currentScope).html('Processing...');
                }
            }).done(function (res) {
                if(res.status == 'success'){
                    $(currentScope).html('View reports');
                } else {
                    alert("Error occured during scan. Please try again.")
                    $(currentScope).html('Start');
                }

            }).fail(function (jqXHR, textStatus) {
                $(currentScope).html('Start');
            });
        });
    </script>
@endsection