        
        <ul class="main-menu">
            <li class="@yield('page_home_li_cls')">
                <a href="{{ route('home.index') }}"><i class="zmdi zmdi-home"></i> Home</a>
            </li>
            <li class="sub-menu @yield('page_master_li_cls')">
                <a href="" data-ma-action="submenu-toggle"><i class="zmdi zmdi-collection-item"></i> Master</a>
                <ul>
                    <li >
                        <a class="@yield('page_serviceengineer_li_cls')" href="{{ route('home.index') }}"><i class="zmdi zmdi-accounts"></i>&nbsp;&nbsp; Employee Details </a>
                    </li>
                    
                </ul>
            </li>
            
        </ul>

