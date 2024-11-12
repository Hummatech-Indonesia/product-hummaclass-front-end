<script>
    const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September",
        "October", "November", "December"
    ];

    let currentMonth = new Date().getMonth();
    let currentYear = new Date().getFullYear();

    let events = {}; // Awalnya kosong, akan diisi dengan data dari API

    get(); // Panggil fungsi get untuk mengambil data

    function get() {
        $.ajax({
            type: "GET",
            url: "{{ config('app.api_url') }}/api/events-user",
            headers: {
                'Authorization': `Bearer {{ session('hummaclass-token') }}`
            },
            dataType: "json",
            contentType: false,
            processData: false,
            success: function(response) {
                response.data.forEach(event => {
                    const dateKey = new Date(event.start_date).toLocaleDateString(
                        'en-CA');
                    const formattedDateKey = dateKey.split('-').reverse().join(
                        '-');


                    if (!events[formattedDateKey]) {
                        events[formattedDateKey] = [];
                    }


                    events[formattedDateKey].push({
                        slug: event.slug,
                        title: event.title,
                        desc: event.description,
                        time: event.start_date,
                        price: event.price
                    });
                });
                updateCalendar();
            },
            error: function(response) {
                Swal.fire({
                    title: "Terjadi Kesalahan!",
                    text: "Ada kesalahan saat menyimpan data.",
                    icon: "error"
                });
            }
        });
    }

    const calendarGrid = document.getElementById('calendarGrid');
    const eventList = document.getElementById('eventList');
    const monthSelect = document.getElementById('monthSelect');
    const yearSelect = document.getElementById('yearSelect');
    let selectedDate = null;

    monthNames.forEach((month, index) => {
        const option = document.createElement('option');
        option.value = index;
        option.textContent = month;
        if (index === currentMonth) option.selected = true;
        monthSelect.appendChild(option);
    });

    for (let year = 2020; year <= 2030; year++) {
        const option = document.createElement('option');
        option.value = year;
        option.textContent = year;
        if (year === currentYear) option.selected = true;
        yearSelect.appendChild(option);
    }

    function updateCalendar() {
        calendarGrid.innerHTML = '';
        const firstDay = new Date(currentYear, currentMonth, 1).getDay();
        const daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();

        for (let i = 0; i < firstDay; i++) {
            const emptyCell = document.createElement('div');
            calendarGrid.appendChild(emptyCell);
        }

        for (let day = 1; day <= daysInMonth; day++) {
            const dayKey = `${day}-${currentMonth + 1}-${currentYear}`;
            const dayCell = document.createElement('div');
            dayCell.classList.add('calendar-day');
            dayCell.innerHTML = `<h4>${day}</h4>`;

            const formattedDateKey =
                `${String(day).padStart(2, '0')}-${String(currentMonth + 1).padStart(2, '0')}-${currentYear}`;


            if (events[formattedDateKey]) {
                dayCell.innerHTML +=
                    `<span class="text-start selectable" style="font-size: 13px;font-weight: bold;margin-top: 20px;color: #9425FE;">| ${events[formattedDateKey].length} Acara</span>`;
            }

            dayCell.addEventListener('click', () => handleDateClick(dayCell, formattedDateKey));
            calendarGrid.appendChild(dayCell);
        }
    }

    function handleDateClick(dayCell, dayKey) {
        const allDays = document.querySelectorAll('.calendar-day');
        allDays.forEach(day => day.classList.remove('selected'));

        dayCell.classList.add('selected');
        selectedDate = dayKey;

        showEventList(dayKey);
    }

    function showEventList(dayKey) {
        eventList.innerHTML = '';
        if (events[dayKey]) {
            const dayEvents = events[dayKey];
            const eventsPerPage = 4;
            const totalPages = Math.ceil(dayEvents.length / eventsPerPage);
            let currentPage = 1;

            const renderEvents = () => {
                eventList.innerHTML = '';
                const start = (currentPage - 1) * eventsPerPage;
                const end = start + eventsPerPage;

                dayEvents.slice(start, end).forEach(event => {
                    const eventItem = document.createElement('li');
                    eventItem.classList.add('list-group-item');

                    // Batasi deskripsi
                    const truncatedDesc = event.desc.length > 20 ? event.desc.substring(0, 20) + '...' :
                        event.desc;
                    eventItem.innerHTML = `
                            <a href="/events/${event.slug}">
                                <span class="event-indicator ${event.price}-indicator"></span>
                                <h6 style="color: #9425FE;">${event.title}</h6>
                                <small>${truncatedDesc}</small>
                                <small>${formatRupiah(event.price)}</small><br>
                                <small>${dayKey}</small>
                            </a>
                        `;
                    eventList.appendChild(eventItem);
                });

                const pagination = document.createElement('nav');
                pagination.classList.add('pagination');

                for (let i = 1; i <= totalPages; i++) {
                    const pageButton = document.createElement('button');
                    pageButton.classList.add('btn', 'btn-sm', 'btn-outline-primary', 'mx-1', 'btn-circle');
                    pageButton.textContent = i;
                    pageButton.addEventListener('click', () => {
                        currentPage = i;
                        renderEvents();
                    });
                    pagination.appendChild(pageButton);
                }
                eventList.appendChild(pagination);
            };


            renderEvents();
        } else {
            eventList.innerHTML = '<li class="list-group-item">Tidak Ada Event Pada Tanggal Ini.</li>';
        }
    }

    monthSelect.addEventListener('change', () => {
        currentMonth = parseInt(monthSelect.value);
        updateCalendar();
    });

    yearSelect.addEventListener('change', () => {
        currentYear = parseInt(yearSelect.value);
        updateCalendar();
    });

    updateCalendar(); // Panggil fungsi untuk pertama kali
</script>
