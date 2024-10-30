<script>
    $(document).ready(function() {
        var id = "{{ $id }}";

        $.ajax({
            type: "GET"
            , url: "{{ config('app.api_url') }}" + "/api/course-test-statistic/" + id
            , headers: {
                Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
            }
            , dataType: "json"
            , success: function(response) {

                $('#detail-total-question').html(response.data.total_question);
                $('#detail-total-correct').html(response.data.total_correct);
                $('#detail-total-fault').html(response.data.total_fault);
                $('#userPhoto').attr('src', response.data.user_photo);
                $('#userName').html(response.data.user_name);
                $('#userEmail').html(response.data.user_email);


                $.each(response.data.questions, function(index, value) {
                    $('.question-list').append(
                        questionList(index, value)
                    );
                });
            }
            , error: function(xhr) {
                Swal.fire({
                    title: "Terjadi Kesalahan!"
                    , text: "Tidak dapat memuat data modul."
                    , icon: "error"
                });
            }
        });

        function questionList(index, value) {
            va
            let check;

            if (value.user_answer !== value.correct_answer) {
                check = `<div class="text-end">
                                    <span class="badge px-3" style="background-color: #FEEEEE; color:#DB0909">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M18.3 5.71a.996.996 0 0 0-1.41 0L12 10.59L7.11 5.7A.996.996 0 1 0 5.7 7.11L10.59 12L5.7 16.89a.996.996 0 1 0 1.41 1.41L12 13.41l4.89 4.89a.996.996 0 1 0 1.41-1.41L13.41 12l4.89-4.89c.38-.38.38-1.02 0-1.4" />
                                        </svg>
                                        Salah
                                    </span>
                                </div>`;
            } else {
                check = `<div class="text-end">
                                    <span class="badge px-3" style="background-color: #F6EEFE; color:#9C40F7">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="me-1" width="15" height="15" viewBox="0 0 256 256">
                                            <path fill="currentColor" d="m229.66 77.66l-128 128a8 8 0 0 1-11.32 0l-56-56a8 8 0 0 1 11.32-11.32L96 188.69L218.34 66.34a8 8 0 0 1 11.32 11.32" />
                                        </svg>
                                        Benar
                                    </span>
                                </div>`;
            }

            return `
                    <div class="card position-relative">
                        <div class="p-3">
                            <div class="d-flex justify-content-between">
                                <b class="d-flex">10 .Fungsi yang dapat digunakan untuk menampilkan luaran program dijava adalah</b>
                                ${check}
                            </div>
                            <div class="ms-3 mt-3">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" value="option_a" id="option_a_${index}" ${value.user_answer === 'option_a' ? 'checked' : ''} disabled>
                                    <label class="form-check-label" for="option_a_${index}">
                                        ${value.option_a}
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" value="option_b" id="option_b_${index}" ${value.user_answer === 'option_b' ? 'checked' : ''} disabled>
                                    <label class="form-check-label" for="option_b_${index}">
                                        ${value.option_b}
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" value="option_c" id="option_c_${index}" ${value.user_answer === 'option_c' ? 'checked' : ''} disabled>
                                    <label class="form-check-label" for="option_c_${index}">
                                        ${value.option_c}
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" value="option_d" id="option_d_${index}" ${value.user_answer === 'option_d' ? 'checked' : ''} disabled>
                                    <label class="form-check-label" for="option_d_${index}">
                                        ${value.option_d}
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" value="option_e" id="option_e_${index}" ${value.user_answer === 'option_e' ? 'checked' : ''} disabled>
                                    <label class="form-check-label" for="option_e_${index}">
                                        ${value.option_e}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="position-absolute bottom-0 end-0" style="padding: 0px;">
                            <img src="{{ asset('admin/assets/images/background/bubble-purple.png') }}" alt="Description" class="img-fluid" style="max-width: 100px; height: auto;">
                        </div>
                    </div>
                    `;
        }
    });

</script>
