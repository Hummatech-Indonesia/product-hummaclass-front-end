@extends('admin.layouts.app')

@section('content')
    <div class="card" style="background: #9425FE;">
        <div class="card-body text-white">
            <div class="d-flex flex-row align-items-center">
                <img src="{{ asset('certificate/qr.png') }}"
                    class="round-40 rounded-circle d-flex align-items-center justify-content-center bg-light-success text-success"
                    alt="">
                <div class="ms-3">
                    <h4 class="mb-0 text-white fs-6">Title</h4>
                    <span class="text-white-50">subtile</span>
                </div>
            </div>
        </div>
    </div>

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
@endsection


@section('script')
    <script>
        $(document).ready(function () {

            $('#attendance-list tbody').empty().append(generateListAttendance([
                { day: 'Senin', date: '12/01/2022', time: '08:00', status: 'Hadir' },
                { day: 'Selasa', date: '13/01/2022', time: '09:00', status: 'Hadir' },
                { day: 'Rabu', date: '14/01/2022', time: '10:00', status: 'Sakit' },
                { day: 'Kamis', date: '15/01/2022', time: '11:00', status: 'Hadir' },
                { day: 'Jumat', date: '16/01/2022', time: '12:00', status: 'Hadir' }
            ]));

            function generateListAttendance(list) { 
                let listEl = '';

                list.forEach(attendance => {
                    listEl += `
                        <tr>
                            <td>${attendance.day}</td>
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