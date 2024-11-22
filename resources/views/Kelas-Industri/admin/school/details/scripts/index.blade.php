<script>
    function handleTabDisplay(hash) {
        $('.addClassroom, .addTeacher, .addStudent').addClass('d-none');

        if (hash === "#classrooms") {
            $('.addClassroom').removeClass('d-none');
        } else if (hash === "#teachers") {
            $('.addTeacher').removeClass('d-none');
        } else if (hash === "#students") {
            $('.addStudent').removeClass('d-none');
        } else {
            $('.addClassroom').removeClass('d-none');
        }
    }

    $(document).ready(function () {
        const defaultHash = "#classrooms";
        const initialHash = window.location.hash || defaultHash;
        handleTabDisplay(initialHash);

        $('a[data-bs-toggle="tab"]').on('shown.bs.tab', function (e) {
            const hash = $(e.target).attr('href');
            handleTabDisplay(hash);
        });

        $('a[data-bs-toggle="tab"]').on('click', function (e) {
            const newHash = $(this).attr('href');
            history.replaceState(null, null, newHash);
        });
    });
</script>
