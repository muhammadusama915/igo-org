@extends('layouts.back-end.app')

@section('title', \App\CPU\translate('Eligibility Criteria'))

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
                                                           href="">{{\App\CPU\translate('Eligibility Criteria')}}</a>
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
                                <span class="legend-indicator bg-warning"></span>{{ $lead->status == 1 ? 'Waiting for Approval' : ($lead->status == 3 ? 'Rejected Eligibility Criteria' : ($lead->status == 2 ? 'Approved Eligibility Criteria' : '')) }}
                            </span>
                        <span class="ml-2 ml-sm-3">
                        <i class="tio-date-range"></i> {{date('d M Y H:i A',strtotime($lead->created_at))}}
                        </span>
                        <span class="ml-2 ml-sm-3 mt-1">
                        <label class="badge badge-info">{{\App\CPU\translate('Submitted From')}}
                            : {{$lead->agent_details->name}}</label>
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
                                <div class="col-sm-6 mt-0" >
                                    <label for="sip_id" class="col-form-label input-label">{{\App\CPU\translate('SIP ID')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="sip_id"></i></label>
                                    <div class="input-group input-group-sm-down-break">
                                        <p style="border-bottom:1px solid black;width:100%">{{ $lead->sip_id ?? '' }}</p>
                                        <input type="hidden" name="product" class="product-name" value="Braces">
                                        <input type="hidden" name="status" value="1">
                                        <input type="hidden" name="id" value="{{$lead->id}}">
                                    </div>
                                </div>

                                <!-- Phone Field -->
                                <div class="col-sm-6 mt-0">
                                    <label for="phone" class="col-form-label input-label">{{\App\CPU\translate('Phone')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="phone"></i></label>
                                    <div class="input-group input-group-sm-down-break">
                                    <p style="border-bottom:1px solid black;width:100%">+1 {{ $lead->phone ?? '' }}</p>
                                    </div>
                                </div>

                                <!-- Phone 2 Field -->
                                <div class="col-sm-6 mt-0">
                                    <label for="phone2" class="col-form-label input-label">{{\App\CPU\translate('Phone 2')}} <span class="input-label-secondary">({{\App\CPU\translate('Optional')}})</span></label>
                                    <div class="input-group input-group-sm-down-break">
                                    <p style="border-bottom:1px solid black;width:100%"> {{ $lead->phone2 ? '+1 '.$lead->phone2 : 'Phone 2 is not provided' }}</p>
                                    </div>
                                </div>

                                <!-- First Name Field -->
                                <div class="col-sm-6 mt-0">
                                    <label for="f_name" class="col-form-label input-label">{{\App\CPU\translate('First')}} {{\App\CPU\translate('Name')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display f_name"></i></label>
                                    <div class="input-group input-group-sm-down-break">
                                    <p style="border-bottom:1px solid black;width:100%">{{ $lead->f_name ?? '' }}</p>
                                    </div>
                                </div>

                                <!-- Middle Name Field -->
                                <div class="col-sm-6 mt-0">
                                    <label for="m_name" class="col-form-label input-label">{{\App\CPU\translate('Middle')}} {{\App\CPU\translate('Name')}} <span class="input-label-secondary">({{\App\CPU\translate('Optional')}})</span></label>
                                    <div class="input-group input-group-sm-down-break">
                                    <p style="border-bottom:1px solid black;width:100%">{{ $lead->m_name ?? 'Middle Name is not Provided' }}</p>
                                    </div>
                                </div>

                                <!-- Last Name Field -->
                                <div class="col-sm-6 mt-0">
                                    <label for="l_name" class="col-form-label input-label">{{\App\CPU\translate('Last')}} {{\App\CPU\translate('Name')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display l_name"></i></label>
                                    <div class="input-group input-group-sm-down-break">
                                    <p style="border-bottom:1px solid black;width:100%">{{ $lead->l_name ?? '' }}</p>
                                    </div>
                                </div>

                                <!-- Date of Birth Field -->
                                <div class="col-sm-6 mt-0">
                                    <label for="dob" class="col-form-label input-label">{{\App\CPU\translate('Date of Birth')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display dob"></i></label>
                                    <div class="input-group input-group-sm-down-break">
                                    <p style="border-bottom:1px solid black;width:100%">{{ $lead->dob ?? '' }}</p>
                                    </div>
                                </div>

                                <!-- Gender Field -->
                                <div class="col-sm-6 mt-0">
                                    <label for="gender" class="col-form-label input-label">{{\App\CPU\translate('Gender')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display gender"></i></label>
                                    <div class="input-group input-group-sm-down-break">
                                    <p style="border-bottom:1px solid black;width:100%">{{ $lead->gender ?? '' }}</p>
                                    </div>
                                </div>
                            <!-- State Field -->
                            <div class="col-sm-6 mt-0">
                                <label for="formLabel" class="col-form-label input-label">{{\App\CPU\translate('State')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display state"></i></label>
                                <div class="input-group input-group-sm-down-break">
                                <p style="border-bottom:1px solid black;width:100%">{{ $lead->state ?? '' }}</p>
                                </div>
                            </div>

                            <!-- City Field -->
                            <div class="col-sm-6 mt-0">
                                <label for="formLabel" class="col-form-label input-label">{{\App\CPU\translate('City')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display name"></i></label>
                                <div class="input-group input-group-sm-down-break">
                                <p style="border-bottom:1px solid black;width:100%">{{ $lead->city ?? '' }}</p>
                                </div>
                            </div>

                            <!-- Address Field -->
                            <div class="col-sm-6 mt-0">
                                <label for="formLabel" class="col-form-label input-label">{{\App\CPU\translate('Address')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display address"></i></label>
                                <div class="input-group input-group-sm-down-break">
                                    <textarea name="address" id="" class="form-control" cols="30" rows="2" placeholder="Type address" disabled>{{ $lead->address ?? '' }}</textarea>
                                </div>
                            </div>

                            <!-- Address 2 Field -->
                            <div class="col-sm-6 mt-0">
                                <label for="formLabel" class="col-form-label input-label">{{\App\CPU\translate('Address 2')}}<span class="input-label-secondary">({{\App\CPU\translate('Optional')}})</span></label>
                                <div class="input-group input-group-sm-down-break">
                                    <textarea name="address2" id="" class="form-control" cols="30" rows="2" placeholder="Address 2" disabled>{{ $lead->address2 ?? '' }}</textarea>
                                </div>
                            </div>

                            <!-- Zipcode Field -->
                            <div class="col-sm-6 mt-0">
                                <label for="zipcode" class="col-form-label input-label">{{\App\CPU\translate('Zipcode')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display zipcode"></i></label>
                                <div class="input-group input-group-sm-down-break">
                                <p style="border-bottom:1px solid black;width:100%">{{ $lead->zipcode ?? '' }}</p>
                                </div>
                            </div>

                            <!-- Medicare ID Field -->
                            <div class="col-sm-6 mt-0">
                                <label for="medcare_id" class="col-form-label input-label">{{\App\CPU\translate('Medicare')}} {{\App\CPU\translate('ID')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display medcare_id"></i></label>
                                <div class="input-group input-group-sm-down-break">
                                <p style="border-bottom:1px solid black;width:100%">{{ $lead->medcare_id ?? '' }}</p>
                                </div>
                            </div>

                            <!-- SSN Field -->
                            <div class="col-sm-6 mt-0">
                                <label for="ssn" class="col-form-label input-label">{{\App\CPU\translate('SSN')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display ssn"></i></label>
                                <div class="input-group input-group-sm-down-break">
                                <p style="border-bottom:1px solid black;width:100%">{{ $lead->ssn ?? '' }}</p>
                                </div>
                            </div>

                            <!-- ... more fields ... -->

                                                        <!-- Height Field -->
                            <div class="col-sm-6 mt-0">
                                <label for="height" class="col-form-label input-label">{{\App\CPU\translate('Height')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display height"></i></label>
                                <div class="input-group input-group-sm-down-break">
                                <p style="border-bottom:1px solid black;width:100%">{{ $lead->height ?? '' }}</p>
                                </div>
                            </div>

                            <!-- Weight Field -->
                            <div class="col-sm-6 mt-0">
                                <label for="weight" class="col-form-label input-label">{{\App\CPU\translate('Weight')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display waist"></i></label>
                                <div class="input-group input-group-sm-down-break">
                                <p style="border-bottom:1px solid black;width:100%">{{ $lead->weight ?? '' }}</p>
                                </div>
                            </div>

                            <!-- Waist Field -->
                            <div class="col-sm-6 mt-0 braces-div">
                                <label for="waist" class="col-form-label input-label">{{\App\CPU\translate('Waist')}}<span class="input-label-secondary">({{\App\CPU\translate('Optional')}})</span></label>
                                <div class="input-group input-group-sm-down-break">
                                <p style="border-bottom:1px solid black;width:100%">{{ $lead->waist ?? 'Waist is not provided' }}</p>
                                </div>
                            </div>

                            <!-- Shoe Size Field -->
                            <div class="col-sm-6 mt-0">
                                <label for="shoe_size" class="col-form-label input-label">{{\App\CPU\translate('Shoe')}} {{\App\CPU\translate('Size')}}<span class="input-label-secondary">({{\App\CPU\translate('Optional')}})</span></label>
                                <div class="input-group input-group-sm-down-break">
                                <p style="border-bottom:1px solid black;width:100%">{{ $lead->shoe_size ?? 'Show size is not provided' }}</p>
                                </div>
                            </div>

                            <!-- Scale Of Pain Field -->
                            <div class="col-sm-6 mt-0 braces-div">
                                <label for="scale_of_pain" class="col-form-label input-label">{{\App\CPU\translate('Scale Of Pain')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display scale_of_pain"></i></label>
                                <div class="input-group input-group-sm-down-break">
                                <p style="border-bottom:1px solid black;width:100%">{{ $lead->scale_of_pain ?? '' }}</p>
                                </div>
                            </div>

                            <!-- Pain Area Field -->
                            <div class="col-sm-6 mt-0">
                                <label for="pain_area" class="col-form-label input-label">{{\App\CPU\translate('Pain Area')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display pain_area"></i></label>
                                <div class="input-group input-group-sm-down-break">
                                <p style="border-bottom:1px solid black;width:100%">{{ $lead->pain_area ?? '' }}</p>
                                </div>
                            </div>

                                                        <!-- No of time checked glucose level Field -->
                            <div class="col-sm-6 mt-0 cgm-div d-none">
                                <label for="golucose_level" class="col-form-label input-label">{{\App\CPU\translate('No of time checked golucose level')}}<span class="input-label-secondary">({{\App\CPU\translate('Optional')}})</span></label>
                                <div class="input-group input-group-sm-down-break">
                                <p style="border-bottom:1px solid black;width:100%">{{ $lead->golucose_level ?? 'Golucose Level is not provided' }}</p>
                                </div>
                            </div>

                            <!-- No of time take pills Field -->
                            <div class="col-sm-6 mt-0 cgm-div d-none">
                                <label for="pills" class="col-form-label input-label">{{\App\CPU\translate('No of time take pills')}}<span class="input-label-secondary">({{\App\CPU\translate('Optional')}})</span></label>
                                <div class="input-group input-group-sm-down-break">
                                <p style="border-bottom:1px solid black;width:100%">{{ $lead->pills ?? 'No Provided' }}</p>
                                </div>
                            </div>

                            <!-- No of times injected insulin Field -->
                            <div class="col-sm-6 mt-0 cgm-div d-none">
                                <label for="injected_insulin" class="col-form-label input-label">{{\App\CPU\translate('No of times injected insulin')}}<span class="input-label-secondary">({{\App\CPU\translate('Optional')}})</span></label>
                                <div class="input-group input-group-sm-down-break">
                                <p style="border-bottom:1px solid black;width:100%">{{ $lead->injected_insulin ?? 'No Provided' }}</p>
                                </div>
                            </div>

                            <!-- Name of Insulin/Medicine Field -->
                            <div class="col-sm-6 mt-0 cgm-div d-none">
                                <label for="name_of_medicine" class="col-form-label input-label">{{\App\CPU\translate('Name of Insulin')}} / {{\App\CPU\translate('Medicine')}}<span class="input-label-secondary">({{\App\CPU\translate('Optional')}})</span></label>
                                <div class="input-group input-group-sm-down-break">
                                <p style="border-bottom:1px solid black;width:100%">{{ $lead->name_of_medicine ?? 'Not Provided' }}</p>
                                </div>
                            </div>

                            <!-- Received Covid kit Field -->
                            <div class="col-sm-6 mt-0 covid-div d-none">
                                <label for="covid_kit" class="col-form-label input-label">{{\App\CPU\translate('Received Covid kit')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display name"></i></label>
                                <div class="input-group input-group-sm-down-break">
                                <p style="border-bottom:1px solid black;width:100%">{{ $lead->covid_kit ?? '' }}</p>
                                </div>
                            </div>

                            <!-- Specify Date Field -->
                            <div class="col-sm-6 mt-0 covid-div d-none">
                                <label for="covid_kit_date" class="col-form-label input-label">{{\App\CPU\translate('Specify Date')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display name"></i></label>
                                <div class="input-group input-group-sm-down-break">
                                <p style="border-bottom:1px solid black;width:100%">{{ $lead->covid_kit_date ?? '' }}</p>
                                </div>
                            </div>

                                                            <div class="col-sm-6 mt-0">
                                                            <label for="formLabel" class="col-form-label input-label">{{\App\CPU\translate('Agent Name')}}<i
                                                                    class="tio-help-outlined text-body ml-0" data-toggle="tooltip"
                                                                    data-placement="top"
                                                                    title="Display name"></i></label>
                                                                <div class="input-group input-group-sm-down-break">
                                                                <p style="border-bottom:1px solid black;width:100%">{{ Admin::find($lead->agent_id)->name ?? '' }}</p>
                                                                    <input type="hidden" class="form-control" name="agent_id" id="formLabel"
                                                                        placeholder="{{\App\CPU\translate('Name of Agent ')}}" aria-label="Type "
                                                                        value="{{$lead->agent_id}}">

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
                                    <p style="border-bottom:1px solid black;width:100%">+1 {{ $lead->doc_phone ?? '' }}</p>
                                    </div>
                                </div>

                                <!-- Doctor First Name Field -->
                                <div class="col-sm-6 mt-0">
                                    <label for="doc_f_name" class="col-form-label input-label">{{\App\CPU\translate('First Name')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display name"></i></label>
                                    <div class="input-group input-group-sm-down-break">
                                    <p style="border-bottom:1px solid black;width:100%">{{ $lead->doc_f_name ?? '' }}</p>
                                    </div>
                                </div>

                                <!-- Doctor Last Name Field -->
                                <div class="col-sm-6 mt-0">
                                    <label for="doc_l_name" class="col-form-label input-label">{{\App\CPU\translate('Last Name')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display doc_l_name"></i></label>
                                    <div class="input-group input-group-sm-down-break">
                                    <p style="border-bottom:1px solid black;width:100%">{{ $lead->doc_l_name ?? '' }}</p>
                                    </div>
                                </div>

                                <!-- Second Doctor Details Field -->
                                <div class="col-sm-6 mt-0">
                                    <label for="second_doc_details" class="col-form-label input-label">{{\App\CPU\translate('Second Doctor Details')}}<span class="input-label-secondary">({{\App\CPU\translate('Optional')}})</span></label>
                                    <div class="input-group input-group-sm-down-break">
                                    <p style="border-bottom:1px solid black;width:100%">{{ $lead->second_doc_details ?? 'Not Provided' }}</p>
                                    </div>
                                </div>

                                <!-- Doctor State Field -->
                                <div class="col-sm-6 mt-0">
                                    <label for="doc_state" class="col-form-label input-label">{{\App\CPU\translate('State')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display doc_state"></i></label>
                                    <div class="input-group input-group-sm-down-break">
                                    <p style="border-bottom:1px solid black;width:100%">{{ $lead->doc_state ?? '' }}</p>
                                    </div>
                                </div>

                                <!-- Doctor City Field -->
                                <div class="col-sm-6 mt-0">
                                    <label for="doc_city" class="col-form-label input-label">{{\App\CPU\translate('City')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display doc_city"></i></label>
                                    <div class="input-group input-group-sm-down-break">
                                    <p style="border-bottom:1px solid black;width:100%">{{ $lead->doc_city ?? '' }}</p>
                                    </div>
                                </div>

                                <!-- Doctor Address Field -->
                                <div class="col-sm-12 mt-0">
                                    <label for="doc_address" class="col-form-label doc-field input-label">{{\App\CPU\translate('Address')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display name"></i></label>
                                    <div class="input-group input-group-sm-down-break">
                                        <textarea name="doc_address" class="form-control doc-field" id="doc_address" cols="30" rows="2" disabled>{{ $lead->doc_address ?? '' }}</textarea>
                                    </div>
                                </div>

                            <div class="col-sm-6 mt-0">
                                <label for="doc_zipcode" class="col-form-label input-label">{{\App\CPU\translate('Zipcode')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display doc_zipcode"></i></label>
                                <div class="input-group input-group-sm-down-break">
                                <p style="border-bottom:1px solid black;width:100%">{{ $lead->doc_zipcode ?? '' }}</p>
                                </div>
                            </div>

                            <!-- Doctor NPI Field -->
                            <div class="col-sm-6 mt-0">
                                <label for="doc_npi" class="col-form-label input-label">{{\App\CPU\translate('Doctor Npi')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display doc_zipcode"></i></label>
                                <div class="input-group input-group-sm-down-break">
                                <p style="border-bottom:1px solid black;width:100%">{{ $lead->doc_npi ?? '' }}</p>
                                </div>
                            </div>

                            <!-- Doctor Fax Field -->
                            <div class="col-sm-6 mt-0">
                                <label for="doc_fax" class="col-form-label input-label">{{\App\CPU\translate('Fax')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display doc_zipcode"></i></label>
                                <div class="input-group input-group-sm-down-break">
                                <p style="border-bottom:1px solid black;width:100%">{{ $lead->doc_fax ?? '' }}</p>
                                </div>
                            </div>

                            <!-- Patient Last Visit ID Field -->
                            <div class="col-sm-6 mt-0">
                                <label for="patient_last_visit_id" class="col-form-label input-label">{{\App\CPU\translate('Patient last visit id')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display doc_zipcode"></i></label>
                                <div class="input-group input-group-sm-down-break">
                                <p style="border-bottom:1px solid black;width:100%">{{ $lead->patient_last_visit_id ?? '' }}</p>
                                </div>
                            </div>


                            <!-- End Form Group -->
                            </div> 
                        <!-- End Form -->
                    </div>
                    <!-- End Body -->
                </div>
                
            </form>
                <!-- End Card -->
            </div>

            <div class="col-lg-4">
                <!-- Card -->
                <div class="card">
                    <!-- Header -->
                    <div class="card-header">
                        <h4 class="card-header-title">{{\App\CPU\translate('Eligibility Criteria Evaluation')}}</h4>
                    </div>
                    <!-- End Header -->

                    <!-- Body -->
                    <form id="eligibility-form">
                        @csrf
                        <input type="hidden" name="lead_id" value="{{$lead->id}}">
                        <div class="card-body">
                        <input type="hidden" class="form-control" name="agent_id" id="formLabel"
                            placeholder="{{\App\CPU\translate('Name of Agent ')}}" aria-label="Type "
                            value="{{auth('admin')->id()}}">
                            <label for="patient_last_visit_id" class="col-form-label input-label">{{\App\CPU\translate('Action')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display doc_zipcode"></i></label>
                            <div class="input-group input-group-sm-down-break">
                                 <p style="border-bottom:1px solid black;width:100%">{{ $lead->status == 1 ? 'Waiting for Approval' : ($lead->status == 3 ? 'Rejected Eligibility Criteria' : ($lead->status == 2 ? 'Approved Eligibility Criteria' : '')) }}</p>
                            </div>
                            <label for="patient_last_visit_id" class="col-form-label input-label">{{\App\CPU\translate('Status')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display doc_zipcode"></i></label>
                            <div class="input-group input-group-sm-down-break">
                                 <p style="border-bottom:1px solid black;width:100%">{{ $lead->eligibility_details ? $lead->eligibility_details->status : 'Not Specified' }}</p>
                            </div>
                            <label for="patient_last_visit_id" class="col-form-label input-label">{{\App\CPU\translate('Remarks')}}<i class="tio-help-outlined text-body ml-0" data-toggle="tooltip" data-placement="top" title="Display doc_zipcode"></i></label>
                            <div class="input-group input-group-sm-down-break">
                               <textarea name="remarks" class="form-control eligibility-field" rows="3" placeholder="Pending for Approval" disabled>{{ $lead->eligibility_details ? $lead->eligibility_details->remarks : '' }}</textarea>
                            </div>
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
        $(document).on('submit','#eligibility-form',function(e){
            e.preventDefault();
            $('.submit-btn').attr('disabled',true);
            $('.form-control').removeClass('is-invalid');
            $('.invalid-feedback.is-invalid').remove();
            $.ajax({
                url : "{{route('admin.eligibility.store')}}",
                type : "POST",
                data : new FormData(this),
                dataType : "json",
                contentType : false,
                processData : false,
                cache : false,
                success:function(response){
                    swal.fire('success!','Your feedback has been saved successfully.','success');
                    $('.eligibility-field').attr('disabled',true);
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
