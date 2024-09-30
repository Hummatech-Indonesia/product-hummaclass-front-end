@extends('user.layouts.app')
@section('style')
    <style>
        .list-payment img {
            width: 100px;
        }

        .text-purlple {
            color: #9425fe;
        }

        #loading-card {
            position: relative;
            overflow: hidden;
        }

        .placeholder {
            animation: loading 1.5s infinite;
            pointer-events: none;
            min-width: 100px;
            min-height: 16pt;
            transition: all ease 1s;
            display: flex;
        }

        .loading-animation {
            background-image: linear-gradient(90deg, rgb(195, 195, 195), grey);
            width: 100%;
            height: 100%;
            position: absolute;
        }

        /* Wrapper untuk skeleton */
        .skeleton-wrapper {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        /* Skeleton animasi */
        .skeleton {
            background: linear-gradient(100deg, #e0e0e0 30%, #f0f0f0 50%, #e0e0e0 70%);
            background-size: 200% 100%;
            animation: loading 1.5s infinite;
            border-radius: 4px;
        }

        @keyframes loading {
            0% {
                background-position: 200% 0;
            }

            100% {
                background-position: -200% 0;
            }
        }

        /* Skeleton untuk header */
        .skeleton-header {
            width: 60%;
            height: 20px;
        }

        /* Skeleton untuk teks */
        .skeleton-text {
            width: 100px;
            height: 14px;
            margin-top: 10px;
        }

        /* Skeleton untuk gambar */
        .skeleton-image {
            width: 100%;
            height: 200px;
        }

        .accordion-collapse.collapse.show {
            background: none;
        }
    </style>
@endsection
@section('content')
    <div class="container mb-5">
        <div class="row">
            <div class="col col-md-8 row">
                <div class="card d-none" id="checkout-card">
                    <div class="card-body">
                        <h5>Pembayaran</h5>
                        <div class="d-flex justify-content-between border-bottom py-3" id="course_price_row">
                            <p class="m-0" id="title">Title</p>
                            <div class="d-flex gap-5">
                                <p class="m-0"><del class="discount">0</del></p>
                                <p class="m-0"><span class="text-purlple fw-bold" id="amount"></span></p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-3">
                            <p class="m-0" class="fw-semibold">Voucher Discount</p>
                            <p class="m-0 fw-bold">- <span class="discount_amount text-purlple"></span></p>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-3">
                            <p class="m-0">Total Pembayaran</p>
                            <p class="m-0"><span class="text-purlple fw-bold" id="total_amount"></span></p>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-3">
                            <p class="m-0" class="fw-semibold">Kode Transaksi</p>
                            <p class="m-0"><span class="text-purlple fw-bold" id="transaction_code"></span><img
                                    src="" alt=""></p>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-3" id="expired-date-row">
                            <p class="m-0" class="fw-semibold">Bayar Sebelum</p>
                            <p class="m-0"><span class="fw-bold" id="expired_date"></span></p>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-3">
                            <p class="m-0" class="fw-semibold">Metode Pembayaran</p>
                            <p class="m-0"><span class="fw-bold" id="payment_method"></span><img src=""
                                    alt=""></p>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-3" id="checkout-date-row">
                            <p class="m-0" class="fw-semibold">Pesanan Dibuat</p>
                            <p class="m-0"><span class="fw-bold" id="checkout_date"></span></p>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-3" id="paid-date-row">
                            <p class="m-0" class="fw-semibold">Pesanan Dibayar</p>
                            <p class="m-0"><span class="fw-bold" id="paid_date"></span></p>
                        </div>
                        <button
                            class="btn btn-primary w-100 d-flex align-items-center justify-content-center gap-2 m-auto mb-3 rounded-3"
                            id="save-invoice-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-download" viewBox="0 0 16 16">
                                <path
                                    d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5" />
                                <path
                                    d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z" />
                            </svg>
                            <span>
                                Simpan
                                Pembayaran
                            </span></button>
                        <div class="d-flex justify-content-between py-3 pay-code-row">
                            <p class="m-0" class="fw-semibold">Kode Pembayaran (1 x 24 Jam)</p>
                        </div>
                        <div class="d-flex justify-content-between py-3 pay-code-row" id="pay-code-row">
                            <p class="m-0" class="fw-bold fs-1" id="pay_code"></p>
                            <div class="d-flex">
                                <p class="m-0" class="fw-semibold" id=""><button id="copy-pay-code"
                                        class="btn btn-primary rounded-3 py-2"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" class="bi bi-copy"
                                            viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M4 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 5a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1h1v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h1v1z" />
                                        </svg>Salin</button></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card" id="loading-card">
                    <div class="card-body">
                        <h5>Pembayaran</h5>
                        <div class="d-flex justify-content-between border-bottom py-3" id="course_price_row">
                            <div class="d-flex gap-5">
                                <p class="m-0 skeleton skeleton-text"></p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-3">
                            <p class="skeleton skeleton-text m-0 fw-semibold"></p>
                            <p class="skeleton skeleton-text m-0 fw-bold"></p>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-3">
                            <p class="m-0 skeleton skeleton-text"></p>
                            <p class="m-0 skeleton skeleton-text"></p>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-3">
                            <p class="m-0 skeleton skeleton-text" class="fw-semibold"></p>
                            <p class="m-0 skeleton skeleton-text"></p>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-3" id="expired-date-row">
                            <p class="m-0 skeleton skeleton-text" class="fw-semibold"></p>
                            <p class="m-0 skeleton skeleton-text"></p>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-3">
                            <p class="m-0 skeleton skeleton-text" class="fw-semibold"></p>
                            <p class="m-0 skeleton skeleton-text"></p>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-3" id="checkout-date-row">
                            <p class="m-0 skeleton skeleton-text" class="fw-semibold"></p>
                            <p class="m-0 skeleton skeleton-text"></p>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-3" id="paid-date-row">
                            <p class="m-0 skeleton skeleton-text" class="fw-semibold"></p>
                            <p class="m-0 skeleton skeleton-text"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" style="position: -webkit-sticky; position: sticky;">
                <div class="card mb-3">
                    <div class="card-body rounded-4">
                        <h5>Status Pembayaran</h5>
                        <img src="" alt="">
                        <h5 class="text-center">Pembayaran Berhasil</h5>
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                        </div>
                    </div>
                </div>
                <button class="btn btn-two w-100 m-auto rounded-3" id="checkout-btn">Kembali</button>
            </div>
        </div>
    </div>
@endsection
@include('user.pages.checkout.scripts.detail')
