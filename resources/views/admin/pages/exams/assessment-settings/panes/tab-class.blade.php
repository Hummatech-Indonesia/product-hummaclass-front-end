<div class="card">
    <div class="card-body">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 rounded-2 px-0" style="background-color: #ECECEC">
                <ul class="nav nav-pills nav-fill" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#navpill-111" role="tab">
                            <span>Divisi 1</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#navpill-222" role="tab">
                            <span>Divisi 2</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#navpill-333" role="tab">
                            <span>Divisi 3</span>
                        </a>
                    </li>
                </ul>
            </div>
        
            <div class="col-12 col-lg-6 text-lg-end mt-3 mt-lg-0">
                <a href="/admin/exams/assessment-settings-format" class="btn btn-warning px-3" id="add-notes">
                    <i class="ti ti-settings me-1 fs-4"></i>
                    <span class="font-weight-medium fs-3">Atur Format</span>
                </a>
            </div>
        </div>
        
        

        <div class="col-12">
            <div class="tab-content mt-4">
                <div class="tab-pane fade show active" id="navpill-111" role="tabpanel">
                    @include('admin.pages.exams.assessment-settings.panes.tab-divisions')
                </div>
                <div class="tab-pane fade" id="navpill-222" role="tabpanel">
                    @include('admin.pages.exams.assessment-settings.panes.tab-divisions')
                </div>
                <div class="tab-pane fade" id="navpill-333" role="tabpanel">
                    @include('admin.pages.exams.assessment-settings.panes.tab-divisions')
                </div>
            </div>
        </div>

    </div>
</div>
