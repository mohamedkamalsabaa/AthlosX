<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
        <!-- nav bar -->
        <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="{{ route('home') }}">
                <img src="{{ asset('public/user/assets/images/logo1.png') }}" alt="" width="110px" id="sidebar_logo" style="width:110px"/>
            </a>
        </div>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a class="nav-link {{ request()->is('user/dashboard/home') ? 'active' : '' }}"
                    href="{{ route('user.home') }}">
                    <i class="fe fe-home fe-16"></i>
                    <span class="ml-3 item-text">لوحة التحكم</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link {{ request()->is('user/dashboard/clubs*') ? 'active' : '' }}"
                    href="{{ route('user.clubs.index') }}">
                    <i class="fe fe-shield fe-16"></i>
                    <span class="ml-3 item-text">الأندية</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link {{ request()->is('user/dashboard/teams*') ? 'active' : '' }}"
                    href="{{ route('user.teams.index') }}">
                    <i class="fe fe-users fe-16"></i>
                    <span class="ml-3 item-text">الفرق</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link {{ request()->is('user/dashboard/players*') ? 'active' : '' }}"
                    href="{{ route('user.players.index') }}">
                    <i class="fe fe-user fe-16"></i>
                    <span class="ml-3 item-text">اللاعبين</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link {{ request()->is('user/dashboard/matches*') ? 'active' : '' }}"
                    href="{{ route('user.matches.index') }}">
                    <i class="fe fe-calendar fe-16"></i>
                    <span class="ml-3 item-text">المباريات</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link {{ request()->is('user/dashboard/tournaments*') ? 'active' : '' }}"
                    href="{{ route('user.tournaments.index') }}">
                    <i class="fe fe-award fe-16"></i>
                    <span class="ml-3 item-text">البطولات</span>
                </a>
            </li>
            {{-- <li class="nav-item dropdown">
                <a class="nav-link {{ request()->is('user/dashboard/statistics*') ? 'active' : '' }}"
                    href="{{ route('user.statistics.index') }}">
                    <i class="fe fe-bar-chart-2 fe-16"></i>
                    <span class="ml-3 item-text">الإحصائيات</span>
                </a>
            </li> --}}
        </ul>
    </nav>
</aside>