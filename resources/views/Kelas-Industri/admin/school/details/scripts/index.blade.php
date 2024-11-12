<script>
    function handleTabDisplay(hash) {
        $('.addClassroom').addClass('d-none'); // Sembunyikan tombol secara default

        if (hash === "#classrooms") {
            $('.addClassroom').removeClass('d-none'); // Tampilkan tombol di tab Kelas
        }
    }

    $(document).ready(function() {
        // Panggil fungsi saat halaman dimuat pertama kali
        handleTabDisplay(window.location.hash || "#classrooms");

        // Panggil fungsi setiap kali tab berubah
        $('a[data-bs-toggle="tab"]').on('shown.bs.tab', function (e) {
            const hash = $(e.target).attr('href');
            handleTabDisplay(hash);
        });
    });
</script>
