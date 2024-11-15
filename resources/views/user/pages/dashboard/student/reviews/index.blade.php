@extends('user.layouts.app')

@section('style')
    <style>
        .outline-warning {
            color: #ffc107;
            background-color: transparent;
            border: 1px solid #ffc107;
            padding: 4px 6px;
            font-size: 12px;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .outline-warning:hover {
            background-color: #ffc107;
            color: white;
        }

        .outline-warning:focus {
            outline: none;
            box-shadow: 0 0 0 0.25rem rgba(255, 193, 7, 0.5);
        }


        .outline-danger {
            color: #DB0909;
            background-color: transparent;
            border: 1px solid #DB0909;
            padding: 4px 6px;
            font-size: 12px;
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
    </style>
@endsection

@section('content')
    <!-- breadcrumb-area -->
    <div class="breadcrumb__area breadcrumb__bg py-5 breadcrumb__bg-three"
        data-background="{{ asset('assets/img/bg/breadcrumb_bg.jpg') }}">
        <div class="breadcrumb__shape-wrap">
            <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" class="alltuchtopdown">
            <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" data-aos="fade-right"
                data-aos-delay="300">
            <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" data-aos="fade-up"
                data-aos-delay="400">
            <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" data-aos="fade-down-left"
                data-aos-delay="400">
            <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" data-aos="fade-left"
                data-aos-delay="400">
        </div>
    </div>
    <!-- breadcrumb-area-end -->

    <!-- dashboard-area -->
    <section class="dashboard__area section-pb-120">
        <div class="container">
            @include('user.pages.dashboard.widgets.dashboard-top')
            <div class="row">
                @include('user.pages.dashboard.widgets.sidebar')
                <div class="col-lg-9">
                    <div class="card p-5 border-0" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);">
                        <h5 class="mb-3">Reviews</h5>
                        <div class="table-responsive">
                            <table id="demo-foo-addrow"
                                class="table table-striped m-t-30 text-center table-hover contact-list footable footable-5 footable-paging footable-paging-center breakpoint-lg"
                                data-paging="true" data-paging-size="7" style="">
                                <thead>
                                    <tr class="footable-header">
                                        <th class="text-white text-start"
                                            style="display: table-cell;background-color:#9425FE;">Kursus</th>
                                        <th class="text-white text-start"
                                            style="display: table-cell;background-color:#9425FE;">Feedback</th>
                                    </tr>
                                </thead>
                                <tbody id="reviews-user">

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- dashboard-area-end -->
    @include('user.pages.dashboard.student.reviews.scripts.index')
@endsection
