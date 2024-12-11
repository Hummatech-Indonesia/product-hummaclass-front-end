<script>
    $.ajax({
        type: "get",
        url: "{{ config('app.api_url') }}/api/journals",
        headers: {
            Authorization: "Bearer {{ session('hummaclass-token') }}"
        },
        dataType: "json",
        success: function(response) {
            let content = '';

            $('#tableBody').empty();
            $.each(response.data, function(index, data) {
                content += mentorJournal(index, data);
            });
            $('#tableBody').append(content);

            let journalId;
            $('.btn-edit').click(function(e) {
                e.preventDefault();

                
                
                journalId = $(this).data('journal')
                console.log(journalId)
                let title = $(this).data('title')
                let image = $(this).data('image')
                let classroom_id = $(this).data('classroom')
                let description = $(this).data('description')

                let formData = $('#update-journal-form')

                $('#title-edit').val(title);
                $('#image-edit').attr('src', image);
                $('#classroom_id_update').val(classroom_id);
                $('#description-edit').val(description);
                $('#modal-update').modal('show');
            });


            $('#update-journal-form').submit(function(e) {
                e.preventDefault();

                var formData = new FormData(this);
                $.ajax({
                    type: "POST",
                    url: `{{ config('app.api_url') }}/api/journals/${journalId}`,
                    data: formData,
                    dataType: "json",
                    headers: {
                        Authorization: "Bearer {{ session('hummaclass-token') }}"
                    },
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        Swal.fire({
                            title: "Sukses!",
                            text: "Berhasil memperbarui data.",
                            icon: "success"
                        }).then(() => {
                            window.location.reload();
                        });
                    },
                    error: function(response) {
                        if (response.status === 422) {
                            let errors = response.responseJSON.data;

                            $.each(errors, function(field, messages) {

                                $(`[name="${field}"]`).addClass('is-invalid');

                                $(`[name="${field}"]`).closest('.form-group').find(
                                    '.invalid-feedback').text(messages[0]);
                            });
                        } else {
                            Swal.fire({
                                title: "Terjadi Kesalahan!",
                                text: "Ada kesalahan saat menyimpan data.",
                                icon: "error"
                            });
                        }
                    }
                });
            });
        }
    });

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
                            data-journal="${data.id}"
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
</script>
