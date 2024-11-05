<script>
    $(document).ready(function() {
        var id = "{{ $id }}";

        $.ajax({
            type: "GET",
            url: "{{ config('app.api_url') }}" + "/api/events/" + id,
            headers: {
                Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
            },
            dataType: "json",
            success: function(response) {
                $('#detail-image').attr('src', response.data.image);
                // $('#currentBreadcrumb').html(response.data.title).attr('src', 'events/'.response.data.slug);
                $('.detail-title').html(response.data.title);

                $('.detail-capacity').html(response.data.capacity);
                $('.detail-is-online').html(response.data.is_online === 1 ? 'Online' : 'Offline');
                $('.detail-start-date').html(response.data.start_date);
                $('#detail-has-certificate').html(response.data.has_certificate === 1 ? 'Incluide' :
                    'Excluide');
                $('.detail-location').html(response.data.location);
                $('#detail-description').html(response.data.description);
                $('#detail-price').html(response.data.price);

                // event details
                $('#roundown-content').empty();

                if (response.data.event_details.length > 0) {
                    $.each(response.data.event_details, function(index, value) {
                        $('#roundown-content').append(cardRoundown(value));
                    });
                } else {
                    $('#roundown-content').append(emptyTable());
                }
               


                @if (session('hummaclass-token'))
                    $.ajax({
                        type: "POST",
                        url: "{{ config('app.api_url') }}/api/user-events-check",
                        headers: {
                            Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                        },
                        data: {
                            event_slug: response.data.slug
                        },
                        dataType: "json",
                        success: function(response) {
                            if (response.data.user_event) {
                                $('#enter-btn').text('Cetak Sertifikat');
                                $('#enter-btn').attr('href',
                                    "{{ route('print-certificate.index', ['type' => 'event', 'id' => ':slug']) }}"
                                    .replace(':slug', response.data.event.slug)
                                );
                            }
                        },
                        error: function(xhr) {
                            // Swal.fire({
                            //     title: "Terjadi Kesalahan!",
                            //     text: "Tidak dapat memuat data events.",
                            //     icon: "error"
                            // });
                        }
                    })
                @endif
            },
            error: function(xhr) {
                Swal.fire({
                    title: "Terjadi Kesalahan!",
                    text: "Tidak dapat memuat data events.",
                    icon: "error"
                });
            }
        });
    });


    function cardRoundown(value) {
        return `
            <tr>
                <td style="display: table-cell;">${value.start} - ${value.end}</td>
                <td class="text-start" style="display: table-cell;">${value.session}</td>
                <td class="text-start" style="display: table-cell;">
                    <div class="ms-3">
                        <h6 class=" fw-semibold mb-0">${value.user}</h6>
                    </div>
                </td>
            </tr>
        `;
    }
</script>
