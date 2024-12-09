<script>

    $(document).ready(function () {
        let debounceTimer;
    
        $('#search').keyup(function() {
            clearTimeout(debounceTimer);
            debounceTimer = setTimeout(function() {
                getJournalTeacher(1);
            }, 500);
        });

        function notData(){
            return `
                <tr>
                    <td colspan="7" class="text-center">
                        <p class="mb-0 fw-normal">Tidak ada jurnal yang tersedia.</p>
                    </td>
                </tr>
            `
        }
    
        function journalList(index, value) {
            return `
                <tr>
                    <td>
                        <p class="mb-0 fw-normal">1</p>
                    </td>
                    <td>
                        <h6 class="fw-normal mb-0">${value.title}</h6>
                    </td>
                    <td class="text-center">
                        <img src="${value.image}" alt="No Image"
                            style="width: 100px; height: 100px; object-fit: cover;">
                    </td>
                    <td>
                        <p class="mb-0 fw-normal">${value.date}</p>
                    </td>
                    <td>
                        <p class="mb-0 fw-normal">${value.classroom.name}</p>
                    </td>
                    <td>
                        <p class="mb-0 fw-normal">${value.description}</p>
                    </td>
                    <td class="text-center">
                        <a href="/dashboard/teacher/journal-detail/${value.id}"
                            class="btn mb-1 waves-effect waves-light btn-primary p-1 rounded-2 me-2"
                            type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M12 9.005a4 4 0 1 1 0 8a4 4 0 0 1 0-8m0 1.5a2.5 2.5 0 1 0 0 5a2.5 2.5 0 0 0 0-5M12 5.5c4.613 0 8.596 3.15 9.701 7.564a.75.75 0 1 1-1.455.365a8.504 8.504 0 0 0-16.493.004a.75.75 0 0 1-1.456-.363A10 10 0 0 1 12 5.5" />
                            </svg>
                        </a>
                    </td>
                </tr>
            `
        }
    
        function getJournalTeacher(page) {
            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}/api/journals",
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}",
                },
                data: {
                    search:$('#search').val(),
                },
                dataType: "json",
                success: function (response) {
                    $('#journal-list').empty();
                    if (response.data.length === 0) {
                        $('#journal-list').append(notData());
                    } else {
                        $.each(response.data, function (indexInArray, valueOfElement) { 
                            $('#journal-list').append(journalList(indexInArray, valueOfElement));
                        });
                    }
                },
                error: function(xhr) {
                    Swal.fire({
                        title: "Terjadi Kesalahan!",
                        text: xhr.responseJSON.meta.message,
                        icon: "error"
                    });
                }
            });
        }
    
        getJournalTeacher(1);
    });

</script>