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
                    dataType: "json",
                    success: function(response) {
                        
                        $('#detail-name').html(response.data.name);
                        $('#detail-email').html(response.data.email);
                        $('#detail-phone-number').html(response.data.phone_number);
                        $('#detail-gender').html(response.data.gender);
                        $('#detail-created').html(response.data.created_at);
                        $('#detail-courses').html(response.data.total_courses);
                        $('#detail-address').html(response.data.address);
                    },
                    error: function(xhr, status, error) {
                        console.error('Terjadi kesalahan:', status, error);
                    }
                });
            } else {
                console.error('ID tidak valid');
            }
        });
    </script>

{{-- <script>
    $(document).ready(function() {
        get(1)

        function get(page) {
            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}" + "/api/user-course-activities?page=" + page,
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                data: {
                    name: $('#search-name').val(),
                },
                success: function(response) {
                    console.log(response);

                    if (response.data.length > 0) {

                        $.each(response.data, function(index, value) {
                            $('#course-user').append(courseUser(index, value));
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
        }
    });

    function courseUser(index, value) {
        var url = "{{ config('app.api_url') }}";
        const statusText = value.study_percentage === 100 ? "SELESAI" : "PROSES";
        return `
        <div class="col-lg-3 col-md-6">
            <div class="courses__item courses__item-two shine__animate-item">
                <div class="courses__item-thumb courses__item-thumb-two">
                    <a href="{{ route('courses.courses.show', '') }}/${value.course.slug}"
                        class="shine__animate-link">
                        <img src="${value.course.photo && value.course.photo !== url + '/storage' && /\.(jpeg|jpg|gif|png)$/i.test(value.course.photo) ? url + value.course.photo : '{{ asset('assets/img/no-image/no-image.jpg') }}'}"
                            alt="img">
                    </a>
                </div>
                <div class="courses__item-content courses__item-content-two">
                    <ul class="courses__item-meta list-wrap">
                        <li class="courses__item-tag">
                            <a href="course.html">${value.course.sub_category.name}</a>
                        </li>
                    </ul>
                    <h5 class="title"><a
                            href="{{ route('courses.courses.show', '') }}/${value.course.slug}">${value.course.title}</a></h5>
                    <div class="courses__item-content-bottom">
                        <div class="author-two">
                            <a href="instructor-details.html"><img
                                    src="{{ asset('assets/img/courses/course_author001.png') }}"
                                    alt="img">David Millar</a>
                        </div>
                        <div class="avg-rating">
                            <i class="fas fa-star"></i> (${value.course.rating} Review)
                        </div>
                    </div>
                    <div class="progress-item progress-item-two">
                        <h6 class="title">${statusText} <span>${value.study_percentage}%</span></h6>
                        <div class="progress" role="progressbar" aria-label="Example with label"
                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: ${value.study_percentage}%"></div>
                        </div>
                    </div>
                </div>
                <div class="courses__item-bottom-two">
                    <ul class="list-wrap">
                        <li><i class="flaticon-book"></i><span>${value.total_module}</span></li>
                        <li><i class="flaticon-clock"></i><span>${value.study_time}</span></li>
                    </ul>
                </div>
            </div>
        </div>
        `
    }

</script> --}}
@endsection
