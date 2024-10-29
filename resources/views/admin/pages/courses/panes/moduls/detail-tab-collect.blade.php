@extends('admin.layouts.app')

@section('content')
<div class="card overflow-hidden" style="border-radius: 15px;">
    <div class="card-body p-0">
        <div class="d-flex align-items-center p-4 rounded-2 border-4 border-white" style="background-color: var(--purple-primary);border-radius: 15px;">
            <img src="{{ asset('admin/dist/images/profile/user-1.jpg') }}" class="rounded-circle border border-3 border-white" width="100px" height="100px">
            <div class="ms-3">
                <h4 class="fs-6 text-white fw-semibold mb-2" id="userName">{{ session('user')['name'] }}</h4>
                <span class="fw-normal text-white" id="userEmail">{{ session('user')['email'] }}</span>
            </div>
        </div>
    </div>
</div>

<div class="text-end pb-3">
    <button class="btn" style="background:#E8E8E8;">
        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"
                class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-left">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M5 12l14 0" />
                <path d="M5 12l6 6" />
                <path d="M5 12l6 -6" />
            </svg> Kembali</span>
    </button>
</div>

<div class="card">
    <div class="card-header" style="background-color: #9425FE">
        <h5 class="text-white">Detail Tugas</h5>
    </div>
    <div class="card-body">
        <div>
            <label for="" class="form-label">Tugas</label>
            <p class="question"></p>
        </div>
        <div>
            <label for="" class="form-label">Deskripsi</label>
            <p class="description"></p>
        </div>
    </div>
    <div class="card-footer bg-white border-top">
        <label for="" class="form-label">File Tugas</label>
        <div class="row">
            <div class="col-lg-11">
                <div class="card" style="background-color: #F6EEFE">
                    <div class="d-flex align-items-center">
                        <div class="me-2 pe-1 d-flex align-items-center p-2">
                          <div class="p-2" style="background-color: #9425FE; border-radius: 8px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="white" fill-rule="evenodd" d="M4 3a1 1 0 0 1 1-1h9a1 1 0 0 1 .707.293l5 5A1 1 0 0 1 20 8v11a3 3 0 0 1-3 3H7a3 3 0 0 1-3-3zm13.586 5L14 4.414V8z" clip-rule="evenodd"/></svg>
                          </div>
                        </div>
                        <div>
                          <h6 class="fw-semibold mb-1">Tugas Membuat Crud</h6>
                          <p class="fs-2 mb-0 text-muted">Dikumpulkan Pada : <span class="date"></span></p>
                        </div>
                      </div>
                </div>
            </div>
            <div class="col-lg-1">
                <button class="btn text-white w-100 px-2 btn-download" style="background-color: #9425FE">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"><path fill="currentColor" d="M18.22 20.75H5.78A2.64 2.64 0 0 1 3.25 18v-3a.75.75 0 0 1 1.5 0v3a1.16 1.16 0 0 0 1 1.25h12.47a1.16 1.16 0 0 0 1-1.25v-3a.75.75 0 0 1 1.5 0v3a2.64 2.64 0 0 1-2.5 2.75"/><path fill="currentColor" d="M12 15.75a.74.74 0 0 1-.53-.22l-4-4a.75.75 0 0 1 1.06-1.06L12 13.94l3.47-3.47a.75.75 0 0 1 1.06 1.06l-4 4a.74.74 0 0 1-.53.22"/><path fill="currentColor" d="M12 15.75a.76.76 0 0 1-.75-.75V4a.75.75 0 0 1 1.5 0v11a.76.76 0 0 1-.75.75"/></svg>
                    <span style="font-size: 11px;">
                        Simpan
                    </span>
                </button>
            </div>
        </div>
    </div>
</div>
@endsection



@section('script')
    <script>
        $(document).ready(function () {
            const id = "{{ $id }}";
            $.ajax({
                type: "get",
                url: "{{ config('app.api_url') }}/api/submission-tasks/detail/" + id,
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                success: function(response) {
                    console.log(response);
                    const data = response.data;
                    
                    $('.question').text(data.module_task.question);
                    $('.description').text(data.module_task.description);
                    $('.date').text(data.created_at);
                    $('.btn-download').click(function (e) { 
                        e.preventDefault();

                        window.open(`{{ config('app.api_url') }}/api/submission-tasks/download/${id}`);
                    });
                },
                error: function(xhr) {
                    Swal.fire({
                        title: "Terjadi Kesalahan!",
                        text: "Tidak dapat memuat data tugas.",
                        icon: "error"
                    });
                }
            });
        });
    </script>
@endsection