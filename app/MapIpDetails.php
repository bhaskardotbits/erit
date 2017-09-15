<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class MapIpDetails extends Model
{
    use Notifiable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'map_ip_details';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'map_id', 'map_header_detail_id', 'ip_address', 'ip_name', 'ip_type', 'ip_os', 'ip_account',
        'ip_netbios', 'discovery_method_list', 'port_list', 'link_value', 'is_active', 'is_deleted'
    ];

    public function jobSchedule()
    {
        return $this->hasOne(JobSchedules::class, 'id', 'map_id');
    }

    public function mapHeaderDetails()
    {
        return $this->hasOne(MapHeaderDetails::class, 'id', 'map_header_detail_id');
    }


}
