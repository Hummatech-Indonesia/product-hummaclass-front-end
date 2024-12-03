<div class="row">
    <div class="col-12 col-lg-6 col-md-6 mb-3">
        <div class="card shadow border border-none rounded-4 position-relative">
            <div class="card-body p-4">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('admin/dist/images/profile/user-1.jpg') }}" alt="user"
                        class="rounded-circle me-3" style="width: 64px; height: 64px;">
                    <div>
                        <h5 class="mb-1">Suyadi Oke Joss, S.Pd</h5>
                        <p class="text-muted mb-0">Wali Kelas XII RPL 1</p>
                    </div>
                </div>
                <img src="{{ asset('assets/img/bubble/bubble1.png') }}" alt=""
                    style="position: absolute; bottom: 0; right: 0; width: 100px; height: auto; border-bottom-right-radius: 15px">
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6 col-md-6 mb-3">
        <div class="card shadow border border-none rounded-4 position-relative">
            <div class="card-body p-4">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('admin/dist/images/profile/user-1.jpg') }}" alt="user"
                        class="rounded-circle me-3" style="width: 64px; height: 64px;">
                    <div>
                        <h5 class="mb-1">Alfian Ban Dalam</h5>
                        <p class="text-muted mb-0">Mentor Kelas Industri</p>
                    </div>
                </div>
                <img src="{{ asset('assets/img/bubble/bubble1.png') }}" alt=""
                    style="position: absolute; bottom: 0; right: 0; width: 100px; height: auto; border-bottom-right-radius: 15px">
            </div>
        </div>
    </div>
</div>

<div class="card border border-none rounded-3 p-3">
    <div class="card-body">
        <h3>Daftar Siswa</h3>
        <div class="col-12 col-lg-4 mb-4">
            <input type="text" name="search" id="search" placeholder="Cari..." class="form-control rounded-3">
        </div>
        <div class="table-responsive">
            <table class="table table-hover align-middle border border-none mb-0">
                <thead class="">
                    <tr>
                        <th class="px-3">No</th>
                        <th class="px-3">Nama</th>
                        <th class="px-3">Email</th>
                        <th class="px-3">No Telepon</th>
                        <th class="px-3">Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 1; $i <= 10; $i++)
                        <tr>
                            <td class="px-3">{{ $i }}</td>
                            <td class="px-3">
                                <div class="d-flex flex-column flex-md-row align-items-center">
                                    <img src="{{ asset('admin/dist/images/profile/user-1.jpg') }}" alt="user"
                                        class="rounded-circle me-3 mb-2 mb-md-0"
                                        style="height: 48px; width: 48px; object-fit: cover;">

                                    <div>
                                        <b class="mb-0">Alfian Kopling</b>
                                        <p class="text-muted mb-0" style="font-size: 14px;">XI RPL 1</p>
                                    </div>
                                </div>
                            </td>

                            <td class="px-3">{{ $i }}@gmail.com</td>
                            <td class="px-3">0987654321</td>
                            <td class="text-truncate px-3" style="max-width: 200px;">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </td>
                        </tr>
                    @endfor
                </tbody>
            </table>
            <div class="d-flex justify-content-end">
                <nav class="pagination__wrap mt-40">
                    <ul class="list-wrap">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="shop.html">2</a></li>
                        <li><a href="shop.html">3</a></li>
                        <li><a href="shop.html">4</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
