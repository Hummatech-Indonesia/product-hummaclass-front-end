@extends('user.layouts.app')

@section('style')
    <style>
        :root {
            --tg-theme-primary: #9C40F7;
        }

        main {
            background-color: #F1F1F1;
        }

        .blog-widget {
            background: none;
            padding: 0;
            margin-bottom: 5px;
        }

        .blog-widget .tagcloud a {
            font-size: 16px;
            color: var(--tg-common-color-white);
            display: block;
            background: #9C40F7;
            padding: 8px 15px;
            line-height: 1;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            -o-border-radius: 3px;
            -ms-border-radius: 3px;
            border-radius: 10px;
        }
    </style>
@endsection

@section('content')
    <div class="container d-flex justify-content-center custom-container mt-3">
        <div class="col-lg-11 mb-4">
            <div class="lesson__video-wrap-top mb-4">
                <div class="lesson__video-wrap-top-left">
                    <a href="#"><i class="flaticon-arrow-right"></i></a>
                    <span>Kembali</span>
                </div>
            </div>

            <div class="card-discussion">

            </div>

            <div class="">
                <form action="" method="post" id="form-discussion-answer">
                    <div class="d-flex align-items-center ms-2">
                        <img src="{{ asset('admin/dist/images/profile/user-1.jpg') }}" class="rounded-circle" width="40"
                            height="40">
                        <div class="ms-2 d-flex align-items-center">
                            <span class="fw-semibold text-dark">Mohammad Arif</span>
                        </div>
                    </div>
                    <div class="mt-2">
                        <textarea name="answer" id="answer" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="text-end mt-3">
                        <button type="submit" class="btn btn-primary">Balas</button>
                    </div>
                </form>

            </div>

            <div class="">
                <h4 class="fw-semibold mb-4"><span id="reply"></span> Balasan</h4>
                <div class="card-discussion-answer">

                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            var id = "{{ $id }}";
            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}" + "/api/discussions/" + id,
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                success: function(response) {
                    console.log(response.data);
                    $('#reply').html(response.data.discussion_answers_count);
                    $('.card-discussion').append(card(response.data));
                },
                error: function(xhr) {
                    Swal.fire({
                        title: "Terjadi Kesalahan!",
                        text: "Tidak dapat memuat data kategori.",
                        icon: "error"
                    });
                }
            });

            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}" + "/api/discussion-answers/" + id,
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                success: function(response) {
                    if (response.data.length > 0) {
                        $.each(response.data, function(index, value) {
                            $('.card-discussion-answer').append(cardReply(value));
                        });
                    } else {
                        $('.card-discussion-answer').append(empty());
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

            function card(value) {
                const tag = value.discussion_tags.map(discussion_tag => {
                    return `<a href="#">#${discussion_tag.tag.name}</a>`;
                }).join('');
                return `<div class="card card-body border-0 mb-3">
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center ms-2">
                            <img src="{{ asset('admin/dist/images/profile/user-1.jpg') }}" class="rounded-circle"
                                width="40" height="40">
                            <div class="ms-2 d-flex align-items-center">
                                <span class="fw-semibold text-dark">Web Designer</span>
                                <ul class="pt-3">
                                    <li>1 tahun yang lalu</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div style="padding-left: 30px;">
                        <h6>${value.discussion_title}</h6>
                        <p>${value.discussion_question}
                        </p>
                        <div class="blog-widget">
                            <div class="tagcloud">
                                ${tag}
                            </div>
                        </div>
                        <div class="d-flex gap-3">
                            <div class="d-flex align-items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-black" width="25" height="25"
                                    viewBox="0 0 1024 1024">
                                    <path fill="currentColor"
                                        d="M573 421c-23.1 0-41 17.9-41 40s17.9 40 41 40c21.1 0 39-17.9 39-40s-17.9-40-39-40m-280 0c-23.1 0-41 17.9-41 40s17.9 40 41 40c21.1 0 39-17.9 39-40s-17.9-40-39-40" />
                                    <path fill="currentColor"
                                        d="M894 345c-48.1-66-115.3-110.1-189-130v.1c-17.1-19-36.4-36.5-58-52.1c-163.7-119-393.5-82.7-513 81c-96.3 133-92.2 311.9 6 439l.8 132.6c0 3.2.5 6.4 1.5 9.4c5.3 16.9 23.3 26.2 40.1 20.9L309 806c33.5 11.9 68.1 18.7 102.5 20.6l-.5.4c89.1 64.9 205.9 84.4 313 49l127.1 41.4c3.2 1 6.5 1.6 9.9 1.6c17.7 0 32-14.3 32-32V753c88.1-119.6 90.4-284.9 1-408M323 735l-12-5l-99 31l-1-104l-8-9c-84.6-103.2-90.2-251.9-11-361c96.4-132.2 281.2-161.4 413-66c132.2 96.1 161.5 280.6 66 412c-80.1 109.9-223.5 150.5-348 102m505-17l-8 10l1 104l-98-33l-12 5c-56 20.8-115.7 22.5-171 7l-.2-.1C613.7 788.2 680.7 742.2 729 676c76.4-105.3 88.8-237.6 44.4-350.4l.6.4c23 16.5 44.1 37.1 62 62c72.6 99.6 68.5 235.2-8 330" />
                                    <path fill="currentColor"
                                        d="M433 421c-23.1 0-41 17.9-41 40s17.9 40 41 40c21.1 0 39-17.9 39-40s-17.9-40-39-40" />
                                </svg>
                                ${value.discussion_answers_count} Balasan
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                                    <path fill="black"
                                        d="M6 22h15v-2H6.012C5.55 19.988 5 19.805 5 19s.55-.988 1.012-1H21V4c0-1.103-.897-2-2-2H6c-1.206 0-3 .799-3 3v14c0 2.201 1.794 3 3 3M5 8V5c0-.805.55-.988 1-1h13v12H5z" />
                                    <path fill="black" d="M8 6h9v2H8z" />
                                </svg>
                                ${value.module.title}
                            </div>
                        </div>
                    </div>
                </div>`;
            }

            function cardReply(value) {
                console.log(value);

                return `<div class="card card-body border-0 mb-3">
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center ms-2">
                            <img src="{{ asset('admin/dist/images/profile/user-1.jpg') }}" class="rounded-circle"
                                width="40" height="40">
                            <div class="ms-2 d-flex align-items-center">
                                <span class="fw-semibold text-dark">${value.user.name}</span>
                                <ul class="pt-3">
                                    <li>${value.time_ago}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div style="padding-left: 30px;">
                        <p>${value.answer}
                        </p>
                    </div>
                </div>`;
            }

            $('#form-discussion-answer').submit(function(e) {
                e.preventDefault();

                var formData = new FormData(this);

                $.ajax({
                    type: "POST",
                    url: "{{ config('app.api_url') }}" + "/api/discussion-answers/" + id,
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}",
                    },
                    data: formData,
                    dataType: "json",
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.success) {
                            Swal.fire({
                                title: "Sukses!",
                                text: response.message,
                                icon: "success"
                            }).then(() => {
                                $('#answer').val('');
                            });
                        }
                    },

                    error: function(xhr) {
                        if (xhr.status === 422) {
                            var errors = xhr.responseJSON.errors;
                            $('.invalid-feedback').remove();

                            $.each(errors, function(field, messages) {
                                var fieldName = '#' +
                                    field;
                                var errorMessage = messages.join(
                                    '<br>');

                                $(fieldName).after(
                                    '<div class="invalid-feedback" style="display: block;">' +
                                    errorMessage + '</div>');
                            });
                        } else {
                            Swal.fire({
                                title: "Terjadi Kesalahan!",
                                text: "Tidak dapat mengirimkan balasan.",
                                icon: "error"
                            });
                        }
                    }
                });
            });



        });
    </script>
@endsection
