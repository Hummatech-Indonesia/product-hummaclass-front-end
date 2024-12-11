@extends('mentor.layouts.app')

@section('style')
    <style>
        .bg-primary {
            background-color: #9425FE !important;
        }

        .text-primary {
            color: #9425FE !important;
        }

        .bg-light-primary {
            background-color: #9525fe27 !important;
        }

        .text-bg-purple {
            color: var(--purple-primary) !important;
            background: var(--purple-light-primary) !important;
        }



        .card-challenge {
            height: 314px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .card-challenge .card-title {
            min-height: 40px;
            display: flex;
            flex-direction: row;
            align-items: center;
            max-width: 260px;
            /* Vertikal */
            /* justify-content: center; */
            /* Opsional: jika ingin teks berada di tengah horizontal */
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .card-challenge .card-body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .card-challenge .card-body p {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            /* Batas 3 baris untuk deskripsi */
            -webkit-box-orient: vertical;
        }

        .bg-primary {
            background-color: #9425FE !important;
        }

        /* .card-challenge .card .btn {
                                                                                                                                                    align-self: stretch;
                                                                                                                                                    } */

        p,
        h1,
        h2,
        h3,
        h4,
        h5 {
            padding: 0;
        }
    </style>
@endsection

@section('content')
    <div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h5 class="fw-semibold mb-8">Tantangan</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted " href="index-2.html">Daftar Tantangan</a>
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

    <div class="row gap-2">
        <div class="col-lg-4 col-sm-12 col-md-3 me-auto">
            <form action="" class="position-relative d-flex gap-2" id="search-form">
                <input type="text" class="form-control product-search px-4 ps-5" name="title"
                    value="{{ old('title', request('title')) }}" id="search-name" style="background-color: #fff"
                    placeholder="Search">
                <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                
            </form>
        </div>
        <div class="col-sm-12 col-md-2 col-xl-auto">
            <a href="{{ route('mentor.challenge.create') }}" class="w-100 btn btn-primary rounded-2 bg-primary border-0">
                <i class="ti ti-plus"></i> Tambah
            </a>
        </div>
    </div>

    <div class="row row-cols-2 row-cols-md-3 mt-4" id="list-card">
    </div>
    <div class="d-flex justify-content-center">
        <nav id="pagination">

        </nav>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            let search = '';
            getChallenges();
            console.log($('#search-form'));
            
            $('#search-form').submit(function(e) {
                e.preventDefault();
                
                search = $('#search-name').val();
                getChallenges();
            });

            function getChallenges() {
                $.ajax({
                    type: "get",
                    url: "{{ config('app.api_url') }}/api/challenges",
                    headers: {
                        Authorization: "Bearer {{ session('hummaclass-token') }}"
                    },
                    dataType: "json",
                    data: {
                        search: search
                    },
                    success: function(response) {
                        let challengesList = '';
                        response.data.forEach(challenge => {
                            challengesList += `
                        <div class="col">
                            <div class="card rounded-4 shadow card-challenge">
                                <div class="card-header bg-transparent px-3 pb-4">
                                    <div class="row align-items-center">
                                        <div class="col-8 d-flex flex-column justify-content-center">
                                            <span class="badge rounded-pill badge text-bg-purple fs-2">Batas : <span>${challenge.end_date}</span></span>
                                        </div>
                                        <div class="col-4">
                                            <div class="d-flex align-items-start">
                                                <div class="ms-auto">
                                                    <div class="dropdown dropstart">
                                                        <a href="#" class="link text-dark" id="dropdownMenuButton"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ti ti-dots-vertical fs-7"></i>
                                                        </a>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <li>
                                                                <h6 class="dropdown-header">New</h6>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Folder</a></li>
                                                            <li>
                                                                <a class="dropdown-item" href="#">Google Docs</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#">Google Sheets</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#">Google Slides</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-3 pt-0 pb-3">
                                    <div class="row align-items-center" style="flex-direction: row; flex-wrap: nowrap;">
                                        <div class="col-2">
                                            <div class="d-flex align-items-center justify-content-center rounded-circle p-1 border border-3"
                                                style="aspect-ratio: 1 / 1; border-color: rgb(216, 216, 216) !important;">
                                                <span class="text-center" style="width: fit-content;">S</span>
                                            </div>
                                        </div>
                                        <div class="col p-0" style="max-width: 100%;">
                                            <h6 class="card-title fs-3 fw-semibold text-muted m-0">${challenge.title}</h6>
                                        </div>
                                    </div>
                                    <h5 class="my-3">${challenge.classroom} - ${challenge.school}</h5>
                                    <p class="fs-2">${challenge.description}</p>
                                    <a href="{{ route('mentor.challenge.show', '') }}/${challenge.slug}"
                                        class="btn btn-primary bg-primary border-0 rounded-2 w-100 mb-1">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
            `
                        });
                        $('#list-card').empty();
                        $('#list-card').append(challengesList);
                    }
                });
            }
        });
    </script>
@endsection
