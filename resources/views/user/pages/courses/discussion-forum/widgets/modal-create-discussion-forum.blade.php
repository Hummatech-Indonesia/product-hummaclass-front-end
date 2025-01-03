<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/css/selectize.default.min.css"
    integrity="sha512-pTaEn+6gF1IeWv3W1+7X7eM60TFu/agjgoHmYhAfLEU8Phuf6JKiiE8YmsNC0aCgQv4192s4Vai8YZ6VNM6vyQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/css/selectize.bootstrap5.min.css"
    integrity="sha512-Ars0BmSwpsUJnWMw+KoUKGKunT7+T8NGK0ORRKj+HT8naZzLSIQoOSIIM3oyaJljgLxFi0xImI5oZkAWEFARSA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    .selectize-control.multi .selectize-input [data-value] {
        background-color: #9C40F7;
        background-image: linear-gradient(to bottom, #9C40F7, #9C40F7);
    }

    .selectize-control.multi .selectize-input>div {
        color: #fff;
    }
</style>

<!-- Modal -->
<div class="modal fade" id="modal-create-forum-discussion" tabindex="-1" aria-labelledby="importPegawai"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content shadow-md">
            <div class="modal-header" style="background-color: #9425FE; position: relative;">
                <h5 class="modal-title text-white text-center w-100" id="importPegawai">Diskusi Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    style="position: absolute; right: 20px; top: 25px;"></button>
            </div>
            <form action="" id="form-create-discussion-forum" method="POST" enctype="multipart/form-data"
                class="editForm">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="name" class="fw-semibold form-label">Modul Belajar</label>
                            <select name="module_id" class="list-modul form-select">
                                <option value="">-- Pilih --</option>
                            </select>
                            @error('name')
                                <span class="text-danger error-edit">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="name" class="fw-semibold form-label">Judul Pertanyaan</label>
                            <input type="text" name="discussion_title" class="form-control"
                                placeholder="Tulis judul pertanyaan anda dengan singkat">
                            @error('name')
                                <span class="text-danger error-edit">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="name" class="fw-semibold form-label">Deskripsi Pertanyaan</label>
                            <textarea name="discussion_question" id="" cols="30" rows="7" class="form-control"></textarea>
                            @error('name')
                                <span class="text-danger error-edit">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <p>Uraikan pertanyaan Anda lebih panjang dan jelas pada bagian ini. Anda dapat menambahkan potongan
                        kode, gambar, atau video untuk memperjelas pertanyaan.</p>
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="name" class="fw-semibold form-label">Kata Kunci</label>
                            {{-- <select class="form-control" name="tag[]" multiple="" id="select2-tokenizer"
                                style="width: 100%; height: 36px">
                            </select> --}}
                            <div>
                                {{-- <select class="form-control" name="tag_id[]" multiple="" id="select2-tokenizer"
                                    style="width: 100%; height: 36px">
                                </select> --}}
                                <select name="tag[]" id="test" multiple="" style="width: 100%; height: 36px">
                                    <option value="test">test</option>
                                    <option value="woi">woi</option>
                                </select>
                            </div>
                            @error('name')
                                <span class="text-danger error-edit">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="modal-footer mb-4 d-flex gap-3">
                    <button type="button" class="outline-purple-primary" data-bs-dismiss="modal">Nanti saja</button>
                    <button type="submit" class="btn text-white updateConfirmation"
                        style="background-color: #7209DB;">Kirim Diskusi</button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/js/selectize.min.js"
        integrity="sha512-IOebNkvA/HZjMM7MxL0NYeLYEalloZ8ckak+NDtOViP7oiYzG5vn6WVXyrJDiJPhl4yRdmNAG49iuLmhkUdVsQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            $("#test").selectize({});
            $('#form-create-discussion-forum').submit(function(e) {
                e.preventDefault();

                var formData = new FormData(this);

                var id = "{{ $id }}";

                $.ajax({
                    url: "{{ config('app.api_url') }}" + "/api/discussions/" + id,
                    headers: {
                        'Authorization': 'Bearer ' + "{{ session('hummaclass-token') }}",
                    },
                    type: 'POST',
                    data: formData,
                    dataType: "json",
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        Swal.fire({
                            title: "Sukses",
                            text: response.meta.title,
                            icon: "success"
                        }).then(function() {
                            $('#modal-create-forum-discussion').modal('hide');
                            window.location.reload()
                        })
                    },
                    error: function(error) {
                        let errors = error.responseJSON.data || {};
                        let message = error.responseJSON.meta.message;
                        $('.is-invalid').removeClass('is-invalid');
                        $('.invalid-feedback').addClass('d-none');

                        if (errors) {
                            for (let key in errors) {
                                if (errors.hasOwnProperty(key)) {
                                    let feedback = $(`#${key}`).closest('.col').find(
                                        '.invalid-feedback');
                                    feedback.text(errors[key][
                                        0
                                    ]); // Mengambil pesan error pertama
                                    feedback.removeClass('d-none');
                                    $(`#${key}`).addClass('is-invalid');
                                }
                            }
                        } else {
                            Swal.fire({
                                title: "Terjadi Kesalahan!",
                                text: message,
                                icon: "error"
                            });
                        }
                    }
                });
            });
        });
    </script>

    <script>
        setInterval(() => {
            $('.selectize-dropdown').css('width', '100%')
        }, 100);
    </script>
@endpush
