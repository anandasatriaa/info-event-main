<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="{{ request()->is('backsite/dashboard') || request()->is('backsite/dashboard/*') ? 'active' : '' }}">
                <a href="{{ route('backsite.dashboard.index') }}">
                    <i class="{{ request()->is('backsite/dashboard') || request()->is('backsite/dashboard/*') ? 'bx bx-category-alt bx-flashing' : 'bx bx-category-alt' }}" ></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span>
                </a>
            </li>

            <li class=" navigation-header"><span data-i18n="Application">Application</span><i class="la la-ellipsis-h" data-toggle="tooltip" data-placement="right" data-original-title="Application"></i>
            </li>

            {{-- @can('management_access') --}}
                <li class=" nav-item"><a href="#"><i class="{{ request()->is('backsite/permission') || request()->is('backsite/permission/*') || request()->is('backsite/*/permission') || request()->is('backsite/*/permission/*') || request()->is('backsite/role') || request()->is('backsite/role/*') || request()->is('backsite/*/role') || request()->is('backsite/*/role/*') || request()->is('backsite/user') || request()->is('backsite/user/*') || request()->is('backsite/*/user') || request()->is('backsite/*/user/*') || request()->is('backsite/type_user') || request()->is('backsite/type_user/*') || request()->is('backsite/*/type_user') || request()->is('backsite/*/type_user/*') ? 'bx bx-group bx-flashing' : 'bx bx-group' }}"></i><span class="menu-title" data-i18n="Management Access">Management Access</span></a>
                    <ul class="menu-content">
                        {{-- @can('permission_access') --}}
                            <li class="{{ request()->is('backsite/permission') || request()->is('backsite/permission/*') || request()->is('backsite/*/permission') || request()->is('backsite/*/permission/*') ? 'active' : '' }} ">
                                <a class="menu-item" href="{{ route('backsite.permission.index') }}">
                                    <i></i><span>Permission</span>
                                </a>
                            </li>
                        {{-- @endcan --}}
                        {{-- @can('role_access') --}}
                            <li class="{{ request()->is('backsite/role') || request()->is('backsite/role/*') || request()->is('backsite/*/role') || request()->is('backsite/*/role/*') ? 'active' : '' }} ">
                                <a class="menu-item" href="{{ route('backsite.role.index') }}">
                                    <i></i><span>Role</span>
                                </a>
                            </li>
                        {{-- @endcan --}}
                        {{-- @can('type_user_access') --}}
                            <li class="{{ request()->is('backsite/type_user') || request()->is('backsite/type_user/*') || request()->is('backsite/*/type_user') || request()->is('backsite/*/type_user/*') ? 'active' : '' }} ">
                                <a class="menu-item" href="{{ route('backsite.type_user.index') }}">
                                    <i></i><span>Type User</span>
                                </a>
                            </li>
                        {{-- @endcan --}}
                        {{-- @can('user_access') --}}
                            <li class="{{ request()->is('backsite/user') || request()->is('backsite/user/*') || request()->is('backsite/*/user') || request()->is('backsite/*/user/*') ? 'active' : '' }} ">
                                <a class="menu-item" href="{{ route('backsite.user.index') }}">
                                    <i></i><span>User</span>
                                </a>
                            </li>
                        {{-- @endcan --}}
                    </ul>
                </li>
            {{-- @endcan --}}

            {{-- @can('master_data_access') --}}
                <li class=" nav-item"><a href="#"><i class="{{ request()->is('backsite/event') || request()->is('backsite/event/*') || request()->is('backsite/*/event') || request()->is('backsite/*/event/*') || request()->is('backsite/consultation') || request()->is('backsite/consultation/*') || request()->is('backsite/*/consultation') || request()->is('backsite/*/consultation/*') || request()->is('backsite/config_payment') || request()->is('backsite/config_payment/*') || request()->is('backsite/*/config_payment') || request()->is('backsite/*/config_payment/*') ? 'bx bx-customize bx-flashing' : 'bx bx-customize' }}"></i><span class="menu-title" data-i18n="Master Data">Master Data</span></a>
                    <ul class="menu-content">

                        {{-- @can('event_access') --}}
                            <li class="{{ request()->is('backsite/event') || request()->is('backsite/event/*') || request()->is('backsite/*/event') || request()->is('backsite/*/event/*') ? 'active' : '' }} ">
                                <a class="menu-item" href="{{ route('backsite.event.index') }}">
                                    <i></i><span>Event</span>
                                </a>
                            </li>
                        {{-- @endcan --}}
                        </ul>
                </li>
            {{-- @endcan --}}

           

        </ul>
    </div>
</div>

<!-- END: Main Menu-->
