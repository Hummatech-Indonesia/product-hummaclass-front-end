@extends('admin.layouts.app')

@section('content')
    <div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h5 class="fw-semibold mb-8">Berita</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted " href="index-2.html">Daftar berita pada hummaclass</a>
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

    <div class="d-flex justify-content-end mb-3 gap-2">
        <a href="{{ route('admin.news.index') }}" class="btn" style="background: #E8E8E8;">
            <i class="ti ti-arrow-left"></i>
            <span>Kembali</span>
        </a>

        <a class="btn text-white" style="background-color: var(--purple-primary)" href="">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                    <path d="M15 12a3 3 0 1 1-6 0a3 3 0 0 1 6 0" />
                    <path d="M2 12c1.6-4.097 5.336-7 10-7s8.4 2.903 10 7c-1.6 4.097-5.336 7-10 7s-8.4-2.903-10-7" />
                </g>
            </svg>
            Lihat Preview
        </a>
    </div>

    <div class="card" style="border-radius: 15px">
        <div class="card-header p-0">
            <img src="{{ asset('assets/img/courses/course_thumb01.jpg') }}"
                style="border-radius: 15px 15px 0 0;height:300px;object-fit: cover" class="w-100" alt="">
        </div>

        <div class="card-body">
            <span class="badge rounded-pill font-medium text-white px-4" id="detail-category"
                style="background-color: var(--purple-primary)"></span>
            <h4 class="fw-semibold text-dark fs-8 mt-2" id="detail-title"></h4>
            <div class="d-flex gap-5 mt-3">
                <p class="d-flex align-items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2">
                            <path d="M15 12a3 3 0 1 1-6 0a3 3 0 0 1 6 0" />
                            <path d="M2 12c1.6-4.097 5.336-7 10-7s8.4 2.903 10 7c-1.6 4.097-5.336 7-10 7s-8.4-2.903-10-7" />
                        </g>
                    </svg>
                    <span id="detail-view"></span>
                </p>
                <p class="d-flex align-items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2.0"
                            d="M4 8h16M4 8v8.8c0 1.12 0 1.68.218 2.108a2 2 0 0 0 .874.874c.427.218.987.218 2.105.218h9.606c1.118 0 1.677 0 2.104-.218c.377-.192.683-.498.875-.874c.218-.428.218-.986.218-2.104V8M4 8v-.8c0-1.12 0-1.68.218-2.108c.192-.377.497-.682.874-.874C5.52 4 6.08 4 7.2 4H8m12 4v-.803c0-1.118 0-1.678-.218-2.105a2 2 0 0 0-.875-.874C18.48 4 17.92 4 16.8 4H16m0-2v2m0 0H8m0-2v2" />
                    </svg>
                    <span id="detail-created"></span>
                </p>
            </div>
            <hr>
            <p id="detail-description"></p>
            {{-- <h4>Title of the paragraph</h4>
        <p>But you cannot figure out what it is or what it can do. MTA web directory is the simplest way in which one can bid on a link, or a few links if they wish to do so. The link
            directory on MTA displays all of the links it currently has, and does so in alphabetical order, which makes it much easier for someone to find what they are looking for if it is
            something specific and they do not want to go through all the other sites and links as well. It allows you to start your bid at the bottom and slowly work your way to the top
            of the list.
        </p>
        <p>
            Gigure out what it is or what it can do. MTA web directory is the simplest way in which one can bid on a link, or a few links if they wish to do so. The link directory on MTA
            displays all of the links it currently has, and does so in alphabetical order, which makes it much easier for someone to find what they are looking for if it is something
            specific and they do not want to go through all the other sites and links as well. It allows you to start your bid at the bottom and slowly work your way to the top of the
        </p> --}}
            {{-- <hr>
        <h4>Unorder list.</h4>
        <ul style="list-style-type: disc;" class="ms-4 text-black">
            <li>Gigure out what it is or</li>
            <li>The links it currently</li>
            <li>It allows you to start your bid</li>
            <li>Gigure out what it is or</li>
            <li>The links it currently</li>
            <li>It allows you to start your bid</li>
        </ul>
        <hr>
        <h4>Order list.</h4>
        <ul style="list-style-type: none;" class="ms-4 text-black">
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

            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}" + "/api/blogs/" + id,
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                success: function(response) {
                    $('#detail-category').html(response.data.sub_category);
                    $('#detail-title').html(response.data.title);
                    $('#detail-view').html(response.data.view_count);
                    $('#detail-created').html(response.data.created);
                    $('#detail-description').html(response.data.description);
                },
                error: function(xhr) {
                    Swal.fire({
                        title: "Terjadi Kesalahan!",
                        text: "Tidak dapat memuat data modul.",
                        icon: "error"
                    });
                }
            });
        });
    </script>
@endsection