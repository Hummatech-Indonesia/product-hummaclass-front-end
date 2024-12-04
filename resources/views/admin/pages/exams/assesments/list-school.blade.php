<div class="col-12 col-lg-4">
    <div class="card">
        <div class="card-body p-3">
            <h5 class="mb-3 fw-semibold">Daftar Sekolah</h5>
            <form action="">
                <input type="text" class="form-control rounded-3 mb-3" value="Cari...">
            </form>
            <div class="accordion accordion-flush position-relative overflow-hidden" id="list-school">

            </div>
        </div>
    </div>
</div>
@push('script')
    <script>
        $(document).ready(function() {
            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}/api/schools-all",
                headers: {
                    Authorization: "Bearer {{ session('hummaclass-token') }}"
                },
                dataType: "json",
                success: function(response) {
                    $.each(response.data, function(index, value) {
                        $('#list-school').append(listSchool(value));
                    });
                },
                error: function(xhr, status) {
                    commonAlert({
                        'title': 'Gagal',
                        'text': xhr.responseJSON.message,
                        'icon': status
                    });
                }
            });
        });

        function listSchool(school) {
            let classrooms = '';
            var url = "{{ config('app.api_url') }}";

            $.each(school.classrooms, function(index, classroom) {
                let students = '';

                $.each(classroom.student_classrooms, function(index, student) {
                    students += `
                        <div class="d-flex align-items-center mb-3">
                            <img src="${student.photo && student.photo !== url + '/storage' && /\.(jpeg|jpg|gif|png)$/i.test(student.photo) ? student.photo : '{{ asset('admin/dist/images/profile/user-1.jpg') }}'}"
                                class="rounded-circle" width="30" height="30" />
                            <div class="ms-3">
                                <h6 class="fs-3 fw-semibold mb-0">${student.student}</h6>
                            </div>
                        </div>`;
                });

                classrooms += `
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingNested-${school.id}-${index}">
                        <button class="accordion-button collapsed fs-4 fw-semibold" type="button"
                            data-bs-toggle="collapse" data-bs-target="#flush-collapseNested-${school.id}-${index}"
                            aria-expanded="false" aria-controls="flush-collapseNested-${school.id}-${index}">
                            ${classroom.class_level} - ${classroom.name}
                        </button>
                    </h2>
                    <div id="flush-collapseNested-${school.id}-${index}" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingNested-${school.id}-${index}" data-bs-parent="#accordionNestedExample">
                        <div class="accordion-body fw-normal" style="background-color: #F7F7F7">
                            ${students}
                        </div>
                    </div>
                </div>`;
            });

            return `
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed fs-4 fw-semibold" type="button"
                        data-bs-toggle="collapse" data-bs-target="#flush-collapse-${school.id}" aria-expanded="false"
                        aria-controls="flush-collapse-${school.id}">
                        <img src="${school.photo}" alt=""
                            class="img-fluid me-2" style="max-width: 40px; height: auto; border-radius: 8px">
                        <p style="font-size: 13px; text-align: center;">
                            ${school.name}
                        </p>
                    </button>
                </h2>
                <div id="flush-collapse-${school.id}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion" id="accordionNestedExample">
                        ${classrooms}
                    </div>
                </div>
            </div>`;
        }
    </script>
@endpush
