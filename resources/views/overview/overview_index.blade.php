@extends('layouts/contentNavbarLayout')

@section('title', 'Dashboard - Analytics')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}">
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/dashboards-analytics.js')}}"></script>
@endsection

@section('content')

<style>
  .btn-toggle {
     margin: 0 4rem;
     padding: 0;
     position: relative;
     border: none;
     height: 1.5rem;
     width: 3rem;
     border-radius: 1.5rem;
     color: #6b7381;
     background: #f25532;
  }
   .btn-toggle:focus, .btn-toggle:focus.active, .btn-toggle.focus, .btn-toggle.focus.active {
     outline: none;
  }
   .btn-toggle:before, .btn-toggle:after {
     line-height: 1.5rem;
     width: 4rem;
     text-align: center;
     font-weight: 600;
     font-size: 0.75rem;
     text-transform: uppercase;
     letter-spacing: 2px;
     position: absolute;
     bottom: 0;
     transition: opacity 0.25s;
  }
   .btn-toggle:before {
     content: "Off";
     left: -4rem;
  }
   .btn-toggle:after {
     content: "On";
     right: -4rem;
     opacity: 0.5;
  }
   .btn-toggle > .handle {
     position: absolute;
     top: 0.1875rem;
     left: 0.1875rem;
     width: 1.125rem;
     height: 1.125rem;
     border-radius: 1.125rem;
     background: #fff;
     transition: left 0.25s;
  }
   .btn-toggle.active {
     transition: background-color 0.25s;
  }
   .btn-toggle.active > .handle {
     left: 1.6875rem;
     transition: left 0.25s;
  }
   .btn-toggle.active:before {
     opacity: 0.5;
  }
   .btn-toggle.active:after {
     opacity: 1;
  }
   .btn-toggle.btn-sm:before, .btn-toggle.btn-sm:after {
     line-height: -0.5rem;
     color: #fff;
     letter-spacing: 0.75px;
     left: 0.4125rem;
     width: 2.325rem;
  }
   .btn-toggle.btn-sm:before {
     text-align: right;
  }
   .btn-toggle.btn-sm:after {
     text-align: left;
     opacity: 0;
  }
   .btn-toggle.btn-sm.active:before {
     opacity: 0;
  }
   .btn-toggle.btn-sm.active:after {
     opacity: 1;
  }
   .btn-toggle.btn-xs:before, .btn-toggle.btn-xs:after {
     display: none;
  }
   .btn-toggle:before, .btn-toggle:after {
     color: #6b7381;
  }
   .btn-toggle.active {
     background-color: #6bc85a;
  }
   .btn-toggle.btn-lg {
     margin: 0 5rem;
     padding: 0;
     position: relative;
     border: none;
     height: 2.5rem;
     width: 5rem;
     border-radius: 2.5rem;
  }
   .btn-toggle.btn-lg:focus, .btn-toggle.btn-lg:focus.active, .btn-toggle.btn-lg.focus, .btn-toggle.btn-lg.focus.active {
     outline: none;
  }
   .btn-toggle.btn-lg:before, .btn-toggle.btn-lg:after {
     line-height: 2.5rem;
     width: 5rem;
     text-align: center;
     font-weight: 600;
     font-size: 1rem;
     text-transform: uppercase;
     letter-spacing: 2px;
     position: absolute;
     bottom: 0;
     transition: opacity 0.25s;
  }
   .btn-toggle.btn-lg:before {
     content: "Off";
     left: -5rem;
  }
   .btn-toggle.btn-lg:after {
     content: "On";
     right: -5rem;
     opacity: 0.5;
  }
   .btn-toggle.btn-lg > .handle {
     position: absolute;
     top: 0.3125rem;
     left: 0.3125rem;
     width: 1.875rem;
     height: 1.875rem;
     border-radius: 1.875rem;
     background: #fff;
     transition: left 0.25s;
  }
   .btn-toggle.btn-lg.active {
     transition: background-color 0.25s;
  }
   .btn-toggle.btn-lg.active > .handle {
     left: 2.8125rem;
     transition: left 0.25s;
  }
   .btn-toggle.btn-lg.active:before {
     opacity: 0.5;
  }
   .btn-toggle.btn-lg.active:after {
     opacity: 1;
  }
   .btn-toggle.btn-lg.btn-sm:before, .btn-toggle.btn-lg.btn-sm:after {
     line-height: 0.5rem;
     color: #fff;
     letter-spacing: 0.75px;
     left: 0.6875rem;
     width: 3.875rem;
  }
   .btn-toggle.btn-lg.btn-sm:before {
     text-align: right;
  }
   .btn-toggle.btn-lg.btn-sm:after {
     text-align: left;
     opacity: 0;
  }
   .btn-toggle.btn-lg.btn-sm.active:before {
     opacity: 0;
  }
   .btn-toggle.btn-lg.btn-sm.active:after {
     opacity: 1;
  }
   .btn-toggle.btn-lg.btn-xs:before, .btn-toggle.btn-lg.btn-xs:after {
     display: none;
  }
   .btn-toggle.btn-sm {
     margin: 0 0.5rem;
     padding: 0;
     position: relative;
     border: none;
     height: 1.5rem;
     width: 3rem;
     border-radius: 1.5rem;
  }
   .btn-toggle.btn-sm:focus, .btn-toggle.btn-sm:focus.active, .btn-toggle.btn-sm.focus, .btn-toggle.btn-sm.focus.active {
     outline: none;
  }
   .btn-toggle.btn-sm:before, .btn-toggle.btn-sm:after {
     line-height: 1.5rem;
     width: 0.5rem;
     text-align: center;
     font-weight: 600;
     font-size: 0.55rem;
     text-transform: uppercase;
     letter-spacing: 2px;
     position: absolute;
     bottom: 0;
     transition: opacity 0.25s;
  }
   .btn-toggle.btn-sm:before {
     content: "Off";
     left: -0.5rem;
  }
   .btn-toggle.btn-sm:after {
     content: "On";
     right: -0.5rem;
     opacity: 0.5;
  }
   .btn-toggle.btn-sm > .handle {
     position: absolute;
     top: 0.1875rem;
     left: 0.1875rem;
     width: 1.125rem;
     height: 1.125rem;
     border-radius: 1.125rem;
     background: #fff;
     transition: left 0.25s;
  }
   .btn-toggle.btn-sm.active {
     transition: background-color 0.25s;
  }
   .btn-toggle.btn-sm.active > .handle {
     left: 1.6875rem;
     transition: left 0.25s;
  }
   .btn-toggle.btn-sm.active:before {
     opacity: 0.5;
  }
   .btn-toggle.btn-sm.active:after {
     opacity: 1;
  }
   .btn-toggle.btn-sm.btn-sm:before, .btn-toggle.btn-sm.btn-sm:after {
     line-height: -0.5rem;
     color: #fff;
     letter-spacing: 0.75px;
     left: 0.4125rem;
     width: 2.325rem;
  }
   .btn-toggle.btn-sm.btn-sm:before {
     text-align: right;
  }
   .btn-toggle.btn-sm.btn-sm:after {
     text-align: left;
     opacity: 0;
  }
   .btn-toggle.btn-sm.btn-sm.active:before {
     opacity: 0;
  }
   .btn-toggle.btn-sm.btn-sm.active:after {
     opacity: 1;
  }
   .btn-toggle.btn-sm.btn-xs:before, .btn-toggle.btn-sm.btn-xs:after {
     display: none;
  }
   .btn-toggle.btn-xs {
     margin: 0 0;
     padding: 0;
     position: relative;
     border: none;
     height: 1rem;
     width: 2rem;
     border-radius: 1rem;
  }
   .btn-toggle.btn-xs:focus, .btn-toggle.btn-xs:focus.active, .btn-toggle.btn-xs.focus, .btn-toggle.btn-xs.focus.active {
     outline: none;
  }
   .btn-toggle.btn-xs:before, .btn-toggle.btn-xs:after {
     line-height: 1rem;
     width: 0;
     text-align: center;
     font-weight: 600;
     font-size: 0.75rem;
     text-transform: uppercase;
     letter-spacing: 2px;
     position: absolute;
     bottom: 0;
     transition: opacity 0.25s;
  }
   .btn-toggle.btn-xs:before {
     content: "Off";
     left: 0;
  }
   .btn-toggle.btn-xs:after {
     content: "On";
     right: 0;
     opacity: 0.5;
  }
   .btn-toggle.btn-xs > .handle {
     position: absolute;
     top: 0.125rem;
     left: 0.125rem;
     width: 0.75rem;
     height: 0.75rem;
     border-radius: 0.75rem;
     background: #fff;
     transition: left 0.25s;
  }
   .btn-toggle.btn-xs.active {
     transition: background-color 0.25s;
  }
   .btn-toggle.btn-xs.active > .handle {
     left: 1.125rem;
     transition: left 0.25s;
  }
   .btn-toggle.btn-xs.active:before {
     opacity: 0.5;
  }
   .btn-toggle.btn-xs.active:after {
     opacity: 1;
  }
   .btn-toggle.btn-xs.btn-sm:before, .btn-toggle.btn-xs.btn-sm:after {
     line-height: -1rem;
     color: #fff;
     letter-spacing: 0.75px;
     left: 0.275rem;
     width: 1.55rem;
  }
   .btn-toggle.btn-xs.btn-sm:before {
     text-align: right;
  }
   .btn-toggle.btn-xs.btn-sm:after {
     text-align: left;
     opacity: 0;
  }
   .btn-toggle.btn-xs.btn-sm.active:before {
     opacity: 0;
  }
   .btn-toggle.btn-xs.btn-sm.active:after {
     opacity: 1;
  }
   .btn-toggle.btn-xs.btn-xs:before, .btn-toggle.btn-xs.btn-xs:after {
     display: none;
  }
   .btn-toggle.btn-secondary {
     color: #6b7381;
     background: #f25532;
  }
   .btn-toggle.btn-secondary:before, .btn-toggle.btn-secondary:after {
     color: #6b7381;
  }
   .btn-toggle.btn-secondary.active {
     background-color: #ff8300;
  }
   
    </style>
  
