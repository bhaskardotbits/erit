<div class="clearfix"></div>

@if (Session::has('errors') || Session::has('error'))
    <div class="alert alert-danger alert-dismissible mar-b0 mar-t20" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>

        @if(Session::has('error'))
            {{ Session::get('error') }}
        @else
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
@endif

@if (Session::has('status'))
    <div class="alert alert-success alert-dismissible mar-b0 mar-t20" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        <i class="fa fa-check-circle"></i> {{ Session::get('status') }}
    </div>
@endif

@if (Session::has('success'))
    <div class="alert alert-success alert-dismissible mar-b0 mar-t20" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        <i class="fa fa-check-circle"></i> {{ Session::get('success') }}
    </div>
@endif

{{--
<div class="alert alert-dismissible inv" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <span class="ajax-message"></span>
</div>--}}
