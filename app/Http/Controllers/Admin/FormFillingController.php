<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Leads;
use App\Model\FormFilling;
use GuzzleHttp\Client as CountryClient;

class FormFillingController extends Controller
{
    public function index()
    {
        $leads = Leads::whereIn('status',[6,8,9])->orderBy('id','desc')->get();
        return view('admin-views.form-filling.index', compact('leads'));
    }

    public function store(Request $request)
    {
        $lead = Leads::find($request->lead_id);
        $lead->status = 8;
        $lead->save();
        $check = FormFilling::where('lead_id', $request->lead_id)->first();
        if($check){
            $form_filling = FormFilling::where('lead_id', $request->lead_id)->first();
        }else{
            $form_filling = new FormFilling();
        }
        $form_filling->lead_id = $request->lead_id;
        $form_filling->agent_id = $request->agent_id;
        $form_filling->assign_to = $request->assign_to;
        $form_filling->type = $request->type;
        $form_filling->diagnose = json_encode($request->diagnose);
        $form_filling->remarks = $request->remarks;
        $form_filling->save();
        return response()->json('success');
    }

    public function show($id)
    {
        $lead = Leads::find($id);
        $client = new CountryClient();
        $states = $client->get('https://api.countrystatecity.in/v1/countries/US/states', [
            'headers' => [
                    'X-CSCAPI-KEY' => 'dXVHUmY0RGtpVVFCRVZPUDJnYXFrRUp0bDl6RUM5R3RyUzZobWJQUA==',
               ],
        ]);
        $states = $states->getBody()->getContents();
        $states = json_decode($states);
       // $states = [];
        return view('admin-views.form-filling.view',compact('lead','states'));
    }

    public function edit($id)
    {
        $lead = Leads::find($id);
        $client = new CountryClient();
        $states = $client->get('https://api.countrystatecity.in/v1/countries/US/states', [
            'headers' => [
                    'X-CSCAPI-KEY' => 'dXVHUmY0RGtpVVFCRVZPUDJnYXFrRUp0bDl6RUM5R3RyUzZobWJQUA==',
               ],
        ]);
        $states = $states->getBody()->getContents();
        $states = json_decode($states);
        //$states = [];
        return view('admin-views.form-filling.edit',compact('lead','states'));
    }

    public function view_form($id){
        $lead = Leads::find($id);
        $forms = $lead->form_filling_details ? json_decode($lead->form_filling_details->diagnose) : [];
        return $lead->form_filling_details ? ($lead->form_filling_details->type == 'Universal' ? view('admin-views.form-filling.universal_forms', compact('lead', 'forms')) : view('admin-views.form-filling.custom_forms', compact('lead', 'forms'))) : view('admin-views.form-filling.custom_forms', compact('lead', 'forms'));
        //return view('admin-views.form-filling.custom_forms',compact('lead','forms'));
    }
}
