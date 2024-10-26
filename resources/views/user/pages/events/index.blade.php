@extends('user.layouts.app')
@section('content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb__area breadcrumb__bg py-5" data-background="{{ asset('assets/img/bg/breadcrumb_bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb__content">
                        <h3 class="title">Event</h3>
                        <nav class="breadcrumb">
                            <span property="itemListElement" typeof="ListItem">
                                <a href="/">Beranda</a>
                            </span>
                            <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                            <span property="itemListElement" typeof="ListItem">
                                <a href="events">Event</a>
                            </span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb__shape-wrap">
            <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" class="alltuchtopdown">
            <img src="{{ asset('assets/img/others/breadcrumb_shape02.svg') }}" alt="img" data-aos="fade-right"
                data-aos-delay="300">
            <img src="{{ asset('assets/img/others/breadcrumb_shape03.svg') }}" alt="img" data-aos="fade-up"
                data-aos-delay="400">
            <img src="{{ asset('assets/img/others/breadcrumb_shape04.svg') }}" alt="img" data-aos="fade-down-left"
                data-aos-delay="400">
            <img src="{{ asset('assets/img/others/breadcrumb_shape05.svg') }}" alt="img" data-aos="fade-left"
                data-aos-delay="400">
        </div>
    </section>
    <!-- breadcrumb-area-end -->
    <!-- event-area -->
    <section class="event__area-two section-py-120">
        <div class="container">
            <div class="event__inner-wrap">
                <div class="row" id="events-list-content11">
                    <div class="container mt-5">
                        <div class="text-center mb-5">
                            <h2 class="event__sub-title">Event Hummaclass</h2>
                            <h1>Kembangkan Kemampuanmu Di Event Hummaclass</h1>
                        </div>

                        <div class="row mb-5">
                            <div class="col-lg-8 col-md-12">
                                <div class="card p-5">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h2 style="color: #9425FE;">Kalender</h2>
                                        <div class="d-flex">
                                            <select class="form-select-ym me-2" id="monthSelect"></select>
                                            <select class="form-select-ym me-2" id="yearSelect"></select>
                                        </div>
                                    </div>
                                    <div class="row text-center" id="calendarGrid"></div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-12">
                                <div class="card p-3 mb-3">
                                    <h2 style="color: #9425FE;">Daftar Acara</h2>
                                </div>
                                <div class="event-sidebar">
                                    <ul class="list-group list-group-flush" id="eventList"></ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September",
            "October", "November", "December"
        ];

        let currentMonth = new Date().getMonth();
        let currentYear = new Date().getFullYear();
        let events = {
            "1-10-2024": [{
                    title: "Acara 1",
                    desc: "Deskripsi Acara 1",
                    time: "10:00 AM",
                    category: "success"
                },
                {
                    title: "Acara 2",
                    desc: "Deskripsi Acara 2",
                    time: "12:00 PM",
                    category: "primary"
                },
                {
                    title: "Acara 3",
                    desc: "Deskripsi Acara 3",
                    time: "02:00 PM",
                    category: "warning"
                },
                {
                    title: "Acara 4",
                    desc: "Deskripsi Acara 4",
                    time: "04:00 PM",
                    category: "danger"
                },
                {
                    title: "Acara 5",
                    desc: "Deskripsi Acara 5",
                    time: "06:00 PM",
                    category: "success"
                },
            ]
        };

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

                if (events[dayKey]) {
                    dayCell.innerHTML +=
                        `<span class="text-start selectable" style="font-size: 13px;font-weight: bold;margin-top; 31px:color: #9425FE;margin-top: 20px;font-family: 'Poppins', sans-serif;">|      ${events[dayKey].length} Acara</span>`;
                }

                dayCell.addEventListener('mouseup', function() {
                    const selectedText = window.getSelection().toString();

                    if (selectedText) {
                        const spanElement = dayCell.querySelector('.selectable');
                        if (spanElement) {
                            spanElement.classList.add('text-highlight');

                            setTimeout(() => {
                                spanElement.classList.remove('text-highlight');
                            }, 1000);
                        }
                    }
                });


                dayCell.addEventListener('click', () => handleDateClick(dayCell, dayKey));
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
                        eventItem.innerHTML = `
                    <h6 style="color: #9425FE;">${event.title}</h6>
                    <small>${event.desc}</small><br>
                    <small>${dayKey} at ${event.time}</small>
                `;

                        // Apply inline styles based on the category
                        switch (event.category) {
                            case 'danger':
                                eventItem.style.backgroundColor = '#dc3545';
                                eventItem.style.color = '#ffffff';
                                break;
                            case 'success':
                                eventItem.style.backgroundColor = '#28a745';
                                eventItem.style.color = '#ffffff';
                                break;
                            case 'primary':
                                eventItem.style.backgroundColor = '#007bff';
                                eventItem.style.color = '#ffffff';
                                break;
                            case 'warning':
                                eventItem.style.backgroundColor = '#ffc107';
                                eventItem.style.color = '#000000';
                                break;
                        }

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
                eventList.innerHTML = '<li class="list-group-item">No events for this date.</li>';
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

        updateCalendar();
    </script>
