<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('admin/dist/images/profile/user-1.jpg') }}" alt="user"
                        class="rounded-circle me-3" style="width: 64px; height: 64px;">
                    <div>
                        <h5 class="mb-1">Suyadi Oke Joss, S.Pd</h5>
                        <p class="text-muted mb-0">Wali Kelas XII RPL 1</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('admin/dist/images/profile/user-1.jpg') }}" alt="user"
                        class="rounded-circle me-3" style="width: 64px; height: 64px;">
                    <div>
                        <h5 class="mb-1">Alfian Ban Dalam</h5>
                        <p class="text-muted mb-0">Mentor Kelas Industri</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card my-5 p-5">
    <h3>Daftar Siswa</h3>
    <div class="col-4 mb-4">
        <input type="text" name="search" id="search" placeholder="Cari..." class="form-control ">
    </div>
    <div class="">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No Telepon</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 1; $i <= 10; $i++)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('admin/dist/images/profile/user-1.jpg') }}" alt="user"
                                    class="rounded-circle me-3" style="height: 64px; width: 64px;">
                                <div>
                                    <b class="mb-0">Alfian Kopling</b>
                                    <p class="text-muted">XI RPL 1</p>
                                </div>
                            </div>
                        </td>
                        <td>alfian@gmail.com</td>
                        <td>0987654321</td>
                        <td>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </td>
                    </tr>
                @endfor
            </tbody>
        </table>
    </div>
</div>
