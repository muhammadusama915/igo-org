<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Leads;
use App\Model\EligibilityCriteria;
use GuzzleHttp\Client as CountryClient;

class EligibilityController extends Controller
{

    public function index()
    {
        $leads = Leads::orderBy('id','desc')->get();
        return view('admin-views.eligibility.index', compact('leads'));
    }
 
    public function store(Request $request)
    {
        $lead = Leads::find($request->lead_id);
        $lead->status = $request->action;
        $lead->save();
        $check = EligibilityCriteria::where('lead_id', $request->lead_id)->first();
        if($check){
            $eligibility = EligibilityCriteria::where('lead_id', $request->lead_id)->first();
        }else{
            $eligibility = new EligibilityCriteria();
        }
        $eligibility->lead_id = $request->lead_id;
        $eligibility->status = $request->status;
        $eligibility->remarks = $request->remarks;
        $eligibility->agent_id = $request->agent_id;
        $eligibility->save();
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
        return view('admin-views.eligibility.view',compact('lead','states'));
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
        return view('admin-views.eligibility.edit',compact('lead','states'));
    }

}
