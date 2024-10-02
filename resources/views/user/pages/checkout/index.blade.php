@extends('user.layouts.app')
@section('style')
    <style>
        .list-payment img {
            width: 100px;
        }

        .payment-options {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .payment-option {
            display: flex;
            align-items: center;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 10px;
            cursor: pointer;
            transition: border-color 0.3s;
        }

        .payment-option input[type="radio"] {
            display: none;
        }

        .payment-option .option-content {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .payment-option img {
            width: 24px;
            height: 24px;
        }

        .payment-option span {
            font-size: 16px;
            font-weight: bold;
        }

        .payment-option input[type="radio"]:checked {
            border: 2px solid #9425fe;
            /* Warna ungu saat dipilih */
        }

        .checked {
            border: 2px solid #9425fe;
        }

        .payment-option:hover {
            border-color: #9425fe;
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col col-md-8 row">
                <div class="col-12">
                    <div class="courses__item courses__item-three shine__animate-item row row-gap-0">
                        <div class="col col-md-4">
                            <div class="courses__item-thumb">
                                <a href="{{ route('courses.courses.show', '') }}/{{ $slug }}"
                                    class="shine__animate-link">
                                    <img src="" class="course_photo" />
                                </a>
                            </div>
                        </div>

                        <div class="col col-md-7">
                            <div class="courses__item-content d-flex flex-column">
                                <ul class="courses__item-meta list-wrap">
                                    <li class="courses__item-tag">
                                        <a href="#" class="category">Development</a>
                                    </li>
                                </ul>
                                <div class="d-flex flex-column flex-grow-1">
                                    <div class="col col-md-8 d-flex flex-column justify-content-between">
                                        <div>
                                            <h5 class="title">
                                                <a href="{{ route('courses.courses.show', '') }}/${value.slug}"
                                                    id="title"></a>
                                            </h5>
                                            <p class="author fs-10">By <a href="#">David Millar</a></p>
                                        </div>
                                    </div>
                                    <p class="info"><span class="fw-bolder price" style="color: #9425fe">
                                        </span>/
                                        (<span class="review">4.8</span>
                                        Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 border-top">
                            <h5>Deskripsi: </h5>
                            <p class="self-direction-column" id="description">Lorem ipsum, dolor sit amet consectetur
                                adipisicing elit.
                                Perferendis dicta earum corrupti iure magni eius eveniet sapiente aspernatur soluta,
                                recusandae
                                quasi alias nesciunt sint assumenda aliquam praesentium ipsa! Architecto, illo!</p>
                        </div>
                        <div class="col-12 border-top">
                            <h5>Deskripsi: </h5>
                            <div class="author-two d-flex align-items-center gap-3">
                                <img src="assets/img/courses/course_author001.png" alt="img">
                                <div>
                                    <p class="m-0">By <a href="#">David Millar</a></p>
                                    <p class="m-0"><a href="#">David Millar</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col" style="position: -webkit-sticky; position: sticky;">
                <h4>Pilih Metode Pembayaran </h4>
                <div class="card mb-3" id="intruction-list">
                    <div class="card-body rounded-4">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapse-virtual-account" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        Virtual Account
                                    </button>
                                </h2>
                                <div id="flush-collapse-virtual-account" class="accordion-collapse collapse show"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>Pembayaran terhubung langsung dengan akun e-wallet kamu</p>
                                        <div class="row row-cols-4 payment-options" id="virtual_account">
                                            <!-- Radio button for Gopay -->
                                            <!-- Add more as needed -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapse-ewallet" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        E-Wallet
                                    </button>
                                </h2>
                                <div id="flush-collapse-ewallet" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>Pembayaran terhubung langsung dengan akun e-wallet kamu</p>
                                        <div class="row row-cols-4 payment-options" id="e_wallet">
                                            <!-- Radio button for Gopay -->
                                            <!-- Add more as needed -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5>Pembayaran</h5>
                        <form action="" id="voucher-form">
                            <label for="voucher" class="form-label"></label>
                            <div class="d-flex gap-3 align-items-center">
                                <input type="text" class="form-control" id="voucher" name="voucher"
                                    placeholder="Kode Voucher">
                                <button type="submit" class="btn btn-primary" id="btn-check-voucher">Cek</button>
                        </form>
                    </div>
                    <hr class="border border-1 border-secondary">
                    <div class="d-flex justify-content-between" id="course_price_row">
                        <p>Harga Pesanan</p>
                        <p><span id="order_amount">0</span></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p>Biaya Layanan</p>
                        <p><span id="fee_service">0</span></p>
                    </div>
                    <hr class="border border-1 border-secondary">
                    <div class="d-flex justify-content-between total_amount_row">
                        <p class="fw-semibold">Total Pesanan</p>
                        <p class="fw-semibold fs-5"><span id="total_amount">0</span></p>
                    </div>
                    <button class="btn btn-two w-100 m-auto" id="checkout-btn">Beli Sekarang</button>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@include('user.pages.checkout.scripts.index')
