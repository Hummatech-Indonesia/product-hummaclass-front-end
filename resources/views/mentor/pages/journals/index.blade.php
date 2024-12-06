@extends('mentor.layouts.app')

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
                    <h5 class="fw-semibold mb-8">Jurnal</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted " href="{{ route('mentor.journal.index') }}">Jurnal Mentor</a>
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

    <div class="d-flex justify-content-between mt-2">
        <form action="" class="position-relative d-flex">
            <input type="text" class="form-control product-search px-4 ps-5" name="title"
                value="{{ old('title', request('title')) }}" id="search-name" style="background-color: #fff"
                placeholder="Search">
            <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
        </form>
        <button class="btn me-1 mb-1 bg-primary text-white btn-lg px-4 fs-4 font-medium"
            data-bs-toggle="modal" data-bs-target="#modal-create">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M19 11h-6V5a1 1 0 0 0-2 0v6H5a1 1 0 0 0 0 2h6v6a1 1 0 0 0 2 0v-6h6a1 1 0 0 0 0-2"/></svg>
             Tambah
        </button>
    </div>

    <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-title">Daftar Jurnal</h5>
            <div class="table-responsive rounded-2 mb-4">
                <table class="table border text-nowrap customize-table mb-0 align-middle">
                    <thead class="text-dark fs-4">
                        <tr class="">
                            <th class="fs-4 fw-semibold mb-0">No</th>
                            <th class="fs-4 fw-semibold mb-0">Judul</th>
                            <th class="fs-4 fw-semibold mb-0">Bukti</th>
                            <th class="fs-4 fw-semibold mb-0">Tanggal</th>
                            <th class="fs-4 fw-semibold mb-0">Kelas</th>
                            <th class="fs-4 fw-semibold mb-0">Dekripsi</th>
                            <th class="fs-4 fw-semibold mb-0">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                    </tbody>
                </table>
            </div>
            <nav id="pagination_list_student"></nav>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <nav id="pagination">

        </nav>
    </div>

    @include('mentor.pages.journals.widgets.modal-create')
    @include('mentor.pages.journals.widgets.modal-update')
    @include('mentor.pages.journals.widgets.modal-detail')
    @include('components.delete-modal-component')
@endsection

@section('script')
<script>
    $(document).ready(function() {
      classroom();
      function classroom() {
          $.ajax({
              type: "GET",
              url: "{{ config('app.api_url') }}/api/mentor/classrooms",
              headers: {
                  Authorization: "Bearer {{ session('hummaclass-token') }}"
              },
              dataType: "json",
              success: function(response) {                
                  $('#classroom_id').empty().append(
                      '<option value="">Pilih Kelas</option>'
                  ); // Kosongkan select dan tambahkan placeholder
                  $.each(response.data, function(index, value) {
                      $('#classroom_id').append(
                          `<option value="${value.id}">${value.school.name} - ${value.name}</option>`
                      );
                  });
                  $('#classroom_id_update').empty().append(
                      '<option value="">Pilih Kelas</option>'
                  ); // Kosongkan select dan tambahkan placeholder
                  $.each(response.data, function(index, value) {
                      $('#classroom_id_update').append(
                          `<option value="${value.id}">${value.school.name} - ${value.name}</option>`
                      );
                  });
              },
              error: function(xhr) {
                  Swal.fire({
                      title: "Terjadi Kesalahan!",
                      text: "Tidak dapat memuat data kelas.",
                      icon: "error"
                  });
              }
          });
      }
    })
</script>
<script>
    $(document).ready(function() {
        $(document).on('click', '.btn-detail-journal', function() {
            var name = $(this).data('name');
            var title = $(this).data('title');
            var classroom = $(this).data('classroom');
            var date = $(this).data('date');
            var description = $(this).data('description');
            var image = $(this).data('image');
            
            $('#name-detail').text(name);
            $('#title-detail').text(title);
            $('#classroom-detail').text(classroom);
            $('#date-detail').text(date);
            $('#description-detail').text(description);
            $('#image-detail').attr('src', image);
            $('#modal-detail-journal').modal('show');
        });
    });
</script>
<script>
    function fetchNewData() {
    $.ajax({
        type: "GET",
        url: "{{ config('app.api_url') }}/api/journals",
        headers: {
            Authorization: "Bearer {{ session('hummaclass-token') }}"
        },
        dataType: "json",
        success: function(response) {
            const tableBody = $('#tableBody');
            tableBody.empty();

            let content = '';
            $.each(response.data, function(index, data) {
                content += mentorJournal(index, data);
            });

            tableBody.html(content);
        },
        error: function(error) {
            console.error('Error fetching data:', error);
        }
    });
}
</script>
    @include('mentor.pages.journals.scripts.datatable')
    @include('mentor.pages.journals.scripts.delete')
@endsection
