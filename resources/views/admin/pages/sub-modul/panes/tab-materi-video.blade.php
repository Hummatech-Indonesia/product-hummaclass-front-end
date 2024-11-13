<div class="card mt-4">
    <div class="card-header">
        <h1 class="fw-bolder mt-3" id="title"></h1>
    </div>
    <hr>
    <div class="card-body">
        <div class="card-title">
            <span id="content">
            </span>
        </div>
    </div>
</div>
@push('script')
<script>
    $(document).ready(function() {
        var id = "{{ $id }}";

        $.ajax({
            type: "GET",
            url: "{{ config('app.api_url') }}" + "/api/sub-modules/detail/admin/" + id,
            headers: {
                Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
            },
            dataType: "json",
            success: function(response) {
                $('#title').html(response.data.title);

                // Menggunakan convertToHTML untuk merender konten dengan gaya
                const contentHTML = convertToHTML(JSON.parse(response.data.content));
                $('#content').html(contentHTML);

                var url = "{{ route('admin.modules.show', ':id') }}".replace(':id', response.data.module_id);
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

    function convertToHTML(data) {
        let html = '';

        $.each(data.blocks, function(index, block) {
            switch (block.type) {
                case 'header':
                    html += `<h${block.data.level} style="color: #333; font-weight: bold; margin: 10px 0;">${block.data.text}</h${block.data.level}>\n`;
                    break;
                case 'list':
                    html += `<ul style="padding-left: 20px; list-style-type: disc;">\n`;
                    block.data.items.forEach(item => {
                        html += `<li style="color: #555; font-size: 15px; margin-bottom: 5px;">${item}</li>\n`;
                    });
                    html += `</ul>\n`;
                    break;
                case 'paragraph':
                    html += `<p style="color: #666; line-height: 1.6; font-size: 15px; margin: 10px 0;">${block.data.text}</p>`;
                    break;
                case 'image':
                    html += `<img src="${block.data.file.url}" alt="${block.data.caption}" style="width: 100%; border-radius: 15px; margin: 15px 0;">`;
                    break;
                default:
                    break;
            }
        });

        return html;
    }
</script>

@endpush
