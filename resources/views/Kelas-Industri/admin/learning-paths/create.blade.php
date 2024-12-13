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

        [class^="stepcourse-"] {
            color: white;
            background: var(--purple-primary);
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }
    </style>
@endsection
@section('content')
    <!-- Header Card -->
    <div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-md-9 col-sm-8">
                    <h5 class="fw-semibold mb-2">Tambah Learning Path</h5>
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

    <h3><b>Kursus</b></h3>
    <div class="d-flex justify-content-between mb-3">
        <form action="" id="search-form">
            <input type="text" name="search" id="search" class="form-control bg-white " placeholder="Cari kursus.."
                style="max-width:250px;">
        </form>
    </div>
    <div id="course-learning-path-list">
    </div>

    <button class="mt-3 submit-btn btn text-white d-block ms-auto"
        style="background: var(--purple-primary);">Simpan</button>
@endsection
@section('script')
    <x-create-learning-path-modal></x-create-learning-path-modal>
    <script>
        $(document).ready(function() {

            let divisionId = "{{ json_decode(request()->division)->id }}"
            let classId = `{{ json_decode(request()->classroom)->id }}`.trim()

            let selectedCourse = [];

            function updateStep() {
                $('[class^="stepcourse-"]').addClass('d-none');
                selectedCourse.forEach((courseId, index) => {
                    let indexInput = $(`.course_check[value='${courseId}']`).data('index');
                    $('.stepcourse-' + indexInput).text(index + 1);
                    $('.stepcourse-' + indexInput).removeClass('d-none');
                });
            }

            function courseLearningPathList(index, value) {
                let price;

                const formatRupiah = (value) => {
                    return `Rp ${parseInt(value, 10).toLocaleString('id-ID')}`;
                };

                price =
                    value.is_premium == 1 ?
                    (value.promotional_price != null && value.promotional_price > 0 ?
                        formatRupiah(value.promotional_price) :
                        value.promotional_price === 0 ?
                        'Gratis' :
                        value.price != null && value.price > 0 ?
                        formatRupiah(value.price) :
                        'Gratis') :
                    'Gratis';


                return `
                    <label for="course_check_${index}" class="d-flex">
                        <div class="card position-relative w-100">
                            <div class="card-body align-items-center">
                                <div class="stepcourse-${index} position-absolute rounded-circle d-none"></div>
                                <input type="checkbox" id="course_check_${index}" data-index="${index}" class="course_check position-absolute d-none" value="${value.id}" ${value.step? 'checked' : ''}/>
                                <div class="row mt-2 gap-sm-2 align-items-center">
                                    <div class="col-12 col-md-2">
                                        <img src="{{ asset('assets/img/courses/course_thumb01.jpg') }}" alt="kursus.jpg"
                                            class="img-fluid rounded">
                                    </div>
                                    <div class="col">
                                        <div class="d-flex gap-2 align-items-center">
                                            <div class="p-1 rounded text-center" style="background: #F6EEFE;color:#9425FE;">
                                                <span>${value.sub_category.name}</span>
                                            </div>
                                            <div class="text-center">
                                                <img src="{{ asset('admin/dist/images/profile/user-1.jpg') }}" alt="user.jpg"
                                                    class="rounded-circle" style="height: 24px;width:24px;">
                                                <span class="text-muted"> ${value.user.name}</span>
                                            </div>
                                        </div>
                                        <h4><b>${value.title}</b></h4>
                                        <p class="text-muted">${value.description}</p>
                                        <div class="d-flex gap-2 align-items-center">
                                            <div class="p-2 rounded" style="background: #FEF5EE;">
                                                <div class="d-flex gap-2"><i style="color: #FFB649;" class="fa fa-book fa-md"></i>
                                                    <b>${value.module_count} Modul</b>
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
                        </div>
                    </label>
                        `;
            }

            function getCourseLearningPath(class_level, division_id) {
                $.ajax({
                    type: "GET",
                    url: "{{ config('app.api_url') }}/api/get-some-course",
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}",
                    },
                    data: {
                        class_level: class_level,
                        division_id: division_id,
                        search: $('#search').val()
                    },
                    dataType: "json",
                    success: function(response) {
                        $('#course-learning-path-list').empty();
                        let courseEmpty = selectedCourse.length == 0;
                        $.each(response.data, function(index, value) {
                            $('#course-learning-path-list').append(
                                courseLearningPathList(index,
                                    value)
                            );

                            if (value.step && courseEmpty) {
                                selectedCourse.push(value.id)
                            }
                        });

                        console.log(selectedCourse);
                        updateStep();

                        $('.submit-btn').click(function(e) {
                            e.preventDefault();

                            $.ajax({
                                type: "post",
                                url: "{{ config('app.api_url') }}/api/learning-paths",
                                headers: {
                                    Authorization: 'Bearer ' +
                                        "{{ session('hummaclass-token') }}",
                                },
                                data: {
                                    course_id: selectedCourse,
                                    division_id: divisionId,
                                    class_level: classId
                                },
                                dataType: "json",
                                success: function(response) {
                                    Swal.fire({
                                        title: "Berhasil",
                                        text: response.meta.message,
                                        icon: "success",
                                    }).then(function() {
                                        window.location.href =
                                            "{{ route('admin.class.learning-paths.index') }}";
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
                        });

                        $('.course_check').change(function(e) {
                            e.preventDefault();

                            if ($(this).is(':checked')) {
                                value = $(this).val();
                                selectedCourse.push(value);
                                $('.stepcourse-' + $(this).data('index')).text(selectedCourse
                                    .indexOf(value) + 1);
                                $('.stepcourse-' + $(this).data('index')).removeClass('d-none')
                            } else {
                                var index = selectedCourse.indexOf($(this).val());
                                if (index > -1) {
                                    selectedCourse.splice(index, 1);
                                    $(this).prop('checked', false);

                                    updateStep();
                                }
                            }
                            console.log(selectedCourse);
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


            getCourseLearningPath(classId, divisionId);

            $('#search-form').submit(function(e) {
                e.preventDefault();

                getCourseLearningPath(classId, divisionId);
            });
        });
    </script>
@endsection
