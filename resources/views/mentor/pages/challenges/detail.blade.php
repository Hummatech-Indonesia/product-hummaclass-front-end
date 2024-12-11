@extends('mentor.layouts.app')
@section('style')
    <style>
        .bg-custom-primary {
            background-color: #9425FE;
        }
    </style>
@endsection
@section('content')
    <div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h5 class="fw-semibold mb-8">Tantangan</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted" href="javascript:void(0)">Tambah tantangan pada hummalass</a>
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-3">
                    <div class="text-center mb-n1">
                        <img src="{{ asset('admin/dist/images/backgrounds/track-bg.png') }}" width="70px" alt=""
                            class="img-fluid mb-n3" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-between mt-2">
        <div class="d-flex gap-3">
            <form action="" class="position-relative d-flex">
                <input type="text" class="form-control product-search px-4 ps-5" name="title"
                    value="{{ old('title', request('title')) }}" id="search" style="background-color: #fff"
                    placeholder="Search">
                <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
            </form>
        </div>

        <div class="d-flex flex-nowrap align-items-center gap-2">
            <a class="btn btn-primary rounded-2 d-flex gap-2 d-flex flex-nowrap align-items-center bg-custom-primary border-0"
                id="download-all-file"><i class="ti ti-download"></i> Download Semua
                File</a>
            <a href="{{ route('mentor.challenge.index') }}"
                class="btn btn-primary rounded-2 bg-warning border-0">Kembali</a>
        </div>
    </div>

    <div class="card w-100 mt-4 mb-4">
        <div class="p-4 d-flex align-items-stretch h-100">
            <div class="row align-items-center">
                <div class="col-1 d-flex align-items-center justify-content-center p-3 rounded-2"
                    style="width: fit-content;height: fit-content;color: var(--purple-primary);background: var(--light-purple)">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-puzzle">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path
                            d="M10 2a3 3 0 0 1 2.995 2.824l.005 .176v1h3a2 2 0 0 1 1.995 1.85l.005 .15v3h1a3 3 0 0 1 .176 5.995l-.176 .005h-1v3a2 2 0 0 1 -1.85 1.995l-.15 .005h-3a2 2 0 0 1 -1.995 -1.85l-.005 -.15v-1a1 1 0 0 0 -1.993 -.117l-.007 .117v1a2 2 0 0 1 -1.85 1.995l-.15 .005h-3a2 2 0 0 1 -1.995 -1.85l-.005 -.15v-3a2 2 0 0 1 1.85 -1.995l.15 -.005h1a1 1 0 0 0 .117 -1.993l-.117 -.007h-1a2 2 0 0 1 -1.995 -1.85l-.005 -.15v-3a2 2 0 0 1 1.85 -1.995l.15 -.005h3v-1a3 3 0 0 1 3 -3z">
                        </path>
                    </svg>
                </div>
                <div class="col-8 col-md-9 d-flex align-items-center">
                    <div>
                        <a href="javascript:void(0)" class="text-dark fs-4 link lh-sm" id="title"></a>
                        <h6 class="card-subtitle mt-2 mb-0 fw-normal text-muted" id="description"></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive rounded-2 mb-4">
                <table class="table border text-nowrap customize-table mb-0 align-middle">
                    <thead class="text-dark fs-4">
                        <tr class="">
                            <th class="fs-6 fw-semibold mb-0">
                                <input class="form-check-input" type="checkbox" id="check-all">
                            </th>
                            <th class="fs-4 fw-semibold mb-0">Nama Siswa</th>
                            <th class="fs-4 fw-semibold mb-0">File</th>
                            <th class="fs-4 fw-semibold mb-0">Status</th>
                            <th class="fs-4 fw-semibold mb-0">Point</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                        {{-- <tr class="fw-semibold">
                            <td>
                                <input class="form-check-input fs-5" type="checkbox" id="inlineCheckbox1" value="${index}">
                            </td>
                            <td style="max-width: 200px;">
                                <div class="row" style="flex-wrap: nowrap;justify-content: center;align-items: center;">
                                    <img src="{{ asset('admin/dist/images/profile/user-1.jpg') }}" alt=""
                                        class="img-fluid rounded-circle" style="width: 70px;">
                                    <div class="d-flex flex-column">
                                        <h6>${challenge.student_name}</h6>
                                        <p>${challenge.student_class}</p>
                                    </div>
                                </div>
                            </td>

                            <td><button class="btn bg-primary border-0 text-white" data-bs-toggle="modal"
                                    data-bs-target="#modalId"><svg xmlns="http://www.w3.org/2000/svg" class="ms-1"
                                        width="17" height="17" viewBox="0 0 24 24">
                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2">
                                            <path d="M3 13c3.6-8 14.4-8 18 0"></path>
                                            <path d="M12 17a3 3 0 1 1 0-6a3 3 0 0 1 0 6"></path>
                                        </g>
                                    </svg> Gambar</button></td>
                            <td>${challenge.status}</td>
                            <td><select class="form-select mr-sm-2" id="inlineFormCustomSelect"
                                    data-student="${challenge.student_id}">
                                    <option ${challenge.point==null ? 'selected' : '' }>Nilai</option>
                                    <option value="1" ${challenge.point==1 ? 'selected' : '' }>1</option>
                                    <option value="2" ${challenge.point==2 ? 'selected' : '' }>2</option>
                                    <option value="3" ${challenge.point==3 ? 'selected' : '' }>3</option>
                                </select></td>
                        </tr> --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center">
        <nav id="pagination"></nav>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {

            function studentList(index, value) {
                return `
                <tr class="fw-semibold">
                    <td>
                        <input class="form-check-input fs-5" type="checkbox" id="inlineCheckbox1" value="${index}">
                    </td>
                    <td style="max-width: 200px;">
                        <div class="row" style="flex-wrap: nowrap;justify-content: center;align-items: center;">
                            <img src="{{ asset('admin/dist/images/profile/user-1.jpg') }}" alt=""
                                class="img-fluid rounded-circle" style="width: 70px;">
                            <div class="d-flex flex-column">
                                <h5><b>${value.student_name}</b></h5>
                                <p>${value.student_class}</p>
                            </div>
                        </div>
                    </td>

                    <td><button class="btn btn-primary bg-custom-primary border-0 text-white" data-bs-toggle="modal"
                            data-bs-target="#modalId"><svg xmlns="http://www.w3.org/2000/svg" class="ms-1"
                                width="17" height="17" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2">
                                    <path d="M3 13c3.6-8 14.4-8 18 0"></path>
                                    <path d="M12 17a3 3 0 1 1 0-6a3 3 0 0 1 0 6"></path>
                                </g>
                            </svg> Gambar</button></td>
                    <td>${value.status == 'confirmed'?'sudah dinilai':'belum dinilai'}</td>
                    <td><select class="form-select mr-sm-2" id="inlineFormCustomSelect"
                            data-student="${value.student_id}">
                            <option ${value.point==null ? 'selected' : '' }>Nilai</option>
                            <option value="1" ${value.point==1 ? 'selected' : '' }>1</option>
                            <option value="2" ${value.point==2 ? 'selected' : '' }>2</option>
                            <option value="3" ${value.point==3 ? 'selected' : '' }>3</option>
                        </select></td>
                </tr>
                `
            }

            function getStudents(page, challengeId) {
                $.ajax({
                    type: "GET",
                    url: "{{ config('app.api_url') }}/api/submit-challenge/" + challengeId,
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                    },
                    data: {
                        search: $('#search').val()
                    },
                    dataType: "json",
                    success: function(response) {
                        $('#tableBody').empty();
                        $.each(response.data.data, function(indexInArray,
                            valueOfElement) {
                            $("#tableBody").append(studentList(indexInArray, valueOfElement));
                        });
                    },
                    error: function(xhr) {
                        Swal.fire({
                            title: "Terjadi Kesalahan!",
                            text: "Ada kesalahan saat mengambil data siswa.",
                            icon: "error"
                        });
                    }
                });
            }

            function init() {
                $.ajax({
                    type: "GET",
                    url: "{{ config('app.api_url') }}/api/challenges/{{ $slug }}",
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                    },
                    dataType: "json",
                    success: function(response) {
                        $('#title').text(response.data.title)
                        $('#description').html(response.data.description)

                        getStudents(1, response.data.id)
                    },
                    error: function(xhr) {
                        Swal.fire({
                            title: "Terjadi Kesalahan!",
                            text: "Ada kesalahan saat mengambil data tantangan.",
                            icon: "error"
                        });
                    }
                });
            }

            init();
        });
    </script>
@endsection
