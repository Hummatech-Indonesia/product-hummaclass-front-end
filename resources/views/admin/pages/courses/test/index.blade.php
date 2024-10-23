@extends('admin.layouts.app')
@section('style')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        .card.bg-light-info {
            background-color: #E8DEF3 !important;
        }

        .btn.btn-primary {
            background-color: var(--purple-primary) !important;
        }

        .nav-link {
            font-family: 'poppins', serif;
            font-weight: 600;
            font-style: normal;
        }

        .nav-link.active {
            background-color: var(--purple-primary) !important;
        }

        .text-primary {
            color: var(--purple-primary) !important;
        }

        .btn-close {
            --bs-btn-close-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/%3e%3c/svg%3e");
            background: transparent var(--bs-btn-close-bg) center/1em auto no-repeat;
        }

        .icon {
            transition: transform 0.3s ease;
        }

        .toggle-btn[aria-expanded="true"] .icon {
            transform: rotate(180deg);
        }

        .form-check-input:checked {
            background-color: #9425FE;
            border-color: #9425FE;
        }

        .name {
            font-family: 'poppins', serif;
            font-weight: 700;
            font-style: normal;
        }

        .email {
            font-family: 'poppins', serif;
            font-weight: 500;
            font-style: normal;
        }

        .custom-radio input[type="radio"] {
            display: none;
        }

        .custom-radio {
            position: relative;
            padding-left: 30px;
            cursor: not-allowed;
        }

        .custom-radio::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 20px;
            height: 20px;
            border-radius: 50%;
            border: 2px solid #FF5CFF;
            background-color: transparent;
        }

        .custom-radio input[type="radio"]:checked::before {
            background-color: #FF5CFF;
        }

        .custom-radio input[type="radio"]:disabled::before {
            border-color: #CCC;
        }

        .custom-radio input[type="radio"]:disabled:checked::before {
            background-color: #CCC;
        }

        .badge {
            font-size: 1rem;
            padding: 5px 10px;
        }

        @media (max-width: 576px) {
            .badge {
                font-size: 0.8rem;
                padding: 3px 6px;
                display: flex;
                align-items: center;
            }

            .status-badge {
                right: 5px;
                top: 5px;
            }

            .badge img {
                width: 10px;
                height: 10px;
            }
        }

        .card .status-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            z-index: 1;
        }


        .question-result .card p {
            margin-bottom: 1rem;
            font-family: 'plus-jakarta-sans', serif;
            font-style: normal;
            font-weight: 600;
            font-size: 1rem;
        }

        .list-unstyled li {
            margin-bottom: 1rem;
            font-family: 'plus-jakarta-sans', serif;
            font-size: 0.9rem;
            font-weight: 500;
            color: #000000;
        }
    </style>
