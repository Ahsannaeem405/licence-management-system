    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow shadow-none" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto">
                    <a class="navbar-brand" href="#">
                        {{-- <div class="brand-logo"></div> --}}
                        <img src="{{ asset('assets/app-assets/images/logo/Layer.png') }}" alt="Girl in a jacket"
                            width="40" height="40">
                        {{-- <h2 class="brand-text mb-0" style="color: #000677;">GesCle</h2> --}}
                    </a>
                </li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                {{-- <li class=" nav-item"><a href="{{ route('superadmin-dashbaord') }}"><i
                            class="feather icon-home"></i><span class="menu-title"
                            data-i18n="Dashboard">Dashboard</span><span
                            class="badge badge badge-warning badge-pill float-right mr-2"></span></a>

                </li> --}}
            
                <li class=" nav-item"><a href="{{ route('superadmin-dashbaord') }}"><i
                            class="feather icon-home"></i><span class="menu-title"
                            data-i18n="Dashboard">{{__('messages.dashbaord')}}</span><span
                            class="badge badge badge-warning badge-pill float-right mr-2"></span></a>

                </li>
                <li class=" nav-item"><a href="{{ route('superadmin-subcription') }}"><i
                            class="ficon feather icon-bell"></i><span class="menu-title"
                            data-i18n="Email">{{__('messages.subscription')}}</span></a>
                </li>
                {{-- <li class=" nav-item"><a href="{{ route('superadmin-customers') }}"><i
                            class="feather icon-user"></i><span class="menu-title" data-i18n="Chat">Customers</span></a>
                </li> --}}
                <li class=" nav-item"><a href="{{ route('superadmin-package') }}"><i
                            class="feather icon-package"></i><span class="menu-title"
                            data-i18n="Email">{{__('messages.packages')}}</span></a>
                </li>
                <li class=" nav-item"><a href="{{ route('superadmin-transaction') }}"><i class="fa fa-dollar"></i><span
                            class="menu-title" data-i18n="Email">{{__('messages.transaction')}}</span></a>
                </li>
                {{-- <hr width="90%" style="background-color: #7367F0;"> --}}
        <li class=" navigation-header"><span>Customers</span>
      
                <li class=" nav-item"><a href="{{ route('superadmin-customers') }}"><i
                class="feather icon-user"></i><span class="menu-title" data-i18n="Chat">{{__('messages.customer')}}</span></a>
                </li>
                <li class=" nav-item"><a href="{{ route('superadmin-license') }}"><i
                    class="fa fa-drivers-license-o"></i><span class="menu-title"
                    data-i18n="Email">{{__('messages.license')}}</span></a>
        </li>
        <li class=" nav-item"><a href="{{ route('superadmin-service') }}"><i class="fa fa-wrench"></i><span
            class="menu-title" data-i18n="Email">{{__('messages.service')}}</span></a>
            </li>
            {{-- <hr width="90%" style="background-color: #7367F0;"> --}}
        <li class=" navigation-header"><span>Account Settings</span>
      
                <li class=" nav-item"><a href="{{ route('superadmin-multi-lang') }}"><i
                class="feather icon-globe"></i><span class="menu-title" data-i18n="Email">{{__('messages.multi lang')}}</span></a>
                </li>

                <li class=" nav-item"><a href="{{ route('superadmin-analytics') }}"> <i
                class="feather icon-list"></i><span class="menu-title"
                data-i18n="Account Settings">{{__('messages.analytics')}}</span></a>
                </li>

                <li class=" nav-item"><a href="{{ route('superadmin-setting') }}"><i
                            class="feather icon-settings"></i><span class="menu-title"
                            data-i18n="Account Settings">{{__('messages.account setting')}}</span></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->
