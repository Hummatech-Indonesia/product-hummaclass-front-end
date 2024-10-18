@extends('admin.layouts.app')

@section('style')
<style>
    .btn-default {
        background-color: transparent;
        color: #000000;
    }

</style>
@endsection

@section('content')
<div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
    <div class="card-body px-4 py-3">
        <div class="row align-items-center">
            <div class="col-9">
                <h5 class="fw-semibold mb-8">Detail Tugas</h5>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a class="text-muted " href="javascript:void(0)">Detail Tugas pada modul</a>
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="col-3">
                <div class="text-center mb-n1">
                    <img src="{{ asset('admin/dist/images/backgrounds/track-bg.png') }}" width="70px" alt="" class="img-fluid mb-n3" />
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="p-4">
        <div class="d-flex align-items-center gap-2">
            <div class="d-flex justify-content-center align-items-center" style="background-color: #F6EEFE;border-radius:50%;width:30px;height:30px;">
                <svg xmlns="http://www.w3.org/2000/svg" style="color: var(--purple-primary);" width="20" height="20" viewBox="-2 -2 24 24">
                    <path fill="currentColor" d="M6 0h8a6 6 0 0 1 6 6v8a6 6 0 0 1-6 6H6a6 6 0 0 1-6-6V6a6 6 0 0 1 6-6m0 2a4 4 0 0 0-4 4v8a4 4 0 0 0 4 4h8a4 4 0 0 0 4-4V6a4 4 0 0 0-4-4zm6 7h3a1 1 0 0 1 0 2h-3a1 1 0 0 1 0-2m-2 4h5a1 1 0 0 1 0 2h-5a1 1 0 0 1 0-2m0-8h5a1 1 0 0 1 0 2h-5a1 1 0 1 1 0-2m-4.172 5.243L7.95 8.12a1 1 0 1 1 1.414 1.415l-2.828 2.828a1 1 0 0 1-1.415 0L3.707 10.95a1 1 0 0 1 1.414-1.414z" /></svg>
            </div>
            <h6 class="mt-1">Tugas 1</h6>
        </div>
        <h3 id="title" class="fw-semibold mt-3">Membuat CRUD Blala</h3>
    </div>
    <hr>
    <div class="p-4">
        <h3>Deskripsi</h3>
        <p id="description"></p>
        <hr>
        {{-- <h4>Unorder list.</h4>
        <ul style="list-style-type: disc;" class="ms-4 text-black">
            <li>Gigure out what it is or</li>
            <li>The links it currently</li>
            <li>It allows you to start your bid</li>
            <li>Gigure out what it is or</li>
            <li>The links it currently</li>
            <li>It allows you to start your bid</li>
        </ul> --}}
    </div>
</div>
@endsection

@section('script')
<script>
    $(document).ready(function() {
        var id = "{{ $id }}";

        // get task
        $.ajax({
            type: "get"
            , url: "{{ config('app.api_url') }}/api/module-tasks-detail/" + id
            , headers: {
                Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
            }
            , dataType: "json"
            , success: function(response) {
                console.log(response);

                $.ajax({
                    type: "get"
                    , url: "{{ config('app.api_url') }}/api/module-tasks-detail/" + response.data.id
                    , headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                    }
                    , dataType: "json"
                    , success: function(response) {
                        console.log(response);
                        $('#title').html(response.data.question);
                        $('#description').html(response.data.description);
                        // $('#sub_modul_count').html(response.data.sub_module_count);
                    }
                });
            }
            , error: function(xhr) {
                Swal.fire({
                    title: "Terjadi Kesalahan!"
                    , text: "Tidak dapat memuat data tugas."
                    , icon: "error"
                });
            }
        });
    });

</script>
@endsection
