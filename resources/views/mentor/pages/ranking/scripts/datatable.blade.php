<script>
    const data = [{
        name: "arif",
        school: {
            name: "XII RPL 1 - SMKN 1 Kepanjen"
        },
        point: "113",
    }]
    $.each(data, function(index, value) {
        $('#tableBody').append(studentClassroom(index,
            value));
    });

    function studentClassroom(index, value) {
        return `
            <tr class="fw-semibold">
                <td>
                    <div class="d-flex align-items-center">
                        <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">${index + 1}</h6>
                        </div>
                    </div>
                </td>
                <td>${value.name}</td>
                <td>${value.school.name}</td>
                <td>${value.point}</td>
            </tr>
        `
    }
</script>