@extends('user.layouts.app')

@section('style')
    <style>
        :root {
            --tg-theme-primary: #9425FE;
        }

        .lesson__content .course-item-link .item-name::before {
            background-image: none;
            width: 0;
        }

        .fs-5 p {
            display: inline;
            margin: 0;
        }

        .question-nav {
            display: inline-block;
            width: 50px;
            height: 50px;
            margin: 5px;
            border-radius: 10px;
            background-color: #fff;
            border: 2px solid #9425FE;
            justify-content: center;
            align-items: center;
            color: #9425FE;
            font-size: 20px;
            line-height: 36px;
            transition: all 0.3s ease;
        }

        .question-nav:hover,
        .question-nav.active {
            background-color: #9425FE;
            color: white;
            border-color: #9425FE;
        }

        .form-check-input:checked {
            background-color: #9425FE;
            border-color: #9425FE;
        }

        @media (max-width: 768px) {
            .question-nav {
                width: 45px;
                height: 45px;
                font-size: 16px;
            }

            .fs-5 {
                font-size: 1rem;
            }

            .badge {
                font-size: 0.8rem;
            }
        }

        @media (max-width: 576px) {
            .question-nav {
                width: 40px;
                height: 40px;
                font-size: 14px;
            }

            .fs-5 {
                font-size: 0.9rem;
            }

            .badge {
                font-size: 0.7rem;
            }
        }
    </style>
@endsection

