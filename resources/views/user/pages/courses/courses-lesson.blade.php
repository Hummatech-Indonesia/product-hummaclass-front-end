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
                                <a href="http://127.0.0.1:9000/courses/courses" id="detail-category">Development</a>
                            </li>
                            <li class="avg-rating"><i class="fas fa-star"></i>(<span id="detail-rating">4.5</span>&nbsp;Review)
                            </li>
                        </ul>
                        <h3 class="fw-semibold">Resolving Conflicts Between Designers And Engineers</h3>
                        <p>Dorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua Quis ipsum suspendisse ultrices gravida.
                            Risus commodo.</p>
                        <div style="border-bottom: 1px solid #CCCCCC;"></div>
                        <h3 class="title mt-4">Course Description</h3>
                        <p>Dorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua Quis ipsum suspendisse ultrices gravida.
                            Risus commodo viverra maecenas accumsan lacus vel facilisis.dolor sit amet,
                            consectetur adipiscing elited do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua.</p>
                        <h3 class="title">What you'll learn in this course?</h3>
                        <p>Dorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua Quis ipsum suspendisse ultrices gravida.
                            Risus commodo viverra maecenas accumsan.</p>
                        <ul class="about__info-list list-wrap">
                            <li class="about__info-list-item">
                                <i class="flaticon-angle-right"></i>
                                <p class="content">Work with color & Gradients & Grids</p>
                            </li>
                            <li class="about__info-list-item">
                                <i class="flaticon-angle-right"></i>
                                <p class="content">All the useful shortcuts</p>
                            </li>
                            <li class="about__info-list-item">
                                <i class="flaticon-angle-right"></i>
                                <p class="content">Be able to create Flyers, Brochures, Advertisements</p>
                            </li>
                            <li class="about__info-list-item">
                                <i class="flaticon-angle-right"></i>
                                <p class="content">How to work with Images & Text</p>
                            </li>
                        </ul>
                        <p class="last-info">Morem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua Quis ipsum suspendisse
                            ultrices gravida. Risus commodo viverra maecenas accumsan.Dorem ipsum dolor sit
                            amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magn.</p>
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
            type: "GET"
            , url: "{{ config('app.api_url') }}" + "/api/list-module/" + id
            , headers: {
                Authorization: 'Bearer ' + localStorage.getItem('hummaclass-token')
            }
            , dataType: "json"
            , success: function(response) {
                $.each(response.data, function(index, value) {
                    $('#content-course').append(contentCourse(index, value));
                });

            }
            , error: function(xhr) {
                Swal.fire({
                    title: "Terjadi Kesalahan!"
                    , text: "Tidak dapat memuat data materi."
                    , icon: "error"
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
            type: "GET"
            , url: "{{ config('app.api_url') }}" + "/api/sub-modules/" + id
            , headers: {
                Authorization: 'Bearer ' + localStorage.getItem('hummaclass-token')
            }
            , dataType: "json"
            , success: function(response) {
                console.log(response);

            }
            , error: function(xhr) {
                Swal.fire({
                    title: "Terjadi Kesalahan!"
                    , text: "Tidak dapat memuat data materi."
                    , icon: "error"
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
