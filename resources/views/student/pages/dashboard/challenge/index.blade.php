@extends('student.layouts.app')
@section('style')
    <style>
        .bg-primary {
            background-color: #9425FE !important;
        }

        .text-primary {
            color: #9425FE !important;
        }

        .bg-light-primary {
            background-color: #F6EEFE !important;
        }

        .bg-light-danger {
            background-color: #FFEFEF !important;
        }

        .text-bg-purple {
            color: var(--purple-primary) !important;
            background: var(--purple-light-primary) !important;
        }
    </style>
@endsection
@section('content')
    <h4 class="mb-4">Tantangan</h4>

    <div class="col-12 col-lg-4 mb-4">
        <input type="text" name="search" id="search" placeholder="Cari..." class="form-control rounded-3">
    </div>

    <div class="row" id="challenge-student-list"></div>
@endsection

@section('script')
    @include('student.pages.dashboard.challenge.script.datatable')
@endsection
