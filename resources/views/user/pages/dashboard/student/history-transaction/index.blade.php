@extends('user.layouts.app')

@section('style')
<style>
    .nav-item .btn.active-tab.active {
        user-select: none;
        -moz-user-select: none;
        background: var(--tg-theme-primary) none repeat scroll 0 0;
        border: medium none;
        color: var(--tg-common-color-white);
        cursor: pointer;
        display: inline-block;
        font-size: 16px;
        font-weight: var(--tg-fw-semi-bold);
        font-family: var(--tg-heading-font-family);
        letter-spacing: 0;
        line-height: 1.12;
        margin-bottom: 0;
        padding: 16px 30px;
        text-align: center;
        text-transform: capitalize;
        touch-action: manipulation;
        -webkit-transition: all 0.3s ease-out 0s;
        -moz-transition: all 0.3s ease-out 0s;
        -ms-transition: all 0.3s ease-out 0s;
        -o-transition: all 0.3s ease-out 0s;
        transition: all 0.3s ease-out 0s;
        vertical-align: middle;
        -webkit-border-radius: 50px;
        -moz-border-radius: 50px;
        -o-border-radius: 50px;
        -ms-border-radius: 50px;
        border-radius: 50px;
        white-space: nowrap;
        box-shadow: 4px 6px 0px 0px var(--tg-common-color-blue);
        overflow: hidden;
    }

    .nav-item .btn.active-tab {
        user-select: none;
        -moz-user-select: none;
        background: #E6E9EF;
        border: medium none;
        color: var(--tg-body-color);
        cursor: pointer;
        display: inline-block;
        font-size: 16px;
        font-weight: var(--tg-fw-semi-bold);
        font-family: var(--tg-heading-font-family);
        letter-spacing: 0;
        line-height: 1.12;
        margin-bottom: 0;
        padding: 16px 30px;
        text-align: center;
        text-transform: capitalize;
        touch-action: manipulation;
        -webkit-transition: all 0.3s ease-out 0s;
        -moz-transition: all 0.3s ease-out 0s;
        -ms-transition: all 0.3s ease-out 0s;
        -o-transition: all 0.3s ease-out 0s;
        transition: all 0.3s ease-out 0s;
        vertical-align: middle;
        -webkit-border-radius: 50px;
        -moz-border-radius: 50px;
        -o-border-radius: 50px;
        -ms-border-radius: 50px;
        border-radius: 50px;
        white-space: nowrap;
        box-shadow: none;
        overflow: hidden;
    }

    .outline-secondary {
        color: #6D6C80;
        background-color: transparent;
        border: 1px solid #6D6C80;
        padding: 6px 8px;
        font-size: 14px;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .outline-secondary:hover {
        background-color: #6D6C80;
        color: white;
    }

    .outline-secondary:focus {
        outline: none;
        box-shadow: 0 0 0 0.25rem #6D6C80;
    }

    .outline-danger {
        color: #DB0909;
        background-color: transparent;
        border: 1px solid #DB0909;
        padding: 6px 8px;
        font-size: 14px;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .outline-danger:hover {
        background-color: #DB0909;
        color: white;
    }

    .outline-danger:focus {
        outline: none;
        box-shadow: 0 0 0 0.25rem #DB0909;
    }

    .btn-purple-primary {
        color: #ffffff;
        background-color: #9425FE;
        border: 1px solid #9425FE;
        padding: 6px 8px;
        font-size: 14px;
        border-radius: 8px;
    }

    .border-card {
        border-top: 1px solid #cccccc;
        padding: 13px 25px;
    }

    main {
        background-color: #F1F1F1;
    }

</style>

@endsection

@section('content')
<!-- breadcrumb-area -->
<div class="breadcrumb__area breadcrumb__bg py-5 breadcrumb__bg-three" data-background="{{ asset('assets/img/bg/breadcrumb_bg.jpg') }}">
    <div class="breadcrumb__shape-wrap">
        <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" class="alltuchtopdown">
        <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" data-aos="fade-right" data-aos-delay="300">
        <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" data-aos="fade-up" data-aos-delay="400">
        <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" data-aos="fade-down-left" data-aos-delay="400">
        <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" data-aos="fade-left" data-aos-delay="400">
    </div>
</div>
<!-- breadcrumb-area-end -->

<!-- dashboard-area -->
<section class="dashboard__area section-pb-120">
    <div class="container">
        <div class="dashboard__top-wrap">
            <div class="dashboard__top-bg" data-background="{{ asset('assets/img/bg/instructor_dashboard_bg.jpg') }}"></div>
            <div class="dashboard__instructor-info">
                <div class="dashboard__instructor-info-left">
                    <div class="thumb">
                        <img src="{{ asset('assets/img/courses/details_instructors01.jpg') }}" alt="img">
                    </div>
                    <div class="content">
                        <h4 class="title">John Due</h4>
                        <div class="review__wrap review__wrap-two">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span>(15 Reviews)</span>
                        </div>
                    </div>
                </div>
                <div class="dashboard__instructor-info-right">
                    <a href="#" class="btn btn-two arrow-btn">Create a New Course <img src="{{ asset('assets/img/icons/right_arrow.svg') }}" alt="img" class="injectable"></a>
                </div>
            </div>
        </div>
        <div class="row">
            @include('user.pages.dashboard.widgets.sidebar')
            <div class="col-lg-9">
                <div class="dashboard__nav-wrap">
                    <ul class="nav nav-tabs" id="courseTab" style="border-bottom: none !important;" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="btn active-tab active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all-tab-pane" type="button" role="tab" aria-controls="all-tab-pane" aria-selected="true">
                                Semua
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="btn active-tab" id="waiting-payment" data-bs-toggle="tab" data-bs-target="#waiting-payment-pane" type="button" role="tab" aria-controls="waiting-payment-pane" aria-selected="false">
                                Menunggu Pembayaran
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="btn active-tab" id="finish" data-bs-toggle="tab" data-bs-target="#finish-pane" type="button" role="tab" aria-controls="finish-pane" aria-selected="false">
                                Selesai
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="courseTabContent">
                    <div class="tab-pane fade show active" id="all-tab-pane" role="tabpanel" aria-labelledby="all-tab" tabindex="0">
                        @include('user.pages.dashboard.student.history-transaction.widgets.tab-all-history')
                    </div>
                    <div class="tab-pane fade" id="waiting-payment-pane" role="tabpanel" aria-labelledby="waiting-payment" tabindex="0">
                        @include('user.pages.dashboard.student.history-transaction.widgets.tab-waiting-payment')
                    </div>
                    <div class="tab-pane fade" id="finish-pane" role="tabpanel" aria-labelledby="finish" tabindex="0">
                        @include('user.pages.dashboard.student.history-transaction.widgets.tab-finish')
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- dashboard-area-end -->
@endsection

@section('script')
@include('user.pages.dashboard.student.history-transaction.scripts.history-transaction')
<script>
    $(document).ready(function() {

        $.ajax({
            type: "GET"
            , url: "{{ config('app.api_url') }}" + "/api/transactions-user"
            , headers: {
                Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
            }
            , dataType: "json"
            , success: function(response) {
                $('#pending-content').empty();
                $('#paid-content').empty();

                $.each(response.data, function(index, value) {
                    if (value.invoice_status === 'paid'){
                        $('#pending-content').append(pendingContent(value));
                    } else if(value.invoice_status === 'pending'){
                        $('#paid-content').append(paidContent(value));

                    }
                });

            }
            , error: function(xhr) {
                Swal.fire({
                    title: "Terjadi Kesalahan!"
                    , text: "Tidak dapat memuat data events."
                    , icon: "error"
                });
            }
        });
    });

    function pendingContent(value) {
        console.log(value);

        return `
            <tr>
                <td class="text-start" style="display: table-cell;">${value.course_id.title}</td>
                <td class="text-start" style="display: table-cell;">${value.created_at}</td>
                <td class="text-start" style="display: table-cell;">${value.amount}</td>
                <td class="text-start" style="display: table-cell;">
                    <button class="outline-warning">
                        Bayar Sekarang
                    </button>
                </td>
            </tr>
        `;
    }

    function paidContent(value) {
        return `
            <tr>
                <td class="text-start" style="display: table-cell;">${value.course_id.title}</td>
                <td class="text-start" style="display: table-cell;">${value.created_at}</td>
                <td class="text-start" style="display: table-cell;">${value.amount}</td>
                <td class="text-start" style="display: table-cell;">
                    <button class="outline-purple-primary">
                        Download
                    </button>
                </td>
            </tr>
        `;
    }
</script>
@endsection
