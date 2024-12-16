<script>
    $(document).ready(function() {
        let onDragCard = null;
        let selectedDropzone = null;
        let positions = [];
        let division_id;
        let class_level;
        let changed = false;

        function updatePositions(id) {
            positions = [];
            const cards = document.querySelectorAll('#course-learning-path-list > .card');
            cards.forEach((card, index) => {
                positions.push({
                    id: card.id,
                    position: index + 1,
                });
            });
            courseIds = $.map(positions, function(elementOrValue, indexOrKey) {
                return elementOrValue.id;
            });

            if (!changed) {
                changed = true;
            } else {
                $.ajax({
                    type: "put",
                    url: "{{ config('app.api_url') }}/api/learning-paths/" + id,
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                    },
                    data: {
                        course_id: courseIds,
                        division_id: division_id,
                        class_level: class_level
                    },
                    dataType: "json",
                    success: function(response) {}
                });
            }
        }

        function divisionList(index, value) {
            return `
                <a class="nav-link nav-division_id-link ${index == 0 ? 'active' : ''}"  data-division_id="${value.id}" id="v-pills-${value.name}-tab" data-bs-toggle="pill"
                    href="#v-pills-${value.name}" role="tab" aria-controls="v-pills-${value.name}"
                    aria-selected="true">
                    ${value.name}
                </a>
            `;
        }

        function courseLearningPathList(index, value) {
            let price;

            const formatRupiah = (value) => {
                return `Rp ${parseInt(value, 10).toLocaleString('id-ID')}`;
            };

            price =
                value.course.is_premium == 1 ?
                value.course.promotional_price != null && value.course.promotional_price > 0 ?
                formatRupiah(value.course.promotional_price) :
                value.course.promotional_price === 0 ?
                'Gratis' :
                value.course.price != null && value.course.price > 0 ?
                formatRupiah(value.course.price) :
                'Gratis' :
                'Gratis';

            return `
                <div id="${value.course.id}" class="card input-group position-relative">
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
                    <button class="btn-drag btn ms-auto position-absolute" data-id="${value.learning_path.id}" style="height: 100%; right:0;background:#ECECEC;"><i
                            class="fa fa-ellipsis-v"></i></button>
                </div>
                `;
        }

        let selectedDataId = null;

        function initDragAndDrop() {
            const cards = document.querySelectorAll('#course-learning-path-list > .card');

            cards.forEach((card) => {
                const dragButton = card.querySelector('.btn-drag');

                dragButton.addEventListener('mousedown', (event) => {
                    event.preventDefault();
                    onDragCard = card;

                    selectedDataId = dragButton.getAttribute('data-id');

                    const rect = onDragCard.getBoundingClientRect();
                    onDragCard.classList.add('dragging');
                    onDragCard.style.width = rect.width + 'px';
                    onDragCard.style.position = 'absolute';
                    onDragCard.style.zIndex = 1000;
                    onDragCard.style.top = rect.top + 'px';
                    onDragCard.style.left = rect.left + 'px';

                    document.body.appendChild(onDragCard);
                });
            });

            document.addEventListener('mousemove', (event) => {
                if (onDragCard) {
                    onDragCard.style.top = event.pageY - onDragCard.offsetHeight / 2 + 'px';
                    onDragCard.style.left = event.pageX - onDragCard.offsetWidth / 2 + 'px';

                    const dropzones = document.querySelectorAll('#course-learning-path-list > .card');
                    dropzones.forEach((dropzone) => {
                        if (dropzone !== onDragCard) {
                            const rect = dropzone.getBoundingClientRect();

                            if (event.clientY > rect.top && event.clientY < rect.bottom) {
                                selectedDropzone = dropzone;
                                dropzone.style.borderTop = '2px solid #9425FE';
                            } else {
                                dropzone.style.borderTop = '';
                            }
                        }
                    });
                }
            });

            document.addEventListener('mouseup', () => {
                if (onDragCard) {
                    if (selectedDropzone) {
                        const parent = document.getElementById('course-learning-path-list');
                        selectedDropzone.style.borderTop = '';

                        if (onDragCard.compareDocumentPosition(selectedDropzone) & Node
                            .DOCUMENT_POSITION_FOLLOWING) {
                            parent.insertBefore(onDragCard, selectedDropzone.nextSibling);
                        } else {
                            parent.insertBefore(onDragCard, selectedDropzone);
                        }
                    }

                    onDragCard.style.position = '';
                    onDragCard.style.width = '';
                    onDragCard.style.zIndex = '';
                    onDragCard.style.top = '';
                    onDragCard.style.left = '';
                    onDragCard.classList.remove('dragging');

                    selectedDropzone = null;
                    onDragCard = null;

                    updatePositions(selectedDataId);
                    selectedDataId = null;
                }
            });
        }

        function getCourseLearningPath(class_level, division_id) {
            $.ajax({
                type: 'GET',
                url: "{{ config('app.api_url') }}/api/learning-paths",
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}",
                },
                data: {
                    class_level: class_level,
                    division_id: division_id,
                },
                dataType: 'json',
                success: function(response) {
                    $('#course-learning-path-list').empty();
                    $.each(response.data, function(index, value) {
                        $.each(value.course_learning_paths, function(
                            indexInArray,
                            valueOfElement
                        ) {
                            $('#course-learning-path-list').append(
                                courseLearningPathList(indexInArray,
                                    valueOfElement)
                            );
                        });
                    });
                    initDragAndDrop();
                    updatePositions();
                },
                error: function(xhr) {
                    Swal.fire({
                        title: 'Terjadi Kesalahan!',
                        text: 'Tidak dapat memuat data learning path.',
                        icon: 'error',
                    });
                },
            });
        }

        class_level = $('.nav-class_level-link.active').data('class_level');
        // getCourseLearningPath(class_level, $('.nav-division_id-link.active').data('division_id'));
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

                    getCourseLearningPath(class_level, division_id);

                    $('.nav-division_id-link').click(function(e) {
                        e.preventDefault();

                        let divisionId = $('.nav-division_id-link.active').data(
                            'division_id');
                        let classLevel = $('.nav-class_level-link.active').data(
                            'class_level');
                        getCourseLearningPath(classLevel, divisionId);
                    });

                    $('.nav-class_level-link').click(function(e) {
                        e.preventDefault();

                        let divisionId = $('.nav-division_id-link.active').data(
                            'division_id');
                        let classLevel = $('.nav-class_level-link.active').data(
                            'class_level');
                        getCourseLearningPath(classLevel, divisionId);
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

        getDivision(class_level);

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
