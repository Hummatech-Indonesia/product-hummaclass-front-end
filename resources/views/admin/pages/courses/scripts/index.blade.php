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

    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Mendapatkan tab yang disimpan di localStorage, atau gunakan tab default jika tidak ada
        const activeTab = localStorage.getItem("activeTab") || "#home";

        // Aktifkan tab yang disimpan
        const tabElement = document.querySelector(`a[href="${activeTab}"]`);
        if (tabElement) {
            new bootstrap.Tab(tabElement).show();
        }

        // Simpan tab yang diklik ke localStorage
        const tabs = document.querySelectorAll('.nav-link[data-bs-toggle="tab"]');
        tabs.forEach(tab => {
            tab.addEventListener("shown.bs.tab", function (event) {
                const selectedTab = event.target.getAttribute("href");
                localStorage.setItem("activeTab", selectedTab);
            });
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
