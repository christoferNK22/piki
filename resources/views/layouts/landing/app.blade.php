<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Beranda')PIKI</title>
    @include('layouts.landing.partials.css')
</head>

<body>
    <div id="home">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <livewire:landing.layout.header />
            @include('layouts.landing.partials.navbar')

            <div class="main-content">
                {{ $slot }}
            </div>

            <livewire:landing.layout.footer />
        </div>
    </div>
    @include('layouts.landing.partials.scripts')
</body>

</html>
