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
                    <a class="sidebar-link" href="{{ route('mentor.dashboard.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-home"></i> <!-- Icon untuk Dashboard -->
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">KONTEN</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ Route::is('') ? 'active' : '' }}"
                        href="{{ route('mentor.classroom.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-news"></i> <!-- Icon untuk Berita -->
                        </span>
                        <span class="hide-menu">Daftar Kelas</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ Route::is('mentor.challenge.index') ? 'active' : '' }}"
                        href="{{ route('mentor.challenge.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-calendar-event"></i> <!-- Icon untuk Event -->
                        </span>
                        <span class="hide-menu">Tantangan</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ Route::is('mentor.attendance.index') ? 'active' : '' }}"
                        href="{{ route('mentor.attendance.index') }}" aria-expanded="false">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                <g fill="currentColor">
                                    <path
                                        d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0z" />
                                    <path
                                        d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1z" />
                                    <path
                                        d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0z" />
                                </g>
                            </svg>
                        </span>
                        <span class="hide-menu">Absensi</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ Route::is('') ? 'active' : '' }}"
                        href="{{ route('mentor.journal.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-file"></i> <!-- Icon untuk Event -->
                        </span>
                        <span class="hide-menu">Jurnal</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ Route::is('') ? 'active' : '' }}"
                        href="{{ route('mentor.ranking.index') }}" aria-expanded="false">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M12 3.034q-.086.15-.199.354l-.098.176l-.023.04c-.078.144-.208.382-.425.547c-.221.168-.488.226-.643.26l-.044.009l-.19.043c-.176.04-.319.072-.44.103c.079.097.182.219.316.376l.13.152l.03.034c.108.125.282.325.363.585c.08.256.052.52.035.686l-.005.047l-.02.203l-.042.46c.105-.046.223-.1.364-.165l.179-.082l.04-.02c.144-.067.393-.185.672-.185s.528.118.672.186l.04.019l.179.082q.209.098.364.165l-.042-.46l-.02-.203l-.005-.047c-.017-.167-.045-.43.035-.686c.08-.26.255-.46.363-.585l.03-.034l.13-.152c.134-.157.237-.279.316-.376c-.121-.03-.264-.063-.44-.103l-.19-.043l-.044-.01c-.155-.033-.422-.091-.643-.26c-.217-.164-.347-.402-.425-.545l-.023-.041l-.098-.176q-.112-.204-.199-.354M11.014 1.8c.172-.225.484-.55.986-.55s.814.325.986.55c.165.214.33.511.5.816l.023.041l.098.177l.057.1l.099.023l.19.043l.048.01c.327.075.653.148.903.247c.276.109.65.32.795.785c.142.455-.037.841-.193 1.09c-.145.23-.365.486-.59.749l-.03.035l-.13.153l-.082.097c.002.036.007.078.012.135l.02.203l.004.046c.034.352.067.692.055.964c-.012.286-.08.718-.468 1.011c-.4.304-.84.238-1.12.157c-.258-.073-.563-.214-.87-.355l-.043-.02l-.18-.083L12 8.185l-.085.04l-.179.082l-.044.02c-.306.141-.61.282-.869.355c-.28.08-.72.147-1.12-.157c-.387-.293-.456-.725-.468-1.01c-.012-.273.02-.613.055-.965l.004-.046l.02-.203l.013-.135l-.083-.097l-.13-.153l-.03-.035c-.225-.263-.445-.52-.59-.75c-.156-.248-.335-.634-.193-1.09c.144-.463.519-.675.795-.784c.25-.099.576-.172.903-.246l.047-.01l.191-.044l.1-.023l.056-.1l.098-.177l.023-.041c.17-.305.335-.602.5-.816m-.063 7.45h2.098c.665 0 1.238 0 1.697.062c.492.066.963.215 1.345.597s.531.853.597 1.345c.062.459.062 1.032.062 1.697v2.466c.164-.05.333-.082.504-.105c.459-.062 1.032-.062 1.697-.062h.098c.665 0 1.238 0 1.697.062c.492.066.963.215 1.345.597s.531.853.597 1.345c.062.459.062 1.032.062 1.697V22a.75.75 0 0 1-1.5 0v-3c0-.728-.002-1.2-.048-1.546c-.044-.325-.115-.427-.172-.484s-.159-.128-.484-.172c-.347-.046-.818-.048-1.546-.048s-1.2.002-1.546.048c-.325.044-.427.115-.484.172s-.128.159-.172.484c-.046.347-.048.818-.048 1.546v3a.75.75 0 0 1-1.5 0v-9c0-.728-.002-1.2-.048-1.546c-.044-.325-.115-.427-.172-.484s-.159-.128-.484-.172c-.347-.046-.818-.048-1.546-.048h-2c-.728 0-1.2.002-1.546.048c-.325.044-.427.115-.484.172s-.128.159-.172.484c-.046.347-.048.818-.048 1.546v9a.75.75 0 0 1-1.5 0c0-.728-.002-1.2-.048-1.546c-.044-.325-.115-.427-.172-.484s-.159-.128-.484-.172c-.347-.046-.818-.048-1.546-.048s-1.2.002-1.546.048c-.325.044-.427.115-.484.172s-.128.159-.172.484c-.046.347-.048.818-.048 1.546a.75.75 0 0 1-1.5 0v-.05c0-.664 0-1.237.062-1.696c.066-.492.215-.963.597-1.345s.854-.531 1.345-.597c.459-.062 1.032-.062 1.697-.062h.098c.665 0 1.238 0 1.697.062q.257.033.504.105v-5.466c0-.665 0-1.238.062-1.697c.066-.492.215-.963.597-1.345s.854-.531 1.345-.597c.459-.062 1.032-.062 1.697-.062"
                                    clip-rule="evenodd" />
                            </svg><!-- Icon untuk ranking -->
                        </span>
                        <span class="hide-menu">Peringkat</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">PROFILE</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('admin.profile.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-user"></i>
                        </span>
                        <span class="hide-menu">Profile</span>
                </li>
                </a>
            </ul>
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
