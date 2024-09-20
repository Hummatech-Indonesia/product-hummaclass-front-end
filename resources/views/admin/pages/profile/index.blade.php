@extends('admin.layouts.app')

@section('content')
    <div class="card overflow-hidden" style="border-radius: 15px;">
        <div class="card-body p-0">
            <div class="d-flex align-items-center p-4 rounded-2 border-4 border-white"
                style="background-color: var(--purple-primary);border-radius: 15px;">
                <img src="{{ asset('admin/dist/images/profile/user-1.jpg') }}"
                    class="rounded-circle border border-3 border-white" width="100px" height="100px">
                <div class="ms-3">
                    <h4 class="fs-6 text-white fw-semibold mb-2" id="userName">Mohammad Arif</h4>
                    <span class="fw-normal text-white" id="userEmail">arif@gmail.com</span>
                </div>
            </div>

            <ul class="nav nav-pills user-profile-tab mt-2 ms-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button
                        class="nav-link position-relative rounded-0 active d-flex align-items-center justify-content-center bg-transparent fs-3 py-6"
                        id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button"
                        role="tab" aria-controls="pills-profile" aria-selected="true">
                        <i class="ti ti-user me-2 fs-6"></i>
                        <span class="d-none d-md-block">Profil</span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button
                        class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6"
                        id="pills-reset-tab" data-bs-toggle="pill" data-bs-target="#pills-reset" type="button"
                        role="tab" aria-controls="pills-reset" aria-selected="false" tabindex="-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="M5.25 10.055V8a6.75 6.75 0 0 1 13.5 0v2.055c1.115.083 1.84.293 2.371.824C22 11.757 22 13.172 22 16s0 4.243-.879 5.121C20.243 22 18.828 22 16 22H8c-2.828 0-4.243 0-5.121-.879C2 20.243 2 18.828 2 16s0-4.243.879-5.121c.53-.531 1.256-.741 2.371-.824M6.75 8a5.25 5.25 0 0 1 10.5 0v2.004Q16.676 9.999 16 10H8q-.677-.001-1.25.004zM8 17a1 1 0 1 0 0-2a1 1 0 0 0 0 2m4 0a1 1 0 1 0 0-2a1 1 0 0 0 0 2m5-1a1 1 0 1 1-2 0a1 1 0 0 1 2 0" clip-rule="evenodd"/></svg>
                        <span class="d-none d-md-block ms-3">Reset Password</span>
                    </button>
                </li>
            </ul>
        </div>
    </div>

    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade active show" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
            tabindex="0">
            @include('admin.pages.profile.panes.tab-profile')
        </div>
        <div class="tab-pane fade" id="pills-reset" role="tabpanel" aria-labelledby="pills-reset-tab" tabindex="0">
            @include('admin.pages.profile.panes.tab-reset')
        </div>
    </div>
@endsection

@section('script')

<script>
    document.getElementById('edit-profile-btn').addEventListener('click', function () {
        document.getElementById('view-profile').style.display = 'none';
        document.getElementById('edit-profile').style.display = 'block';
    });

    document.getElementById('cancel-edit-btn').addEventListener('click', function () {
        document.getElementById('edit-profile').style.display = 'none';
        document.getElementById('view-profile').style.display = 'block';
    });
</script>

<script>
    document.getElementById('edit-reset-btn').addEventListener('click', function () {
        document.getElementById('view-reset').style.display = 'none';
        document.getElementById('edit-reset').style.display = 'block';
    });

    document.getElementById('cancel-reset-btn').addEventListener('click', function () {
        document.getElementById('edit-reset').style.display = 'none';
        document.getElementById('view-reset').style.display = 'block';
    });
</script>

@endsection