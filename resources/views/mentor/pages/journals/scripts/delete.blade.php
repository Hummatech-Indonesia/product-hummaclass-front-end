<script>
    // $(document).on('click', '.btn-delete', function() {
    //     var id = $(this).data('id');
    //     $('#modal-delete').modal('show');
    //     $('#deleteForm').submit(function(e) {
    //         e.preventDefault();
    //         $.ajax({
    //             type: "DELETE",
    //             url: "{{ config('app.api_url') }}/api/journals/" + id,
    //             dataType: "json",
    //             success: function(response) {
    //                 Swal.fire({
    //                     title: "Terjadi Kesalahan!",
    //                     text: "berhasil menghapus data",
    //                     icon: "error"
    //                 })
    //                 // .then({
    //                 //     // get(1)
    //                 //     $('#modal-delete').modal('hide');
    //                 // });
    //             },
    //             error: function(xhr) {
    //                 Swal.fire({
    //                     title: "Terjadi Kesalahan!",
    //                     text: 'Gagal menghapus data',
    //                     icon: "error"
    //                 });
    //             }
    //         });
    //     });
    // })

    // $(document).on('click', '.btn-delete', function() {
    //     var id = $(this).data('id');
    //     var url = "{{ config('app.api_url') }}" + "/api/journals/" + id;
    //     $('.deleteConfirmation').data('url', url);
    //     $('#modal-delete').modal('show');
    // });

    // $(document).on('click', '.deleteConfirmation', function(e) {
    //     e.preventDefault();
    //     var url = $(this).data('url');
    //     $.ajax({
    //         type: "DELETE",
    //         url: url,
    //         headers: {
    //             'Authorization': 'Bearer {{ session('hummaclass-token') }}'
    //         },
    //         success: function(response) {
    //             $('#modal-delete').modal('hide');
    //             Swal.fire({
    //                 title: "Sukses",
    //                 text: "Berhasil menghapus data.",
    //                 icon: "success"
    //             }).then(() => {
    //                 fetchNewData();
    //             });
    //         },
    //         error: function(response) {
    //             $('#modal-delete').modal('hide');

    //             if (response.status == 400) {
    //                 Swal.fire({
    //                     title: "Terjadi Kesalahan!",
    //                     text: response.responseJSON.meta.message,
    //                     icon: "error"
    //                 });
    //             } else {
    //                 Swal.fire({
    //                     title: "Terjadi Kesalahan!",
    //                     text: "Ada kesalahan saat menghapus data.",
    //                     icon: "error"
    //                 });
    //             }
    //         }
    //     });
    // });
</script>