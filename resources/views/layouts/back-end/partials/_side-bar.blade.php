<style>

    .btn-primary {
        background-color: darkorange !important;
        border: none !important;
        color: white; /* text color when not hovered or clicked */
        transition: background-color 0.3s; /* smooth transition on hover */

        /* Optional: Add other styles for padding, border-radius, etc. as needed */
    }

    .btn-primary:hover {
        background-color: orange !important; /* color on hover */
    }

    .btn-primary:active,
    .btn-primary:focus {
        background-color: orangered !important; /* color when clicked or focused */
    }

    .navbar-vertical .navbar-nav.nav-tabs .active .nav-link, .navbar-vertical .navbar-nav.nav-tabs .active.nav-link {
          border-left-color: orange !important;
    }

    .navbar-vertical .nav-link {
        color: #ffffff;
        font-weight: bold;
    }
  
    .navbar .nav-link:hover {
        color: #C6FFC1;
    }

    .navbar .active > .nav-link, .navbar .nav-link.active, .navbar .nav-link.show, .navbar .show > .nav-link {
        color: #C6FFC1;
    }

    .navbar-vertical .active .nav-indicator-icon, .navbar-vertical .nav-link:hover .nav-indicator-icon, .navbar-vertical .show > .nav-link > .nav-indicator-icon {
        color: #C6FFC1;
    }

    .nav-subtitle {
        display: block;
        color: #fffbdf91;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: .03125rem;
    }

    .side-logo {
        background-color: #F7F8FA;
    }

    .nav-sub {
        background-color: #182c2f !important;
    }

    .nav-indicator-icon {
        margin-left: {{Session::get('direction') === "rtl" ? '6px' : ''}};
    }
</style>

<div id="sidebarMain" class="">
    <aside style="background: black!important; text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};"
           class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered  ">
        <div class="navbar-vertical-container">
            <div class="navbar-vertical-footer-offset pb-0">
                <div class="navbar-brand-wrapper justify-content-between side-logo">
                    <!-- Logo -->
                    @php($e_commerce_logo=\App\Model\BusinessSetting::where(['type'=>'company_web_logo'])->first()->value)
                    <a class="navbar-brand" href="{{route('admin.dashboard.index')}}" aria-label="Front">
                        <img style="max-height: 80px;"
                             onerror="this.src='{{asset('public/assets/back-end/img/900x400/img1.jpg')}}'"
                             class="navbar-brand-logo-mini for-web-logo"
                             src="{{asset("storage/app/public/company/$e_commerce_logo")}}" alt="Logo">
                    </a>
                    <!-- Navbar Vertical Toggle -->
                    <button type="button"
                            class="js-navbar-vertical-aside-toggle-invoker navbar-vertical-aside-toggle btn btn-icon btn-xs btn-ghost-dark">
                        <i class="tio-clear tio-lg"></i>
                    </button>
                    <!-- End Navbar Vertical Toggle -->
                </div>

                <!-- Content -->
                <div class="navbar-vertical-content mt-2">
                    <ul class="navbar-nav navbar-nav-lg nav-tabs">
                        <!-- Dashboards -->

                        <li class="navbar-vertical-aside-has-menu {{Request::is('admin')?'show':''}}">
                            <a class="js-navbar-vertical-aside-menu-link nav-link"
                               href="{{route('admin.dashboard.index')}}">
                                <i class="tio-home-vs-1-outlined nav-icon"></i>
                                <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                                    {{\App\CPU\translate('Dashboard')}}
                                </span>
                            </a>
                        </li>

                        <!-- End Dashboards -->

                       
                  
                    <!--reporting and analysis ends here-->
                    @if(\App\CPU\Helpers::module_permission_check('employee_section'))
                            <li class="nav-item {{(Request::is('admin/employee*') || Request::is('admin/custom-role*'))?'scroll-here':''}}">
                                <small class="nav-subtitle">{{\App\CPU\translate('Roles & Permissions')}}</small>
                                <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                            </li>
                            <li class="navbar-vertical-aside-has-menu {{Request::is('admin/custom-role*')?'active':''}}">
                                <a class="js-navbar-vertical-aside-menu-link nav-link"
                                   href="{{route('admin.custom-role.create')}}">
                                    <i class="tio-incognito nav-icon"></i>
                                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                                            {{\App\CPU\translate('employee_role')}}</span>
                                </a>
                            </li>
                        @endif
                        @if(\App\CPU\Helpers::module_permission_check('employee_section'))
                            <li class="nav-item {{(Request::is('admin/employee*') || Request::is('admin/custom-role*'))?'scroll-here':''}}">
                                <small class="nav-subtitle">{{\App\CPU\translate('employee_section')}}</small>
                                <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                            </li>
                            <li class="navbar-vertical-aside-has-menu {{Request::is('admin/employee*')?'active':''}}">
                                <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle"
                                   href="javascript:">
                                    <i class="tio-user nav-icon"></i>
                                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                                            {{\App\CPU\translate('employees')}}
                                        </span>
                                </a>
                                <ul class="js-navbar-vertical-aside-submenu nav nav-sub"
                                    style="display: {{Request::is('admin/employee*')?'block':'none'}}">
                                    <li class="nav-item {{Request::is('admin/employee/add-new')?'active':''}}">
                                        <a class="nav-link " href="{{route('admin.employee.add-new')}}">
                                            <span class="tio-circle nav-indicator-icon"></span>
                                            <span class="text-truncate">{{\App\CPU\translate('add_new')}}</span>
                                        </a>
                                    </li>
                                    <li class="nav-item {{Request::is('admin/employee/list')?'active':''}}">
                                        <a class="nav-link" href="{{route('admin.employee.list')}}">
                                            <span class="tio-circle nav-indicator-icon"></span>
                                            <span class="text-truncate">{{\App\CPU\translate('List')}}</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif

                        <!--li class="nav-item" style="padding-top: 50px">
                            <div class="nav-divider"></div>
                        </li-->
                    </ul>
                </div>
                <!-- End Content -->
            </div>
        </div>
    </aside>
</div>



