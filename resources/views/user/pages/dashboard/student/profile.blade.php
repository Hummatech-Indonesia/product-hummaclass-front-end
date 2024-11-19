@extends('user.layouts.app')

@section('content')
    <!-- breadcrumb-area -->
    <div class="breadcrumb__area breadcrumb__bg py-5 breadcrumb__bg-three"
        data-background="{{ asset('assets/img/bg/breadcrumb_bg.jpg') }}">
        <div class="breadcrumb__shape-wrap">
            <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" class="alltuchtopdown">
            <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" data-aos="fade-right"
                data-aos-delay="300">
            <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" data-aos="fade-up"
                data-aos-delay="400">
            <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" data-aos="fade-down-left"
                data-aos-delay="400">
            <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" data-aos="fade-left"
                data-aos-delay="400">
        </div>
    </div>
    <!-- breadcrumb-area-end -->

    <!-- dashboard-area -->
    <section class="dashboard__area section-pb-120">
        <div class="container">
            @include('user.pages.dashboard.widgets.dashboard-top')
            <div class="row">
                @include('user.pages.dashboard.widgets.sidebar')
                <div class="col-lg-9">

                    <div class="dashboard__content-wrap">
                        <div class="dashboard__content-title">
                            <h4 class="title">Profile Saya</h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="dashboard__nav-wrap">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="itemOne-tab" data-bs-toggle="tab"
                                                data-bs-target="#itemOne-tab-pane" type="button" role="tab"
                                                aria-controls="itemOne-tab-pane" aria-selected="true">Profile</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="itemTwo-tab" data-bs-toggle="tab"
                                                data-bs-target="#itemTwo-tab-pane" type="button" role="tab"
                                                aria-controls="itemTwo-tab-pane" aria-selected="false">Password</button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="itemOne-tab-pane" role="tabpanel"
                                        aria-labelledby="itemOne-tab" tabindex="0">
                                        <form action="" enctype="multipart/form-data" id="edit-profile-form">
                                            @csrf
                                            <div class="instructor__cover-bg banner-user"
                                                data-background="{{ asset('assets/img/bg/student_bg.jpg') }}">
                                                <div class="instructor__cover-info">
                                                    <div class="instructor__cover-info-left">
                                                        <div class="thumb">
                                                            <img class="detail-photo"
                                                                src="{{ asset('assets/img/courses/details_instructors02.jpg') }}"
                                                                alt="img"
                                                                style="width: 120px;height: 120px;object-fit: cover;">
                                                        </div>
                                                        <button type="button" title="Upload Photo" id="uploadPhotoBtn"><i
                                                                class="fas fa-camera"></i></button>
                                                        <input type="file" id="profilePhotoInput" name="photo"
                                                            accept="image/*" style="display:none;">
                                                        <input type="file" id="coverPhotoInput" name="banner"
                                                            accept="image/*" style="display:none;">
                                                    </div>
                                                    <div class="instructor__cover-info-right">
                                                        <a href="#" class="btn btn-two arrow-btn"
                                                            id="editCoverPhotoBtn">Edit Cover Photo</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="instructor__profile-form-wrap">
                                                <div class="instructor__profile-form">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-grp">
                                                                <label for="firstname">Nama <span
                                                                        class="text-danger">*</span></label>
                                                                <input id="name" type="text" name="name"
                                                                    value="{{ old('name') }}">
                                                                <div class="invalid-feedback"></div>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-grp">
                                                                <label for="username">Email <span
                                                                        class="text-danger">*</span></label>
                                                                <input id="email" name="email" type="text"
                                                                    value="{{ old('email') }}">
                                                                <div class="invalid-feedback"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-grp">
                                                                <label for="phonenumber">Phone Number <span
                                                                        class="text-danger">*</span></label>
                                                                <input id="phone_number" name="phone_number"
                                                                    type="number" value="{{ old('phone_number') }}">
                                                                <div class="invalid-feedback"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-grp">
                                                        <label for="address">Alamat</label>
                                                        <textarea id="address" name="address">{{ old('address') }}</textarea>
                                                        <div class="invalid-feedback"></div>
                                                    </div>
                                                    <input id="gender" name="gender" type="hidden"
                                                        value="{{ old('gender') }}">
                                                    <div class="submit-btn mt-25">
                                                        <button type="submit" class="btn">Update Info</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="itemTwo-tab-pane" role="tabpanel"
                                        aria-labelledby="itemTwo-tab" tabindex="0">
                                        <div class="instructor__profile-form-wrap">
                                            <form id="form-edit-password" class="instructor__profile-form"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-grp">
                                                    <label for="currentpassword">Password Lama</label>
                                                    <input id="old_password" name="old_password" type="password"
                                                        placeholder="Password Lama">
                                                    <div class="invalid-feedback"></div>
                                                </div>
                                                <div class="form-grp">
                                                    <label for="newpassword">Password Baru</label>
                                                    <input id="password" name="password" type="password"
                                                        placeholder="Password Baru">
                                                    <div class="invalid-feedback"></div>
                                                </div>
                                                <div class="form-grp">
                                                    <label for="repassword">Konfirmasi Password</label>
                                                    <input id="password_confirmation" name="password_confirmation"
                                                        type="password" placeholder="Re-Type New Password">
                                                    <div class="invalid-feedback"></div>
                                                </div>
                                                <div class="submit-btn mt-25">
                                                    <button type="submit" class="btn">Update Password</button>
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