@endsection

@section('script')
    @include('user.pages.events.scripts.index')
@endsection

<style>
    @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    body {
        background-color: #F8F8F8;
        font-family: 'Poppins', sans-serif;
        font-weight: 400;
        font-style: normal;
    }

    .card {
        background-color: #fff;
        padding: 20px;
        width: 100%;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        border: none;
        border-radius: 10px;
    }

    #calendarGrid {
        display: grid;
        grid-template-columns: repeat(7, 1fr);
        gap: 10px;
    }

    .calendar-day {
        color: #9425FE;
        padding: 20px;
        border: 3px solid #9425FE;
        border-radius: 15px;
        cursor: pointer;
        background-color: #fff;
        position: relative;
        transition: background-color 0.3s ease;
        width: 100px;
        height: 124px;
        display: flex;
        flex-direction: column;
        align-items: start;
        justify-content: top;
    }

    .calendar-day h4 {
        font-size: 24px;
        color: #9425FE;
        margin-bottom: 10px;
        font-family: "Poppins", sans-serif;
        font-weight: 700;
    }

    .calendar-day.selected {
        color: #fff;
        background: rgb(156, 64, 247);
        background: linear-gradient(90deg, rgba(156, 64, 247, 1) 0%, rgba(114, 9, 219, 1) 100%);
        border: 2px solid #ffffff;
        outline: 4px solid #fff;
        outline-offset: -9px;
    }

    .calendar-day.selected h4 {
        color: #fff;
    }

    .event-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .event-list li {
        padding: 5px 10px;
        margin-bottom: 5px;
        border-radius: 5px;
        color: white;
    }

    h5 {
        color: #9425FE !important;
        background-color: #9525fe29 !important;
        border-radius: 10px;
        max-width: max-content;
        padding: 5px 10px;
        text-align: center;
        position: relative;
    }

    .event__sub-title {
        color: #9425FE;
        background-color: #9525fe29;
        padding: 5px 10px;
        border-radius: 10px;
        display: inline-block;
        font-size: 20px;
    }

    .event-danger {
        background-color: #9425FE;
        color: #ffffff !important;
    }

    .event-success {
        color: #ffffff !important;
    }

    .event-primary {
        color: #ffffff !important;
    }

    .event-warning {
    }

    #eventList .list-group-item {
        margin-bottom: 15px;
        background-color: #fff;
        border: 1px solid #e9ecef;
        padding: 15px;
        border-radius: 10px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }

    #eventList .list-group-item h6 {
        margin-bottom: 5px;
    }

    #eventList .list-group-item small {
        color: #6c757d;
    }

    h2 {
        font-weight: bold;
        color: #9429FE;
    }

    .form-select-ym {
        width: 200px;
        height: 45px;
        border-radius: 38px;
        border: 3px solid #9425FE;
        padding: 0 10px;
        text-align: center;
        background-color: white;
        color: #9425FE;
        font-family: "Poppins", serif;
        font-weight: 400;
        font-size: 18px;
    }

    @media (max-width: 768px) {
        #calendarGrid {
            grid-template-columns: repeat(3, 1fr);
        }

        .calendar-day {
            width: 70px;
            height: 166px;
        }

        .col-md-8,
        .col-md-4 {
            flex: 100%;
            max-width: 100%;
            margin-bottom: 20px;
        }
    }

    @media (max-width: 576px) {
        .form-select-ym {
            width: 100%;
            font-size: 16px;
        }

        h1 {
            font-size: 1.5rem;
        }

        h2 {
            font-size: 1.25rem;
        }
    }

    @media (max-width: 430px) {
        .calendar-day {
            width: 100%;
            height: auto;
            padding: 10px;
        }

        .calendar-day h5 {
            font-size: 14px;
        }

        .form-select-ym {
            width: 100%;
            font-size: 16px;
        }

        #calendarGrid {
            grid-template-columns: repeat(3, 1fr);
        }

        .event-list li {
            padding: 8px;
            font-size: 14px;
        }

        h2 {
            font-size: 20px;
            color: #9425FE !important;
            background-color: #9525fe29 !important;
        }

    }
</style>
