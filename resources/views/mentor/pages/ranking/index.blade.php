@extends(session('user')['roles'][0]['name'] == 'teacher' ? 'teacher.layouts.app' : 'mentor.layouts.app')
@section('style')
    <style>
        .btn-close {
            --bs-btn-close-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/%3e%3c/svg%3e");
            background: transparent var(--bs-btn-close-bg) center/1em auto no-repeat;
        }

        .info-card {
            background-color: #fff7eb;
            border: 1px solid #ffdca9;
            border-radius: 8px;
            padding: 20px;
        }

        .info-card .info-icon {
            background-color: #ffdca9;
            color: #ff8800;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
        }

        .info-card .info-header {
            font-weight: bold;
            color: #ff8800;
        }

        .bg-primary {
            background-color: #9425FE !important;
        }

        .text-bg-purple {
            color: var(--purple-primary) !important;
            background: var(--purple-light-primary) !important;
        }

        p,
        h1,
        h2,
        h3,
        h4,
        h5 {
            padding: 0;
        }
    </style>
@endsection

@section('content')
    <div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h5 class="fw-semibold mb-8">Peringkat</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted " href="{{ route('mentor.ranking.index') }}">Daftar siswa teratas</a>
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

    <div class="d-flex mt-2">
        <form action="" class="position-relative d-flex">
            <div class="me-2">
                <input type="text" class="form-control product-search px-4 ps-5" name="name"
                    value="{{ old('name', request('name')) }}" id="search-name" style="background-color: #fff"
                    placeholder="Search">
                <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
            </div>
            <div class="me-2">
                <select name="school" id="search-school" class="form-control bg-white">
                </select>
            </div>
            <button class="btn bg-primary text-white">Cari</button>
        </form>
    </div>

    <div class="card mt-3">
        <div class="card-body">
            <div class="table-responsive rounded-2 mb-4">
                <table class="table border text-nowrap customize-table mb-0 align-middle">
                    <thead class="text-dark fs-4">
                        <tr class="">
                            <th class="fs-4 fw-semibold mb-0">No</th>
                            <th class="fs-4 fw-semibold mb-0">Nama</th>
                            <th class="fs-4 fw-semibold mb-0">Sekolah</th>
                            <th class="fs-4 fw-semibold mb-0">Poin</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                    </tbody>
                </table>
            </div>
            <nav id="pagination_list_student"></nav>
        </div>
    </div>
@endsection
@section('script')
    @include('mentor.pages.ranking.scripts.datatable')
@endsection