@endsection
@section('content')
    <div class="card position-relative overflow-hidden" style="background-color: #9425FE;">
        <div class="card-body px-4 py-3">
            <div class="d-flex align-items-center">
                <div class="col-auto">
                    <img src="{{ asset('assets/img/pfp/pp.png') }}" alt="Description" class="rounded-circle me-3">
                </div>
                <div class="flex-grow-1">
                    <h2 class="name mb-1 text-white" style="font-size: 1.5rem;">Sabdo Ilahi Dodik</h2>
                    <p class="email mb-0 text-white" style="font-size: 1rem;">dodik@gmail.com</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card p-3">
        <div>
            <ul class="nav nav-tabs d-flex justify-content-between" role="tablist">
                <div class="d-flex">
                    <li class="nav-item home">
                        <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                            <span>Pre-Test</span>
                        </a>
                    </li>
                    <li class="nav-item list">
                        <a class="nav-link" data-bs-toggle="tab" href="#list" role="tab">
                            <span>Post-Test</span>
                        </a>
                    </li>
                </div>
            </ul>
        </div>
    </div>

    <div class="tab-content">
        <div class="tab-pane active" id="home" role="tabpanel">
            <div class="container mt-4">
                <div class="row">
                    <div class="col-12 col-md-4 mb-4">
                        <div class="card p-3" style="background-color: #ffffff;">
                            <div class="text-start">
                                <h4 style="font-weight: bold;margin-bottom: 2rem">Hasil Pre Test</h4>
                                <p style="color: #000000;"><b>Tanggal Ujian </b></p>
                                <p style="color: #9425FE" class="col-7"> Senin, 12 September 2023, 12:28:30</p>
                                <div style="display: flex; justify-content: space-between; padding: 5px 0;">
                                    <p style="color: #000000; margin: 0;"><b>Jumlah Soal:</b></p>
                                    <p style="color: #000000; margin: 0;">7 Soal</p>
                                </div>
                                <div style="display: flex; justify-content: space-between; padding: 5px 0;">
                                    <p style="color: #000000; margin: 0;"><b>Soal Benar:</b></p>
                                    <p style="color: #000000; margin: 0;">7 Soal</p>
                                </div>
                                <div style="display: flex; justify-content: space-between; padding: 5px 0;">
                                    <p style="color: #000000; margin: 0;"><b>Soal Salah:</b></p>
                                    <p style="color: #000000; margin: 0;">7 Soal</p>
                                </div>
                                <div class="p-2 mt-2 text-center">
                                    <p>Nilai Ujian:</p>
                                    <h1 style="font-weight: bold;font-size: 4rem; color: #9425FE">90</h1>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-8">
                        <div class="card p-3 position-relative">
                            <div class="position-absolute top-0 end-0 p-3">
                                <span class="badge bg-danger text-light d-flex align-items-center mt-0 p-1 px-2"
                                    style="font-size: 12px;">
                                    <img src="{{ asset('assets/img/icons/wrong-answer.svg') }}" alt="Icon X"
                                        class="me-1" style="width: 12px; height: 12px;">
                                    Salah
                                </span>
                            </div>
                            <div class="question-result mt-4">
                                <p class="text-dark"><strong>10. Fungsi yang dapat digunakan untuk menampilkan
                                        luaran program di Java adalah:</strong></p>
                                <ul class="list-unstyled mb-1">
                                    <li>
                                        <label class="custom-radio">
                                            <input type="radio" name="answer" value="A" checked>
                                            A. "hello world!"
                                        </label>
                                    </li>
                                    <li>
                                        <label class="custom-radio">
                                            <input type="radio" name="answer" value="B" disabled>
                                            B. Public static void main(String[] args)
                                        </label>
                                    </li>
                                    <li>
                                        <label class="custom-radio">
                                            <input type="radio" name="answer" value="C" disabled>
                                            C. System.out.print()
                                        </label>
                                    </li>
                                    <li>
                                        <label class="custom-radio">
                                            <input type="radio" name="answer" value="D" disabled>
                                            D. Import java.io.File;
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            {{-- @include('admin.pages.courses.panes.description.tab-description') --}}
        </div>

        <div class="tab-pane" id="list" role="tabpanel">
            <div class="container mt-4">
                <div class="row">
                    <div class="col-12 col-md-4 mb-4">
                        <div class="card p-3" style="background-color: #ffffff;">
                            <div class="text-start">
                                <h4 style="font-weight: bold;margin-bottom: 2rem">Hasil Pre Test</h4>
                                <p style="color: #000000;"><b>Tanggal Ujian </b></p>
                                <p style="color: #9425FE" class="col-7"> Senin, 12 September 2023, 12:28:30</p>
                                <div style="display: flex; justify-content: space-between; padding: 5px 0;">
                                    <p style="color: #000000; margin: 0;"><b>Jumlah Soal:</b></p>
                                    <p style="color: #000000; margin: 0;">7 Soal</p>
                                </div>
                                <div style="display: flex; justify-content: space-between; padding: 5px 0;">
                                    <p style="color: #000000; margin: 0;"><b>Soal Benar:</b></p>
                                    <p style="color: #000000; margin: 0;">7 Soal</p>
                                </div>
                                <div style="display: flex; justify-content: space-between; padding: 5px 0;">
                                    <p style="color: #000000; margin: 0;"><b>Soal Salah:</b></p>
                                    <p style="color: #000000; margin: 0;">7 Soal</p>
                                </div>
                                <div class="p-2 mt-2 text-center">
                                    <p>Nilai Ujian:</p>
                                    <h1 style="font-weight: bold;font-size: 4rem; color: #9425FE">87</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- @include('admin.pages.courses.panes.moduls.tab-list-moduls') --}}
        </div>
    </div>

    {{-- modal tambah voucher --}}
    {{-- @include('admin.pages.courses.panes.vouchers.widgets.modal-create-vouchers') --}}
    {{-- modal pengaturan test --}}
    {{-- @include('admin.pages.courses.panes.pre-test.widgets.modal-settings-test') --}}
@endsection
@section('script')
    {{-- @include('admin.pages.courses.scripts.index')
    @include('admin.pages.courses.panes.description.scripts.show-course') --}}
@endsection
