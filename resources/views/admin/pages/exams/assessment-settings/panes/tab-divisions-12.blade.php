<div class="card">
    <div class="card-body">
        <div class="row align-items-center mb-3">
            <div class="col-3 rounded-2 px-0" style="background-color: #ECECEC">
                <select name="division_id" class="division_id form-control" id="division_12">
                    <option value="">Pilih Divisi</option>
                </select>
            </div>
            <div class="col-9 text-lg-end mt-3 mt-lg-0">
                <a class="setting-format btn btn-warning px-3">
                    <i class="ti ti-settings me-1 fs-4"></i>
                    <span class="font-weight-medium fs-3">Atur Format</span>
                </a>
            </div>
        </div>
        <div class="col-12">
            <div class="table-responsive">
                <table id="demo-foo-addrow" class="table table-bordered m-t-30 contact-list" data-paging="true"
                    data-paging-size="7">
                    <thead>
                        <tr>
                            <th rowspan="3" class="text-center align-middle">No</th>
                            <th rowspan="3" class="text-center align-middle">Komponen/Sub
                                Komponen
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

                    <tbody id="body_12">

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@push('script')
    <script>
        $(document).ready(function() {

            $('#division_12').on('change', function() {

                division_id = $('#division_12').val();


                if (division_id) {
                    getAssesmentForm(division_id, 12);
                } else {
                    $('#body_12').empty();
                }
            });

            // Fungsi untuk mendapatkan form penilaian
            function getAssesmentForm(division_id) {
                $.ajax({
                    type: "GET",
                    url: "{{ config('app.api_url') }}/api/assesment-form/" + division_id + "/" +
                        12,
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('humma   -token') }}"
                    },
                    dataType: "json",
                    success: function(response) {
                        $('#body_12').empty();

                        // Sikap
                        $('#body_12').append(`
                    <tr>
                        <td class="custom-cell" style="background-color: #E8DEF3"><b>I</b></td>
                        <td class="custom-cell" style="background-color: #E8DEF3"><b>SIKAP</b></td>
                        <td class="custom-cell" style="background-color: #E8DEF3"></td>
                        <td class="custom-cell" style="background-color: #E8DEF3"></td>
                        <td class="custom-cell" style="background-color: #E8DEF3"></td>
                        <td class="custom-cell" style="background-color: #E8DEF3"></td>
                        <td class="custom-cell" style="background-color: #E8DEF3"></td>
                    </tr>
                `);

                        $.each(response.data.assementFormAttitudes, function(index, value) {
                            $('#body_12').append(showTableAssesmentForm(index, value));
                        });

                        // Keterampilan
                        $('#body_12').append(`
                    <tr>
                        <td class="custom-cell" style="background-color: #E8DEF3"><b>II</b></td>
                        <td class="custom-cell" style="background-color: #E8DEF3"><b>KETERAMPILAN</b></td>
                        <td class="custom-cell" style="background-color: #E8DEF3"></td>
                        <td class="custom-cell" style="background-color: #E8DEF3"></td>
                        <td class="custom-cell" style="background-color: #E8DEF3"></td>
                        <td class="custom-cell" style="background-color: #E8DEF3"></td>
                        <td class="custom-cell" style="background-color: #E8DEF3"></td>
                    </tr>
                `);

                        $.each(response.data.assementFormSkills, function(index, value) {
                            $('#body_12').append(showTableAssesmentForm(index, value));
                        });
                    },
                    error: function(response) {
                        Swal.fire({
                            title: "Terjadi Kesalahan!",
                            text: "Ada kesalahan saat menyimpan data.",
                            icon: "error"
                        });
                    }
                });
            }

            // Fungsi untuk menampilkan data penilaian
            function showTableAssesmentForm(index, value) {
                return `
            <tr>
                <td>${index + 1}</td>
                <td>${value.indicator}</td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
            </tr>
            `;
            }
        });
    </script>
@endpush
