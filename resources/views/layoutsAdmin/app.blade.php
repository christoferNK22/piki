<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title', 'Dashboard') - PIKI</title>
    @include('layoutsAdmin.partials.css')
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            @include('layoutsAdmin.partials.navbar')
            @include('layoutsAdmin.partials.sidebar')

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>@yield('title', 'Dashboard')</h1>
                    </div>

                    <div class="section-body">
                        @yield('content')
                        {{ $slot }}
                    </div>
                </section>
            </div>
            @include('layoutsAdmin.partials.footer')
        </div>
    </div>

    @include('layoutsAdmin.partials.scripts')
</body>

</html>
