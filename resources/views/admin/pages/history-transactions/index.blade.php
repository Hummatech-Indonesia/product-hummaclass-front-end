@extends('admin.layouts.app')

@section('style')
    <style>
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
    </style>
@endsection

@section('content')
    <div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h5 class="fw-semibold mb-8">Riwayat Transaksi</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted" href="index-2.html">Daftar Riwayat Transaksi</a>
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-3 text-center mb-n1">
                    <img src="{{ asset('admin/dist/images/backgrounds/track-bg.png') }}" width="70px" alt=""
                        class="img-fluid mb-n3" />
                </div>
            </div>
        </div>
    </div>

    <div class="card p-3">
        <h5 class="fw-semibold">Riwayat Transaksi</h5>

        <div class="col-12 col-lg-3 col-md-12 mt-2">
            <div class="position-relative">
                <input type="text" class="form-control product-search px-4 ps-5" id="search-name" placeholder="Search">
                <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 ms-3"
                    style="color: #8B8B8B"></i>
            </div>
        </div>

        <div class="table-responsive rounded-2 mb-4 mt-4">
            <table class="table border text-nowrap customize-table mb-0 align-middle text-center">
                <thead class="text-dark fs-4">
                    <tr>
                        <th class="fs-4 fw-semibold text-white mb-0 px-0" style="background-color: #9425FE">No</th>
                        <th class="fs-4 fw-semibold text-white mb-0 px-0" style="background-color: #9425FE">Nama Pembeli
                        </th>
                        <th class="fs-4 fw-semibold text-white mb-0 px-0" style="background-color: #9425FE">Nama Kursus</th>
                        <th class="fs-4 fw-semibold text-white mb-0" style="background-color: #9425FE">Tanggal Transaksi
                        </th>
                        <th class="fs-4 fw-semibold text-white mb-0" style="background-color: #9425FE">Metode Transaksi</th>
                        <th class="fs-4 fw-semibold text-white mb-0" style="background-color: #9425FE">Harga</th>
                    </tr>
                </thead>
                <tbody class="text-center" id="tableBody">
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-end">
            <nav id="pagination"></nav>
        </div>
    </div>
@endsection
@section('script')
    <script>
        let debounceTimer;

        $('#search-name').keyup(function() {
            clearTimeout(debounceTimer);
            debounceTimer = setTimeout(function() {
                get(1);
            }, 500);
        });

        function get(page) {
            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}/api/transactions?page=" + page,
                headers: {
                    Authorization: 'Bearer {{ session('
                                    hummaclass - token ') }}'
                },
                dataType: "json",
                data: {
                    name: $('#search-name').val(),
                },
                success: function(response) {
                    $('#tableBody').empty();

                    if (response.data.data.length > 0) {
                        $.each(response.data.data, function(index, value) {
                            $('#tableBody').append(historyTransaction(index, value));
                        });
                        $('#pagination').html(handlePaginate(response.data.paginate))

                    } else {
                        $('#tableBody').append(empty());
                    }

                },
                error: function() {
                    Swal.fire({
                        title: "Terjadi Kesalahan!",
                        text: "Tidak dapat memuat data Riwayat Transaksi.",
                        icon: "error"
                    });
                }
            });
        }

        function historyTransaction(index, value) {

            return `
                <tr class="fw-semibold">
                    <td>${index + 1}</td>
                    <td>${value.user.name}</td>
                    <td>${value.product.title}</td>
                    <td>${formatDate(value.created_at)}</td>
                    <td>${value.payment_channel}</td>
                    <td>${formatRupiah(value.amount)}</td>
                </tr>`;
        }
        get(1);
    </script>


    <x-delete-modal-component></x-delete-modal-component>
@endsection
