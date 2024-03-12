<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Leads;
use App\Model\FormFilling;
use App\Model\Chaser;
use App\Model\Confirmation;
use App\Model\Followup;
use GuzzleHttp\Client as CountryClient;

class ConfirmationController extends Controller
{
    public function index()
    {
        $leads = Leads::whereIn('status', [11,13,14])->orderBy('id', 'desc')->get();
        return view('admin-views.confirmation.index', compact('leads'));
    }

    public function store(Request $request)
    {
        $lead = Leads::find($request->lead_id);
        $lead->status = $request->action;
        $lead->save();
        $check = Confirmation::where('lead_id', $request->lead_id)->first();
        if($check){
            $confirmation = Confirmation::where('lead_id', $request->lead_id)->first();
        }else{
            $confirmation = new Confirmation();
        }
        $confirmation->lead_id = $request->lead_id;
        $confirmation->agent_id = $request->agent_id;
        $confirmation->remarks = $request->remarks;
        $confirmation->save();
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
        //$states = [];
        return view('admin-views.confirmation.view',compact('lead','states'));
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
        return view('admin-views.confirmation.edit',compact('lead','states'));
    }
}
