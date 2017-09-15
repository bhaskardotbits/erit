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
                        <li class="active"><a href="{{ url('/mssp-dashboard/mssp-configuration/domains') }}">Domains</a>
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

                        <a class="btn btn-success mar-b10" data-toggle="modal" data-target="#ai_add_domain"><i
                                    class="fa fa-plus"></i> Add Domain</a>


                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Domain Name</th>
                                <th>Comments</th>
                                <th>Created By</th>
                                <th class="text-center">Edit</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php foreach($domains as $domain){ ?>
                            <tr>
                                <td><?=$domain->domains;?></td>
                                <td><?=$domain->comments;?></td>
                                <td><?=$domain->createdByUser->first_name . ' ' . $domain->createdByUser->last_name;?></td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-warning" data-toggle="modal"
                                            data-target="#ai_edit_domain"><i class="fa fa-pencil"></i></button>
                                </td>
                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>


                        <div class="row mar-b20">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <ul class="pagination mar-t0 mar-b0 pull-left">
                                    <li><span><i class="fa fa-step-backward"></i></span>
                                    </li>
                                    <li><span><i class="fa fa-backward"></i></span>
                                    </li>
                                    <li><span class="noborder">Page</span><a href="#">1</a>
                                    </li>
                                    <li><span class="noborder">of 12</span>
                                    </li>
                                    <li><span><i class="fa fa-forward"></i></span>
                                    </li>
                                    <li><span><i class="fa fa-step-forward"></i></span>
                                    </li>

                                </ul>
                                <div class="col-md-2">
                                    <select>
                                        <option>10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>40</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ai_add_domain" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Add Domain</h4>
                </div>
                <div class="modal-body" style="overflow: hidden;">
                    <form role="form" method="POST"
                          action="{{ url('/mssp-dashboard/mssp-configuration/add-domain') }}">
                        {{ csrf_field() }}
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h3 class="mar-t0 sub-heading">Domains</h3>
                            <p>Enter domains and netblocks in the field below. See the help for proper formatting. </p>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group{{ $errors->has('dashboard_page') ? ' has-error' : '' }}">
                                <label class="control-label">Domains</label>
                                <input id="domains" type="text" class="form-control"
                                       name="domains" placeholder="Domains"
                                       value="{{ old('domains') }}">
                                @if ($errors->has('domains'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('domains') }}</strong>
                                    </span>
                                @endif
                                <small>(ex: dotbits.com: [192.168.0.87-192.168.0.92])</small>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group{{ $errors->has('comments') ? ' has-error' : '' }}">
                                <label class="control-label">Comments</label>
                                <textarea id="comments" class="form-control"
                                       name="comments" placeholder="Comments"
                                       >{{ old('comments') }}</textarea>
                                @if ($errors->has('comments'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('comments') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right">
                            <button type="submit" class="btn btn-primary mar-l10" >Add</button>
                            <a class="btn btn-danger mar-l10" data-dismiss="modal">Cancel</a></div>
                    </div>

                    </form>


                </div>
            </div>
        </div>
    </div>


@endsection
