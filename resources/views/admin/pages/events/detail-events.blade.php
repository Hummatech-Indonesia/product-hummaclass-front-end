@extends('admin.layouts.app')

@section('style')
    <style>
        .card.bg-light-info {
            background-color: #E8DEF3 !important;
        }

        .btn.btn-primary {
            background-color: var(--purple-primary) !important;
        }

        .nav-link.active {
            background-color: var(--purple-primary) !important;
        }

        .text-primary {
            color: var(--purple-primary) !important;
        }

        .btn-close {
            --bs-btn-close-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/%3e%3c/svg%3e");
            background: transparent var(--bs-btn-close-bg) center/1em auto no-repeat;
        }

        .icon {
            transition: transform 0.3s ease;
        }

        .toggle-btn[aria-expanded="true"] .icon {
            transform: rotate(180deg);
        }

        .form-check-input:checked {
            background-color: #9425FE;
            border-color: #9425FE;
        }
    </style>
@endsection
@section('content')
    <div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h5 class="fw-semibold mb-8">Event</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted " href="index-2.html">Daftar event pada hummaclass</a>
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
    <div class="card p-3">
        <div>
            <ul class="nav nav-tabs d-flex justify-content-between" role="tablist">
                <div class="d-flex">
                    <li class="nav-item home">
                        <a class="nav-link active" data-bs-toggle="tab" href="#detail" role="tab">
                            <span>Detail</span>
                        </a>
                    </li>
                    <li class="nav-item list">
                        <a class="nav-link" data-bs-toggle="tab" href="#participant" role="tab">
                            <span>Peserta</span>
                        </a>
                    </li>
                    <li class="nav-item test">
                        <a class="nav-link" data-bs-toggle="tab" href="#attendance" role="tab">
                            <span>Kehadiran</span>
                        </a>
                    </li>
                </div>
                <div class="d-flex justify-content-end mb-3 gap-2">
                    <a href="" class="btn" style="background: #E8E8E8;">
                        <i class="ti ti-arrow-left"></i>
                        <span>Kembali</span>
                    </a>

                    <a class="btn text-white" style="background-color: var(--purple-primary)" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2">
                                <path d="M15 12a3 3 0 1 1-6 0a3 3 0 0 1 6 0" />
                                <path
                                    d="M2 12c1.6-4.097 5.336-7 10-7s8.4 2.903 10 7c-1.6 4.097-5.336 7-10 7s-8.4-2.903-10-7" />
                            </g>
                        </svg>
                        Lihat Preview
                    </a>
                </div>
            </ul>
        </div>
    </div>

    <div class="tab-content">
        <div class="tab-pane active" id="detail" role="tabpanel">
            @include('admin.pages.events.panes.tab-detail')
        </div>
        <div class="tab-pane" id="participant" role="tabpanel">
            <div class="row" id="list-participant">
            </div>
        </div>
        <div class="tab-pane" id="attendance" role="tabpanel">
            <div class="card w-100 position-relative overflow-hidden">
                <div class="px-4 py-3 border-bottom">
                    <h5 class="card-title fw-semibold mb-0 lh-sm">Basic Table</h5>
                </div>
                <div class="card-body p-4">
                    <div class="table-responsive rounded-2 mb-4">
                        <table class="table border text-nowrap customize-table mb-0 align-middle" id="attendance-list">
                            <thead class="text-dark fs-4">
                                <tr>
                                    <th>
                                        <h6 class="fs-4 fw-semibold mb-0">Hari</h6>
                                    </th>
                                    <th>
                                        <h6 class="fs-4 fw-semibold mb-0">Tanggal</h6>
                                    </th>
                                    <th>
                                        <h6 class="fs-4 fw-semibold mb-0">Waktu</h6>
                                    </th>
                                    <th>
                                        <h6 class="fs-4 fw-semibold mb-0">Status</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            var id = "{{ $id }}";

            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}" + "/api/events/" + id,
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                success: function(response) {

                    $('#detail-title').html(response.data.title);
                    // $('#detail-start-date').html(response.data.start_date);
                    $('#detail-start-date').html(response.data.start_date);
                    $('#detail-start-date').html(response.data.start_date);
                    $('#detail-location').html(response.data.location);
                    $('#detail-capacity').html(response.data.capacity);
                    $('#detail-has-certificate').html(response.data.has_certificate);
                    $('#detail-price').html(formatRupiah(response.data.price));
                    $('#detail-description').html(response.data.description);
                    $('#detail-photo').html(response.data.image);

                    let roundownString = '';
                    response.data.event_details.forEach(detail => {
                        // console.log(detail.start);

                        roundownString += `
                    <tr>
                        <td style="display: table-cell;">${detail.start} - ${detail.end}</td>
                        <td class="text-start" style="display: table-cell;">${detail.session}</td>
                        <td class="text-start" style="display: table-cell;">
                            <div class="ms-3">
                                <h6 class=" fw-semibold mb-0">${detail.user}</h6>
                                </div>
                                </td>
                                </tr>`
                    });
                    // <span>Curriculum Developer</span>

                    $('#event-detail-tables').append(roundownString);
                },
                error: function(xhr) {

                    Swal.fire({
                        title: "Terjadi Kesalahan!",
                        text: "Tidak dapat memuat data events.",
                        icon: "error"
                    });
                }
            });


            $('#list-participant').append(generateListParticipant([1, 2, 3, 4, 5, 6, 6]))

            function generateListParticipant(list) {
                let listEl = '';

                list.forEach(element => {
                    listEl += `<div class="col-md-6 col-lg-3">
                                <div class="card text-center p-0 bg-white">
                                    <div class="p-2 d-flex flex-column align-items-center mt-3">
                                        <img src="../../dist/images/profile/user-5.jpg" width="75" class="rounded-circle img-fluid">
                                        <h5 class="card-title mt-3">Title</h5>
                                        <span class="fs-2 mb-3">Email</span>
                                        <a class="btn text-white" style="background-color: var(--purple-primary)" href="{{ route('admin.event-participant', '342') }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2">
                                                    <path d="M15 12a3 3 0 1 1-6 0a3 3 0 0 1 6 0"></path>
                                                    <path
                                                        d="M2 12c1.6-4.097 5.336-7 10-7s8.4 2.903 10 7c-1.6 4.097-5.336 7-10 7s-8.4-2.903-10-7">
                                                    </path>
                                                </g>
                                            </svg>
                                            Lihat Preview
                                        </a>
                                    </div>
                                </div>
                            </div>`
                });


                return listEl;
            }

            $('#attendance-list tbody').empty().append(generateListAttendance([{
                    day: 'Senin',
                    date: '12/01/2022',
                    time: '08:00',
                    status: 'Hadir'
                },
                {
                    day: 'Selasa',
                    date: '13/01/2022',
                    time: '09:00',
                    status: 'Hadir'
                },
                {
                    day: 'Rabu',
                    date: '14/01/2022',
                    time: '10:00',
                    status: 'Sakit'
                },
                {
                    day: 'Kamis',
                    date: '15/01/2022',
                    time: '11:00',
                    status: 'Hadir'
                },
                {
                    day: 'Jumat',
                    date: '16/01/2022',
                    time: '12:00',
                    status: 'Hadir'
                }
            ]));

            function generateListAttendance(list) {
                let listEl = '';

                list.forEach(attendance => {
                    listEl += `
                        <tr>
                            <td>
                        <div class="d-flex align-items-center">
                          <img src="../../dist/images/profile/user-1.jpg" class="rounded-circle" width="40" height="40">
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Sunil Joshi</h6>
                            <span class="fw-normal">Web Designer</span>
                          </div>
                        </div>
                      </td>
                            <td>${attendance.date}</td>
                            <td>${attendance.time}</td>
                            <td>${attendance.status}</td>
                        </tr>
                    `;
                });

                return listEl;
            }
        });
    </script>
@endsection
