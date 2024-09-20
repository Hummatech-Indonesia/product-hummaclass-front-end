<iframe style="width:100%; height: 400px;border-radius: 15px;"
    src="https://www.youtube.com/embed/qgKqv2Q3sNQ?si=Xl0nuSUFNCC94U9U" title="YouTube video player" frameborder="0"
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
<div class="card mt-4">
    <div class="card-header">
        <h1 class="fw-bolder mt-3">Streaming video way before it was cool, go dark tomorrow</h1>
    </div>
    <hr>
    <div class="card-body">
        <div class="card-title">
            <h2 class="fw-bold">Title of the paragraph</h2>
            <p>But you cannot figure out what it is or what it can do. MTA web directory is the simplest way in which
                one can bid on a link, or a few links if they wish to do so. The link
                directory on MTA displays all of the links it currently has, and does so in alphabetical order, which
                makes it much easier for someone to find what they are looking for if it is
                something specific and they do not want to go through all the other sites and links as well. It allows
                you to start your bid at the bottom and slowly work your way to the top
                of the list.
            </p>
            <p>
                Gigure out what it is or what it can do. MTA web directory is the simplest way in which one can bid on a
                link, or a few links if they wish to do so. The link directory on MTA
                displays all of the links it currently has, and does so in alphabetical order, which makes it much
                easier for someone to find what they are looking for if it is something
                specific and they do not want to go through all the other sites and links as well. It allows you to
                start your bid at the bottom and slowly work your way to the top of the
            </p>

            <div class="mt-4">
                <h4 class="fw-bold">Unorder List</h4>
                <ul class="ms-5 mt-3" style="list-style-type:disc;">
                    <li>Gigure out what it is or</li>
                    <li>The links it currently</li>
                    <li>It allows you to start your bid</li>
                    <li>Gigure out what it is or</li>
                    <li>It allows you to start your bid</li>
                </ul>
            </div>

            <div class="pt-2 pb-2">
                <hr>
            </div>

            <div class="mt-4">
                <h4 class="fw-bold">Order List</h4>
                <ul class="ms-5 mt-3">
                    <li>Gigure out what it is or</li>
                    <li>The links it currently</li>
                    <li>It allows you to start your bid</li>
                    <li>Gigure out what it is or</li>
                    <li>It allows you to start your bid</li>
                </ul>
            </div>
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
                    // if (response.data.length === 0) {
                    //     $('#cardBody').append(empty());
                    // } else {
                    //     $.each(response.data, function(index, value) {
                    //         $('#cardBody').append(card(index, value));
                    //     });
                    // }

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
