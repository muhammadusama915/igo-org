<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client as CountryClient;
use App\Model\Leads;
class LeadController extends Controller
{
   
    public function index()
    {
        $leads = Leads::orderBy('id','desc')->get();
        return view('admin-views.lead.index', compact('leads'));
    }

    public function create() 
    {
        $client = new CountryClient();
        $states = $client->get('https://api.countrystatecity.in/v1/countries/US/states', [
            'headers' => [
                    'X-CSCAPI-KEY' => 'dXVHUmY0RGtpVVFCRVZPUDJnYXFrRUp0bDl6RUM5R3RyUzZobWJQUA==',
               ],
        ]);
        $states = $states->getBody()->getContents();
        $states = json_decode($states);
        //$states = [];
        return view('admin-views.lead.create',compact('states'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'sip_id'               => 'required|integer',
            'status'               => 'required',
            'product'              => 'required',
            'phone'                => 'required|integer|min:11',
            'phone_2'              => 'nullable|integer|min:11',
            'f_name'               => 'required|string|max:255',
            'm_name'               => 'nullable|string|max:255',
            'l_name'               => 'required|string|max:255',
            'dob'                  => 'required|date',
            'gender'               => 'required|string|max:10',
            'address'              => 'required|string',
            'address_2'            => 'nullable|string',
            'state'                => 'required|string|max:255',
            'city'                 => 'required|string|max:255',
            'zipcode'              => 'required|string|max:255',
            'medcare_id'           => 'required|integer|unique:leads',
            'ssn'                  => 'required|string|max:255',
            'height'               => 'nullable|string|max:255',
            'weight'               => 'nullable|string|max:255',
            'waist'                => 'nullable|string|max:255',
            'shoe_size'            => 'nullable|numeric',
            'scale_of_pain'        => 'nullable|string|max:255',
            'pain_area'            => 'nullable|string|max:255',
            'golucose_level'       => 'nullable|integer',
            'pills'                => 'nullable|integer',
            'injected_insulin'     => 'nullable|integer',
            'name_of_medicine'     => 'nullable|string|max:255',
            'covid_kit'            => 'nullable|string|max:255',
            'covid_kit_date'       => 'nullable|date',
            'comment'              => 'nullable|string',
            'agent_id'             => 'required|integer',
            'doc_phone'            => 'nullable|integer|min:11',
            'doc_f_name'           => 'nullable|string|max:255',
            'doc_l_name'           => 'nullable|string|max:255',
            'second_doc_details'   => 'nullable|string',
            'doc_address'          => 'nullable|string',
            'doc_state'            => 'nullable|string|max:255',
            'doc_city'             => 'nullable|string|max:255',
            'doc_zipcode'          => 'nullable|string|max:255',
            'doc_npi'              => 'nullable|string|max:255',
            'doc_fax'              => 'nullable|string|max:255',
            'patient_last_visit_id'=> 'nullable|string|max:255',
        ]);
    
        $lead = new Leads();
        $lead->fill($request->all());
        $lead->save();
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
        return view('admin-views.lead.view',compact('lead','states'));
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
       // $states = [];
        return view('admin-views.lead.edit',compact('lead','states'));
    }

    public function update(Request $request)
    {
        $lead = Leads::find($request->id);
        $request->validate([
            'sip_id'               => 'required|integer',
            'status'               => 'required',
            'product'              => 'required',
            'phone'                => 'required|integer|min:11',
            'phone_2'              => 'nullable|integer|min:11',
            'f_name'               => 'required|string|max:255',
            'm_name'               => 'nullable|string|max:255',
            'l_name'               => 'required|string|max:255',
            'dob'                  => 'required|date',
            'gender'               => 'required|string|max:10',
            'address'              => 'required|string',
            'address_2'            => 'nullable|string',
            'state'                => 'required|string|max:255',
            'city'                 => 'required|string|max:255',
            'zipcode'              => 'required|string|max:255',
            'medcare_id'           => 'required|integer|unique:leads,medcare_id,'.$lead->id,
            'ssn'                  => 'required|string|max:255',
            'height'               => 'nullable|string|max:255',
            'weight'               => 'nullable|string|max:255',
            'waist'                => 'nullable|string|max:255',
            'shoe_size'            => 'nullable|numeric',
            'scale_of_pain'        => 'nullable|string|max:255',
            'pain_area'            => 'nullable|string|max:255',
            'golucose_level'       => 'nullable|integer',
            'pills'                => 'nullable|integer',
            'injected_insulin'     => 'nullable|integer',
            'name_of_medicine'     => 'nullable|string|max:255',
            'covid_kit'            => 'nullable|string|max:255',
            'covid_kit_date'       => 'nullable|date',
            'comment'              => 'nullable|string',
            'doc_phone'            => 'nullable|integer|min:11',
            'doc_f_name'           => 'nullable|string|max:255',
            'doc_l_name'           => 'nullable|string|max:255',
            'second_doc_details'   => 'nullable|string',
            'doc_address'          => 'nullable|string',
            'doc_state'            => 'nullable|string|max:255',
            'doc_city'             => 'nullable|string|max:255',
            'doc_zipcode'          => 'nullable|string|max:255',
            'doc_npi'              => 'nullable|string|max:255',
            'doc_fax'              => 'nullable|string|max:255',
            'patient_last_visit_id'=> 'nullable|string|max:255',
        ]);
    
        $lead->update($request->all());
        return response()->json('success');
    }

    public function destroy(Request $request)
    {
        Leads::find($request->id)->delete();
        return response()->json('success');
    }
}
