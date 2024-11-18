<div id="view-reset" class="card card-body pb-5">
    <h4 class="fw-semibold">Password</h4>
    <div class="row mt-4">
        <div class="col-lg-12 mb-3">
            <label for="" class="form-label">Password Lama:</label>
            <input type="password" class="form-control" value="" id="name" placeholder="Password Lama" disabled>
        </div>
        <div class="col-lg-12 mb-3">
            <label for="" class="form-label">Password Baru:</label>
            <input type="password" class="form-control" id="email" placeholder="Password Baru" disabled>
        </div>
        <div class="col-lg-12 mb-3">
            <label for="" class="form-label">Konfirmasi Password:</label>
            <input type="password" class="form-control" id="gender" placeholder="Konfirmasi Password" disabled>
        </div>
    </div>
    <div class="text-end">
        <button id="edit-reset-btn" class="btn btn-warning">
            <svg xmlns="http://www.w3.org/2000/svg" class="me-2" width="15" height="18" viewBox="0 0 28 28">
                <path fill="currentColor"
                    d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
            </svg>
            Ubah Password
        </button>
    </div>
</div>

<div id="edit-reset" class="card card-body pb-5" style="display: none;">
    <h4 class="fw-semibold">Ganti Password</h4>
    <form enctype="multipart/form-data" id="edit-password-form">
        @csrf
        <div class="row mt-4">
            <div class="col-lg-12 mb-3">
                <label for="" class="form-label">Password Lama:</label>
                <input type="password" class="form-control old_password" id="name" placeholder="Password Lama" name="old_password">
            </div>
            <div class="col-lg-12 mb-3">
                <label for="" class="form-label">Password Baru:</label>
                <input type="password" class="form-control password" id="email" placeholder="Password Baru" name="password">
            </div>
            <div class="col-lg-12 mb-3">
                <label for="" class="form-label">Konfirmasi Password:</label>
                <input type="password" class="form-control password_confirmation" id="password_confirmation" placeholder="Konfirmasi Password" name="password_confirmation">
            </div>
        </div>
        <div class="text-end">
            <button type="reset" id="cancel-reset-btn" class="btn text-white" style="background-color: #DB0909;">Batal</button>
            <button type="submit" id="save-profile-btn" class="btn text-white ms-2" style="background-color: #9425FE;">
                <svg xmlns="http://www.w3.org/2000/svg" class="me-2" width="15" height="18" viewBox="0 0 28 28">
                    <path fill="currentColor"
                        d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                </svg>
                Simpan
            </button>
        </div>
    </form>
</div>
