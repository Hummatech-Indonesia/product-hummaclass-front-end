@section('script')
    <script>
        let debounceTimer;
        $('#search-name').keyup(function() {
            clearTimeout(debounceTimer);
            debounceTimer = setTimeout(function() {
                getCourse(1)
            }, 500);
        });
        $('#sub-categories').on('change', function() {
            getCourse(1);
        });

        $('#status').on('change', function() {
            getCourse(1);
        });

        category()

        function category() {
            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}/api/sub-categories",
                headers: {
                    'Authorization': `Bearer {{ session('hummaclass-token') }}`
                },
                dataType: "json",
                contentType: false,
                processData: false,
                success: function(response) {
                    $.each(response.data, function(index, value) {
                        $('#sub-categories').append(
                            `<option value="${value.id}">${value.name}</option>`);
                    });
                },
                error: function(response) {
                    Swal.fire({
                        title: "Terjadi Kesalahan!",
                        text: "Ada kesalahan saat menyimpan data.",
                        icon: "error"
                    });
                }
            });
        }

        function getCourse(page) {
            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}" + "/api/courses?page=" + page,
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}",
                },
                dataType: "json",
                data: {
                    title: $('#search-name').val(),
                    categories: $('#sub-categories').val(),
                    status: $('#status').val()
                },
                success: function(response) {
                    $('#list-card').empty();
                    if (response.data.data.length > 0) {
                        response.data.data.forEach(data => {
                            cardCourse(data);
                        });
                        $('#pagination').html(handlePaginate(response.data.paginate));
                    } else {
                        $('#list-card').append(emptyCard());
                        $('#pagination').hide();
                    }
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

        $(document).on('click', '.btn-delete', function() {
            var id = $(this).data('id');
            var url = "{{ config('app.api_url') }}" + "/api/courses/" + id;

            $('#modal-delete').modal('show');

            funDelete(url);
        });

        $(document).on('click', '.btn-confirmation', function() {
            var id = $(this).data('id');
            var url = "{{ config('app.api_url') }}" + "/api/courses-ready/" + id;

            $('#modal-confirmation').modal('show');

            funConfirmation(url);
        });


        function funConfirmation(url) {

            $('.deleteConfirmation').click(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "PATCH",
                    url: url,
                    headers: {
                        'Authorization': 'Bearer {{ session('hummaclass-token') }}'
                    },
                    success: function(response) {
                        $('#modal-confirmation').modal('hide');
                        Swal.fire({
                            title: "Sukses",
                            text: "Berhasil konfirmasi data.",
                            icon: "success"
                        });
                        getCourse(1);
                    },
                    error: function(response) {
                        $('#modal-confirmation').modal('hide');
                        if (response.status == 400) {
                            Swal.fire({
                                title: "Terjadi Kesalahan!",
                                text: response.responseJSON.meta.message,
                                icon: "error"
                            });
                        } else {
                            Swal.fire({
                                title: "Terjadi Kesalahan!",
                                text: "Ada kesalahan saat konfirmasi data.",
                                icon: "error"
                            });
                        }
                    }
                });
            });
        }

        function funDelete(url) {

            $('.deleteConfirmation').click(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "DELETE",
                    url: url,
                    headers: {
                        'Authorization': 'Bearer {{ session('hummaclass-token') }}'
                    },
                    success: function(response) {
                        $('#modal-delete').modal('hide');
                        Swal.fire({
                            title: "Sukses",
                            text: "Berhasil menghapus data.",
                            icon: "success"
                        });
                        getCourse(1);
                    },
                    error: function(response) {
                        $('#modal-delete').modal('hide');
                        if (response.status == 400) {
                            Swal.fire({
                                title: "Terjadi Kesalahan!",
                                text: response.responseJSON.meta.message,
                                icon: "error"
                            });
                        } else {
                            Swal.fire({
                                title: "Terjadi Kesalahan!",
                                text: "Ada kesalahan saat menghapus data.",
                                icon: "error"
                            });
                        }
                    }
                });
            });
        }
        getCourse(1)

        function cardCourse(data) {
            var url = "{{ config('app.api_url') }}";
            let card = `
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card box-shadow position-relative" style="border-radius: 15px;">
                        <button class="btn btn-sm btn-warning text-black fw-semibold position-absolute ms-2 mt-2">
                            ${data.sub_category}
                        </button>
                        <img src="${data.photo && data.photo !== url + '/storage' && /\.(jpeg|jpg|gif|png)$/i.test(data.photo) ? data.photo : '{{ asset('assets/img/no-image/no-image.jpg') }}'}" class="card-img-top img-fluid" alt="Course Image" 
                            style="height: 200px; object-fit: cover; border-radius: 15px 15px 0 0;">
                        <div class="card-body p-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge rounded-pill ${data.is_premium === 0 ? 'bg-light-success text-success' : 'bg-light-warning text-warning'} fw-semibold">
                                    ${data.is_premium === 0 ? 'Gratis' : 'Premium'}
                                </span>
                                <span class="badge rounded-pill ${data.is_premium === 0 ? 'bg-light-secondary text-secondary' : 'bg-light-success text-success'} fw-semibold">
                                    ${data.is_ready === 0 ? 'Draft' : 'Published'}
                                </span>
                            </div>
                            <div class="mt-2">
                                <h5 class="card-title fw-bolder" title="${data.title}">${data.title}</h5>
                                <p class="card-text text-muted text-truncate" title="${data.sub_title}">${data.sub_title}</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-2">
                                <h4 class="fw-bolder fs-4 text-purple">
                                    ${data.is_premium === 0 ? 'Gratis' : formatRupiah(data.price)}
                                </h4>
                                <div class="d-flex align-items-center gap-1">
                                    <span class="text-warning">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mb-1" width="15" height="15" viewBox="0 0 24 24" fill="currentColor">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .1a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"/>
                                        </svg>
                                    </span>
                                    <p class="mb-0 fs-2">(${data.course_review_count} Reviews)</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between text-muted mt-2">
                                <p class="mb-0 fs-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-book-2">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M19 4v16h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12z"/>
                                        <path d="M19 16h-12a2 2 0 0 0 -2 2"/>
                                        <path d="M9 8h6"/>
                                    </svg> ${data.modules_count} Materi
                                </p>
                                <p class="mb-0 fs-3">${data.user_courses_count} Terjual</p>
                            </div>
                            <div class="row mt-3">
                                ${data.is_ready == 0 ? 
                                    `<div class="col-md-12 d-flex justify-content-between gap-2">
                                                        <a href="{{ route('admin.courses.show', '') }}/${data.slug}" class="btn text-white fs-2" style="background: #9425FE; width: 55%;">Lihat Detail</a>
                                                        <a href="/admin/courses/${data.slug}/edit" class="btn btn-sm btn-warning" style="width: 15%">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="25" viewBox="0 0 48 48">
                                                                <path fill="currentColor" d="M32.206 6.025a6.907 6.907 0 1 1 9.768 9.767L39.77 18L30 8.23zM28.233 10L8.038 30.197a6 6 0 0 0-1.572 2.758L4.039 42.44a1.25 1.25 0 0 0 1.52 1.52l9.487-2.424a6 6 0 0 0 2.76-1.572l20.195-20.198z"/>
                                                            </svg>
                                                        </a>
                                                        <button data-id="${data.id}" class="btn btn-sm btn-danger text-white btn-delete" style="width: 15%">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                                <path d="M4 7l16 0"/>
                                                                <path d="M10 11l0 6"/>
                                                                <path d="M14 11l0 6"/>
                                                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"/>
                                                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"/>
                                                            </svg>
                                                        </button>
                                                        <button data-id="${data.id}" class="btn btn-sm btn-success text-white btn-confirmation" style="width: 15%">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                                                                <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z"/>
                                                            </svg>
                                                        </button>
                                                    </div>` :
                                    `
                                                <div class="col-md-12 pe-0">
                                                        <a href="{{ route('admin.courses.show', '') }}/${data.slug}" class="btn text-white fs-2" style="background: #9425FE; width: 100%;">Lihat Detail</a>
                                                    </div>`
                                }
                            </div>
                        </div>
                    </div>
                </div>
            `;

            $('#list-card').append(card);
        }
    </script>
