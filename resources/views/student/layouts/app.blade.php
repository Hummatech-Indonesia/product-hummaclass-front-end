<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from html.themegenix.com/skillgro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Aug 2024 06:41:22 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SkillGro - Online Courses & Education Template</title>
    <meta name="description" content="SkillGro - Online Courses & Education Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon-skillgro.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon-skillgro-new.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/default-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plyr.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/tg-cursor.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    @yield('style')
    <style>
        :root {
            --tg-theme-primary: #9425FE;
        }
    </style>
</head>

<body style="
    zoom: 0.8;
    width: 100%;
    height: 700px;
    overflow-x: hidden;">

    <!--Preloader-->
    <div id="preloader">
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class="loader-icon"><img src="{{ asset('assets/img/logo/preloader.svg') }}" alt="Preloader"></div>
            </div>
        </div>
    </div>
    <!--Preloader-end -->

    <!-- Scroll-top -->
    <button class="scroll__top scroll-to-target" data-target="html">
        <i class="tg-flaticon-arrowhead-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area -->
    @include('user.layouts.header')
    <!-- header-area-end -->



    <!-- main-area -->
    <main class="main-area fix">
        <!-- breadcrumb-area -->
        <div class="breadcrumb__area breadcrumb__bg py-5 breadcrumb__bg-three"
            data-background="{{ asset('assets/img/bg/breadcrumb_bg.jpg') }}">
            <div class="breadcrumb__shape-wrap">
                <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img"
                    class="alltuchtopdown">
                <img src="{{ asset('assets/img/others/breadcrumb_shape02.svg') }}" alt="img" data-aos="fade-right"
                    data-aos-delay="300">
                <img src="{{ asset('assets/img/others/breadcrumb_shape03.svg') }}" alt="img" data-aos="fade-up"
                    data-aos-delay="400">
                <img src="{{ asset('assets/img/others/breadcrumb_shape04.svg') }}" alt="img"
                    data-aos="fade-down-left" data-aos-delay="400">
                <img src="{{ asset('assets/img/others/breadcrumb_shape05.svg') }}" alt="img" data-aos="fade-left"
                    data-aos-delay="400">
            </div>
        </div>
        <!-- breadcrumb-area-end -->

        <!-- dashboard-area -->
        <section class="dashboard__area section-pb-120">
            <div class="container">
                @include('student.pages.dashboard.widgets.header')
                <div class="row">
                    @include('student.pages.dashboard.widgets.sidebar')
                    <div class="col-lg-9">
                        @yield('content')
                    </div>
                </div>
            </div>
        </section>
        <!-- dashboard-area-end -->
    </main>
    <!-- main-area-end -->



    <!-- footer-area -->
    @include('user.layouts.footer')
    <!-- footer-area-end -->




    <!-- JS here -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.odometer.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/js/tween-max.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('admin/dist/libs/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('admin/dist/libs/select2/dist/js/select2.min.js') }}"></script>
    <script src="{{ asset('admin/dist/js/forms/select2.init.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.marquee.min.js') }}"></script>
    <script src="{{ asset('assets/js/tg-cursor.min.js') }}"></script>
    <script src="{{ asset('assets/js/vivus.min.js') }}"></script>
    <script src="{{ asset('assets/js/ajax-form.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/svg-inject.min.js') }}"></script> --}}
    <script src="{{ asset('assets/js/jquery.circleType.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.lettering.min.js') }}"></script>
    <script src="{{ asset('assets/js/plyr.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $.ajax({
            type: "get",
            url: "{{ config('app.api_url') }}/api/categories",
            dataType: "json",
            success: function(response) {
                $('#dropdownMenu').empty();
                let dropdownChild = '';
                let categoryName = '';
                response.data.data.forEach(category => {
                    dropdownChild += `
                    <div class="category">${category.name}
                        <div class="subcategory">`
                    category.sub_category.forEach(subCategory => {
                        dropdownChild += `<a class="subcategory-item d-block" href="{{ route('courses.courses.index') }}?subCategory=${subCategory.id}">Sub Kategori
                                </a>`
                    });
                    dropdownChild += `
                            </div>
                    </div>
                    `
                });


                $('#dropdownMenu').append(dropdownChild);
            }
        });
        // SVGInject(document.querySelectorAll("img.injectable"));

        function formatRupiah(price) {
            return new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR',
                minimumFractionDigits: 0,
                maximumFractionDigits: 0
            }).format(price);
        }

        function ajaxWithToken(method, url, data = null, dataType = 'json', success, error) {
            $.ajax({
                type: method,
                url: url,
                headers: {
                    Authorization: "Bearer " + "{{ session('hummaclass-token') }}"
                },
                data: data,
                dataType: dataType,
                success: success,
                error: error
            });
        }

        function formatDate(tanggalAsli) {
            // Membuat objek Date dari string tanggal, format apapun (baik yang dengan T atau dengan spasi)
            const date = new Date(tanggalAsli);

            // Opsi untuk format tanggal dalam bahasa Indonesia
            const opsiTanggal = {
                day: 'numeric',
                month: 'long',
                year: 'numeric',
            };
            // Menggunakan toLocaleDateString dan toLocaleTimeString untuk format
            const tanggalFormatted = date.toLocaleDateString('id-ID', opsiTanggal);

            // Menggabungkan hasil format tanggal dan waktu
            return `${tanggalFormatted}`;
        }
    </script>
    <script>
        function renderPagination(lastPage, currentPage, onPageClick) {
            const paginationWrap = $('.pagination__wrap .list-wrap');
            paginationWrap.empty();

            const maxVisiblePages = 5; // Jumlah halaman yang ingin ditampilkan
            const startPage = Math.max(1, currentPage - Math.floor(maxVisiblePages / 2));
            const endPage = Math.min(lastPage, startPage + maxVisiblePages - 1);

            if (startPage > 1) {
                paginationWrap.append('<li><a href="#" data-page="1">1</a></li>');
                if (startPage > 2) {
                    paginationWrap.append('<li><span>...</span></li>');
                }
            }

            for (let i = startPage; i <= endPage; i++) {
                const isActive = i === currentPage ? 'active' : '';
                const pageItem = `<li class="${isActive}"><a href="#" data-page="${i}">${i}</a></li>`;
                paginationWrap.append(pageItem);
            }

            if (endPage < lastPage) {
                if (endPage < lastPage - 1) {
                    paginationWrap.append('<li><span>...</span></li>');
                }
                paginationWrap.append(`<li><a href="#" data-page="${lastPage}">${lastPage}</a></li>`);
            }

            // Hapus event listener sebelumnya
            paginationWrap.off('click', 'a');

            // Tambahkan event listener untuk setiap link pagination
            paginationWrap.on('click', 'a', function(event) {
                event.preventDefault();
                const page = $(this).data('page');

                // Panggil fungsi callback yang diterima sebagai parameter
                if (typeof onPageClick === 'function') {
                    onPageClick(page);
                }
            });
        }

        function empty() {
            return `<div class="d-flex justify-content-center flex-column align-items-center">    
                            <img src="{{ asset('assets/8961448_3973477.svg') }}" width="35%" alt="" srcset="">
                            <h4 class="text-center">Data kosong</h4>
                    </div>`
        }

        function emptyTable() {
            return `
                <tr>
                    <td colspan="100%">
                        <div class="d-flex justify-content-center flex-column align-items-center">    
                            <img src="{{ asset('assets/8961448_3973477.svg') }}" width="35%" alt="" srcset="">
                            <h4 class="text-center">Data kosong</h4>
                        </div>
                    </td>
                </tr>
                    `
        }

        function formatTanggal(tanggalAsli) {
            // Membuat objek Date dari string tanggal, format apapun (baik yang dengan T atau dengan spasi)
            const date = new Date(tanggalAsli);

            // Opsi untuk format tanggal dalam bahasa Indonesia
            const opsiTanggal = {
                day: 'numeric',
                month: 'long',
                year: 'numeric',
            };

            // Opsi untuk format waktu (jam dan menit)
            const opsiWaktu = {
                hour: '2-digit',
                minute: '2-digit',
                hour12: false // Format 24 jam
            };

            // Menggunakan toLocaleDateString dan toLocaleTimeString untuk format
            const tanggalFormatted = date.toLocaleDateString('id-ID', opsiTanggal);
            const waktuFormatted = date.toLocaleTimeString('id-ID', opsiWaktu);

            // Menggabungkan hasil format tanggal dan waktu
            return `${tanggalFormatted} ${waktuFormatted}`;
        }

        function commonAlert(setting = {
            title: 'Terjadi Kesalahan!',
            status: 'success',
            message: 'Ada kesalahan saat memproses data.'
        }) {
            setting.title = setting.status == 'success' ? "Berhasil" : "Gagal";
            Swal.fire({
                title: setting.title,
                text: setting.message,
                icon: setting.status == 'success' ? 'info' : 'error',
                confirmButtonText: 'Oke'
            });
        }
    </script>

    <script>
        function handlePaginate(pagination) {
            const paginate = $('<ul>').addClass('pagination')
            const currentPage = pagination.current_page
            const lastPage = pagination.last_page
            if (lastPage >= 11) {
                var startPage = currentPage
                var endPage = currentPage + 1
                if (startPage > 1) startPage = currentPage - 1
                if (currentPage == lastPage) endPage -= 1
                for (var page = startPage; page <= endPage; page++) {
                    const pageItem = $('<li>').addClass('page-item')
                    page == currentPage ? pageItem.addClass('active') : '';
                    const pageLink =
                        `<button class="page-link" onclick="get(${page})" >${page}</button>`
                    pageItem.html(pageLink)
                    paginate.append(pageItem)
                }
                const morePage = `<li class="page-item disabled">
                            <button
                            class="page-link"
                            tabindex="-1"
                            aria-disabled="true"
                            >...</button>
                        </li>`
                if (currentPage >= 3) {
                    var leftPage = 3;
                    if (currentPage == 3) leftPage = 1
                    if (currentPage == 4) leftPage = 2
                    if (currentPage >= 6) paginate.prepend(morePage)
                    for (var page = leftPage; page >= 1; page--) {
                        const pageItem = $('<li>').addClass('page-item')
                        const pageLink =
                            `<button  class="page-link" onclick="get(${page})">${page}</button>`
                        pageItem.html(pageLink)
                        paginate.prepend(pageItem)
                    }
                }
                if (currentPage <= (lastPage - 2)) {
                    var rightPage = 1
                    if (currentPage == (lastPage - 2)) rightPage = 0
                    if (currentPage == (lastPage - 3)) rightPage = 1
                    if (currentPage < (lastPage - 4)) paginate.append(morePage)
                    for (var page = (lastPage - rightPage); page <= lastPage; page++) {
                        const pageItem = $('<li>').addClass('page-item')
                        const pageLink = `<button class="page-link" onclick="get(${page})">${page}</button>`
                        pageItem.html(pageLink)
                        paginate.append(pageItem)
                    }
                }
            } else {
                for (var page = 1; page <= lastPage; page++) {
                    const pageItem = $('<li>').addClass('page-item')
                    page == currentPage ? pageItem.addClass('active') : '';
                    const pageLink = `<button class="page-link" onclick="get(${page})">${page}</button>`
                    pageItem.append(pageLink)
                    paginate.append(pageItem)
                }
            }
            const previous = `<li class="page-item ${currentPage == 1 ? 'disabled' : ''}" ${currentPage != 1 ? 'onclick="get('+(currentPage - 1)+')"' : ''}>
                            <button
                            class="page-link"
                            tabindex="-1"
                            aria-disabled="true"
                            >Previous</button>
                        </li>`
            const next = `<li class="page-item ${currentPage == lastPage ? 'disabled' : ''}" ${currentPage != lastPage ? 'onclick="get('+(pagination.current_page + 1)+')"' : ''}>
                                <button class="page-link" href="#">Next</button>
                        </li>`
            paginate.prepend(previous)
            paginate.append(next)
            return paginate
        }
    </script>

    @yield('script')
    @stack('script')
</body>


<!-- Mirrored from html.themegenix.com/skillgro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Aug 2024 06:42:43 GMT -->

</html>
