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
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 text-end pe-md-0">
                    <img class="side-img" src="{{ asset('assets/img/auth/register-img.png') }}" alt="">
                </div>
                <div class="col-xl-6 col-lg-8 ps-md-0">
                    <div class="singUp-wrap rounded-start-0">
                        <h2 class="title">Create Your Account</h2>
                        <p>Hey there! Ready to join the party? We just need a few details from you to get <br> started.
                            Let's do this!</p>
                        <div class="account__social">
                            <a href="#" class="account__social-btn">
                                <img src="assets/img/icons/google.svg" alt="img">
                                Continue with google
                            </a>
                        </div>
                        <div class="account__divider">
                            <span>or</span>
                        </div>
                        <form action="#" class="account__form" id="register-form">
                            <div class="row gutter-20">
                                <div class="col-md-12">
                                    <div class="form-grp">
                                        <label for="fast-name">Name</label>
                                        <input type="text" id="name" placeholder="First Name" name="name">
                                        <div class="invalid-feedback">error</div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-grp">
                                <label for="email">Email</label>
                                <input type="email" id="email" placeholder="email" name="email">
                                <div class="invalid-feedback">error</div>
                            </div>
                            <div class="form-grp">
                                <label for="password">Password</label>
                                <input type="password" id="password" placeholder="password" name="password">
                                <div class="invalid-feedback">error</div>
                            </div>
                            <div class="form-grp">
                                <label for="confirm-password">Confirm Password</label>
                                <input type="password" id="password_confirmation" placeholder="Confirm Password"
                                    name="password_confirmation">
                                <div class="invalid-feedback">error</div>
                            </div>
                            <button type="submit" class="btn btn-two arrow-btn">Sign Up<img
                                    src="{{ asset('assets/img/icons/right_arrow.svg') }}" alt="img"
                                    class="injectable"></button>
                        </form>
                        <div class="account__switch">
                            <p>Already have an account?<a href="{{ route('login') }}">Login</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- singUp-area-end -->
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#register-form').submit(function(e) {
                e.preventDefault(); // Mencegah submit form secara default

                // Mengonversi data form ke objek
                var formData = {};
                $(this).serializeArray().forEach(function(field) {
                    formData[field.name] = field.value;
                });

                // Mengirim data menggunakan AJAX
                $.ajax({
                    url: 'http://127.0.0.1:8000/api/register',
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        console.log(response);
                        localStorage.setItem('hummaclass-token', response.data.token);

                        Swal.fire({
                            title: "Berhasil!",
                            text: response.meta.message,
                            icon: "success"
                        });

                        window.location.href = "{{ route('dashboard.courses.index') }}";
                    },
                    error: function(error) {
                        let errors = error.responseJSON.data || {};
                        let message = error.responseJSON.meta.message;

                        console.log(error);

                        // Reset status is-invalid
                        $('#email, #password').removeClass('is-invalid');

                        // Tampilkan pesan error pada field email dan password jika ada
                        if (errors.name || errors.email || errors.password || errors
                            .password_confirmation) {
                            if (errors.email) {
                                $('#name').addClass('is-invalid')
                                    .next('.invalid-feedback').text(errors.name[0]);
                            }
                            if (errors.email) {
                                $('#email').addClass('is-invalid')
                                    .next('.invalid-feedback').text(errors.email[0]);
                            }
                            if (errors.password) {
                                $('#password').addClass('is-invalid')
                                    .next('.invalid-feedback').text(errors.password[0]);
                            }
                            if (errors.password) {
                                $('#password_confirmation').addClass('is-invalid')
                                    .next('.invalid-feedback').text(errors.password[0]);
                            }
                        } else {
                            $('#email, #password').addClass('is-invalid')
                                .next('.invalid-feedback').text(message);
                        }
                    }
                });
            });
        });
    </script>
@endsection
