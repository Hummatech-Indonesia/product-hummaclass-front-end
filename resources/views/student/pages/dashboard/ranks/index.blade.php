@extends('student.layouts.app')
@section('content')
    <h3>Peringkat</h3>
    <p>Daftar siswa dengan nilai terbaik</p>
    <div class="card p-3">
        <div class="card-body">
            <p><b>Peringkat Anda</b></p>
            <p class="text-dark"><b><i class="fas fa-trophy me-2"></i>{{ session('user')['name'] }}, anda berada di peringkat 5</b></p>
            <div class="col-6 mb-3">
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
                <tbody id="rank-list">

                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('script')
<script>
    $(document).ready(function() {
        function get(page) {
            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}/api/student/list-range",
                headers: {
                    Authorization: 'Bearer {{ session('hummaclass-token') }}'
                },
                dataType: "json",
                data: {
                    page: page
                },
                success: function(response) {
                    console.log('API Response:', response);  

                    if (response.success && response.data.data.length > 0) {
                        let rankListHTML = '';
                        response.data.data.forEach((student, index) => {
                            rankListHTML += `
                                <tr>
                                    <td>${student.rank}</td>
                                    <td>${student.name}</td>
                                    <td>${student.school.name}</td>
                                    <td>${student.point}</td>
                                </tr>
                            `;
                        });
                        $('#rank-list').html(rankListHTML);  
                    } else {
                        $('#rank-list').html('<tr><td colspan="4">Tidak ada data ditemukan</td></tr>');
                    }
                },
                error: function(xhr) {
                    console.error('Error:', xhr.responseText);
                    Swal.fire({
                        title: 'Terjadi Kesalahan!',
                        text: 'Gagal memuat data peringkat.',
                        icon: 'error'
                    });
                }
            });
        }

        get(1);
    });
</script>
@endpush
