@extends('layouts.back-end.app')

@section('title', \App\CPU\translate('QA 1'))

@push('css_or_js')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .sellerName {
            height: fit-content;
            margin-top: 10px;
            margin-left: 10px;
            font-size: 16px;
            border-radius: 25px;
            text-align: center;
            padding-top: 10px;
        }
        @keyframes growProgressBar {
  0%, 33% { --pgPercentage: 0; }
  100% { --pgPercentage: var(--value); }
}


div[role="progressbar"] {
  --size: 5rem;
  --fg: #369;
  --bg: #def;
  --pgPercentage: var(--value);
  animation: growProgressBar 3s 1 forwards;
  width: var(--size);
  height: var(--size);
  border-radius: 50%;
  display: grid;
  place-items: center;
  background: 
    radial-gradient(closest-side, white 80%, transparent 0 99.9%, white 0),
    conic-gradient(var(--fg) calc(var(--pgPercentage) * 1%), var(--bg) 0)
    ;
  font-family: Helvetica, Arial, sans-serif;
  font-size: calc(var(--size) / 5);
  color: var(--fg);
}
@property --pgPercentage {
  syntax: '<number>';
  inherits: false;
  initial-value: 0;
}
div[role="progressbar"]::before {
  counter-reset: percentage var(--value);
  content: counter(percentage) '%';
}

    
</style>
@endpush
@php
use App\Model\Admin;
@endphp
@section('content')
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header d-print-none p-3" style="background: white">
            <div class="row align-items-center">
                <div class="col-sm mb-2 mb-sm-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-no-gutter">
                            <li class="breadcrumb-item"><a class="breadcrumb-link"
                                                           href="">{{\App\CPU\translate('QA 1')}}</a>
                            </li>
                            <li class="breadcrumb-item active"
                                aria-current="page">{{\App\CPU\translate('Lead')}} {{\App\CPU\translate('details')}} </li>
                        </ol>
                    </nav>

                    <div class="d-sm-flex align-items-sm-center pt-3">
                        <h1 class="page-header-title">{{\App\CPU\translate('Lead')}} # 00{{$lead->id}}</h1>
                            <span class="badge badge-soft-danger ml-sm-3">
                                <span class="legend-indicator bg-danger"></span>{{ $lead->product }}
                            </span>
                            <span class="badge badge-soft-warning ml-sm-3">
                                <span class="legend-indicator bg-warning"></span>@if($lead->status == 2) Pending for Approval @elseif($lead->status == 4) Approved from QA 1 @elseif($lead->status == 5) Rejected from QA 1 @else N/A @endif
                            </span>
                        <span class="ml-2 ml-sm-3">
                        <i class="tio-date-range"></i> {{date('d M Y H:i A',strtotime($lead->created_at))}}
                        </span>
                        <span class="ml-2 ml-sm-3 mt-1">
                        <label class="badge badge-info">{{\App\CPU\translate('CSR Agent')}}
                            : {{ $lead->agent_details->name }}</label>
                        </span>
                        <span class="ml-2 ml-sm-3 mt-1">
                        <label class="badge badge-success">{{\App\CPU\translate('Eligibility Criteria Agent')}}
                            : {{ optional($lead->eligibility_details)->agent_details->name ?? 'Not Specified' }}</label>
                        </span>
                    </div>
                    <!-- End Unfold -->
                </div>
            </div>
        </div>

        <!-- End Page Header -->

        <div class="row" id="printableArea">
            <div class="col-lg-8 mb-3 mb-lg-0">
                <!-- Card -->
                <form id="edit-lead">
                     @csrf
                <div class="card mb-3 mb-lg-5">
                        <div class="card-header">
                            <h2 class="card-title h4">{{\App\CPU\translate('Patient')}} {{\App\CPU\translate('information')}}</h2>
                        </div>
                       
                        <!-- Body -->
                        <div class="card-body">
                            <!-- Form -->
                            <!-- Form Group -->
                            <div class="row form-group">
                                <div class="col-sm-6 mt-0">
                                    <label for="sip_id" class="col-form-label input-label">{{\App\CPU\translate('SIP ID')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="sip_id"></i></label>
                                    <div class="input-group input-group-sm-down-break">
                                        <input type="number" class="form-control" name="sip_id" id="sip_id" placeholder="{{\App\CPU\translate('SIP ID')}}" aria-label="sip_id" value="{{ $lead->sip_id ?? '' }}" required>
                                        <input type="hidden" name="product" class="product-name" value="Braces">
                                        <input type="hidden" name="status" value="1">
                                        <input type="hidden" name="id" value="{{$lead->id}}">
                                    </div>
                                </div>

                                <!-- Phone Field -->
                                <div class="col-sm-6 mt-0">
                                    <label for="phone" class="col-form-label input-label">{{\App\CPU\translate('Phone')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="phone"></i></label>
                                    <div class="input-group input-group-sm-down-break">
                                        <input type="number" class="js-masked-input form-control" name="phone" id="phoneLabel" placeholder="+x(xxx)xxx-xx-xx" aria-label="+(xxx)xx-xxx-xxxxx" value="{{ $lead->phone ?? '' }}" required>
                                    </div>
                                </div>

                                <!-- Phone 2 Field -->
                                <div class="col-sm-6 mt-0">
                                    <label for="phone2" class="col-form-label input-label">{{\App\CPU\translate('Phone 2')}} <span class="input-label-secondary">({{\App\CPU\translate('Optional')}})</span></label>
                                    <div class="input-group input-group-sm-down-break">
                                        <input type="number" class="js-masked-input form-control" name="phone2" id="phoneLabel2" placeholder="+x(xxx)xxx-xx-xx" aria-label="+(xxx)xx-xxx-xxxxx" value="{{ $lead->phone2 ?? '' }}">
                                    </div>
                                </div>

                                <!-- First Name Field -->
                                <div class="col-sm-6 mt-0">
                                    <label for="f_name" class="col-form-label input-label">{{\App\CPU\translate('First')}} {{\App\CPU\translate('Name')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display f_name"></i></label>
                                    <div class="input-group input-group-sm-down-break">
                                        <input type="text" class="form-control" name="f_name" id="formLabel" placeholder="{{\App\CPU\translate('Type first name')}}" aria-label="Type first name" value="{{ $lead->f_name ?? '' }}" required>
                                    </div>
                                </div>

                                <!-- Middle Name Field -->
                                <div class="col-sm-6 mt-0">
                                    <label for="m_name" class="col-form-label input-label">{{\App\CPU\translate('Middle')}} {{\App\CPU\translate('Name')}} <span class="input-label-secondary">({{\App\CPU\translate('Optional')}})</span></label>
                                    <div class="input-group input-group-sm-down-break">
                                        <input type="text" class="form-control" name="m_name" id="m_name" placeholder="{{\App\CPU\translate('Type middle name')}}" aria-label="Type " value="{{ $lead->m_name ?? '' }}">
                                    </div>
                                </div>

                                <!-- Last Name Field -->
                                <div class="col-sm-6 mt-0">
                                    <label for="l_name" class="col-form-label input-label">{{\App\CPU\translate('Last')}} {{\App\CPU\translate('Name')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display l_name"></i></label>
                                    <div class="input-group input-group-sm-down-break">
                                        <input type="text" class="form-control" name="l_name" id="l_name" placeholder="{{\App\CPU\translate('Your last name')}}" aria-label="Your last name" value="{{ $lead->l_name ?? '' }}" required>
                                    </div>
                                </div>

                                <!-- Date of Birth Field -->
                                <div class="col-sm-6 mt-0">
                                    <label for="dob" class="col-form-label input-label">{{\App\CPU\translate('Date of Birth')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display dob"></i></label>
                                    <div class="input-group input-group-sm-down-break">
                                        <input type="date" class="form-control" name="dob" id="dob" placeholder="{{\App\CPU\translate('DOB')}}" aria-label="Type " value="{{ $lead->dob ?? '' }}" required>
                                    </div>
                                </div>

                                <!-- Gender Field -->
                                <div class="col-sm-6 mt-0">
                                    <label for="gender" class="col-form-label input-label">{{\App\CPU\translate('Gender')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display gender"></i></label>
                                    <div class="input-group input-group-sm-down-break">
                                        <select name="gender" class="form-control" required>
                                            <option value="">Select Gender</option>
                                            <option value="male" {{ ($lead->gender ?? '') == 'male' ? 'selected' : '' }}>Male</option>
                                            <option value="female" {{ ($lead->gender ?? '') == 'female' ? 'selected' : '' }}>Female</option>
                                        </select>
                                    </div>
                                </div>
                            <!-- State Field -->
                            <div class="col-sm-6 mt-0">
                                <label for="formLabel" class="col-form-label input-label">{{\App\CPU\translate('State')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display state"></i></label>
                                <div class="input-group input-group-sm-down-break">
                                <select name="state" class="form-control select-2 p-2 patient-state" id="" required>
                                        <option value="">Select State</option>
                                        @foreach($states as $state)
                                            <option data-attr="{{$state->iso2}}" value="{{$state->name}}" {{ ($lead->state ?? '') == $state->name ? 'selected' : '' }}>{{$state->name}}</option>
                                        @endforeach
                                </select>
                                </div>
                            </div>

                            <!-- City Field -->
                            <div class="col-sm-6 mt-0">
                                <label for="formLabel" class="col-form-label input-label">{{\App\CPU\translate('City')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display name"></i></label>
                                <div class="input-group input-group-sm-down-break">
                                    <select name="city" class="form-control select-2" required>
                                        <option value="{{$lead->city}}" selected>{{$lead->city}}</option>
                                        <!-- Populate cities here based on state selection -->
                                    </select>
                                </div>
                            </div>

                            <!-- Address Field -->
                            <div class="col-sm-6 mt-0">
                                <label for="formLabel" class="col-form-label input-label">{{\App\CPU\translate('Address')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display address"></i></label>
                                <div class="input-group input-group-sm-down-break">
                                    <textarea name="address" id="" class="form-control" cols="30" rows="2" placeholder="Type address" required>{{ $lead->address ?? '' }}</textarea>
                                </div>
                            </div>

                            <!-- Address 2 Field -->
                            <div class="col-sm-6 mt-0">
                                <label for="formLabel" class="col-form-label input-label">{{\App\CPU\translate('Address 2')}}<span class="input-label-secondary">({{\App\CPU\translate('Optional')}})</span></label>
                                <div class="input-group input-group-sm-down-break">
                                    <textarea name="address2" id="" class="form-control" cols="30" rows="2" placeholder="Type address 2">{{ $lead->address2 ?? '' }}</textarea>
                                </div>
                            </div>

                            <!-- Zipcode Field -->
                            <div class="col-sm-6 mt-0">
                                <label for="zipcode" class="col-form-label input-label">{{\App\CPU\translate('Zipcode')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display zipcode"></i></label>
                                <div class="input-group input-group-sm-down-break">
                                    <input type="text" class="form-control" name="zipcode" id="zipcode" placeholder="{{\App\CPU\translate('Type zipcode')}}" aria-label="Type " value="{{ $lead->zipcode ?? '' }}" required>
                                </div>
                            </div>

                            <!-- Medicare ID Field -->
                            <div class="col-sm-6 mt-0">
                                <label for="medcare_id" class="col-form-label input-label">{{\App\CPU\translate('Medicare')}} {{\App\CPU\translate('ID')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display medcare_id"></i></label>
                                <div class="input-group input-group-sm-down-break">
                                    <input type="text" class="form-control" name="medcare_id" id="medcare_id" placeholder="{{\App\CPU\translate('Type medicare id')}}" aria-label="Type " value="{{ $lead->medcare_id ?? '' }}" required>
                                </div>
                            </div>

                            <!-- SSN Field -->
                            <div class="col-sm-6 mt-0">
                                <label for="ssn" class="col-form-label input-label">{{\App\CPU\translate('SSN')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display ssn"></i></label>
                                <div class="input-group input-group-sm-down-break">
                                    <input type="text" class="form-control" name="ssn" id="ssn" placeholder="{{\App\CPU\translate('Type ssn')}}" aria-label="Type " value="{{ $lead->ssn ?? '' }}" required>
                                </div>
                            </div>

                            <!-- ... more fields ... -->

                                                        <!-- Height Field -->
                            <div class="col-sm-6 mt-0">
                                <label for="height" class="col-form-label input-label">{{\App\CPU\translate('Height')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display height"></i></label>
                                <div class="input-group input-group-sm-down-break">
                                    <input type="text" class="form-control braces-field" name="height" id="height" placeholder="{{\App\CPU\translate('Enter height')}}" aria-label="Type height" value="{{ $lead->height ?? '' }}" required>
                                </div>
                            </div>

                            <!-- Weight Field -->
                            <div class="col-sm-6 mt-0">
                                <label for="weight" class="col-form-label input-label">{{\App\CPU\translate('Weight')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display waist"></i></label>
                                <div class="input-group input-group-sm-down-break">
                                    <input type="text" class="form-control braces-field" name="weight" id="weight" placeholder="{{\App\CPU\translate('Enter weight')}}" aria-label="Type weight" value="{{ $lead->weight ?? '' }}" required>
                                </div>
                            </div>

                            <!-- Waist Field -->
                            <div class="col-sm-6 mt-0 braces-div">
                                <label for="waist" class="col-form-label input-label">{{\App\CPU\translate('Waist')}}<span class="input-label-secondary">({{\App\CPU\translate('Optional')}})</span></label>
                                <div class="input-group input-group-sm-down-break">
                                    <input type="text" class="form-control" name="waist" id="waist" placeholder="{{\App\CPU\translate('Enter waist')}}" aria-label="Enter waist" value="{{ $lead->waist ?? '' }}">
                                </div>
                            </div>

                            <!-- Shoe Size Field -->
                            <div class="col-sm-6 mt-0">
                                <label for="shoe_size" class="col-form-label input-label">{{\App\CPU\translate('Shoe')}} {{\App\CPU\translate('Size')}}<span class="input-label-secondary">({{\App\CPU\translate('Optional')}})</span></label>
                                <div class="input-group input-group-sm-down-break">
                                    <input type="number" class="form-control" name="shoe_size" id="shoe_size" placeholder="{{\App\CPU\translate('Enter shoe size ')}}" aria-label="Enter shoe_size" value="{{ $lead->shoe_size ?? '' }}">
                                </div>
                            </div>

                            <!-- Scale Of Pain Field -->
                            <div class="col-sm-6 mt-0 braces-div">
                                <label for="scale_of_pain" class="col-form-label input-label">{{\App\CPU\translate('Scale Of Pain')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display scale_of_pain"></i></label>
                                <div class="input-group input-group-sm-down-break">
                                    <input type="text" class="form-control braces-field" name="scale_of_pain" id="scale_of_pain" placeholder="{{\App\CPU\translate('Type scale of pain')}}" aria-label="Type " value="{{ $lead->scale_of_pain ?? '' }}" required>
                                </div>
                            </div>

                            <!-- Pain Area Field -->
                            <div class="col-sm-6 mt-0">
                                <label for="pain_area" class="col-form-label input-label">{{\App\CPU\translate('Pain Area')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display pain_area"></i></label>
                                <div class="input-group input-group-sm-down-break">
                                    <input type="text" class="form-control braces-field" name="pain_area" id="pain_area" placeholder="{{\App\CPU\translate('Type pain area')}}" aria-label="Type pain_area" value="{{ $lead->pain_area ?? '' }}" required>
                                </div>
                            </div>

                                                        <!-- No of time checked glucose level Field -->
                            <div class="col-sm-6 mt-0 cgm-div d-none">
                                <label for="golucose_level" class="col-form-label input-label">{{\App\CPU\translate('No of time checked golucose level')}}<span class="input-label-secondary">({{\App\CPU\translate('Optional')}})</span></label>
                                <div class="input-group input-group-sm-down-break">
                                    <input type="number" class="form-control" name="golucose_level" id="golucose_level" placeholder="{{\App\CPU\translate('Type golucose level')}}" aria-label="Type " value="{{ $lead->golucose_level ?? '' }}">
                                </div>
                            </div>

                            <!-- No of time take pills Field -->
                            <div class="col-sm-6 mt-0 cgm-div d-none">
                                <label for="pills" class="col-form-label input-label">{{\App\CPU\translate('No of time take pills')}}<span class="input-label-secondary">({{\App\CPU\translate('Optional')}})</span></label>
                                <div class="input-group input-group-sm-down-break">
                                    <input type="number" class="form-control" name="pills" id="pills" placeholder="{{\App\CPU\translate('Type pills')}}" aria-label="Type " value="{{ $lead->pills ?? '' }}">
                                </div>
                            </div>

                            <!-- No of times injected insulin Field -->
                            <div class="col-sm-6 mt-0 cgm-div d-none">
                                <label for="injected_insulin" class="col-form-label input-label">{{\App\CPU\translate('No of times injected insulin')}}<span class="input-label-secondary">({{\App\CPU\translate('Optional')}})</span></label>
                                <div class="input-group input-group-sm-down-break">
                                    <input type="number" class="form-control" name="injected_insulin" id="injected_insulin" placeholder="{{\App\CPU\translate('Type injected insulin')}}" aria-label="Type " value="{{ $lead->injected_insulin ?? '' }}">
                                </div>
                            </div>

                            <!-- Name of Insulin/Medicine Field -->
                            <div class="col-sm-6 mt-0 cgm-div d-none">
                                <label for="name_of_medicine" class="col-form-label input-label">{{\App\CPU\translate('Name of Insulin')}} / {{\App\CPU\translate('Medicine')}}<span class="input-label-secondary">({{\App\CPU\translate('Optional')}})</span></label>
                                <div class="input-group input-group-sm-down-break">
                                    <input type="text" class="form-control" name="name_of_medicine" id="name_of_medicine" placeholder="{{\App\CPU\translate('Name of medicine ')}}" aria-label="Type " value="{{ $lead->name_of_medicine ?? '' }}">
                                </div>
                            </div>

                            <!-- Received Covid kit Field -->
                            <div class="col-sm-6 mt-0 covid-div d-none">
                                <label for="covid_kit" class="col-form-label input-label">{{\App\CPU\translate('Received Covid kit')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display name"></i></label>
                                <div class="input-group input-group-sm-down-break">
                                    <input type="text" class="form-control covid-field" name="covid_kit" id="covid_kit" placeholder="{{\App\CPU\translate('Specify ')}}" aria-label="Type " value="{{ $lead->covid_kit ?? '' }}">
                                </div>
                            </div>

                            <!-- Specify Date Field -->
                            <div class="col-sm-6 mt-0 covid-div d-none">
                                <label for="covid_kit_date" class="col-form-label input-label">{{\App\CPU\translate('Specify Date')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display name"></i></label>
                                <div class="input-group input-group-sm-down-break">
                                    <input type="date" class="form-control covid-field" name="covid_kit_date" id="covid_kit_date" placeholder="{{\App\CPU\translate('Name of medicine ')}}" aria-label="Type " value="{{ $lead->covid_kit_date ?? '' }}">
                                </div>
                            </div>

                                                            <div class="col-sm-6 mt-0">
                                                            <label for="formLabel" class="col-form-label input-label">{{\App\CPU\translate('Agent Name')}}<i
                                                                    class="tio-help-outlined text-body ml-0" data-toggle="tooltip"
                                                                    data-placement="top"
                                                                    title="Display name"></i></label>
                                                                <div class="input-group input-group-sm-down-break">
                                                                    <input type="text" class="form-control" name="" id="formLabel"
                                                                        placeholder="{{\App\CPU\translate('Name of Agent ')}}" aria-label="Type "
                                                                        value="{{Admin::find($lead->agent_id)->name}}" disabled>

                                                                </div>
                                                            </div>
                                                        
                                                        </div>
                                                        <!-- End Form Group -->
                                                    </div>
                                                    <!-- End Body -->
                                                </div>
                                                <!-- End Card -->

                                            <!-- Card -->
                        <div id="CGMDiv" class="card mb-3 mb-lg-5 doc-div">
                            <div class="card-header">
                                <h4 class="card-title">{{\App\CPU\translate('Doctor')}} {{\App\CPU\translate('Information')}}</h4>
                            </div>

                            <!-- Body -->
                            <div class="card-body">
                                <!-- Form -->
                            
                                <!-- Form Group -->
                                <div class="row form-group">
                                <!-- Doctor Phone Field -->
                                <div class="col-sm-6 mt-0">
                                    <label for="doc_phone" class="col-form-label input-label">{{\App\CPU\translate('Phone')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display doc_phone"></i></label>
                                    <div class="input-group input-group-sm-down-break">
                                        <input type="number" class="js-masked-input form-control doc-field" name="doc_phone" id="doc_phone" placeholder="+x(xxx)xxx-xx-xx" aria-label="+(xxx)xx-xxx-xxxxx" value="{{ $lead->doc_phone ?? '' }}" required>
                                    </div>
                                </div>

                                <!-- Doctor First Name Field -->
                                <div class="col-sm-6 mt-0">
                                    <label for="doc_f_name" class="col-form-label input-label">{{\App\CPU\translate('First Name')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display name"></i></label>
                                    <div class="input-group input-group-sm-down-break">
                                        <input type="text" class="form-control doc-field" name="doc_f_name" id="doc_f_name" placeholder="{{\App\CPU\translate('Doctor first name')}}" aria-label="Type " value="{{ $lead->doc_f_name ?? '' }}" required>
                                    </div>
                                </div>

                                <!-- Doctor Last Name Field -->
                                <div class="col-sm-6 mt-0">
                                    <label for="doc_l_name" class="col-form-label input-label">{{\App\CPU\translate('Last Name')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display doc_l_name"></i></label>
                                    <div class="input-group input-group-sm-down-break">
                                        <input type="text" class="form-control doc-field" name="doc_l_name" id="doc_l_name" placeholder="{{\App\CPU\translate('Doctor last name')}}" aria-label="Type " value="{{ $lead->doc_l_name ?? '' }}" required>
                                    </div>
                                </div>

                                <!-- Second Doctor Details Field -->
                                <div class="col-sm-6 mt-0">
                                    <label for="second_doc_details" class="col-form-label input-label">{{\App\CPU\translate('Second Doctor Details')}}<span class="input-label-secondary">({{\App\CPU\translate('Optional')}})</span></label>
                                    <div class="input-group input-group-sm-down-break">
                                        <textarea name="second_doc_details" class="form-control" id="second_doc_details" cols="30" rows="2">{{ $lead->second_doc_details ?? '' }}</textarea>
                                    </div>
                                </div>

                                <!-- Doctor State Field -->
                                <div class="col-sm-6 mt-0">
                                    <label for="doc_state" class="col-form-label input-label">{{\App\CPU\translate('State')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display doc_state"></i></label>
                                    <div class="input-group input-group-sm-down-break">
                                        <select name="doc_state" class="form-control select-2 p-2 doc-field doctor-state" id="doc_state" required>
                                            <option value="">Select State</option>
                                            @foreach($states as $state)
                                                <option data-attr="{{$state->iso2}}" value="{{$state->name}}" {{ ($lead->doc_state ?? '') == $state->name ? 'selected' : '' }}>{{$state->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <!-- Doctor City Field -->
                                <div class="col-sm-6 mt-0">
                                    <label for="doc_city" class="col-form-label input-label">{{\App\CPU\translate('City')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display doc_city"></i></label>
                                    <div class="input-group input-group-sm-down-break">
                                        <select name="doc_city" class="form-control doc-field select-2" id="doc_city" required>
                                            <option value="{{$lead->doc_city}}" selected>{{$lead->doc_city}}</option>
                                            <!-- Populate based on state selection -->
                                        </select>
                                    </div>
                                </div>

                                <!-- Doctor Address Field -->
                                <div class="col-sm-12 mt-0">
                                    <label for="doc_address" class="col-form-label doc-field input-label">{{\App\CPU\translate('Address')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display name"></i></label>
                                    <div class="input-group input-group-sm-down-break">
                                        <textarea name="doc_address" class="form-control doc-field" id="doc_address" cols="30" rows="2" required>{{ $lead->doc_address ?? '' }}</textarea>
                                    </div>
                                </div>

                            <div class="col-sm-6 mt-0">
                                <label for="doc_zipcode" class="col-form-label input-label">{{\App\CPU\translate('Zipcode')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display doc_zipcode"></i></label>
                                <div class="input-group input-group-sm-down-break">
                                    <input type="text" class="form-control doc-field" name="doc_zipcode" id="doc_zipcode" placeholder="{{\App\CPU\translate('Enter Zipcode')}}" aria-label="Type " value="{{ $lead->doc_zipcode ?? '' }}" required>
                                </div>
                            </div>

                            <!-- Doctor NPI Field -->
                            <div class="col-sm-6 mt-0">
                                <label for="doc_npi" class="col-form-label input-label">{{\App\CPU\translate('Doctor Npi')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display doc_zipcode"></i></label>
                                <div class="input-group input-group-sm-down-break">
                                    <input type="text" class="form-control doc-field" name="doc_npi" id="doc_npi" placeholder="{{\App\CPU\translate('Enter doctor npi')}}" aria-label="Type " value="{{ $lead->doc_npi ?? '' }}" required>
                                </div>
                            </div>

                            <!-- Doctor Fax Field -->
                            <div class="col-sm-6 mt-0">
                                <label for="doc_fax" class="col-form-label input-label">{{\App\CPU\translate('Fax')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display doc_zipcode"></i></label>
                                <div class="input-group input-group-sm-down-break">
                                    <input type="text" class="form-control doc-field" name="doc_fax" id="doc_fax" placeholder="{{\App\CPU\translate('Enter doctor fax')}}" aria-label="Type " value="{{ $lead->doc_fax ?? '' }}" required>
                                </div>
                            </div>

                            <!-- Patient Last Visit ID Field -->
                            <div class="col-sm-6 mt-0">
                                <label for="patient_last_visit_id" class="col-form-label input-label">{{\App\CPU\translate('Patient last visit id')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display doc_zipcode"></i></label>
                                <div class="input-group input-group-sm-down-break">
                                    <input type="integer" class="form-control doc-field" name="patient_last_visit_id" id="patient_last_visit_id" placeholder="{{\App\CPU\translate('Enter patient last visit id')}}" aria-label="Type " value="{{ $lead->patient_last_visit_id ?? '' }}" required>
                                </div>
                            </div>


                            <!-- End Form Group -->
                            </div> 
                        <!-- End Form -->
                    </div>
                    <!-- End Body -->
                </div>
                <div class="d-flex justify-content-end pt-0">
                    <button type="submit" class="btn btn-primary submit-btn"><i class="tio-save"></i> {{\App\CPU\translate('Update')}} {{\App\CPU\translate('Lead')}}</button>
                </div>
            </form>
                <!-- End Card -->
            </div>

            <div class="col-lg-4">
                <!-- Card -->
                <div class="card">
                    <!-- Header -->
                    <div class="card-header">
                        <h4 class="card-header-title">{{\App\CPU\translate('Quality Assurance 1 Feedback')}}</h4>
                    </div>
                    <!-- End Header -->

                    <!-- Body -->
                    <form id="qa1-form">
                        @csrf
                        <input type="hidden" name="lead_id" value="{{$lead->id}}">
                        <input type="hidden" class="form-control" name="agent_id" id="formLabel"
                            placeholder="{{\App\CPU\translate('Name of Agent ')}}" aria-label="Type "
                            value="{{auth('admin')->id()}}">
                        <div class="card-body">
                            <label for="patient_last_visit_id" class="col-form-label input-label">{{\App\CPU\translate('Action')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display doc_zipcode"></i></label>
                            <div class="input-group input-group-sm-down-break">
                                <select name="action" class="form-control qa1-field" id="" required>
                                    <option value="">Select</option>
                                    <option value="4">Approved</option>
                                    <option value="5">Rejected</option>
                                </select>
                            </div>
                            <label for="patient_last_visit_id" class="col-form-label input-label">{{\App\CPU\translate('Calling From')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display doc_zipcode"></i></label>
                            <div class="input-group input-group-sm-down-break">
                                <input type="text" name="calling_from" value="{{ $lead->qa1_details ? $lead->qa1_details->calling_from : '' }}" class="form-control qa1-field" required placeholder="Calling from">
                            </div>
                            <label for="patient_last_visit_id" class="col-form-label input-label">{{\App\CPU\translate('Upload Recording')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display doc_zipcode"></i></label>
                            <div class="input-group input-group-sm-down-break">
                                <input type="file" name="recording" accept="audio/*" class="form-control qa1-field" required>
                            </div>
                           @if($lead->qa1_details)
                           <div class="input-group input-group-sm-down-break mt-2">
                            <audio controls>
                                <source src="{{ asset('storage/app/public/qa1/'.$lead->qa1_details->recording) }}" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>
                             </div>
                            @endif
                            <label for="patient_last_visit_id" class="col-form-label input-label">{{\App\CPU\translate('Way of Talk')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display doc_zipcode"></i></label>
                            <div class="input-group input-group-sm-down-break">
                            <input type="number" class="form-control mr-2 mt-1 agent qa1-field" name="agent_way_of_talk" placeholder="Agent" value="{{ $lead->qa1_details ? $lead->qa1_details->agent_way_of_talk : '' }}" required min="1" max="100">
                            <input type="number" class="form-control mt-1 patient qa1-field" name="patient_way_of_talk" placeholder="Patient" required value="{{ $lead->qa1_details ? $lead->qa1_details->customer_way_of_talk : '' }}" min="1" max="100">
                            </div>
                            <div class="input-group input-group-sm-down-breakvd-flex justify-content-center mt-2">
                                <div id="agent" role="progressbar" class="mr-4" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value:{{ $lead->qa1_details ? $lead->qa1_details->agent_way_of_talk : '90' }}"></div>
                                <div id="patient" role="progressbar" class="ml-4" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value:{{ $lead->qa1_details ? $lead->qa1_details->customer_way_of_talk : '80' }}"></div>
                            </div>
                            <label for="patient_last_visit_id" class="col-form-label input-label">{{\App\CPU\translate('Remarks')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display doc_zipcode"></i></label>
                            <div class="input-group input-group-sm-down-break">
                               <textarea name="remarks" class="form-control eligibility-field qa1-field" rows="3" placeholder="Please Type your remarks" required>{{ $lead->qa1_details ? $lead->qa1_details->remarks : '' }}</textarea>
                            </div>
                            <hr>
                            <button type="submit" class="submit-btn btn btn-primary"><i class="tio-save"></i> Submit Feedback</button>
                            </form>                    
                        </div>
                <!-- End Body -->
                </div>
                <!-- End Card -->
            </div>
        </div>
        <!-- End Row -->
    </div>
@endsection

@push('script_2')
   <script>
    var baseUrl = "{{ route('admin.lead.cities', 'PLACEHOLDER') }}";
    $(document).ready(function() {
        $('.agent').on('input', function() {
        var value = $(this).val();
        $('#agent').css('--value', value);
        });

        $('.patient').on('input', function() {
            var value = $(this).val();
            $('#patient').css('--value', value);
        });
        var product = "{{$lead->product}}";
        if(product == "Braces"){
            $(".product-name").val("Braces");
            $(".braces-div").removeClass('d-none');
            $(".cgm-div").addClass('d-none');
            $(".covid-div").addClass('d-none')
            $(".doc-div").removeClass('d-none');
            $(".braces-field").attr('required',true);
            $(".doc-field").attr('required',true);
            $(".covid-field").attr('required',false);
        }
        if(product == "CGM"){
            $(".product-name").val("CGM");
            $(".braces-div").addClass('d-none');
            $(".cgm-div").removeClass('d-none');
            $(".covid-div").addClass('d-none')
            $(".doc-div").removeClass('d-none');
            $(".braces-field").attr('required',false);
            $(".doc-field").attr('required',true);
            $(".covid-field").attr('required',false);
        }
        if(product == "Covid"){
            $(".product-name").val("Covid");
            $(".braces-div").addClass('d-none');
            $(".cgm-div").addClass('d-none');
            $(".covid-div").removeClass('d-none')
            $(".doc-div").addClass('d-none');
            $(".braces-field").attr('required',false);
            $(".doc-field").attr('required',false);
            $(".covid-field").attr('required',true);
        }
        $('.patient-state').change(function() {
        var stateIso2 = $(this).find(':selected').data('attr');
        var citySelect = $('select[name="city"]');
        citySelect.empty().append('<option>Fetching Cities...</option>');
        $.ajax({
            url: baseUrl.replace('PLACEHOLDER', stateIso2),
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                citySelect.empty().append('<option value="">Select City</option>');
                $.each(response, function(key, value) {
                    citySelect.append('<option value="' + value.name + '">' + value.name + '</option>');
                });
            },
            error: function(xhr, status, error) {
                console.error("Error occurred: " + error);
                citySelect.empty().append('<option value="">Select City</option>');
            }
                });
            });
        });
        $(document).on('submit','#edit-lead',function(e){
            e.preventDefault();
            $('.submit-btn').attr('disabled',true);
            $('.form-control').removeClass('is-invalid');
            $('.invalid-feedback.is-invalid').remove();
            $.ajax({
                url : "{{route('admin.lead.update')}}",
                type : "POST",
                data : new FormData(this),
                dataType : "json",
                contentType : false,
                processData : false,
                cache : false,
                success:function(response){
                    swal.fire('success!','Lead has been updated successfully.','success');
                    $('.submit-btn').attr('disabled',false);
                },
                error:function(xhr){
                    erroralert(xhr);
                    $('.submit-btn').attr('disabled',false);
                }
            });
        })
        $(document).on('submit','#qa1-form',function(e){
            e.preventDefault();
            $('.submit-btn').attr('disabled',true);
            $('.form-control').removeClass('is-invalid');
            $('.invalid-feedback.is-invalid').remove();
            $.ajax({
                url : "{{route('admin.qa1.store')}}",
                type : "POST",
                data : new FormData(this),
                dataType : "json",
                contentType : false,
                processData : false,
                cache : false,
                success:function(response){
                    swal.fire('success!','Your feedback has been saved successfully.','success');
                    $('.qa1-field').attr('disabled',true);
                },
                error:function(xhr){
                    erroralert(xhr);
                    $('.submit-btn').attr('disabled',false);
                }
            });
        })
        $(document).ready(function() {
         $('.doctor-state').change(function() {
        var stateIso2 = $(this).find(':selected').data('attr');
        var citySelect = $('select[name="doc_city"]');
        citySelect.empty().append('<option>Fetching Cities...</option>');
        $.ajax({
            url: baseUrl.replace('PLACEHOLDER', stateIso2),
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                citySelect.empty().append('<option value="">Select City</option>');
                $.each(response, function(key, value) {
                    citySelect.append('<option value="' + value.name + '">' + value.name + '</option>');
                });
            },
            error: function(xhr, status, error) {
                console.error("Error occurred: " + error);
                citySelect.empty().append('<option value="">Select City</option>');
            }
                });
            });
        });
   </script>
@endpush
