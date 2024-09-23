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
                        <div class="courses__overview-wrap">
                            <ul class="courses__item-meta list-wrap">
                                <li class="courses__item-tag">
                                    <a href="http://127.0.0.1:9000/courses/courses" id="course_sub_category"></a>
                                </li>
                                <li class="avg-rating"><i class="fas fa-star"></i>(<span
                                        id="detail-rating">4.5</span>&nbsp;Review)
                                </li>
                            </ul>
                            <h3 class="fw-semibold" id="course_title"></h3>
                            <p id="course_sub_title"></p>
                            <div style="border-bottom: 1px solid #CCCCCC;"></div>
                            <h3 class="title mt-4">Konten</h3>
                            <div class="" id="content"></div>
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
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
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
                        text: "Tidak dapat memuat data materi.",
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

            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}" + "/api/sub-modules/detail/" + id,
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                success: function(response) {
                    console.log(response.data);

                    $('#course_sub_category').html(response.data.course_sub_category);
                    $('#course_sub_title').html(response.data.course_sub_title);
                    $('#content').html(response.data.content);
                    $('#course_title').html(response.data.course_title);
                },
                error: function(xhr) {
                    Swal.fire({
                        title: "Terjadi Kesalahan!",
                        text: "Tidak dapat memuat data materi.",
                        icon: "error"
                    });
                }
            });
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
