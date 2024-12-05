<!-- Modal -->
<div class="modal fade" id="create-learning-path-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="" id="create-learning-path-form">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambahkan kursus</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" name="search" id="search" class="form-control mb-3"
                        style="max-width: 250px;" placeholder="Cari..">
                    <div id="course-list">
                        <div class="card input-group">
                            <div class="card-body align-items-center">
                                <!-- Tambahkan input checkbox -->
                                <label class="d-block" style="cursor: pointer;">
                                    <input type="checkbox" name="selected_courses[]" value="course_id_1"
                                        class="form-check-input me-2">
                                    <div class="row mt-2">
                                        <div class="col-5">
                                            <img src="{{ asset('assets/img/courses/course_thumb01.jpg') }}"
                                                alt="kursus.jpg" class="img-fluid rounded">
                                        </div>
                                        <div class="col-7">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="p-1 rounded text-center"
                                                    style="background: #F6EEFE;color:#9425FE;">
                                                    <span>Development</span>
                                                </div>
                                                <div class="text-center">
                                                    <img src="{{ asset('admin/dist/images/profile/user-1.jpg') }}"
                                                        alt="user.jpg" class="rounded-circle"
                                                        style="height: 24px;width:24px;">
                                                    <span class="text-muted"> David Millar</span>
                                                </div>
                                            </div>
                                            <h4><b>Learning Javascript with Imagination</b></h4>
                                            <p class="text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing
                                                elit.
                                                Amet,
                                                facere
                                                corporis, ullam voluptatibus hic beatae ducimus aspernatur debitis nihil
                                                autem
                                                placeat?
                                                Deserunt saepe, optio enim corporis beatae nesciunt commodi nihil!</p>
                                            <h4 style="color: #9425FE;"><b>Rp. 300.000</b> / <span
                                                    class="fs-2 text-dark"><i class="fa fa-star fa-md text-warning"></i>
                                                    (4,5
                                                    Reviews)</span></h4>
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="p-2 rounded" style="background: #FEF5EE;">
                                                    <div class="d-flex gap-2"><i style="color: #FFB649;"
                                                            class="fa fa-book fa-md"></i>
                                                        <b>8 Modul</b>
                                                    </div>
                                                </div>
                                                <div class="p-2 rounded" style="background: #FEF5EE;">
                                                    <div class="d-flex gap-2"><i style="color: #FFB649;"
                                                            class="fa fa-folder fa-md"></i>
                                                        <b>1 Tugas Akhir</b>
                                                    </div>
                                                </div>
                                            </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Konfirmasi</button>
    </div>
    </form>
</div>
</div>
</div>
