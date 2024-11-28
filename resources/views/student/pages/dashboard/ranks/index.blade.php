@extends('student.layouts.app')
@section('content')
    <h3>Peringkat</h3>
    <p>Daftar siswa dengan nilai terbaik</p>
    <div class="card p-3">
        <div class="card-body">
            <p><b>Peringkat Anda</b></p>
            <p class="text-dark"><b><i class="fas fa-trophy"></i>Alfian Kopling,anda berapa di peringkat 5</b></p>
            <div class="col-6">
                <div class="d-flex gap-2">
                    <input type="text" name="search" id="search" class="form-control">
                    <select name="filter" id="filter" class="form-control" aria-placeholder="sekolah">
                        <option value="">Sekolah</option>
                    </select>
                </div>
            </div>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Sekolah</th>
                        <th>Point</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 1; $i <= 10; $i++)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>Alfian Roda Belakang</td>
                            <td>SMKN 1 Kepanjen</td>
                            <td>999</td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
@endsection
