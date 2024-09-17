@extends('user.layouts.app')

@section('style')
    <style>
        :root {
            --tg-theme-primary: #9425FE;
        }

        .lesson__content .course-item-link .item-name::before {
            background-image: none;
            width: 0;
        }
    </style>
@endsection

@section('content')
    <!-- lesson-area -->
    <section class="lesson__area section-pb-120">
        <div class="container-fluid p-0">
            <div class="row gx-2">
                <div class="col-xl-3 col-lg-4">
                    <div class="lesson__content">
                        <h2 class="title">Konten Kursus</h2>
                        <div class="accordion" id="content-course">

                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8">
                    {{-- <div class="lesson__video-wrap">
                <div class="lesson__video-wrap-top">
                    <div class="lesson__video-wrap-top-left">
                        <a href="#"><i class="flaticon-arrow-right"></i></a>
                        <span>The Complete Design Course: From Zero to Expert!</span>
                    </div>
                    <div class="lesson__video-wrap-top-right">
                        <a href="#"><i class="fas fa-times"></i></a>
                    </div>
                </div>
                <video id="player" playsinline controls data-poster="assets/img/bg/video_bg.webp">
                    <source src="assets/video/video.mp4" type="video/mp4" />
                    <source src="https://html.themegenix.com/path/to/video.webm" type="video/webm" />
                </video>
                <div class="lesson__next-prev-button">
                    <button class="prev-button" title="Create a Simple React App"><i class="flaticon-arrow-right"></i></button>
                    <button class="next-button" title="React for the Rest of us"><i class="flaticon-arrow-right"></i></button>
                </div>
            </div> --}}
                    <div class="courses__details-content lesson__details-content">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="overview-tab" data-bs-toggle="tab"
                                    data-bs-target="#overview-tab-pane" type="button" role="tab"
                                    aria-controls="overview-tab-pane" aria-selected="true">Deskripsi</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="instructors-tab" data-bs-toggle="tab"
                                    data-bs-target="#instructors-tab-pane" type="button" role="tab"
                                    aria-controls="instructors-tab-pane" aria-selected="false">Instruktur</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="reviews-tab" data-bs-toggle="tab"
                                    data-bs-target="#reviews-tab-pane" type="button" role="tab"
                                    aria-controls="reviews-tab-pane" aria-selected="false">Reviews</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            @include('user.pages.courses.tab-content.description')
                            @include('user.pages.courses.tab-content.instructor')
                            @include('user.pages.courses.tab-content.review')

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- lesson-area-end -->
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            let photo;
            var id = "{{ $id }}";

            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}" + "/api/list-module/" + id,
                headers: {
                    Authorization: 'Bearer ' + localStorage.getItem('hummaclass-token')
                },
                dataType: "json",
                success: function(response) {
                    $.each(response.data, function(index, value) {
                        $('#content-course').append(contentCourse(index, value));
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

            function contentCourse(index, value) {
                const subModules = value.sub_modules.map(subModule => {
                    return `<li class="course-item open-item">
                               <a href="{{ route('courses.course-lesson.index', ['']) }}/${subModule.slug}" class="">
                                    <span>${subModule.title}</span>
                                </a>
                            </li>`;
                }).join('');
                return `
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-${index}">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse-${index}" aria-expanded="true" aria-controls="collapse-${index}">
                                ${value.title}
                            </button>
                            </h2>
                        <div id="collapse-${index}" class="accordion-collapse collapse show" aria-labelledby="heading-${index}"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul class="list-wrap" id="list-warp">
                                    ${subModules}
                                </ul>
                            </div>
                        </div>
                    </div>
                `;
            }
        });
    </script>
    {{-- <script>
    function changeContent(title, videoSrc) {
        // Mengubah judul video
        document.querySelector('.lesson__video-wrap-top-left span').innerText = title;

        // Mengubah sumber video
        const video = document.getElementById('player');
        video.querySelector('source').src = videoSrc;
        video.load(); // Reload video agar sumber baru diterapkan

        // Tambahkan aksi lain yang diperlukan (misalnya mengganti teks deskripsi atau lainnya)
    }

</script> --}}

    {{-- <script>
        function changeContent(title, videoSrc, description) {
            // Mengubah judul tugas
            document.getElementById('course-title').textContent = title;

            // Mengubah deskripsi tugas
            document.getElementById('course-description').textContent = description;

            // Mengubah sumber video
            const videoElement = document.getElementById('player');
            const videoSource = document.getElementById('videoSource');

            videoSource.src = videoSrc; // Mengubah sumber video
            videoElement.load(); // Memuat ulang video dengan sumber yang baru
        }
    </script> --}}
@endsection
