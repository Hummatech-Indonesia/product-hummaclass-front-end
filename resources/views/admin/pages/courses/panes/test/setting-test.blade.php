@extends('admin.layouts.app')

@section('content')
<div class="card position-relative overflow-hidden" style="background-color: #E8DEF3;">
    <div class="card-body px-4 py-3">
        <div class="row align-items-center">
            <div class="col-9">
                <h4 style="font-weight: bold;">Pengaturan Test</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-muted " href="index-2.html">Dashboard</a></li>
                        <li class="breadcrumb-item" aria-current="page">Banner</li>
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

<div class="card card-body">
    <form action="">
        <div class="row">
            <div class="col-lg-6 mb-3">
                <div class="form-group">
                    <label for="" class="form-label fw-semibold text-dark">Jumlah Soal</label>
                    <input type="text" class="form-control" placeholder="Masukan jumlah soal" name="total_question">
                </div>
            </div>
            <div class="col-lg-6 mb-3">
                <div class="form-group">
                    <label for="" class="form-label fw-semibold text-dark">Durasi Pengerjaan</label>
                    <input type="text" class="form-control" placeholder="Masukan durasi pengerjaan" name="duration">
                </div>
            </div>

            <div class="col-lg-12">
                <h6>Pengumpulan Kuis</h6>
                <input type="hidden" name="is_submitted" value="0">
                <div class="form-check form-switch">
                    <input class="form-check-input" name="is_submitted" type="checkbox" role="switch" id="flexSwitchCheckDefault" value="1">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Fitur Pengumpulan</label>
                </div>

            </div>
            <div class="d-flex mt-3 gap-2">
                <div class="mt-1">
                    <span class="text-white py-1 px-1 d-flex align-items-center" style="background-color: #7209DB;border-radius:9px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                            <path fill="currentColor" d="m8.93 6.588l-2.29.287l-.082.38l.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319c.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246c-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0a1 1 0 0 1 2 0">
                            </path>
                        </svg>
                    </span>
                </div>
                <div>
                    <p>Aktifkan menu diatas untuk fitur siswa hanya bisa mengumpulkan 5 menit sebelum durasi
                        pengerjaan berakhir</p>
                </div>
            </div>

            <div class="col-lg-12">
                <h5 class="fw-semibold mt-3 mb-3">Pengaturan Soal</h5>
                <div class="email-repeater mb-3">
                    <div data-repeater-list="repeater-group">
                        <div data-repeater-item="" class="mb-3">
                            <div class="row">
                                <div class="col-11">
                                    <div class="row">
                                        <div class="col-6 mb-3">
                                            <label for="user" class="fw-semibold form-label">Modul</label>
                                            <input type="text" class="form-control" name="user[]"
                                                placeholder="Masukan modul">
                                            <div class="invalid-feedback"></div>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <label for="user" class="fw-semibold form-label">Jumlah Soal Diambil</label>
                                            <input type="number" class="form-control" name="user[]"
                                                placeholder="Masukan jumlah soal">
                                            <div class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-1 mb-3 d-flex flex-column justify-content-end">
                                    <div>
                                        <button data-repeater-delete="" class="btn btn-danger waves-effect waves-light"
                                            style="margin-top: 30px;" type="button">
                                            <i class="ti ti-circle-x fs-5"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" data-repeater-create="" class="btn text-white" id="roundown-btn"
                        style="background-color: var(--purple-primary)">
                        <div class="d-flex align-items-center">
                            <i class="ti ti-plus ms-1 fs-5 me-1"></i> Tambah
                        </div>
                    </button>
                </div>
            </div>

            <div class="text-end">
                <button type="button" class="btn text-white me-2" style="background-color: #DB0909;"
                        data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn text-white" style="background-color: #7209DB;">Tambah</button>
            </div>
        </div>
    </form>
</div>
@endsection

@section('script')
    
<script>
    document.addEventListener('DOMContentLoaded', function() {
        let repeaterContainer = document.querySelector('[data-repeater-list]');
        let addButton = document.querySelector('[data-repeater-create]');
        let template = document.querySelector('[data-repeater-item]').cloneNode(true);
        template.querySelectorAll('input').forEach(input => input.value = ''); // Kosongkan input di template
        
        addButton.addEventListener('click', function() {
            let newItem = template.cloneNode(true);
            let deleteButton = newItem.querySelector('[data-repeater-delete]');
            
            deleteButton.addEventListener('click', function() {
                if (confirm('Apakah Anda yakin ingin menghapus acara ini?')) {
                    newItem.remove();
                }
            });
            
            repeaterContainer.appendChild(newItem);
        });
        
        document.querySelectorAll('[data-repeater-delete]').forEach(function(deleteButton) {
            deleteButton.addEventListener('click', function() {
                if (confirm('Apakah Anda yakin ingin menghapus acara ini?')) {
                    deleteButton.closest('[data-repeater-item]').remove();
                }
            });
        });
    });
</script>
@endsection