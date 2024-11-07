<div class="col-lg-3">
    <div class="dashboard__sidebar-wrap">
        <div class="dashboard__sidebar-title mb-20">
            <h6 class="title">Welcome, Jone Due</h6>
        </div>
        <nav class="dashboard__sidebar-menu">
            <ul class="list-wrap">
                <li class="{{ request()->routeIs('dashboard.users.dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard.users.dashboard') }}">
                        <i class="fas fa-home"></i>
                        Dashboard
                    </a>
                </li>
                <li class="{{ request()->routeIs('dashboard.users.courses') ? 'active' : '' }}">
                    <a href="{{ route('dashboard.users.courses') }}">
                        <i class="skillgro-book"></i>
                        Daftar Kursus
                    </a>
                </li>
                <li class="{{ request()->routeIs('dashboard.users.events') ? 'active' : '' }}">
                    <a href="{{ route('dashboard.users.events') }}">
                        <i class="skillgro-label"></i>
                        Daftar Event
                    </a>
                </li>
                <li class="{{ request()->routeIs('dashboard.users.reviews') ? 'active' : '' }}">
                    <a href="{{ route('dashboard.users.reviews') }}">
                        <i class="skillgro-book-2"></i>
                        Reviews
                    </a>
                </li>
                <li class="{{ request()->routeIs('dashboard.users.history-transaction') ? 'active' : '' }}">
                    <a href="{{ route('dashboard.users.history-transaction', session('user')['id']) }}">
                        <i class="skillgro-satchel"></i>
                        Riwayat Transaksi
                    </a>
                </li>
                <li class="{{ request()->routeIs('dashboard.users.profile') ? 'active' : '' }}">
                    <a href="{{ route('dashboard.users.profile') }}">
                        <i class="skillgro-avatar"></i>
                        Profil Saya
                    </a>
                </li>
                {{-- <li>
                    <a href="instructor-attempts.html">
                        <i class="skillgro-question"></i>
                        Daftar Kuis
                    </a>
                </li> --}}
            </ul>
        </nav>
        <div class="dashboard__sidebar-title mt-30 mb-20">
            <h6 class="title">User</h6>
        </div>
        <nav class="dashboard__sidebar-menu">
            <ul class="list-wrap">
                {{-- <li class="{{ request()->routeIs('dashboard.users.settings.index') ? 'active' : '' }}">
                    <a href="{{ route('dashboard.users.settings.index') }}">
                        <i class="skillgro-settings"></i>
                        Pengaturan
                    </a>
                </li> --}}
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="bg-transparent border-0 d-flex align-items-center" type="submit">
                            <i class="skillgro-logout me-2"></i>
                            Logout
                        </button>
                    </form>
                </li>
            </ul>
        </nav>
    </div>
</div>
