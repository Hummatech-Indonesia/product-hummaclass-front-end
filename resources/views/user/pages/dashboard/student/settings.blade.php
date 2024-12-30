@extends('user.layouts.app')

@section('content')
<!-- breadcrumb-area -->
<div class="breadcrumb__area breadcrumb__bg py-5 breadcrumb__bg-three" data-background="{{ asset('assets/img/bg/breadcrumb_bg.jpg') }}">
    <div class="breadcrumb__shape-wrap">
        <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" class="alltuchtopdown">
        <img src="{{ asset('assets/img/others/breadcrumb_shape02.svg') }}" alt="img" data-aos="fade-right" data-aos-delay="300">
        <img src="{{ asset('assets/img/others/breadcrumb_shape03.svg') }}" alt="img" data-aos="fade-up" data-aos-delay="400">
        <img src="{{ asset('assets/img/others/breadcrumb_shape04.svg') }}" alt="img" data-aos="fade-down-left" data-aos-delay="400">
        <img src="{{ asset('assets/img/others/breadcrumb_shape05.svg') }}" alt="img" data-aos="fade-left" data-aos-delay="400">
    </div>
</div>
<!-- breadcrumb-area-end -->

<!-- dashboard-area -->
<section class="dashboard__area section-pb-120">
    <div class="container">
        <div class="dashboard__top-wrap">
            <div class="dashboard__top-bg" data-background="{{ asset('assets/img/bg/student_bg.jpg') }}"></div>
            <div class="dashboard__instructor-info">
                <div class="dashboard__instructor-info-left">
                    <div class="thumb">
                        <img src="{{ asset('assets/img/courses/details_instructors02.jpg') }}" alt="img">
                    </div>
                    <div class="content">
                        <h4 class="title">Emily Hannah</h4>
                        <ul class="list-wrap">
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-white" width="20" height="20" viewBox="0 0 256 256"><path fill="currentColor" d="M239.18 97.26A16.38 16.38 0 0 0 224.92 86l-59-4.76l-22.78-55.09a16.36 16.36 0 0 0-30.27 0L90.11 81.23L31.08 86a16.46 16.46 0 0 0-9.37 28.86l45 38.83L53 211.75a16.38 16.38 0 0 0 24.5 17.82l50.5-31.08l50.53 31.08A16.4 16.4 0 0 0 203 211.75l-13.76-58.07l45-38.83a16.43 16.43 0 0 0 4.94-17.59m-15.34 5.47l-48.7 42a8 8 0 0 0-2.56 7.91l14.88 62.8a.37.37 0 0 1-.17.48c-.18.14-.23.11-.38 0l-54.72-33.65a8 8 0 0 0-8.38 0l-54.72 33.67c-.15.09-.19.12-.38 0a.37.37 0 0 1-.17-.48l14.88-62.8a8 8 0 0 0-2.56-7.91l-48.7-42c-.12-.1-.23-.19-.13-.5s.18-.27.33-.29l63.92-5.16a8 8 0 0 0 6.72-4.94l24.62-59.61c.08-.17.11-.25.35-.25s.27.08.35.25L153 91.86a8 8 0 0 0 6.75 4.92l63.92 5.16c.15 0 .24 0 .33.29s0 .4-.16.5"/></svg>
                                5 Courses Enrolled
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-white" width="20" height="20" viewBox="0 0 256 256"><path fill="currentColor" d="M128 136a8 8 0 0 1-8 8H72a8 8 0 0 1 0-16h48a8 8 0 0 1 8 8m-8-40H72a8 8 0 0 0 0 16h48a8 8 0 0 0 0-16m112 65.47V224a8 8 0 0 1-12 7l-24-13.74L172 231a8 8 0 0 1-12-7v-24H40a16 16 0 0 1-16-16V56a16 16 0 0 1 16-16h176a16 16 0 0 1 16 16v30.53a51.88 51.88 0 0 1 0 74.94M160 184v-22.53A52 52 0 0 1 216 76V56H40v128Zm56-12a51.88 51.88 0 0 1-40 0v38.22l16-9.16a8 8 0 0 1 7.94 0l16 9.16Zm16-48a36 36 0 1 0-36 36a36 36 0 0 0 36-36"/></svg>
                                4 Certificate
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="dashboard__instructor-info-right">
                    <a href="#" class="btn btn-two arrow-btn">Become an Instructor <img src="{{ asset('assets/img/icons/right_arrow.svg') }}" alt="img" class="injectable"></a>
                </div>
            </div>
        </div>
        <div class="row">
            @include('user.pages.dashboard.widgets.sidebar')
            <div class="col-lg-9">
                <div class="dashboard__content-wrap">
                    <div class="dashboard__content-title">
                        <h4 class="title">Settings</h4>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="dashboard__nav-wrap">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="itemOne-tab" data-bs-toggle="tab" data-bs-target="#itemOne-tab-pane" type="button" role="tab" aria-controls="itemOne-tab-pane" aria-selected="true">Profile</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="itemTwo-tab" data-bs-toggle="tab" data-bs-target="#itemTwo-tab-pane" type="button" role="tab" aria-controls="itemTwo-tab-pane" aria-selected="false">Password</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="itemThree-tab" data-bs-toggle="tab" data-bs-target="#itemThree-tab-pane" type="button" role="tab" aria-controls="itemThree-tab-pane" aria-selected="false">Social Share</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="itemOne-tab-pane" role="tabpanel" aria-labelledby="itemOne-tab" tabindex="0">
                                    <div class="instructor__cover-bg" data-background="{{ asset('assets/img/bg/student_bg.jpg') }}">
                                        <div class="instructor__cover-info">
                                            <div class="instructor__cover-info-left">
                                                <div class="thumb">
                                                    <img src="{{ asset('assets/img/courses/details_instructors02.jpg') }}" alt="img">
                                                </div>
                                                <button title="Upload Photo"><i class="fas fa-camera"></i></button>
                                            </div>
                                            <div class="instructor__cover-info-right">
                                                <a href="#" class="btn btn-two arrow-btn">Edit Cover Photo</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="instructor__profile-form-wrap">
                                        <form action="#" class="instructor__profile-form">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-grp">
                                                        <label for="firstname">First Name</label>
                                                        <input id="firstname" type="text" value="John">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-grp">
                                                        <label for="lastname">Last Name</label>
                                                        <input id="lastname" type="text" value="Due">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-grp">
                                                        <label for="username">User Name</label>
                                                        <input id="username" type="text" value="johndue">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-grp">
                                                        <label for="phonenumber">Phone Number</label>
                                                        <input id="phonenumber" type="tel" value="+1-202-555-0174">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-grp">
                                                        <label for="skill">Skill/Occupation</label>
                                                        <input id="skill" type="text" value="Full Stack Developer">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-grp select-grp">
                                                        <label for="displayname">Display Name Publicly As</label>
                                                        <select id="displayname" name="displayname">
                                                            <option value="Emily Hannah">Emily Hannah</option>
                                                            <option value="John">John</option>
                                                            <option value="Due">Due</option>
                                                            <option value="Due John">Due John</option>
                                                            <option value="johndue">johndue</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-grp">
                                                <label for="bio">Bio</label>
                                                <textarea id="bio">I'm the Front-End Developer for #ThemeGenix in New York, OR. I am passionate about UI effects, animations, and creating intuitive, dynamic user experiences.</textarea>
                                            </div>
                                            <div class="submit-btn mt-25">
                                                <button type="submit" class="btn">Update Info</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="itemTwo-tab-pane" role="tabpanel" aria-labelledby="itemTwo-tab" tabindex="0">
                                    <div class="instructor__profile-form-wrap">
                                        <form action="#" class="instructor__profile-form">
                                            <div class="form-grp">
                                                <label for="currentpassword">Current Password</label>
                                                <input id="currentpassword" type="password" placeholder="Current Password">
                                            </div>
                                            <div class="form-grp">
                                                <label for="newpassword">New Password</label>
                                                <input id="newpassword" type="password" placeholder="New Password">
                                            </div>
                                            <div class="form-grp">
                                                <label for="repassword">Re-Type New Password</label>
                                                <input id="repassword" type="password" placeholder="Re-Type New Password">
                                            </div>
                                            <div class="submit-btn mt-25">
                                                <button type="submit" class="btn">Update Password</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="itemThree-tab-pane" role="tabpanel" aria-labelledby="itemThree-tab" tabindex="0">
                                    <div class="instructor__profile-form-wrap">
                                        <form action="#" class="instructor__profile-form">
                                            <div class="form-grp">
                                                <label for="facebook">Facebook</label>
                                                <input id="facebook" type="url" placeholder="https://facebook.com/">
                                            </div>
                                            <div class="form-grp">
                                                <label for="twitter">Twitter</label>
                                                <input id="twitter" type="url" placeholder="https://twitter.com/">
                                            </div>
                                            <div class="form-grp">
                                                <label for="linkedin">Linkedin</label>
                                                <input id="linkedin" type="url" placeholder="https://linkedin.com/">
                                            </div>
                                            <div class="form-grp">
                                                <label for="website">Website</label>
                                                <input id="website" type="url" placeholder="https://website.com/">
                                            </div>
                                            <div class="form-grp">
                                                <label for="github">Github</label>
                                                <input id="github" type="url" placeholder="https://github.com/">
                                            </div>
                                            <div class="submit-btn mt-25">
                                                <button type="submit" class="btn">Update Profile</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- dashboard-area-end -->

@endsection
