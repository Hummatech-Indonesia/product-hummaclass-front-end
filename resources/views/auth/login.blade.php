<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login | Humma Class</title>
    <style>
        html,
        body {
            overflow: hidden;
            /* Ini mencegah scroll ke segala arah */
            height: 100%;
        }

        .position-relative {
            position: relative;
        }

        /* Mengatur posisi SVG agar tetap di samping input */
        .position-relative svg {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
        }

        /* Pesan error berada di bawah input */
        .invalid-feedback {
            display: none;
            /* Disembunyikan secara default */
            color: red;
            font-size: 12px;
            margin-top: 5px;
            /* Jarak antara input dan pesan error */
            position: relative;
            /* Pesan error tetap di alur dokumen */
        }

        /* Saat ada error, tampilkan pesan */
        .is-invalid+.invalid-feedback {
            display: block;
        }

    </style>
</head>

<body>
    <div class="row">
        <div class="col-lg-6" class="position-relative" style="background-image: url('assets/img/auth/login-bg.png'), linear-gradient(to bottom right, #C79DEF, #A853F8); background-size: cover, cover;height: 800px;">
            <div>
                <div class="p-5 mt-2">
                    <div class="card position-relative" style="background-color: #D6B7F5; height: 605px; border-radius: 20px;">
                        <div class="p-5">
                            <div>
                                <h2 class="text-white fw-semibold">Tingkatkan</h2>
                                <h2 class="text-white fw-semibold">Kemampuanmu Di</h2>
                                <h2 class="fw-bold fs-12 mt-2 mb-3" style="color: #9425FE; position: relative; display: inline-block;">
                                    HummaClass
                                    <span style="position: absolute; bottom: -10px; left: 0px; width: calc(70% + 10px); height: 4px; background-color: #9425FE;"></span>
                                </h2>
                            </div>

                            <div class="position-absolute bottom-0 end-0">
                                <div class="p-3" style="width: 400px; height: 420px; background-image: url('{{ asset('assets/img/auth/log-oval.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; display: flex; align-items: center; justify-content: center;">
                                    <div class="ms-5 ps-5 px-4 pt-4 mt-5" style="max-width: 300px; color: white; font-size: 16px;">
                                        Groove’s intuitive shared inbox makes it easy for team members to organize,
                                        prioritize and.In this episode of the Smashing Pod we’re
                                        talking about Web Platform Baseline.
                                    </div>
                                </div>

                            </div>

                            {{-- <div class="position-absolute bottom-0 end-0">
                                <img src="{{ asset('assets/img/auth/log-oval.png') }}" style="max-width: 430px; height: auto;" alt=""> --}}
                        </div>
                        <div class="position-absolute bottom-0 start-0">
                            <img src="{{ asset('assets/img/auth/instructor_two.png') }}" style="max-width: 280px; height: auto;" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="p-5">
                <div class="px-5 mx-4 py-5" style="margin-top: 10px;">
                    <div class="logo">
                        <a href="/"><img src="assets/img/logo/logo.svg" width="100px;" alt="Logo"></a>
                    </div>
                    <h4 class="fw-bold mt-4">
                        Selamat Datang👋
                    </h4>
                    <p style="color: #6D6C80;">Just enter your username and password below and you'll be back in action
                        in no time. Let's go!</p>
                    <button class="w-100 btn bg-transparent border border-1" style="border-radius: 15px;" id="google-login">
                        <svg xmlns="http://www.w3.org/2000/svg" class="me-1 mb-1" width="17" height="17" viewBox="0 0 256 262">
                            <path fill="#4285F4" d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622l38.755 30.023l2.685.268c24.659-22.774 38.875-56.282 38.875-96.027" />
                            <path fill="#34A853" d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055c-34.523 0-63.824-22.773-74.269-54.25l-1.531.13l-40.298 31.187l-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1" />
                            <path fill="#FBBC05" d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82c0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602z" />
                            <path fill="#EB4335" d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0C79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251" />
                        </svg>
                        Continue with google
                    </button>
                    <div class="row justify-content-center mt-2">
                        <div class="col-lg-4">
                            <div class="mt-3" style="border-bottom: 2px solid #000"></div>
                        </div>
                        <div class="col-lg-1 fw-semibold"><span class="mt-4">Or</span></div>
                        <div class="col-lg-4">
                            <div class="mt-3" style="border-bottom: 2px solid #000"></div>
                        </div>
                    </div>

                    <form action="" class="mt-4" id="login-form">
                        {{-- <div class="position-relative mb-3">
                            <input type="text" class="form-control form-control-md ps-5 border-0 px-5" style="background-color: #F3F3F3;border-radius: 12px" name="email" id="email" value="{{ old('name', request('name')) }}" placeholder="Email">
                            <div class="invalid-feedback"></div>
                            <svg class="position-absolute top-50 start-0 translate-middle-y fs-6 ms-3" xmlns="http://www.w3.org/2000/svg" width="32" height="15" viewBox="-5 -2 24 24">
                                <path fill="#8B8B8B" d="M3.534 10.07a1 1 0 1 1 .733 1.86A3.58 3.58 0 0 0 2 15.26V17a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1.647a3.66 3.66 0 0 0-2.356-3.419a1 1 0 1 1 .712-1.868A5.66 5.66 0 0 1 14 15.353V17a3 3 0 0 1-3 3H3a3 3 0 0 1-3-3v-1.74a5.58 5.58 0 0 1 3.534-5.19M7 0a4 4 0 0 1 4 4v2a4 4 0 1 1-8 0V4a4 4 0 0 1 4-4m0 2a2 2 0 0 0-2 2v2a2 2 0 1 0 4 0V4a2 2 0 0 0-2-2" />
                            </svg>
                        </div> --}}
                        <div class="input-group mb-3">
                            <button class="btn" style="background-color: #F3F3F3;border-radius: 12px 0px 0px 12px" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="15" viewBox="-5 -2 24 24">
                                    <path fill="#8B8B8B" d="M3.534 10.07a1 1 0 1 1 .733 1.86A3.58 3.58 0 0 0 2 15.26V17a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1.647a3.66 3.66 0 0 0-2.356-3.419a1 1 0 1 1 .712-1.868A5.66 5.66 0 0 1 14 15.353V17a3 3 0 0 1-3 3H3a3 3 0 0 1-3-3v-1.74a5.58 5.58 0 0 1 3.534-5.19M7 0a4 4 0 0 1 4 4v2a4 4 0 1 1-8 0V4a4 4 0 0 1 4-4m0 2a2 2 0 0 0-2 2v2a2 2 0 1 0 4 0V4a2 2 0 0 0-2-2" />
                                </svg>
                            </button>
                            <input type="text" class="form-control" style="background-color: #F3F3F3;border:0px;border-radius: 0 12px 12px 0" name="email" id="email" value="{{ old('name', request('name')) }}" placeholder="Email" aria-label="" aria-describedby="basic-addon1">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="input-group">
                            <button class="btn" style="background-color: #F3F3F3;border-radius: 12px 0px 0px 12px" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" class="ms-2" width="15" height="15" viewBox="0 0 16 16">
                                    <path fill="#8B8B8B" fill-rule="evenodd" d="M10.5 6V5a2.5 2.5 0 0 0-5 0v1zM4 5v1a3 3 0 0 0-3 3v3a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V9a3 3 0 0 0-3-3V5a4 4 0 0 0-8 0m6.5 2.5H12A1.5 1.5 0 0 1 13.5 9v3a1.5 1.5 0 0 1-1.5 1.5H4A1.5 1.5 0 0 1 2.5 12V9A1.5 1.5 0 0 1 4 7.5zm-1.75 2a.75.75 0 0 0-1.5 0v2a.75.75 0 0 0 1.5 0z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <input type="text" class="form-control" style="background-color: #F3F3F3;border:0px;border-radius: 0 12px 12px 0" name="password" id="password" value="{{ old('name', request('name')) }}" placeholder="Password" aria-label="" aria-describedby="basic-addon1">
                            <div class="invalid-feedback"></div>
                        </div>
                        {{-- <div class="position-relative">
                            <input type="text" class="form-control form-control-md ps-5 border-0 px-5" style="background-color: #F3F3F3;border-radius: 12px" name="password" id="password" value="{{ old('name', request('name')) }}" placeholder="Password">
                            <div class="invalid-feedback"></div>
                            <svg class="position-absolute top-50 start-0 translate-middle-y fs-6 ms-4" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 16 16">
                                <path fill="#8B8B8B" fill-rule="evenodd" d="M10.5 6V5a2.5 2.5 0 0 0-5 0v1zM4 5v1a3 3 0 0 0-3 3v3a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V9a3 3 0 0 0-3-3V5a4 4 0 0 0-8 0m6.5 2.5H12A1.5 1.5 0 0 1 13.5 9v3a1.5 1.5 0 0 1-1.5 1.5H4A1.5 1.5 0 0 1 2.5 12V9A1.5 1.5 0 0 1 4 7.5zm-1.75 2a.75.75 0 0 0-1.5 0v2a.75.75 0 0 0 1.5 0z" clip-rule="evenodd" />
                            </svg>
                        </div> --}}
                        <div class="d-flex justify-content-between mt-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label fw-semibold" for="flexCheckDefault">
                                    Remember me
                                </label>
                            </div>
                            <a href="{{ route('password.send-email') }}" style="color: #9425FE">Forgot Password</a>
                        </div>
                        <button type="submit" class="btn text-white btn-md mt-3 w-100" style="background-color: #9425FE;border-radius: 10px;">
                            Masuk
                        </button>
                    </form>

                    <div class="text-center mt-2">
                        <p style="color: #989898;">Belum punya akun? <a href="{{ route('register') }}" style="color: #9425FE">Daftar</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#google-login').click(function(e) {
                e.preventDefault();
                window.location.href = `{{config('app.api_url')}}/api/auth/google`;
            });
        });

    </script>
    <script>
        $(document).ready(function() {
            $('#login-form').submit(function(e) {
                e.preventDefault(); // Mencegah submit form secara default

                // Mengonversi data form ke objek
                var formData = {};
                $(this).serializeArray().forEach(function(field) {
                    formData[field.name] = field.value;
                });

                // Mengirim data menggunakan AJAX
                $.ajax({
                    url: `{{config('app.api_url')}}/api/login`
                    , type: 'POST'
                    , data: formData
                    , success: function(response) {
                        // console.log(response);
                        localStorage.setItem('hummaclass-token', response.data.token);
                        window.location.href = "{{ route('dashboard.users.courses') }}";
                    }
                    , error: function(error) {
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
