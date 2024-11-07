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
        $(document).ready(function() {
            var id = "{{ $id }}"
            get()

            function get() {
                $.ajax({
                    type: "GET",
                    url: "{{ config('app.api_url') }}/api/user-event-attendances/" + id,
                    headers: {
                        Authorization: 'Bearer {{ session('hummaclass-token') }}'
                    },
                    dataType: "json",

                    success: function(response) {
                        $('#attendance-list tbody').empty();
                        if (response.data.length) {
                            $.each(response.data, function(index, value) {
                                $('#attendance-list tbody').append(generateListAttendance(
                                    value))
                            });
                        } else {
                            $('#attendance-list tbody').append(emptyCard())
                        }
                    },
                    error: function() {
                        Swal.fire({
                            title: "Terjadi Kesalahan!",
                            text: "Tidak dapat memuat data kategori.",
                            icon: "error"
                        });
                    }
                });
            }

            function generateListAttendance(value) {
                return `<tr>
                            <td>${value.attendance_day}</td>
                            <td>${value.attendance_date}</td>
                            <td>${value.created}</td>
                            <td>${value.status}</td>
                        </tr>
                    `;

            }
        });
    </script>
@endsection
