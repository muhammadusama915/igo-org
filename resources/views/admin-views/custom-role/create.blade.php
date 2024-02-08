@extends('layouts.back-end.app')
@section('title', \App\CPU\translate('Create Role'))
@push('css_or_js')
    <!-- Custom styles for this page -->
    <link href="{{asset('public/assets/back-end')}}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush

@section('content')
    <div class="content container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{\App\CPU\translate('Dashboard')}}</a>
                </li>
                <li class="breadcrumb-item" aria-current="page">{{\App\CPU\translate('custom_role')}}</li>
            </ol>
        </nav>

        <!-- Content Row -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{\App\CPU\translate('role_form')}}
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.custom-role.create')}}" method="post"
                              style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};">
                            @csrf
                            <div class="form-group">
                                <label for="name">{{\App\CPU\translate('role_name')}}</label>
                                <input type="text" name="name" class="form-control" id="name"
                                       aria-describedby="emailHelp"
                                       placeholder="{{\App\CPU\translate('Ex')}} : {{\App\CPU\translate('Store')}}" required>
                            </div>

                            <label for="name">{{\App\CPU\translate('module_permission')}} : </label>
                            <hr>
                            <div class="row">
                            <div class="col-md-3">
                                    <div class="form-group form-check">
                                        <input type="checkbox" name="modules[]" value="dashboard" class="form-check-input"
                                               id="dashboard">
                                        <label class="form-check-label" style="{{Session::get('direction') === "rtl" ? 'margin-right: 1.25rem;' : ''}};"
                                               for="dashboard">{{\App\CPU\translate('Dashboard')}}</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-check">
                                        <input type="checkbox" name="modules[]" value="csr_forms" class="form-check-input"
                                               id="csr_forms">
                                        <label class="form-check-label" style="{{Session::get('direction') === "rtl" ? 'margin-right: 1.25rem;' : ''}};" for="csr_forms">{{\App\CPU\translate('CSR Forms')}}</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-check">
                                        <input type="checkbox" name="modules[]" value="view_csr_forms" class="form-check-input"
                                               id="csr_forms">
                                        <label class="form-check-label" style="{{Session::get('direction') === "rtl" ? 'margin-right: 1.25rem;' : ''}};" for="csr_forms">{{\App\CPU\translate('View CSR Forms')}}</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-check">
                                        <input type="checkbox" name="modules[]" value="edit_csr_forms" class="form-check-input"
                                               id="csr_forms">
                                        <label class="form-check-label" style="{{Session::get('direction') === "rtl" ? 'margin-right: 1.25rem;' : ''}};" for="csr_forms">{{\App\CPU\translate('Edit CSR Forms')}}</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-check">
                                        <input type="checkbox" name="modules[]" value="delete_csr_forms" class="form-check-input"
                                               id="csr_forms">
                                        <label class="form-check-label" style="{{Session::get('direction') === "rtl" ? 'margin-right: 1.25rem;' : ''}};" for="csr_forms">{{\App\CPU\translate('Delate CSR Forms')}}</label>
                                    </div>
                                </div>
                                <!--csr_forms end-->

                                <div class="col-md-3">
                                    <div class="form-group form-check">
                                        <input type="checkbox" name="modules[]" value="eligibility_criteria" class="form-check-input"
                                               id="eligibility_criteria">
                                        <label class="form-check-label" style="{{Session::get('direction') === "rtl" ? 'margin-right: 1.25rem;' : ''}};"
                                               for="eligibility_criteria">{{\App\CPU\translate('Eligibility Criteria')}}</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-check">
                                        <input type="checkbox" name="modules[]" value="view_eligibility_criteria" class="form-check-input"
                                               id="eligibility_criteria">
                                        <label class="form-check-label" style="{{Session::get('direction') === "rtl" ? 'margin-right: 1.25rem;' : ''}};"
                                               for="eligibility_criteria">{{\App\CPU\translate('View Eligibility Criteria')}}</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-check">
                                        <input type="checkbox" name="modules[]" value="edit_eligibility_criteria" class="form-check-input"
                                               id="eligibility_criteria">
                                        <label class="form-check-label" style="{{Session::get('direction') === "rtl" ? 'margin-right: 1.25rem;' : ''}};"
                                               for="eligibility_criteria">{{\App\CPU\translate('Edit Eligibility Criteria')}}</label>
                                    </div>
                                </div>
                                <!--eligibility_criteria-->
                                <!--qa_1-->

                            </div>

                            <div class="row">
                            <div class="col-md-3">
                                    <div class="form-group form-check">
                                        <input type="checkbox" name="modules[]" value="qa_1"
                                               class="form-check-input"
                                               id="qa_1">
                                        <label class="form-check-label" style="{{Session::get('direction') === "rtl" ? 'margin-right: 1.25rem;' : ''}};"
                                               for="qa_1">{{\App\CPU\translate('QA 1')}}</label>
                                    </div>
                                </div>
                            <div class="col-md-3">
                                    <div class="form-group form-check">
                                        <input type="checkbox" name="modules[]" value="view_qa_1"
                                               class="form-check-input"
                                               id="qa_1">
                                        <label class="form-check-label" style="{{Session::get('direction') === "rtl" ? 'margin-right: 1.25rem;' : ''}};"
                                               for="qa_1">{{\App\CPU\translate('View QA 1')}}</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-check">
                                        <input type="checkbox" name="modules[]" value="edit_qa_1"
                                               class="form-check-input"
                                               id="qa_1">
                                        <label class="form-check-label" style="{{Session::get('direction') === "rtl" ? 'margin-right: 1.25rem;' : ''}};"
                                               for="qa_1">{{\App\CPU\translate('Edit QA 1')}}</label>
                                    </div>
                                </div>
                            <div class="col-md-3">
                                    <div class="form-group form-check">
                                        <input type="checkbox" name="modules[]" value="qa_2"
                                               class="form-check-input"
                                               id="qa_2">
                                        <label class="form-check-label" style="{{Session::get('direction') === "rtl" ? 'margin-right: 1.25rem;' : ''}};"
                                               for="qa_2">{{\App\CPU\translate('QA 2')}}</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-check">
                                        <input type="checkbox" name="modules[]" value="view_qa_2"
                                               class="form-check-input"
                                               id="qa_2">
                                        <label class="form-check-label" style="{{Session::get('direction') === "rtl" ? 'margin-right: 1.25rem;' : ''}};"
                                               for="qa_2">{{\App\CPU\translate('View QA 2')}}</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-check">
                                        <input type="checkbox" name="modules[]" value="edit_qa_2"
                                               class="form-check-input"
                                               id="qa_2">
                                        <label class="form-check-label" style="{{Session::get('direction') === "rtl" ? 'margin-right: 1.25rem;' : ''}};"
                                               for="qa_2">{{\App\CPU\translate('Edit QA 2')}}</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-check">
                                        <input type="checkbox" name="modules[]" value="form_filling"
                                               class="form-check-input"
                                               id="form_filling">
                                        <label class="form-check-label" style="{{Session::get('direction') === "rtl" ? 'margin-right: 1.25rem;' : ''}};"
                                               for="form_filling">{{\App\CPU\translate('Form Filling')}}</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-check">
                                        <input type="checkbox" name="modules[]" value="chaser"
                                               class="form-check-input"
                                               id="chaser">
                                        <label class="form-check-label" style="{{Session::get('direction') === "rtl" ? 'margin-right: 1.25rem;' : ''}};"
                                               for="chaser">{{\App\CPU\translate('Chaser')}}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-md-3">
                                    <div class="form-group form-check">
                                        <input type="checkbox" name="modules[]" value="confirmation"
                                               class="form-check-input"
                                               id="confirmation">
                                        <label class="form-check-label" style="{{Session::get('direction') === "rtl" ? 'margin-right: 1.25rem;' : ''}};"
                                               for="confirmation">{{\App\CPU\translate('Confirmation')}}</label>
                                    </div>
                                </div>
                            <div class="col-md-3">
                                    <div class="form-group form-check">
                                        <input type="checkbox" name="modules[]" value="qa_3"
                                               class="form-check-input"
                                               id="qa_3">
                                        <label class="form-check-label" style="{{Session::get('direction') === "rtl" ? 'margin-right: 1.25rem;' : ''}};"
                                               for="qa_3">{{\App\CPU\translate('Qa 3')}}</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-check">
                                        <input type="checkbox" name="modules[]" value="report" class="form-check-input"
                                               id="report">
                                        <label class="form-check-label" style="{{Session::get('direction') === "rtl" ? 'margin-right: 1.25rem;' : ''}};"
                                               for="report">{{\App\CPU\translate('Report_&_Analytics')}}</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-check">
                                        <input type="checkbox" name="modules[]" value="employee_section" class="form-check-input"
                                               id="employee_section">
                                        <label class="form-check-label" style="{{Session::get('direction') === "rtl" ? 'margin-right: 1.25rem;' : ''}};"
                                               for="employee_section">{{\App\CPU\translate('Employee_Section')}}</label>
                                    </div>
                                </div>
                               
                            </div>

                            <button type="submit" class="btn btn-primary">{{\App\CPU\translate('Submit')}}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 20px">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>{{\App\CPU\translate('roles_table')}}</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"
                                   style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};">
                                <thead>
                                <tr>
                                    <th scope="col">{{\App\CPU\translate('SL')}}#</th>
                                    <th scope="col">{{\App\CPU\translate('role_name')}}</th>
                                    <th scope="col">{{\App\CPU\translate('modules')}}</th>
                                    <th scope="col">{{\App\CPU\translate('created_at')}}</th>
                                    <th scope="col">{{\App\CPU\translate('status')}}</th>
                                    <th scope="col" style="width: 50px">{{\App\CPU\translate('action')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($rl as $k=>$r)
                                    <tr>
                                        <th scope="row">{{$k+1}}</th>
                                        <td>{{$r['name']}}</td>
                                        <td class="text-capitalize">
                                            @if($r['module_access']!=null)
                                                @foreach((array)json_decode($r['module_access']) as $m)
                                                    {{str_replace('_',' ',$m)}} <br>
                                                @endforeach
                                            @endif
                                        </td>
                                        <td>{{date('d-M-y',strtotime($r['created_at']))}}</td>
                                        <td>{{\App\CPU\Helpers::status($r['status'])}}</td>
                                        <td>
                                            <a href="{{route('admin.custom-role.update',[$r['id']])}}"
                                               class="btn btn-primary btn-sm">
                                                {{\App\CPU\translate('Edit') }}
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <!-- Page level plugins -->
    <script src="{{asset('public/assets/back-end')}}/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="{{asset('public/assets/back-end')}}/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Page level custom scripts -->
    <script>
        $(document).ready(function () {
            $('#dataTable').DataTable();
        });
    </script>
@endpush
