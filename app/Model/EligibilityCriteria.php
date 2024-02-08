<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class EligibilityCriteria extends Model
{
    protected $fillable = [
        'lead_id','status','remarks','agent_id'
    ];

    public function agent_details(){
        return $this->belongsTo(Admin::class, 'agent_id','id');
    }
}
