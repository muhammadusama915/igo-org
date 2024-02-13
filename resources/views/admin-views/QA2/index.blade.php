@extends('layouts.back-end.app')

@section('title', \App\CPU\translate('QA 2'))

@push('css_or_js')
    <!-- Custom styles for this page -->
    <link href="{{asset('public/assets/back-end')}}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush

@section('content') 
    <div class="content container-fluid">
        <!-- Page Header -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{\App\CPU\translate('Dashboard')}}</a></li>
            <li class="breadcrumb-item" aria-current="page">{{\App\CPU\translate('QA 2')}}</li>
            <li class="breadcrumb-item" aria-current="page">{{\App\CPU\translate('List')}}</li>
            </ol>
         </nav>
        <!-- Card -->
        <div class="card">
            <!-- Header -->
            <div class="card-header">
                <div class="flex-between justify-content-between align-items-center flex-grow-1">
                    <div>
                    <h1 class="page-header-title">{{\App\CPU\translate('Lead List')}}<span class="badge total-lead badge-soft-info ml-1 ml-sm-1"/ attr-value="{{$leads->count()}}">{{$leads->count()}}</span></h1>
                    </div>
                    <div>
                        <label> {{\App\CPU\translate('Pending for QA 2')}} : </label>
                        <label class="switch ml-3">
                            <input type="checkbox" class="status"
                                   onclick="filter_order()">
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>
                <!-- End Row -->
            </div>
            <!-- End Header -->

            <!-- Table -->
            <div class="table-responsive p-3">
            <table id="dataTable" style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};"
                               class="table table-hover table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
                               style="width: 100%">
                    <thead class="thead-light">
                    <tr>
                        <th>Action</th>
                        <th>Product</th>
                        <th>Status</th>
                        <th>CSR Agent</th>
                        <th>Eligiblity Criteria Agent</th>
                        <th>QA 1 Agent</th>
                        <th>SIP ID</th>
                        <th>Phone</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Date of Birth</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>State</th>
                        <th>City</th>
                        <th>Zipcode</th>
                        <th>Medcare ID</th>
                        <th>SSN</th>
                        <th>Height</th>
                        <th>Weight</th>
                        <th>Waist</th>
                        <th>Shoe Size</th>
                        <th>Scale of Pain</th>
                        <th>Pain Area</th>
                        <th>Glucose Level</th>
                        <th>Pills</th>
                        <th>Injected Insulin</th>
                        <th>Name of Medicine</th>
                        <th>Covid Kit</th>
                        <th>Covid Kit Date</th>
                        <th>Comment</th>
                        <th>Doctor Phone</th>
                        <th>Doctor First Name</th>
                        <th>Doctor Last Name</th>
                        <th>Second Doctor Details</th>
                        <th>Doctor Address</th>
                        <th>Doctor State</th>
                        <th>Doctor City</th>
                        <th>Doctor Zipcode</th>
                        <th>Doctor NPI</th>
                        <th>Doctor Fax</th>
                        <th>Patient Last Visit ID</th>
                    </tr>
                    </thead>

                    <tbody>
                        @foreach($leads as $lead)
                        <tr class="lead-{{$lead->id}} class-all {{ $lead->status == '1' ? 'submitted' : 'rejected'}}">
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                        <i class="tio-settings"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    @if(\App\CPU\Helpers::module_permission_check('view_qa_2'))   
                                        <a class="dropdown-item"
                                            href="{{route('admin.qa2.view',$lead->id)}}"><i
                                                    class="tio-visible"></i> {{\App\CPU\translate('view')}}</a>
                                        @else
                                        <a class="dropdown-item"
                                            href=""><i
                                                    class="tio-visible"></i> {{\App\CPU\translate('Access Denied')}}</a>
                                        @endif
                                        @if(\App\CPU\Helpers::module_permission_check('edit_qa_2') && ($lead->status == 4 || $lead->status == 7)) 
                                            <a class="dropdown-item"
                                            href="{{route('admin.qa2.edit',$lead->id)}}"><i
                                                    class="tio-edit"></i> {{\App\CPU\translate('Edit')}}</a>
                                        @else
                                        <a class="dropdown-item"
                                            href=""><i
                                                    class="tio-edit"></i> {{\App\CPU\translate('Access Denied')}}</a>
                                        @endif
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="badge badge-soft-warning">
                                        <span class="legend-indicator bg-warning"
                                                style="{{Session::get('direction') === "rtl" ? 'margin-right: 0;margin-left: .4375rem;' : 'margin-left: 0;margin-right: .4375rem;'}}"></span> {{$lead->product}}
                                        </span>
                                </span>
                            </td>
                            <td>
                            @if($lead->status == '2') 
                                <span class="badge badge-soft-primary ml-1 ml-sm-1">
                                    Pending For QA 1
                                </span> 
                            @elseif($lead->status == '3') 
                                <span class="badge badge-soft-danger ml-1 ml-sm-1">
                                    Rejected from Eligibility Criteria
                                </span><br>
                                <span class="badge ml-1 ml-sm-1">
                                    Rejected Reason: {{$lead->eligibility_details->status}}
                                </span><br>
                                <span class="badge text-left ml-1 ml-sm-1" style=''>
                                    @php
                                        $remarks = $lead->eligibility_details->remarks;
                                        $words = explode(' ', $remarks);
                                        $wordsChunked = array_chunk($words, 4);
                                        $processedRemarks = array_map(function($chunk) {
                                            return implode(' ', $chunk);
                                        }, $wordsChunked);
                                        $finalRemarks = implode('<br>', $processedRemarks);
                                    @endphp
                                    Remarks: {!! $finalRemarks !!}
                                </span>
                            @elseif($lead->status == '4')
                                <span class="badge badge-soft-primary ml-1 ml-sm-1">
                                    Pending For QA 2
                                </span>
                            @elseif($lead->status == '5')
                                <span class="badge badge-soft-danger ml-1 ml-sm-1">
                                    Rejected from QA 1
                                </span><br>
                                <span class="badge text-left ml-1 ml-sm-1" style=''>
                                    @php
                                        $remarks = $lead->qa1_details->remarks;
                                        $words = explode(' ', $remarks);
                                        $wordsChunked = array_chunk($words, 4);
                                        $processedRemarks = array_map(function($chunk) {
                                            return implode(' ', $chunk);
                                        }, $wordsChunked);
                                        $finalRemarks = implode('<br>', $processedRemarks);
                                    @endphp
                                    Remarks: {!! $finalRemarks !!}
                                </span>
                                @elseif($lead->status == '6')
                                <span class="badge badge-soft-success ml-1 ml-sm-1">
                                    Approved from QA 2
                                </span>
                            @elseif($lead->status == '7')
                                <span class="badge badge-soft-danger ml-1 ml-sm-1">
                                    Rejected from QA 2
                                </span><br>
                                <span class="badge text-left ml-1 ml-sm-1" style=''>
                                    @php
                                        $remarks = $lead->qa2_details->remarks;
                                        $words = explode(' ', $remarks);
                                        $wordsChunked = array_chunk($words, 4);
                                        $processedRemarks = array_map(function($chunk) {
                                            return implode(' ', $chunk);
                                        }, $wordsChunked);
                                        $finalRemarks = implode('<br>', $processedRemarks);
                                    @endphp
                                    Remarks: {!! $finalRemarks !!}
                                </span>
                            @else 
                                <span class="badge badge-soft-primary ml-1 ml-sm-1">
                                    Pending for Eligibility Criteria
                                </span>
                            @endif 
                            </td>
                            <td>{{ $lead->agent_details->name }}</td>
                            <td>{{ optional($lead->eligibility_details)->agent_details->name ?? 'Not Specified' }}</td>
                            <td>{{ optional($lead->qa1_details)->agent_details->name ?? 'Not Specified' }}</td>
                            <td>@if($lead->status != 6) {{ $lead->sip_id }} @else @shorten($lead->sip_id) @endif</td>
                            <td>+1 @if($lead->status != 6) {{ $lead->phone }} @else @shorten($lead->phone) @endif</td>
                            <td>{{ $lead->f_name }}</td>
                            <td>@if($lead->status != 6) {{ $lead->m_name }} @else @shorten($lead->m_name) @endif</td>
                            <td>{{ $lead->l_name }}</td>
                            <td>@if($lead->status != 6) {{ $lead->dob }} @else @shorten($lead->dob) @endif</td>
                            <td>@if($lead->status != 6) {{ $lead->gender }} @else @shorten($lead->gender) @endif</td>
                            <td>@if($lead->status != 6) {{ $lead->address }} @else @shorten($lead->address) @endif</td>
                            <td>@if($lead->status != 6) {{ $lead->state }} @else @shorten($lead->state) @endif</td>
                            <td>@if($lead->status != 6) {{ $lead->city }} @else @shorten($lead->city) @endif</td>
                            <td>@if($lead->status != 6) {{ $lead->zipcode }} @else @shorten($lead->zipcode) @endif</td>
                            <td>@if($lead->status != 6) {{ $lead->medcare_id }} @else @shorten($lead->medcare_id) @endif</td>
                            <td>@if($lead->status != 6) {{ $lead->ssn }} @else @shorten($lead->ssn) @endif</td>
                            <td>@if($lead->status != 6) {{ $lead->height }} @else @shorten($lead->height) @endif</td>
                            <td>@if($lead->status != 6) {{ $lead->weight }} @else @shorten($lead->weight) @endif</td>
                            <td>@if($lead->status != 6) {{ $lead->waist }} @else @shorten($lead->waist) @endif</td>
                            <td>@if($lead->status != 6) {{ $lead->shoe_size }} @else @shorten($lead->shoe_size) @endif</td>
                            <td>@if($lead->status != 6) {{ $lead->scale_of_pain }} @else @shorten($lead->scale_of_pain) @endif</td>
                            <td>@if($lead->status != 6) {{ $lead->pain_area }} @else @shorten($lead->pain_area) @endif</td>
                            <td>@if($lead->status != 6) {{ $lead->golucose_level }} @else @shorten($lead->golucose_level) @endif</td>
                            <td>@if($lead->status != 6) {{ $lead->pills }} @else @shorten($lead->pills) @endif</td>
                            <td>@if($lead->status != 6) {{ $lead->injected_insulin }} @else @shorten($lead->injected_insulin) @endif</td>
                            <td>@if($lead->status != 6) {{ $lead->name_of_medicine }} @else @shorten($lead->name_of_medicine) @endif</td>
                            <td>@if($lead->status != 6) {{ $lead->covid_kit }} @else @shorten($lead->covid_kit) @endif</td>
                            <td>@if($lead->status != 6) {{ $lead->covid_kit_date }} @else @shorten($lead->covid_kit_date) @endif</td>
                            <td>@if($lead->status != 6) {{ $lead->comment }} @else @shorten($lead->comment) @endif</td>
                            <td>@if($lead->status != 6) +1{{ $lead->doc_phone }} @else @shorten('+1' . $lead->doc_phone) @endif</td>
                            <td>@if($lead->status != 6) {{ $lead->doc_f_name }} @else @shorten($lead->doc_f_name) @endif</td>
                            <td>@if($lead->status != 6) {{ $lead->doc_l_name }} @else @shorten($lead->doc_l_name) @endif</td>
                            <td>@if($lead->status != 6) {{ $lead->second_doc_details }} @else @shorten($lead->second_doc_details) @endif</td>
                            <td>@if($lead->status != 6) {{ $lead->doc_address }} @else @shorten($lead->doc_address) @endif</td>
                            <td>@if($lead->status != 6) {{ $lead->doc_state }} @else @shorten($lead->doc_state) @endif</td>
                            <td>@if($lead->status != 6) {{ $lead->doc_city }} @else @shorten($lead->doc_city) @endif</td>
                            <td>@if($lead->status != 6) {{ $lead->doc_zipcode }} @else @shorten($lead->doc_zipcode) @endif</td>
                            <td>@if($lead->status != 6) {{ $lead->doc_npi }} @else @shorten($lead->doc_npi) @endif</td>
                            <td>@if($lead->status != 6) {{ $lead->doc_fax }} @else @shorten($lead->doc_fax) @endif</td>
                            <td>@if($lead->status != 6) {{ $lead->patient_last_visit_id }} @else @shorten($lead->patient_last_visit_id) @endif</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- End Table -->

            <!-- Footer -->
            <div class="card-footer">
                <!-- Pagination -->
                <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
                    <div class="col-sm-auto">
                        <div class="d-flex justify-content-center justify-content-sm-end">
                            <!-- Pagination -->
                        </div>
                    </div>
                </div>
                <!-- End Pagination -->
            </div>
            <!-- End Footer -->
        </div>
        <!-- End Card -->
    </div>
