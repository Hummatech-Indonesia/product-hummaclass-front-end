@extends('student.layouts.app')
@section('style')
    @include('student.pages.dashboard.events.widgets.style')
    <style>
        .text-purple {
            color: #9425FE !important;
        }
    </style>
@endsection
@section('content')
    <!-- event-area -->
    <section class="event__area-two section-py-120">
        <div class="container">
            <div class="event__inner-wrap">
                <div class="row" id="events-list-content11">
                    <div class="container mt-5"> 

                        <div class="row mb-5">
                            <div class="col-lg-8 col-md-12">
                                <div class="card p-5">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h2 class="fw-semibold" style="color: #9425FE;">Kalender</h2>
                                        <div class="d-flex">
                                            <select class="form-select-ym me-2" id="monthSelect"></select>
                                            <select class="form-select-ym me-2" id="yearSelect"></select>
                                        </div>
                                    </div>

                                    <div class="row text-center" id="calendarGrid"></div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-12">
                                <div class="card p-3 mb-3">
                                    <h4>Daftar Zoom</h4>
                                </div>
                                <div class="event-sidebar">
                                    <ul class="list-group list-group-flush" id="eventList"></ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
@section('script')
    @include('student.pages.dashboard.events.widgets.script')
@endsection
