@extends('layouts.back-end.app')
@section('title', \App\CPU\translate('Edit Role'))
@push('css_or_js')

@endpush

@section('content')
    <div class="content container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{\App\CPU\translate('Dashboard')}}</a></li>
                <li class="breadcrumb-item" aria-current="page">{{\App\CPU\translate('Role Update')}}</li>
            </ol>
        </nav>

        <!-- Content Row -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('admin.custom-role.update',[$role['id']])}}" method="post"
                              style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};">
                            @csrf
                            <div class="form-group">
                                <label for="name">{{\App\CPU\translate('role_name')}}</label>
                                <input type="text" name="name" value="{{$role['name']}}" class="form-control" id="name"
                                       aria-describedby="emailHelp"
                                       placeholder="{{\App\CPU\translate('Ex')}} : {{\App\CPU\translate('Store')}}">
                            </div>

                            <label for="module">{{\App\CPU\translate('module_permission')}} : </label>
                            <hr>
                            <div class="row">
                              <div class="col-md-3">
                                    <div class="form-group form-check">
                                        <input type="checkbox" name="modules[]" value="dashboard" class="form-check-input"
                                               id="dashboard" {{in_array('dashboard',(array)json_decode($role['module_access']))?'checked':''}}>
                                        <label class="form-check-label" style="{{Session::get('direction') === "rtl" ? 'margin-right: 1.25rem;' : ''}};"
                                               for="dashboard">{{\App\CPU\translate('Dashboard')}}</label>
                               </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-check">
                                        <input type="checkbox" name="modules[]" value="csr_forms" class="form-check-input"
                                               id="csr_forms" {{in_array('csr_forms',(array)json_decode($role['module_access']))?'checked':''}}>
                                        <label class="form-check-label" style="{{Session::get('direction') === "rtl" ? 'margin-right: 1.25rem;' : ''}};" style="{{Session::get('direction') === "rtl" ? 'margin-right: 1.25rem;' : ''}};" for="csr_forms">{{\App\CPU\translate('CSR Forms')}}</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-check">
                                        <input type="checkbox" name="modules[]" value="view_csr_forms" class="form-check-input"
                                               id="csr_forms" {{in_array('view_csr_forms',(array)json_decode($role['module_access']))?'checked':''}}>
                                        <label class="form-check-label" style="{{Session::get('direction') === "rtl" ? 'margin-right: 1.25rem;' : ''}};" style="{{Session::get('direction') === "rtl" ? 'margin-right: 1.25rem;' : ''}};" for="csr_forms">{{\App\CPU\translate('View CSR Forms')}}</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-check">
                                        <input type="checkbox" name="modules[]" value="edit_csr_forms" class="form-check-input"
                                               id="csr_forms" {{in_array('edit_csr_forms',(array)json_decode($role['module_access']))?'checked':''}}>
                                        <label class="form-check-label" style="{{Session::get('direction') === "rtl" ? 'margin-right: 1.25rem;' : ''}};" style="{{Session::get('direction') === "rtl" ? 'margin-right: 1.25rem;' : ''}};" for="csr_forms">{{\App\CPU\translate('Edit CSR Forms')}}</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-check">
                                        <input type="checkbox" name="modules[]" value="delete_csr_forms" class="form-check-input"
                                               id="csr_forms" {{in_array('delete_csr_forms',(array)json_decode($role['module_access']))?'checked':''}}>
                                        <label class="form-check-label" style="{{Session::get('direction') === "rtl" ? 'margin-right: 1.25rem;' : ''}};" style="{{Session::get('direction') === "rtl" ? 'margin-right: 1.25rem;' : ''}};" for="csr_forms">{{\App\CPU\translate('Delete CSR Forms')}}</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-check">
                                        <input type="checkbox" name="modules[]" value="eligibility_criteria" class="form-check-input"
                                               id="eligibility_criteria" {{in_array('eligibility_criteria',(array)json_decode($role['module_access']))?'checked':''}}>
                                        <label class="form-check-label" style="{{Session::get('direction') === "rtl" ? 'margin-right: 1.25rem;' : ''}};"
                                               for="eligibility_criteria">{{\App\CPU\translate('Eligibility Criteria')}}</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-check">
                                        <input type="checkbox" name="modules[]" value="view_eligibility_criteria" class="form-check-input"
                                               id="eligibility_criteria" {{in_array('view_eligibility_criteria',(array)json_decode($role['module_access']))?'checked':''}}>
                                        <label class="form-check-label" style="{{Session::get('direction') === "rtl" ? 'margin-right: 1.25rem;' : ''}};"
                                               for="eligibility_criteria">{{\App\CPU\translate('View Eligibility Criteria')}}</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-check">
                                        <input type="checkbox" name="modules[]" value="edit_eligibility_criteria" class="form-check-input"
                                               id="eligibility_criteria" {{in_array('edit_eligibility_criteria',(array)json_decode($role['module_access']))?'checked':''}}>
                                        <label class="form-check-label" style="{{Session::get('direction') === "rtl" ? 'margin-right: 1.25rem;' : ''}};"
                                               for="eligibility_criteria">{{\App\CPU\translate('Edit Eligibility Criteria')}}</label>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row">
                            <div class="col-md-3">
                                    <div class="form-group form-check">
                                        <input type="checkbox" name="modules[]" value="qa_1"
                                               class="form-check-input"
                                               id="qa_1" {{in_array('qa_1',(array)json_decode($role['module_access']))?'checked':''}}>
                                        <label class="form-check-label" style="{{Session::get('direction') === "rtl" ? 'margin-right: 1.25rem;' : ''}};"
                                               for="qa_1">{{\App\CPU\translate('QA 1')}}</label>
                                    </div>
                                </div>
                            <div class="col-md-3">
                                    <div class="form-group form-check">
                                        <input type="checkbox" name="modules[]" value="view_qa_1"
                                               class="form-check-input"
                                               id="qa_1" {{in_array('view_qa_1',(array)json_decode($role['module_access']))?'checked':''}}>
                                        <label class="form-check-label" style="{{Session::get('direction') === "rtl" ? 'margin-right: 1.25rem;' : ''}};"
                                               for="qa_1">{{\App\CPU\translate('View QA 1')}}</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-check">
                                        <input type="checkbox" name="modules[]" value="edit_qa_1"
                                               class="form-check-input"
                                               id="qa_1" {{in_array('edit_qa_1',(array)json_decode($role['module_access']))?'checked':''}}>
                                        <label class="form-check-label" style="{{Session::get('direction') === "rtl" ? 'margin-right: 1.25rem;' : ''}};"
                                               for="qa_1">{{\App\CPU\translate('Edit QA 1')}}</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-check">
                                        <input type="checkbox" name="modules[]" value="qa_2"
                                               class="form-check-input"
                                               id="qa_2" {{in_array('qa_2',(array)json_decode($role['module_access']))?'checked':''}}>
                                        <label class="form-check-label" style="{{Session::get('direction') === "rtl" ? 'margin-right: 1.25rem;' : ''}};"
                                               for="qa_2">{{\App\CPU\translate('QA 2')}}</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-check">
                                        <input type="checkbox" name="modules[]" value="view_qa_2"
                                               class="form-check-input"
                                               id="qa_2" {{in_array('view_qa_2',(array)json_decode($role['module_access']))?'checked':''}}>
                                        <label class="form-check-label" style="{{Session::get('direction') === "rtl" ? 'margin-right: 1.25rem;' : ''}};"
                                               for="qa_2">{{\App\CPU\translate('View QA 2')}}</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-check">
                                        <input type="checkbox" name="modules[]" value="edit_qa_2"
                                               class="form-check-input"
                                               id="qa_2" {{in_array('edit_qa_2',(array)json_decode($role['module_access']))?'checked':''}}>
                                        <label class="form-check-label" style="{{Session::get('direction') === "rtl" ? 'margin-right: 1.25rem;' : ''}};"
                                               for="qa_2">{{\App\CPU\translate('Edit QA 2')}}</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-check">
                                        <input type="checkbox" name="modules[]" value="form_filling"
                                               class="form-check-input"
                                               id="form_filling" {{in_array('form_filling',(array)json_decode($role['module_access']))?'checked':''}}>
                                        <label class="form-check-label" style="{{Session::get('direction') === "rtl" ? 'margin-right: 1.25rem;' : ''}};"
                                               for="form_filling">{{\App\CPU\translate('Form Filling')}}</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-check">
                                        <input type="checkbox" name="modules[]" value="view_form_filling"
                                               class="form-check-input"
                                               id="form_filling" {{in_array('view_form_filling',(array)json_decode($role['module_access']))?'checked':''}}>
                                        <label class="form-check-label" style="{{Session::get('direction') === "rtl" ? 'margin-right: 1.25rem;' : ''}};"
                                               for="form_filling">{{\App\CPU\translate('View Form Filling')}}</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-check">
                                        <input type="checkbox" name="modules[]" value="edit_form_filling"
                                               class="form-check-input"
                                               id="form_filling" {{in_array('edit_form_filling',(array)json_decode($role['module_access']))?'checked':''}}>
                                        <label class="form-check-label" style="{{Session::get('direction') === "rtl" ? 'margin-right: 1.25rem;' : ''}};"
                                               for="form_filling">{{\App\CPU\translate('Edit Form Filling')}}</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-check">
                                        <input type="checkbox" name="modules[]" value="chaser"
                                               class="form-check-input"
                                               id="chaser" {{in_array('chaser',(array)json_decode($role['module_access']))?'checked':''}}>
                                        <label class="form-check-label" style="{{Session::get('direction') === "rtl" ? 'margin-right: 1.25rem;' : ''}};"
                                               for="chaser">{{\App\CPU\translate('Chaser')}}</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-check">
                                        <input type="checkbox" name="modules[]" value="view_chaser"
                                               class="form-check-input"
                                               id="chaser" {{in_array('view_chaser',(array)json_decode($role['module_access']))?'checked':''}}>
                                        <label class="form-check-label" style="{{Session::get('direction') === "rtl" ? 'margin-right: 1.25rem;' : ''}};"
                                               for="chaser">{{\App\CPU\translate('View Chaser')}}</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-check">
                                        <input type="checkbox" name="modules[]" value="edit_chaser"
                                               class="form-check-input"
                                               id="chaser" {{in_array('edit_chaser',(array)json_decode($role['module_access']))?'checked':''}}>
                                        <label class="form-check-label" style="{{Session::get('direction') === "rtl" ? 'margin-right: 1.25rem;' : ''}};"
                                               for="chaser">{{\App\CPU\translate('Edit Chaser')}}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-md-3">
                                    <div class="form-group form-check">
                                        <input type="checkbox" name="modules[]" value="confirmation"
                                               class="form-check-input"
                                               id="confirmation" {{in_array('confirmation',(array)json_decode($role['module_access']))?'checked':''}}>
                                        <label class="form-check-label" style="{{Session::get('direction') === "rtl" ? 'margin-right: 1.25rem;' : ''}};"
                                               for="confirmation">{{\App\CPU\translate('Confirmation')}}</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-check">
                                        <input type="checkbox" name="modules[]" value="view_confirmation"
                                               class="form-check-input"
                                               id="confirmation" {{in_array('view_confirmation',(array)json_decode($role['module_access']))?'checked':''}}>
                                        <label class="form-check-label" style="{{Session::get('direction') === "rtl" ? 'margin-right: 1.25rem;' : ''}};"
                                               for="confirmation">{{\App\CPU\translate('View Confirmation')}}</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-check">
                                        <input type="checkbox" name="modules[]" value="edit_confirmation"
                                               class="form-check-input"
                                               id="confirmation" {{in_array('edit_confirmation',(array)json_decode($role['module_access']))?'checked':''}}>
                                        <label class="form-check-label" style="{{Session::get('direction') === "rtl" ? 'margin-right: 1.25rem;' : ''}};"
                                               for="confirmation">{{\App\CPU\translate('Edit Confirmation')}}</label>
                                    </div>
                                </div>
                            <div class="col-md-3">
                                    <div class="form-group form-check">
                                        <input type="checkbox" name="modules[]" value="qa_3"
                                               class="form-check-input"
                                               id="qa_3" {{in_array('qa_3',(array)json_decode($role['module_access']))?'checked':''}}>
                                        <label class="form-check-label" style="{{Session::get('direction') === "rtl" ? 'margin-right: 1.25rem;' : ''}};"
                                               for="qa_3">{{\App\CPU\translate('QA 3')}}</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-check">
                                        <input type="checkbox" name="modules[]" value="report" class="form-check-input"
                                               id="report" {{in_array('report',(array)json_decode($role['module_access']))?'checked':''}}>
                                        <label class="form-check-label" style="{{Session::get('direction') === "rtl" ? 'margin-right: 1.25rem;' : ''}};"
                                               for="report">{{\App\CPU\translate('Report_&_Analytics')}}</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-check">
                                        <input type="checkbox" name="modules[]" value="employee_section"
                                               class="form-check-input"
                                               id="employee_section" {{in_array('employee_section',(array)json_decode($role['module_access']))?'checked':''}}>
                                        <label class="form-check-label" style="{{Session::get('direction') === "rtl" ? 'margin-right: 1.25rem;' : ''}};"
                                               for="employee_section">{{\App\CPU\translate('employee_section')}}</label>
                                    </div>
                                </div>
                                
                            </div>

                            <button type="submit" class="btn btn-primary">{{\App\CPU\translate('update')}}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')

@endpush
