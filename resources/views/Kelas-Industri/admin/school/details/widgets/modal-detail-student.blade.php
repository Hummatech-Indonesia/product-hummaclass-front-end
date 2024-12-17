<!-- modal detail -->
<div class="modal fade" id="detail-student-modal" tabindex="-1" aria-labelledby="importPegawai" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <h5 class="modal-title" id="importPegawai">Detail Siswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <img id="image-detail" src="{{ asset('assets/img/no-image/no-profile.jpeg') }}"
                            class="rounded-circle user-profile mb-3"
                            style="object-fit: cover; width: 150px; height: 150px;" alt="User Profile Picture" />
                    </div>
                </div>
                <div class="row mt-3">
                    <!-- Nama -->
                    <div class="col-12 col-md-6">
                        <div class="d-flex mb-2">
                            <h6 class="mb-0">Nama:</h6>
                            <p class="ms-2 mb-0" id="name-detail">Wenv</p>
                        </div>
                        <hr>
                    </div>
                    <!-- Email -->
                    <div class="col-12 col-md-6">
                        <div class="d-flex mb-2">
                            <h6 class="mb-0">Email:</h6>
                            <p class="ms-2 mb-0" id="email-detail">a@gmail.com</p>
                        </div>
                        <hr>
                    </div>
                    <!-- NIP -->
                    <div class="col-12 col-md-6">
                        <div class="d-flex mb-2">
                            <h6 class="mb-0">NIP:</h6>
                            <p class="ms-2 mb-0" id="nisn-detail">34567890</p>
                        </div>
                        <hr>
                    </div>
                    <!-- Tanggal Lahir -->
                    <div class="col-12 col-md-6">
                        <div class="d-flex mb-2">
                            <h6 class="mb-0">Tanggal Lahir:</h6>
                            <p class="ms-2 mb-0" id="date-birth-detail">20 Mei 2024</p>
                        </div>
                        <hr>
                    </div>
                    <!-- Nomor Telepon -->
                    <div class="col-12 col-md-6">
                        <div class="d-flex mb-2">
                            <h6 class="mb-0">Nomor Telepon:</h6>
                            <p class="ms-2 mb-0" id="phone-number-detail">12344323432</p>
                        </div>
                        <hr>
                    </div>
                    <!-- Jenis Kelamin -->
                    <div class="col-12 col-md-6">
                        <div class="d-flex mb-2">
                            <h6 class="mb-0">Jenis Kelamin:</h6>
                            <p class="ms-2 mb-0" id="gender-detail">Laki-laki</p>
                        </div>
                        <hr>
                    </div>
                    <!-- Alamat -->
                    <div class="col-12 col-md-12">
                        <div class="d-flex mb-2 text-start">
                            <h6 class="mb-0">Alamat:</h6>
                            <p class="ms-2 mb-0 text-muted text-break" id="address-detail">ddfvfe</p>
                        </div>
                        <hr>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn text-white" style="background-color: #9425FE"
                    data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
