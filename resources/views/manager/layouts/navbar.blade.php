  <!-- BEGIN: Header-->
  <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav">
                        <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs " href="#"><i class="ficon feather icon-menu text-white"></i></a></li>
                    </ul>
                </div>
                <ul class="nav navbar-nav float-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white">
                        <span class="flag-icon flag-icon-{{Config::get('languages')[App::getLocale()]['flag-icon']}}"></span> {{ Config::get('languages')[App::getLocale()]['display'] }} <i class="fa fa-caret-down"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        @foreach (Config::get('languages') as $lang => $language)
                            @if ($lang != App::getLocale())
                                <a class="dropdown-item" href="{{route('lang.switch',$lang)}}"><span class="flag-icon flag-icon-{{$language['flag-icon']}}"></span> {{$language['display']}}</a>
                            @endif
                        @endforeach
                        </div>
                    </li>
                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                        <div class="user-nav d-sm-flex d-none">
                            <span class="user-name text-bold-600 text-white">{{Auth::user()->name}}</span>
                            <span class="user-status">
                                </span>
                            </div>
                            <span>
                                @isset(Auth::user()->image)
                                <img class="round" src="{{asset('profile-images')}}/{{Auth::user()->image}}" alt="avatar" height="40" width="40">
                                @else
                                <img class="round" src="{{asset('assets/app-assets/images/portrait/small/avatar-s-12.jpg')}}" alt="avatar" height="40" width="40">
                                @endisset
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="{{ url('customer-setting') }}"><i class="feather icon-user"></i> Edit Profile</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="{{route('logout')}}"><i class="feather icon-power"></i> Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- END: Header-->