<div class="row">
  <div class="col-lg-8 mb-4 order-0">
    <div class="card p-4" style="background-color: #535353;">
      <div class="container">
        <div class="row align-items-center" style="height:auto">
          <div class="col-md-2 text-center">
           <img style="max-width: 80px;" src="/icons/flat/128 x 128/10347 - Window Error.png"/>
            {{-- <img src="https://placehold.co/600x400"  alt="Your Image" style="max-width: 80px;"> --}}
          </div>
          <div class="col-md-10 text-center">
            <h3 class="text-white">Agent is not found!</h3>
            
          </div>
        </div>
      </div>
      
    </div>
  </div>
  <div class="col-lg-4 col-md-4 order-1">
    <div class="card p-4" style="background-color: #535353;">
      <div class="container">
        <div class="row align-items-center" style="height: auto">
          <div class="col-md-4 text-center">
          <img style="max-width: 80px;" src="data:image/png;base64,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"/>
            {{-- <img src="https://placehold.co/600x400"  alt="Your Image" style="max-width: 80px;"> --}}
          </div>
          <div class="col-md-8 text-center">
            <h3 class="text-white">AI Engine</h3>
            <button style=" float: right; " type="button" class="btn btn-toggle btn-sm active text-right" data-toggle="button" aria-pressed="true" autocomplete="off">
              <div class="handle"></div>
            </button>
          </div>
        </div>
      </div>
      
    </div>
  </div>


