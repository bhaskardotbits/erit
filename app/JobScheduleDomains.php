<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class JobScheduleDomains extends Authenticatable
{
    use Notifiable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'job_schedule_domains';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'job_schedule_id', 'domain_id'
    ];

    public function jobSchedule()
    {
        return $this->hasOne(JobSchedules::class, 'id', 'job_schedule_id');
    }

    public function domain()
    {
        return $this->hasOne(Domain::class, 'id', 'domain_id');
    }
}
