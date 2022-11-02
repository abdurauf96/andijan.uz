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
                    <li><a class="nav-link" href="{{ route('admin.arenas.index') }}">Sport obyektlari</a></li>
                    <li><a class="nav-link" href="{{ route('admin.fields.index') }}">Ustuvor tarmoqlar</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="briefcase"></i><span>Kengash</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.councils.index') }}">Kengashlar</a> </li>
                    <li><a class="nav-link" href="{{ route('admin.members.index') }}">Kengash a'zolari</a> </li>
                </ul>
            </li>
            <li class="dropdown ">
                <a href="{{ route('admin.governors.index') }}" class="nav-link"><i data-feather="monitor"></i><span>Xokimlar</span></a>
            </li>
            <li class="dropdown ">
                <a href="{{ route('admin.speeches.index') }}" class="nav-link"><i data-feather="monitor"></i><span>Xokim maruzalari</span></a>
            </li>
            <li class="dropdown ">
                <a href="{{ route('admin.andijan.index') }}" class="nav-link"><i data-feather="monitor"></i><span>Rahbariyat</span></a>
            </li>
            <li class="dropdown ">
                <a href="{{ route('admin.contacts.index') }}" class="nav-link"><i data-feather="monitor"></i><span>Manzil</span></a>
            </li>
            <li class="dropdown ">
                <a href="{{ route('admin.documents.index') }}" class="nav-link"><i data-feather="monitor"></i><span>Qonunchilik xujjatlari</span></a>
            </li>
            <li class="dropdown ">
                <a href="{{ route('admin.decisions.index') }}" class="nav-link"><i data-feather="monitor"></i><span>Xokimlik qarorlari</span></a>
            </li>
            <li class="dropdown ">
                <a href="{{ route('admin.partners.index') }}" class="nav-link"><i data-feather="monitor"></i><span>Hamkorliklar</span></a>
            </li>
            <li class="dropdown ">
                <a href="{{ route('admin.organizations.index') }}" class="nav-link"><i data-feather="monitor"></i><span>Tashkilotlar</span></a>
            </li>
            <li class="dropdown ">
                <a href="{{ route('admin.press-pages.index') }}" class="nav-link"><i data-feather="monitor"></i><span>Matbuot xizmati</span></a>
            </li>
            <li class="dropdown ">
                <a href="{{ route('admin.local-pages.index') }}" class="nav-link"><i data-feather="monitor"></i><span>Mahalliy davlat hokimyati</span></a>
            </li>
            <li class="dropdown ">
                <a href="{{ route('admin.old-documents.index') }}" class="nav-link"><i data-feather="monitor"></i><span>Kuchini yo'qotgan xujjatlar</span></a>
            </li>
            <li class="dropdown ">
                <a href="{{ route('admin.programs.index') }}" class="nav-link"><i data-feather="monitor"></i><span>Davlat dasturlari</span></a>
            </li>
            <li class="dropdown ">
                <a href="{{ route('admin.rekvizits.index') }}" class="nav-link"><i data-feather="monitor"></i><span>Davlat rekvizitlari</span></a>
            </li>
            <li class="dropdown ">
                <a href="{{ route('admin.generator') }}" class="nav-link"><i data-feather="monitor"></i><span>Generator</span></a>
            </li>
        </ul>
    </aside>
</div>