</div>

<div class="row">
    <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
      <div class="card" style="background-color: #535353;">
        <div class="card-body">
          <div class="card-title d-flex align-items-start justify-content-between">
            <div class="flex-shrink-0">
              <img src="\icons\flat\128 x 128\10315 - Antivirus.png" alt="chart success" class="rounded" style="max-width:  80px;">
            </div>
{{--             <div class="dropdown">
              <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
              </div>
            </div> --}}
          </div>
          <span class="fs-4 fw-semibold d-block mb-1 text-white">Phishing Security</span>
          <div style="display: flex">
            <div style="flex: 80%;">
              <h3 class="card-title mb-2 text-white fs-5">Shielding from latest phishing technique</h3>
            </div>
            <div style="flex: 20%;">
              <button style=" float: right; " type="button" class="btn btn-toggle btn-sm active text-right" data-toggle="button" aria-pressed="true" autocomplete="off">
                <div class="handle"></div>
              </button>
            </div>
          </div>
         
          {{-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small> --}}
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
      <div class="card" style="background-color: #535353;">
        <div class="card-body">
          <div class="card-title d-flex align-items-start justify-content-between">
            <div class="flex-shrink-0">
              <img src="/icons/flat/128 x 128/10340 - Computer Security.png" alt="chart success" class="rounded" style="max-width:  80px;">
            </div>
{{--             <div class="dropdown">
              <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
              </div>
            </div> --}}
          </div>
          <span class="fs-4 fw-semibold d-block mb-1 text-white">PC Protection</span>
          <div style="display: flex">
            <div style="flex: 80%;">
              <h3 class="card-title mb-2 text-white fs-5">Malware and Harmful Objects Protection</h3>
            </div>
            <div style="flex: 20%;">
              <button style=" float: right; " type="button" class="btn btn-toggle btn-sm active text-right" data-toggle="button" aria-pressed="true" autocomplete="off">
                <div class="handle"></div>
              </button>
            </div>
          </div>
         
          {{-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small> --}}
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
      <div class="card" style="background-color: #535353;">
        <div class="card-body">
          <div class="card-title d-flex align-items-start justify-content-between">
            <div class="flex-shrink-0">
              <img src="\icons\flat\128 x 128\10345 - Phishing.png" alt="chart success" class="rounded" style="max-width:  80px;">
            </div>
{{--             <div class="dropdown">
              <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
              </div>
            </div> --}}
          </div>
          <span class="fs-4 fw-semibold d-block mb-1 text-white">Scam Shield</span>
          <div style="display: flex">
            <div style="flex: 80%;">
              <h3 class="card-title mb-2 text-white fs-5">ScamShield: Strong Anti-Fraud Protection</h3>
            </div>
            <div style="flex: 20%;">
              <button style=" float: right; " type="button" class="btn btn-toggle btn-sm active text-right" data-toggle="button" aria-pressed="true" autocomplete="off">
                <div class="handle"></div>
              </button>
            </div>
          </div>
         
          {{-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small> --}}
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
      <div class="card" style="background-color: #535353;">
        <div class="card-body">
          <div class="card-title d-flex align-items-start justify-content-between">
            <div class="flex-shrink-0">
              <img src="\icons\flat\128 x 128\10324 - Firewall.png" alt="chart success" class="rounded" style="max-width:  80px;">
            </div>
{{--             <div class="dropdown">
              <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
              </div>
            </div> --}}
          </div>
          <span class="fs-4 fw-semibold d-block mb-1 text-white">Firewall Config</span>
          <div style="display: flex">
            <div style="flex: 80%;">
              <h3 class="card-title mb-2 text-white fs-5">Shielding from latest phishing technique</h3>
            </div>
            <div style="flex: 20%;">
              <button style=" float: right; " type="button" class="btn btn-toggle btn-sm active text-right" data-toggle="button" aria-pressed="true" autocomplete="off">
                <div class="handle"></div>
              </button>
            </div>
          </div>
         
          {{-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small> --}}
        </div>
      </div>
    </div>


    <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
      <div class="card" style="background-color: #535353;">
        <div class="card-body">
          <div class="card-title d-flex align-items-start justify-content-between">
            <div class="flex-shrink-0">
              <img src="\icons\flat\128 x 128\10340 - Computer Security.png" alt="chart success" class="rounded" style="max-width:  80px;">
            </div>
{{--             <div class="dropdown">
              <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
              </div>
            </div> --}}
          </div>
          <span class="fs-4 fw-semibold d-block mb-1 text-white">Disk Information</span>
          <div style="display: flex">
            <div style="flex: 80%;">
              <h3 class="card-title mb-2 text-white fs-5">Malware and Harmful Objects Protection</h3>
            </div>
            <div style="flex: 20%;">
              <button style=" float: right; " type="button" class="btn btn-toggle btn-sm active text-right" data-toggle="button" aria-pressed="true" autocomplete="off">
                <div class="handle"></div>
              </button>
            </div>
          </div>
         
          {{-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small> --}}
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
      <div class="card" style="background-color: #535353;">
        <div class="card-body">
          <div class="card-title d-flex align-items-start justify-content-between">
            <div class="flex-shrink-0">
              <img src="\icons\flat\128 x 128\10345 - Phishing.png" alt="chart success" class="rounded" style="max-width:  80px;">
            </div>
{{--             <div class="dropdown">
              <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
              </div>
            </div> --}}
          </div>
          <span class="fs-4 fw-semibold d-block mb-1 text-white">Other Security</span>
          <div style="display: flex">
            <div style="flex: 80%;">
              <h3 class="card-title mb-2 text-white fs-5">ScamShield: Strong Anti-Fraud Protection</h3>
            </div>
            <div style="flex: 20%;">
              <button style=" float: right; " type="button" class="btn btn-toggle btn-sm active text-right" data-toggle="button" aria-pressed="true" autocomplete="off">
                <div class="handle"></div>
              </button>
            </div>
          </div>
         
          {{-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small> --}}
        </div>
      </div>
    </div>




