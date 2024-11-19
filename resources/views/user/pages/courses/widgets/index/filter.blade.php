<div class="col-xl-3 col-lg-4 order-2 order-lg-0">
    <aside class="courses__sidebar">
        <div class="courses-widget">
            <h4 class="widget-title">Kategori</h4>
            <div class="bd-example bg-light">
                <div class="accordion accordion-flush" id="accordionFlushExample">

                </div>
            </div>
        </div>

        <div class="courses-widget">
            <h4 class="widget-title">Harga</h4>
            <div class="courses-cat-list">
                <div class="input-group">
                    <span class="input-group-text">Rp</span>
                    <input type="number" id="minimum" class="form-control" min="0"
                        placeholder="Harga Minimum">
                </div>
                <div class="input-group my-4">
                    <span class="input-group-text">Rp</span>
                    <input type="number" id="maksimum" class="form-control" min="0"
                        placeholder="Harga Maksimum">
                </div>
                <button id="filter_price" class="btn"
                    style="background-color: #ffc224;color:black; width:100%">Terapkan</button>
            </div>
        </div>
        {{-- <div class="courses-widget">
            <h4 class="widget-title">Rating</h4>
            <div class="courses-rating-list">
                <ul class="list-wrap">
                    <li>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="">
                            <div class="rating">
                                <ul class="list-wrap">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                                <span>(42)</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="">
                            <div class="rating">
                                <ul class="list-wrap">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li class="delete"><i class="fas fa-star"></i></li>
                                </ul>
                                <span>(23)</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="">
                            <div class="rating">
                                <ul class="list-wrap">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li class="delete"><i class="fas fa-star"></i></li>
                                    <li class="delete"><i class="fas fa-star"></i></li>
                                </ul>
                                <span>(11)</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="">
                            <div class="rating">
                                <ul class="list-wrap">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li class="delete"><i class="fas fa-star"></i></li>
                                    <li class="delete"><i class="fas fa-star"></i></li>
                                    <li class="delete"><i class="fas fa-star"></i></li>
                                </ul>
                                <span>(7)</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="">
                            <div class="rating">
                                <ul class="list-wrap">
                                    <li><i class="fas fa-star"></i></li>
                                    <li class="delete"><i class="fas fa-star"></i></li>
                                    <li class="delete"><i class="fas fa-star"></i></li>
                                    <li class="delete"><i class="fas fa-star"></i></li>
                                    <li class="delete"><i class="fas fa-star"></i></li>
                                </ul>
                                <span>(3)</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div> --}}
    </aside>
</div>


<style>
    .accordion {
        --bs-accordion-border-color: #F7F7F9;
        --bs-accordion-bg: #F7F7F9;
        --bs-accordion-btn-icon-width: 15px !important;
    }

    .accordion-button:not(.collapsed) {
        background-color: #F7F7F9;
        box-shadow: #F7F7F9;
        --bs-accordion-btn-icon: url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23212529'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e);
        --bs-accordion-btn-icon-width: 15px;
        --bs-accordion-btn-icon-transform: rotate(-180deg);
        --bs-accordion-btn-icon-transition: transform 0.2s ease-in-out;
        --bs-accordion-btn-active-icon: url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23052c65'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e);
    }

    .accordion-button::after {
        flex-shrink: 0;
        /* width: 15px;
        height: 15px; */
        margin-left: auto;
        content: "";
        background-image: var(--bs-accordion-btn-icon);
        background-repeat: no-repeat;
        background-size: var(--bs-accordion-btn-icon-width);
        transition: var(--bs-accordion-btn-icon-transition);
    }

    .accordion-flush .accordion-item .accordion-button,
    .accordion-flush .accordion-item .accordion-button.collapsed {
        border-radius: 0;
        font-size: 17px;
        color: #6D6C80;
    }
</style>
