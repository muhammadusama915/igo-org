<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Followup extends Model
{
    protected $fillable = [
        'lead_id','remarks'
    ];
}
