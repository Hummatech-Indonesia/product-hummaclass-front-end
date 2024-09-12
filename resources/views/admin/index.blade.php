@extends('admin.layouts.app')

@section('style')
<style>
    body {
        background-color: white !important;
    }

</style>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 col-xl-3">
        <div class="card bg-light-primary shadow-none">
          <div class="card-body p-4">
            <div class="d-flex align-items-center">
              <div class="round rounded bg-primary d-flex align-items-center justify-content-center">
                <i class="cc BTC text-white fs-7" title="BTC"></i>
              </div>
              <h6 class="mb-0 ms-3">BTC</h6>
              <div class="ms-auto text-primary d-flex align-items-center">
                <i class="ti ti-trending-up text-primary fs-6 me-1"></i>
                <span class="fs-2 fw-bold">+ 2.30%</span>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mt-4">
              <h3 class="mb-0 fw-semibold fs-7">0.1245</h3>
              <span class="fw-bold">$1,015.00</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-xl-3">
        <div class="card bg-light-danger shadow-none">
          <div class="card-body p-4">
            <div class="d-flex align-items-center">
              <div class="round rounded bg-danger d-flex align-items-center justify-content-center">
                <i class="cc ETH text-white fs-7" title="ETH"></i>
              </div>
              <h6 class="mb-0 ms-3">ETH</h6>
              <div class="ms-auto text-danger d-flex align-items-center">
                <i class="ti ti-trending-up text-danger fs-6 me-1"></i>
                <span class="fs-2 fw-bold">+ 3.20%</span>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mt-4">
              <h3 class="mb-0 fw-semibold fs-7">0.5620</h3>
              <span class="fw-bold">$2,110.00</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-xl-3">
        <div class="card bg-light-success shadow-none">
          <div class="card-body p-4">
            <div class="d-flex align-items-center">
              <div class="round rounded bg-success d-flex align-items-center justify-content-center">
                <i class="cc LTC text-white fs-7" title="LTC"></i>
              </div>
              <h6 class="mb-0 ms-3">LTC</h6>
              <div class="ms-auto text-info d-flex align-items-center">
                <i class="ti ti-trending-down text-success fs-6 me-1"></i>
                <span class="fs-2 fw-bold text-success">+ 3.20%</span>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mt-4">
              <h3 class="mb-0 fw-semibold fs-7">1.200</h3>
              <span class="fw-bold">$1,100.00</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-xl-3">
        <div class="card bg-light-warning shadow-none">
          <div class="card-body p-4">
            <div class="d-flex align-items-center">
              <div class="round rounded bg-warning d-flex align-items-center justify-content-center">
                <i class="cc XRP text-white fs-7" title="XRP"></i>
              </div>
              <h6 class="mb-0 ms-3">XRP</h6>
              <div class="ms-auto text-info d-flex align-items-center">
                <i class="ti ti-trending-down text-warning fs-6 me-1"></i>
                <span class="fs-2 fw-bold text-warning">+ 2.20%</span>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mt-4">
              <h3 class="mb-0 fw-semibold fs-7">1.150</h3>
              <span class="fw-bold">$2,150.00</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-9">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title fw-semibold">Featured BTCs</h5>
            <p class="card-subtitle mb-0">The Top BTCs for New Investors</p>
            <div class="row mt-4">
              <div class="col-md-4">
                <div class="card overflow-hidden shadow-none border card-hover mb-4 mb-md-0">
                  <img src="{{ asset('admin/dist/images/crypto/c1.jpg') }}" alt="img">
                  <div class="card-body p-4">
                    <div class="d-flex align-items-center justify-content-between">
                      <div>
                        <h6 class="mb-0 fs-5 fw-semibold">Els Idunn</h6>
                        <span>els@email</span>
                      </div>
                      <img src="{{ asset('admin/dist/images/profile/user-1.jpg') }}" alt="user1" width="35" class="rounded-circle">
                    </div>
                    <div class="d-flex align-items-start justify-content-between mt-3">
                      <span>Price</span>
                      <div class="text-end">
                        <h5 class="mb-0 fs-5 fw-semibold">
                          <i class="cc BTC" title="BTC"></i> 0.25 BTC
                        </h5>
                        <span class="fs-3">$21,23,000</span>
                      </div>
                    </div>
                    <div class="d-flex align-items-start justify-content-between mt-3">
                      <span>
                        <i class="ti ti-clock-hour-4 me-1 fs-4"></i>5d 16h </span>
                      <span>
                        <i class="ti ti-eye fs-4 me-1"></i>2.5k </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card overflow-hidden shadow-none border card-hover mb-4 mb-md-0">
                  <img src="{{ asset('admin/dist/images/crypto/c2.jpg') }}" alt="img">
                  <div class="card-body p-4">
                    <div class="d-flex align-items-center justify-content-between">
                      <div>
                        <h6 class="mb-0 fs-5 fw-semibold">Liam William</h6>
                        <span>lian@email</span>
                      </div>
                      <img src="{{ asset('admin/dist/images/profile/user-2.jpg') }}" alt="user1" width="35" class="rounded-circle">
                    </div>
                    <div class="d-flex align-items-start justify-content-between mt-3">
                      <span>Price</span>
                      <div class="text-end">
                        <h5 class="mb-0 fs-5 fw-semibold">
                          <i class="cc ETH" title="ETH"></i> 1.42 ETH
                        </h5>
                        <span class="fs-3">$15,000</span>
                      </div>
                    </div>
                    <div class="d-flex align-items-start justify-content-between mt-3">
                      <span>
                        <i class="ti ti-clock-hour-4 me-1 fs-4"></i>3d 1h </span>
                      <span>
                        <i class="ti ti-eye fs-4 me-1"></i>1.2k </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card overflow-hidden shadow-none border card-hover mb-4 mb-md-0">
                  <img src="{{ asset('admin/dist/images/crypto/c3.jpg') }}" alt="img">
                  <div class="card-body p-4">
                    <div class="d-flex align-items-center justify-content-between">
                      <div>
                        <h6 class="mb-0 fs-5 fw-semibold">John Smith</h6>
                        <span>john@email</span>
                      </div>
                      <img src="{{ asset('admin/dist/images/profile/user-3.jpg') }}" alt="user1" width="35" class="rounded-circle">
                    </div>
                    <div class="d-flex align-items-start justify-content-between mt-3">
                      <span>Price</span>
                      <div class="text-end">
                        <h5 class="mb-0 fs-5 fw-semibold">
                          <i class="cc XRP" title="XRP"></i> 0.25 XRP
                        </h5>
                        <span class="fs-3">$61,25,000</span>
                      </div>
                    </div>
                    <div class="d-flex align-items-start justify-content-between mt-3">
                      <span>
                        <i class="ti ti-clock-hour-4 me-1 fs-4"></i>2d 11h </span>
                      <span>
                        <i class="ti ti-eye fs-4 me-1"></i>5.3k </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body pb-2">
            <div class="d-md-flex align-items-center gap-3 justify-content-between mb-3">
              <div>
                <h5 class="card-title fw-semibold">Your Investments</h5>
                <p class="card-subtitle mb-0">What Are the Risks of Investing?</p>
              </div>
              <div class="d-flex align-items-center gap-3 mt-4 mt-md-0">
                <div class="dropdown">
                  <button class="btn btn-light-primary dropdown-toggle" type="button" id="invest1" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="cc BTC me-1" title="BTC"></i> BTC </button>
                  <ul class="dropdown-menu" aria-labelledby="invest1">
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="cc ETH me-1" title="ETH"></i> ETH </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="cc LTC me-1" title="LTC"></i> LTC </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="cc XRP me-1" title="XRP"></i> XRP </a>
                    </li>
                  </ul>
                </div>
                <span class="round bg-primary flex-shrink-0 rounded-circle text-white d-flex align-items-center justify-content-center">
                  <i class="ti ti-repeat fs-6"></i>
                </span>
                <div class="dropdown">
                  <button class="btn btn-light-danger dropdown-toggle" type="button" id="invest2" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="cc ETH me-1" title="ETH"></i> ETH </button>
                  <ul class="dropdown-menu" aria-labelledby="invest2">
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="cc BTC me-1" title="BTC"></i> BTC </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="cc ETH me-1" title="ETH"></i> ETH </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="cc LTC me-1" title="LTC"></i> LTC </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div id="investments" style="min-height: 340px;"><div id="apexcharts7tei03d5g" class="apexcharts-canvas apexcharts7tei03d5g apexcharts-theme-light" style="width: 798px; height: 325px;"><svg id="SvgjsSvg1111" width="798" height="325" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1113" class="apexcharts-inner apexcharts-graphical" transform="translate(51.75302696228027, 30)"><defs id="SvgjsDefs1112"><clipPath id="gridRectMask7tei03d5g"><rect id="SvgjsRect1119" width="732.3770513534546" height="261.99519938278195" x="-4" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask7tei03d5g"></clipPath><clipPath id="nonForecastMask7tei03d5g"></clipPath><clipPath id="gridRectMarkerMask7tei03d5g"><rect id="SvgjsRect1120" width="728.3770513534546" height="261.99519938278195" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient1125" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop1126" stop-opacity="1" stop-color="rgba(105,147,255,1)" offset="0"></stop><stop id="SvgjsStop1127" stop-opacity="1" stop-color="rgba(97,93,255,1)" offset="1"></stop><stop id="SvgjsStop1128" stop-opacity="1" stop-color="rgba(97,93,255,1)" offset="1"></stop><stop id="SvgjsStop1129" stop-opacity="1" stop-color="rgba(105,147,255,1)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient1134" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop1135" stop-opacity="1" stop-color="rgba(73,190,255,1)" offset="0"></stop><stop id="SvgjsStop1136" stop-opacity="1" stop-color="rgba(73,190,255,1)" offset="1"></stop><stop id="SvgjsStop1137" stop-opacity="1" stop-color="rgba(73,190,255,1)" offset="1"></stop><stop id="SvgjsStop1138" stop-opacity="1" stop-color="rgba(73,190,255,1)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1118" x1="0" y1="0" x2="0" y2="257.99519938278195" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="257.99519938278195" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1140" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1141" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1143" font-family="Helvetica, Arial, sans-serif" x="0" y="286.99519938278195" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#adb0bb" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1144">Jan</tspan><title>Jan</title></text><text id="SvgjsText1146" font-family="Helvetica, Arial, sans-serif" x="72.43770513534545" y="286.99519938278195" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#adb0bb" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1147">Feb</tspan><title>Feb</title></text><text id="SvgjsText1149" font-family="Helvetica, Arial, sans-serif" x="144.8754102706909" y="286.99519938278195" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#adb0bb" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1150">Mar</tspan><title>Mar</title></text><text id="SvgjsText1152" font-family="Helvetica, Arial, sans-serif" x="217.3131154060364" y="286.99519938278195" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#adb0bb" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1153">Apr</tspan><title>Apr</title></text><text id="SvgjsText1155" font-family="Helvetica, Arial, sans-serif" x="289.7508205413818" y="286.99519938278195" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#adb0bb" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1156">May</tspan><title>May</title></text><text id="SvgjsText1158" font-family="Helvetica, Arial, sans-serif" x="362.18852567672724" y="286.99519938278195" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#adb0bb" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1159">Jun</tspan><title>Jun</title></text><text id="SvgjsText1161" font-family="Helvetica, Arial, sans-serif" x="434.6262308120727" y="286.99519938278195" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#adb0bb" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1162">July</tspan><title>July</title></text><text id="SvgjsText1164" font-family="Helvetica, Arial, sans-serif" x="507.0639359474182" y="286.99519938278195" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#adb0bb" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1165">Aug</tspan><title>Aug</title></text><text id="SvgjsText1167" font-family="Helvetica, Arial, sans-serif" x="579.5016410827637" y="286.99519938278195" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#adb0bb" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1168">Sept</tspan><title>Sept</title></text><text id="SvgjsText1170" font-family="Helvetica, Arial, sans-serif" x="651.9393462181092" y="286.99519938278195" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#adb0bb" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1171">Oct</tspan><title>Oct</title></text><text id="SvgjsText1173" font-family="Helvetica, Arial, sans-serif" x="724.3770513534547" y="286.99519938278195" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#adb0bb" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1174">Nov</tspan><title>Nov</title></text></g></g><g id="SvgjsG1191" class="apexcharts-grid"><g id="SvgjsG1192" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1194" x1="0" y1="0" x2="724.3770513534546" y2="0" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1195" x1="0" y1="42.999199897130325" x2="724.3770513534546" y2="42.999199897130325" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1196" x1="0" y1="85.99839979426065" x2="724.3770513534546" y2="85.99839979426065" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1197" x1="0" y1="128.99759969139097" x2="724.3770513534546" y2="128.99759969139097" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1198" x1="0" y1="171.9967995885213" x2="724.3770513534546" y2="171.9967995885213" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1199" x1="0" y1="214.99599948565162" x2="724.3770513534546" y2="214.99599948565162" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1200" x1="0" y1="257.99519938278195" x2="724.3770513534546" y2="257.99519938278195" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1193" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1202" x1="0" y1="257.99519938278195" x2="724.3770513534546" y2="257.99519938278195" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1201" x1="0" y1="1" x2="0" y2="257.99519938278195" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1121" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1122" class="apexcharts-series" seriesName="BTC" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1130" d="M 0 107.49799974282581C 25.353196797370906 107.49799974282581 47.08450833797455 214.99599948565162 72.43770513534545 214.99599948565162C 97.79090193271637 214.99599948565162 119.52221347332 85.99839979426065 144.8754102706909 85.99839979426065C 170.22860706806182 85.99839979426065 191.95991860866545 150.49719963995614 217.31311540603636 150.49719963995614C 242.66631220340727 150.49719963995614 264.3976237440109 107.49799974282581 289.7508205413818 107.49799974282581C 315.1040173387527 107.49799974282581 336.8353288793564 193.49639953708646 362.1885256767273 193.49639953708646C 387.5417224740982 193.49639953708646 409.2730340147018 150.49719963995614 434.6262308120727 150.49719963995614C 459.97942760944363 150.49719963995614 481.7107391500473 176.29671957823433 507.0639359474182 176.29671957823433C 532.4171327447891 176.29671957823433 554.1484442853928 107.49799974282581 579.5016410827636 107.49799974282581C 604.8548378801346 107.49799974282581 626.5861494207381 171.9967995885213 651.9393462181091 171.9967995885213C 677.2925430154801 171.9967995885213 699.0238545560836 64.49879984569549 724.3770513534546 64.49879984569549" fill="none" fill-opacity="1" stroke="url(#SvgjsLinearGradient1125)" stroke-opacity="1" stroke-linecap="butt" stroke-width="4" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask7tei03d5g)" pathTo="M 0 107.49799974282581C 25.353196797370906 107.49799974282581 47.08450833797455 214.99599948565162 72.43770513534545 214.99599948565162C 97.79090193271637 214.99599948565162 119.52221347332 85.99839979426065 144.8754102706909 85.99839979426065C 170.22860706806182 85.99839979426065 191.95991860866545 150.49719963995614 217.31311540603636 150.49719963995614C 242.66631220340727 150.49719963995614 264.3976237440109 107.49799974282581 289.7508205413818 107.49799974282581C 315.1040173387527 107.49799974282581 336.8353288793564 193.49639953708646 362.1885256767273 193.49639953708646C 387.5417224740982 193.49639953708646 409.2730340147018 150.49719963995614 434.6262308120727 150.49719963995614C 459.97942760944363 150.49719963995614 481.7107391500473 176.29671957823433 507.0639359474182 176.29671957823433C 532.4171327447891 176.29671957823433 554.1484442853928 107.49799974282581 579.5016410827636 107.49799974282581C 604.8548378801346 107.49799974282581 626.5861494207381 171.9967995885213 651.9393462181091 171.9967995885213C 677.2925430154801 171.9967995885213 699.0238545560836 64.49879984569549 724.3770513534546 64.49879984569549" pathFrom="M -1 257.99519938278195L -1 257.99519938278195L 72.43770513534545 257.99519938278195L 144.8754102706909 257.99519938278195L 217.31311540603636 257.99519938278195L 289.7508205413818 257.99519938278195L 362.1885256767273 257.99519938278195L 434.6262308120727 257.99519938278195L 507.0639359474182 257.99519938278195L 579.5016410827636 257.99519938278195L 651.9393462181091 257.99519938278195L 724.3770513534546 257.99519938278195"></path><g id="SvgjsG1123" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1208" r="0" cx="0" cy="0" class="apexcharts-marker wjgy3rwld no-pointer-events" stroke="#ffffff" fill="#615dff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1131" class="apexcharts-series" seriesName="ETH" data:longestSeries="true" rel="2" data:realIndex="1"><path id="SvgjsPath1139" d="M 0 128.99759969139097C 25.353196797370906 128.99759969139097 47.08450833797455 167.69687959880827 72.43770513534545 167.69687959880827C 97.79090193271637 167.69687959880827 119.52221347332 107.49799974282581 144.8754102706909 107.49799974282581C 170.22860706806182 107.49799974282581 191.95991860866545 214.99599948565162 217.31311540603636 214.99599948565162C 242.66631220340727 214.99599948565162 264.3976237440109 171.9967995885213 289.7508205413818 171.9967995885213C 315.1040173387527 171.9967995885213 336.8353288793564 214.99599948565162 362.1885256767273 214.99599948565162C 387.5417224740982 214.99599948565162 409.2730340147018 42.999199897130325 434.6262308120727 42.999199897130325C 459.97942760944363 42.999199897130325 481.7107391500473 171.9967995885213 507.0639359474182 171.9967995885213C 532.4171327447891 171.9967995885213 554.1484442853928 210.6960794959386 579.5016410827636 210.6960794959386C 604.8548378801346 210.6960794959386 626.5861494207381 150.49719963995614 651.9393462181091 150.49719963995614C 677.2925430154801 150.49719963995614 699.0238545560836 116.09783972225188 724.3770513534546 116.09783972225188" fill="none" fill-opacity="1" stroke="url(#SvgjsLinearGradient1134)" stroke-opacity="1" stroke-linecap="butt" stroke-width="4" stroke-dasharray="0" class="apexcharts-line" index="1" clip-path="url(#gridRectMask7tei03d5g)" pathTo="M 0 128.99759969139097C 25.353196797370906 128.99759969139097 47.08450833797455 167.69687959880827 72.43770513534545 167.69687959880827C 97.79090193271637 167.69687959880827 119.52221347332 107.49799974282581 144.8754102706909 107.49799974282581C 170.22860706806182 107.49799974282581 191.95991860866545 214.99599948565162 217.31311540603636 214.99599948565162C 242.66631220340727 214.99599948565162 264.3976237440109 171.9967995885213 289.7508205413818 171.9967995885213C 315.1040173387527 171.9967995885213 336.8353288793564 214.99599948565162 362.1885256767273 214.99599948565162C 387.5417224740982 214.99599948565162 409.2730340147018 42.999199897130325 434.6262308120727 42.999199897130325C 459.97942760944363 42.999199897130325 481.7107391500473 171.9967995885213 507.0639359474182 171.9967995885213C 532.4171327447891 171.9967995885213 554.1484442853928 210.6960794959386 579.5016410827636 210.6960794959386C 604.8548378801346 210.6960794959386 626.5861494207381 150.49719963995614 651.9393462181091 150.49719963995614C 677.2925430154801 150.49719963995614 699.0238545560836 116.09783972225188 724.3770513534546 116.09783972225188" pathFrom="M -1 257.99519938278195L -1 257.99519938278195L 72.43770513534545 257.99519938278195L 144.8754102706909 257.99519938278195L 217.31311540603636 257.99519938278195L 289.7508205413818 257.99519938278195L 362.1885256767273 257.99519938278195L 434.6262308120727 257.99519938278195L 507.0639359474182 257.99519938278195L 579.5016410827636 257.99519938278195L 651.9393462181091 257.99519938278195L 724.3770513534546 257.99519938278195"></path><g id="SvgjsG1132" class="apexcharts-series-markers-wrap" data:realIndex="1"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1209" r="0" cx="0" cy="0" class="apexcharts-marker wrc7hoo8jf no-pointer-events" stroke="#ffffff" fill="#49beff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1124" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG1133" class="apexcharts-datalabels" data:realIndex="1"></g></g><line id="SvgjsLine1203" x1="0" y1="0" x2="724.3770513534546" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1204" x1="0" y1="0" x2="724.3770513534546" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1205" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1206" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1207" class="apexcharts-point-annotations"></g><rect id="SvgjsRect1210" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect1211" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g><rect id="SvgjsRect1117" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1175" class="apexcharts-yaxis" rel="0" transform="translate(21.753026962280273, 0)"><g id="SvgjsG1176" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1177" font-family="Helvetica, Arial, sans-serif" x="20" y="31.6" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#adb0bb" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1178">6000</tspan><title>6000</title></text><text id="SvgjsText1179" font-family="Helvetica, Arial, sans-serif" x="20" y="74.59919989713032" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#adb0bb" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1180">5000</tspan><title>5000</title></text><text id="SvgjsText1181" font-family="Helvetica, Arial, sans-serif" x="20" y="117.59839979426064" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#adb0bb" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1182">4000</tspan><title>4000</title></text><text id="SvgjsText1183" font-family="Helvetica, Arial, sans-serif" x="20" y="160.59759969139097" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#adb0bb" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1184">3000</tspan><title>3000</title></text><text id="SvgjsText1185" font-family="Helvetica, Arial, sans-serif" x="20" y="203.5967995885213" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#adb0bb" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1186">2000</tspan><title>2000</title></text><text id="SvgjsText1187" font-family="Helvetica, Arial, sans-serif" x="20" y="246.59599948565162" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#adb0bb" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1188">1000</tspan><title>1000</title></text><text id="SvgjsText1189" font-family="Helvetica, Arial, sans-serif" x="20" y="289.59519938278197" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#adb0bb" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1190">0</tspan><title>0</title></text></g></g><g id="SvgjsG1114" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 162.5px;"></div><div class="apexcharts-tooltip apexcharts-theme-dark"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(97, 93, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(73, 190, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-dark"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 mt-4 mt-md-0">
        <div class="card">
          <div class="card-body p-4">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-fill" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab" aria-selected="true">
                  <span>Buy</span>
                </a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab" aria-selected="false" tabindex="-1">
                  <span>Sell</span>
                </a>
              </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content mt-4">
              <div class="tab-pane active" id="home" role="tabpanel">
                <form>
                  <span class="d-block mb-1">Amount</span>
                  <div class="input-group mb-3">
                    <input type="text" class="form-control  border-end-0" aria-label="Text input with dropdown button" value="0.20125">
                    <button class="btn btn-sm dropdown-toggle arrow-none p-0 border-top border-bottom border-end border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <span class="bg-light-danger text-danger p-6 rounded">
                        <span> USD </span>
                        <i class="ti ti-chevron-down ms-1 fs-4"></i>
                      </span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li>
                        <a class="dropdown-item" href="#">INR</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">CLP</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">AMD</a>
                      </li>
                    </ul>
                  </div>
                  <span class="d-block mb-1">Amount</span>
                  <div class="input-group mb-3">
                    <input type="text" class="form-control  border-end-0" aria-label="Text input with dropdown button" value="0.20125">
                    <button class="btn btn-sm dropdown-toggle arrow-none p-0 border-top border-bottom border-end border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <span class="bg-light-primary text-primary p-6 rounded">
                        <span> BTC </span>
                        <i class="ti ti-chevron-down ms-1 fs-4"></i>
                      </span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li>
                        <a class="dropdown-item" href="#">LTC</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">XRP</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">ETH</a>
                      </li>
                    </ul>
                  </div>
                  <button class="btn btn-primary w-100">Buy BTC</button>
                </form>
              </div>
              <div class="tab-pane" id="profile" role="tabpanel">
                <form>
                  <span class="d-block mb-1">Amount</span>
                  <div class="input-group mb-3">
                    <input type="text" class="form-control  border-end-0" aria-label="Text input with dropdown button" value="0.20125">
                    <button class="btn btn-sm dropdown-toggle arrow-none p-0 border-top border-bottom border-end border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <span class="bg-light-danger text-danger p-6 rounded">
                        <span> USD </span>
                        <i class="ti ti-chevron-down ms-1 fs-4"></i>
                      </span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li>
                        <a class="dropdown-item" href="#">INR</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">CLP</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">AMD</a>
                      </li>
                    </ul>
                  </div>
                  <span class="d-block mb-1">Amount</span>
                  <div class="input-group mb-3">
                    <input type="text" class="form-control  border-end-0" aria-label="Text input with dropdown button" value="0.20125">
                    <button class="btn btn-sm dropdown-toggle arrow-none p-0 border-top border-bottom border-end border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <span class="bg-light-primary text-primary p-6 rounded">
                        <span> BTC </span>
                        <i class="ti ti-chevron-down ms-1 fs-4"></i>
                      </span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li>
                        <a class="dropdown-item" href="#">LTC</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">XRP</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">ETH</a>
                      </li>
                    </ul>
                  </div>
                  <button class="btn btn-danger w-100">Sell BTC</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body p-4">
            <div class="mb-9">
              <h5 class="card-title fw-semibold">Converter</h5>
              <p class="card-subtitle">The Future of Quick Transfers</p>
            </div>  
            <div class="input-group mb-3">
              <input type="text" class="form-control  border-end-0" aria-label="Text input with dropdown button" value="$1000">
              <button class="btn dropdown-toggle arrow-none p-0 border-top border-bottom border-end border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="bg-light-primary text-primary p-6 rounded">
                  <span> USD </span>
                  <i class="ti ti-chevron-down ms-1 fs-4"></i>
                </span>
              </button>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                  <a class="dropdown-item" href="#">Action</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Another action</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li>
                  <a class="dropdown-item" href="#">Separated link</a>
                </li>
              </ul>
            </div>
            <div class="input-group mb-3">
              <input type="text" class="form-control  border-end-0" aria-label="Text input with dropdown button" value="0.20125">
              <button class="btn dropdown-toggle arrow-none p-0 border-top border-bottom border-end border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="bg-light-danger text-danger p-6 rounded">
                  <span> ETH </span>
                  <i class="ti ti-chevron-down ms-1 fs-4"></i>
                </span>
              </button>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                  <a class="dropdown-item" href="#">Action</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Another action</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li>
                  <a class="dropdown-item" href="#">Separated link</a>
                </li>
              </ul>
            </div>
            <button class="btn btn-primary w-100">Convert</button>
          </div>
        </div>
        <div class="card">
          <div class="card-body p-4">
            <h5 class="card-title fw-semibold">Quick Transfer</h5>
            <p class="card-subtitle">The History of Converters</p>
            <div class="d-flex align-items-center gap-2 mt-4 mb-3">
              <a href="javascript:void(0)">
                <img src="{{ asset('admin/dist/images/profile/user-1.jpg') }}" class="rounded-circle" alt="t1" width="40">
              </a>
              <a href="javascript:void(0)">
                <img src="{{ asset('admin/dist/images/profile/user-2.jpg') }}" class="rounded-circle" alt="t2" width="40">
              </a>
              <a href="javascript:void(0)">
                <img src="{{ asset('admin/dist/images/profile/user-3.jpg') }}" class="rounded-circle" alt="t3" width="40">
              </a>
              <a href="javascript:void(0)">
                <div class="round-40 rounded-circle bg-light-primary d-flex align-items-center justify-content-center">
                  <i class="ti ti-plus fs-4"></i>
                </div>
              </a>
            </div>
            <span class="d-block mb-1">To</span>
            <div class="mb-3">
              <span class="badge px-2 d-inline-flex align-items-center bg-light-primary text-primary rounded-pill fs-3">
                <img src="{{ asset('admin/dist/images/profile/user-1.jpg') }}" class="rounded-circle me-1" alt="user1" width="30"> John </span>
            </div>
            <span class="d-block mb-1">Amount</span>
            <div class="input-group rounded">
              <input type="text" class="form-control  border-end-0" aria-label="Text input with dropdown button" value="$1000">
              <button class="btn p-0 border-top border-bottom border-end border-0" type="button">
                <span class=" btn btn-primary m-1 rounded"> Transfer <i class="ti ti-arrow-right fs-4"></i>
                </span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title fw-semibold">Trade History</h5>
        <p class="card-subtitle mb-0">Trade and the Age of Exploration</p>
        <div class="table-responsive mt-4">
          <table class="table table-borderless text-nowrap align-middle mb-0">
            <tbody>
              <tr class="bg-light">
                <td class="rounded-start bg-transparent">
                  <div class="d-flex align-items-center gap-3">
                    <div>
                      <i class="cc BTC fs-7"></i>
                    </div>
                    <div>
                      <h6 class="mb-0">Bitcoin</h6>
                      <span class="fs-3">BTC</span>
                    </div>
                  </div>
                </td>
                <td class="bg-transparent"> $981.1254 <i class="ti ti-chevron-down text-danger ms-1 fs-4"></i>
                </td>
                <td class="bg-transparent">
                  <i class="cc ETC me-1 text-primary fs-5" title="ETC"></i> 0.23125
                </td>
                <td class="bg-transparent">$1.23560 B</td>
                <td class="bg-transparent">04 Feb 2023</td>
                <td class="text-end rounded-end bg-transparent">
                  <span class="badge bg-danger">transfer</span>
                </td>
              </tr>
              <tr>
                <td colspan="6"></td>
              </tr>
              <tr class="bg-light">
                <td class="rounded-start bg-transparent">
                  <div class="d-flex align-items-center gap-3">
                    <div>
                      <i class="cc ETH fs-7"></i>
                    </div>
                    <div>
                      <h6 class="mb-0">Ethereum</h6>
                      <span class="fs-3">ETH</span>
                    </div>
                  </div>
                </td>
                <td class="bg-transparent"> $450.1254 <i class="ti ti-chevron-down text-danger ms-1 fs-4"></i>
                </td>
                <td class="bg-transparent">
                  <i class="cc ETC me-1 text-primary fs-5" title="ETC"></i> 0.45000
                </td>
                <td class="bg-transparent">$3.23560 B</td>
                <td class="bg-transparent">09 Mar 2023</td>
                <td class="text-end rounded-end bg-transparent">
                  <span class="badge bg-primary">sell</span>
                </td>
              </tr>
              <tr>
                <td colspan="6"></td>
              </tr>
              <tr class="bg-light">
                <td class="rounded-start bg-transparent">
                  <div class="d-flex align-items-center gap-3">
                    <div>
                      <i class="cc LTC fs-7"></i>
                    </div>
                    <div>
                      <h6 class="mb-0">Litecoin</h6>
                      <span class="fs-3">LTC</span>
                    </div>
                  </div>
                </td>
                <td class="bg-transparent"> $100.1254 <i class="ti ti-chevron-up text-success ms-1 fs-4"></i>
                </td>
                <td class="bg-transparent">
                  <i class="cc BTC me-1 text-danger fs-5" title="BTC"></i> 0.56012
                </td>
                <td class="bg-transparent">$2.45620 B</td>
                <td class="bg-transparent">12 Dec 2023</td>
                <td class="text-end rounded-end bg-transparent">
                  <span class="badge bg-success">buy</span>
                </td>
              </tr>
              <tr>
                <td colspan="6"></td>
              </tr>
              <tr class="bg-light">
                <td class="rounded-start bg-transparent">
                  <div class="d-flex align-items-center gap-3">
                    <div>
                      <i class="cc XRP fs-7"></i>
                    </div>
                    <div>
                      <h6 class="mb-0">XRP</h6>
                      <span class="fs-3">XRP</span>
                    </div>
                  </div>
                </td>
                <td class="bg-transparent"> $450.1254 <i class="ti ti-chevron-down text-danger ms-1 fs-4"></i>
                </td>
                <td class="bg-transparent">
                  <i class="cc ETC me-1 text-primary fs-5" title="ETC"></i> 0.45000
                </td>
                <td class="bg-transparent">$3.23560 B</td>
                <td class="bg-transparent">01 Aug 2023</td>
                <td class="text-end rounded-end bg-transparent">
                  <span class="badge bg-danger">transfer</span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
