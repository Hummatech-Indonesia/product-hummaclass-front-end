<style>
    @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap');

    body {
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
        gap: 15px;
    }

    .calendar-day {
        color: #9425FE;
        padding: 15px;
        border: 2px solid #9425FE;
        border-radius: 15px;
        cursor: pointer;
        background-color: #fff;
        position: relative;
        transition: background-color 0.3s ease;
        display: flex;
        flex-direction: column;
        align-items: start;
        justify-content: start;
        width: 100%;
        height: 130px;
    }

    .calendar-day h4 {
        font-size: 20px;
        color: #9425FE;
        margin-bottom: 5px;
        font-weight: 600;
        text-align: start;
    }

    .calendar-day.selected {
        color: #fff;
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
        padding: 8px;
        margin-bottom: 5px;
        border-radius: 5px;
        color: white;
    }

    h5 {
        color: #9425FE !important;
        background-color: #9525fe29 !important;
        border-radius: 10px;
        padding: 5px 10px;
    }

    .event-indicator {
        width: 8px;
        height: 100%;
        border-radius: 4px;
        display: inline-block;
    }

    #eventList .list-group-item {
        margin-bottom: 15px;
        background-color: #fff;
        border: 1px solid #e9ecef;
        padding: 15px;
        border-radius: 10px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }

    .form-select-ym {
        width: 150px;
        height: 50px;
        border-radius: 38px;
        border: 2px solid #9425FE;
        padding: 0 10px;
        text-align: center;
        background-color: white;
        color: #9425FE;
        font-weight: 400;
        font-size: 16px;
    }

    @media (max-width: 768px) {
        #calendarGrid {
            grid-template-columns: repeat(3, 1fr);
        }

        .calendar-day {
            width: 100%;
            padding: 15px;
        }

        .form-select-ym {
            width: 100%;
            font-size: 16px;
        }
    }

    @media (max-width: 576px) {
        .form-select-ym {
            width: 100%;
            font-size: 14px;
        }

        .calendar-day h4 {
            font-size: 18px;
        }
    }

    @media (max-width: 430px) {
        .calendar-day {
            padding: 10px;
        }

        .calendar-day h4 {
            font-size: 16px;
        }

        #calendarGrid {
            grid-template-columns: repeat(2, 1fr);
            gap: 5px;
        }

        h2 {
            font-size: 18px;
        }

        .form-select-ym {
            font-size: 14px;
        }
    }

    .calendar-day.selected span {
        color: #fff;
    }
</style>