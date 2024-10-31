<script>
    $(document).ready(function() {
        function handleTabDisplay(hash) {
            // Reset semua elemen tombol
            $('.editDescription, .addModul, .editWeinght, .edittask, .addVoucher').addClass('d-none');

            // Tampilkan elemen tombol sesuai hash
            switch (hash) {
                case "#home":
                    $('.editDescription').removeClass('d-none');
                    break;
                case "#list":
                    $('.addModul').removeClass('d-none');
                    break;
                case "#test":
                    $('.editWeinght').removeClass('d-none');
                    break;
                case "#task":
                    $('.edittask').removeClass('d-none');
                    break;
                case "#voucher":
                    $('.addVoucher').removeClass('d-none');
                    break;
            }
        }

        function activateTabFromLocalStorage() {
            const activeTab = localStorage.getItem("activeTab") || "#home";
            const tabElement = document.querySelector(`a[href="${activeTab}"]`);
            if (tabElement) new bootstrap.Tab(tabElement).show();
            handleTabDisplay(activeTab);
        }

        // Jalankan saat halaman dimuat
        activateTabFromLocalStorage();

        // Simpan tab yang diklik ke localStorage dan jalankan handleTabDisplay
        $('.nav-link[data-bs-toggle="tab"]').on("shown.bs.tab", function(event) {
            const selectedTab = event.target.getAttribute("href");
            localStorage.setItem("activeTab", selectedTab);
            handleTabDisplay(selectedTab);
        });

        // Tangani hashchange
        $(window).on("hashchange", function() {
            handleTabDisplay(location.hash);
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Inisialisasi editor Summernote
        $('#summernote-materi, #question, #summernote-task').summernote({
            height: 200
        });

        // Event untuk membuka dan membatalkan edit task
        document.getElementById('edit-task-btn')?.addEventListener('click', function() {
            document.getElementById('view-detail').style.display = 'none';
            document.getElementById('edit-task').style.display = 'block';
        });

        document.getElementById('cancel-edit-btn')?.addEventListener('click', function() {
            document.getElementById('edit-task').style.display = 'none';
            document.getElementById('view-detail').style.display = 'block';
        });
    });
</script>

<script>
    function copyToClipboard() {
        // Salin teks ke clipboard
        const textToCopy = document.getElementById("kode")?.innerText;
        navigator.clipboard.writeText(textToCopy).then(function() {
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: 'Teks berhasil disalin ke clipboard!',
                showConfirmButton: false,
                timer: 1500
            });
        }).catch(function(err) {
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: 'Gagal menyalin teks: ' + err,
            });
        });
    }
</script>
