<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Chaser extends Model
{
    protected $fillable = [
        'lead_id','agent_id','fax_sent','fax_received','remarks'
    ];
}
