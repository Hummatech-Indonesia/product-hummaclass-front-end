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
                        <div class="accordion">
                            <div id="content-course">

                            </div>
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
                        @if (request('item') == 'quiz')
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
                                    <p>
                                        Anda akan menemui ujian (quiz, exam, atau ujian akhir) seperti ini untuk memastikan
                                        Anda sudah mengerti dan memahami materi pembelajaran yang telah diberikan. Pada
                                        ujian akan tersedia beberapa pertanyaan dengan opsi jawaban pilihan ganda.
                                    </p>
                                    <p>
                                        Ujian memiliki standar minimum kelulusan. Jika tidak memenuhi standar nilai minimum,
                                        maka Anda wajib mengulang kembali sampai memenuhi standar tersebut. Perhatikan bahwa
                                        jika Anda mau mengulang ujian, akan ada waktu tunggu / jeda yang Anda harus lewati.
                                        Setelahnya, Anda dapat mengambil kembali ujian yang baru. Waktu tunggu ini
                                        berbeda-beda, mulai dari 1 menit hingga berhari-hari. Jadi agar waktu Anda lebih
                                        efisien, pastikan Anda sudah siap secara materi, sebelum mengambil ujian.
                                    </p>
                                    <p>
                                        Setiap ujian juga memiliki durasi waktu yang berbeda. Anda wajib menyelesaikan
                                        seluruh pertanyaan pada durasi waktu yang telah diberikan. Jika waktu yang diberikan
                                        habis, maka ujian akan otomatis selesai. Sistem hanya akan menilai pertanyaan yang
                                        sudah terjawab. Jadi, usahakan Anda telah menjawab sebanyak mungkin pertanyaan
                                        hingga tuntas, sebelum durasi waktu habis.
                                    </p>
                                    <p>
                                        Mari kita coba fitur ujian pada Dicoding Academy. Jika sudah siap mencoba, klik
                                        tombol Ambil di bawah. Anda hanya bisa lanjut ke modul pelajaran berikutnya jika
                                        telah lulus dari ujian ini.
                                    </p>

                                    <ul style="list-style: disc">
                                        <li>Jumlah Soal : 5</li>
                                        <li>Syarat Nilai Kelulusan : 80</li>
                                        <li>Durasi Ujian : 5 Menit</li>
                                        <li>Waktu tunggu ujian ulang ; 1 menit</li>
                                    </ul>
                                    <div class="text-end mt-3 mb-4">
                                        <a href="{{ route('quetion-quiz.index') }}" class="btn">Mulai Ujian</a>
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
                        @elseif (request('item') == 'tugas-akhir')
                            <h3 class="fw-semibold">Tugas Akhir</h3>
                            <p>Ini adalah deskripsi tugas akhir. Pastikan untuk menyelesaikan tugas ini sebelum deadline.
                            </p>
                            <div class="task-details">
                                <p><strong>Deadline:</strong> 30 September 2024</p>
                                <p><strong>File Submission:</strong> Upload tugas dalam format PDF.</p>
                            </div>
                        @else
                            <div class="lesson__video-wrap mb-0">
                                <div class="lesson__video-wrap-top">
                                    <div class="lesson__video-wrap-top-left">
                                        <a href="#"><i class="flaticon-arrow-right"></i></a>
                                        <span id="title_course"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="card p-5 border-0">
                                    <h3 class="fw-semibold" id="course_title"></h3>
                                    <p id="course_sub_title"></p>
                                    <div style="border-bottom: 1px solid #CCCCCC;"></div>
                                    <h4 class="fw-semibold mt-3">Konten</h4>
                                    <div class="" id="content">

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
                        @endif
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
                                    <span class="ps-2">${subModule.title}</span>
                                </a>
                            </li>`;
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

                    $('#course_sub_title').html(response.data.sub_title);
                    $('#content').html(response.data.content);
                    $('#title_course').html(response.data.course_title)
                    $('#course_title').html(response.data.title);
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
