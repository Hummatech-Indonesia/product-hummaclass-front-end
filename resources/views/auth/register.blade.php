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
                        <form action="#" class="account__form">
                            <div class="row gutter-20">
                                <div class="col-md-12">
                                    <div class="form-grp">
                                        <label for="fast-name">First Name</label>
                                        <input type="text" id="fast-name" placeholder="First Name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-grp">
                                <label for="email">Email</label>
                                <input type="email" id="email" placeholder="email">
                            </div>
                            <div class="form-grp">
                                <label for="password">Password</label>
                                <input type="password" id="password" placeholder="password">
                            </div>
                            <div class="form-grp">
                                <label for="confirm-password">Confirm Password</label>
                                <input type="password" id="confirm-password" placeholder="Confirm Password">
                            </div>
                            <button type="submit" class="btn btn-two arrow-btn">Sign Up<img
                                    src="{{ asset('assets/img/icons/right_arrow.svg') }}" alt="img"
                                    class="injectable"></button>
                        </form>
                        <div class="account__switch">
                            <p>Already have an account?<a href="login.html">Login</a></p>
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
        $.ajax({
            type: "get",
            url: "http://127.0.0.1:8000/api/categories",
            success: function(response) {
                $.each(response.data, function(indexInArray, valueOfElement) {
                    console.log(valueOfElement);
                });
            }
        });
    </script>
@endsection
