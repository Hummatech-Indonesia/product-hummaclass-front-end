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

                    $('#content').html(convertToHTML(JSON.parse(response.data.content)));

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

        function convertToHTML(data) {

            let html = '';

            $.each(data.blocks, function(index, block) {
                console.log(block);
                switch (block.type) {
                    case 'header':
                        html += `<h${block.data.level}>${block.data.text}</h${block.data.level}>\n`;
                        break;
                    case 'list':
                        html += `<ul>\n`;
                        block.data.items.forEach(item => {
                            html += `    <li>${item}</li>\n`;
                        });
                        html += `</ul>\n`;
                        break;
                    case 'paragraph':
                        html += block.data.text;
                        break;
                    case 'image':
                        html +=
                            `<img src="${block.data.file.url}" alt="${block.data.caption}" style="width: 100%; border-radius: 15px;">`;
                    default:
                        break;
                }
            });
            console.log(html);


            return html;
        }
    </script>
@endpush
