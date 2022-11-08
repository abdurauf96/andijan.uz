<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin.dashboard') }}"> <img alt="image" src="/admin/assets/img/logo.png" class="header-logo" /> <span
                    class="logo-name">andijan.uz
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown ">
                <a href="{{ route('admin.dashboard') }}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard </span></a>
            </li>

            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="briefcase"></i><span>Bosh sahifa </span></a>
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
                        data-feather="briefcase"></i><span>Viloyat hokimligi</a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.councils.index') }}">Kengashlar</a> </li>
                    <li><a class="nav-link" href="{{ route('admin.members.index') }}">Kengash a'zolari</a> </li>
                    <li><a href="{{ route('admin.governors.index') }}" class="nav-link">Xokimlar</a>
                    </li>
                    <li><a href="{{ route('admin.speeches.index') }}" class="nav-link">Xokim maruzalari</a>
                    </li>
                    <li><a href="{{ route('admin.andijan.index') }}" class="nav-link">Rahbariyat</a>
                    </li>
                    <li><a href="{{ route('admin.contacts.index') }}" class="nav-link">Manzil</a>
                    </li>
                    <li><a href="{{ route('admin.documents.index') }}" class="nav-link">Qonunchilik xujjatlari</a>
                    </li>
                    <li><a href="{{ route('admin.decisions.index') }}" class="nav-link">Xokimlik qarorlari</a>
                    </li>
                    <li><a href="{{ route('admin.partners.index') }}" class="nav-link">Hamkorliklar</a>
                    </li>
                    <li><a href="{{ route('admin.organizations.index') }}" class="nav-link">Tashkilotlar</a>
                    </li>
                    <li><a href="{{ route('admin.press-pages.index') }}" class="nav-link">Matbuot xizmati</a>
                    </li>
                    <li><a href="{{ route('admin.local-pages.index') }}" class="nav-link">Mahalliy davlat hokimyati</a>
                    </li>
                    <li><a href="{{ route('admin.old-documents.index') }}" class="nav-link">Kuchini yo'qotgan xujjatlar</a>
                    </li>
                    <li><a href="{{ route('admin.programs.index') }}" class="nav-link">Davlat dasturlari</a>
                    </li>
                    <li><a href="{{ route('admin.reception-times.index') }}" class="nav-link">Fuqarolarni qabul qilish jadvali</a>
                    </li>
                    <li><a href="{{ route('admin.rekvizits.index') }}" class="nav-link">Rekvizitlar</a>
                    </li>
                    <li><a href="{{ route('admin.plans.index') }}" class="nav-link">Majlis o'tkazish rejalari</a>
                    </li>
                    <li><a href="{{ route('admin.discussions.index') }}" class="nav-link">Hujjatlar Muhokamasi</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="briefcase"></i><span>Viloyat haqida </span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.indicators.index') }}">Iqtisodiy ko'rsatkichlar</a> </li>
                    <li><a class="nav-link" href="{{ route('admin.parks.index') }}">Istirohat bog’ari</a> </li>
                </ul>
            </li>
            <li class="dropdown ">
                <a href="{{ route('admin.generator') }}" class="nav-link"><i data-feather="monitor"></i><span>Generator</a>
            </li>
        </ul>
    </aside>
</div>
