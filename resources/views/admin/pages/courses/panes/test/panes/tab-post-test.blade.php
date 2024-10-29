<div class="row mt-4">
    <div class="col-lg-3">
        <div class="card border-0 " style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);">
            <div class="p-4">
                <h5 class="fw-semibold">Hasil Pre Test</h5>
                <h6 class="mt-3 fw-semibold">Tanggal Ujian</h6>
                <p style="color: #9425FE;">Senin 12 September 2023, <br>
                    12:28:30
                </p>
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="d-flex justify-content-between">
                            <h6 class="fw-semibold">Jumlah Soal</h6>
                            <h6>:</h6>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="text-end">
                            <p><span id="detail-total-question"></span> Soal</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="d-flex justify-content-between">
                            <h6 class="fw-semibold">Soal Benar</h6>
                            <h6>:</h6>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="text-end">
                            <p><span id="detail-total-correct"></span> Soal</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="d-flex justify-content-between">
                            <h6 class="fw-semibold">Soal Salah</h6>
                            <h6>:</h6>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="text-end">
                            <p><span id="detail-total-fault"></span> Soal</p>
                        </div>
                    </div>
                </div>
                <div class="row text-center justify-content-center mt-2">
                    <h6 class="fw-semibold">Nilai Ujian</h6>
                    <span class="fw-semibold fs-9" id="score" style="color: #9C40F7;">80</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-9" class="question-list">
        {{-- @forelse (range(1,3) as $data)
        <div class="card position-relative">
            <div class="p-3">
                <div class="d-flex justify-content-between">
                    <b class="d-flex">10 .Fungsi yang dapat digunakan untuk menampilkan luaran program dijava adalah</b>
                    <div class="text-end">
                        <span class="badge px-3" style="background-color: #F6EEFE; color:#9C40F7">
                            <svg xmlns="http://www.w3.org/2000/svg" class="me-1" width="15" height="15" viewBox="0 0 256 256">
                                <path fill="currentColor" d="m229.66 77.66l-128 128a8 8 0 0 1-11.32 0l-56-56a8 8 0 0 1 11.32-11.32L96 188.69L218.34 66.34a8 8 0 0 1 11.32 11.32" />
                            </svg>
                            Benar
                        </span>
                    </div>
                </div>
                <div class="ms-3 mt-3">
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" value="option_a" id="option_a_${index}" ${value.user_answer === 'option_a' ? 'checked' : ''} disabled>
                        <label class="form-check-label" for="option_a_${index}">
                            A. “hello wold!”
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" value="option_b" id="option_b_${index}" ${value.user_answer === 'option_b' ? 'checked' : ''} disabled>
                        <label class="form-check-label" for="option_b_${index}">
                            B. Public static void main(String[] args)
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" value="option_c" id="option_c_${index}" ${value.user_answer === 'option_c' ? 'checked' : ''} disabled>
                        <label class="form-check-label" for="option_c_${index}">
                            C. System.out.print()
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" value="option_d" id="option_d_${index}" ${value.user_answer === 'option_d' ? 'checked' : ''} disabled>
                        <label class="form-check-label" for="option_d_${index}">
                            D. Import java.io.File;
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" value="option_e" id="option_e_${index}" ${value.user_answer === 'option_e' ? 'checked' : ''} disabled>
                        <label class="form-check-label" for="option_e_${index}">
                            E. Int umur = 16;
                        </label>
                    </div>
                </div>
            </div>
            <div class="position-absolute bottom-0 end-0" style="padding: 0px;">
                <img src="{{ asset('admin/assets/images/background/bubble-purple.png') }}" alt="Description" class="img-fluid" style="max-width: 100px; height: auto;">
            </div>
        </div>
        <div class="card position-relative">
            <div class="p-3">
                <div class="d-flex justify-content-between">
                    <b class="d-flex">10 .Fungsi yang dapat digunakan untuk menampilkan luaran program dijava adalah</b>
                    <div class="text-end">
                        <span class="badge px-3" style="background-color: #FEEEEE; color:#DB0909">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M18.3 5.71a.996.996 0 0 0-1.41 0L12 10.59L7.11 5.7A.996.996 0 1 0 5.7 7.11L10.59 12L5.7 16.89a.996.996 0 1 0 1.41 1.41L12 13.41l4.89 4.89a.996.996 0 1 0 1.41-1.41L13.41 12l4.89-4.89c.38-.38.38-1.02 0-1.4" />
                            </svg>
                            Salah
                        </span>
                    </div>
                </div>
                <div class="ms-3 mt-3">
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" value="option_a" id="option_a_${index}" ${value.user_answer === 'option_a' ? 'checked' : ''} disabled>
                        <label class="form-check-label" for="option_a_${index}">
                            A. “hello wold!”
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" value="option_b" id="option_b_${index}" ${value.user_answer === 'option_b' ? 'checked' : ''} disabled>
                        <label class="form-check-label" for="option_b_${index}">
                            B. Public static void main(String[] args)
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" value="option_c" id="option_c_${index}" ${value.user_answer === 'option_c' ? 'checked' : ''} disabled>
                        <label class="form-check-label" for="option_c_${index}">
                            C. System.out.print()
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" value="option_d" id="option_d_${index}" ${value.user_answer === 'option_d' ? 'checked' : ''} disabled>
                        <label class="form-check-label" for="option_d_${index}">
                            D. Import java.io.File;
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" value="option_e" id="option_e_${index}" ${value.user_answer === 'option_e' ? 'checked' : ''} disabled>
                        <label class="form-check-label" for="option_e_${index}">
                            E. Int umur = 16;
                        </label>
                    </div>
                </div>
            </div>
            <div class="position-absolute bottom-0 end-0" style="padding: 0px;">
                <img src="{{ asset('admin/assets/images/background/bubble-purple.png') }}" alt="Description" class="img-fluid" style="max-width: 100px; height: auto;">
            </div>
        </div>
        @empty
            
        @endforelse --}}

    </div>
</div>