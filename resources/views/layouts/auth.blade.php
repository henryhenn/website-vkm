<!DOCTYPE html>

<html
    lang="en"
    class="light-style customizer-hide"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="{{asset('sneat/assets/')}}"
    data-template="vertical-menu-template-free"
>
<head>
    <meta charset="utf-8"/>
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>{{$title}} - VKM</title>

    <meta name="description" content="Website VKM"/>

    <link rel="icon" type="image/x-icon" href=""/>

    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;500;600;700&family=Noto+Serif+SC:wght@400;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{asset('sneat/assets/vendor/fonts/boxicons.css')}}"/>

    <link rel="stylesheet" href="{{asset('sneat/assets/vendor/css/core.css')}}" class="template-customizer-core-css"/>
    <link rel="stylesheet" href="{{asset('sneat/assets/vendor/css/theme-default.css')}}"
          class="template-customizer-theme-css"/>

    <link rel="stylesheet" href="{{asset('sneat/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}"/>

    <link rel="stylesheet" href="{{asset('sneat/assets/vendor/css/pages/page-auth.css')}}"/>
    <script src="{{asset('sneat/assets/vendor/js/helpers.js')}}"></script>

    <script src="{{asset('sneat/assets/js/config.js')}}"></script>

    <style>
        body {
            font-family: "Inter Tight", sans-serif;
        }

        .text-mandarin {
            font-family: 'Noto Serif SC', serif;
        }
    </style>
</head>

<body>

<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
            @yield('content')
        </div>
    </div>
</div>

<script>
    document.addEventListener("contextmenu", (event) => {
        event.preventDefault();
    });
</script>

<script src="{{asset('sneat/assets/vendor/libs/jquery/jquery.js')}}"></script>
<script src="{{asset('sneat/assets/vendor/libs/popper/popper.js')}}"></script>
<script src="{{asset('sneat/assets/vendor/js/bootstrap.js')}}"></script>
<script src="{{asset('sneat/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

<script src="{{asset('sneat/assets/vendor/js/menu.js')}}"></script>
<script src="{{asset('sneat/assets/js/main.js')}}"></script>

<script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>
