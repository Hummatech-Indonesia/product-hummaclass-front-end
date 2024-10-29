<script>
    let debounceTimer;
    $('#search-name').keyup(function() {
        clearTimeout(debounceTimer);
        debounceTimer = setTimeout(function() {
            get(1)
        }, 500);
    });

    function get(page) {
        $('#test-content').empty();
        $.ajax({
            type: "GET"
            , url: "{{ config('app.api_url') }}" + "/api/user-course-tests"
            , headers: {
                Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
            }
            , dataType: "json"
            , data: {
                name: $('#search-name').val()
            , }
            , success: function(response) {

                $('#test-content').empty();

                if (response.data.length > 0) {
                    $.each(response.data, function(index, value) {
                        $('#test-content').append(testContent(index, value));
                    });
                    $('#pagination').html(handlePaginate(response.data.paginate))

                } else {
                    $('#test-content').append(empty());
                }


            }
            , error: function(xhr) {
                Swal.fire({
                    title: "Terjadi Kesalahan!"
                    , text: "Tidak dapat memuat data kategori."
                    , icon: "error"
                });
            }
        });
    }

    function testContent(index, value) {
        console.log(value);
        let testType = value.test_type;
        let score = value.score;

        let scoreColumn1 = '';
        let scoreColumn2 = '';

        if (testType === 'pre-test') {
            scoreColumn1 = `
            <span class="badge text-primary fs-2 fw-semibold px-4 py-2" style="background-color: #F6EEFE">${score}</span>
        `;
            scoreColumn2 = `
            <span class="badge bg-light-danger text-danger fs-2 fw-semibold px-4 py-2">-</span>
        `;
        } else if (testType === 'post-test') {
            scoreColumn1 = `
            <span class="badge bg-light-danger text-danger fs-2 fw-semibold px-4 py-2">-</span>
        `;
            scoreColumn2 = `
            <span class="badge text-primary fs-2 fw-semibold px-4 py-2" style="background-color: #F6EEFE">${score}</span>
        `;
        }

        return `
            <tr>
                <td>${index +1}</td>
                <td>${value.user_name}</td>
                <td class="score-column-1-${index}">
                    ${scoreColumn1}
                </td>
                <td class="score-column-2-${index}">
                    ${scoreColumn2}
                </td>
                <td>
                    <a href="{{ route('admin.courses.test.index', '') }}/${value.id}" class="btn text-white" style="background-color: #9425FE">Detail</a>
                </td>
            </tr>
        `;
    }

    get(1);

</script>
