@extends('admin.layouts.app')

@section('content')
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="row">
                <div class="col-md-2 text-center">
                    <img src="{{ asset('assets/img/logo/logo-class-industri.png') }}" alt="School Logo" class="img-fluid mb-2">
                </div>
                <div class="col-md-8">
                    <h5 class="card-title">SMK NEGERI 1 KEPANJEN</h5>
                    <span class="badge bg-primary">Negeri</span>
                </div>
                <div class="col-md-2 text-end">
                    <p class="mb-0">Tahun Ajaran</p>
                    <p class="fw-bold">2023/2024</p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <div class="d-flex justify-content-between mb-3"><strong>Kepala Sekolah:</strong><span> Lasmono S.Pd.
                            Mm</span>
                    </div>
                    <div class="d-flex justify-content-between mb-3"><strong>NPSN:</strong><span> 123123123</span></div>
                    <div class="d-flex justify-content-between mb-3"><strong>Nomor Telepon:</strong><span>
                            082229414949</span></div>
                    <div class="d-flex justify-content-between mb-3"><strong>Email:</strong><span>
                            smkn1kepanjen@gmail.com</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex justify-content-between mb-3"><strong>Jenjang Pendidikan:</strong><span>
                            SMA/SMK/MA</span>
                    </div>
                    <div class="d-flex justify-content-between mb-3"><strong>Akreditasi:</strong><span> C</span></div>
                    <div class="d-flex justify-content-between mb-3"><strong>Deskripsi:</strong><span> -</span></div>
                    <div class="d-flex justify-content-between mb-3"><strong>Alamat:</strong><span class="text-end"> Jl.
                            Ngadiluwih,
                            Kedungpedaringan, Kec. Kepanjen, Kabupaten Malang, Jawa Timur 65163, Indonesia</span></div>
                </div>
            </div>
        </div>
    </div>

    <div class="card p-3">
        <div>
            <ul class="nav nav-tabs d-flex justify-content-between" role="tablist">
                <div class="d-flex">
                    <li class="nav-item home" role="presentation">
                        <a class="nav-link active" data-bs-toggle="tab" href="#classrooms" role="tab"
                            aria-selected="true">
                            <span>Kelas</span>
                        </a>
                    </li>
                    <li class="nav-item list" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#teachers" role="tab" aria-selected="false"
                            tabindex="-1">
                            <span>Guru</span>
                        </a>
                    </li>
                    <li class="nav-item test" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#students" role="tab" aria-selected="false"
                            tabindex="-1">
                            <span>Semua Siswa</span>
                        </a>
                    </li>
                </div>
            </ul>
        </div>
    </div>
    <div class="tab-content" id="myTabContent">
        @include('Kelas-Industri.admin.school.details.panes.classroom')
        @include('Kelas-Industri.admin.school.details.panes.teacher')
        @include('Kelas-Industri.admin.school.details.panes.student')
    </div>
@endsection

@section('script')
    <script>
        $.ajax({
            type: "get",
            url: "{{ config('app.api_url') }}/api/schools/" + '{{ $slug }}',
            dataType: "json",
            success: function(response) {
                console.log(response);
            }
        });

        function user(index, value) {
            var url = "{{ config('app.api_url') }}";
            return `
                        <tr class="fw-semibold">
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/img/no-image/no-profile.jpeg') }}"
                                        class="rounded-circle me-2 user-profile" style="object-fit: cover" width="40"
                                        height="40" alt="">
                                    <div class="ms-3">
                                        <h6 class="fs-4 fw-semibold mb-0">Nama</h6>
                                        <span class="fw-normal">Email</span>
                                    </div>
                                </div>
                            </td>
                            <td>Laki</td>
                            <td>Kursus</td>
                            <td>
                                <div class="d-flex gap-3">
                                    <a href="{{ route('admin.users.show', '') }}/e" class="btn px-2 text-white"
                                        style="background-color: #9425FE">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24">
                                            <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2">
                                                <path d="M3 13c3.6-8 14.4-8 18 0" />
                                                <path d="M12 17a3 3 0 1 1 0-6a3 3 0 0 1 0 6" />
                                            </g>
                                        </svg>
                                    </a>
                                    <a href="/admin/courses/lorem-ipsum/edit" class="btn btn-sm btn-warning" style="width: 15%">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="25" viewBox="0 0 48 48">
                                        <path fill="currentColor" d="M32.206 6.025a6.907 6.907 0 1 1 9.768 9.767L39.77 18L30 8.23zM28.233 10L8.038 30.197a6 6 0 0 0-1.572 2.758L4.039 42.44a1.25 1.25 0 0 0 1.52 1.52l9.487-2.424a6 6 0 0 0 2.76-1.572l20.195-20.198z">
                                        </path>
                                    </svg>
                                </a>
                                <button data-id="78216ca2-d422-3c8b-bcc2-60945b4eb294" class="btn btn-sm btn-danger text-white btn-delete" style="width: 15%" fdprocessedid="athmbv">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M4 7l16 0"></path>
                                        <path d="M10 11l0 6"></path>
                                        <path d="M14 11l0 6"></path>
                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                    </svg>
                                </button>
                                </div>
                            </td>
                        </tr>
            `
        }

        for (let index = 0; index < 10; index++) {
            $('#tableBody').append(user(index, 3));
        }
        for (let index = 0; index < 10; index++) {
            $('#table-user-classroom').append(user(index, 3));
        }
    </script>
@endsection
