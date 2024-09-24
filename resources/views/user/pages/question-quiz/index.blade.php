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

    .question-nav {
        display: inline-block;
        width: 55px;
        height: 55px;
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
        /* Warna ungu saat hover/aktif */
        color: white;
        border-color: #9425FE;
    }

    .form-check-input:checked {
        background-color: #9425FE;
        border-color: #9425FE;
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
        <div class="card border-0 px-4" style="background-color: #9425FE;border-radius: 9px;">
            <div class="row align-items-center">
                <div class="col-md-10 p-3">
                    <h4 class="text-white">2 Dikerjakan dari 5 soal</h4>
                </div>
                <div class="col-md-2">
                    <span class="badge w-100 h-100 bg-white py-3 fs-6 fw-bolder text-warning">02.30.00 Sisa waktu</span>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-lg-9">
                @if (request('question') == 1 || is_null(request('question')))
                <div class="card border-0">
                    <div class="p-4">
                        <label class="fs-5">{{ request('question', 1) }}. Fungsi yang dapat digunakan untuk menampilkan luaran program di Java adalah</label>
                        <div class="ms-3 mt-3">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                <label class="form-check-label" for="exampleRadios1">
                                    “hello world!”
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Public static void main(String[] args)
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                <label class="form-check-label" for="exampleRadios3">
                                    System.out.print()
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option3">
                                <label class="form-check-label" for="exampleRadios4">
                                    Import java.io.File
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5" value="option3">
                                <label class="form-check-label" for="exampleRadios5">
                                    Int umur = 16;
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer bg-transparent p-3">
                        <div class="d-flex justify-content-between">
                            @if(request('question') > 1)
                            <a href="?question={{ request('question') - 1 }}" class="text-dark fw-bolder fs-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 16 9">
                                    <path fill="currentColor" d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5" />
                                    <path fill="currentColor" d="M6 8.5a.47.47 0 0 1-.35-.15l-3.5-3.5c-.2-.2-.2-.51 0-.71L5.65.65c.2-.2.51-.2.71 0s.2.51 0 .71L3.21 4.51l3.15 3.15c.2.2.2.51 0 .71c-.1.1-.23.15-.35.15Z" />
                                </svg>
                                Kembali
                            </a>
                            @else
                            {{-- <a class="text-dark fw-bolder fs-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 16 9">
                                    <path fill="currentColor" d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5" />
                                    <path fill="currentColor" d="M6 8.5a.47.47 0 0 1-.35-.15l-3.5-3.5c-.2-.2-.2-.51 0-.71L5.65.65c.2-.2.51-.2.71 0s.2.51 0 .71L3.21 4.51l3.15 3.15c.2.2.2.51 0 .71c-.1.1-.23.15-.35.15Z" />
                                </svg>
                                Kembali
                            </a> --}}
                            <div></div>
                            @endif

                            <!-- Tombol Selanjutnya -->
                            @if(request('question') < 10) <a href="?question={{ request('question') + 1 }}" class="text-dark fw-bolder fs-6">
                                Selanjutnya
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 16 9">
                                    <path fill="currentColor" d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5" />
                                    <path fill="currentColor" d="M10 8.5a.47.47 0 0 1-.35-.15c-.2-.2-.2-.51 0-.71l3.15-3.15l-3.15-3.15c-.2-.2-.2-.51 0-.71s.51-.2.71 0l3.5 3.5c.2.2.2.51 0 .71l-3.5 3.5c-.1.1-.23.15-.35.15Z" />
                                </svg>
                                </a>
                                @else
                                {{-- <span class="text-muted fw-bolder fs-6">Selanjutnya</span> --}}
                                <div></div>
                                @endif
                        </div>
                    </div>
                </div>

                @elseif (request('question') == 2)
                <div class="card border-0">
                    <div class="p-4">
                        <label class="fs-5">{{ request('question', 2) }}. Fungsi yang dapat digunakan untuk menampilkan luaran program di Java adalah</label>
                        <div class="ms-3 mt-3">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                <label class="form-check-label" for="exampleRadios1">
                                    “hello world!”
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Public static void main(String[] args)
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                <label class="form-check-label" for="exampleRadios3">
                                    System.out.print()
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option3">
                                <label class="form-check-label" for="exampleRadios4">
                                    Import java.io.File
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5" value="option3">
                                <label class="form-check-label" for="exampleRadios5">
                                    Int umur = 16;
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer bg-transparent p-3">
                        <div class="d-flex justify-content-between">
                            @if(request('question') > 1)
                            <a href="?question={{ request('question') - 1 }}" class="text-dark fw-bolder fs-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 16 9">
                                    <path fill="currentColor" d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5" />
                                    <path fill="currentColor" d="M6 8.5a.47.47 0 0 1-.35-.15l-3.5-3.5c-.2-.2-.2-.51 0-.71L5.65.65c.2-.2.51-.2.71 0s.2.51 0 .71L3.21 4.51l3.15 3.15c.2.2.2.51 0 .71c-.1.1-.23.15-.35.15Z" />
                                </svg>
                                Kembali
                            </a>
                            @else
                            <a class="text-dark fw-bolder fs-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 16 9">
                                    <path fill="currentColor" d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5" />
                                    <path fill="currentColor" d="M6 8.5a.47.47 0 0 1-.35-.15l-3.5-3.5c-.2-.2-.2-.51 0-.71L5.65.65c.2-.2.51-.2.71 0s.2.51 0 .71L3.21 4.51l3.15 3.15c.2.2.2.51 0 .71c-.1.1-.23.15-.35.15Z" />
                                </svg>
                                Kembali
                            </a>
                            @endif

                            <!-- Tombol Selanjutnya -->
                            @if(request('question') < 10) <a href="?question={{ request('question') + 1 }}" class="text-dark fw-bolder fs-6">
                                Selanjutnya
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 16 9">
                                    <path fill="currentColor" d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5" />
                                    <path fill="currentColor" d="M10 8.5a.47.47 0 0 1-.35-.15c-.2-.2-.2-.51 0-.71l3.15-3.15l-3.15-3.15c-.2-.2-.2-.51 0-.71s.51-.2.71 0l3.5 3.5c.2.2.2.51 0 .71l-3.5 3.5c-.1.1-.23.15-.35.15Z" />
                                </svg>
                                </a>
                                @else
                                <span class="text-muted fw-bolder fs-6">Selanjutnya</span>
                                @endif
                        </div>
                    </div>
                </div>

                @elseif (request('question') == 3)
                <div class="card border-0">
                    <div class="p-4">
                        <label class="fs-5">{{ request('question', 3) }}. Fungsi yang dapat digunakan untuk menampilkan luaran program di Java adalah</label>
                        <div class="ms-3 mt-3">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                <label class="form-check-label" for="exampleRadios1">
                                    “hello world!”
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Public static void main(String[] args)
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                <label class="form-check-label" for="exampleRadios3">
                                    System.out.print()
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option3">
                                <label class="form-check-label" for="exampleRadios4">
                                    Import java.io.File
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5" value="option3">
                                <label class="form-check-label" for="exampleRadios5">
                                    Int umur = 16;
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer bg-transparent p-3">
                        <div class="d-flex justify-content-between">
                            @if(request('question') > 1)
                            <a href="?question={{ request('question') - 1 }}" class="text-dark fw-bolder fs-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 16 9">
                                    <path fill="currentColor" d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5" />
                                    <path fill="currentColor" d="M6 8.5a.47.47 0 0 1-.35-.15l-3.5-3.5c-.2-.2-.2-.51 0-.71L5.65.65c.2-.2.51-.2.71 0s.2.51 0 .71L3.21 4.51l3.15 3.15c.2.2.2.51 0 .71c-.1.1-.23.15-.35.15Z" />
                                </svg>
                                Kembali
                            </a>
                            @else
                            <a class="text-dark fw-bolder fs-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 16 9">
                                    <path fill="currentColor" d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5" />
                                    <path fill="currentColor" d="M6 8.5a.47.47 0 0 1-.35-.15l-3.5-3.5c-.2-.2-.2-.51 0-.71L5.65.65c.2-.2.51-.2.71 0s.2.51 0 .71L3.21 4.51l3.15 3.15c.2.2.2.51 0 .71c-.1.1-.23.15-.35.15Z" />
                                </svg>
                                Kembali
                            </a>
                            @endif

                            <!-- Tombol Selanjutnya -->
                            @if(request('question') < 10) <a href="?question={{ request('question') + 1 }}" class="text-dark fw-bolder fs-6">
                                Selanjutnya
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 16 9">
                                    <path fill="currentColor" d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5" />
                                    <path fill="currentColor" d="M10 8.5a.47.47 0 0 1-.35-.15c-.2-.2-.2-.51 0-.71l3.15-3.15l-3.15-3.15c-.2-.2-.2-.51 0-.71s.51-.2.71 0l3.5 3.5c.2.2.2.51 0 .71l-3.5 3.5c-.1.1-.23.15-.35.15Z" />
                                </svg>
                                </a>
                                @else
                                <span class="text-muted fw-bolder fs-6">Selanjutnya</span>
                                @endif
                        </div>
                    </div>
                </div>

                @elseif (request('question') == 4)
                <div class="card border-0">
                    <div class="p-4">
                        <label class="fs-5">{{ request('question', 4) }}. Fungsi yang dapat digunakan untuk menampilkan luaran program di Java adalah</label>
                        <div class="ms-3 mt-3">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                <label class="form-check-label" for="exampleRadios1">
                                    “hello world!”
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Public static void main(String[] args)
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                <label class="form-check-label" for="exampleRadios3">
                                    System.out.print()
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option3">
                                <label class="form-check-label" for="exampleRadios4">
                                    Import java.io.File
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5" value="option3">
                                <label class="form-check-label" for="exampleRadios5">
                                    Int umur = 16;
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer bg-transparent p-3">
                        <div class="d-flex justify-content-between">
                            @if(request('question') > 1)
                            <a href="?question={{ request('question') - 1 }}" class="text-dark fw-bolder fs-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 16 9">
                                    <path fill="currentColor" d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5" />
                                    <path fill="currentColor" d="M6 8.5a.47.47 0 0 1-.35-.15l-3.5-3.5c-.2-.2-.2-.51 0-.71L5.65.65c.2-.2.51-.2.71 0s.2.51 0 .71L3.21 4.51l3.15 3.15c.2.2.2.51 0 .71c-.1.1-.23.15-.35.15Z" />
                                </svg>
                                Kembali
                            </a>
                            @else
                            <a class="text-dark fw-bolder fs-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 16 9">
                                    <path fill="currentColor" d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5" />
                                    <path fill="currentColor" d="M6 8.5a.47.47 0 0 1-.35-.15l-3.5-3.5c-.2-.2-.2-.51 0-.71L5.65.65c.2-.2.51-.2.71 0s.2.51 0 .71L3.21 4.51l3.15 3.15c.2.2.2.51 0 .71c-.1.1-.23.15-.35.15Z" />
                                </svg>
                                Kembali
                            </a>
                            @endif

                            <!-- Tombol Selanjutnya -->
                            @if(request('question') < 10) <a href="?question={{ request('question') + 1 }}" class="text-dark fw-bolder fs-6">
                                Selanjutnya
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 16 9">
                                    <path fill="currentColor" d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5" />
                                    <path fill="currentColor" d="M10 8.5a.47.47 0 0 1-.35-.15c-.2-.2-.2-.51 0-.71l3.15-3.15l-3.15-3.15c-.2-.2-.2-.51 0-.71s.51-.2.71 0l3.5 3.5c.2.2.2.51 0 .71l-3.5 3.5c-.1.1-.23.15-.35.15Z" />
                                </svg>
                                </a>
                                @else
                                <span class="text-muted fw-bolder fs-6">Selanjutnya</span>
                                @endif
                        </div>
                    </div>
                </div>

                @elseif (request('question') == 5)
                <div class="card border-0">
                    <div class="p-4">
                        <label class="fs-5">{{ request('question', 5) }}. Fungsi yang dapat digunakan untuk menampilkan luaran program di Java adalah</label>
                        <div class="ms-3 mt-3">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                <label class="form-check-label" for="exampleRadios1">
                                    “hello world!”
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Public static void main(String[] args)
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                <label class="form-check-label" for="exampleRadios3">
                                    System.out.print()
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option3">
                                <label class="form-check-label" for="exampleRadios4">
                                    Import java.io.File
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5" value="option3">
                                <label class="form-check-label" for="exampleRadios5">
                                    Int umur = 16;
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer bg-transparent p-3">
                        <div class="d-flex justify-content-between">
                            @if(request('question') > 1)
                            <a href="?question={{ request('question') - 1 }}" class="text-dark fw-bolder fs-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 16 9">
                                    <path fill="currentColor" d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5" />
                                    <path fill="currentColor" d="M6 8.5a.47.47 0 0 1-.35-.15l-3.5-3.5c-.2-.2-.2-.51 0-.71L5.65.65c.2-.2.51-.2.71 0s.2.51 0 .71L3.21 4.51l3.15 3.15c.2.2.2.51 0 .71c-.1.1-.23.15-.35.15Z" />
                                </svg>
                                Kembali
                            </a>
                            @else
                            <a class="text-dark fw-bolder fs-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 16 9">
                                    <path fill="currentColor" d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5" />
                                    <path fill="currentColor" d="M6 8.5a.47.47 0 0 1-.35-.15l-3.5-3.5c-.2-.2-.2-.51 0-.71L5.65.65c.2-.2.51-.2.71 0s.2.51 0 .71L3.21 4.51l3.15 3.15c.2.2.2.51 0 .71c-.1.1-.23.15-.35.15Z" />
                                </svg>
                                Kembali
                            </a>
                            @endif

                            <!-- Tombol Selanjutnya -->
                            @if(request('question') < 10) <a href="?question={{ request('question') + 1 }}" class="text-dark fw-bolder fs-6">
                                Selanjutnya
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 16 9">
                                    <path fill="currentColor" d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5" />
                                    <path fill="currentColor" d="M10 8.5a.47.47 0 0 1-.35-.15c-.2-.2-.2-.51 0-.71l3.15-3.15l-3.15-3.15c-.2-.2-.2-.51 0-.71s.51-.2.71 0l3.5 3.5c.2.2.2.51 0 .71l-3.5 3.5c-.1.1-.23.15-.35.15Z" />
                                </svg>
                                </a>
                                @else
                                <span class="text-muted fw-bolder fs-6">Selanjutnya</span>
                                @endif
                        </div>
                    </div>
                </div>

                @elseif (request('question') == 6)
                <div class="card border-0">
                    <div class="p-4">
                        <label class="fs-5">{{ request('question', 6) }}. Fungsi yang dapat digunakan untuk menampilkan luaran program di Java adalah</label>
                        <div class="ms-3 mt-3">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                <label class="form-check-label" for="exampleRadios1">
                                    “hello world!”
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Public static void main(String[] args)
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                <label class="form-check-label" for="exampleRadios3">
                                    System.out.print()
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option3">
                                <label class="form-check-label" for="exampleRadios4">
                                    Import java.io.File
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5" value="option3">
                                <label class="form-check-label" for="exampleRadios5">
                                    Int umur = 16;
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer bg-transparent p-3">
                        <div class="d-flex justify-content-between">
                            @if(request('question') > 1)
                            <a href="?question={{ request('question') - 1 }}" class="text-dark fw-bolder fs-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 16 9">
                                    <path fill="currentColor" d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5" />
                                    <path fill="currentColor" d="M6 8.5a.47.47 0 0 1-.35-.15l-3.5-3.5c-.2-.2-.2-.51 0-.71L5.65.65c.2-.2.51-.2.71 0s.2.51 0 .71L3.21 4.51l3.15 3.15c.2.2.2.51 0 .71c-.1.1-.23.15-.35.15Z" />
                                </svg>
                                Kembali
                            </a>
                            @else
                            <a class="text-dark fw-bolder fs-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 16 9">
                                    <path fill="currentColor" d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5" />
                                    <path fill="currentColor" d="M6 8.5a.47.47 0 0 1-.35-.15l-3.5-3.5c-.2-.2-.2-.51 0-.71L5.65.65c.2-.2.51-.2.71 0s.2.51 0 .71L3.21 4.51l3.15 3.15c.2.2.2.51 0 .71c-.1.1-.23.15-.35.15Z" />
                                </svg>
                                Kembali
                            </a>
                            @endif

                            <!-- Tombol Selanjutnya -->
                            @if(request('question') < 10) <a href="?question={{ request('question') + 1 }}" class="text-dark fw-bolder fs-6">
                                Selanjutnya
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 16 9">
                                    <path fill="currentColor" d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5" />
                                    <path fill="currentColor" d="M10 8.5a.47.47 0 0 1-.35-.15c-.2-.2-.2-.51 0-.71l3.15-3.15l-3.15-3.15c-.2-.2-.2-.51 0-.71s.51-.2.71 0l3.5 3.5c.2.2.2.51 0 .71l-3.5 3.5c-.1.1-.23.15-.35.15Z" />
                                </svg>
                                </a>
                                @else
                                <span class="text-muted fw-bolder fs-6">Selanjutnya</span>
                                @endif
                        </div>
                    </div>
                </div>

                @elseif (request('question') == 7)
                <div class="card border-0">
                    <div class="p-4">
                        <label class="fs-5">{{ request('question', 7) }}. Fungsi yang dapat digunakan untuk menampilkan luaran program di Java adalah</label>
                        <div class="ms-3 mt-3">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                <label class="form-check-label" for="exampleRadios1">
                                    “hello world!”
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Public static void main(String[] args)
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                <label class="form-check-label" for="exampleRadios3">
                                    System.out.print()
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option3">
                                <label class="form-check-label" for="exampleRadios4">
                                    Import java.io.File
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5" value="option3">
                                <label class="form-check-label" for="exampleRadios5">
                                    Int umur = 16;
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer bg-transparent p-3">
                        <div class="d-flex justify-content-between">
                            @if(request('question') > 1)
                            <a href="?question={{ request('question') - 1 }}" class="text-dark fw-bolder fs-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 16 9">
                                    <path fill="currentColor" d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5" />
                                    <path fill="currentColor" d="M6 8.5a.47.47 0 0 1-.35-.15l-3.5-3.5c-.2-.2-.2-.51 0-.71L5.65.65c.2-.2.51-.2.71 0s.2.51 0 .71L3.21 4.51l3.15 3.15c.2.2.2.51 0 .71c-.1.1-.23.15-.35.15Z" />
                                </svg>
                                Kembali
                            </a>
                            @else
                            <a class="text-dark fw-bolder fs-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 16 9">
                                    <path fill="currentColor" d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5" />
                                    <path fill="currentColor" d="M6 8.5a.47.47 0 0 1-.35-.15l-3.5-3.5c-.2-.2-.2-.51 0-.71L5.65.65c.2-.2.51-.2.71 0s.2.51 0 .71L3.21 4.51l3.15 3.15c.2.2.2.51 0 .71c-.1.1-.23.15-.35.15Z" />
                                </svg>
                                Kembali
                            </a>
                            @endif

                            <!-- Tombol Selanjutnya -->
                            @if(request('question') < 10) <a href="?question={{ request('question') + 1 }}" class="text-dark fw-bolder fs-6">
                                Selanjutnya
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 16 9">
                                    <path fill="currentColor" d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5" />
                                    <path fill="currentColor" d="M10 8.5a.47.47 0 0 1-.35-.15c-.2-.2-.2-.51 0-.71l3.15-3.15l-3.15-3.15c-.2-.2-.2-.51 0-.71s.51-.2.71 0l3.5 3.5c.2.2.2.51 0 .71l-3.5 3.5c-.1.1-.23.15-.35.15Z" />
                                </svg>
                                </a>
                                @else
                                <span class="text-muted fw-bolder fs-6">Selanjutnya</span>
                                @endif
                        </div>
                    </div>
                </div>

                @elseif (request('question') == 8)
                <div class="card border-0">
                    <div class="p-4">
                        <label class="fs-5">{{ request('question', 8) }}. Fungsi yang dapat digunakan untuk menampilkan luaran program di Java adalah</label>
                        <div class="ms-3 mt-3">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                <label class="form-check-label" for="exampleRadios1">
                                    “hello world!”
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Public static void main(String[] args)
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                <label class="form-check-label" for="exampleRadios3">
                                    System.out.print()
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option3">
                                <label class="form-check-label" for="exampleRadios4">
                                    Import java.io.File
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5" value="option3">
                                <label class="form-check-label" for="exampleRadios5">
                                    Int umur = 16;
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer bg-transparent p-3">
                        <div class="d-flex justify-content-between">
                            @if(request('question') > 1)
                            <a href="?question={{ request('question') - 1 }}" class="text-dark fw-bolder fs-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 16 9">
                                    <path fill="currentColor" d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5" />
                                    <path fill="currentColor" d="M6 8.5a.47.47 0 0 1-.35-.15l-3.5-3.5c-.2-.2-.2-.51 0-.71L5.65.65c.2-.2.51-.2.71 0s.2.51 0 .71L3.21 4.51l3.15 3.15c.2.2.2.51 0 .71c-.1.1-.23.15-.35.15Z" />
                                </svg>
                                Kembali
                            </a>
                            @else
                            <a class="text-dark fw-bolder fs-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 16 9">
                                    <path fill="currentColor" d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5" />
                                    <path fill="currentColor" d="M6 8.5a.47.47 0 0 1-.35-.15l-3.5-3.5c-.2-.2-.2-.51 0-.71L5.65.65c.2-.2.51-.2.71 0s.2.51 0 .71L3.21 4.51l3.15 3.15c.2.2.2.51 0 .71c-.1.1-.23.15-.35.15Z" />
                                </svg>
                                Kembali
                            </a>
                            @endif

                            <!-- Tombol Selanjutnya -->
                            @if(request('question') < 10) <a href="?question={{ request('question') + 1 }}" class="text-dark fw-bolder fs-6">
                                Selanjutnya
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 16 9">
                                    <path fill="currentColor" d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5" />
                                    <path fill="currentColor" d="M10 8.5a.47.47 0 0 1-.35-.15c-.2-.2-.2-.51 0-.71l3.15-3.15l-3.15-3.15c-.2-.2-.2-.51 0-.71s.51-.2.71 0l3.5 3.5c.2.2.2.51 0 .71l-3.5 3.5c-.1.1-.23.15-.35.15Z" />
                                </svg>
                                </a>
                                @else
                                <span class="text-muted fw-bolder fs-6">Selanjutnya</span>
                                @endif
                        </div>
                    </div>
                </div>

                @elseif (request('question') == 9)
                <div class="card border-0">
                    <div class="p-4">
                        <label class="fs-5">{{ request('question', 9) }}. Fungsi yang dapat digunakan untuk menampilkan luaran program di Java adalah</label>
                        <div class="ms-3 mt-3">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                <label class="form-check-label" for="exampleRadios1">
                                    “hello world!”
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Public static void main(String[] args)
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                <label class="form-check-label" for="exampleRadios3">
                                    System.out.print()
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option3">
                                <label class="form-check-label" for="exampleRadios4">
                                    Import java.io.File
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5" value="option3">
                                <label class="form-check-label" for="exampleRadios5">
                                    Int umur = 16;
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer bg-transparent p-3">
                        <div class="d-flex justify-content-between">
                            @if(request('question') > 1)
                            <a href="?question={{ request('question') - 1 }}" class="text-dark fw-bolder fs-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 16 9">
                                    <path fill="currentColor" d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5" />
                                    <path fill="currentColor" d="M6 8.5a.47.47 0 0 1-.35-.15l-3.5-3.5c-.2-.2-.2-.51 0-.71L5.65.65c.2-.2.51-.2.71 0s.2.51 0 .71L3.21 4.51l3.15 3.15c.2.2.2.51 0 .71c-.1.1-.23.15-.35.15Z" />
                                </svg>
                                Kembali
                            </a>
                            @else
                            <a class="text-dark fw-bolder fs-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 16 9">
                                    <path fill="currentColor" d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5" />
                                    <path fill="currentColor" d="M6 8.5a.47.47 0 0 1-.35-.15l-3.5-3.5c-.2-.2-.2-.51 0-.71L5.65.65c.2-.2.51-.2.71 0s.2.51 0 .71L3.21 4.51l3.15 3.15c.2.2.2.51 0 .71c-.1.1-.23.15-.35.15Z" />
                                </svg>
                                Kembali
                            </a>
                            @endif

                            <!-- Tombol Selanjutnya -->
                            @if(request('question') < 10) <a href="?question={{ request('question') + 1 }}" class="text-dark fw-bolder fs-6">
                                Selanjutnya
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 16 9">
                                    <path fill="currentColor" d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5" />
                                    <path fill="currentColor" d="M10 8.5a.47.47 0 0 1-.35-.15c-.2-.2-.2-.51 0-.71l3.15-3.15l-3.15-3.15c-.2-.2-.2-.51 0-.71s.51-.2.71 0l3.5 3.5c.2.2.2.51 0 .71l-3.5 3.5c-.1.1-.23.15-.35.15Z" />
                                </svg>
                                </a>
                                @else
                                <div></div>
                                @endif
                        </div>
                    </div>
                </div>

                @elseif (request('question') == 10)
                <div class="card border-0">
                    <div class="p-4">
                        <label class="fs-5">{{ request('question', 10) }}. Fungsi yang dapat digunakan untuk menampilkan luaran program di Java adalah</label>
                        <div class="ms-3 mt-3">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                <label class="form-check-label" for="exampleRadios1">
                                    “hello world!”
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Public static void main(String[] args)
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                <label class="form-check-label" for="exampleRadios3">
                                    System.out.print()
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option3">
                                <label class="form-check-label" for="exampleRadios4">
                                    Import java.io.File
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5" value="option3">
                                <label class="form-check-label" for="exampleRadios5">
                                    Int umur = 16;
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer bg-transparent p-3">
                        <div class="d-flex justify-content-between">
                            @if(request('question') > 1)
                            <a href="?question={{ request('question') - 1 }}" class="text-dark fw-bolder fs-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 16 9">
                                    <path fill="currentColor" d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5" />
                                    <path fill="currentColor" d="M6 8.5a.47.47 0 0 1-.35-.15l-3.5-3.5c-.2-.2-.2-.51 0-.71L5.65.65c.2-.2.51-.2.71 0s.2.51 0 .71L3.21 4.51l3.15 3.15c.2.2.2.51 0 .71c-.1.1-.23.15-.35.15Z" />
                                </svg>
                                Kembali
                            </a>
                            @else
                            <a class="text-dark fw-bolder fs-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 16 9">
                                    <path fill="currentColor" d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5" />
                                    <path fill="currentColor" d="M6 8.5a.47.47 0 0 1-.35-.15l-3.5-3.5c-.2-.2-.2-.51 0-.71L5.65.65c.2-.2.51-.2.71 0s.2.51 0 .71L3.21 4.51l3.15 3.15c.2.2.2.51 0 .71c-.1.1-.23.15-.35.15Z" />
                                </svg>
                                Kembali
                            </a>
                            @endif

                            <!-- Tombol Selanjutnya -->
                            @if(request('question') < 10) <a href="?question={{ request('question') + 1 }}" class="text-dark fw-bolder fs-6">
                                Selanjutnya
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 16 9">
                                    <path fill="currentColor" d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5" />
                                    <path fill="currentColor" d="M10 8.5a.47.47 0 0 1-.35-.15c-.2-.2-.2-.51 0-.71l3.15-3.15l-3.15-3.15c-.2-.2-.2-.51 0-.71s.51-.2.71 0l3.5 3.5c.2.2.2.51 0 .71l-3.5 3.5c-.1.1-.23.15-.35.15Z" />
                                </svg>
                                </a>
                                @else
                                <div></div>
                                @endif
                        </div>
                    </div>
                </div>

                @endif

            </div>
            <div class="col-lg-3">
                {{-- <div class="card border-0 p-3">
                    <h4 class="fw-bolder">Soal Ujian</h4>
                </div> --}}
                <div class="card border-0 p-4">
                    <h4 class="fw-bolder">Soal Ujian</h4>
                    <div class="row">
                        @for ($i = 1; $i <= 10; $i++) <div class="col-md-3">
                            <div class="px-1 py-2">
                                <a href="?question={{ $i }}" class="d-flex question-nav @if(request('question') == $i || (is_null(request('question')) && $i == 1)) active @endif">
                                    {{ $i }}
                                </a>
                            </div>
                    </div>
                    @endfor
                </div>
                <p class="mt-4">Anda bisa menyelesaikan ujian ketika waktu ujian sisa 5 menit</p>
                <button class="text-white border-0 py-2 fs-6" style="background-color: #FFC224; border-radius: 7px;">Selesai Ujian</button>
            </div>
        </div>
    </div>

</div>

</div>

@endsection
