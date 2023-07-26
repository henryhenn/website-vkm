<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{route('dashboard')}}" class="app-brand-link">
            <img src="{{asset('img/admin.jpeg')}}" alt="Vihara Karuna Maitreya" width="50px">
            <span class="app-brand-text demo menu-text fw-bolder ms-2">VKM</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Menu untuk Admin -->
        @role('Admin')
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Admin</span>
        </li>
        <li class="menu-item {{request()->routeIs('anggota.*') ? 'active' : ''}}">
            <a href="{{route('anggota.index')}}" class="menu-link">
                <div data-i18n="Account">Daftar Anggota</div>
            </a>
        </li>
        @endrole

        {{-- Menu untuk User --}}
        @role('User')
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">User</span>
        </li>
        @endrole

        {{-- Menu untuk Member --}}
        @role('Member')
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Member</span>
        </li>
        @endrole

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Sekolah Minggu</span>
        </li>
    </ul>
</aside>
