<nav class="navbar navbar-expand-lg main-navbar" height="auto">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>

        </ul>
    </form>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown"><a href="#" data-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="{{ asset('img/avatar/avatar-1.png') }}" class="rounded-circle mr-1">
                <div class="d-sm-none d-lg-inline-block">Hi,
                    {{ request()->route()->getName() === 'member.dashboard'? auth('member')->user()->name: auth('web')->user()->name }}
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-title">
                    {{ request()->route()->getName() === 'member.dashboard'? auth('member')->user()->name: auth('web')->user()->name }}
                </div>
                @if (request()->route()->getName() === 'member.dashboard')
                    <button class="dropdown-item has-icon" data-toggle="modal" data-target="#exampleModal">
                        <i class="far fa-user"></i> Ganti Password
                    </button>
                @endif
                <div class="dropdown-divider"></div>
                <a href="{{ route(request()->route()->getName() === 'member.dashboard'? 'member.logout': 'logout') }}"
                    class="dropdown-item has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </div>
        </li>
    </ul>
</nav>
