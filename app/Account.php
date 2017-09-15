<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use Notifiable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'accounts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'api_user_id', 'main_user_id', 'login_name', 'email', 'password', 'mobile_number', 'is_active',
        'company_name', 'website', 'year_found', 'company_type', 'company_size', 'no_of_asstes'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];

    public function mainUser()
    {
        return $this->hasOne(User::class, 'id', 'main_user_id');
    }

    public function accountModules()
    {
        return $this->hasMany(AccountModules::class, 'account_id', 'id');
    }
}
