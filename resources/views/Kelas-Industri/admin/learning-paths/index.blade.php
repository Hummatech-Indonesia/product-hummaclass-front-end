@extends('admin.layouts.app')
@section('style')
    <style>
        .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link.active {
            background-color: #9425FE;
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            background-color: #9425FE;
        }
    </style>
@endsection
@section('content')
    <!-- Header Card -->
    <div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-md-9 col-sm-8">
                    <h5 class="fw-semibold mb-2">Learning Path</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted" href="index-2.html">Urutan Belajar untuk Siswa kelas industri</a>
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-3 col-sm-4 text-center">
                    <img src="{{ asset('admin/dist/images/backgrounds/track-bg.png') }}" width="70px" alt=""
                        class="img-fluid mb-n3" />
                </div>
            </div>
        </div>
    </div>

    <!-- Nav tabs -->
    <div class="card">
        <div class="card-body">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link nav-class_level-link active" data-bs-toggle="tab" href="#home" role="tab"
                        data-class_level="10">
                        <span>Kelas 10</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-class_level-link" data-bs-toggle="tab" href="#profile" role="tab"
                        data-class_level="11">
                        <span>Kelas 11</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-class_level-link" data-bs-toggle="tab" href="#messages" role="tab"
                        data-class_level="12">
                        <span>Kelas 12</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <h3 class="mb-4"><b>Pilihan Devisi</b></h3>
                    <!-- Nav tabs -->
                    <div id="division-tab-list">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-9">
            <h3><b>Kursus</b></h3>
            <div class="d-flex justify-content-between mb-3">
                <input type="text" name="search" id="search" class="form-control bg-white "
                    placeholder="Cari kursus.." style="max-width:250px;">
                <button class="btn text-white" id="create-learning-path-button" style="background: #9425FE;"><i
                        class="fa fa-plus fa-md"></i>
                    Tambah</button>
            </div>
            <div id="course-learning-path-list">
                {{-- <div class="card input-group position-relative">
                    <div class="card-body align-items-center">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5><b>Langkah 1</b></h5>
                        </div>
                        <div class="row mt-2">
                            <div class="col-5">
                                <img src="{{ asset('assets/img/courses/course_thumb01.jpg') }}" alt="kursus.jpg"
                                    class="img-fluid rounded">
                            </div>
                            <div class="col-7">
                                <div class="d-flex gap-2 align-items-center">
                                    <div class="p-1 rounded text-center" style="background: #F6EEFE;color:#9425FE;">
                                        <span>Development</span>
                                    </div>
                                    <div class="text-center">
                                        <img src="{{ asset('admin/dist/images/profile/user-1.jpg') }}" alt="user.jpg"
                                            class="rounded-circle" style="height: 24px;width:24px;">
                                        <span class="text-muted"> David Millar</span>
                                    </div>
                                </div>
                                <h4><b>Learning Javascript with Imagination</b></h4>
                                <p class="text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                    Amet,
                                    facere
                                    corporis, ullam voluptatibus hic beatae ducimus aspernatur debitis nihil autem
                                    placeat?
                                    Deserunt saepe, optio enim corporis beatae nesciunt commodi nihil!</p>
                                <h4 style="color: #9425FE;"><b>Rp. 300.000</b> / <span class="fs-2 text-dark"><i
                                            class="fa fa-star fa-md text-warning"></i> (4,5
                                        Reviews)</span></h4>
                                <div class="d-flex gap-2 align-items-center">
                                    <div class="p-2 rounded" style="background: #FEF5EE;">
                                        <div class="d-flex gap-2"><i style="color: #FFB649;" class="fa fa-book fa-md"></i>
                                            <b>8 Modul</b>
                                        </div>
                                    </div>
                                    <div class="p-2 rounded" style="background: #FEF5EE;">
                                        <div class="d-flex gap-2"><i style="color: #FFB649;" class="fa fa-folder fa-md"></i>
                                            <b>1 Tugas Akhir</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn ms-auto position-absolute" style="height: 100%; right:0;background:#ECECEC;"><i
                            class="fa fa-ellipsis-v"></i></button>
                </div> --}}
            </div>
        </div>
    </div>
