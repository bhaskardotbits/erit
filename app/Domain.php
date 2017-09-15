<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Domain extends Authenticatable
{
    use Notifiable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'domains';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'account_id', 'domains', 'netblock', 'comments', 'reference', 'launch_time', 'status', 'created_by'
    ];

    public function account()
    {
        return $this->hasOne(Account::class, 'id', 'account_id');
    }

    public function createdByUser()
    {
        return $this->hasOne(User::class, 'id', 'created_by');
    }
}
