    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto">
                    <a class="navbar-brand" href="#">
                        {{-- <div class="brand-logo"></div> --}}
                        {{-- <img src="{{asset('assets/app-assets/images/myimage/download.png')}}" alt="Girl in a jacket" width="200" height="200"> --}}
                        <h2 class="brand-text mb-0">LOGO</h2>
                    </a>
                </li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
             <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a href="{{route('manager-dashbaord')}}"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span><span class="badge badge badge-warning badge-pill float-right mr-2"></span></a>
                   
                </li>
               
                {{-- <li class=" nav-item"><a href="{{route('manager-company-info')}}"><i class="feather icon-mail"></i><span class="menu-title" data-i18n="Email">Company Information</span></a>
                </li> --}}
                <li class=" nav-item"><a href="{{route('manager-license')}}"><i class="feather icon-user"></i><span class="menu-title" data-i18n="Chat">License</span></a>
                </li>
               
                <li class=" nav-item"><a href="{{route('manager-setting')}}"><i class="feather icon-settings"></i><span class="menu-title" data-i18n="Account Settings">Account Settings</span></a>
                </li>
                
              
               
              
               
               
               
               
               
                
                
            </ul> 
        </div>
    </div>
    <!-- END: Main Menu-->
