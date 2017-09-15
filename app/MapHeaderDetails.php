<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class MapHeaderDetails extends Model
{
    use Notifiable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'map_header_details';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'map_id', 'user_name', 'company', 'map_display_date', 'map_date', 'title', 'target', 'nbhost_total',
        'duration', 'scan_host', 'report_type', 'map_status', 'map_options', 'map_domain_list', 'is_active', 'is_deleted'
    ];

    public function jobSchedule()
    {
        return $this->hasOne(JobSchedules::class, 'id', 'map_id');
    }

    public function mapIpDetails()
    {
        return $this->hasMany(MapIpDetails::class, 'map_header_detail_id', 'id');
    }


}
