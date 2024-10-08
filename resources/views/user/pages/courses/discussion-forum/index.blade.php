@extends('user.layouts.app')

@section('style')
<style>
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
        <div class="card position-relative overflow-hidden border-0" style="background: linear-gradient(to right, #9C40F7, #7209DB);border-radius: 15px;">
            <div class="">
                <div class="row align-items-center">
                    <div class="col-9 text-white ps-5 p-4">
                        <h6 class="text-white">Forum Diskusi</h6>
                        <h4 class="fw-semibold mb-8 text-white">Selamat Datang, Alfian Di Forum Diskusi</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a class="text-white" href="javascript:void(0)">Konsultasi seputar materi belajar Anda</a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-3">
                        <div class="text-center mb-n1">
                            <img src="{{ asset('assets/img/book.png') }}" width="500px" alt="" class="img-fluid mb-n3" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-lg-3">
                <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#modal-create-forum-discussion" style="border: 1px solid #000;border-radius: 15px;">Buat Diskusi Baru</button>
                <div class="card card-body mt-4 border-0" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);">
                    <h5>Filter Berdasarkan</h5>
                    <div class="form-check mb-1">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            Diskusi sudah selesai
                        </label>
                    </div>
                    <div class="form-check mb-1">
                        <input class="form-check-input" type="checkbox" value="" id="diskusibelumselesai">
                        <label class="form-check-label" for="diskusibelumselesai">
                            Diskusi belum selesai
                        </label>
                    </div>

                    <h5 class="mt-3">Urutkan Berdasarkan</h5>
                    <div class="form-check mb-1">
                        <input class="form-check-input" type="checkbox" value="" id="diskusiterbaru">
                        <label class="form-check-label" for="diskusiterbaru">
                            Diskusi terbaru
                        </label>
                    </div>
                    <div class="form-check mb-1">
                        <input class="form-check-input" type="checkbox" value="" id="diskusiterlama">
                        <label class="form-check-label" for="diskusiterlama">
                            Diskusi terlama
                    </div>

                    <h5 class="mt-3">
                        <div class="blog-widget">
                            <h4 class="widget-title">Tags</h4>
                            <div class="tagcloud">
                                <a href="#">#loremipsum</a>
                                <a href="#">#loremipsum</a>
                                <a href="#">#lorem</a>
                                <a href="#">#loremipsum</a>
                                <a href="#">#loremipsumasda</a>
                                <a href="#">#loremipsumasda</a>
                                <a href="#">#lorem</a>
                                <a href="#">#lorem</a>
                            </div>
                        </div>
                    </h5>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="card card-body border-0" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);">
                    <div class="">
                        <form action="" class="d-flex justify-content-between">
                            <div class="position-relative">
                                <input type="text" class="form-control product-search px-4 ps-5" style="background-color: #fff" name="name" value="{{ old('name', request('name')) }}" id="input-search" placeholder="Search">
                                <svg class="position-absolute top-50 start-0 translate-middle-y fs-6 ms-3" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                    <path fill="none" stroke="#8B8B8B" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m21 21l-4.343-4.343m0 0A8 8 0 1 0 5.343 5.343a8 8 0 0 0 11.314 11.314" /></svg>
                            </div>
                            <div class="position-relative">
                                {{-- <input type="text" class="form-control product-search px-1 ps-5" style="background-color: #fff"
                                    name="name" value="{{ old('name', request('name')) }}" id="input-filter"
                                placeholder="Terbaru"> --}}
                                <select name="" id="" class="form-select" style="width: 200px;">
                                    <option value="">Pilih Modul</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex mt-3 mb-3">

                        <h6 class="me-3">Diskusi Berdasarkan:</h6>
                        <div class="blog-widget tag-item">
                            <div class="tagcloud">
                                <span class="d-flex justify-content-between">
                                    Nama Modul Lorem, ipsum.
                                    <button type="button" class="btn-close ms-2 close-btn" style="width: 5px;height: 5px;" aria-label="Close"></button>
                                </span>
                            </div>
                        </div>
                    </div>

                    @foreach (range(1,4) as $data)
                    <div class="card card-body border-0 mb-3" style="background-color: #F8F8F8;">

                        <div class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 16 16">
                                <path fill="black" d="M4.146.146A.5.5 0 0 1 4.5 0h7a.5.5 0 0 1 .5.5c0 .68-.342 1.174-.646 1.479c-.126.125-.25.224-.354.298v4.431l.078.048c.203.127.476.314.751.555C12.36 7.775 13 8.527 13 9.5a.5.5 0 0 1-.5.5h-4v4.5c0 .276-.224 1.5-.5 1.5s-.5-1.224-.5-1.5V10h-4a.5.5 0 0 1-.5-.5c0-.973.64-1.725 1.17-2.189A6 6 0 0 1 5 6.708V2.277a3 3 0 0 1-.354-.298C4.342 1.674 4 1.179 4 .5a.5.5 0 0 1 .146-.354" /></svg>
                            <div class="d-flex align-items-center ms-2">
                                <img src="{{ asset('admin/dist/images/profile/user-1.jpg') }}" class="rounded-circle" width="40" height="40">
                                <div class="ms-2 d-flex align-items-center">
                                    <span class="fw-semibold text-darl">Web Designer</span>
                                    <ul class="pt-3">
                                        <li>1 tahun yang lalu</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div style="padding-left: 30px;">
                            <h6>Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet</h6>
                            <p>Dorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas </p>
                            <div class="blog-widget">
                                <div class="tagcloud">
                                    <a href="#">#loremipsum</a>
                                </div>
                            </div>
                            <div class="d-flex gap-3">
                                <div class="d-flex align-items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-black" width="25" height="25" viewBox="0 0 1024 1024">
                                        <path fill="currentColor" d="M573 421c-23.1 0-41 17.9-41 40s17.9 40 41 40c21.1 0 39-17.9 39-40s-17.9-40-39-40m-280 0c-23.1 0-41 17.9-41 40s17.9 40 41 40c21.1 0 39-17.9 39-40s-17.9-40-39-40" />
                                        <path fill="currentColor" d="M894 345c-48.1-66-115.3-110.1-189-130v.1c-17.1-19-36.4-36.5-58-52.1c-163.7-119-393.5-82.7-513 81c-96.3 133-92.2 311.9 6 439l.8 132.6c0 3.2.5 6.4 1.5 9.4c5.3 16.9 23.3 26.2 40.1 20.9L309 806c33.5 11.9 68.1 18.7 102.5 20.6l-.5.4c89.1 64.9 205.9 84.4 313 49l127.1 41.4c3.2 1 6.5 1.6 9.9 1.6c17.7 0 32-14.3 32-32V753c88.1-119.6 90.4-284.9 1-408M323 735l-12-5l-99 31l-1-104l-8-9c-84.6-103.2-90.2-251.9-11-361c96.4-132.2 281.2-161.4 413-66c132.2 96.1 161.5 280.6 66 412c-80.1 109.9-223.5 150.5-348 102m505-17l-8 10l1 104l-98-33l-12 5c-56 20.8-115.7 22.5-171 7l-.2-.1C613.7 788.2 680.7 742.2 729 676c76.4-105.3 88.8-237.6 44.4-350.4l.6.4c23 16.5 44.1 37.1 62 62c72.6 99.6 68.5 235.2-8 330" />
                                        <path fill="currentColor" d="M433 421c-23.1 0-41 17.9-41 40s17.9 40 41 40c21.1 0 39-17.9 39-40s-17.9-40-39-40" /></svg>
                                    10 Balasan
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                                        <path fill="black" d="M6 22h15v-2H6.012C5.55 19.988 5 19.805 5 19s.55-.988 1.012-1H21V4c0-1.103-.897-2-2-2H6c-1.206 0-3 .799-3 3v14c0 2.201 1.794 3 3 3M5 8V5c0-.805.55-.988 1-1h13v12H5z" />
                                        <path fill="black" d="M8 6h9v2H8z" /></svg>
                                    Lorem ipsum dolor sit amet
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

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
    modalElement.addEventListener('shown.bs.modal', function() {
        adjustBackdropForZoom(); // Panggil fungsi untuk menyesuaikan ukuran backdrop
    });

    // Menyesuaikan backdrop jika ada perubahan zoom atau resize
    window.addEventListener('resize', adjustBackdropForZoom);

</script>

@endsection
