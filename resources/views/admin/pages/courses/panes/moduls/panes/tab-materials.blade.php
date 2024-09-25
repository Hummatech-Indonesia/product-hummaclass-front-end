<div class="d-flex gap-3 mb-3">
    <form action="" class="position-relative">
        <input type="text" class="form-control product-search px-4 ps-5" style="background-color: #fff" name="name" value="{{ old('name', request('name')) }}" id="input-search" placeholder="Search">
        <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 ms-3" style="color: #8B8B8B"></i>
    </form>
    <form action="" class="position-relative">
        <input type="text" class="form-control product-search px-1 ps-5" style="background-color: #fff" name="name" value="{{ old('name', request('name')) }}" id="input-filter" placeholder="Terbaru">
        <svg class="position-absolute top-50 start-0 translate-middle-y fs-6 ms-3" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 512 512">
            <path fill="none" stroke="#8B8B8B" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M32 144h448M112 256h288M208 368h96" /></svg>
    </form>
</div>

<div class="row" id="cardSubModul">
</div>