@section('script')
    <script>
        $(document).ready(function() {
            // Fetch user data on page load
            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}" + "/api/user",
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                success: function(response) {

                },
                error: function(xhr) {
                    Swal.fire({
                        title: "Terjadi Kesalahan!",
                        text: "Tidak dapat memuat data kategori.",
                        icon: "error"
                    });
                }
            });

            // Trigger file input when "Edit Cover Photo" is clicked
            $('#editCoverPhotoBtn').click(function(e) {
                e.preventDefault();
                $('#coverPhotoInput').click();
            });

            // Trigger file input when "Upload Photo" button is clicked
            $('#uploadPhotoBtn').click(function() {
                $('#profilePhotoInput').click();
            });

            $('#edit-profile-form').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);

                formData.append('_method', 'PATCH');

                $.ajax({
                    type: "POST",
                    url: "{{ config('app.api_url') }}/api/profile-update",
                    data: formData,
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                    },
                    dataType: "json",
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        Swal.fire({
                            title: "Sukses",
                            text: "Berhasil mengubah data.",
                            icon: "success"
                        }).then(() => {
                            location.reload();
                        });
                    },
                    error: function(response) {
                        if (response.status === 422) {
                            let errors = response.responseJSON.data;

                            $('.is-invalid').removeClass('is-invalid');
                            $('.invalid-feedback').text('');

                            $.each(errors, function(field, messages) {
                                const inputElement = $(`[name="${field}"]`);
                                inputElement.addClass('is-invalid');
                                inputElement.closest('.form-grp').find(
                                    '.invalid-feedback').text(messages[0]);
                            });
                        } else {
                            Swal.fire({
                                title: "Terjadi Kesalahan!",
                                text: "Ada kesalahan saat menyimpan data.",
                                icon: "error"
                            });
                        }
                    }
                });
            });


            // Handle cover photo input change event
            $('#coverPhotoInput').change(function() {
                var file = this.files[0];
                if (file) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('.banner-user').css('background-image', 'url(' + e.target.result + ')');
                    }
                    reader.readAsDataURL(file);
                }
            });

            // Handle profile photo input change event
            $('#profilePhotoInput').change(function() {
                var file = this.files[0];
                if (file) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('.detail-photo').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(file);
                }
            });


        });
    </script>

    <script>
        $(document).ready(function() {
            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}" + "/api/profile",
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                success: function(response) {
                    $('#name').val(response.data.name);
                    $('#email').val(response.data.email);
                    $('#phone_number').val(response.data.phone_number);
                    $('#address').val(response.data.address);
                    $('.detail-name').text(response.data.name);
                    $('#gender').val(response.data.gender);

                    var profileImage1 = response.data.photo && /\.(jpeg|jpg|gif|png)$/i.test(response
                            .data.photo) ?
                        response.data.photo :
                        '{{ asset('assets/img/no-image/no-profile.jpeg') }}';
                    $('.detail-photo').attr('src', profileImage1);
                    var bannerImage1 = response.data.banner && /\.(jpeg|jpg|gif|png)$/i.test(response
                            .data.banner) ?
                        response.data.banner :
                        '{{ asset('assets/img/no-image/no-image.jpg') }}';
                    $('.banner-user').css('background-image', 'url(' + bannerImage1 + ')');

                },
                error: function(xhr) {
                    Swal.fire({
                        title: "Terjadi Kesalahan!",
                        text: "Tidak dapat memuat data modul.",
                        icon: "error"
                    });
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#form-edit-password').submit(function(e) {
                e.preventDefault();

                var formData = {};
                $(this).serializeArray().forEach(function(field) {
                    formData[field.name] = field.value;
                });

                $.ajax({
                    url: "{{ config('app.api_url') }}" + "/api/password/update" + "?_method=PATCH",
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                    },
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        Swal.fire({
                            title: "Sukses",
                            text: "Password berhasil diperbarui.",
                            icon: "success"
                        }).then(function(param) {
                            // Lakukan sesuatu setelah sukses
                        });
                    },
                    error: function(error) {
                        if (error.status === 422) {
                            let errors = error.responseJSON
                                .data; // Pastikan ini struktur yang tepat

                            // Reset semua error sebelumnya
                            $('.is-invalid').removeClass('is-invalid');
                            $('.invalid-feedback').text('');

                            // Tampilkan error baru di bawah input masing-masing
                            $.each(errors, function(field, messages) {
                                const inputElement = $(`[name="${field}"]`);
                                inputElement.addClass('is-invalid');
                                inputElement.closest('.form-grp').find(
                                    '.invalid-feedback').text(messages[0]);
                            });
                        } else {
                            Swal.fire({
                                title: "Terjadi Kesalahan!",
                                text: "Ada kesalahan saat menyimpan data.",
                                icon: "error"
                            });
                        }
                    }
                });
            });
        });
    </script>
@endsection
