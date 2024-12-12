<script>
    function mentorJournal(index, data) {
        return `
            <tr class="fw-semibold">
                <td>
                    <div class="d-flex align-items-center">
                        <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">${index + 1}</h6>
                        </div>
                    </div>
                </td>
                <td>${data.title}</td>
                <td><img src="${data.image}" width="100%" /></td>
                <td>${data.date}</td>
                <td>
                    <span>${data.classroom.name}</span>
                </td>
                <td>   
                    <span>${data.description}</span>
                </td>
                <td>
                    <div class="d-flex gap-1">
                        <button class="btn btn-sm text-white btn-detail-journal" style="background-color: #9425FE"
                            data-name="${data.user.name}"
                            data-title="${data.title}"
                            data-classroom="${data.classroom.name}"
                            data-image="${data.image}"
                            data-description="${data.description}"
                            data-date="${data.date}"
                            >
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2">
                                    <path d="M3 13c3.6-8 14.4-8 18 0" />
                                    <path d="M12 17a3 3 0 1 1 0-6a3 3 0 0 1 0 6" />
                                </g>
                            </svg>
                        </button>
                        <button class="btn btn-sm btn-danger text-white btn-delete" data-id="${data.id}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 7l16 0" />
                                <path d="M10 11l0 6" />
                                <path d="M14 11l0 6" />
                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                            </svg>
                        </button>
                        <button class="btn btn-sm btn-warning btn-edit text-white" 
                            data-id="${data.id}"
                            data-title="${data.title}"
                            data-image="${data.image}"
                            data-classroom="${data.classroom.id}"
                            data-description="${data.description}"
                            >
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-pencil">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                                <path d="M13.5 6.5l4 4" />
                            </svg>
                        </button>
                    </div>
                </td>
            </tr>
        `
    }

    function get(page) {
        $.ajax({
            type: "get",
            url: "{{ config('app.api_url') }}/api/journals?page=" + page,
            headers: {
                Authorization: "Bearer {{ session('hummaclass-token') }}"
            },
            dataType: "json",
            success: function(response) {
                let content = '';

                $('#tableBody').empty();
                $.each(response.data.data, function(index, data) {
                    content += mentorJournal(index, data);
                });
                $('#tableBody').append(content);
                $('#pagination').html(handlePaginate(response.data.paginate));

            }
        });
    }

    get(1)

    $(document).ready(function() {

        $(document).on('click', '.btn-edit', function() {
            $('#modal-update').modal('show')
            const id = $(this).data('id')
            const title = $(this).data('title')
            const description = $(this).data('description')
            const classroom = $(this).data('classroom')

            $('#title-edit').val(title);
            $('#description-edit').val(description);
            $('#classroom_id_update').val(classroom);
            $('#update-journal-form').off().submit(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "{{ config('app.api_url') }}/api/journals/" + id,
                    headers: {
                        Authorization: "Bearer {{ session('hummaclass-token') }}"
                    },
                    data: new FormData(this),
                    dataType: "json",
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        Swal.fire({
                            title: "Sukses!",
                            text: "berhasil menghapus data",
                            icon: "success"
                        }).then(() => {
                            $('#modal-update').modal('hide')
                            get(1)
                        })
                    },
                    error: function(xhr) {
                        Swal.fire({
                            title: "Terjadi kesalahan!",
                            text: "gagal menghapus data",
                            icon: "error"
                        })
                    }
                });
            });
        })

        $(document).on('click', '.btn-delete', function() {
            var id = $(this).data('id');
            $('#modal-delete').modal('show');
            $('#deleteForm').off().submit(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "DELETE",
                    url: "{{ config('app.api_url') }}/api/journals/" + id,
                    headers: {
                        Authorization: "Bearer {{ session('hummaclass-token') }}"
                    },
                    dataType: "json",
                    success: function(response) {
                        Swal.fire({
                            title: "sukses!",
                            text: "berhasil menghapus data",
                            icon: "success"
                        })
                        get(1)
                    },
                    error: function(xhr) {
                        Swal.fire({
                            title: "Terjadi Kesalahan!",
                            text: 'Gagal menghapus data',
                            icon: "error"
                        });
                    }
                });
            });
        })
    });
</script>