@section('content')
    <div style="background-color: #F1F1F1;" class="pb-5">
        <div class="lesson__video-wrap mb-0">
            <div class="lesson__video-wrap-top">
                <div class="lesson__video-wrap-top-left">
                    <div class="">
                        <span>Ujian - Resolving Conflicts Between Designers And Engineers</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="container custom-container mt-3">
            <div class="card border-0 px-4" style="background-color: #9425FE; border-radius: 9px;">
                <div class="row align-items-center p-3">
                    <div class="col-md-10" id="status_question"></div>
                    <div class="col-md-2">
                        <span class="badge w-100 h-100 bg-white fs-6 fw-bolder text-warning">02.30.00 Sisa waktu</span>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-9 mb-3">
                    <div class="card border-0" id="card_exam"></div>
                </div>
                <div class="col-lg-3">
                    <div class="card border-0 p-4">
                        <h4 class="fw-bolder">Soal Ujian</h4>
                        <div class="row px-1" id="list_number"></div>
                        <p class="mt-4">Anda bisa menyelesaikan ujian ketika waktu ujian sisa 5 menit</p>
                        <button class="text-white border-0 py-2 fs-6"
                            style="background-color: #FFC224; border-radius: 7px;">Selesai Ujian</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            const currentPage = localStorage.getItem('current_page') || 1;

            get(currentPage);

            restoreAnswers(currentPage);
        });

        function removeChecked(last_page) {

            for (let j = 1; j <= last_page; j++) {
                localStorage.removeItem(`answer_${j}`);
            }
        }

        $(document).on('change', 'input[type="radio"]', function() {
            const current_page = $(this).attr('name').split('_')[1];
            const selectedValue = $(this).val();
            localStorage.setItem(`answer_${current_page}`, selectedValue);
        });

        function restoreAnswers(currentPage) {
            const savedAnswer = localStorage.getItem(`answer_${currentPage}`);
            if (savedAnswer) {
                $(`input[name="answer_${currentPage}"][value="${savedAnswer}"]`).prop('checked', true);
            }
        }


        function get(page) {
            const id = "{{ $id }}";
            localStorage.setItem('current_page', page);

            $.ajax({
                type: "GET",
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}",
                },
                url: `{{ config('app.api_url') }}/api/quizzes/working/${id}/?page=` + page,
                dataType: "json",
                success: function(response) {
                    $('.text-white.border-0.py-2').off('click').on('click', function() {
                        let answer = [];
                        for (let index = 1; index <= response.data.paginate.last_page; index++) {
                            const storedAnswer = localStorage.getItem(`answer_${index}`);
                            if (storedAnswer) {
                                answer.push(storedAnswer);
                            } else {
                                answer.push(null);
                            }
                        }
                        submit_quiz(response.data.user_quiz.id, answer);
                        localStorage.removeItem('current_page');
                        removeChecked(response.data.paginate.last_page);
                    });

                    $('#status_question').html(
                        `<h4 class="text-white">${response.data.paginate.current_page} dari ${response.data.paginate.last_page} soal</h4>`
                    );

                    $('#list_number').empty();
                    $('#card_exam').empty();

                    for (var i = 1; i <= response.data.paginate.last_page; i++) {
                        if (localStorage.getItem(`answer_${i}`) != null) {
                            $('#list_number').append(
                                `<div class="col-3">
                                    <div class="px-1 py-2">
                                        <a class="d-flex question-nav active" onclick="get(${i})">
                                            ${i}
                                        </a>
                                    </div>
                                </div>`
                            );
                        } else {
                            $('#list_number').append(
                                `<div class="col-3">
                                    <div class="px-1 py-2">
                                        <a class="d-flex question-nav" onclick="get(${i})">
                                            ${i}
                                        </a>
                                    </div>
                                </div>`
                            );
                        }
                    }

                    $.each(response.data.data, function(index, value) {
                        $('#card_exam').append(cardExam(index, value, response.data.paginate
                            .current_page, response.data.paginate.last_page));
                    });

                    restoreAnswers(response.data.paginate.current_page);
                },
                error: function(xhr, status, error) {
                    console.error('Terjadi kesalahan:', status, error);
                }
            });
        }

        function cardExam(index, value, current_page, last_page) {

            let footer = '';
            if (current_page == 1) {
                footer = ` <div></div>
                            <a onclick="get(${current_page + 1})" style="cursor:pointer;" class="text-dark fw-bolder fs-6">
                                Selanjutnya
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 16 9">
                                    <path fill="currentColor" d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5" />
                                    <path fill="currentColor" d="M10 8.5a.47.47 0 0 1-.35-.15c-.2-.2-.2-.51 0-.71l3.15-3.15l-3.15-3.15c-.2-.2-.2-.51 0-.71s.51-.2.71 0l3.5 3.5c.2.2.2.51 0 .71l-3.5 3.5c-.1.1-.23.15-.35.15Z" />
                                </svg>
                            </a>`;
            } else if (current_page == last_page) {
                footer = `<a onclick="get(${current_page - 1})" style="cursor:pointer;" class="text-dark fw-bolder fs-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20"
                                    viewBox="0 0 16 9">
                                    <path fill="currentColor"
                                        d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5" />
                                    <path fill="currentColor"
                                        d="M6 8.5a.47.47 0 0 1-.35-.15l-3.5-3.5c-.2-.2-.2-.51 0-.71L5.65.65c.2-.2.51-.2.71 0s.2.51 0 .71L3.21 4.51l3.15 3.15c.2.2.2.51 0 .71c-.1.1-.23.15-.35.15Z" />
                                </svg>
                                Kembali
                            </a>
                            <div></div
                            `
            } else {
                footer = `<a onclick="get(${current_page - 1})" style="cursor:pointer;" class="text-dark fw-bolder fs-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20"
                                    viewBox="0 0 16 9">
                                    <path fill="currentColor"
                                        d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5" />
                                    <path fill="currentColor"
                                        d="M6 8.5a.47.47 0 0 1-.35-.15l-3.5-3.5c-.2-.2-.2-.51 0-.71L5.65.65c.2-.2.51-.2.71 0s.2.51 0 .71L3.21 4.51l3.15 3.15c.2.2.2.51 0 .71c-.1.1-.23.15-.35.15Z" />
                                </svg>
                                Kembali
                            </a>
                            <a onclick="get(${current_page + 1})" style="cursor:pointer;" class="text-dark fw-bolder fs-6">
                                Selanjutnya
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 16 9">
                                    <path fill="currentColor" d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5" />
                                    <path fill="currentColor" d="M10 8.5a.47.47 0 0 1-.35-.15c-.2-.2-.2-.51 0-.71l3.15-3.15l-3.15-3.15c-.2-.2-.2-.51 0-.71s.51-.2.71 0l3.5 3.5c.2.2.2.51 0 .71l-3.5 3.5c-.1.1-.23.15-.35.15Z" />
                                </svg>
                            </a>
                            `
            }
            return `
                <div class="p-4">
                    <label class="fs-5">${current_page}. ${value.question}</label>
                    <div class="ms-3 mt-3">
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="answer_${current_page}" id="answer${current_page}_${index}_a"
                                value="option_a">
                            <label class="form-check-label" for="answer${current_page}_${index}_a">
                                ${value.option_a}
                            </label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="answer_${current_page}" id="answer${current_page}_${index}_b"
                                value="option_b">
                            <label class="form-check-label" for="answer${current_page}_${index}_b">
                                ${value.option_b}
                            </label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="answer_${current_page}" id="answer${current_page}_${index}_c"
                                value="option_c">
                            <label class="form-check-label" for="answer${current_page}_${index}_c">
                                ${value.option_c}
                            </label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="answer_${current_page}" id="answer${current_page}_${index}_d"
                                value="option_d">
                            <label class="form-check-label" for="answer${current_page}_${index}_d">
                                ${value.option_d}
                            </label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="answer_${current_page}" id="answer${current_page}_${index}_e"
                                value="option_e">
                            <label class="form-check-label" for="answer${current_page}_${index}_e">
                                ${value.option_e}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card-footer bg-transparent p-3">
                    <div class="d-flex justify-content-between">
                    ${footer}
                    </div>
                </div>
                `;
        }

        function submit_quiz(user_quiz_id, answer) {
            const filteredAnswers = answer.map(a => a === null ? 'null' : a);

            console.log(filteredAnswers);

            $.ajax({
                type: "POST",
                url: "{{ config('app.api_url') }}/api/quizzes-submit/" + user_quiz_id,
                data: JSON.stringify({
                    answer: filteredAnswers
                }),
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}",
                    'Content-Type': 'application/json'
                },
                dataType: "json",
                success: function(response) {
                    Swal.fire({
                        title: "Sukses",
                        text: "Berhasil menambah data data.",
                        icon: "success"
                    });
                    $('#modal-create-subcategory').modal('hide');
                    $('#modal-create-subcategory').find('input').val('');
                    get(1);
                },
                error: function(response) {
                    console.error(response);
                    Swal.fire({
                        title: "Terjadi Kesalahan!",
                        text: "Ada kesalahan saat menyimpan data: " + response.responseJSON.message,
                        icon: "error"
                    });
                }
            });
        }
    </script>
@endsection
