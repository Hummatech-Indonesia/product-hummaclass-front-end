{{-- @extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Reset Password') }}</div>

                    <div class="card-body">
                        <form method="POST" id="reset-form">
                            @csrf

                            <input type="hidden" name="token" value="{{ request()->token }}">

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Reset Password') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('admin/dist/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $('#reset-form').submit(function(e) {
            e.preventDefault();

            // Mengonversi data form ke objek
            var formData = {};
            $(this).serializeArray().forEach(function(field) {
                formData[field.name] = field.value;
            });

            $.ajax({
                type: "POST",
                url: "{{config('app.api_url')}}/api/password/reset",
                data: formData,
                dataType: "json",
                success: function(response) {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Password berhasil diubah',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function() {
                        window.location.href = "{{ route('login') }}";
                    });
                },
                // error: function(xhr, status, error) {}
            });
        });
    </script>
@endsection --}}


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/authentication-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 02:01:04 GMT -->
<head>
    <!--  Title -->
    <title>Reset Password | Hummaclass</title>
    <!--  Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="Mordenize" />
    <meta name="author" content="" />
    <meta name="keywords" content="Mordenize" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--  Favicon -->
    <link rel="shortcut icon" type="image/png" href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/favicon.ico" />
    <!-- Core Css -->
    <link id="themeColors" rel="stylesheet" href="{{ asset('admin/dist/css/style.min.css') }}" />

    <style>
        .border-top {
            border-top: var(--bs-border-width) var(--bs-border-style) #000000 !important;
        }

    </style>