</div>


<div class="row">
  <!-- Order Statistics -->
  <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between pb-0">
        <div class="card-title mb-0">
          <h5 class="m-0 me-2">Order Statistics</h5>
          <small class="text-muted">42.82k Total Sales</small>
        </div>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="orederStatistics" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-dots-vertical-rounded"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <div class="d-flex flex-column align-items-center gap-1">
            <h2 class="mb-2">8,258</h2>
            <span>Total Orders</span>
          </div>
          <div id="orderStatisticsChart"></div>
        </div>
        <ul class="p-0 m-0">
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-primary"><i class='bx bx-mobile-alt'></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Electronic</h6>
                <small class="text-muted">Mobile, Earbuds, TV</small>
              </div>
              <div class="user-progress">
                <small class="fw-semibold">82.5k</small>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-success"><i class='bx bx-closet'></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Fashion</h6>
                <small class="text-muted">T-shirt, Jeans, Shoes</small>
              </div>
              <div class="user-progress">
                <small class="fw-semibold">23.8k</small>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-info"><i class='bx bx-home-alt'></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Decor</h6>
                <small class="text-muted">Fine Art, Dining</small>
              </div>
              <div class="user-progress">
                <small class="fw-semibold">849k</small>
              </div>
            </div>
          </li>
          <li class="d-flex">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-secondary"><i class='bx bx-football'></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Sports</h6>
                <small class="text-muted">Football, Cricket Kit</small>
              </div>
              <div class="user-progress">
                <small class="fw-semibold">99</small>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Order Statistics -->

  <!-- Expense Overview -->
  <div class="col-md-6 col-lg-4 order-1 mb-4">
    <div class="card h-100">
      <div class="card-header">
        <ul class="nav nav-pills" role="tablist">
          <li class="nav-item">
            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-tabs-line-card-income" aria-controls="navs-tabs-line-card-income" aria-selected="true">Income</button>
          </li>
          <li class="nav-item">
            <button type="button" class="nav-link" role="tab">Expenses</button>
          </li>
          <li class="nav-item">
            <button type="button" class="nav-link" role="tab">Profit</button>
          </li>
        </ul>
      </div>
      <div class="card-body px-0">
        <div class="tab-content p-0">
          <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel">
            <div class="d-flex p-4 pt-3">
              <div class="avatar flex-shrink-0 me-3">
                <img src="{{asset('assets/img/icons/unicons/wallet.png')}}" alt="User">
              </div>
              <div>
                <small class="text-muted d-block">Total Balance</small>
                <div class="d-flex align-items-center">
                  <h6 class="mb-0 me-1">$459.10</h6>
                  <small class="text-success fw-semibold">
                    <i class='bx bx-chevron-up'></i>
                    42.9%
                  </small>
                </div>
              </div>
            </div>
            <div id="incomeChart"></div>
            <div class="d-flex justify-content-center pt-4 gap-2">
              <div class="flex-shrink-0">
                <div id="expensesOfWeek"></div>
              </div>
              <div>
                <p class="mb-n1 mt-1">Expenses This Week</p>
                <small class="text-muted">$39 less than last week</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Expense Overview -->

  <!-- Transactions -->
  <div class="col-md-6 col-lg-4 order-2 mb-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Transactions</h5>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-dots-vertical-rounded"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <ul class="p-0 m-0">
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <img src="{{asset('assets/img/icons/unicons/paypal.png')}}" alt="User" class="rounded">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small class="text-muted d-block mb-1">Paypal</small>
                <h6 class="mb-0">Send money</h6>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <h6 class="mb-0">+82.6</h6> <span class="text-muted">USD</span>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <img src="{{asset('assets/img/icons/unicons/wallet.png')}}" alt="User" class="rounded">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small class="text-muted d-block mb-1">Wallet</small>
                <h6 class="mb-0">Mac'D</h6>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <h6 class="mb-0">+270.69</h6> <span class="text-muted">USD</span>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <img src="{{asset('assets/img/icons/unicons/chart.png')}}" alt="User" class="rounded">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small class="text-muted d-block mb-1">Transfer</small>
                <h6 class="mb-0">Refund</h6>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <h6 class="mb-0">+637.91</h6> <span class="text-muted">USD</span>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <img src="{{asset('assets/img/icons/unicons/cc-success.png')}}" alt="User" class="rounded">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small class="text-muted d-block mb-1">Credit Card</small>
                <h6 class="mb-0">Ordered Food</h6>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <h6 class="mb-0">-838.71</h6> <span class="text-muted">USD</span>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <img src="{{asset('assets/img/icons/unicons/wallet.png')}}" alt="User" class="rounded">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small class="text-muted d-block mb-1">Wallet</small>
                <h6 class="mb-0">Starbucks</h6>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <h6 class="mb-0">+203.33</h6> <span class="text-muted">USD</span>
              </div>
            </div>
          </li>
          <li class="d-flex">
            <div class="avatar flex-shrink-0 me-3">
              <img src="{{asset('assets/img/icons/unicons/cc-warning.png')}}" alt="User" class="rounded">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small class="text-muted d-block mb-1">Mastercard</small>
                <h6 class="mb-0">Ordered Food</h6>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <h6 class="mb-0">-92.45</h6> <span class="text-muted">USD</span>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Transactions -->
</div>
@endsection

@section('customScript')
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
@endsection