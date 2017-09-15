<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class JobSchedules extends Authenticatable
{
    use Notifiable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'job_schedules';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'account_id', 'title', 'task_owner_id', 'asset_domain', 'asset_ip', 'created_by', 'map_reference', 'launch_date', 'status'
    ];

    public function account()
    {
        return $this->hasOne(Account::class, 'id', 'account_id');
    }

    public function createdByUser()
    {
        return $this->hasOne(User::class, 'id', 'created_by');
    }

    public function taskOwner()
    {
        return $this->hasOne(User::class, 'id', 'task_owner_id');
    }

    public function jobScheduleDomains()
    {
        return $this->hasMany(JobScheduleDomains::class, 'job_schedule_id', 'id');
    }

    public function mapHeaderDetails()
    {
        return $this->hasOne(MapHeaderDetails::class, 'map_id', 'id');
    }

    public function mapIpDetails()
    {
        return $this->hasMany(MapIpDetails::class, 'map_id', 'id');
    }
}
