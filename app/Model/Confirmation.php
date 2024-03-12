<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Confirmation extends Model
{
    protected $fillable = [
        'lead_id','agent_id','remarks'
    ];
}
