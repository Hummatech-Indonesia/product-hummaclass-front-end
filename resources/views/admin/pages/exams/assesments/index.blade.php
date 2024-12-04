@extends('admin.layouts.app')
@section('style')
    <style>
        .custom-cell {
            background-color: #F6EEFE;
            color: black !important;
            font-family: 'Playfair Display SC', serif;
            font-weight: bold;
        }

        .table td,
        .table th {
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .table input[type="checkbox"] {
            margin: 0;
            padding: 2px;
            transform: scale(1.3);
            cursor: pointer;
        }
    </style>
@endsection
@section('content')
    <div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h5 class="fw-semibold mb-8">Penilaian</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted " href="javascript:void(0)">penilaian bagi siswa kelas industri</a>
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

    <div class="row">
        @include('admin.pages.exams.assesments.list-school')
        <div class="col-12 col-lg-8">
            <div class="card">
                <div class="card-body p-3">
                    <h5 class="mb-3 fw-semibold">Form Penilaian</h5>
                    <form action="" action="" enctype="multipart/form-data">
                        <div class="table-responsive">
                            <table id="demo-foo-addrow" class="table table-bordered m-t-30 contact-list" data-paging="true"
                                data-paging-size="7">
                                <thead>
                                    <tr>
                                        <th rowspan="3" class="text-center align-middle">No</th>
                                        <th rowspan="3" class="text-center align-middle">Komponen/Sub Komponen
                                            Indikator
                                        </th>
                                        <th colspan="5" class="text-center">Kompeten</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center">Sangat Baik</th>
                                        <th class="text-center">Baik</th>
                                        <th class="text-center">Cukup</th>
                                        <th class="text-center">Kurang</th>
                                        <th class="text-center">Sangat Kurang</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center">5</th>
                                        <th class="text-center">4</th>
                                        <th class="text-center">3</th>
                                        <th class="text-center">2</th>
                                        <th class="text-center">1</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <tr>
                                        <td class="custom-cell" style="background-color: #E8DEF3"><b>I</b></td>
                                        <td class="custom-cell" style="background-color: #E8DEF3"><b>SIKAP</b></td>
                                        <td class="custom-cell" style="background-color: #E8DEF3"></td>
                                        <td class="custom-cell" style="background-color: #E8DEF3"></td>
                                        <td class="custom-cell" style="background-color: #E8DEF3"></td>
                                        <td class="custom-cell" style="background-color: #E8DEF3"></td>
                                        <td class="custom-cell" style="background-color: #E8DEF3"></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Menghargai orang sekitar dalam proses ujian</td>
                                        <td class="text-center">
                                            <input type="checkbox" name="email[]" value="genelia@gmail.com" id="email1">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox" name="phone[]" value="+123456789" id="phone1">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox" name="role[]" value="designer" id="role1">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox" name="age[]" value="23" id="age1">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox" name="date[]" value="12-10-2014" id="date1">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Menunjukan sikap jujur dalam mengerjakan</td>
                                        <td class="text-center">
                                            <input type="checkbox" name="email[]" value="genelia@gmail.com" id="email1">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox" name="phone[]" value="+123456789" id="phone1">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox" name="role[]" value="designer" id="role1">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox" name="age[]" value="23" id="age1">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox" name="date[]" value="12-10-2014" id="date1">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="custom-cell" style="background-color: #E8DEF3"><b>III</b></td>
                                        <td class="custom-cell" style="background-color: #E8DEF3"><b>KETERAMPILAN</b></td>
                                        <td class="custom-cell" style="background-color: #E8DEF3"></td>
                                        <td class="custom-cell" style="background-color: #E8DEF3"></td>
                                        <td class="custom-cell" style="background-color: #E8DEF3"></td>
                                        <td class="custom-cell" style="background-color: #E8DEF3"></td>
                                        <td class="custom-cell" style="background-color: #E8DEF3"></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Siswa mampu menjalankan dan membuat program di visual studio code</td>
                                        <td class="text-center">
                                            <input type="checkbox" name="email[]" value="genelia@gmail.com"
                                                id="email1">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox" name="phone[]" value="+123456789" id="phone1">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox" name="role[]" value="designer" id="role1">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox" name="age[]" value="23" id="age1">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox" name="date[]" value="12-10-2014" id="date1">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Menunjukan sikap jujur dalam mengerjakan</td>
                                        <td class="text-center">
                                            <input type="checkbox" name="email[]" value="genelia@gmail.com"
                                                id="email1">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox" name="phone[]" value="+123456789" id="phone1">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox" name="role[]" value="designer" id="role1">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox" name="age[]" value="23" id="age1">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox" name="date[]" value="12-10-2014" id="date1">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn mb-1 waves-effect waves-light btn-primary border-0 px-4"
                                style="background-color: #9425FE">Simpan</button>

                        </div>
                    </form>
                </div>
            </div>
            <button type="submit" class="btn mb-1 waves-effect waves-light btn-primary border-0 w-100"
                style="background-color: #E70011; display: flex; justify-content: center; align-items: center; text-align: center;">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    style="margin-right: 8px;">
                    <path fill="currentColor"
                        d="M16 8V5H8v3H6V3h12v5zM4 10h16zm14 2.5q.425 0 .713-.288T19 11.5t-.288-.712T18 10.5t-.712.288T17 11.5t.288.713t.712.287M16 19v-4H8v4zm2 2H6v-4H2v-6q0-1.275.875-2.137T5 8h14q1.275 0 2.138.863T22 11v6h-4zm2-6v-4q0-.425-.288-.712T19 10H5q-.425 0-.712.288T4 11v4h2v-2h12v2z" />
                </svg>
                Download PDF
            </button>
        </div>
    </div>
@endsection