@endsection
@section('script')
    <x-create-learning-path-modal></x-create-learning-path-modal>
    <script>
        $(document).ready(function() {
            function divisionList(index, value) {
                return `
                <div class="nav flex-column nav-pills "  id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link nav-division_id-link ${index == 0 ? 'active' : ''}"  data-division_id="${value.division.id}" id="v-pills-${value.division.name}-tab" data-bs-toggle="pill"
                        href="#v-pills-${value.division.name}" role="tab" aria-controls="v-pills-${value.division.name}"
                        aria-selected="true">
                        ${value.division.name}
                    </a>
                </div>
                `
            }

            function courseLearningPathList(index, value) {
                let price;

                const formatRupiah = (value) => {
                    return `Rp ${parseInt(value, 10).toLocaleString('id-ID')}`;
                };

                price =
                    value.course.is_premium == 1 ?
                    (value.course.promotional_price != null && value.course.promotional_price > 0 ?
                        formatRupiah(value.course.promotional_price) :
                        value.course.promotional_price === 0 ?
                        'Gratis' :
                        value.course.price != null && value.course.price > 0 ?
                        formatRupiah(value.course.price) :
                        'Gratis') :
                    'Gratis';


                return `
                        <div class="card input-group position-relative">
                            <div class="card-body align-items-center">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h5><b>Langkah ${index + 1}</b></h5>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-5">
                                        <img src="{{ asset('assets/img/courses/course_thumb01.jpg') }}" alt="kursus.jpg"
                                            class="img-fluid rounded">
                                    </div>
                                    <div class="col-7">
                                        <div class="d-flex gap-2 align-items-center">
                                            <div class="p-1 rounded text-center" style="background: #F6EEFE;color:#9425FE;">
                                                <span>${value.course.sub_category.name}</span>
                                            </div>
                                            <div class="text-center">
                                                <img src="{{ asset('admin/dist/images/profile/user-1.jpg') }}" alt="user.jpg"
                                                    class="rounded-circle" style="height: 24px;width:24px;">
                                                <span class="text-muted"> ${value.course.user.name}</span>
                                            </div>
                                        </div>
                                        <h4><b>${value.course.title}</b></h4>
                                        <p class="text-muted">${value.course.description}</p>
                                        <h4 style="color: #9425FE;"><b>${price}</b> / <span class="fs-2 text-dark"><i
                                                    class="fa fa-star fa-md text-warning"></i> (${value.course.rating}
                                                Reviews)</span></h4>
                                        <div class="d-flex gap-2 align-items-center">
                                            <div class="p-2 rounded" style="background: #FEF5EE;">
                                                <div class="d-flex gap-2"><i style="color: #FFB649;" class="fa fa-book fa-md"></i>
                                                    <b>${value.course.module_count} Modul</b>
                                                </div>
                                            </div>
                                            <div class="p-2 rounded" style="background: #FEF5EE;">
                                                <div class="d-flex gap-2"><i style="color: #FFB649;" class="fa fa-folder fa-md"></i>
                                                    <b>1 Tugas Akhir</b>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn ms-auto position-absolute" style="height: 100%; right:0;background:#ECECEC;"><i
                                    class="fa fa-ellipsis-v"></i></button>
                        </div>
                        `;
            }


            function getCourseLearningPath(class_level, division_id) {
                $.ajax({
                    type: "GET",
                    url: "{{ config('app.api_url') }}/api/learning-paths",
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}",
                    },
                    data: {
                        class_level: class_level,
                        division_id: division_id
                    },
                    dataType: "json",
                    success: function(response) {
                        $('#course-learning-path-list').empty();
                        $.each(response.data, function(index, value) {
                            $.each(value.course_learning_paths, function(indexInArray,
                                valueOfElement) {
                                $('#course-learning-path-list').append(
                                    courseLearningPathList(indexInArray,
                                        valueOfElement)
                                );
                            });
                        });
                    },
                    error: function(xhr) {
                        Swal.fire({
                            title: "Terjadi Kesalahan!",
                            text: "Tidak dapat memuat data learning path.",
                            icon: "error"
                        });
                    }
                });
            }

            function getDivision(class_level) {
                $.ajax({
                    type: "GET",
                    url: "{{ config('app.api_url') }}/api/learning-paths",
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}",
                    },
                    data: {
                        class_level: class_level
                    },
                    dataType: "json",
                    success: function(response) {
                        $('#division-tab-list').empty();
                        $.each(response.data, function(indexInArray, valueOfElement) {
                            $('#division-tab-list').append(divisionList(indexInArray,
                                valueOfElement));
                        });
                        let division_id = $('.nav-division_id-link.active').data('division_id')

                        getCourseLearningPath(class_level, division_id)
                    },
                    error: function(xhr) {
                        Swal.fire({
                            title: "Terjadi Kesalahan!",
                            text: "Tidak dapat memuat data learning path.",
                            icon: "error"
                        });
                    }
                });
            }

            let class_level = $('.nav-class_level-link.active').data('class_level')

            getDivision(class_level);

            $(document).on('click', '.nav-class_level-link', function() {
                $('.nav-class_level-link').removeClass('active')
                $(this).addClass('active')
                class_level = $(this).data('class_level')
                getDivision(class_level)
            })

            $(document).on('click', '.nav-division_id-link', function() {
                $('.nav-division_id-link').removeClass('active')
                $(this).addClass('active')
                getCourseLearningPath(class_level, $(this).data('division_id'))
            })

            $(document).on('click', '#create-learning-path-button', function() {
                $('#create-learning-path-modal').modal('show')
            })
        });
    </script>
@endsection