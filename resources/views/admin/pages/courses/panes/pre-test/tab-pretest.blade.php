<div>
    <h5 class="fw-semibold">
        Telah Di Isi 30 Soal
    </h5>
    <div class="d-flex justify-content-between mb-4 mt-3">
        <form action="" class="position-relative">
            <input type="text" class="form-control product-search px-4 ps-5" name="name" value="{{ old('name', request('name')) }}" id="input-search" placeholder="Search">
            <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
        </form>
        <div class="d-flex gap-2">
            <button class="btn btn-success">
                <i class="ti ti-book-2 fs-4 mt-1"></i>
                Import Soal
            </button>
            <button class="btn text-white" style="background-color: var(--purple-primary)">
                <i class="ti ti-book-2 fs-4 mt-1"></i>
                Tambah Soal
            </button>
        </div>
    </div>

    @foreach (range(1,4) as $item)
    <div class="card position-relative">
        <div class="p-3">
            <div class="d-flex justify-content-between">
                <b>10. Fungsi yang dapat digunakan untuk menampilkan luaran program di java adalah</b>
                <button class="btn btn-light-danger text-danger p-1">
                    <i class="ti ti-trash fs-6 fw-semibold"></i>
                </button>
            </div>
            <div class="mt-2">
                <h6 class="mb-3 ms-1">A. "hello wold!"</h6>
                <h6 class="mb-3 ms-1">B. Public static void main(String[] args)</h6>
                <div class="d-flex gap-2 mb-3">
                    <span class="badge bg-light-success rounded-2 py-1 ps-1 pe-5">
                        <h6>C. System.out.print()</h6>
                    </span>
                    <div class="text-success mt-1">
                        <i class="ti ti-check fs-3"></i>
                        Jawaban
                    </div>
                </div>
                <h6 class="mb-3 ms-1">D. Import java.io.File;</h6>
                <h6 class="mb-3 ms-1">E. Int Umur = 16;</h6>
            </div>
        </div>
        <div class="position-absolute bottom-0 end-0" style="padding: 0px;">
            <img src="/assets/images/background/buble.png" alt="Description" class="img-fluid" style="max-width: 100px; height: auto;">
        </div>
    </div>
    @endforeach
</div>
