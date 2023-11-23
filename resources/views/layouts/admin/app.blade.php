<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title', $title ?? 'Dashboard') - PIKI</title>
    @include('layouts.admin.partials.css')
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            @include('layouts.admin.partials.navbar')
            @include('layouts.admin.partials.sidebar')

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>@yield('title', $title ?? 'Dashboard')</h1>
                    </div>

                    <div class="section-body">
                        @include('layouts.admin.partials.scripts')
                        @yield('content')
                        {{ $slot }}
                    </div>
                </section>
            </div>
            @if (request()->route()->getName() === 'member.dashboard')
                <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Ganti Password</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ route('member.gantiPassword') }}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="password" class="d-block">Password Lama</label>
                                        <input id="password" type="password" class="form-control pwstrength"
                                            data-indicator="pwindicator" name="old_password">
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="password" class="d-block">Password Baru</label>
                                            <input id="password" name="password" type="password"
                                                class="form-control pwstrength" data-indicator="pwindicator">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="password2" class="d-block">Konformasi Password Baru</label>
                                            <input id="password2" type="password" class="form-control"
                                                name="password_confirmation">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer bg-whitesmoke br">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            @endif

            @include('layouts.admin.partials.footer')
        </div>
    </div>
    <script src="{{ asset('js/page/modules-datatables.js') }}"></script>
</body>

</html>
