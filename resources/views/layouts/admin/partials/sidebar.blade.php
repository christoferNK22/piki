<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="#"><img src="{{ asset('img/piki-logo-dark-e.png') }}" alt="logo" width="35"
                    class="img">
                <a href="index.html">PIKI</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">PIKI</a>
        </div>
        <ul class="sidebar-menu">
            @if (request()->route()->getName() === 'member.dashboard')
                <li class="menu-header">Form Member</li>
                <li class="dropdown">
                    <a href="{{ route('member.dashboard') }}" class="nav-link"><i class="fas fa-fire"></i><span>Form
                            Member</span></a>
                </li>
            @else
                <li class="menu-header">Dashboard</li>
                <li class="dropdown">
                    <a href="{{ route('dashboard') }}" class="nav-link"><i
                            class="fas fa-fire"></i><span>Dashboard</span></a>
                </li>
                <li class="menu-header">Master</li>
                <li class="dropdown">
                    <a class="nav-link" href="{{ route('master.church.index') }}"><i class="far fa-square"></i>
                        <span>Gereja</span></a>
                    <a class="nav-link" href="{{ route('master.interest.index') }}"><i class="far fa-square"></i>
                        <span>Bidang
                            Minat</span></a>
                    <a class="nav-link" href="{{ route('master.education.index') }}"><i class="far fa-square"></i>
                        <span>Edukasi</span></a>
                </li>

                <li class="menu-header">Main Page</li>
                <li class="dropdown">
                    <a class="nav-link" href="{{ route('master.member.index') }}"><i class="far fa-square"></i>
                        <span>Member</span></a>
                </li>
            @endif
        </ul>
    </aside>
</div>
