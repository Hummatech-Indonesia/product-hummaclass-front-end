<div id="view-profile" class="card card-body pb-5">
    <h4 class="fw-semibold">Profil Pengguna</h4>
    <div class="row mt-4">
        <div class="col-lg-6 mb-3">
            <label for="" class="form-label">Nama:</label>
            <input type="text" class="form-control" id="name" placeholder="Name" value="{{ session('user')['name'] }}" disabled>
        </div>
        <div class="col-lg-6 mb-3">
            <label for="" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Email" value="{{ session('user')['email'] }}" disabled>
        </div>
        <div class="col-lg-6 mb-3">
            <label for="" class="form-label">No Telepon:</label>
            <input type="text" class="form-control" id="phone" placeholder="No Telepon" value="{{ session('user')['phone_number'] }}" disabled>
        </div>
        <div class="col-lg-6 mb-3">
            <label for="" class="form-label">Jenis Kelamin:</label>
            <input type="text" class="form-control" id="gender" placeholder="Jenis Kelamin" {{ session('user')['gender'] }} disabled>
        </div>
        <div class="col-lg-12 mb-4">
            <label for="" class="form-label">Alamat:</label>
            <input type="text" class="form-control" id="address" placeholder="Alamat" value="{{ session('user')['address'] }}" disabled>
        </div>
    </div>
    <div class="text-end">
        <button id="edit-profile-btn" class="btn btn-warning">
            <svg xmlns="http://www.w3.org/2000/svg" class="me-2" width="15" height="18" viewBox="0 0 28 28">
                <path fill="currentColor"
                    d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
            </svg>
            Ubah Profil
        </button>
    </div>
</div>

<div id="edit-profile" class="card card-body pb-5" style="display: none;">
    <h4 class="fw-semibold">Profil Pengguna</h4>
    <form enctype="multipart/form-data">
        @csrf
        <div class="row mt-4">
            <div class="col-lg-6 mb-3">
                <label for="" class="form-label">Nama:</label>
                <input type="text" class="form-control" id="name" placeholder="Name">
            </div>
            <div class="col-lg-6 mb-3">
                <label for="" class="form-label">Email:</label>
                <input type="text" class="form-control" id="email" placeholder="Email">
            </div>
            <div class="col-lg-6 mb-3">
                <label for="" class="form-label">No Telepon:</label>
                <input type="text" class="form-control" id="phone_number" placeholder="No Telepon">
            </div>
            <div class="col-lg-6 mb-3">
                <label for="" class="form-label">Jenis Kelamin:</label>
                <input type="text" class="form-control" id="gender" placeholder="Jenis Kelamin">
            </div>
            <div class="col-lg-12 mb-4">
                <label for="" class="form-label">Alamat:</label>
                <textarea name="" class="form-control" id="address" cols="30" rows="10"></textarea>
            </div>
        </div>
        <div class="text-end">
            <button id="cancel-edit-btn" class="btn text-white" style="background-color: #DB0909;">Batal</button>
            <button id="save-profile-btn" class="btn text-white ms-2" style="background-color: #9425FE;">
                <svg xmlns="http://www.w3.org/2000/svg" class="me-2" width="15" height="18" viewBox="0 0 28 28">
                    <path fill="currentColor"
                        d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                </svg>
                Simpan
            </button>
        </div>
    </form>
</div>

