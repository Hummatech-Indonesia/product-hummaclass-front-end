@extends('user.layouts.app')
@section('style')
    <style>
        .list-payment img {
            width: 100px;
        }
    </style>
@endsection
@section('content')
    <div class="container mb-5">
        <div class="row">
            <div class="col col-md-8 row">
                <div class="card">
                    <div class="card-body">
                        <h5>Pembayaran</h5>
                        <div class="d-flex justify-content-between border-bottom py-3" id="course_price_row">
                            <p class="m-0" id="title">Title</p>
                            <p class="m-0"><span id="amount">0</span></p>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-3">
                            <p class="m-0">Voucher Discount</p>
                            <p class="m-0"><span id="fee_service">0</span></p>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-3">
                            <p class="m-0">Total Pembayaran</p>
                            <p class="m-0"><span id="total_amount">0</span></p>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-3">
                            <p class="m-0">Kode Transaksi</p>
                            <p class="m-0"><span id="transaction_code">0</span><img src="" alt=""></p>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-3">
                            <p class="m-0">Pesanan Dibuat</p>
                            <p class="m-0"><span id="checkout_date">0</span></p>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-3">
                            <p class="m-0">Pesanan Dibuat</p>
                            <p class="m-0"><span id="paid_date">0</span></p>
                        </div>
                        <button class="btn btn-primary   w-100 m-auto mb-3 rounded-3" id="checkout-btn">Simpan Pembayaran</button>
                    </div>
                </div>
            </div>
            <div class="col" style="position: -webkit-sticky; position: sticky;">
                <div class="card mb-3">
                    <div class="card-body rounded-4">
                        <h5>Status Pembayaran</h5>
                        <img src="" alt="">
                        <h5 class="text-center">Pembayaran Berhasil</h5>
                    </div>
                </div>
                <button class="btn btn-two w-100 m-auto rounded-3" id="checkout-btn">Beli Sekarang</button>
            </div>
        </div>
    </div>
@endsection
{{-- @include('user.pages.checkout.scripts.index') --}}
