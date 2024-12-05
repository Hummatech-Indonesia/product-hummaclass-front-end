@extends('teacher.layouts.app')
@section('style')
    <style>
        .bg-primary {
            background-color: #9425FE !important;
        }

        .text-primary {
            color: #9425FE !important;
        }

        .btn-primary {
            background-color: #9425FE !important;
            border: none;
        }

        .text-light-primary {
            color: #F6EEFE !important;
        }

        .bg-light-primary {
            background-color: #F6EEFE !important;
        }

        .text-bg-purple {
            color: var(--purple-primary) !important;
            background: var(--purple-light-primary) !important;
        }
    </style>


    <style>
        .nav-pills .nav-link.active {
            background-color: #9425FE;
            color: white;
        }

        .nav-pills .nav-link {
            position: relative;
            padding-left: 30px;
        }

        .nav-pills .nav-link::before {
            content: '';
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            width: 7px;
            height: 7px;
            background-color: transparent;
            border: 1px solid black;
            border-radius: 50%;
        }

        .nav-pills .nav-link.active::before {
            border-color: white;
        }
    </style>
@endsection
@section('content')
    <div class="card position-relative overflow-hidden bg-light-primary">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h5 class="fw-semibold mb-8">Raport</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted " href="javascript:void(0)">Raport pada kelas industri</a>
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

    <div class="row">
        <div class="col-12 col-lg-3 mb-2">
            @include('teacher.pages.report.class-list')
        </div>
        <div class="col-12 col-lg-9 mb-2">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    @include('teacher.pages.report.panes.tab-class')
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    @include('teacher.pages.report.panes.tab-class')

                </div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                    @include('teacher.pages.report.panes.tab-class')

                </div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                    @include('teacher.pages.report.panes.tab-class')

                </div>
            </div>

        </div>
    </div>
@endsection