@endsection

@push('script_2')
<script src="{{asset('public/assets/back-end')}}/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="{{asset('public/assets/back-end')}}/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Page level custom scripts -->
    <script>
        // Call the dataTables jQuery plugin
        $(document).ready(function () {
            $('#dataTable').DataTable();
        });

        $(document).on('click', '.delete', function (e) {
            e.preventDefault();
            var leads = $('.total-lead').attr('attr-value');
            var id = $(this).attr("attr-id");
            Swal.fire({
                title: 'Are you sure?',
                text: "{{\App\CPU\translate('You_will not_be_able_to_revert_this')}}!",
                showCancelButton: true,
                confirmButtonColor: 'primary', 
                cancelButtonColor: 'secondary',
                confirmButtonText: '{{\App\CPU\translate('Yes')}}, {{\App\CPU\translate('delete_it')}}!'
            }).then((result) => {
                if (result.value) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: "{{route('admin.lead.delete')}}",
                        method: 'POST',
                        data: {id: id},
                        success: function () {
                            $('.lead-'+id).addClass('d-none');
                            leads = leads-1;
                            $('.total-lead').text(leads);
                            $('.total-lead:first').attr('attr-value',leads);
                            toastr.success('Lead has been deleted successfully');
                           // location.reload();
                        }
                    });
                }
            })
        });
        function filter_order() {
            if($('.status').is(':checked')){
                var dataTable = $('#dataTable').DataTable(); // Replace with your DataTable ID
                dataTable.search('pending').draw();
                toastr.success('Lead List has been filtered successfully.');
            }else{
                var dataTable = $('#dataTable').DataTable(); // Replace with your DataTable ID
                dataTable.search('').draw();
                toastr.success('Lead List has been filtered successfully.');
            }
        };
    </script>
@endpush
