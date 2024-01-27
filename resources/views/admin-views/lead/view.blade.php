@extends('layouts.back-end.app')

@section('title', \App\CPU\translate('View Lead'))

@push('css_or_js')
<link href="{{asset('public/assets/back-end/css/croppie.css')}}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endpush
@php
use App\Model\Admin;
@endphp
@section('content')
    <!-- Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{\App\CPU\translate('Dashboard')}}</a></li>
            <li class="breadcrumb-item" aria-current="page">{{\App\CPU\translate('CSR Forms')}}</li>
            <li class="breadcrumb-item" aria-current="page"><a href="{{route('admin.lead.index')}}">{{\App\CPU\translate('Lead List')}}</a></li>
            <li class="breadcrumb-item" aria-current="page">{{\App\CPU\translate('View Lead')}}</li>
        </ol>
    </nav>
        <!-- End Page Header -->

        <div class="row">
            <div class="col-lg-3">
                <!-- Navbar -->
                <div class="navbar-vertical navbar-expand-lg mb-3 mb-lg-5">
                    <!-- Navbar Toggle -->
                    <button type="button" class="navbar-toggler btn btn-block btn-white mb-3"
                            aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarVerticalNavMenu"
                            data-toggle="collapse" data-target="#navbarVerticalNavMenu">
                <span class="d-flex justify-content-between align-items-center">
                  <span class="h5 mb-0">{{\App\CPU\translate('Nav menu')}}</span>

                  <span class="navbar-toggle-default">
                    <i class="tio-menu-hamburger"></i>
                  </span>

                  <span class="navbar-toggle-toggled">
                    <i class="tio-clear"></i>
                  </span>
                </span>
                    </button>
                    <!-- End Navbar Toggle -->
                <form id="edit-lead">
                     @csrf
                    <div id="navbarVerticalNavMenu" class="collapse navbar-collapse">
                        <!-- Navbar Nav -->
                        <ul id="navbarSettings"
                            class="js-sticky-block js-scrollspy navbar-nav navbar-nav-lg nav-tabs card card-navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active braces" href="javascript:" id="Braces" style="color: black">
                                    <i class="tio-shop nav-icon"></i>{{\App\CPU\translate('Braces')}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link cgm" href="javascript:" id="CGM" style="color: black">
                                    <i class="tio-credit-cards nav-icon"></i> {{\App\CPU\translate('CGM')}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link covid" href="javascript:" id="Covid" style="color: black">
                                    <i class="tio-chart-bar-1 nav-icon"></i> {{\App\CPU\translate('Covid')}}
                                </a>
                            </li>
                        </ul>
                        <!-- End Navbar Nav -->
                    </div>
                </div>
                <div class="card">
                         <div class="card-header">
                            <h2 class="card-title h4">{{\App\CPU\translate('Agent')}} {{\App\CPU\translate('Comment')}}</h2>
                        </div>
                        <div class="card-body">
                            <div class="row form-group mb-0">
                            <div class="input-group input-group-sm-down-break">
                                    <textarea name="comment" id="" class="form-control" cols="30" rows="3" placeholder="Enter Your Comments here" disabled> {{ $lead->comment ?? '' }}</textarea>
                            </div>
                            </div>
                        </div>
                </div>
                <!-- End Navbar -->
            </div>

            <div class="col-lg-9">
               
                <!-- Card -->
                    <div class="card mb-3 mb-lg-5 d-none" id="generalDiv">
                        <!-- Profile Cover -->
                        <div class="profile-cover">
                            <div class="profile-cover-img-wrapper"></div>
                        </div>
                        <!-- End Profile Cover -->

                        <!-- Avatar -->
                        <label
                            class="avatar avatar-xxl avatar-circle avatar-border-lg avatar-uploader profile-cover-avatar"
                            for="avatarUploader">
                            <img id="viewer"
                                 onerror="this.src='{{asset('public/assets/back-end/img/160x160/img1.jpg')}}'"
                                 class="avatar-img"
                                 src=""
                                 alt="Image">
                        </label>
                        <!-- End Avatar -->
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
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
                                                                <p style="border-bottom:1px solid black;width:100%">{{ Admin::find(auth('admin')->id())->name ?? '' }}</p>
                                                                    <input type="hidden" class="form-control" name="agent_id" id="formLabel"
                                                                        placeholder="{{\App\CPU\translate('Name of Agent ')}}" aria-label="Type "
                                                                        value="{{auth('admin')->id()}}">

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

                <!-- Sticky Block End Point -->
                <div id="stickyBlockEndPoint"></div>
            </div>
        </div>
        <!-- End Row -->
    </div>
    <!-- End Content -->
       <!--modal-->
       @include('shared-partials.image-process._image-crop-modal',['modal_id'=>'profile-image-modal'])
@endsection

@push('script_2')
<script type="text/javascript">
    // Generate the base URL with a placeholder for the dynamic part
    var baseUrl = "{{ route('admin.lead.cities', 'PLACEHOLDER') }}";
</script>
    <script>
        $(document).ready(function() {
        var product = "{{$lead->product}}";
        if(product == "Braces"){
            $("#CGM").removeClass("active");
            $("#Covid").removeClass("active");
            $("#Braces").addClass("active");
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
            $("#Braces").removeClass("active");
            $("#Covid").removeClass("active");
            $("#CGM").addClass("active");
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
            $("#CGM").removeClass("active");
            $("#Braces").removeClass("active");
            $("#Covid").addClass("active");
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
                    swal.fire('success!','Lead has been updated successfully and submitted for QA.','success');
                    $('.submit-btn').attr('disabled',false);
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
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#viewer').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#customFileUpload").change(function () {
            readURL(this);
        });
    </script>

    <script>
       
    </script>
        <!-- Page level plugins -->
        <script src="{{asset('public/assets/back-end/js/croppie.js')}}"></script>

        @include('shared-partials.image-process._script',[
         'id'=>'profile-image-modal',
         'height'=>200,
         'width'=>200,
         'multi_image'=>false,
         'route'=>route('image-upload')
         ])

@endpush

@push('script')

@endpush
