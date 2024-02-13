<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class QA2 extends Model
{
    protected $fillable = [
        'lead_id','agent_id','initial_recording','remarks'
    ];

    public function agent_details(){
        return $this->belongsTo(Admin::class, 'agent_id','id');
    }
}
