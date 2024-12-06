<script>
    $(document).ready(function() {
        let onDragCard = null;
        let selectedDropzone = null;
        let offsetX = 0;
        let offsetY = 0;
        let pointerY;
        let scrollY;
        let positions = [];

        function divisionList(index, value) {
            return `
            <div class="nav flex-column nav-pills "  id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link nav-division_id-link ${index == 0 ? 'active' : ''}"  data-division_id="${value.id}" id="v-pills-${value.name}-tab" data-bs-toggle="pill"
                    href="#v-pills-${value.name}" role="tab" aria-controls="v-pills-${value.name}"
                    aria-selected="true">
                    ${value.name}
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
                    <div id="${value.id}" class="card m-0 input-group position-relative">
                        <div class="card-body align-items-center">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h5><b>Langkah ${index + 1}</b></h5>
                            </div>
                            <div class="row mt-2 align-items-center">
                                <div class="col-12 col-md-3">
                                    <img src="{{ asset('assets/img/courses/course_thumb01.jpg') }}" alt="kursus.jpg"
                                        class="img-fluid rounded">
                                </div>
                                <div class="col">
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
                        <button class="btn-drag btn ms-auto position-absolute" style="height: 100%; right:0;background:#ECECEC;"><i
                                class="fa fa-ellipsis-v"></i></button>
                    </div>
                    <div class="dropzone" style="height: 30px;"></div>
                    `;
        }

        function initDragAndDrop(courses) {
            const parentTop = document.getElementById('course-learning-path-list');
            const cards = document.querySelectorAll('#course-learning-path-list>.card');

            cards.forEach((card) => {
                const dragButton = card.querySelector('.btn-drag');
                positions.push({
                    id: card.getAttribute('id'),
                    x: card.offsetLeft,
                    y: card.offsetTop,
                });

                dragButton.addEventListener('mousedown', (event) => {
                    event.preventDefault();
                    onDragCard = card;

                    // Simpan offset kursor terhadap elemen
                    const rect = onDragCard.getBoundingClientRect();
                    onDragCard.classList.add('position-absolute');
                    onDragCard.classList.remove('position-relative');
                    onDragCard.style.width = parentTop.offsetWidth + 'px';
                    onDragCard.style.zIndex = 1000;
                    onDragCard.style.transform = 'scale(0.9)'

                    onDragCard.style.top = event.pageY - card.offsetHeight / 2 + 'px';
                });
            });

            // Gerakkan elemen saat mouse bergerak
            document.addEventListener('mousemove', (event) => {
                if (onDragCard) {
                    const dropzones = document.querySelectorAll('.dropzone');

                    dropzones.forEach(dropzone => {
                        const dropzoneTop = dropzone.offsetTop;
                        const dropzoneBottom = dropzoneTop + dropzone.offsetHeight;

                        // Periksa apakah kursor berada di dalam rentang dropzone
                        selectedDropzone = dropzone;
                        if (event.pageY >= dropzoneTop && event.pageY <= dropzoneBottom) {
                            selectedDropzone.style.background = '#9425FE';
                        } else {
                            selectedDropzone.style.background = '';
                        }
                    });

                    // Perbarui posisi kartu yang sedang di-drag
                    onDragCard.style.top = event.pageY - onDragCard.offsetHeight / 2 + 'px';
                }
            });


            // Lepas elemen saat mouse dilepas
            document.addEventListener('mouseup', () => {
                if (onDragCard) {
                    onDragCard.style.zIndex = '';
                    onDragCard.style.top = '';
                    onDragCard.classList.remove('position-absolute');
                    onDragCard.classList.add('position-relative');
                    onDragCard.style.transform = ''
                    onDragCard = null;
                    selectedDropzone.style.background = 'transparent';
                }
            });
            console.log(positions);
            
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
                    initDragAndDrop();

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
                url: "{{ config('app.api_url') }}/api/divisions",
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

        $(document).on('click', '#create-learning-path-button', function(e) {
            e.preventDefault();

            // $('#create-learning-path-modal').modal('show');
            let class_level = $('.nav-class_level-link.active').data('class_level')
            let division_id = $('.nav-division_id-link.active').data('division_id')

            let division = JSON.stringify({
                id: division_id,
                name: $('.nav-division_id-link.active').text(),
            })

            let classroom = JSON.stringify({
                id: class_level,
                name: $('.nav-class_level-link.active').text(),
            })

            window.location.href =
                `{{ route('admin.class.learning-paths.create') }}?division=${division}&classroom=${classroom}`;
        })
    });
</script>
