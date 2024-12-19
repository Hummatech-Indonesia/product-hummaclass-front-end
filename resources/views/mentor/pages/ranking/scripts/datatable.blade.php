<script>
    let loading = true;
    let debounceTimer;

    $('#search-name').keyup(function() {
        clearTimeout(debounceTimer);
        debounceTimer = setTimeout(function() {
            get(1);
        }, 500);
    });

    $('#search-school').keyup(function() {
        clearTimeout(debounceTimer);
        debounceTimer = setTimeout(function() {
            get(1);
        }, 500);
    });

    $('#search-classroom').keyup(function() {
        clearTimeout(debounceTimer);
        debounceTimer = setTimeout(function() {
            get(1);
        }, 500);
    });

    function studentClassroom(index, value) {
        return `
                <tr class="fw-semibold">
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="ms-3">
                                <h6 class="fs-4 fw-semibold mb-0">${value.rank}</h6>
                            </div>
                        </div>
                    </td>
                    <td>${value.name}</td>
                    <td>${value.school.name}</td>
                    <td>${value.point}</td>
                </tr>
            `
    }

    function get(page) {
        $.ajax({
            type: "GET",
            url: "{{ config('app.api_url') }}/api/mentor/student/list?page=" + page,
            headers: {
                Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}",
            },
            data: {
                name: $('#search-name').val(),
                school_id: $('#search-school').val(),
                classroom_id: $('#search-classroom').val()
            },
            dataType: "json",
            success: function(response) {
                $('#tableBody').empty();

                if (response.data.data.length > 0) {
                    $.each(response.data.data, function(indexInArray, valueOfElement) {
                        $('#tableBody').append(studentClassroom(indexInArray,
                            valueOfElement));
                    });
                    $('#pagination').html(handlePaginate(response.data.paginate));
                } else {
                    $('#tableBody').append(empty());
                }

                loading = false;
            },
            error: function(xhr) {
                Swal.fire({
                    title: "Terjadi Kesalahan!",
                    text: xhr.responseJSON.meta.message,
                    icon: "error"
                });

                loading = false;
            }
        });
    }

    get(1);

    if (loading) {
        $('#tableBody').append(load(4));
    }

    $.ajax({
        type: "GET",
        url: "{{ config('app.api_url') }}/api/schools-all",
        headers: {
            Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}",
        },
        dataType: "json",
        success: function(response) {
            $('#search-school').empty();
            $('#search-school').append(`<option value="">Pilih Sekolah</option>`);
            $.each(response.data, function(index, value) {
                $('#search-school').append(
                    `<option value="${value.id}">${value.name}</option>`);
            });
        }
    });

    function load(amount) {
        let card = '';

        for (let i = 0; i <= amount; i++) {
            card += `
                <tr class="fw-semibold placeholder-glow">
                    <td><p class="placeholder col-4"></p></td>
                    <td><p class="placeholder col-5"></p></td>
                    <td><p class="placeholder col-5"></p></td>
                    <td><p class="placeholder col-5"></p></td>
                </tr>
            `;
        }
        return card;
    }
</script>
