<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Leads;
use App\Model\FormFilling;
use App\Model\Chaser;
use App\Model\Followup;
use GuzzleHttp\Client as CountryClient;

class ChaserController extends Controller
{
    public function index()
    {
        $forms = FormFilling::where('assign_to', auth('admin')->id())->get();
        $formIds = $forms->pluck('lead_id')->toArray();
        $leads = Leads::whereIn('id', $formIds)->orderBy('id', 'desc')->get();
        return view('admin-views.chaser.index', compact('leads'));
    }

    public function store(Request $request)
    {
        $lead = Leads::find($request->lead_id);
        $lead->status = $request->action;
        $lead->save();
        $check = Chaser::where('lead_id', $request->lead_id)->first();
        if($check){
            $chaser = Chaser::where('lead_id', $request->lead_id)->first();
        }else{
            $chaser = new Chaser();
        }
        $chaser->lead_id = $request->lead_id;
        $chaser->agent_id = $request->agent_id;
        $chaser->fax_sent = $request->fax_sent;
        $chaser->fax_received = $request->fax_received;
        $chaser->remarks = $request->remarks;
        $chaser->save();
        $follow_up = new Followup();
        $follow_up->lead_id = $request->lead_id;
        $follow_up->remarks = $request->remarks;
        $follow_up->save();
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
        return view('admin-views.chaser.view',compact('lead','states'));
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
        return view('admin-views.chaser.edit',compact('lead','states'));
    }

}
