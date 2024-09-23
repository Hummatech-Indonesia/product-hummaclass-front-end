<script>
    // $(document).ready(function() {

    //     $(document).on('click', '.home', function() {
    //         $('.addModul').addClass('d-none');
    //         $('.editDescription').removeClass('d-none');
    //         $('.editWeinght').addClass('d-none');
    //         $('.edittask').addClass('d-none');
    //     });

    //     $(document).on('click', '.list', function() {
    //         $('.editDescription').addClass('d-none');
    //         $('.addModul').removeClass('d-none');
    //         $('.editWeinght').addClass('d-none');
    //         $('.edittask').addClass('d-none');
    //     });

    //     $(document).on('click', '.test', function() {
    //         $('.editDescription').addClass('d-none');
    //         $('.addModul').addClass('d-none');
    //         $('.editWeinght').removeClass('d-none');
    //         $('.edittask').addClass('d-none');
    //     });

    //     $(document).on('click', '.post', function() {
    //         $('.editDescription').addClass('d-none');
    //         $('.addModul').addClass('d-none');
    //         $('.editWeinght').removeClass('d-none');
    //         $('.edittask').addClass('d-none');
    //     });

    //     $(document).on('click', '.task', function() {
    //         $('.editDescription').addClass('d-none');
    //         $('.addModul').addClass('d-none');
    //         $('.editWeinght').addClass('d-none');
    //         $('.edittask').removeClass('d-none');
    //     });

    // });
    $(document).ready(function() {

        function handleTabDisplay(hash) {
            if (hash === "#home") {
                $('.addModul').addClass('d-none');
                $('.editDescription').removeClass('d-none');
                $('.editWeinght').addClass('d-none');
                $('.edittask').addClass('d-none');
            } else if (hash === "#list") {
                $('.editDescription').addClass('d-none');
                $('.addModul').removeClass('d-none');
                $('.editWeinght').addClass('d-none');
                $('.edittask').addClass('d-none');
            } else if (hash === "#test") {
                $('.editDescription').addClass('d-none');
                $('.addModul').addClass('d-none');
                $('.editWeinght').removeClass('d-none');
                $('.edittask').addClass('d-none');
            } else if (hash === "#task") {
                $('.editDescription').addClass('d-none');
                $('.addModul').addClass('d-none');
                $('.editWeinght').addClass('d-none');
                $('.edittask').removeClass('d-none');
            }
        }

        // Saat halaman dimuat ulang, cek hash di URL untuk menentukan tab yang aktif
        let hash = window.location.hash;
        if (hash) {
            handleTabDisplay(hash);
        }

        // Tambahkan event listener untuk setiap tab agar mengubah hash di URL
        $(document).on('click', '.nav-link', function(e) {
            let targetTab = $(this).attr('href');
            handleTabDisplay(targetTab);

            // Ubah hash URL tanpa reload halaman
            history.pushState(null, null, targetTab);
        });

    });

</script>

<script>
    $(document).ready(function() {
        $('#summernote-materi').summernote({
            height: 200
        });
    });

    $(document).ready(function() {
        $('#question').summernote({
            height: 200
        });
    });

    $(document).ready(function() {
        $('#summernote-task').summernote({
            height: 200
        });
    });

</script>

<script>
    document.getElementById('edit-task-btn').addEventListener('click', function() {
        document.getElementById('view-detail').style.display = 'none';
        document.getElementById('edit-task').style.display = 'block';
    });

    document.getElementById('cancel-edit-btn').addEventListener('click', function() {
        document.getElementById('edit-task').style.display = 'none';
        document.getElementById('view-detail').style.display = 'block';
    });

</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        let activeTab = localStorage.getItem('activeTab');

        if (activeTab) {
            document.querySelectorAll('.nav-link').forEach(function(tab) {
                tab.classList.remove('active');
            });

            document.querySelectorAll('.tab-pane').forEach(function(pane) {
                pane.classList.remove('active', 'show');
            });

            let selectedTab = document.querySelector(`a[href="${activeTab}"]`);
            selectedTab.classList.add('active');
            document.querySelector(activeTab).classList.add('active', 'show');
        }

        document.querySelectorAll('.nav-link').forEach(function(tab) {
            tab.addEventListener('click', function() {
                let href = this.getAttribute('href');
                localStorage.setItem('activeTab', href);
            });
        });
    });

</script>
