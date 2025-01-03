@extends('user.layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('admin/dist/libs/select2/dist/css/select2.min.css') }}">
    <style>
        :root {
            --tg-theme-primary: #9C40F7;
        }

        main {
            background-color: #F1F1F1;
        }

        .form-check-input:checked {
            background-color: #9C40F7;
            border-color: #9C40F7;
        }

        .blog-widget {
            background: none;
            padding: 0;
            margin-bottom: 5px;
        }

        .blog-widget .tagcloud a {
            font-size: 16px;
            color: var(--tg-common-color-white);
            display: block;
            background: #9C40F7;
            padding: 8px 15px;
            line-height: 1;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            -o-border-radius: 3px;
            -ms-border-radius: 3px;
            border-radius: 10px;
        }

        .btn-close {
            --bs-btn-close-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/%3e%3c/svg%3e");
            color: var(--bs-btn-close-color);
            background: transparent var(--bs-btn-close-bg) center / 1em auto no-repeat;
        }

        .blog-widget .tagcloud span {
            color: var(--tg-common-color-white);
            display: block;
            background: #9C40F7;
            padding: 6px 15px;
            line-height: 1;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            -o-border-radius: 3px;
            -ms-border-radius: 3px;
            border-radius: 5px;
            font-size: 12px;
        }

        /* modal bg full */
        .modal-backdrop {
            transform: scale(1.25);
            transform-origin: top left;
        }

        .outline-purple-primary {
            user-select: none;
            -moz-user-select: none;
            background: transparent;
            /* Membuat background menjadi transparan */
            border: 2px solid #9C40F7;
            /* Border outline dengan warna primary */
            color: #9C40F7;
            /* Warna teks mengikuti warna primary */
            cursor: pointer;
            display: inline-block;
            font-size: 16px;
            font-weight: var(--tg-fw-semi-bold);
            font-family: var(--tg-heading-font-family);
            letter-spacing: 0;
            line-height: 1.12;
            margin-bottom: 0;
            padding: 16px 30px;
            text-align: center;
            text-transform: capitalize;
            touch-action: manipulation;
            -webkit-transition: all 0.3s ease-out 0s;
            -moz-transition: all 0.3s ease-out 0s;
            -ms-transition: all 0.3s ease-out 0s;
            -o-transition: all 0.3s ease-out 0s;
            transition: all 0.3s ease-out 0s;
            vertical-align: middle;
            -webkit-border-radius: 50px;
            -moz-border-radius: 50px;
            -o-border-radius: 50px;
            -ms-border-radius: 50px;
            border-radius: 50px;
            white-space: nowrap;
            box-shadow: none;
            /* Hilangkan shadow */
            overflow: hidden;
        }

        /* Hover effect */
        .outline-purple-primary:hover {
            background-color: #9C40F7;
            /* Warna background saat hover */
            color: var(--tg-common-color-white);
            /* Warna teks saat hover */
            border-color: #9C40F7;
            /* Warna border tetap */
        }
    </style>
@endsection

@section('content')
    <div class="container d-flex justify-content-center custom-container mt-3">
        <div class="col-lg-11 mb-4">
            <div class="lesson__video-wrap-top mb-4">
                <div class="lesson__video-wrap-top-left">
                    <a href="#"><i class="flaticon-arrow-right"></i></a>
                    <span>Kembali</span>
                </div>
            </div>
            <div class="card position-relative overflow-hidden border-0"
                style="background: linear-gradient(to right, #9C40F7, #7209DB);border-radius: 15px;">
                <div class="">
                    <div class="row align-items-center">
                        <div class="col-9 text-white ps-5 p-4">
                            <h6 class="text-white">Forum Diskusi</h6>
                            <h4 class="fw-semibold mb-8 text-white">Selamat Datang, Alfian Di Forum Diskusi</h4>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a class="text-white" href="javascript:void(0)">Konsultasi seputar materi belajar
                                            Anda</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-3">
                            <div class="text-center mb-n1">
                                <img src="{{ asset('assets/img/book.png') }}" width="500px" alt=""
                                    class="img-fluid mb-n3" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-9">
                    <div class="card card-body border-0" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);">
                        <div class="">
                            <form action="" class="d-flex justify-content-between">
                                <div class="">
                                    <div class="position-relative">
                                        <input type="text" class="form-control product-search px-4 ps-5 filter"
                                            style="background-color: #fff" name="search"
                                            value="{{ old('name', request('name')) }}" id="input-search"
                                            placeholder="Search">
                                        <svg class="position-absolute top-50 start-0 translate-middle-y fs-6 ms-3"
                                            xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24">
                                            <path fill="none" stroke="#8B8B8B" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="m21 21l-4.343-4.343m0 0A8 8 0 1 0 5.343 5.343a8 8 0 0 0 11.314 11.314" />
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <div class="position-relative">
                                        {{-- <input type="text" class="form-control product-search px-1 ps-5" style="background-color: #fff"
                                        name="name" value="{{ old('name', request('name')) }}" id="input-filter"
                                    placeholder="Terbaru"> --}}
                                        <select class="list-modul form-select select" id="module" name="module"
                                            style="width: 200px;">
                                            <option value="">-- Pilih --</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="d-flex mt-3 mb-3">

                            <h6 class="me-3">Diskusi Berdasarkan:</h6>
                            <div class="blog-widget tag-item">
                                <div class="tagcloud" id="filter-module">

                                </div>
                            </div>
                        </div>

                        <div class="list-forum-discussion">

                        </div>

                    </div>
                </div>
                <div class="col-lg-3">
                    <button class="btn btn-primary w-100" data-bs-toggle="modal"
                        data-bs-target="#modal-create-forum-discussion"
                        style="border: 1px solid #000;border-radius: 15px;">Buat Diskusi Baru</button>
                    <div class="card card-body mt-4 border-0" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);">
                        <h5 class="mt-3">Urutkan Berdasarkan</h5>
                        <div class="form-check mb-1">
                            <input class="form-check-input filter" name="latest" type="checkbox" id="diskusiterbaru">
                            <label class="form-check-label" for="diskusiterbaru">
                                Diskusi terbaru
                            </label>
                        </div>
                        <div class="form-check mb-1">
                            <input class="form-check-input filter" name="oldest" type="checkbox" id="diskusiterlama">
                            <label class="form-check-label" for="diskusiterlama">
                                Diskusi terlama
                        </div>

                        <h5 class="mt-3">
                            <div class="blog-widget">
                                <h4 class="widget-title">Tags</h4>
                                <div class="tagcloud" id="tags">

                                </div>
                            </div>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('user.pages.courses.discussion-forum.widgets.modal-create-discussion-forum')
