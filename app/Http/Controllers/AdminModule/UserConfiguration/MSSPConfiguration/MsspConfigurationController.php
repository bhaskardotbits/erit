<?php

namespace App\Http\Controllers\AdminModule\UserConfiguration\MSSPConfiguration;

use App\DotbitsUsers;
use App\Mail\UserCreated;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Role;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\AdminBaseController;

class MsspConfigurationController extends AdminBaseController
{
    public function __construct()
    {

    }

    public function addUser(Request $request)
    {
        $user = Auth::user();

        $user->load([
            'account.accountModules.module.submodules'
        ]);

        if($request->method() == 'POST'){
            $post_data = $request->except('_token');
            $post_data['account_id'] = $user->account_id;
            $password = str_random(10);
            $post_data['password'] = bcrypt($password);
            $login_name = mb_substr($post_data['first_name'], 0, 3).mb_substr($post_data['last_name'], 0, 1).str_random(5);
            $post_data['login_name'] = $login_name;

            if(empty($post_data['end_date'])){
                unset($post_data['end_date']);
            }

            $user = User::create($post_data);
            Mail::to($user->email)->send(new UserCreated($user, $password));

            return redirect('admin-module/user-configuration/mssp-configuration')
                ->with('status', 'User added successfully!');
        }

        $data = [];
        $data['user'] = $user;
        $data['roles'] = Role::whereNotIN('id', ['1'])->get();
        $data['dotbits_users'] = DotbitsUsers::fromView()->get();

        $this->layout->content = view('admin-module/user-configuration/mssp-configuration/add-user', $data);
    }
}
