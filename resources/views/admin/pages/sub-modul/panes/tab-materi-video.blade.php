<iframe style="width:100%; height: 400px;border-radius: 15px;" id="url_youtube" src="" title="YouTube video player"
    frameborder="0"
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
<div class="card mt-4">
    <div class="card-header">
        <h1 class="fw-bolder mt-3" id="title"></h1>
    </div>
    <hr>
    <div class="card-body">
        <div class="card-title">
            <p id="content">
            </p>
        </div>
    </div>
</div>
@push('script')
    <script>
        $(document).ready(function() {
            var id = "{{ $id }}";

            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}" + "/api/sub-modules/detail/" + id,
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                success: function(response) {
                    $('#title').html(response.data.title);

                    // Parse konten dari Editor.js
                    var contentData = JSON.parse(response.data.content);
                    var contentHtml = '';

                    // Render setiap blok
                    contentData.blocks.forEach(function(block) {
                        if (block.type === 'image') {
                            contentHtml +=
                                `<img src="${block.data.file.url}" alt="${block.data.caption}" style="width: 100%; border-radius: 15px;">`;
                        }
                        // Tambahkan blok lainnya sesuai dengan tipe
                        // Misalnya, untuk teks
                        if (block.type === 'paragraph') {
                            contentHtml += `<p>${block.data.text}</p>`;
                        }
                    });

                    $('#content').html(contentHtml);

                    var url = "{{ route('admin.modules.show', ':id') }}".replace(':id', response.data
                        .module_id);
                    $('#button-back').attr('href', url);


                },
                error: function(xhr) {
                    Swal.fire({
                        title: "Terjadi Kesalahan!",
                        text: "Tidak dapat memuat data kategori.",
                        icon: "error"
                    });
                }
            });
        });
    </script>
@endpush
