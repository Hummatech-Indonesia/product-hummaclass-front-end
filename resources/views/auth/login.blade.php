@extends('user.layouts.app')

@section('style')
    <style>
        .side-img {}
    </style>
@endsection

@section('content')
    <!-- singUp-area -->
    <section class="singUp-area section-py-120">
        <div class="container">
            <div class="row justify-content-center box-sizing-border-box">
                <div class="col-xl-6 col-lg-8 text-end pe-md-0">
                    <img class="side-img" src="{{ asset('assets/img/auth/login-img.png') }}" alt="">
                </div>
                <div class="col-xl-6 col-lg-8 ps-md-0" style="max-height: 700px; overflow: auto;">
                    <div class="singUp-wrap rounded-start-0">
                        <h2 class="title">Selamat Datang Kembali</h2>
                        <p>Hey there! Ready to log in? Just enter your username and password below and you'll be back in
                            action in no time. Let's go!</p>
                        <div class="account__social">
                            <a href="#" class="account__social-btn">
                                <img src="assets/img/icons/google.svg" alt="img">
                                Continue with google
                            </a>
                        </div>
                        <div class="account__divider">
                            <span>or</span>
                        </div>
                        <form action="#" class="account__form" id="login-form">
                            <div class="form-grp">
                                <label for="email">Email</label>
                                <input id="email" type="text" placeholder="email" name="email">
                                <div class="invalid-feedback">error</div>
                            </div>
                            <div class="form-grp">
                                <label for="password">Password</label>
                                <input id="password" type="text" placeholder="password" name="password">
                                <div class="invalid-feedback">error</div>
                            </div>
                            <div class="account__check">
                                <div class="account__check-remember">
                                    <input type="checkbox" class="form-check-input" value="" id="terms-check">
                                    <label for="terms-check" class="form-check-label">Remember me</label>
                                </div>
                                <div class="account__check-forgot">
                                    <a href="registration.html">Forgot Password?</a>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-two arrow-btn">Sign In<img
                                    src="assets/img/icons/right_arrow.svg" alt="img" class="injectable"></button>
                        </form>
                        <div class="account__switch">
                            <p>Don't have an account?<a href="{{ route('register') }}">Sign Up</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- singUp-area-end -->
@endsection

{{-- @extends('layouts.app')

@section('content')
    
@endsection --}}

@section('script')
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
                    url: 'http://127.0.0.1:8000/api/login',
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        console.log(response);
                        localStorage.setItem('hummaclass-token', response.data.token);
                    },
                    error: function(error) {
                        let errors = error.responseJSON.data || {};
                        let message = error.responseJSON.meta.message;

                        console.log(error);

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
@endsection
