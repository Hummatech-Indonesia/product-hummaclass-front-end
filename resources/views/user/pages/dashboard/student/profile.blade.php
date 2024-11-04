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
            <div class="dashboard__top-wrap">
                <div class="dashboard__top-bg" data-background="{{ asset('assets/img/bg/instructor_dashboard_bg.jpg') }}">
                </div>
                <div class="dashboard__instructor-info">
                    <div class="dashboard__instructor-info-left">
                        <div class="thumb">
                            <img class="detail-photo" src="{{ asset('assets/img/courses/details_instructors01.jpg') }}"
                                alt="img">
                        </div>
                        <div class="content">
                            <h4 class="title detail-name"></h4>
                            <div class="review__wrap review__wrap-two">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span>(15 Reviews)</span>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard__instructor-info-right">
                        <a href="#" class="btn btn-two arrow-btn">Create a New Course <img
                                src="{{ asset('assets/img/icons/right_arrow.svg') }}" alt="img" class="injectable"></a>
                    </div>
                </div>
            </div>
            <div class="row">
                @include('user.pages.dashboard.widgets.sidebar')
                <div class="col-lg-9">
                    {{-- <div class="dashboard__content-wrap">
                        <div class="dashboard__content-title d-flex justify-content-between">
                            <h4 class="title">Biodata</h4>
                            <button class="btn btn-sm bg-warning shadow-none px-4 py-2" id="edit-profile-btn"
                                style="height: fit-content">Edit</button>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="profile__content-wrap">
                                    <ul class="list-wrap" id="profile">
                                        <li><span>Bergabung Pada</span> <span id="display-created"></span>
                                        </li>
                                        <li><span>Nama</span> <span id="display-name"></span></li>
                                        <li><span>Email</span> <span id="display-email"></span></li>
                                        <li><span>Nomor Telepon</span> <span id="display-phone-number"></span></li>
                                        <li><span>Alamat</span> <span id="display-address"></span></li>
                                    </ul>
                                    <form action="" id="edit-profile-form" class="d-none">
                                        <ul class="list-wrap">
                                            <li><span>Nama</span> <input type="text" name="name" id="name"
                                                    class="form-control"></li>
                                            <li><span>Email</span> <input type="email" name="email" id="email"
                                                    class="form-control"></li>
                                            <li><span>Nomor Telepon</span> <input type="number" name="phone_number"
                                                    id="phone_number" class="form-control"></li>
                                            <li><span>Nomor Telepon</span>
                                                <textarea name="address" id="address" class="form-control"></textarea>
                                            </li>
                                        </ul>
                                        <button class="btn btn-primary py-2 shadow-none"
                                            style="height: fit-content">Simpan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> --}}
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
                                        <div class="instructor__cover-bg"
                                            data-background="{{ asset('assets/img/bg/student_bg.jpg') }}">
                                            <div class="instructor__cover-info">
                                                <div class="instructor__cover-info-left">
                                                    <div class="thumb">
                                                        <img src="{{ asset('assets/img/courses/details_instructors02.jpg') }}"
                                                            alt="img">
                                                    </div>
                                                    <button title="Upload Photo"><i class="fas fa-camera"></i></button>
                                                </div>
                                                <div class="instructor__cover-info-right">
                                                    <a href="#" class="btn btn-two arrow-btn">Edit Cover Photo</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="instructor__profile-form-wrap">
                                            <form action="#" id="edit-profile-form" class="instructor__profile-form"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-grp">
                                                            <label for="firstname">Nama</label>
                                                            <input id="name" type="text" name="name"
                                                                value="{{ old('name') }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-grp">
                                                            <label for="username">email</label>
                                                            <input id="email" type="text"
                                                                value="{{ old('email') }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-grp">
                                                            <label for="phonenumber">Phone Number</label>
                                                            <input id="phone_number" type="tel"
                                                                value="{{ old('phone_number') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-grp">
                                                    <label for="bio">Bio</label>
                                                    <textarea id="address" name="address">{{ old('address') }}</textarea>
                                                </div>
                                                <div class="submit-btn mt-25">
                                                    <button type="submit" class="btn">Update Info</button>
                                                </div>
                                            </form>
                                        </div>
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
                                                </div>
                                                <div class="form-grp">
                                                    <label for="newpassword">Password Baru</label>
                                                    <input id="password" name="password" type="password"
                                                        placeholder="Password Baru">
                                                </div>
                                                <div class="form-grp">
                                                    <label for="repassword">Konfirmasi Password</label>
                                                    <input id="password_confirmation" name="password_confirmation"
                                                        type="password" placeholder="Re-Type New Password">
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
            $('#edit-profile-btn').click(function() {
                toggleEdit();
            });


            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}" + "/api/user",
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                success: function(response) {
                    append(response)
                },
                error: function(xhr) {
                    Swal.fire({
                        title: "Terjadi Kesalahan!",
                        text: "Tidak dapat memuat data kategori.",
                        icon: "error"
                    });
                }
            });

            $("#edit-profile-form").submit(function(e) {
                e.preventDefault();

                // Mengonversi data form ke objek
                var formData = {};
                $(this).serializeArray().forEach(function(field) {
                    formData[field.name] = field.value;
                });

                console.log(formData);


                $.ajax({
                    type: "post",
                    url: "{{ config('app.api_url') }}" + "/api/profile-update" + "?_method=PATCH",
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                    },
                    dataType: "json",
                    data: formData,
                    success: function(response) {
                        Swal.fire({
                            title: "Success",
                            text: response.meta.title,
                            icon: "success"
                        }).then(function(param) {

                        });
                    },
                    error: function(xhr) {
                        Swal.fire({
                            title: "Terjadi Kesalahan!",
                            text: "Tidak dapat memuat data kategori.",
                            icon: "error"
                        });
                    }
                });
            });

            function append(data) {
                // console.log(data);
                const dateStr = data.created_at;
                const date = new Date(dateStr);

                // Mengambil komponen tanggal dan waktu
                const day = date.getDate();
                const month = date.getMonth() + 1; // Bulan dimulai dari 0
                const year = date.getFullYear();
                const hours = String(date.getHours()).padStart(2, '0'); // Menambahkan nol di depan jika perlu
                const minutes = String(date.getMinutes()).padStart(2, '0'); // Menambahkan nol di depan jika perlu

                // Menggabungkan menjadi format yang diinginkan
                const formattedDate = `${day}-${month}-${year}, ${hours}:${minutes}`;

                $('#name').val(data.name);
                $('#email').val(data.email);
                $('#username').val(data.username);
                $('#phone_number').val(data.phone_number);
                $('#address').val(data.address);
                $('#created').val(data.created_at);

                $('.detail-name').text(data.name);
                $('.detail-photo').text(data.photo)
            }

        });
    </script>

    <script>
        $(document).ready(function() {
            // edit password
            $('#form-edit-password').submit(function(e) {
                e.preventDefault();

                var formData = {};
                $(this).serializeArray().forEach(function(field) {
                    formData[field.name] = field.value;
                });


                $.ajax({
                    url: "{{ config('app.api_url') }}" + "/api/password/update",
                    headers: {
                        'Authorization': 'Bearer {{ session('
                                            hummaclass - token ') }}'
                    },
                    type: 'PATCH',
                    data: formData,
                    success: function(response) {
                        Swal.fire({
                            title: "Success",
                            text: response.meta.title,
                            icon: "success"
                        }).then(function(param) {

                        });
                    },
                    error: function(error) {
                        let errors = error.responseJSON.data || {};
                        let message = error.responseJSON.meta.message;
                        if (errors) {
                            for (let key in errors) {
                                if (errors.hasOwnProperty(key)) {
                                    if (key == 'description') {
                                        let feedback = $(`.invalid-feedback`).closest(
                                            `.${key}`);
                                        feedback.text(errors[key])
                                        feedback.removeClass('d-none')
                                    } else {
                                        $(`#${key}`).addClass('is-invalid')
                                            .closest('.invalid-feedback').text(errors[key]);
                                    }
                                }
                            }
                        }
                    }
                });
            });
        });
    </script>
@endsection
