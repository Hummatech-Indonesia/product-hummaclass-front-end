<div class="card border">
    <div class="card-body p-3">
        <h5 class="fw-semibold mb-2"><b>Daftar Kelas</b></h5>
        <p>Daftar kelas industri pada sekolah</p>

        <form>
            <input type="search" class="form-control rounded-3 mb-3" name="name" id="search-class" placeholder="Cari Kelas...">
    
            <div class="mb-3">
                <h6 class="fw-semibold mb-2 text-muted"><b>Filter Kelas</b></h6>
                <div class="form-check mb-2">
                    <input class="form-check-input filter-class" type="checkbox" id="checkbox1" value="10">
                    <label class="form-check-label" for="checkbox1">Kelas 10</label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input filter-class" type="checkbox" id="checkbox2" value="11">
                    <label class="form-check-label" for="checkbox2">Kelas 11</label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input filter-class" type="checkbox" id="checkbox3" value="12">
                    <label class="form-check-label" for="checkbox3">Kelas 12</label>
                </div>
            </div>
    
            <button class="btn rounded-3 waves-effect waves-light btn-outline-warning w-100" type="submit">
                Terapkan
            </button>
        </form>

        <div class="row mt-3">
            <div class="col-md-12">
                <ul class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical" id="classroom-list"></ul>
            </div>
        </div>
    </div>
</div>