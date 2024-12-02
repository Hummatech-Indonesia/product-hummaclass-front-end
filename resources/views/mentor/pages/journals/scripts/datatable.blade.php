<script>
    const data = [{
        name: "arif",
        title: "Jurnal 1",
        image: "https://hummatech.com/storage/service/pF4KmNe9YTmdxpEVbkvKnXcyVyDa02jWQSEujslr.jpg",
        date: "10 Januari 2023",
        school: {
            name: "XII RPL 1 - SMKN 1 Kepanjen"
        },
        description: "lorem ipsum dolor sit amet...",
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
                <td>${value.title}</td>
                <td><img src="${value.image}" width="100%"/></td>
                <td>${value.date}</td>
                <td>
                    <span>${value.school.name}</span>
                    </td>
                <td>   
                    <span>${value.description}</span>
                </td>
                <td>
                    <div class="d-flex gap-1">
                        <button class="btn btn-sm text-white btn-detail" style="background-color: #9425FE"
                            data-name="${value.name}"
                            data-title="${value.title}"
                            data-classroom="${value.school.name}"
                            data-date="${value.date}"
                            data-description="${value.description}"
                            data-image="${value.image}"
                            >
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2">
                                    <path d="M3 13c3.6-8 14.4-8 18 0" />
                                    <path d="M12 17a3 3 0 1 1 0-6a3 3 0 0 1 0 6" />
                                </g>
                            </svg>
                        </button>
                        <button class="btn btn-sm btn-danger text-white" data-bs-toggle="modal"
                            data-bs-target="#modal-delete">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 7l16 0" />
                                <path d="M10 11l0 6" />
                                <path d="M14 11l0 6" />
                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                            </svg>
                        </button>
                        <button class="btn btn-sm btn-warning text-white" data-bs-toggle="modal"
                            data-bs-target="#modal-update">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-pencil">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                                <path d="M13.5 6.5l4 4" />
                            </svg>
                        </button>
                    </div>
                </td>
            </tr>
        `
    }
</script>