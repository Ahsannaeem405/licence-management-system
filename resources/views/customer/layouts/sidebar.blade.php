    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto">
                    <a class="navbar-brand" href="#">
                        {{-- <div class="brand-logo"></div> --}}
                        <img src="{{asset('assets/app-assets/images/logo/logo-white.png')}}" alt="Girl in a jacket" width="40" height="40">
                        <h2 class="brand-text mb-0" style="color: #fff;">GesCle</h2>
                    </a>
                </li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a href="{{ route('customer-dashboard') }}"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">{{__('messages.dashbaord')}}</span><span class="badge badge badge-warning badge-pill float-right mr-2"></span></a></li>
                <li class=" nav-item"><a href="{{ route('customer-subcription') }}"><i class=" fa fa-bell"></i><span class="menu-title" data-i18n="Email">{{__('messages.subscription')}}</span></a></li>
                <li class="navigation-header text-white "><span>Manage</span></li>
                <hr class="bg-white mx-2">
                <li class=" nav-item"><a href="{{ route('customer-department') }}"><i class="fa fa-building-o"></i><span class="menu-title" data-i18n="Chat">{{__('messages.department')}}</span></a></li>
                <li class=" nav-item"><a href="{{ route('customer-management') }}"><i class="fa fa-user"></i><span class="menu-title" data-i18n="Email">{{__('messages.management')}}</span></a></li>
                <li class=" nav-item"><a href="{{ route('customer-license') }}"><i class="fa fa-address-card"></i><span class="menu-title" data-i18n="Email">{{__('messages.license')}}</span></a></li>
                {{-- <li class=" nav-item"><a href="#"><i class="feather icon-user"></i><span class="menu-title" data-i18n="Chat">Analytics</span></a></li> --}}
                <li class=" nav-item"><a href="{{ route('customer-setting') }}"><i class="feather icon-settings"></i><span class="menu-title" data-i18n="Email">{{__('messages.account setting')}}</span></a></li>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->