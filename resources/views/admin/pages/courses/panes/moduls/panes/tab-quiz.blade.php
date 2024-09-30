<div>
    <div class="text-end mb-3">
        <a href="{{ route('admin.create-quiz.index', $id) }}" class="btn text-white d-none addQuiz"
            style="background-color: var(--purple-primary)">
            <svg xmlns="http://www.w3.org/2000/svg" class="text-white mb-1 me-1" width="16" height="16"
                viewBox="0 0 32 32">
                <path fill="currentColor"
                    d="M6.813 2.406L5.405 3.812L7.5 5.906L8.906 4.5zm18.375 0L23.093 4.5L24.5 5.906l2.094-2.093zM16 3.03q-.495.004-1 .064h-.03c-4.056.465-7.284 3.742-7.845 7.78c-.448 3.25.892 6.197 3.125 8.095a5.24 5.24 0 0 1 1.75 3.03v6h2.28c.348.597.983 1 1.72 1s1.372-.403 1.72-1H20v-4h.094v-1.188c0-1.466.762-2.944 2-4.093C23.75 17.06 25 14.705 25 12c0-4.94-4.066-9.016-9-8.97m0 2c3.865-.054 7 3.11 7 6.97c0 2.094-.97 3.938-2.313 5.28l.032.032A7.8 7.8 0 0 0 18.279 22h-4.374c-.22-1.714-.955-3.373-2.344-4.563c-1.767-1.5-2.82-3.76-2.468-6.312c.437-3.15 2.993-5.683 6.125-6.03a7 7 0 0 1 .78-.064zM2 12v2h3v-2zm25 0v2h3v-2zM7.5 20.094l-2.094 2.093l1.407 1.407L8.905 21.5zm17 0L23.094 21.5l2.093 2.094l1.407-1.407zM14 24h4v2h-4z" />
            </svg>
            Tambah
        </a>
    </div>
    <div class="quizContainer">

    </div>
</div>
@push('script')
    <script>
        $(document).ready(function() {
            $.ajax({
                type: "GET",
                url: "{{ env('API_URL') }}/api/module-questions",
                dataType: "json",
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                success: function(response) {
                    console.log(response);
                    $.each(response.data, function(index, value) {
                        $('.quizContainer').append(
                            `
                    <div class="card position-relative">
    <div class="p-3">
            <div class="d-flex justify-content-between">
                <b>${index + 1}. ${value.question}</b>
                <button class="btn btn-light-danger text-danger p-1">
                    <i class="ti ti-trash fs-6 fw-semibold"></i>
                </button>
            </div>
            <div class="mt-2">
                <h6 class="mb-3 ms-1 ${value.answer === 'option_a' ? 'text-success' : ''}">A. ${value.option_a}</h6>
                <h6 class="mb-3 ms-1 ${value.answer === 'option_b' ? 'text-success' : ''}">B. ${value.option_b}</h6>
                <h6 class="mb-3 ms-1 ${value.answer === 'option_c' ? 'text-success' : ''}">C. ${value.option_c}</h6>
                <h6 class="mb-3 ms-1 ${value.answer === 'option_d' ? 'text-success' : ''}">D. ${value.option_d}</h6>
                <h6 class="mb-3 ms-1 ${value.answer === 'option_e' ? 'text-success' : ''}">E. ${value.option_e}</h6>
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
@endpush
