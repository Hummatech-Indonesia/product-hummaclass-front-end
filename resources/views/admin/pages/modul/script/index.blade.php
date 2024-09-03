<script>
    $(document).ready(function() {
        $('#module-add-modal').on('shown.bs.modal', function() {
            $('.select2-modul').select2({
                dropdownParent: $('#module-add-modal') 
            });
        });
    });

</script>
