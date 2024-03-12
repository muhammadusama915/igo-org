<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Leads extends Model
{
    protected $fillable = [
        'product','status','sip_id', 'phone', 'phone_2', 'f_name', 'm_name', 'l_name', 'dob', 'gender',
        'address', 'address_2', 'state', 'city', 'zipcode', 'medcare_id', 'ssn',
        'height', 'weight', 'waist', 'shoe_size', 'scale_of_pain', 'pain_area',
        'golucose_level', 'pills', 'injected_insulin', 'name_of_medicine', 'covid_kit',
        'covid_kit_date', 'comment', 'agent_id', 'doc_phone', 'doc_f_name', 'doc_l_name',
        'second_doc_details', 'doc_address', 'doc_state', 'doc_city', 'doc_zipcode',
        'doc_npi', 'doc_fax', 'patient_last_visit_id'
    ];

    public function all_agents(){
        return Admin::get();
    }
    public function agent_details(){
        return $this->belongsTo(Admin::class, 'agent_id','id');
    }

    public function eligibility_details(){
        return $this->belongsTo(EligibilityCriteria::class, 'id', 'lead_id');
    }

    public function qa1_details(){
        return $this->belongsTo(QA1::class, 'id', 'lead_id');
    }

    public function qa2_details(){
        return $this->belongsTo(QA2::class, 'id', 'lead_id');
    }

    public function form_filling_details(){
        return $this->belongsTo(FormFilling::class, 'id', 'lead_id');
    }

    public function chaser_details(){
        return $this->belongsTo(Chaser::class, 'id', 'lead_id');
    }

    public function confirmation_details(){
        return $this->belongsTo(Confirmation::class, 'id', 'lead_id');
    }

    public function followup_details(){
        return $this->hasMany(Followup::class, 'lead_id', 'id');
    }
}
