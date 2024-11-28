<div class="alert alert-warning">
    <i class="fas fa-warning"></i> Informasi
    <ul class="list-unstyled ps-3">
        <li>Kamu harus mengerjakan test terlebih dahulu sebelum membuka materi untuk pertama kali.</li>
        <li>Selesaikan materi sebelumnya untuk membuka materi yang dipilih.</li>
        <li>Selesaikan semua tugas dari materi sebelumnya agar dapat membuka materi selanjutnya.</li>
    </ul>
</div>

<div class="col-6 my-3">
    <input type="text" name="search" id="search" class="form-control" placeholder="Cari...">
</div>

<div class="row">
    @for ($i = 1; $i <= 12; $i++)
        <div class="col-12 col-md-4 mt-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <i class="fa fa-book me-3" style="font-size: 32px;"></i>
                        <div>
                            <h5>Java Fundamental Programming</h5>
                            <p class="text-muted">Kelas 10</p>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, ipsum architecto natus ab suscipit,
                        sapiente quidem itaque...</p>
                    <div class="d-flex justify-content-between mt-3">
                        <div style="border: 1px;border-radius:5%;color:blueviolet;">
                            <p>12 Bab</p>
                        </div>
                        <div class="btn btn-primary">Detail</div>
                    </div>
                </div>
            </div>
        </div>
    @endfor
</div>
