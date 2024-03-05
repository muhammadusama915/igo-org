<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class FormFilling extends Model
{
    public function agent_details(){
        return $this->belongsTo(Admin::class, 'agent_id','id');
    }

    public function assigned_to(){
        return $this->belongsTo(Admin::class, 'assign_to','id');
    }
}
