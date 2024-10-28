@extends('admin.layouts.app')

@section('style')
<style>
    .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
        background-color: #9425FE;
    }

</style>
@endsection

@section('content')
<div class="card overflow-hidden" style="border-radius: 15px;">
    <div class="card-body p-0">
        <div class="d-flex align-items-center p-4 rounded-2 border-4 border-white" style="background-color: var(--purple-primary);border-radius: 15px;">
            <img src="{{ asset('admin/dist/images/profile/user-1.jpg') }}" class="rounded-circle border border-3 border-white" width="100px" height="100px">
            <div class="ms-3">
                <h4 class="fs-6 text-white fw-semibold mb-2" id="userName">{{ session('user')['name'] }}</h4>
                <span class="fw-normal text-white" id="userEmail">{{ session('user')['email'] }}</span>
            </div>
        </div>
    </div>
</div>

<div class="card p-3 mt-3">
    <div>
        <ul class="nav nav-tabs d-flex justify-content-between" role="tablist">
            <div class="d-flex">
                <li class="nav-item home">
                    <a class="nav-link active" data-bs-toggle="tab" href="#preTest" role="tab">
                        <span>Pre Test</span>
                    </a>
                </li>
                <li class="nav-item list">
                    <a class="nav-link" data-bs-toggle="tab" href="#postTest" role="tab">
                        <span>Post Test</span>
                    </a>
                </li>
            </div>
        </ul>
    </div>
</div>

<div class="tab-content">
    <div class="tab-pane active" id="preTest" role="tabpanel">
        @include('admin.pages.courses.panes.test.panes.tab-pre-test')
    </div>

    <div class="tab-pane" id="postTest" role="tabpanel">
        @include('admin.pages.courses.panes.test.panes.tab-post-test')
    </div>
</div>

@endsection
