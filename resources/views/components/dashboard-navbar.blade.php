<nav
    class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
    id="layout-navbar"
>
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="bx bx-menu bx-sm"></i>
        </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        <ul class="navbar-nav flex-row align-items-center">
            <li class="menu-item {{request()->routeIs('dashboard') || request()->routeIs('profil.*') ? 'text-primary' : 'text-dark'}}">
                <a href="{{route('dashboard')}}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div data-i18n="Analytics">Dashboard</div>
                </a>
            </li>
        </ul>


        <ul class="navbar-nav flex-row align-items-center ms-auto">
            <li class="menu-item me-5">
                {{date('D, d M Y')}}
            </li>
            <li class="menu-item me-5">
                <div id="clock" onload="showTime()"></div>
            </li>
            <!-- User -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar">
                        <img src="{{asset(auth()->user()->image ?? '/img/admin.jpeg')}}"
                             alt="{{auth()->user()->nama_indo}}"
                             class="w-px-40 h-auto rounded-circle"/>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="#">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar">
                                        <img src="{{asset(auth()->user()->image ?? '/img/admin.jpeg')}}"
                                             alt="{{auth()->user()->nama_indo}}"
                                             class="w-px-40 h-auto rounded-circle"/>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="fw-semibold d-block">{{auth()->user()->nama_indo}}</span>
                                    <small class="text-muted">Admin</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{route('profil.index')}}">
                            <i class="bx bx-user me-2"></i>
                            <span class="align-middle">Profil Saya</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{route('logout')}}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
                            <i class="bx bx-power-off me-2"></i>
                            <span class="align-middle">Log Out</span>
                        </a>
                        <form action="{{route('logout')}}" class="d-none" id="logout-form" method="post">@csrf</form>
                    </li>
                </ul>
            </li>
            <!--/ User -->
        </ul>
    </div>
</nav>

@push('scripts')
    <script>
        function showTime() {
            let date = new Date();
            let h = date.getHours(); // 0 - 23
            let m = date.getMinutes(); // 0 - 59
            let s = date.getSeconds(); // 0 - 59
            let session = "AM";

            if (h === 0) {
                h = 12;
            }

            if (h > 12) {
                h = h - 12;
                session = "PM";
            }

            h = (h < 10) ? "0" + h : h;
            m = (m < 10) ? "0" + m : m;
            s = (s < 10) ? "0" + s : s;

            var time = h + ":" + m + ":" + s + " " + session;
            document.getElementById("clock").innerText = time;
            document.getElementById("clock").textContent = time;

            setTimeout(showTime, 1000);
        }

        showTime();
    </script>
@endpush