</head>
<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100">
            <div class="position-relative z-index-5">
                <div class="row">
                    <div class="col-xl-6 col-xxl-6" style="background-image: url('assets/img/auth/login-bg.png'), linear-gradient(to bottom right, #C79DEF, #A853F8); background-size: cover, cover;">
                        <div class="d-none d-xl-flex h-100 align-items-center">
                            <div class="card position-relative m-5" style="background-color: #D6B7F5; height: 600px;width:100%; border-radius: 20px;">
                                <div class="p-5">
                                    <div>
                                        <h3 class="text-white fw-semibold fs-9">Tingkatkan</h3>
                                        <h3 class="text-white fw-semibold fs-9">Kemampuanmu Di</h3>
                                        <h2 class="fw-bolder fs-12 mt-1 mb-3" style="color: #9425FE; position: relative; display: inline-block;">
                                            HummaClass
                                            <span style="position: absolute; bottom: -10px; left: 0px; width: calc(70% + 10px); height: 4px; background-color: #9425FE;"></span>
                                        </h2>
                                    </div>

                                    <div class="position-absolute bottom-0 end-0">
                                        <div class="p-3" style="width: 450px; height: 420px; background-image: url('{{ asset('assets/img/auth/log-oval.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; display: flex; align-items: center; justify-content: center;border-radius:0 0 20px 0;">
                                            <div class="ms-5 ps-5 px-4 pt-4 mt-5" style="max-width: 300px; color: white; font-size: 16px;">
                                                Groove’s intuitive shared inbox makes it easy for team members to organize,
                                                prioritize and.In this episode of the Smashing Pod we’re
                                                talking about Web Platform Baseline.
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="position-absolute bottom-0 start-0">
                                    <img src="{{ asset('assets/img/auth/instructor_two.png') }}" style="max-width: 250px; height: auto;border-radius:0 0 0 20px;" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-xxl-6">
                        <div class="authentication-login min-vh-100 bg-body row justify-content-center align-items-center p-4">
                            <div class="col-sm-8 col-md-6 col-xl-9">
                                <div class="logo mb-5">
                                    <a href="/"><img src="{{ asset('assets/img/logo/logo.svg') }}" width="100px;" alt="Logo"></a>
                                </div>
                                <h2 class="mb-3 fs-7 fw-bolder">Ubah Kata Sandi Anda?</h2>
                                <p class=" mb-9">Lindungi akun Anda dengan kata sandi baru yang lebih aman. Ubah sekarang!</p>
                                <form id="reset-form" class="mt-5">
                                    @csrf
                                    <input type="hidden" name="token" value="{{ request()->token }}">
                                    <div class="input-group mb-3">
                                        <button class="btn" style="background-color: #F3F3F3;border-radius: 12px 0px 0px 12px" type="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="15" viewBox="-5 -2 24 24">
                                                <path fill="#8B8B8B" d="M3.534 10.07a1 1 0 1 1 .733 1.86A3.58 3.58 0 0 0 2 15.26V17a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1.647a3.66 3.66 0 0 0-2.356-3.419a1 1 0 1 1 .712-1.868A5.66 5.66 0 0 1 14 15.353V17a3 3 0 0 1-3 3H3a3 3 0 0 1-3-3v-1.74a5.58 5.58 0 0 1 3.534-5.19M7 0a4 4 0 0 1 4 4v2a4 4 0 1 1-8 0V4a4 4 0 0 1 4-4m0 2a2 2 0 0 0-2 2v2a2 2 0 1 0 4 0V4a2 2 0 0 0-2-2" />
                                            </svg>
                                        </button>
                                        <input type="text" class="form-control" style="background-color: #F3F3F3;border:0px;border-radius: 0 12px 12px 0" name="email" id="email" value="{{ old('name', request('name')) }}" placeholder="Email" aria-label="" aria-describedby="basic-addon1">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <button class="btn" style="background-color: #F3F3F3;border-radius: 12px 0px 0px 12px" type="button">
                                            <svg class="ms-2" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 16 16">
                                                <path fill="#8B8B8B" fill-rule="evenodd" d="M10.5 6V5a2.5 2.5 0 0 0-5 0v1zM4 5v1a3 3 0 0 0-3 3v3a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V9a3 3 0 0 0-3-3V5a4 4 0 0 0-8 0m6.5 2.5H12A1.5 1.5 0 0 1 13.5 9v3a1.5 1.5 0 0 1-1.5 1.5H4A1.5 1.5 0 0 1 2.5 12V9A1.5 1.5 0 0 1 4 7.5zm-1.75 2a.75.75 0 0 0-1.5 0v2a.75.75 0 0 0 1.5 0z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                        <input type="text" class="form-control" style="background-color: #F3F3F3;border:0px;border-radius: 0 12px 12px 0" name="password" id="password" value="{{ old('password', request('password')) }}" placeholder="Password" aria-label="" aria-describedby="basic-addon1">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <button class="btn" style="background-color: #F3F3F3;border-radius: 12px 0px 0px 12px" type="button">
                                            <svg class="ms-2" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 16 16">
                                                <path fill="#8B8B8B" fill-rule="evenodd" d="M10.5 6V5a2.5 2.5 0 0 0-5 0v1zM4 5v1a3 3 0 0 0-3 3v3a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V9a3 3 0 0 0-3-3V5a4 4 0 0 0-8 0m6.5 2.5H12A1.5 1.5 0 0 1 13.5 9v3a1.5 1.5 0 0 1-1.5 1.5H4A1.5 1.5 0 0 1 2.5 12V9A1.5 1.5 0 0 1 4 7.5zm-1.75 2a.75.75 0 0 0-1.5 0v2a.75.75 0 0 0 1.5 0z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                        <input type="text" class="form-control" style="background-color: #F3F3F3;border:0px;border-radius: 0 12px 12px 0" name="password_confirmation" id="password_confirmation" value="{{ old('name', request('name')) }}" placeholder="Konfirmasi Password" aria-label="" aria-describedby="basic-addon1">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <button type="submit" class="btn text-white btn-md mt-3 w-100" style="background-color: #9425FE;border-radius: 10px;">
                                        Ubah Password
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#send-email-form').submit(function(e) {
                e.preventDefault();
                

                $.ajax({
                    type: "POST",
                    url: `{{config('app.api_url')}}/api/forgot-password`,
                    data: {
                        'email': $('#email').val()
                    },
                    dataType: "dataType",
                    success: function(response) {
                        console.log(response);
                        alert(response.meta.message)
                    },
                    error: function(xhr) {
                        console.log(xhr);
                        alert(xhr.responseText)
                    }
                });
            });
        });
    </script>

</body>

</html>
