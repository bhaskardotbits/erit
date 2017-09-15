<?php

namespace App\Http\Controllers\AdminModule;

use App\AccountModules;
use App\Module;
use App\User;
use App\Role;
use Auth;
use Hash;
use App\Account;
use App\ApiUsers;
use App\Mail\UserCreated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\AdminBaseController;

class AdminModuleController extends AdminBaseController
{
    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function index()
    {
        $this->layout->content = view('admin-module.admin-module');
    }

    public function userConfiguration()
    {
        $this->layout->content = view('admin-module.user-configuration');
    }

    public function accountSettings()
    {
        $data['accounts'] = Account::whereNotIn('id', [1])->get();

        $this->layout->content = view('admin-module.account-settings', $data);
    }


    public function profile(Request $request)
    {
        $user = Auth::user();
        if($request->method() == 'POST'){
            $post_data = $request->except('_token');

            User::where('id', '=', $user->id)->update($post_data);
            return redirect('admin-profile')
                ->with('message', 'Profile updated successfully!');
        }
        $businessUnits = [];
        $roles = Role::all(); //dd($roles);
        $this->layout->content = view('admin-module.profile', compact('user','businessUnits','roles'));
    }

    public function updatePassword(Request $request)
    {
        if($request->method() == 'POST') {
            $this->validate($request, [
                'old_password' => 'required',
                'new_password' => 'required|min:6',
                'confirm_password' => 'required|same:new_password',
            ]);
            $data = $request->all();

            $user = User::find(auth()->user()->id);

            if (!Hash::check($data['old_password'], $user->password)) {
                return back()->with('error', 'The specified password does not match the database password');
            } else {
                $data['password'] = Hash::make($data['new_password']);
                $user->update($data);
                return redirect('admin-profile')->with('message', 'Password changed successfully!');
            }
        }
        $this->layout->content = view('admin-module.change-password');
    }


    public function addAccount(Request $request)
    {
        if($request->method() == 'POST'){
            $post_data = $request->except('_token');

            $password = str_random(10);
            $post_data['password'] = bcrypt($password);
            $login_name = mb_substr($post_data['first_name'], 0, 3).mb_substr($post_data['last_name'], 0, 1).str_random(5);
            $post_data['login_name'] = $login_name;

            $apiUser = ApiUsers::find(1);

            $account = Account::create([
                                           'api_user_id'  => $apiUser->id,
                                           'login_name'   => $post_data['login_name'],
                                           'email'        => $post_data['email'],
                                           'password'     => $post_data['password'],
                                           "company_name" => $post_data['company_name'],
                                           "website"      => $post_data['website'],
                                           "year_found"   => $post_data['year_found'],
                                           "company_type" => $post_data['company_type'],
                                           "company_size" => $post_data['company_size'],
                                           "no_of_asstes" => $post_data['no_of_asstes'],
                                       ]);

            $user = User::create([
                                     'account_id' => $account->id,
                                     'role_id'    => 2,
                                     'first_name' => $post_data['first_name'],
                                     'last_name'  => $post_data['last_name'],
                                     'login_name' => $post_data['login_name'],
                                     'email'      => $post_data['email'],
                                     'password'   => $post_data['password'],
                                     "address1"   => $post_data['address1'],
                                     "address2"   => $post_data['address2'],
                                     "city"       => $post_data['city'],
                                     "state"      => $post_data['state'],
                                     "country"    => $post_data['country'],
                                     "phone"      => $post_data['phone'],
                                     "email"      => $post_data['email'],
                                     "job_title"  => $post_data['job_title'],
                                 ]);

            $account->main_user_id = $user->id;
            $account->save();

            foreach($post_data['modules'] as $module_id => $module_details){
                AccountModules::create([
                    'account_id' => $account->id,
                    'module_id'  => $module_id
                ]);
            }

            Mail::to($user->email)->send(new UserCreated($user, $password));

            return redirect('admin-module/account-settings')
                ->with('status', 'Account created successfully!');
        }

        $data = [];
        $data['modules'] = Module::all();

        $this->layout->content = view('admin-module.add-account', $data);
    }

    public function generalSettings()
    {
        $this->layout->content = view('admin-module.general-settings');
    }

    public function ajaxSubmodulesList(Request $request)
    {
        $return = [
            'status'      => 'failure',
            'message'     => 'Invalid data',
            'status_code' => 201
        ];


        if($request->method() == 'POST') {

            $module = Module::where([
                                             'id' => $request->input('id')
                                         ])->first();

            $module->load([
                'submodules'
                          ]);

            $return = [
                'status'      => 'failure',
                'message'     => 'Invalid module',
                'status_code' => 201
            ];

            if($module) {

                $return = [
                    'status'      => 'success',
                    'message'     => 'Module details.',
                    'data'        => $module,
                    'status_code' => 201
                ];
            }
        }

        return response()->json($return, 201);
    }
}
