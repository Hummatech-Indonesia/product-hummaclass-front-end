<div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card border border-1 shadow-none p-3">
                <div class="d-flex gap-3 align-items-center ">
                    <span class="badge bg-light-warning text-warning py-2 px-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-clipboard-text">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                            <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                            <path d="M9 12h6" />
                            <path d="M9 16h6" />
                        </svg>
                    </span>
                    <h5 class="fw-semibold text-black">
                        Jumlah Soal: <span id="total_question"></span> Soal
                    </h5>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card border border-1 shadow-none p-3">
                <div class="d-flex gap-3 align-items-center ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                        <g fill="none">
                            <path
                                d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                            <path fill="currentColor"
                                d="M12 2c5.523 0 10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12S6.477 2 12 2m0 2a8 8 0 1 0 0 16a8 8 0 0 0 0-16m0 2a1 1 0 0 1 .993.883L13 7v4.586l2.707 2.707a1 1 0 0 1-1.32 1.497l-.094-.083l-3-3a1 1 0 0 1-.284-.576L11 12V7a1 1 0 0 1 1-1" />
                        </g>
                    </svg>
                    </span>
                    <h5 class="fw-semibold text-black">
                        Waktu Pengerjaan: <span id="duration"></span> Menit
                    </h5>
                </div>
            </div>
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-body">
            <h5 class="fw-semibold">Siswa Mengerjakan</h5>
            <div class="d-flex my-3">
                <form action="" class="position-relative">
                    <input type="text" class="form-control product-search px-4 ps-5" name="name"
                        value="{{ old('name', request('name')) }}" id="search-name" placeholder="Search">
                    <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 ms-3"
                        style="color: #8B8B8B"></i>
                </form>
            </div>
            <div class="table-responsive rounded-2 mb-4 mt-4">
                <table class="table border text-nowrap customize-table mb-0 align-middle text-center">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th class="fs-4 fw-semibold text-white mb-0 px-0" style="background-color: #9425FE">No</th>
                            <th class="fs-4 fw-semibold text-white mb-0" style="background-color: #9425FE">Nama Siswa</th>
                            <th class="fs-4 fw-semibold text-white mb-0 px-0" style="background-color: #9425FE">Pre Test</th>
                            <th class="fs-4 fw-semibold text-white mb-0" style="background-color: #9425FE">Post Test</th>
                            <th class="fs-4 fw-semibold text-white mb-0" style="background-color: #9425FE">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="test-content">
                        @foreach (range(1,5) as $data)
                        <tr>
                            <td>1</td>
                            <td>Alfian Ban Dalam</td>
                            <td>
                                <span class="badge text-primary fs-2 fw-semibold px-4 py-2" style="background-color: #F6EEFE">80</span>
                            </td>
                            <td>
                                <span class="badge bg-light-danger text-danger fs-2 fw-semibold px-4 py-2">-</span>
                            </td>
                            <td>
                                <button class="btn text-white" style="background-color: #9425FE">Detail</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@push('script')
    <script>
        $(document).ready(function() {
            var id = "{{ $id }}";

            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}/api/course-tests/" + id,
                headers: {
                    'Authorization': `Bearer {{ session('hummaclass-token') }}`
                },
                dataType: "json",
                contentType: false,
                processData: false,
                success: function(response) {
                    $('#duration').html(response.data.duration);
                    $('#total_question').html(response.data.total_question);
                },
                error: function(response) {
                    Swal.fire({
                        title: "Terjadi Kesalahan!",
                        text: "Ada kesalahan saat menyimpan data.",
                        icon: "error"
                    });
                }
            });

        });
    </script>
@endpush
