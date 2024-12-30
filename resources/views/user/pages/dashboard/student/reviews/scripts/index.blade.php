<script>
    $(document).ready(function() {
        $.ajax({
            type: "GET",
            url: "{{ config('app.api_url') }}" + "/api/users/{{ session('user')['id'] }}",
            headers: {
                Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
            },
            dataType: "json",
            success: function(response) {
                if (response.data.course_reviews.length > 0) {
                    $.each(response.data.course_reviews, function(index, value) {
                        $('#reviews-user').append(reviewUser(index, value));
                    });
                } else {
                    $('#reviews-user').append(emptyTable());
                }
            },
            error: function(xhr) {
                Swal.fire({
                    title: "Terjadi Kesalahan!",
                    text: "Tidak dapat memuat data review user.",
                    icon: "error"
                });
            }
        });
    });

    function reviewUser(index, value) {
        console.log(value.rating);
        
        let rating = value.rating; 
        let ratingHtml = '';
        for (let i = 1; i <= rating; i++) {
            ratingHtml += `
                <svg class="text-warning" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path fill="currentColor" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"/>
                </svg>
            `;
        }

        for (let i = rating + 1; i <= 5; i++) {
            ratingHtml += `
                <svg class="text-muted" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path fill="currentColor" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"/>
                </svg>
            `;
        }
   
        return `
            <tr>
                <td class="text-start" style="display: table-cell;">${value.course_title}</td>
                <td class="text-start" style="display: table-cell;">
                    <div class="ms-3">
                        <div class="d-flex">
                            ${ratingHtml}
                        </div>
                        <span class="fw-normal">${value.review}</span>
                    </div>
                </td>
            </tr>
        `;
    }
</script>
