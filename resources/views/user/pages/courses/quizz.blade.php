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
    <section class="lesson__area section-pb-0">
        <div class="container-fluid p-0">
            <div class="row gx-0">
                <div class="col-xl-3 col-lg-4">
                    <div class="lesson__content">
                        <h2 class="title">Konten Kursus</h2>
                        <div id="content-course">

                        </div>
                        <div class="accordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Final Audit
                                        <span>1/2</span>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample" style="">
                                    <div class="accordion-body">
                                        <ul class="list-wrap">
                                            <li class="course-item open-item">
                                                <form action="{{ url()->current() }}" method="GET">
                                                    <a href="{{ url()->current() }}?item=quiz" class="ps-2">
                                                        Quiz
                                                    </a>
                                                </form>
                                            </li>
                                            <li class="course-item">
                                                <form action="{{ url()->current() }}" method="GET">
                                                    {{-- <a href="{{ url()->current() }}?item=tugas-akhir" class="ps-2">
                                                Tugas Akhir
                                                </a> --}}
                                                    <a href="#" class="course-item-link">
                                                        <span class="item-name">Tugas Akhir</span>
                                                        <div class="course-item-meta">
                                                            <span class="item-meta course-item-status">
                                                                <img src="{{ asset('assets/img/icons/lock.svg') }}"
                                                                    alt="icon">
                                                            </span>
                                                        </div>
                                                    </a>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-xl-9 col-lg-8" style="background-color: #F1F1F1;">
                    <div class="courses__details-content lesson__details-content mx-0">
                        <div class="lesson__video-wrap mb-0">
                            <div class="lesson__video-wrap-top">
                                <div class="lesson__video-wrap-top-left">
                                    <a href="#"><i class="flaticon-arrow-right"></i></a>
                                    <span>Resolving Conflicts Between Designers And Engineers</span>
                                </div>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="card p-5 border-0">
                                <h4 class="fw-semibold">Aturan</h4>
                                <div class="" id="rules">

                                </div>

                                <ul style="list-style: disc">
                                    <li>Jumlah Soal : <span id="total_question"></span></li>
                                    <li>Syarat Nilai Kelulusan : <span id="minimum_score"></span></li>
                                    <li>Durasi Ujian : <span id="duration"></span> Menit</li>
                                    <li>Waktu tunggu ujian ulang: <span id="retry_delay"></span> menit</li>
                                </ul>

                                <div class="text-end mt-3 mb-4">
                                    <a href="" id="start_quiz" class="btn">Mulai
                                        Ujian</a>
                                </div>
                                <div class="table-responsive mt-3">
                                    <table id="demo-foo-addrow"
                                        class="table table-striped table-bordered m-t-30 text-center table-hover contact-list footable footable-5 footable-paging footable-paging-center breakpoint-lg"
                                        data-paging="true" data-paging-size="7" style="">
                                        <thead>
                                            <tr class="footable-header">
                                                <th class="text-white"
                                                    style="display: table-cell;background-color:#9425FE;">
                                                    Tanggal</th>
                                                <th class="text-white"
                                                    style="display: table-cell;background-color:#9425FE;">
                                                    Nilai</th>
                                                <th class="text-white"
                                                    style="display: table-cell;background-color:#9425FE;">
                                                    Status</th>
                                                <th class="text-white"
                                                    style="display: table-cell;background-color:#9425FE;">
                                                    Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="user-quizzes">
                                            {{-- <tr>
                                                <td>8 Des 2024 07:30</td>
                                                <td>100</td>
                                                <td><span class="bg-success p-2 text-white rounded text-center">Lulus</span></td>
                                                <td><button class="btn btn-primary">Lihat Detail</button></td>
                                            </tr> --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="footer__bottom" style="background-color: #FFFFFF;">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="d-flex justify-content-between">
                                        <a href="" class="text-dark fw-bolder fs-6">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20"
                                                viewBox="0 0 16 9">
                                                <path fill="currentColor"
                                                    d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5" />
                                                <path fill="currentColor"
                                                    d="M6 8.5a.47.47 0 0 1-.35-.15l-3.5-3.5c-.2-.2-.2-.51 0-.71L5.65.65c.2-.2.51-.2.71 0s.2.51 0 .71L3.21 4.51l3.15 3.15c.2.2.2.51 0 .71c-.1.1-.23.15-.35.15Z" />
                                            </svg>
                                            Kembali
                                        </a>
                                        <a href="" class="text-dark fw-bolder fs-6">
                                            Selanjutnya
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20"
                                                viewBox="0 0 16 9">
                                                <path fill="currentColor"
                                                    d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5" />
                                                <path fill="currentColor"
                                                    d="M10 8.5a.47.47 0 0 1-.35-.15c-.2-.2-.2-.51 0-.71l3.15-3.15l-3.15-3.15c-.2-.2-.2-.51 0-.71s.51-.2.71 0l3.5 3.5c.2.2.2.51 0 .71l-3.5 3.5c-.1.1-.23.15-.35.15Z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
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

            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}" + "/api/user-quizzes",
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                success: function(response) {
                    $.each(response.data, function(index, value) {
                        $('#user-quizzes').append(
                            `
                            <tr>
                                <td>${value.created}</td>
                                <td>${value.score}</td>
                                <td><span class="bg-success p-2 text-white rounded text-center">${value.status}</span></td>
                                <td><a class="btn btn-primary" href="">Lihat Detail</a></td>
                            </tr> 
                            `
                        );
                    });
                }
            });

            let photo;
            var id = "{{ $id }}";

            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}" + "/api/list-module/detail/" + id,
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
                    console.error("Error loading module details.");
                }
            });

            function contentCourse(index, value) {
                var slug = "{{ $id }}";
                const subModules = value.sub_modules.map(subModule => {
                    return `<li class="course-item">
                        <a href="{{ route('courses.course-lesson.index', ['']) }}/${subModule.slug}" class="d-flex justify-content-between" style="color: black">
                            <span class="ps-2">${subModule.title}</span>
                        </a>
                    </li>`;
                }).join('');
                // console.log(slug);


                const quizzes = value.quizzes.map(quiz => {
                    if (quiz.module_slug == slug) {
                        return `<li class="course-item open-item">
                                   <a href="{{ route('courses.quizz.index', ['']) }}/${quiz.module_slug}" class="d-flex justify-content-between">
                                        <span class="ps-2">Quiz</span>
                                        <span class="ps-2">${quiz.total_question} Soal</span>
                                    </a>
                                </li>`;
                    } else {
                        return `<li class="course-item">
                                    <a class="d-flex justify-content-between" style="color: black">
                                        <span class="ps-2">Quiz</span>
                                        <span class="ps-2">${quiz.total_question} Soalk</span>
                                    </a>
                                </li>`;
                    }
                }).join('');

                return `
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading-${index}">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse-${index}" aria-expanded="false" aria-controls="collapse-${index}">
                        ${value.title}
                    </button>
                </h2>
                <div id="collapse-${index}" class="accordion-collapse collapse" aria-labelledby="heading-${index}"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul class="list-wrap" id="list-wrap">
                            ${subModules}
                            ${quizzes}
                        </ul>
                    </div>
                </div>
            </div>
        `;
            }

            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}" + "/api/quizzes/" + id,
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                success: function(response) {
                    $('#total_question').html(response.data.total_question);
                    $('#duration').html(response.data.duration);
                    $('#rules').html(response.data.rules);
                    $('#retry_delay').html(response.data.retry_delay);
                    $('#minimum_score').html(response.data.minimum_score);
                    var url = `{{ route('quetion-quiz.index', ['']) }}/${response.data.id}`;
                    $('#start_quiz').attr('href', url);
                },
                error: function(xhr) {
                    if (xhr.status == 403) {
                        Swal.fire({
                            title: "Terjadi Kesalahan!",
                            text: xhr.responseJSON.meta.message,
                            icon: "error"
                        }).then(() => {
                            window.history.back();
                        });
                    } else {
                        Swal.fire({
                            title: "Terjadi Kesalahan!",
                            text: "Tidak dapat memuat data materi.",
                            icon: "error"
                        }).then(() => {
                            window.history.back();
                        });
                    }
                }
            });
        });
    </script>
@endsection
