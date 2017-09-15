<ul class="nav nav-tabs" role="tablist">
    <li ><a href="{{ url('/admin-module') }}">Usage Tracking Dashboard</a> </li>
    <?php if(Auth::user()->role_id == 1){ ?>
    <li ><a href="{{ url('/admin-module/account-settings') }}" >Account Settings </a> </li>
    <?php } ?>
    <li ><a href="{{ url('/admin-module/user-configuration') }}" >User Configuration </a> </li>
    <li ><a href="{{ url('/admin-module/general-settings') }}" >General Settings</a> </li>
</ul>
