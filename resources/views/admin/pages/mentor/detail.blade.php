@extends('admin.layouts.app')

@section('style')
    <style>
        .bg-primary {
            background: var(--purple-primary) !important;
        }

        .text-bg-purple {
            color: var(--purple-primary) !important;
            background: var(--purple-light-primary) !important;
        }
    </style>
@endsection

@section('content')
    <div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h5 class="fw-semibold mb-8">Detail Mentor</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted " href="index-2.html">Detail Mentor Pada Kelas Industri</a>
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-3">
                    <div class="text-center mb-n1">
                        <img src="{{ asset('admin/dist/images/backgrounds/track-bg.png') }}" width="70px" alt=""
                            class="img-fluid mb-n3" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-md-2 text-center">
                    <img src="" alt="School Logo" class="img-fluid rounded-circle mb-2 photo"
                        style="aspect-ratio: 1;">
                </div>
                <div class="col-md-8">
                    <h5 class="card-title name fw-bolder">Testing</h5>
                    <p id="description" class="badge text-bg-purple">Mentor Kelas Industri</p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <div class="d-flex justify-content-between mb-3"><strong>Nama:</strong><span class="name"></span>
                    </div>
                    <div class="d-flex justify-content-between mb-3"><strong>Jenis Kelamin:</strong><span
                            id="gender">Laki</span>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="d-flex justify-content-between mb-3"><strong>Email:</strong><span class="email">
                            smkn1kepanjen@gmail.com</span>
                    </div>
                    <div class="d-flex justify-content-between mb-3"><strong>Nomor Telepon:</strong><span
                            class="phone_number">9876543</span></div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="d-flex mb-3 justify-content-between"><strong>Jumlah Kelas:</strong><span class="text-end"
                            id="classroom_count">1</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-3">
            <form action="" class="position-relative d-flex" id="search-form">
                <input type="text" class="form-control product-search px-4 ps-5" name="name"
                    value="{{ old('title', request('title')) }}" id="search-name" style="background-color: #fff"
                    placeholder="Search">
                <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
            </form>
        </div>
    </div>

    <div class="row mt-4" id="classroom-list">
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            let photo;
            $.ajax({
                type: "get",
                url: "{{ config('app.api_url') }}/api/mentors/{{ $mentor }}",
                headers: {
                    Authorization: "Bearer {{ session('hummaclass-token') }}"
                },
                dataType: "json",
                success: function(response) {
                    photo = response.data.photo
                    $('.name').text(response.data.name);
                    $('.email').text(response.data.email);
                    $('.phone_number').text(response.data.phone_number);
                    $('#gender').text(response.data.gender == 'female' ? 'Perempuan' : 'Laki-laki');
                    getClassroom();
                }
            });

            $('#search-form').submit(function(e) {
                e.preventDefault();

                getClassroom();
            });

            function getClassroom() {
                $.ajax({
                    type: "get",
                    url: "{{ config('app.api_url') }}/api/mentor-classrooms/{{ $mentor }}",
                    headers: {
                        Authorization: "Bearer {{ session('hummaclass-token') }}"
                    },
                    data: {
                        name: $('#search-name').val()
                    },
                    dataType: "json",
                    success: function(response) {
                        $('#classroom_count').text(response.data.length);
                        let list = '';
                        $('#classroom-list').empty();

                        console.log(response.data.length > 0);

                        if (response.data.length > 0) {
                            response.data.forEach(classroom => {
                                list += `
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card rounded-4 shadow">
                                <div class="card-header bg-transparent px-3 pb-4">
                                    <div class="row align-items-center">
                                        <div class="col-7 d-flex flex-column justify-content-center">
                                            <h4 class="fw-bold p-0">${classroom.name}</h4>
                                            <p class="fs-2 m-0">${classroom.school.name}</p>
                                        </div>
                                        <div class="col-5">
                                            <span class="badge rounded-2 badge text-bg-purple">Negeri</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-3 pt-0 pb-3">
                                    <div class="row align-items-center">
                                        <div class="col-3">
                                            <img src="http://127.0.0.1:8001/admin/dist/images/profile/user-1.jpg" alt=""
                                                class="img-fluid rounded-circle photo">
                                        </div>
                                        <div class="col p-0">
                                            <h6 class="card-title fs-3 fw-semibold text-muted">Wali Kelas</h6>
                                            <p class="card-text fs-2 text-muted">${classroom.mentor.name}</p>
                                        </div>
                                    </div>
                                    <a href="{{ route('dashboard.teacher.classroom-details', '') }}/${classroom.id}"
                                        class="btn btn-primary bg-primary border-0 rounded-2 w-100 mt-3 mb-1">Lihat Kelas</a>
                                </div>
                            </div>
                        </div>`
                            });
                            $('#classroom-list').html(list);
                        } else {
                            $('#classroom-list').append(emptyCard());
                        }

                        $('.photo').attr('src', photo);
                    }
                });
            }

        });
    </script>
@endsection
