<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Leads;
use App\Model\QA2;
use GuzzleHttp\Client as CountryClient;

class QA2Controller extends Controller
{
    public function index()
    {
        $leads = Leads::whereIn('status',[4,6,7])->orderBy('id','desc')->get();
        return view('admin-views.QA2.index', compact('leads'));
    }

    public function store(Request $request)
    {
        $lead = Leads::find($request->lead_id);
        $lead->status = $request->action;
        $lead->save();
        $check = QA2::where('lead_id', $request->lead_id)->first();
        if($check){
            $qa2 = QA2::where('lead_id', $request->lead_id)->first();
        }else{
            $qa2 = new QA2();
        }
        $qa2->lead_id = $request->lead_id;
        $qa2->agent_id = $request->agent_id;
        $qa2->remarks = $request->remarks;
        $recording = $request->file('recording');
        $fileName = time() . $recording->getClientOriginalName();
        $filePath = $recording->storeAs('public/qa2', $fileName);
        $qa2->initial_recording = $fileName;
        $qa2->save();
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
        return view('admin-views.QA2.view',compact('lead','states'));
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
        return view('admin-views.QA2.edit',compact('lead','states'));
    }

}
