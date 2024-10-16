

<div class="col-xl-3 col-lg-4" id="sidebar-tab-review" style="display: none">
    <div class="courses__details-sidebar">
        <h6 class="title">Statistik Siswa: </h6>
        <div class="text-center">
            <div class="author-two">
                <img src="{{ asset('assets/img/courses/course_author001.png') }}" style="width: 100px;object-fit:cover;" alt="img">
            </div>
            <h5 class="px-3 mt-2">Alfian Fahrul Ban Dalam</h5>
        </div>
        {{-- <div class="courses__details-video">
            <img src="{{ asset('assets/img/courses/course_thumb02.jpg') }}" alt="img">
        <a href="../../www.youtube.com/watch0b40.html?v=YwrHGratByU" class="popup-video"><i class="fas fa-play"></i></a>
    </div> --}}
    <div class="courses__cost-wrap">
        <span>Kursus:</span>
        <span class="text-white fs-5 fw-semibold">Belum Selesai</span>
    </div>


    <div class="pb-2" style="border-bottom: 1px solid #D9D9D9">
        <div class="d-flex justify-content-between">
            <span>Dibeli</span>
            <span>12 Sep 2024</span>
        </div>
    </div>
    <div class="pb-2 mt-2" style="border-bottom: 1px solid #D9D9D9">
        <div class="d-flex justify-content-between">
            <span>Selesai</span>
            <span>-</span>
        </div>
    </div>

    <div>
        <button class="outline-purple-primary w-100 mt-4">
            Lihat Materi
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12h18m0 0l-8.5-8.5M21 12l-8.5 8.5" /></svg>
        </button>
        <a href="{{ route('courses.print-certificate.index') }}" class="outline-purple-primary w-100 mt-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 256 256"><path fill="currentColor" d="M128 136a8 8 0 0 1-8 8H72a8 8 0 0 1 0-16h48a8 8 0 0 1 8 8m-8-40H72a8 8 0 0 0 0 16h48a8 8 0 0 0 0-16m112 65.47V224a8 8 0 0 1-12 7l-24-13.74L172 231a8 8 0 0 1-12-7v-24H40a16 16 0 0 1-16-16V56a16 16 0 0 1 16-16h176a16 16 0 0 1 16 16v30.53a51.88 51.88 0 0 1 0 74.94M160 184v-22.53A52 52 0 0 1 216 76V56H40v128Zm56-12a51.88 51.88 0 0 1-40 0v38.22l16-9.16a8 8 0 0 1 7.94 0l16 9.16Zm16-48a36 36 0 1 0-36 36a36 36 0 0 0 36-36"/></svg>
            Unduh Sertifikat
        </a>
        <button class="btn btn-primary mt-3 w-100" data-bs-toggle="modal" data-bs-target="#modal-create-review">Review Kursus</button>
    </div>
    

    <div class="courses__information-wrap mt-5">
        <h5 class="title"><b>Kursus ini mencakup:</b></h5>
        <ul class="list-wrap">
            <li class="fs-9 text-dark">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 256 256"><path fill="currentColor" d="m164.44 105.34l-48-32A8 8 0 0 0 104 80v64a8 8 0 0 0 12.44 6.66l48-32a8 8 0 0 0 0-13.32M120 129.05V95l25.58 17ZM216 40H40a16 16 0 0 0-16 16v112a16 16 0 0 0 16 16h176a16 16 0 0 0 16-16V56a16 16 0 0 0-16-16m0 128H40V56h176zm16 40a8 8 0 0 1-8 8H32a8 8 0 0 1 0-16h192a8 8 0 0 1 8 8"/></svg>
                Video atas permintaan 43 jam
            </li>
            <li class="fs-9 text-dark">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8zm4 18H6V4h7v5h5z"/></svg>
                10 Artikel
            </li>
            <li class="fs-9 text-dark">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 16 16"><path fill="none" stroke="currentColor" d="M9.5 13.5h3v-3h.5a1.5 1.5 0 0 0 0-3h-.5V4h-3m0 9.5H9m.5 0a2 2 0 1 0-4 0m4-9.5H9m.5 0a2 2 0 1 0-4 0m0 0h-3v2.5H4a1.5 1.5 0 1 1 0 3H2.5v4h3m0-9.5H6m-.5 9.5H6"/></svg>
                Quizzes
            </li>
            <li class="fs-9 text-dark">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 256 256"><path fill="currentColor" d="M248 128a56 56 0 0 1-95.6 39.6l-.33-.35l-59.95-67.7a40 40 0 1 0 0 56.9l8.52-9.62a8 8 0 1 1 12 10.61l-8.69 9.81l-.33.35a56 56 0 1 1 0-79.2l.33.35l59.95 67.7a40 40 0 1 0 0-56.9l-8.52 9.62a8 8 0 1 1-12-10.61l8.69-9.81l.33-.35A56 56 0 0 1 248 128"/></svg>
                Akses penuh seumur hidup
            </li>
            <li class="fs-9 text-dark">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 256 256"><path fill="currentColor" d="M126 136a6 6 0 0 1-6 6H72a6 6 0 0 1 0-12h48a6 6 0 0 1 6 6m-6-38H72a6 6 0 0 0 0 12h48a6 6 0 0 0 0-12m110 62.62V224a6 6 0 0 1-9 5.21l-25-14.3l-25 14.3a6 6 0 0 1-9-5.21v-26H40a14 14 0 0 1-14-14V56a14 14 0 0 1 14-14h176a14 14 0 0 1 14 14v31.38a49.91 49.91 0 0 1 0 73.24M196 86a38 38 0 1 0 38 38a38 38 0 0 0-38-38m-34 100v-25.38a50 50 0 0 1 56-81.51V56a2 2 0 0 0-2-2H40a2 2 0 0 0-2 2v128a2 2 0 0 0 2 2Zm56-17.11a49.91 49.91 0 0 1-44 0v44.77l19-10.87a6 6 0 0 1 6 0l19 10.87Z"/></svg>
                Sertifikat penyelesaian
            </li>
        </ul>
    </div>
</div>
</div>
