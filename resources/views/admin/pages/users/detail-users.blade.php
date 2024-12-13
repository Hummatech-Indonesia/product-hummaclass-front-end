@extends('admin.layouts.app')

@section('style')
    <style>
        .user-profile-tab .nav-item .nav-link.active {
            color: #9425FE;
            border-bottom: 2px solid #9425FE;
        }

        .card-text {
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            overflow: hidden;
            text-overflow: ellipsis;
            max-height: calc(1.2em * 2);
            line-height: 1.2em;
        }
    </style>
@endsection

@section('content')
    <div class="card overflow-hidden">
        <div class="card-body p-0">
            <div class="d-flex align-items-center p-4 rounded-2 border-4 border-white"
                style="background-color: var(--purple-primary);border-radius: 15px;">
                <img src="{{ asset('admin/dist/images/profile/user-1.jpg') }}"
                    class="rounded-circle border border-3 border-white" width="100px" height="100px">
                <div class="ms-3">
                    <h4 class="fs-6 text-white fw-semibold mb-2" id="detail-name"></h4>
                    <span class="fw-normal text-white" id="detail-email"></span>
                </div>
            </div>


            <ul class="nav nav-pills user-profile-tab mt-2" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button
                        class="nav-link position-relative rounded-0 active d-flex align-items-center justify-content-center bg-transparent fs-3 py-6"
                        id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button"
                        role="tab" aria-controls="pills-profile" aria-selected="true">
                        <i class="ti ti-user me-2 fs-6"></i>
                        <span class="d-none d-md-block">Profil</span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button
                        class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6"
                        id="pills-kursus-tab" data-bs-toggle="pill" data-bs-target="#pills-kursus" type="button"
                        role="tab" aria-controls="pills-kursus" aria-selected="false" tabindex="-1">
                        <i class="ti ti-book-2 me-2 fs-6"></i>
                        <span class="d-none d-md-block">Daftar Kursus</span>
                    </button>
                </li>
            </ul>
        </div>
    </div>

    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade active show" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
            tabindex="0">
            @include('admin.pages.users.panes.tab-profile')
        </div>
        <div class="tab-pane fade" id="pills-kursus" role="tabpanel" aria-labelledby="pills-kursus-tab" tabindex="0">
            @include('admin.pages.users.panes.tab-detail-course')
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            const id = "{{ $id }}";

            if (id) {
                $.ajax({
                    type: "GET",
                    url: `{{ config('app.api_url') }}/api/users/${id}`,
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                    },
                    dataType: "json",
                    success: function(response) {

                        $('#detail-name').html(response.data.name);
                        $('#detail-name-two').html(response.data.name);
                        $('#detail-email').html(response.data.email);
                        $('#detail-email-two').html(response.data.email);
                        $('#detail-phone-number').html(response.data.phone_number);
                        $('#detail-gender').html(response.data.gender == 'male' ? 'Laki Laki' : 'Perempuan');
                        $('#detail-created').html(response.data.created);
                        $('#detail-courses').html(response.data.total_courses);
                        $('#detail-address').html(response.data.address);


                        $.ajax({
                            type: "GET",
                            url: "{{ config('app.api_url') }}" + "/api/get-courses-by-user/" + response.data.id,
                            headers: {
                                Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                            },
                            dataType: "json",
                            data: {
                                name: $('#search-name').val(),
                            },
                            success: function(response) {
                                if (response.data.data.length > 0) {

                                    $.each(response.data.data, function(index, value) {
                                        $('#course-user').append(courseUser(index,
                                            value));
                                    });
                                } else {
                                    $('#course-user').append(emptyCard());
                                }


                                // $('#pagination').html(handlePaginate(response.data.paginate))

                            },
                            error: function(xhr) {
                                Swal.fire({
                                    title: "Terjadi Kesalahan!",
                                    text: "Tidak dapat memuat data kategori.",
                                    icon: "error"
                                });
                            }
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error('Terjadi kesalahan:', status, error);
                    }
                });
            } else {
                console.error('ID tidak valid');
            }
        });

        
        function courseUser(index, value) {
            var url = "{{ config('app.api_url') }}";
            const statusText = value.study_percentage === 100 ? "SELESAI" : "PROSES";
            return `
                <div class="col-lg-3">
                    <div class="card">
                        <button class="btn btn-sm btn-warning position-absolute ms-2 mt-2 text-dark">${value.course.sub_category.name}</button>
                        <img src="${value.course.photo && value.course.photo !== url + '/storage' ? value.course.photo : '{{ asset('assets/img/no-image/no-image.jpg') }}'}" style="width: 100%; height: 170px;object-fit: cover;" class="card-img-top" alt="...">
                        <div class="card-body p-3">

                            <div class="d-flex align-items-center  gap-2"><img class="rounded-circle"
                                    src="{{ asset('admin/dist/images/profile/user-1.jpg') }}" alt=""
                                    style="width: 30px"><span>David Miliar</span></div>

                            <p class="card-title fw-bolder mt-2">${value.course.title}</p>
                            <p class="card-text">${value.course.description}</p>

                            <div>
                                <div class="d-flex justify-content-between">
                                    <p>${statusText}</p>
                                    <P>${value.study_percentage}</P>
                                </div>
                                <div class="progress mb-3" style="background-color: #EBEBEB;">
                                    <div class="progress-bar bg-success" style="width: ${value.study_percentage}%" role="progressbar"></div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="text-muted fs-3 mt-3"><svg class="mb-1" xmlns="http://www.w3.org/2000/svg"
                                        width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-book-2">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M19 4v16h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12z" />
                                        <path d="M19 16h-12a2 2 0 0 0 -2 2" />
                                        <path d="M9 8h6" />
                                    </svg>
                                    <span class="text-black fs-3 mt-1">
                                        ${value.total_module} Materi
                                    </span>
                                </p>

                                <a href="{{ route('courses.courses.show', '') }}/${value.course.slug}" class="btn text-white fs-2"
                                    style="background: var(--purple-primary);">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            `
        }
    </script>

    <script>
        // $(document).ready(function() {
        //     var id = {{ $id }};
        //     console.log(id);

        //     get(1)

        //     function get(page) {

        //     }
        // });

    </script>
@endsection
