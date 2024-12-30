<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/authentication-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 02:01:04 GMT -->

<head>
    <!--  Title -->
    <title>Login | Hummaclass</title>
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
    <link rel="shortcut icon" type="image/png"
        href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/favicon.ico" />
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
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100">
            <div class="position-relative z-index-5">
                <div class="row">
                    <div class="col-xl-6 col-xxl-6"
                        style="background-image: url('assets/img/auth/login-bg.png'), linear-gradient(to bottom right, #C79DEF, #A853F8); background-size: cover, cover;">
                        <div class="d-none d-xl-flex h-100 align-items-center">
                            <div class="card position-relative m-5"
                                style="background-color: #D6B7F5; height: 600px;width:100%; border-radius: 20px;">
                                <div class="p-5">
                                    <div>
                                        <h3 class="text-white fw-semibold fs-9">Tingkatkan</h3>
                                        <h3 class="text-white fw-semibold fs-9">Kemampuanmu Di</h3>
                                        <h2 class="fw-bolder fs-12 mt-1 mb-3"
                                            style="color: #9425FE; position: relative; display: inline-block;">
                                            HummaClass
                                            <span
                                                style="position: absolute; bottom: -10px; left: 0px; width: calc(70% + 10px); height: 4px; background-color: #9425FE;"></span>
                                        </h2>
                                    </div>

                                    <div class="position-absolute bottom-0 end-0">
                                        <div class="p-3"
                                            style="width: 450px; height: 420px; background-image: url('{{ asset('assets/img/auth/log-oval.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; display: flex; align-items: center; justify-content: center;border-radius:0 0 20px 0;">
                                            <div class="ms-5 ps-5 px-4 pt-4 mt-5"
                                                style="max-width: 300px; color: white; font-size: 16px;">
                                                Groove’s intuitive shared inbox makes it easy for team members to
                                                organize,
                                                prioritize and.In this episode of the Smashing Pod we’re
                                                talking about Web Platform Baseline.
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="position-absolute bottom-0 start-0">
                                    <img src="{{ asset('assets/img/auth/instructor_two.png') }}"
                                        style="max-width: 250px; height: auto;border-radius:0 0 0 20px;" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-xxl-6">
                        <div
                            class="authentication-login min-vh-100 bg-body row justify-content-center align-items-center p-4">
                            <div class="col-sm-8 col-md-6 col-xl-9">
                                <div class="logo mb-5">
                                    <a href="/"><img src="assets/img/logo/logo.svg" width="100px;"
                                            alt="Logo"></a>
                                </div>
                                <h2 class="mb-3 fs-7 fw-bolder">Selamat Datang👋</h2>
                                <p class=" mb-9">Just enter your username and password below and you'll be back in
                                    action
                                    in no time. Let's go!</p>
                                <button class="w-100 btn bg-transparent border border-1" style="border-radius: 15px;"
                                    id="google-login">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 mb-1" width="17"
                                        height="17" viewBox="0 0 256 262">
                                        <path fill="#4285F4"
                                            d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622l38.755 30.023l2.685.268c24.659-22.774 38.875-56.282 38.875-96.027" />
                                        <path fill="#34A853"
                                            d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055c-34.523 0-63.824-22.773-74.269-54.25l-1.531.13l-40.298 31.187l-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1" />
                                        <path fill="#FBBC05"
                                            d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82c0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602z" />
                                        <path fill="#EB4335"
                                            d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0C79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251" />
                                    </svg>
                                    Continue with google
                                </button>
                                <div class="position-relative text-center my-4">
                                    <p
                                        class="mb-0 fs-4 px-3 d-inline-block bg-white text-black z-index-5 position-relative">
                                        or</p>
                                    <span
                                        class="border-top w-100 position-absolute top-50 start-50 translate-middle"></span>
                                </div>
                                <form id="login-form">
                                    <div class="input-group mb-3">
                                        <button class="btn"
                                            style="background-color: #F3F3F3;border-radius: 12px 0px 0px 12px"
                                            type="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="15"
                                                viewBox="-5 -2 24 24">
                                                <path fill="#8B8B8B"
                                                    d="M3.534 10.07a1 1 0 1 1 .733 1.86A3.58 3.58 0 0 0 2 15.26V17a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1.647a3.66 3.66 0 0 0-2.356-3.419a1 1 0 1 1 .712-1.868A5.66 5.66 0 0 1 14 15.353V17a3 3 0 0 1-3 3H3a3 3 0 0 1-3-3v-1.74a5.58 5.58 0 0 1 3.534-5.19M7 0a4 4 0 0 1 4 4v2a4 4 0 1 1-8 0V4a4 4 0 0 1 4-4m0 2a2 2 0 0 0-2 2v2a2 2 0 1 0 4 0V4a2 2 0 0 0-2-2" />
                                            </svg>
                                        </button>
                                        <input type="text" class="form-control"
                                            style="background-color: #F3F3F3;border:0px;border-radius: 0 12px 12px 0"
                                            name="email" id="email" value="{{ old('name', request('name')) }}"
                                            placeholder="Email" aria-label="" aria-describedby="basic-addon1">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <button class="btn"
                                            style="background-color: #F3F3F3;border-radius: 12px 0px 0px 12px"
                                            type="button">
                                            <svg class="ms-2" xmlns="http://www.w3.org/2000/svg" width="15"
                                                height="15" viewBox="0 0 16 16">
                                                <path fill="#8B8B8B" fill-rule="evenodd"
                                                    d="M10.5 6V5a2.5 2.5 0 0 0-5 0v1zM4 5v1a3 3 0 0 0-3 3v3a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V9a3 3 0 0 0-3-3V5a4 4 0 0 0-8 0m6.5 2.5H12A1.5 1.5 0 0 1 13.5 9v3a1.5 1.5 0 0 1-1.5 1.5H4A1.5 1.5 0 0 1 2.5 12V9A1.5 1.5 0 0 1 4 7.5zm-1.75 2a.75.75 0 0 0-1.5 0v2a.75.75 0 0 0 1.5 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                        <input type="password" class="form-control"
                                            style="background-color: #F3F3F3;border:0px;border-radius: 0 12px 12px 0"
                                            name="password" id="password" value="{{ old('name', request('name')) }}"
                                            placeholder="Password" aria-label="" aria-describedby="basic-addon1">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input" name="remember" type="checkbox"
                                                value="1" id="flexCheckDefault">
                                            <label class="form-check-label fw-semibold" for="flexCheckDefault">
                                                Remember me
                                            </label>
                                        </div>
                                        <a href="{{ route('password.send-email') }}" style="color: #9425FE">Forgot
                                            Password</a>
                                    </div>
                                    <button type="submit" class="btn text-white btn-md mt-3 w-100"
                                        style="background-color: #9425FE;border-radius: 10px;">
                                        Masuk
                                    </button>
                                    <div class="text-center mt-2">
                                        <p style="color: #989898;">Belum punya akun? <a href="{{ route('register') }}"
                                                style="color: #9425FE">Daftar</a></p>
                                    </div>
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
            // Google Login
            $('#google-login').click(function(e) {
                e.preventDefault();
                window.location.href =
                "{{ config('app.api_url') }}/api/auth/google"; // Pastikan menempatkan URL dalam tanda kutip
            });

            // Login Form Submission
            $('#login-form').submit(function(e) {
                e.preventDefault(); // Mencegah submit form secara default

                // Mengonversi data form ke objek
                var formData = {};
                $(this).serializeArray().forEach(function(field) {
                    formData[field.name] = field.value;
                });

                // Mengirim data menggunakan AJAX
                $.ajax({
                    url: "{{ config('app.api_url') }}/api/login", // Pastikan menempatkan URL dalam tanda kutip
                    type: 'POST',
                    data: formData,
                    success: function(response) {

                        $.ajax({
                            url: "{{ route('save-token') }}", // URL untuk menyimpan token ke session
                            type: 'GET',
                            data: {
                                _token: "{{ csrf_token() }}", // Kirim CSRF token untuk keamanan
                                token: response.data
                                .token, // Kirim token dari API ke server Laravel
                                user: response.data.user
                            },
                            success: function() {
                                // Setelah berhasil disimpan di session, redirect pengguna
                                window.location.href =
                                    "{{ session('next-request') ?? route('dashboard.users.dashboard') }}";
                            }
                        });
                    },
                    error: function(error) {

                        let errors = error.responseJSON.data || {};
                        let message = error.responseJSON.meta.message;

                        // Reset status is-invalid
                        $('#email, #password').removeClass('is-invalid');

                        // Tampilkan pesan error pada field email dan password jika ada
                        if (errors.email || errors.password) {
                            if (errors.email) {
                                $('#email').addClass('is-invalid')
                                    .next('.invalid-feedback').text(errors.email[0]);
                            }
                            if (errors.password) {
                                $('#password').addClass('is-invalid')
                                    .next('.invalid-feedback').text(errors.password[0]);
                            }
                        } else {
                            // Jika tidak ada error spesifik pada email atau password, tampilkan pesan umum
                            $('#email, #password').addClass('is-invalid')
                                .next('.invalid-feedback').text(message);
                        }
                    }
                });
            });
        });
    </script>

</body>

</html>
