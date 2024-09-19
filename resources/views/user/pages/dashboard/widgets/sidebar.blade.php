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
                <li class="{{ request()->routeIs('dashboard.users.profile') ? 'active' : '' }}">
                    <a href="{{ route('dashboard.users.profile') }}">
                        <i class="skillgro-avatar"></i>
                        Profil Saya
                    </a>
                </li>
                <li>
                    <a href="instructor-enrolled-courses.html">
                        <i class="skillgro-book"></i>
                        Daftar Kursus
                    </a>
                </li>
                <li>
                    <a href="instructor-wishlist.html">
                        <i class="skillgro-label"></i>
                        Daftar Keinginan
                    </a>
                </li>
                <li>
                    <a href="instructor-review.html">
                        <i class="skillgro-book-2"></i>
                        Review
                    </a>
                </li>
                <li>
                    <a href="instructor-attempts.html">
                        <i class="skillgro-question"></i>
                        Daftar Kuis
                    </a>
                </li>
                <li>
                    <a href="instructor-history.html">
                        <i class="skillgro-satchel"></i>
                        Riwayat Pesanan
                    </a>
                </li>
            </ul>
        </nav>
        <div class="dashboard__sidebar-title mt-30 mb-20">
            <h6 class="title">User</h6>
        </div>
        <nav class="dashboard__sidebar-menu">
            <ul class="list-wrap">
                <li class="{{ request()->routeIs('dashboard.users.settings.index') ? 'active' : '' }}">
                    <a href="{{ route('dashboard.users.settings.index') }}">
                        <i class="skillgro-settings"></i>
                        Pengaturan
                    </a>
                </li>
                <li>
                    <a href="index.html">
                        <i class="skillgro-logout"></i>
                        Logout
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
