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
                    <a href="{{ route('member.dashboard') }}" class="nav-link"><i class="fas fa-users"></i><span>Form
                            Member</span></a>
                </li>
            @else
                <li class="dropdown">
                    <a href="{{ route('dashboard') }}" class="nav-link"><i
                            class="fas fa-fire"></i><span>Dashboard</span></a>
                </li>
                <li class="dropdown">
                    <a class="nav-link" href="{{ route('master.member.index') }}"><i class="fas fa-users"></i>
                        <span>Member</span></a>
                </li>
                <li class="dropdown active">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Master Data</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="{{ route('master.church.index') }}"><i class="fas fa-church"></i>
                            <span>Gereja</span></a></li>
                        <li><a class="nav-link" href="{{ route('master.interest.index') }}"><i class="fas fa-briefcase"></i>
                            <span>Bidang Minat</span></a></li>
                        <li><a class="nav-link" href="{{ route('master.education.index') }}"><i class="fas fa-school"></i>
                            <span>Edukasi</span></a></li>
                    </ul>
                </li>
            @endif
        </ul>
    </aside>
</div>