@endsection

<style scoped>
    /* .card-text {
        display: -webkit-box;
        /* Gunakan Flexbox versi lama untuk mendukung multi-line ellipsis */
    -webkit-box-orient: vertical;
    /* Atur orientasi menjadi vertikal */
    -webkit-line-clamp: 2;
    /* Batasi jumlah baris menjadi 2 */
    overflow: hidden;
    /* Sembunyikan teks yang melebihi batas */
    text-overflow: ellipsis;
    /* Tambahkan ellipsis (...) pada teks yang terpotong */
    max-height: calc(1.2em * 2);
    /* Sesuaikan dengan jumlah baris yang diinginkan */
    line-height: 1.2em;
    }

    */ .card {
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        border: none;
        transition: transform 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .card-title,
    .card-text {
        /* white-space: nowrap; */
        overflow: hidden;
        text-overflow: ellipsis;
        font-size: 13px;
    }

    .text-purple {
        color: #7209DB;
    }

    .btn {
        font-size: 0.9rem;
        padding: 8px 12px;
    }

    .btn-sm {
        padding: 6px 8px;
        font-size: 0.85rem;
    }

    .btn-primary,
    .btn-warning,
    .btn-danger,
    .btn-success {
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background-color 0.3s, transform 0.2s;
    }

    .btn-primary:hover,
    .btn-warning:hover,
    .btn-danger:hover,
    .btn-success:hover {
        transform: translateY(-2px);
    }

    .btn svg {
        margin-right: 0;
    }

    .d-flex .gap-2>button,
    .d-flex .gap-2>a {
        flex: 1;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .box-shadow {
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* .fs-6 {
        font-size: 14px;
    } */

    .position-absolute {
        z-index: 1;
    }
</style>
