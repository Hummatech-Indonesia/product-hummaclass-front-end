{{-- <div>
    <div class="quizContainer">

    </div>
</div>
@push('script')
    <script>
        $(document).ready(function() {
            var id = "{{ $id }}";
            $.ajax({
                type: "GET",
                url: "{{ env('API_URL') }}/api/module-questions/detail/" + id,
                dataType: "json",
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                success: function(response) {
                    $.each(response.data, function(index, value) {
                        $('.quizContainer').append(
                            `
                            <div class="card position-relative">
                                <div class="p-3">
                                        <div class="d-flex justify-content-between">
                                            <b class="d-flex">${index + 1}. ${value.question}</b>
                                            <button data-id="${value.id}" class="btn btn-light-danger text-danger p-1">
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
                            </div>
                            `
                        );
                    });
                }
            });
        });
    </script>
@endpush --}}
