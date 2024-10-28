<script>
   
    let course;
    $(document).ready(function() {

        
        function handleTabDisplay(hash) {
            if (hash === "#home") {
                $('.addModul').addClass('d-none');
                $('.editDescription').removeClass('d-none');
                $('.editWeinght').addClass('d-none');
                $('.edittask').addClass('d-none');
                $('.addVoucher').addClass('d-none');
            } else if (hash === "#list") {
                $('.editDescription').addClass('d-none');
                $('.addModul').removeClass('d-none');
                $('.editWeinght').addClass('d-none');
                $('.edittask').addClass('d-none');
                $('.addVoucher').addClass('d-none');
            } else if (hash === "#test") {
                $('.editDescription').addClass('d-none');
                $('.addModul').addClass('d-none');
                $('.editWeinght').removeClass('d-none');
                $('.edittask').addClass('d-none');
                $('.addVoucher').addClass('d-none');
            } else if (hash === "#task") {
                $('.editDescription').addClass('d-none');
                $('.addModul').addClass('d-none');
                $('.editWeinght').addClass('d-none');
                $('.edittask').removeClass('d-none');
                $('.addVoucher').addClass('d-none');
            } else if (hash === "#voucher") {
                $('.editDescription').addClass('d-none');
                $('.addModul').addClass('d-none');
                $('.editWeinght').addClass('d-none');
                $('.edittask').addClass('d-none');
                $('.addVoucher').removeClass('d-none');
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

<script>
    function copyToClipboard() {
        // Dapatkan elemen dengan ID kode dan ambil teksnya
        const textToCopy = document.getElementById("kode").innerText;

        // Salin teks ke clipboard menggunakan Clipboard API
        navigator.clipboard.writeText(textToCopy).then(function() {
            // Tampilkan SweetAlert setelah berhasil menyalin
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: 'Teks berhasil disalin ke clipboard!',
                showConfirmButton: false,
                timer: 1500
            });
        }, function(err) {
            // Jika ada kesalahan saat menyalin, tampilkan SweetAlert error
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: 'Gagal menyalin teks: ' + err,
            });
        });
    }
</script>
