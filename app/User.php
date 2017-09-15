<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'account_id', 'role_id', 'user_level_sub_module_actions', 'employee_id', 'first_name', 'last_name',
        'address1', 'address2', 'city', 'state', 'country', 'email', 'login_name', 'password', 'remember_token',
        'phone', 'fax', 'company', 'job_title','sub_module_ids',
        'module', 'submodules',
        'dashboard_page', 'business_justification',
        'manager_name', 'manager_email', 'business_unit_id', 'start_date', 'end_date', 'comments',
        'zip_code_external_id', 'external_id', 'language_id', 'time_zone', 'has_gui_access', 'has_api_access',
        'asset_group_ids', 'has_verisign_protection', 'keep_account_bcc', 'created_by', 'is_active', 'is_deleted'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getSubmodulesAttribute($value)
    {
        return json_decode($value);
    }

    public function setSubmodulesAttribute($value)
    {
        $this->attributes['submodules'] = is_array($value) ? json_encode($value) : json_encode([]);
    }

    public function role()
    {
        return $this->hasOne(Role::class, 'id', 'role_id');
    }

    public function account()
    {
        return $this->hasOne(Account::class, 'id', 'account_id');
    }
}
