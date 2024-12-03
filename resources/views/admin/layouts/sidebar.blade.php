<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="index-2.html" class="text-nowrap logo-img">
                <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/dark-logo.svg"
                    class="dark-logo" width="180" alt="" />
                <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/light-logo.svg"
                    class="light-logo" width="180" alt="" />
            </a>
            <div class="close-btn d-lg-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8 text-muted"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar>
            <ul id="sidebarnav">
                <!-- ============================= -->
                <!-- Home -->
                <!-- ============================= -->
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Home</span>
                </li>
                <!-- =================== -->
                <!-- Dashboard -->
                <!-- =================== -->
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('admin.home') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-home"></i> <!-- Icon untuk Dashboard -->
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">UTAMA</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ Route::is('admin.courses.index', 'admin.courses.show', 'admin.modules.index', 'admin.modules.show', 'admin.sub-modules.show') ? 'active' : '' }}"
                        href="{{ route('admin.courses.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-book"></i>
                        </span>
                        <span class="hide-menu">Kursus</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('admin.categories.index') }}" aria-expanded="false">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2.0"
                                    d="M4 4h6v6H4zm10 0h6v6h-6zM4 14h6v6H4zm10 3a3 3 0 1 0 6 0a3 3 0 1 0-6 0" />
                            </svg>
                        </span>
                        <span class="hide-menu">Kategori</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ Route::is('admin.history.transaction') ? 'active' : '' }}"
                        href="{{ route('admin.history.transaction') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-book"></i>
                        </span>
                        <span class="hide-menu">Riwayat Transaksi</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow {{ Route::is('admin.point-exchange.index', 'admin.confirmation-point-exchange.index') ? 'active' : '' }}"
                        href="#" aria-expanded="false">
                        <span>
                            <i class="ti ti-settings"></i> <!-- Icon untuk Konfigurasi -->
                        </span>
                        <span class="hide-menu">Penukaran Poin</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ route('admin.point-exchange.index') }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Barang Penukaran</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('admin.confirmation-point-exchange.index') }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Konfirmasi Penukaran</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">KELAS INDUSTRI</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ Route::is('admin.class.school.*') ? 'active' : '' }}"
                        href="{{ route('admin.class.school.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-book"></i>
                        </span>
                        <span class="hide-menu">Sekolah</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ Route::is('admin.class.division.*') ? 'active' : '' }}"
                        href="{{ route('admin.class.division.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-book"></i>
                        </span>
                        <span class="hide-menu">Divisi</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">KONTEN</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ Route::is('admin.news.index', 'admin.news.show', 'admin.news.create', 'admin.news.edit') ? 'active' : '' }}"
                        href="{{ route('admin.news.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-news"></i> <!-- Icon untuk Berita -->
                        </span>
                        <span class="hide-menu">Berita</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ Route::is('admin.events.index', 'admin.events.show', 'admin.events.create', 'admin.events.edit') ? 'active' : '' }}"
                        href="{{ route('admin.events.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-calendar-event"></i> <!-- Icon untuk Event -->
                        </span>
                        <span class="hide-menu">Event</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">LANDING PAGE</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow {{ Route::is('admin.configuration.faq.index', 'admin.configuration.footer.index') ? 'active' : '' }}"
                        href="#" aria-expanded="false">
                        <span>
                            <i class="ti ti-settings"></i> <!-- Icon untuk Konfigurasi -->
                        </span>
                        <span class="hide-menu">Konfigurasi</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ route('admin.configuration.faq.index') }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Faq</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('admin.configuration.footer.index') }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Footer</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">PROFILE</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('admin.users.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-users"></i>
                        </span>
                        <span class="hide-menu">User</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('admin.mentor.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-users"></i>
                        </span>
                        <span class="hide-menu">Mentor</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('admin.profile.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-user"></i>
                        </span>
                        <span class="hide-menu">Profile</span>
                    </a>
                </li>
            </ul>

            {{-- <div class="unlimited-access hide-menu bg-light-primary position-relative my-7 rounded">
          <div class="d-flex">
            <div class="unlimited-access-title">
              <h6 class="fw-semibold fs-4 mb-6 text-dark w-85">Unlimited Access</h6>
              <button class="btn btn-primary fs-2 fw-semibold lh-sm">Signup</button>
            </div>
            <div class="unlimited-access-img">
              <img src="../../dist/images/backgrounds/rocket.png" alt="" class="img-fluid">
            </div>
          </div>
        </div> --}}
        </nav>
        <div class="fixed-profile p-3 bg-light-secondary rounded sidebar-ad mt-3">
            <div class="hstack gap-3">
                <div class="john-img">
                    <img src="{{ asset('admin/dist/images/profile/user-1.jpg') }}" class="rounded-circle"
                        width="40" height="40" alt="">
                </div>
                <div class="john-title">
                    <h6 class="mb-0 fs-4 fw-semibold">Mathew</h6>
                    <span class="fs-2 text-dark">Designer</span>
                </div>
                <button class="border-0 bg-transparent text-primary ms-auto" tabindex="0" type="button"
                    aria-label="logout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="logout">
                    <i class="ti ti-power fs-6"></i>
                </button>
            </div>
        </div>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>


<style>
    .sidebar-nav ul .sidebar-item.selected>.sidebar-link,
    .sidebar-nav ul .sidebar-item.selected>.sidebar-link.active,
    .sidebar-nav ul .sidebar-item>.sidebar-link.active {
        background-color: var(--purple-primary);
    }
</style>
