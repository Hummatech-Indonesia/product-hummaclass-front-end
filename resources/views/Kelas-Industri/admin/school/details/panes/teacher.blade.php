<div class="tab-pane fade" id="teachers" role="tabpanel" aria-labelledby="overview-tab" tabindex="0">
    <form action="">
        <div class="d-flex gap-3 mb-3 mt-3">
            <div class="position-relative">
                <input type="text" class="form-control product-search px-4 ps-5" style="background-color: #fff"
                    id="search-name" name="name" value="" placeholder="Search">
                <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 ms-3"
                    style="color: #8B8B8B"></i>
            </div>
        </div>
    </form>
    <div class="row teacher-card-container">
    </div>
    <div class="d-flex justify-content-end">
        <nav id="pagination">

        </nav>
    </div>
</div>

@push('script')
    <script>
        $(document).ready(function() {
            function teacherList(index, value) {
                var url = "{{ config('app.api_url') }}";
                return `
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card text-center">
                        <img src="{{ asset('assets/img/card/card-banner.png') }}" class="rounded-1 img-fluid position-absolute"
                            style="z-index: 1; width: 100%">
                        <div class="card-body p-2">
                            <div class="mt-4" class="" style="position: relative; z-index: 2;">
                                <div style="width: 5rem;" class="m-auto">
                                    <img src="${value.user.photo && value.user.photo !== url + '/storage' && /\.(jpeg|jpg|gif|png)$/i.test(value.user.photo) ? value.user.photo : '{{ asset('assets/img/no-image/no-profile.jpeg') }}'}"
                                        class="img-fluid rounded-circle"
                                        style="z-index: 2; background-color: grey; aspect-ratio: 1/1;object-fit:cover" />
                                </div>
                                <h3 class="card-title mt-3">${value.user.name}</h3>
                                <h6 class="card-subtitle">${value.user.email}</h6>
                            </div>

                            {{-- buttons --}}
                            <div class="col-md-12 d-flex justify-content-between gap-2 mt-3">
                                <button id="detailTeacherButton" 
                                data-id="${value.id}"
                                     class="btn text-white fs-2" data-bs-toggle="modal"
                                data-bs-target="#modal-detail-teacher"
                                    style="background: #9425FE; width: 70%;">Lihat Detail</button>
                                <button id="editTeacherButton" data-id="${value.id}" class="btn btn-sm btn-warning" style="width: 15%">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="25" viewBox="0 0 48 48">
                                        <path fill="currentColor"
                                            d="M32.206 6.025a6.907 6.907 0 1 1 9.768 9.767L39.77 18L30 8.23zM28.233 10L8.038 30.197a6 6 0 0 0-1.572 2.758L4.039 42.44a1.25 1.25 0 0 0 1.52 1.52l9.487-2.424a6 6 0 0 0 2.76-1.572l20.195-20.198z">
                                        </path>
                                    </svg>
                                </button>

                                <button data-id="${value.id}" id="deleteTeacherButton"
                                    class="btn btn-sm text-white btn-delete" style="width: 15%;background-color: #DB0909;"
                                    fdprocessedid="athmbv">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M4 7l16 0"></path>
                                        <path d="M10 11l0 6"></path>
                                        <path d="M14 11l0 6"></path>
                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            `
            }


            function getTeachers() {
                $.ajax({
                    type: "GET",
                    url: "{{ config('app.api_url') }}/api/teachers/" + "{{ $slug }}",
                    dataType: "json",
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                    },
                    success: function(response) {
                        console.log(response);
                        $('.teacher-card-container').empty();

                        if (response.data.data.length > 0) {
                            $.each(response.data.data, function(indexInArray, valueOfElement) {
                                $('.teacher-card-container').append(
                                    teacherList(indexInArray, valueOfElement)
                                );
                            });
                            $('#pagination').html(handlePaginate(response.data.paginate))

                        } else {
                            $('.teacher-card-container').append(emptyCard());
                        }
                    }
                });
            }

            getTeachers();

            $(document).on('click', '#deleteTeacherButton', function() {
                $('#modal-delete').modal('show')
                const id = $(this).data('id')
                console.log('test');
                $('#deleteForm').submit(function(e) {
                    e.preventDefault();
                    $.ajax({
                        type: "DELETE",
                        url: "{{ config('app.api_url') }}/api/teachers/" + id,
                        headers: {
                            Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                        },
                        dataType: "json",
                        success: function(response) {
                            getTeachers();
                        }
                    });
                });
            })

            $(document).on('click', '#editTeacherButton', function() {
                const id = $(this).data('id')
                window.location.href = "/admin/class/teacher/" + id + "/edit"
            })

            $(document).on('click', '#detailTeacherButton', function() {
                $('#modal-detail-teacher').modal('show')
                const id = $(this).data('id')
                $.ajax({
                    type: "GET",
                    url: "{{ config('app.api_url') }}/api/teacher-detail/" + id,
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                    },
                    dataType: "json",
                    success: function(response) {
                        const name = response.data.user.name;
                        const email = response.data.user.email;
                        const gender = response.data.user.gender;
                        const address = response.data.user.address;
                        const phone_number = response.data.user.phone_number;

                        $('#teacher-name-detail').html(name);
                        $('#teacher-gender-detail').html(gender);
                        $('#teacher-email-detail').html(email);
                        $('#teacher-address-detail').html(address);
                        $('#teacher-phone_number-detail').html(phone_number);
                    }
                });
            })
        });
    </script>
@endpush
