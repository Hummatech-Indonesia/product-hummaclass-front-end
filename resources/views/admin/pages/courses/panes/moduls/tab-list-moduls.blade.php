<div class="d-flex gap-3 mb-4">
    <form action="" class="position-relative">
        <input type="text" class="form-control product-search px-4 ps-5" name="name"
            value="{{ old('name', request('name')) }}" id="input-search" placeholder="Search">
        <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 ms-3" style="color: #8B8B8B"></i>
    </form>
    <form action="" class="position-relative">
        <input type="text" class="form-control product-search px-1 ps-5" name="name"
            value="{{ old('name', request('name')) }}" id="input-filter" placeholder="Terbaru">
        <svg class="position-absolute top-50 start-0 translate-middle-y fs-6 ms-3" xmlns="http://www.w3.org/2000/svg"
            width="20" height="20" viewBox="0 0 512 512">
            <path fill="none" stroke="#8B8B8B" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                d="M32 144h448M112 256h288M208 368h96" />
        </svg>
    </form>
</div>
<div class="row" id="cardBody">

</div>
@push('script')
    <script>
        $(document).ready(function() {
            var id = "{{ $id }}";
            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}" + "/api/modules/" + id,
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                success: function(response) {
                    if (response.data.length === 0) {
                        $('#cardBody').append(empty());
                    } else {
                        $.each(response.data, function(index, value) {
                            $('#cardBody').append(card(index, value));
                        });
                    }

                },
                error: function(xhr) {
                    Swal.fire({
                        title: "Terjadi Kesalahan!",
                        text: "Tidak dapat memuat data kategori.",
                        icon: "error"
                    });
                }
            });
        });

        function card(index, value) {

            return `<div class="col-md-12">
                        <div class="card position-relative">
                            <div class="d-flex justify-content-between align-items-center my-3">
                                <div class="p-2"
                                    style="left: 0;top:5%;background:linear-gradient(to right,#FFA41C, #FFD08A); border-radius:0 8px 8px 0;width:200px">
                                    <span class="text-white" style="font-weight: bold;">Step ke ${value.step}
                                        </span>
                                </div>
                                <div class="d-flex gap-2 pe-4">
                                    <a href="{{ route('admin.modules.show', ['']) }}/${value.id}" class="btn text-white"
                                        style="background-color: var(--purple-primary)">
                                        Lihat Modul
                                        <svg xmlns="http://www.w3.org/2000/svg" class="ms-1" width="17" height="17"
                                            viewBox="0 0 24 24">
                                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2">
                                                <path d="M3 13c3.6-8 14.4-8 18 0" />
                                                <path d="M12 17a3 3 0 1 1 0-6a3 3 0 0 1 0 6" />
                                            </g>
                                        </svg> </a>
                                    <i class="ti ti-settings text-warning fs-7 mt-1"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-8 border-end">
                                        <h5 style="font-weight: bold;" class="text-dark"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="icon icon-tabler icons-tabler-outline icon-tabler-book-2">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M19 4v16h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12z" />
                                                <path d="M19 16h-12a2 2 0 0 0 -2 2" />
                                                <path d="M9 8h6" />
                                            </svg>
                                            ${value.title}
                                        </h5>
                                        <p>${value.sub_title}</p>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="p-1">
                                            <h5 class="fw-semibold">Meliputi</h5>
                                            <div class="row">
                                                <div class="col-lg-6 mb-2">
                                                    <div class="btn btn-light-warning text-warning w-100">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                            class="icon icon-tabler icons-tabler-outline icon-tabler-book-2">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path d="M19 4v16h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12z" />
                                                            <path d="M19 16h-12a2 2 0 0 0 -2 2" />
                                                            <path d="M9 8h6" />
                                                        </svg><span class="text-dark ms-2" style="font-weight: bold;">${value.sub_module_count}
                                                            Materi</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-2">
                                                    <div class="btn btn-light-warning text-warning w-100">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                            class="icon icon-tabler icons-tabler-outline icon-tabler-book-2">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path d="M19 4v16h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12z" />
                                                            <path d="M19 16h-12a2 2 0 0 0 -2 2" />
                                                            <path d="M9 8h6" />
                                                        </svg><span class="text-dark ms-2" style="font-weight: bold;">10
                                                            Soal</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>`;
        }
    </script>
@endpush
