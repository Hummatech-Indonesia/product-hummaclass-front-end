@extends('teacher.layouts.app')

@section('style')
    <style>
        .bg-primary {
            background-color: #9425FE !important;
        }
        .text-primary {
            color: #9425FE !important;
        }
        .bg-light-primary {
            background-color: #9525fe27 !important;
        }
        .text-bg-purple {
            color: var(--purple-primary) !important;
            background: var(--purple-light-primary) !important;
        }
    </style>
@endsection

@section('content')
    <div class="row mt-2">
        @foreach (range(1, 4) as $item)
        <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="card rounded-2 shadow d-flex">
                <div class="card-body p-3">
                    <div class="d-flex align-i  tems-center justify-content-between">
                        <div class="d-flex">
                          <div class="p-3 bg-light-primary rounded-2 d-flex align-items-center justify-content-center me-6">
                            <svg width="38" height="38" viewBox="0 0 38 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5017 0.000127017C10.4028 0.000521571 10.3041 0.00273135 10.2035 0.00509867C7.75265 0.0624211 4.80332 0.702521 1.20583 2.15786C0.469218 2.45586 0 3.17926 0 3.97386V20.3004C0 21.032 0.761381 21.5167 1.43563 21.2327C5.60753 19.4752 8.85975 18.9772 11.5642 19.2593C14.2505 19.5395 16.35 20.574 18.2645 21.7203V2.54737C16.4029 1.14717 14.2397 0.176887 11.3711 0.0222219C11.0816 0.00649574 10.7917 -0.000872334 10.5017 0.000127017ZM27.4983 0.000127017C27.2016 -0.00113556 26.9111 0.00707107 26.6287 0.0222219C23.7603 0.176887 21.5972 1.14717 19.7354 2.54737V21.7203C21.6499 20.574 23.7495 19.5395 26.4358 19.2592C29.1402 18.9772 32.3925 19.4751 36.5643 21.2327C37.2386 21.5167 38 21.0321 38 20.3004V3.97394C38 3.17934 37.5308 2.45593 36.7942 2.15794C33.1967 0.702598 30.2473 0.0624839 27.7965 0.0050192C27.6959 0.0028097 27.5972 0.00044266 27.4983 0.000127017ZM27.9569 20.6574C27.8737 20.6572 27.7906 20.6587 27.7087 20.66C27.3232 20.6659 26.9526 20.6892 26.5938 20.7265C23.873 21.0104 21.8145 22.145 19.7356 23.4442V23.4663C19.2101 23.3093 18.6916 23.2793 18.1794 23.3898C16.1294 22.1132 14.0898 21.0065 11.4064 20.7265C10.9578 20.6798 10.4891 20.6568 9.99802 20.6601C7.42892 20.6769 4.23814 21.4317 8.01403e-05 23.4959V26.852C4.87288 24.5775 8.55687 23.927 11.5641 24.2406C13.0511 24.3957 14.3575 24.7808 15.5533 25.2886C15.1779 25.7671 14.8069 26.3356 14.4407 27H23.8348C23.3593 26.3514 22.8888 25.7837 22.4215 25.2987C23.6239 24.7855 24.9384 24.3967 26.4357 24.2406C29.4428 23.9271 33.1269 24.5776 37.9998 26.8521V23.496C33.7372 21.4199 30.5336 20.6658 27.9569 20.6574Z" fill="#9425FE"/>
                            </svg>                          
                          </div>
                          <div class="align-self-center">
                            <h4 class="mb-1"><b>12</b></h6>
                            <p class="fs-3 mb-0">Kelas</p>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="mx-2 d-flex justify-content-between">
        <h4><b>Daftar Kelas</b></h4>
        <a href="{{ route('mentor.classroom.index') }}" class="fw-semibold text-primary">Lihat lainnya</a>
    </div>


    <div class="row mt-4">
        @foreach (range(1, 4) as $index => $item)
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card rounded-4 shadow">
                    <div class="card-header bg-transparent px-3 pb-4">
                        <div class="row align-items-center">
                            <div class="col-7 d-flex flex-column justify-content-center">
                                <h4 class="fw-bold p-0">XII DKV 2</h4>
                                <p class="fs-2 m-0">SMKN 1 KEPANJEN</p>
                            </div>
                            <div class="col-5">
                                <span class="badge rounded-2 badge text-bg-purple">Negeri</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-3 pt-0 pb-3">
                        <div class="row align-items-center">
                            <div class="col-3">
                                <img src="{{ asset('admin/dist/images/profile/user-1.jpg') }}" alt=""
                                    class="img-fluid rounded-circle">
                            </div>
                            <div class="col p-0">
                                <h6 class="card-title fs-3 fw-semibold text-muted">Wali Kelas</h6>
                                <p class="card-text fs-2 text-muted">Suyadi Oke Joss Sp.d</p>
                            </div>
                        </div>
                        <a href="{{ route('mentor.classroom.show', $index) }}"
                            class="btn btn-primary bg-primary border-0 rounded-2 w-100 mt-3 mb-1">Lihat Kelas</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection