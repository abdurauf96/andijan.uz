<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin.dashboard') }}"> <img alt="image" src="/admin/assets/img/logo.png" class="header-logo" /> <span
                    class="logo-name">Project Name</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown ">
                <a href="{{ route('admin.dashboard') }}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>

            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="briefcase"></i><span>Bosh sahifa</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.posts.index') }}">Yangiliklar</a> </li>
                    <li><a class="nav-link" href="{{ route('admin.info-categories.index') }}">Kategoriyalar</a></li>
                    <li><a class="nav-link" href="{{ route('admin.projects.index') }}">Loyihalar</a></li>
                    <li><a class="nav-link" href="{{ route('admin.links.index') }}">Foydali saytlar</a></li>
                    <li><a class="nav-link" href="{{ route('admin.services.index') }}">Xizmatlar</a></li>
                    <li><a class="nav-link" href="{{ route('admin.districts.index') }}">Tumanlar</a></li>
                </ul>
            </li>

            <li class="dropdown ">
                <a href="{{ route('admin.generator') }}" class="nav-link"><i data-feather="monitor"></i><span>Generator</span></a>
            </li>
        </ul>
    </aside>
</div>