@endsection

@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const closeButtons = document.querySelectorAll('.close-btn');

            closeButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const tagItem = this.closest('.tag-item');
                    tagItem.style.display = 'none';
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            var id = "{{ $id }}"
            var filter = {};

            const urlParams = new URLSearchParams(window.location.search);
            const paramCourses = urlParams.get('module');

            if (paramCourses != null) {
                $('#filter-module').html(`<span class="d-flex justify-content-between">
                                        ${paramCourses}
                                        <button type="button" class="btn-close ms-2 close-btn"
                                            style="width: 5px;height: 5px;" aria-label="Close"></button>
                                    </span>`);
                filter.search = paramCourses;
                getDiscussion(filter)
            }

            $('.filter').change(function(e) {
                e.preventDefault();

                if ($.inArray($(this).attr('name'), ['search', 'module']) === -1 && $(this).is(
                        ':checked')) {
                    filter[$(this).attr('name')] = true;
                } else {
                    delete filter[$(this).attr('name')];
                }

                getDiscussion(filter);

            });

            $('#module').change(function(e) {
                e.preventDefault();

                filter.module = $(this).val();
                getDiscussion(filter);
            });

            let typingTimer;
            const typingDelay = 800;

            $('#input-search').on('input', function() {
                clearTimeout(typingTimer);
                filter.search = $(this).val();

                typingTimer = setTimeout(function() {
                    getDiscussion(filter);
                }, typingDelay);
            });

            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}" + "/api/modules/" + id,
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                success: function(response) {

                    $.each(response.data, function(index, value) {
                        $('.list-modul').append(
                            `<option value="${value.id}">${value.title}</option>`
                        );
                    });


                },
                error: function(xhr) {
                    Swal.fire({
                        title: "Terjadi Kesalahan!",
                        text: "Tidak dapat memuat data kategori.",
                        icon: "error"
                    });
                }
            });
            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}" + "/api/tags",
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                success: function(response) {
                    if (response.data.length > 0) {
                        $('#tags').empty();
                        $.each(response.data, function(index, value) {
                            console.log(value);

                            $('#tags').append(`<a href="#">#${value.name}</a>`);
                        });
                    } else {
                        $('#tags').append(empty());
                    }

                },
                error: function(xhr) {
                    Swal.fire({
                        title: "Terjadi Kesalahan!",
                        text: "Tidak dapat memuat data kategori.",
                        icon: "error"
                    });
                }
            });

            function getDiscussion(filter = null) {
                $.ajax({
                    type: "GET",
                    url: "{{ config('app.api_url') }}" + "/api/discussions/course/" + id,
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                    },
                    data: filter,
                    dataType: "json",
                    success: function(response) {
                        $('.list-forum-discussion').empty();
                        if (response.data && response.data.length > 0) {
                            $.each(response.data, function(index, value) {
                                $('.list-forum-discussion').append(forumDiscussion(index,
                                    value));
                            });
                        } else {
                            $('.list-forum-discussion').append(empty());
                        }
                    },
                    error: function(xhr) {
                        Swal.fire({
                            title: "Terjadi Kesalahan!",
                            text: "Tidak dapat memuat data kategori.",
                            icon: "error"
                        });
                    }
                });
            }
            getDiscussion();

        });

        function forumDiscussion(index, value) {
            const tag = value.discussion_tags.map(discussion_tag => {
                return `<a href="#">#${discussion_tag.tag.name}</a>`;
            }).join('');
            return `
                 <div class="card border-0 mb-3" style="background-color: #F8F8F8;">
                    <div class="card-header" style="background-color: #9425FE;">
                        <div class="d-flex align-items-center justify-content-between mt-1">
                            <div class="d-flex gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-width="2"><path d="M4 19V5a2 2 0 0 1 2-2h13.4a.6.6 0 0 1 .6.6v13.114M6 17h14M6 21h14"/><path stroke-linejoin="round" d="M6 21a2 2 0 1 1 0-4"/><path d="M9 7h6"/></g></svg>
                                <h6 class="text-white">${value.discussion_title}</h6>
                            </div>
                        </div>
                    </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="d-flex align-items-center ms-2">
                                    <img src="{{ asset('admin/dist/images/profile/user-1.jpg') }}" class="rounded-circle"
                                        width="40" height="40">
                                    <div class="ms-2 d-flex align-items-center">
                                        <span class="fw-semibold text-dark">${value.user.name}</span>
                                        <ul class="pt-3">
                                            <li>${value.time_ago}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div style="padding-left: 30px;">
                                <h6>${value.discussion_title}</h6>
                                <p>${value.discussion_question}</p>
                                <div class="blog-widget">
                                    <div class="tagcloud">
                                       ${tag}
                                        </div>
                                </div>
                                <div class="d-flex gap-3">
                                    <a href="/discussion-forum/modul/${value.id}" class="text-black">
                                    <div class="d-flex align-items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-black" width="25"
                                            height="25" viewBox="0 0 1024 1024">
                                            <path fill="currentColor"
                                                d="M573 421c-23.1 0-41 17.9-41 40s17.9 40 41 40c21.1 0 39-17.9 39-40s-17.9-40-39-40m-280 0c-23.1 0-41 17.9-41 40s17.9 40 41 40c21.1 0   39-17.9 39-40s-17.9-40-39-40" />
                                            <path fill="currentColor"
                                                d="M894 345c-48.1-66-115.3-110.1-189-130v.1c-17.1-19-36.4-36.5-58-52.1c-163.7-119-393.5-82.7-513 81c-96.3 133-92.2 311.9 6 439l.8 132.6c0 3.2.5 6.4 1.5 9.4c5.3 16.9 23.3 26.2 40.1 20.9L309 806c33.5 11.9 68.1 18.7 102.5 20.6l-.5.4c89.1 64.9 205.9 84.4 313 49l127.1 41.4c3.2 1 6.5 1.6 9.9 1.6c17.7 0 32-14.3 32-32V753c88.1-119.6 90.4-284.9 1-408M323 735l-12-5l-99 31l-1-104l-8-9c-84.6-103.2-90.2-251.9-11-361c96.4-132.2 281.2-161.4 413-66c132.2 96.1 161.5 280.6 66 412c-80.1 109.9-223.5 150.5-348 102m505-17l-8 10l1 104l-98-33l-12 5c-56 20.8-115.7 22.5-171 7l-.2-.1C613.7 788.2 680.7 742.2 729 676c76.4-105.3 88.8-237.6 44.4-350.4l.6.4c23 16.5 44.1 37.1 62 62c72.6 99.6 68.5 235.2-8 330" />
                                            <path fill="currentColor"
                                                d="M433 421c-23.1 0-41 17.9-41 40s17.9 40 41 40c21.1 0 39-17.9 39-40s-17.9-40-39-40" />
                                        </svg>
                                        ${value.discussion_answers_count} Balasan
                                    </div>
                                    </a>
                                    <div class="d-flex align-items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            viewBox="0 0 24 24">
                                            <path fill="black"
                                                d="M6 22h15v-2H6.012C5.55 19.988 5 19.805 5 19s.55-.988 1.012-1H21V4c0-1.103-.897-2-2-2H6c-1.206 0-3 .799-3 3v14c0 2.201 1.794 3 3 3M5 8V5c0-.805.55-.988 1-1h13v12H5z" />
                                            <path fill="black" d="M8 6h9v2H8z" />
                                        </svg>
                                        ${value.module.title}
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
            `;
        }
    </script>
    <script>
        function adjustBackdropForZoom() {
            const zoomFactor = parseFloat(getComputedStyle(document.body).zoom) || 1; // Mendapatkan nilai zoom

            const backdrop = document.querySelector('.modal-backdrop');
            if (backdrop) {
                // Gunakan transform untuk memperbesar backdrop agar sesuai dengan zoom
                backdrop.style.transform = `scale(${1 / zoomFactor})`;
                backdrop.style.transformOrigin = 'top left'; // Set origin dari scale
                backdrop.style.width = '200vw';
                backdrop.style.height = '200vh';
            }
        }

        // Event listener ketika modal ditampilkan
        const modalElement = document.getElementById('exampleModal');
        modalElement?.addEventListener('shown.bs.modal', function() {
            adjustBackdropForZoom(); // Panggil fungsi untuk menyesuaikan ukuran backdrop
        });

        // Menyesuaikan backdrop jika ada perubahan zoom atau resize
        window.addEventListener('resize', adjustBackdropForZoom);
    </script>
@endsection
