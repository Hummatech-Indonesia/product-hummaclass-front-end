<div class="col-lg-3 mb-3">
    <div class="dashboard__sidebar-wrap">
        <div class="dashboard__sidebar-title mb-20">
            <h6 class="title">Welcome, Jone Due</h6>
        </div>
        <nav class="dashboard__sidebar-menu">
            <ul class="list-wrap">
                <li class="{{ request()->routeIs('dashboard.students.index') ? 'active' : '' }}">
                    <a href="{{ route('dashboard.students.index') }}">
                        <i class="fas fa-tachometer-alt"></i> <!-- Ikon Dashboard -->
                        Dashboard
                    </a>
                </li>
                <li class="{{ request()->routeIs('dashboard.tasks.index') ? 'active' : '' }}">
                    <a href="#">
                        <i class="fas fa-tasks"></i> <!-- Ikon Tugas -->
                        Tugas
                    </a>
                </li>
                <li class="{{ request()->routeIs('dashboard.students.classes.index') ? 'active' : '' }}">
                    <a href="{{ route('dashboard.students.classes.index') }}">
                        <i class="fas fa-chalkboard"></i> <!-- Ikon Kelas -->
                        Kelas
                    </a>
                </li>
                <li class="{{ request()->routeIs('dashboard.schedule.index') ? 'active' : '' }}">
                    <a href="#">
                        <i class="fas fa-calendar-alt"></i> <!-- Ikon Jadwal -->
                        Jadwal
                    </a>
                </li>
                <li class="{{ request()->routeIs('dashboard.students.ranks.index') ? 'active' : '' }}">
                    <a href="{{ route('dashboard.students.ranks.index') }}">
                        <i class="fas fa-trophy"></i> <!-- Ikon Peringkat -->
                        Peringkat
                    </a>
                </li>
                <li class="{{ request()->routeIs('dashboard.students.events.index') ? 'active' : '' }}">
                    <a href="{{ route('dashboard.students.events.index') }}">
                        <i class="fas fa-calendar-check"></i> <!-- Ikon Event -->
                        Event
                    </a>
                </li>
                <li class="{{ request()->routeIs('dashboard.rewards.index') ? 'active' : '' }}">
                    <a href="#">
                        <i class="fas fa-gift"></i> <!-- Ikon Hadiah -->
                        Hadiah
                    </a>
                </li>
                <li class="{{ request()->routeIs('dashboard.payments.index') ? 'active' : '' }}">
                    <a href="#">
                        <i class="fas fa-credit-card"></i> <!-- Ikon Pembayaran -->
                        Pembayaran
                    </a>
                </li>
                <li class="{{ request()->routeIs('dashboard.sop.index') ? 'active' : '' }}">
                    <a href="#">
                        <i class="fas fa-book"></i> <!-- Ikon SOP -->
                        SOP
                    </a>
                </li>
                <li class="{{ request()->routeIs('dashboard.users.profile') ? 'active' : '' }}">
                    <a href="{{ route('dashboard.users.profile') }}">
                        <i class="fas fa-user-circle"></i> <!-- Ikon Profil -->
                        Profil Saya
                    </a>
                </li>
            </ul>
        </nav>

        <div class="dashboard__sidebar-title mt-30 mb-20">
            <h6 class="title">User</h6>
        </div>
        <nav class="dashboard__sidebar-menu">
            <ul class="list-wrap">
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
