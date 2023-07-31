@php use function App\Helpers\getMenus; $menus = getMenus(); @endphp
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{route('dashboard')}}" class="app-brand-link">
            <img src="{{asset('img/admin.jpeg')}}" alt="Vihara Karuna Maitreya" width="50px">
            <span class="app-brand-text demo menu-text fw-bolder ms-2">VKM</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>1
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        @foreach($menus as $menu)
            @if(count($menu->subMenus) > 0)
                <li class='menu-header small text-uppercase'>
                    <span class="menu-header-text">{{$menu->menu}}</span>
                </li>
            @endif
            @foreach($menu->subMenus as $sub)
                <li class="menu-item {{request()->url() == url($sub->url) ? 'active' : ''}}">
                    <a href="{{url($sub->url)}}" class="menu-link">
                        <div>{{$sub->sub_menu}}</div>
                    </a>
                </li>
            @endforeach
        @endforeach
    </ul>
</aside>
