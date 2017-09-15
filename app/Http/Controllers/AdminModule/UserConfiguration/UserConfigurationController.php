<?php

namespace App\Http\Controllers\AdminModule\UserConfiguration;

use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminBaseController;

class UserConfigurationController extends AdminBaseController
{

    public function msspConfiguration()
    {
        $user = Auth::user();

        $data['users'] = User::where('account_id', $user->account_id)
            ->get();

        $this->layout->content =  view('admin-module/user-configuration/mssp-configuration', $data);
    }
}
