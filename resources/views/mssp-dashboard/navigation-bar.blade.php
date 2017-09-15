<ul class="nav nav-tabs" role="tablist">
    <?php if(isset($user) && ($user->role_id != 3) ){ ?>
        <li><a href="{{ url('/mssp-dashboard/mssp-configuration') }}">MSSP Configuration Info</a> </li>
    <?php } ?>
    <li><a href="#">MSSP Services</a> </li>
</ul>