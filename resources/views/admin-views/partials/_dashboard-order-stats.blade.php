<div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
    <!-- Card -->
    <a class="card card-hover-shadow h-100" href="{{route('admin.lead.index')}}" style="background: #3E215D">
        <div class="card-body">
            <div class="flex-between align-items-center mb-1">
                <div style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};">
                    <h6 class="card-subtitle" style="color: white!important;">{{\App\CPU\translate('Total CSR Forms')}}</h6>
                    <span class="card-title h2" style="color: white!important;">
                        {{$data['leads']}}
                    </span>
                </div>
                <div class="mt-2"> 
                    <i class="tio-book" style="font-size: 30px;color: white"></i>
                </div>
            </div>
            <!-- End Row -->
        </div>
    </a>
    <!-- End Card -->
</div>

<div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
    <!-- Card -->
    <a class="card card-hover-shadow h-100" href="" style="background: #001E6C">
        <div class="card-body">
            <div class="flex-between align-items-center mb-1">
                <div style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};">
                    <h6 class="card-subtitle" style="color: white!important;">{{\App\CPU\translate('Eligibility')}}</h6>
                     <span class="card-title h2" style="color: white!important;">
                         {{$data['confirmed']}}
                     </span>
                </div>

                <div class="mt-2">
                    <i class="tio-checkmark-circle" style="font-size: 30px;color: white"></i>
                </div>
            </div>
            <!-- End Row -->
        </div>
    </a>
    <!-- End Card -->
</div>

<div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
    <!-- Card -->
    <a class="card card-hover-shadow h-100" href="" style="background: #053742">
        <div class="card-body">
            <div class="flex-between align-items-center gx-2 mb-1">
                <div style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};">
                    <h6 class="card-subtitle" style="color: white!important;">{{\App\CPU\translate('Out For QA 1')}}</h6>
                    <span class="card-title h2" style="color: white!important;">
                        {{$data['processing']}}
                    </span>
                </div>

                <div class="mt-2">
                    <i class="tio-time" style="font-size: 30px;color: white"></i>
                </div>
            </div>
            <!-- End Row -->
        </div>
    </a>
    <!-- End Card -->
</div>

<div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
    <!-- Card -->
    <a class="card card-hover-shadow h-100" href="" style="background: #343A40">
        <div class="card-body">
            <div class="flex-between align-items-center gx-2 mb-1">
                <div style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};">
                    <h6 class="card-subtitle" style="color: white!important;">{{\App\CPU\translate('OUT FOR QA 2')}}</h6>
                    <span class="card-title h2" style="color: white!important;">
                        {{$data['out_for_delivery']}}
                    </span>
                </div>

                <div class="mt-2">
                    <i class="tio-bike" style="font-size: 30px;color: white"></i>
                </div>
            </div>
            <!-- End Row -->
        </div>
    </a>
    <!-- End Card -->
</div>

<div class="col-12">
    <div class="card card-body" style="background: #FEF7DC!important;">
        <div class="row gx-lg-4">
            <div class="col-sm-6 col-lg-3">
                <div class="media flex-between align-items-center" style="cursor: pointer"
                     onclick="location.href='{{route('admin.orders.list',['delivered'])}}'">
                    <div class="media-body" style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};">
                        <h6 class="card-subtitle">{{\App\CPU\translate('PENDING FORMS')}}</h6>
                        <span class="card-title h3">{{$data['delivered']}}</span>
                    </div>
                    <div>
                        <span class="icon icon-sm icon-soft-secondary icon-circle ml-3">
                            <i class="tio-checkmark-circle-outlined"></i>
                        </span>
                    </div>
                </div>
                <div class="d-lg-none">
                    <hr>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3 column-divider-sm">
                <div class="media flex-between align-items-center" style="cursor: pointer"
                     onclick="location.href='{{route('admin.orders.list',['canceled'])}}'">
                    <div class="media-body" style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};">
                        <h6 class="card-subtitle">{{\App\CPU\translate('OUT FOR CHASERS')}}</h6>
                        <span class="card-title h3">{{$data['canceled']}}</span>
                    </div>
                    <span class="icon icon-sm icon-soft-secondary icon-circle ml-3">
                      <i class="tio-time"></i>
                    </span>
                </div>
                <div class="d-lg-none">
                    <hr>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3 column-divider-lg">
                <div class="media flex-between align-items-center" style="cursor: pointer"
                     onclick="location.href='{{route('admin.orders.list',['returned'])}}'">
                    <div class="media-body" style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};">
                        <h6 class="card-subtitle">{{\App\CPU\translate('CONFIRMATION')}}</h6>
                        <span class="card-title h3">{{$data['returned']}}</span>
                    </div>
                    <span class="icon icon-sm icon-soft-secondary icon-circle ml-3">
                      <i class="tio-message-failed"></i>
                    </span>
                </div>
                <div class="d-lg-none">
                    <hr>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3 column-divider-sm">
                <div class="media flex-between align-items-center" style="cursor: pointer"
                     onclick="location.href='{{route('admin.orders.list',['failed'])}}'">
                    <div class="media-body" style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};">
                        <h6 class="card-subtitle">{{\App\CPU\translate('Out For QA 3')}}</h6>
                        <span
                            class="card-title h3">{{$data['failed']}}</span>
                    </div>
                    <span class="icon icon-sm icon-soft-secondary icon-circle ml-3">
                      <i class="tio-history"></i>
                    </span>
                </div>
                <div class="d-lg-none">
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>
