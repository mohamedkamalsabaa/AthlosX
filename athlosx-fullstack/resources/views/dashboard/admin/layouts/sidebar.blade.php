<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
        <!-- nav bar -->
        <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="{{ route('home') }}">
                <img src="{{ asset('public/admin/assets/images/logo1.png') }}" alt="" width="110px"
                    id="sidebar_logo" />
            </a>
        </div>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a class="nav-link {{ request()->is('admin/dashboard/home') ? 'active' : '' }}"
                    href="{{ route('admin.home') }}">
                    <i class="fe fe-home fe-16"></i>
                    <span class="ml-3 item-text">لوحة التحكم</span>
                </a>
            </li>
            
            
            
            {{-- <li class="nav-item dropdown">
                <a class="nav-link {{ request()->is('admin/dashboard/subscriptions*') ? 'active' : '' }}"
                    href="{{ route('admin.subscriptions.index') }}">
                    <i class="fe fe-repeat fe-16"></i>
                    <span class="ml-3 item-text">الإشتراكات</span>
                </a>
            </li> --}}
            {{-- <li class="nav-item dropdown">
                <a class="nav-link {{ request()->is('admin/dashboard/users*') ? 'active' : '' }}"
                    href="{{ route('admin.users.index') }}">
                    <i class="fe fe-user fe-16"></i>
                    <span class="ml-3 item-text">العملاء</span>
                </a>
            </li> --}}
            

            {{-- <li class="nav-item dropdown">
                <a class="nav-link {{ request()->is('admin/dashboard/admin*') ? 'active' : '' }}"
                    href="{{ route('admin.admin.index') }}">
                    <i class="fe fe-users fe-16"></i>
                    <span class="ml-3 item-text">الفريق</span>
                </a>
            </li> --}}
        </ul>
    </nav>
</aside>
