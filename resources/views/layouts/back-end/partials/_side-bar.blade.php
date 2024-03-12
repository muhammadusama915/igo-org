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
    .select2-selection--single{
        height:40px !important;
    }
    .select2-selection__rendered{
        padding-top:6px !important;
    }
    .select2-selection__arrow{
        padding-top:41px !important;
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
                        <!--csr_forms-->
                        @if(\App\CPU\Helpers::module_permission_check('csr_forms'))
                            <li class="nav-item {{(Request::is('admin/lead*')) ?'scroll-here':''}}">
                                <small class="nav-subtitle">{{\App\CPU\translate('CSR FORMS')}}</small>
                                <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                            </li>
                            <li class="navbar-vertical-aside-has-menu {{Request::is('admin/lead*')?'active':''}}">
                                <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle"
                                   href="javascript:">
                                    <i class="tio-file nav-icon"></i>
                                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                                            {{\App\CPU\translate('CSR Forms')}}
                                        </span>
                                </a>
                                <ul class="js-navbar-vertical-aside-submenu nav nav-sub"
                                    style="display: {{Request::is('admin/lead*')?'block':'none'}}">
                                    <li class="nav-item {{Request::is('admin/lead/create')?'active':''}}">
                                        <a class="nav-link " href="{{route('admin.lead.create')}}">
                                            <span class="tio-circle nav-indicator-icon"></span>
                                            <span class="text-truncate">{{\App\CPU\translate('add_new')}}</span>
                                        </a>
                                    </li>
                                    <li class="nav-item {{Request::is('admin/lead/index')?'active':''}}">
                                        <a class="nav-link" href="{{route('admin.lead.index')}}">
                                            <span class="tio-circle nav-indicator-icon"></span>
                                            <span class="text-truncate">{{\App\CPU\translate('List')}}</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                         <!-- End CSR -->
                        <!--Eligibility Criteria-->
                        @if(\App\CPU\Helpers::module_permission_check('eligibility_criteria'))
                            <li class="nav-item {{(Request::is('admin/eligibility*')) ?'scroll-here':''}}">
                                <small class="nav-subtitle">{{\App\CPU\translate('Eligibility Criteria')}}</small>
                                <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                            </li>
                            <li class="navbar-vertical-aside-has-menu {{Request::is('admin/eligibility*')?'active':''}}">
                                <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle"
                                   href="javascript:">
                                    <i class="tio-file nav-icon"></i>
                                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                                            {{\App\CPU\translate('Eligibility Criteria')}}
                                        </span>
                                </a>
                                <ul class="js-navbar-vertical-aside-submenu nav nav-sub"
                                    style="display: {{Request::is('admin/eligibility*')?'block':'none'}}">
                                    <li class="nav-item {{Request::is('admin/eligibility/index')?'active':''}}">
                                        <a class="nav-link" href="{{route('admin.eligibility.index')}}">
                                            <span class="tio-circle nav-indicator-icon"></span>
                                            <span class="text-truncate">{{\App\CPU\translate('List')}}</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                        @if(\App\CPU\Helpers::module_permission_check('qa_1'))
                            <li class="nav-item {{(Request::is('admin/qa1*')) ?'scroll-here':''}}">
                                <small class="nav-subtitle">{{\App\CPU\translate('Quality Assurance 1')}}</small>
                                <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                            </li>
                            <li class="navbar-vertical-aside-has-menu {{Request::is('admin/qa1*')?'active':''}}">
                                <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle"
                                   href="javascript:">
                                    <i class="tio-file nav-icon"></i>
                                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                                            {{\App\CPU\translate('QA 1')}}
                                        </span>
                                </a>
                                <ul class="js-navbar-vertical-aside-submenu nav nav-sub"
                                    style="display: {{Request::is('admin/qa1*')?'block':'none'}}">
                                    <li class="nav-item {{Request::is('admin/qa1/index')?'active':''}}">
                                        <a class="nav-link" href="{{route('admin.qa1.index')}}">
                                            <span class="tio-circle nav-indicator-icon"></span>
                                            <span class="text-truncate">{{\App\CPU\translate('List')}}</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                        @if(\App\CPU\Helpers::module_permission_check('qa_2'))
                            <li class="nav-item {{(Request::is('admin/qa2*')) ?'scroll-here':''}}">
                                <small class="nav-subtitle">{{\App\CPU\translate('Quality Assurance 2')}}</small>
                                <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                            </li>
                            <li class="navbar-vertical-aside-has-menu {{Request::is('admin/qa2*')?'active':''}}">
                                <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle"
                                   href="javascript:">
                                    <i class="tio-file nav-icon"></i>
                                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                                            {{\App\CPU\translate('QA 2')}}
                                        </span>
                                </a>
                                <ul class="js-navbar-vertical-aside-submenu nav nav-sub"
                                    style="display: {{Request::is('admin/qa2*')?'block':'none'}}">
                                    <li class="nav-item {{Request::is('admin/qa2/index')?'active':''}}">
                                        <a class="nav-link" href="{{route('admin.qa2.index')}}">
                                            <span class="tio-circle nav-indicator-icon"></span>
                                            <span class="text-truncate">{{\App\CPU\translate('List')}}</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif

                        @if(\App\CPU\Helpers::module_permission_check('form_filling'))
                            <li class="nav-item {{(Request::is('admin/form_filling*')) ?'scroll-here':''}}">
                                <small class="nav-subtitle">{{\App\CPU\translate('Form Filling')}}</small>
                                <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                            </li>
                            <li class="navbar-vertical-aside-has-menu {{Request::is('admin/form_filling*')?'active':''}}">
                                <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle"
                                   href="javascript:">
                                    <i class="tio-file nav-icon"></i>
                                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                                            {{\App\CPU\translate('Form Filling')}}
                                        </span>
                                </a>
                                <ul class="js-navbar-vertical-aside-submenu nav nav-sub"
                                    style="display: {{Request::is('admin/form_filling*')?'block':'none'}}">
                                    <li class="nav-item {{Request::is('admin/form_filling/index')?'active':''}}">
                                        <a class="nav-link" href="{{route('admin.form_filling.index')}}">
                                            <span class="tio-circle nav-indicator-icon"></span>
                                            <span class="text-truncate">{{\App\CPU\translate('List')}}</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif

                        @if(\App\CPU\Helpers::module_permission_check('chaser'))
                            <li class="nav-item {{(Request::is('admin/chaser*')) ?'scroll-here':''}}">
                                <small class="nav-subtitle">{{\App\CPU\translate('Chaser')}}</small>
                                <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                            </li>
                            <li class="navbar-vertical-aside-has-menu {{Request::is('admin/chaser*')?'active':''}}">
                                <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle"
                                   href="javascript:">
                                    <i class="tio-file nav-icon"></i>
                                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                                            {{\App\CPU\translate('Chaser')}}
                                        </span>
                                </a>
                                <ul class="js-navbar-vertical-aside-submenu nav nav-sub"
                                    style="display: {{Request::is('admin/chaser*')?'block':'none'}}">
                                    <li class="nav-item {{Request::is('admin/chaser/index')?'active':''}}">
                                        <a class="nav-link" href="{{route('admin.chaser.index')}}">
                                            <span class="tio-circle nav-indicator-icon"></span>
                                            <span class="text-truncate">{{\App\CPU\translate('List')}}</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif

                        @if(\App\CPU\Helpers::module_permission_check('confirmation'))
                            <li class="nav-item {{(Request::is('admin/confirmation*')) ?'scroll-here':''}}">
                                <small class="nav-subtitle">{{\App\CPU\translate('Confirmation')}}</small>
                                <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                            </li>
                            <li class="navbar-vertical-aside-has-menu {{Request::is('admin/chaser*')?'active':''}}">
                                <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle"
                                   href="javascript:">
                                    <i class="tio-file nav-icon"></i>
                                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                                            {{\App\CPU\translate('Confirmation')}}
                                        </span>
                                </a>
                                <ul class="js-navbar-vertical-aside-submenu nav nav-sub"
                                    style="display: {{Request::is('admin/confirmation*')?'block':'none'}}">
                                    <li class="nav-item {{Request::is('admin/confirmation/index')?'active':''}}">
                                        <a class="nav-link" href="{{route('admin.confirmation.index')}}">
                                            <span class="tio-circle nav-indicator-icon"></span>
                                            <span class="text-truncate">{{\App\CPU\translate('List')}}</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                     
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



