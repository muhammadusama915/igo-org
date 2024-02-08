<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class QA1 extends Model
{
    protected $fillable = [
        'lead_id','agent_id','calling_from','recording','agent_way_of_talk','customer_way_of_talk','remarks'
    ];

    public function agent_details(){
        return $this->belongsTo(Admin::class, 'agent_id','id');
    }
}
