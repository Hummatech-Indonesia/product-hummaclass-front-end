@push('style')
    <style>
        .select2-container {
            z-index: 1055;
        }

        .select2-container .select2-dropdown {
            z-index: 1060;
        }
    </style>
@endpush
<div class="modal fade" id="modal-student" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form id="form-add-student-classroom" class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-center position-relative"
                style="background-color: #7209DB; border-radius: 10px 10px 0 0;">
                <h5 class="modal-title text-white text-center w-100" id="importPegawai">Tambah Siswa</h5>
            </div>
            <div class="modal-body">
                <div>
                    <div class="form-group mb-3">
                        <label for="" class="mb-2 fw-semibold text-dark">Nama Siswa</label>
                        <select class="select2 form-control" name="student_id[]" id="select2" multiple="multiple"
                            style="height: 36px; width: 100%">

                        </select>
                        @error('student_id')
                            <span class="text-danger error-create">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn text-white" style="background-color: #DB0909;"
                    data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn text-white" style="background-color: #7209DB;"">Simpan</button>
            </div>
        </form>
    </div>
</div>
@push('script')
    <script>
        $('.select2').select2({
            dropdownParent: $('#modal-student')
        });
    </script>
@endpush
