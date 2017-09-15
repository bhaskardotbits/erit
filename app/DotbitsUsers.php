<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class DotbitsUsers extends Model
{
    use Notifiable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'dotbits_users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'employee_id', 'first_name', 'last_name', 'address1', 'address2', 'city', 'state', 'country',
        'email', 'phone', 'fax', 'company', 'job_title', 'manager_employee_id'
    ];


    /**
     * Call View
     *
     * @param $query
     *
     * @return mixed
     */
    public function scopeFromView($query)
    {
        return $query->from('vw_connect_hr');
    }
}
