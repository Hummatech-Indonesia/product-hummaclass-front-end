@extends('mentor.layouts.app')

@section('style')
    <style>
        .btn-close {
            --bs-btn-close-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/%3e%3c/svg%3e");
            background: transparent var(--bs-btn-close-bg) center/1em auto no-repeat;
        }

        .info-card {
            background-color: #fff7eb;
            border: 1px solid #ffdca9;
            border-radius: 8px;
            padding: 20px;
        }

        .info-card .info-icon {
            background-color: #ffdca9;
            color: #ff8800;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
        }

        .info-card .info-header {
            font-weight: bold;
            color: #ff8800;
        }

        .bg-primary {
            background-color: #9425FE !important;
        }

        .text-bg-purple {
            color: var(--purple-primary) !important;
            background: var(--purple-light-primary) !important;
        }



        .card-challenge {
            height: 314px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .card-challenge .card-title {
            min-height: 40px;
            display: flex;
            flex-direction: row;
            align-items: center;
            max-width: 260px;
            /* Vertikal */
            /* justify-content: center; */
            /* Opsional: jika ingin teks berada di tengah horizontal */
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .card-challenge .card-body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .card-challenge .card-body p {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            /* Batas 3 baris untuk deskripsi */
            -webkit-box-orient: vertical;
        }

        .bg-primary {
            background-color: #9425FE !important;
        }

        /* .card-challenge .card .btn {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                align-self: stretch;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                } */

        p,
        h1,
        h2,
        h3,
        h4,
        h5 {
            padding: 0;
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
                                <a class="text-muted " href="index-2.html">Daftar Tantangan</a>
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
                    value="{{ old('title', request('title')) }}" id="search-name" style="background-color: #fff"
                    placeholder="Search">
                <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
            </form>

            {{-- <form action="" class="position-relative d-flex">
                <input type="text" class="form-control product-search px-4 ps-5" name="title"
                    value="{{ old('title', request('title')) }}" id="search-name" style="background-color: #fff"
                    placeholder="Search">
                <button class="btn btn-primary d-flex justify-content-center align-items-center bg-white border-1"
                    fdprocessedid="w216xn" style="
                    border-color: #dfe5ef;
                ">
                    <i class="ti ti-sort-ascending-letters fs-6 text-dark"></i>
                </button>
            </form> --}}
        </div>

        <div class="d-flex flex-nowrap align-items-center gap-2">
            <a class="btn btn-primary rounded-2 d-flex gap-2 d-flex flex-nowrap align-items-center bg-primary border-0"
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
                    </tbody>
                </table>
            </div>
            <button id="submit-btn" class="btn text-white"
                style="    background: var(--purple-primary);
    width: 100px;
    margin-left: auto;
    display: block;">Kirim</button>
        </div>
    </div>

    <div class="d-flex justify-content-center">
        <nav id="pagination"></nav>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalId" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-fullscreen" role="document">
            <div class="modal-content" style="background: border-box;">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/img/no-image/no-image.jpg') }}" alt="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            let challengeId;
            $('#check-all').change(function(e) {
                e.preventDefault();
                let isChecked = $(this).is(':checked');

                if (isChecked) {
                    $('.form-check-input').prop('checked', true);
                } else {
                    $('.form-check-input').prop('checked', false);
                }
            });

            $.ajax({
                type: "get",
                url: "{{ config('app.api_url') }}/api/challenges/{{ $slug }}",
                headers: {
                    Authorization: "Bearer {{ session('hummaclass-token') }}"
                },
                dataType: "json",
                success: function(response) {
                    challengeId = response.data.id;
                    let pointSubmit = [];
                    $('#download-all-file').attr("href",
                        "{{ config('app.api_url') }}/api/challenge/download-zip/" + response.data.id
                    );
                    for (const key in response.data) {
                        if (Object.prototype.hasOwnProperty.call(response.data, key)) {
                            const element = response.data[key];
                            $(`#${key}`).text(element)
                        }
                    }

                    $.ajax({
                        type: "get",
                        url: "{{ config('app.api_url') }}/api/submit-challenge/" + response.data
                            .id,
                        headers: {
                            Authorization: "Bearer {{ session('hummaclass-token') }}"
                        },
                        dataType: "json",
                        success: function(response) {
                            let challengesSubmit = '';
                            response.data.data.forEach((challenge, index) => {
                                challengesSubmit += `
                            <tr class="fw-semibold">
                                <td>
                                    <input class="form-check-input fs-5" type="checkbox" id="inlineCheckbox1"
                                        value="${index}">
                                </td>
                                <td style="max-width: 200px;">
                                    <div class="row"
                                        style="flex-wrap: nowrap;justify-content: center;align-items: center;">
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
                                <td>${challenge.status == 'confirmed' ? 'dinilai' : 'belum dinilai'}</td>
                                <td><select class="form-select mr-sm-2" id="inlineFormCustomSelect" data-student="${challenge.student_id}">
                                        <option ${challenge.point == null?'selected':''}>Nilai</option>
                                        <option value="1" ${challenge.point == 1?'selected':''}>1</option>
                                        <option value="2" ${challenge.point == 2?'selected':''}>2</option>
                                        <option value="3" ${challenge.point == 3?'selected':''}>3</option>
                                    </select></td>
                            </tr>`

                                pointSubmit.push({
                                    student_id: challenge.student_id,
                                    point: challenge.point
                                });
                            });

                            $('#tableBody').append(challengesSubmit);

                            $('select').change(function(e) {
                                e.preventDefault();

                                pointSubmit.find(item => item.student_id == $(this)
                                    .data('student')).point = $(this).val();

                                console.log(pointSubmit);

                            });

                            $('#submit-btn').click(function(e) {
                                e.preventDefault();

                                $.ajax({
                                    type: "POST",
                                    url: "{{ config('app.api_url') }}/api/mentor/challenge-add-point/" +
                                        challengeId + "?_method=PUT",
                                    headers: {
                                        Authorization: "Bearer {{ session('hummaclass-token') }}"
                                    },
                                    data: {
                                        challenge_submit: pointSubmit
                                    },
                                    success: function(response) {
                                        Swal.fire({
                                            title: "Sukses",
                                            text: "Berhasil menilai jawaban.",
                                            icon: "success"
                                        }).then(() => {
                                            window.location
                                                .reload();
                                        });
                                    },
                                    error: function(xhr) {
                                        Swal.fire({
                                            title: "Terjadi Kesalahan!",
                                            text: xhr
                                                .responseJSON
                                                .meta.message,
                                            icon: "error"
                                        });
                                    }
                                });
                            });
                        }
                    });
                }
            });
        });
    </script>
@endsection
