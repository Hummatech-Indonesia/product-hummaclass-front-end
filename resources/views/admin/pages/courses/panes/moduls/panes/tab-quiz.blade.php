<div>
    <div class="row" id="quiz-detail">
    </div>
    <div class="quizContainer">

    </div>
</div>

@push('script')
    <script>
        $(document).ready(function() {
            var id = "{{ $id }}";

            // Fetch module detail
            $.ajax({
                type: "get",
                url: "{{ config('app.api_url') }}/api/modules/detail/" + id,
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                success: function(response) {

                    // Fetch quizzes
                    $.ajax({
                        type: "get",
                        url: "{{ config('app.api_url') }}/api/quizzes/" + response.data.slug,
                        headers: {
                            Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                        },
                        dataType: "json",
                        success: function(response) {
                            $('#quiz-detail').empty().append(
                                `<div class="col-6">
                                <div class="card">
                                    <div class="card-body p-2 d-flex flex-row align-items-center gap-2">
                                        <span class="bg-light-warning rounded-2 p-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="icon icon-tabler icons-tabler-outline icon-tabler-clipboard-list text-warning">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                                                <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                                <path d="M9 12l.01 0" />
                                                <path d="M13 12l2 0" />
                                                <path d="M9 16l.01 0" />
                                                <path d="M13 16l2 0" />
                                            </svg>
                                        </span>
                                        <h5>Jumlah Soal: <span id="total_question">${response.data.total_question}</span></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-body p-2 d-flex flex-row align-items-center gap-2">
                                        <span class="bg-light-warning rounded-2 p-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="icon icon-tabler icons-tabler-outline icon-tabler-clock text-warning">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                                <path d="M12 7v5l3 3" />
                                            </svg>
                                        </span>
                                        <h5>Waktu Pengerjaan: <span id="duration">${response.data.duration}</span></h5>
                                    </div>
                                </div>
                            </div>`
                            );
                        },
                        error: function(err) {
                            $('#quiz-detail').append(
                                `<p>${err.responseJSON ? err.responseJSON.meta.message : 'Terjadi kesalahan saat memuat data.'}</p>`
                            );
                        }
                    });

                },
                error: function(err) {
                    console.error("Error fetching module details:", err);
                }
            });

            // Fetch module questions
            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}/api/module-questions/detail/" + id,
                dataType: "json",
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                success: function(response) {
                    $('.quizContainer').empty();
                    if (response.data.length > 0) {
                        $.each(response.data, function(index, value) {
                            $('.quizContainer').append(
                                `<div class="card position-relative">
                                <div class="p-3">
                                    <div class="d-flex justify-content-between">
                                        <b class="d-flex">${index + 1}. ${value.question}</b>
                                        <button data-id="${value.id}" class="btn btn-light-danger btn-delete-quiz text-danger p-1">
                                            <i class="ti ti-trash fs-6 fw-semibold"></i>
                                        </button>
                                    </div>
                                    <div class="mt-2">
                                        <h6 class="mb-3 ms-1 d-flex ${value.answer === 'option_a' ? 'text-success' : ''}">A. ${value.option_a}</h6>
                                        <h6 class="mb-3 ms-1 d-flex ${value.answer === 'option_b' ? 'text-success' : ''}">B. ${value.option_b}</h6>
                                        <h6 class="mb-3 ms-1 d-flex ${value.answer === 'option_c' ? 'text-success' : ''}">C. ${value.option_c}</h6>
                                        <h6 class="mb-3 ms-1 d-flex ${value.answer === 'option_d' ? 'text-success' : ''}">D. ${value.option_d}</h6>
                                        <h6 class="mb-3 ms-1 d-flex ${value.answer === 'option_e' ? 'text-success' : ''}">E. ${value.option_e}</h6>
                                    </div>
                                </div>
                                <div class="position-absolute bottom-0 end-0" style="padding: 0px;">
                                    <img src="{{ asset('admin/assets/images/background/bubble-purple.png') }}" alt="Description" class="img-fluid" style="max-width: 100px; height: auto;">
                                </div>
                            </div>`
                            );
                        });
                    } else {
                        $('.quizContainer').append(empty());
                    }

                },
                error: function(err) {
                    console.error("Error fetching module questions:", err);
                }
            });
        });

        // Delete quiz
        $(document).on('click', '.btn-delete-quiz', function() {
            const id = $(this).data('id');
            const url = "{{ config('app.api_url') }}/api/module-questions/" + id;

            $('#modal-delete').modal('show');
            deletemoduleQuiz(url);
        });

        function deletemoduleQuiz(url) {
            $('.deleteConfirmation').click(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "DELETE",
                    url: url,
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                    },
                    dataType: "json",
                    success: function(response) {
                        Swal.fire({
                            title: "Berhasil!",
                            text: response.meta.message,
                            icon: "success"
                        });
                        location.reload(); // Reload page to reflect deletion
                    },
                    error: function(response) {
                        Swal.fire({
                            title: "Terjadi Kesalahan!",
                            text: "Ada kesalahan saat menghapus data.",
                            icon: "error"
                        });
                    }
                });
            });
        }
    </script>
@endpush
