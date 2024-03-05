@extends('layouts.back-end.app')

@section('title', \App\CPU\translate('Lead List'))

@push('css_or_js')
    <!-- Custom styles for this page -->
    <link href="{{asset('public/assets/back-end')}}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <style>
        .custom-width{
            width:100px !important;
        }
    </style>
@endpush

@section('content')
    <div class="content container-fluid">
        <!-- Page Header -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{\App\CPU\translate('Dashboard')}}</a></li>
            <li class="breadcrumb-item" aria-current="page">{{\App\CPU\translate('CSR Forms')}}</li>
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
                        <label> {{\App\CPU\translate('Rejected From Eligibility Criteria')}} : </label>
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
                        <th class="custom-width">Status</th>
                        <th>Agent</th>
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
                                    @if(\App\CPU\Helpers::module_permission_check('view_csr_forms'))   
                                    <a class="dropdown-item"
                                           href="{{route('admin.lead.view',$lead->id)}}"><i
                                                class="tio-visible"></i> {{\App\CPU\translate('view')}}</a>
                                    @else
                                    <a class="dropdown-item"
                                           href=""><i
                                                class="tio-visible"></i> {{\App\CPU\translate('Access Denied')}}</a>
                                    @endif
                                    @if(\App\CPU\Helpers::module_permission_check('edit_csr_forms') && ($lead->status == 1 || $lead->status == 3)) 
                                        <a class="dropdown-item"
                                           href="{{route('admin.lead.edit',$lead->id)}}"><i
                                                class="tio-edit"></i> {{\App\CPU\translate('Edit')}}</a>
                                    @else
                                    <a class="dropdown-item"
                                           href=""><i
                                                class="tio-edit"></i> {{\App\CPU\translate('Access Denied')}}</a>
                                    @endif
                                    @if(\App\CPU\Helpers::module_permission_check('delete_csr_forms') && ($lead->status == 1 || $lead->status == 3))
                                        <a class="dropdown-item delete" attr-id="{{$lead->id}}"
                                           href=""><i
                                                class="tio-delete"></i> {{\App\CPU\translate('Delete')}}</a>
                                    @else
                                    <a class="dropdown-item"
                                           href=""><i
                                                class="tio-delete"></i> {{\App\CPU\translate('Access Denied')}}</a>
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
                                <span class="badge badge-soft-warning ml-1 ml-sm-1">
                                    Approved from Eligibility Criteria
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
                                <span class="badge badge-soft-success ml-1 ml-sm-1">
                                    Approved from QA 1
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
                                @elseif($lead->status == '8')
                                <span class="badge badge-soft-primary ml-1 ml-sm-1">
                                    Submitted for chaser
                                </span>
                            @elseif($lead->status == '9')
                                <span class="badge badge-soft-danger ml-1 ml-sm-1">
                                    Rejected from Form Filling
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
                                    Submitted for Eligibility Criteria
                                </span>
                            @endif 
                            </td>
                            <td>@shorten($lead->agent_details->name)</td>
                            <td>@shorten($lead->sip_id)</td>
                            <td>+1 @shorten($lead->phone)</td>
                            <td>{{ $lead->f_name }}</td>
                            <td>@shorten($lead->m_name)</td>
                            <td>{{ $lead->l_name }}</td>
                            <td>@shorten($lead->dob)</td>
                            <td>@shorten($lead->gender)</td>
                            <td>@shorten($lead->address)</td>
                            <td>@shorten($lead->state)</td>
                            <td>@shorten($lead->city)</td>
                            <td>@shorten($lead->zipcode)</td>
                            <td>@shorten($lead->medcare_id)</td>
                            <td>@shorten($lead->ssn)</td>
                            <td>@shorten($lead->height)</td>
                            <td>@shorten($lead->weight)</td>
                            <td>@shorten($lead->waist)</td>
                            <td>@shorten($lead->shoe_size)</td>
                            <td>@shorten($lead->scale_of_pain)</td>
                            <td>@shorten($lead->pain_area)</td>
                            <td>@shorten($lead->golucose_level)</td>
                            <td>@shorten($lead->pills)</td>
                            <td>@shorten($lead->injected_insulin)</td>
                            <td>@shorten($lead->name_of_medicine)</td>
                            <td>@shorten($lead->covid_kit)</td>
                            <td>@shorten($lead->covid_kit_date)</td>
                            <td>@shorten($lead->comment)</td>
                            <td>+1 @shorten($lead->doc_phone)</td>
                            <td>@shorten($lead->doc_f_name)</td>
                            <td>@shorten($lead->doc_l_name)</td>
                            <td>@shorten($lead->second_doc_details)</td>
                            <td>@shorten($lead->doc_address)</td>
                            <td>@shorten($lead->doc_state)</td>
                            <td>@shorten($lead->doc_city)</td>
                            <td>@shorten($lead->doc_zipcode)</td>
                            <td>@shorten($lead->doc_npi)</td>
                            <td>@shorten($lead->doc_fax)</td>
                            <td>@shorten($lead->patient_last_visit_id)</td>

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
                dataTable.search('Rejected From Eligibility Criteria').draw();
                toastr.success('Lead List has been filtered successfully.');
            }else{
                var dataTable = $('#dataTable').DataTable(); // Replace with your DataTable ID
                dataTable.search('').draw();
                toastr.success('Lead List has been filtered successfully.');
            }
        };
    </script>
@endpush
