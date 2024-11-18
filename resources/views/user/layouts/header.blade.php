{{-- <style>
    .dropdown-container {
        position: relative;
        display: inline-block;
    }

    .category-dropdown {
        width: 150px;
        cursor: pointer;
        text-align: start;
        padding-left: 10px;
        font-size: 12px;
        color: black;
        font-weight: 200;
    }

    .subcategory-dropdown {
        display: none;
        position: absolute;
        left: 100%; /* Posisi di sebelah kanan dropdown utama */
        top: 0; /* Sesuaikan posisi vertikal jika diperlukan */
        background-color: #fff;
        border: 1px solid #ccc;
        width: 150px;
        z-index: 100;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        font-size: 12px;
    }

    .subcategory-item {
        padding: 8px 12px;
        cursor: pointer;
    }

    .subcategory-item:hover {
        background-color: #8121FB;
        color: #fff;
    }

    .courses-top-right-select select {
        border: 1px solid #fff;
    }
</style> --}}

<style>
    .select-container {
        width: 120px;
        position: relative;
        z-index: 1000;
    }

    .select-option {
        padding: 8px;
        background: #fff;
        color: #333;
        border-radius: 5px;
        cursor: pointer;
        text-align: left;
        transition: background 0.3s;
        font-size: 12px;
    }

    .dropdown {
        display: none;
        position: absolute;
        left: 0;
        top: 100%;
        border: 1px solid #ccc;
        background: white;
        z-index: 1;
        width: 100%;
        border-radius: 5px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        margin-top: 5px;
    }

    .show {
        display: block;
        /* Menampilkan dropdown */
    }

    .category {
        padding: 6px;
        /* Padding lebih kecil */
        cursor: pointer;
        transition: background 0.3s;
        position: relative;
        font-size: 12px;
        /* Ukuran font lebih kecil */
    }

    .category:hover {
        background: #f0f0f0;
    }

    .subcategory {
        display: none;
        position: absolute;
        left: 100%;
        top: 0;
        border: 1px solid #ccc;
        background: white;
        z-index: 1;
        width: 96px;
        /* Lebar subkategori disesuaikan */
        border-radius: 5px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .category:hover .subcategory {
        display: block;
    }

    .subcategory-item {
        padding: 6px;
        /* Padding lebih kecil */
        cursor: pointer;
        font-size: 12px;
        /* Ukuran font lebih kecil */
    }

    .subcategory-item:hover {
        background: #007bff;
        color: white;
    }
</style>

<style>
    .tgmenu__search-form .select-grp {
        padding: 7px 7px 7px 15px;
    }
</style>
<header>
    <div id="header-fixed-height"></div>
    <div id="sticky-header" class="tg-header__area">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="tgmenu__wrap">
                        <nav class="tgmenu__nav">
                            <div class="logo">
                                <a href="/"><img src="{{ asset('assets/img/logo/logo-class-industri.png') }}"
                                        width="70px" alt="Logo"></a>
                            </div>
                            <div class="tgmenu__navbar-wrap tgmenu__main-menu d-none d-xl-flex">
                                <ul class="navigation gap-3">
                                    <li class="menu-item {{ Request::is('/') ? 'active' : '' }}"><a
                                            href="/">Home</a>
                                    </li>
                                    <li
                                        class="menu-item {{ Route::currentRouteName() == 'courses.courses.index' ? 'active' : '' }}">
                                        <a href="{{ route('courses.courses.index') }}">Kursus</a>
                                    </li>
                                    <li
                                        class="menu-item {{ Route::currentRouteName() == 'events.index' ? 'active' : '' }}">
                                        <a href="{{ route('events.index') }}">Event</a>
                                    </li>
                                    <li
                                        class="menu-item {{ Route::currentRouteName() == 'news.index' ? 'active' : '' }}">
                                        <a href="{{ route('news.index') }}">Berita</a>
                                    </li>
                                    <li
                                        class="menu-item {{ Route::currentRouteName() == 'faqs.index' ? 'active' : '' }}">
                                        <a href="{{ route('faqs.index') }}">FAQ</a>
                                    </li>
                                    <li
                                        class="menu-item {{ Route::currentRouteName() == 'point-exchange.index' ? 'active' : '' }}">
                                        <a href="{{ route('point-exchange.index') }}">Penukaran Hadiah</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tgmenu__search d-none d-md-block">
                                <form action="{{ route('courses.courses.index') }}" class="tgmenu__search-form">
                                    <div class="select-grp">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.992 13.25C10.5778 13.25 10.242 13.5858 10.242 14C10.242 14.4142 10.5778 14.75 10.992 14.75V13.25ZM16.992 14.75C17.4062 14.75 17.742 14.4142 17.742 14C17.742 13.5858 17.4062 13.25 16.992 13.25V14.75ZM14.742 11C14.742 10.5858 14.4062 10.25 13.992 10.25C13.5778 10.25 13.242 10.5858 13.242 11H14.742ZM13.242 17C13.242 17.4142 13.5778 17.75 13.992 17.75C14.4062 17.75 14.742 17.4142 14.742 17H13.242ZM1 6.4H1.75H1ZM1 1.6H1.75H1ZM6.4 1V1.75V1ZM7 1.6H6.25H7ZM6.4 7V6.25V7ZM1 16.4H1.75H1ZM1 11.6H1.75H1ZM6.4 11V11.75V11ZM7 11.6H6.25H7ZM6.4 17V17.75V17ZM1.6 17V17.75V17ZM11 6.4H11.75H11ZM11 1.6H11.75H11ZM11.6 1V0.25V1ZM16.4 1V1.75V1ZM17 1.6H17.75H17ZM17 6.4H17.75H17ZM16.4 7V6.25V7ZM10.992 14.75H13.992V13.25H10.992V14.75ZM16.992 13.25H13.992V14.75H16.992V13.25ZM14.742 14V11H13.242V14H14.742ZM13.242 14V17H14.742V14H13.242ZM1.75 6.4V1.6H0.25V6.4H1.75ZM1.75 1.6C1.75 1.63978 1.7342 1.67794 1.70607 1.70607L0.645406 0.645406C0.392232 0.89858 0.25 1.24196 0.25 1.6H1.75ZM1.70607 1.70607C1.67794 1.7342 1.63978 1.75 1.6 1.75V0.25C1.24196 0.25 0.89858 0.392232 0.645406 0.645406L1.70607 1.70607ZM1.6 1.75H6.4V0.25H1.6V1.75ZM6.4 1.75C6.36022 1.75 6.32207 1.7342 6.29393 1.70607L7.35459 0.645406C7.10142 0.392231 6.75804 0.25 6.4 0.25V1.75ZM6.29393 1.70607C6.2658 1.67793 6.25 1.63978 6.25 1.6H7.75C7.75 1.24196 7.60777 0.898581 7.35459 0.645406L6.29393 1.70607ZM6.25 1.6V6.4H7.75V1.6H6.25ZM6.25 6.4C6.25 6.36022 6.2658 6.32207 6.29393 6.29393L7.35459 7.35459C7.60777 7.10142 7.75 6.75804 7.75 6.4H6.25ZM6.29393 6.29393C6.32207 6.2658 6.36022 6.25 6.4 6.25V7.75C6.75804 7.75 7.10142 7.60777 7.35459 7.35459L6.29393 6.29393ZM6.4 6.25H1.6V7.75H6.4V6.25ZM1.6 6.25C1.63978 6.25 1.67793 6.2658 1.70607 6.29393L0.645406 7.35459C0.898581 7.60777 1.24196 7.75 1.6 7.75V6.25ZM1.70607 6.29393C1.7342 6.32207 1.75 6.36022 1.75 6.4H0.25C0.25 6.75804 0.392231 7.10142 0.645406 7.35459L1.70607 6.29393ZM1.75 16.4V11.6H0.25V16.4H1.75ZM1.75 11.6C1.75 11.6398 1.7342 11.6779 1.70607 11.7061L0.645406 10.6454C0.392231 10.8986 0.25 11.242 0.25 11.6H1.75ZM1.70607 11.7061C1.67793 11.7342 1.63978 11.75 1.6 11.75V10.25C1.24196 10.25 0.898581 10.3922 0.645406 10.6454L1.70607 11.7061ZM1.6 11.75H6.4V10.25H1.6V11.75ZM6.4 11.75C6.36022 11.75 6.32207 11.7342 6.29393 11.7061L7.35459 10.6454C7.10142 10.3922 6.75804 10.25 6.4 10.25V11.75ZM6.29393 11.7061C6.2658 11.6779 6.25 11.6398 6.25 11.6H7.75C7.75 11.242 7.60777 10.8986 7.35459 10.6454L6.29393 11.7061ZM6.25 11.6V16.4H7.75V11.6H6.25ZM6.25 16.4C6.25 16.3602 6.2658 16.3221 6.29393 16.2939L7.35459 17.3546C7.60777 17.1014 7.75 16.758 7.75 16.4H6.25ZM6.29393 16.2939C6.32207 16.2658 6.36022 16.25 6.4 16.25V17.75C6.75804 17.75 7.10142 17.6078 7.35459 17.3546L6.29393 16.2939ZM6.4 16.25H1.6V17.75H6.4V16.25ZM1.6 16.25C1.63978 16.25 1.67793 16.2658 1.70607 16.2939L0.645406 17.3546C0.898581 17.6078 1.24196 17.75 1.6 17.75V16.25ZM1.70607 16.2939C1.7342 16.3221 1.75 16.3602 1.75 16.4H0.25C0.25 16.758 0.392231 17.1014 0.645406 17.3546L1.70607 16.2939ZM11.75 6.4V1.6H10.25V6.4H11.75ZM11.75 1.6C11.75 1.63978 11.7342 1.67793 11.7061 1.70607L10.6454 0.645406C10.3922 0.898581 10.25 1.24196 10.25 1.6H11.75ZM11.7061 1.70607C11.6779 1.7342 11.6398 1.75 11.6 1.75V0.25C11.242 0.25 10.8986 0.392231 10.6454 0.645406L11.7061 1.70607ZM11.6 1.75H16.4V0.25H11.6V1.75ZM16.4 1.75C16.3602 1.75 16.3221 1.7342 16.2939 1.70607L17.3546 0.645406C17.1014 0.392231 16.758 0.25 16.4 0.25V1.75ZM16.2939 1.70607C16.2658 1.67793 16.25 1.63978 16.25 1.6H17.75C17.75 1.24196 17.6078 0.898581 17.3546 0.645406L16.2939 1.70607ZM16.25 1.6V6.4H17.75V1.6H16.25ZM16.25 6.4C16.25 6.36022 16.2658 6.32207 16.2939 6.29393L17.3546 7.35459C17.6078 7.10142 17.75 6.75804 17.75 6.4H16.25ZM16.2939 6.29393C16.3221 6.2658 16.3602 6.25 16.4 6.25V7.75C16.758 7.75 17.1014 7.60777 17.3546 7.35459L16.2939 6.29393ZM16.4 6.25H11.6V7.75H16.4V6.25ZM11.6 6.25C11.6398 6.25 11.6779 6.2658 11.7061 6.29393L10.6454 7.35459C10.8986 7.60777 11.242 7.75 11.6 7.75V6.25ZM11.7061 6.29393C11.7342 6.32207 11.75 6.36022 11.75 6.4H10.25C10.25 6.75804 10.3922 7.10142 10.6454 7.35459L11.7061 6.29393Z"
                                                fill="currentcolor" />
                                        </svg>
                                        
                                        <div class="select-container">
                                            <div class="select-option" id="selectedCategory" onclick="toggleDropdown()">
                                                Pilih Kategori</div>
                                            <div class="dropdown" id="dropdownMenu">
                                                <div class="category">Kategori 1
                                                    <div class="subcategory">
                                                        <div class="subcategory-item"
                                                            onclick="selectSubcategory('Sub Kategori')">Sub Kategori
                                                        </div>
                                                        <div class="subcategory-item"
                                                            onclick="selectSubcategory('Sub Kategori')">Sub Kategori
                                                        </div>
                                                        <div class="subcategory-item"
                                                            onclick="selectSubcategory('Sub Kategori')">Sub Kategori
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="category">Kategori 2
                                                    <div class="subcategory">
                                                        <div class="subcategory-item"
                                                            onclick="selectSubcategory('Sub Kategori')">Sub Kategori
                                                        </div>
                                                        <div class="subcategory-item"
                                                            onclick="selectSubcategory('Sub Kategori')">Sub Kategori
                                                        </div>
                                                        <div class="subcategory-item"
                                                            onclick="selectSubcategory('Sub Kategori')">Sub Kategori
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="category">Kategori 3
                                                    <div class="subcategory">
                                                        <div class="subcategory-item"
                                                            onclick="selectSubcategory('Sub Kategori')">Sub Kategori
                                                        </div>
                                                        <div class="subcategory-item"
                                                            onclick="selectSubcategory('Sub Kategori')">Sub Kategori
                                                        </div>
                                                        <div class="subcategory-item"
                                                            onclick="selectSubcategory('Sub Kategori')">Sub Kategori
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="input-grp">
                                        <input type="text" id="search-name" name="title"
                                            value="{{ old('title', request('title')) }}"
                                            placeholder="Pencarian kursus . . .">
                                        <button type="submit"><i class="flaticon-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="tgmenu__action">
                                <ul class="list-wrap">
                                    @session('user')
                                        <li>
                                            <form action="{{ route('logout') }}" method="POST">
                                                @csrf
                                                <div class="user-profile">
                                                    <a
                                                        href="{{ route('dashboard.users.profile', session('user')['id']) }}">
                                                        <img class="rounded rounded-circle photo-user" style="width: 48px; height: 48px; object-fit: cover;" alt="">
                                                    </a>
                                                    <button type="submit" class="btn shadow-none py-3 ms-3">Keluar</button>
                                                </div>
                                            </form>
                                        </li>
                                    @else
                                        <li class="header-btn login-btn">
                                            <a href="{{ route('login') }}">Masuk</a>
                                        </li>
                                    @endsession
                                </ul>
                            </div>
                            <div class="mobile-login-btn">
                                <a href="{{ route('login') }}"><img src="{{ asset('assets/img/icons/user.svg') }}"
                                        alt="" class="injectable"></a>
                            </div>
                            <div class="mobile-nav-toggler"><i class="tg-flaticon-menu-1"></i></div>
                        </nav>
                    </div>
                    <!-- Mobile Menu  -->
                    <div class="tgmobile__menu">
                        <nav class="tgmobile__menu-box">
                            <div class="close-btn"><i class="tg-flaticon-close-1"></i></div>
                            <div class="nav-logo">
                                <a href="/"><img src="{{ asset('assets/img/logo/logo.svg') }}"
                                        alt="Logo"></a>
                            </div>
                            <div class="tgmobile__search">
                                <form action="{{ route('courses.courses.index') }}">
                                    <input type="text" name="title" placeholder="Search here...">
                                    <button><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                            <div class="tgmobile__menu-outer">
                                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                            </div>
                            <div class="social-links">
                                <ul class="list-wrap">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="tgmobile__menu-backdrop"></div>
                    <!-- End Mobile Menu -->
                </div>
            </div>
        </div>
    </div>
</header>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    function toggleDropdown() {
        const dropdown = document.getElementById('dropdownMenu');
        dropdown.classList.toggle('show');
    }

    function selectSubcategory(value) {
        document.getElementById('selectedCategory').innerText = value;
        document.getElementById('dropdownMenu').classList.remove('show');
    }

    window.onclick = function(event) {
        if (!event.target.matches('.select-option')) {
            const dropdowns = document.getElementsByClassName("dropdown");
            for (let i = 0; i < dropdowns.length; i++) {
                const openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>

<script>
    $(document).ready(function() {
        $.ajax({
            type: "GET",
            url: "{{ config('app.api_url') }}" + "/api/profile" ,
            headers: {
                Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
            },
            dataType: "json",
            success: function(response) {
                var profileImage1 = response.data.photo && /\.(jpeg|jpg|gif|png)$/i.test(response.data.photo) 
                    ? response.data.photo
                    : '{{ asset('assets/img/no-image/no-profile.jpeg') }}';
                $('.photo-user').attr('src', profileImage1);

            },
            error: function(xhr) {
                Swal.fire({
                    title: "Terjadi Kesalahan!",
                    text: "Tidak dapat memuat data modul.",
                    icon: "error"
                });
            }
        });
    });
</script>