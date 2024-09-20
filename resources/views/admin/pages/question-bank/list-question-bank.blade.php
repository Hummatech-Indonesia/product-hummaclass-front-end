@extends('admin.layouts.app')

@section('content')
<div class="row">
    @foreach (range(1,5) as $data)
    <div class="col-lg-4">
        <div class="card">
            <div class="p-2 mt-3" style="left: 0;top:5%;background:linear-gradient(to right,#FFA41C, #FFD08A); border-radius:0 8px 8px 0;width:200px">
                <span class="text-white ps-3 fs-4" style="font-weight: bold;">Step ke- <span id="step"></span></span>
            </div>
            <div class="card-body">
                <div class="">

                    <div class="d-flex gap-2 align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-book-2">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M19 4v16h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12z" />
                            <path d="M19 16h-12a2 2 0 0 0 -2 2" />
                            <path d="M9 8h6" />
                        </svg>
                        <h5 class="text-dark" style="font-weight: bold;" id="title">Belajar Dasar Pemograman Web</h5>
                    </div>

                    <div class=" mt-2">
                        <p id="sub_title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, saepe! Temporibus.</p>
                        <div class="d-flex justify-content-between">
                          <span class="badge fw-semibold d-flex align-items-center" style="background-color: #F6EEFE; color: #9425FE;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="me-1" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M20 18H4V8h16m0-2h-8l-2-2H4c-1.11 0-2 .89-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2"/></svg>
                                20 Total Soal
                          </span>
                          <div>
                              <a href="{{ route('admin.detail-question.index') }}" style="background-color: #9425FE" class="btn text-white">
                                Bank Soal
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12h16m0 0l-6-6m6 6l-6 6"/></svg>
                              </a>
                          </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
