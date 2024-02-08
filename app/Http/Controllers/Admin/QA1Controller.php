<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Leads;
use App\Model\QA1;
use GuzzleHttp\Client as CountryClient;

class QA1Controller extends Controller
{
    public function index()
    {
        $leads = Leads::whereIn('status',[2,4,5])->orderBy('id','desc')->get();
        return view('admin-views.QA1.index', compact('leads'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $lead = Leads::find($request->lead_id);
        $lead->status = $request->action;
        $lead->save();
        $check = QA1::where('lead_id', $request->lead_id)->first();
        if($check){
            $qa1 = QA1::where('lead_id', $request->lead_id)->first();
        }else{
            $qa1 = new QA1();
        }
        $qa1->lead_id = $request->lead_id;
        $qa1->agent_id = $request->agent_id;
        $qa1->calling_from = $request->calling_from;
        $qa1->agent_way_of_talk = $request->agent_way_of_talk;
        $qa1->customer_way_of_talk = $request->patient_way_of_talk;
        $qa1->remarks = $request->remarks;
        $recording = $request->file('recording');
        $fileName = time() . $recording->getClientOriginalName();
        $filePath = $recording->storeAs('public/qa1', $fileName);
        $qa1->recording = $fileName;
        $qa1->save();
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
        return view('admin-views.QA1.view',compact('lead','states'));
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
        return view('admin-views.QA1.edit',compact('lead','states'));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
