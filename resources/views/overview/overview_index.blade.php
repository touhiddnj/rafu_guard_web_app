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
    <div class="card p-4" >
      <div class="container">
        <div class="row align-items-center" style="height:auto">
          <div class="col-md-2 text-center">
           <img style="max-width: 80px;" src="/icons/svg/10347 - Window Error.svg"/>
            {{-- <img src="https://placehold.co/600x400"  alt="Your Image" style="max-width: 80px;"> --}}
          </div>
          <div class="col-md-10 text-center mt-3">
            <h3 id="agent-status" class="">Agent is not found!</h3>
            
          </div>
        </div>
      </div>
      
    </div>
  </div>
  <div class="col-lg-4 col-md-4 order-1">
    <div class="card p-4" >
      <div class="container">
        <div class="row align-items-center" style="height: auto">
          <div class="col-md-4 text-center">
           <img style="max-width: 80px" src="data:image/png;base64,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"/>
            {{-- <img src="https://placehold.co/600x400"  alt="Your Image" style="max-width: 80px;"> --}}
          </div>
          <div class="col-md-8 text-center">
            <div style="display: flex; flex-direction: row; margin-top: 20px;">
              <div style="flex: 80%; "> <!-- First column with 80% width -->
                  <!-- Content for the first column -->
                  <h3 class="" style="">AI Engine</h3>
              </div>
              <div style="flex: 20%; "> <!-- Second column with 20% width -->
                  <!-- Content for the second column -->
                  <button style=" float: right; margin-right: -20px; margin-top: 3px;" type="button" class="btn btn-toggle btn-sm active text-right" data-toggle="button" aria-pressed="true" autocomplete="off">
                    <div class="handle"></div>
                  </button>
              </div>
          </div>
            <div class="col-xs-8">
             
            </div>
            <div class="col-xs-4">

            </div>
          
          </div>
        </div>
      </div>
      
    </div>
  </div>


</div>

<div class="row">
    <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
      <div class="card" >
        <div class="card-body">
          <div class="card-title  align-items-start justify-content-between">
            <div class="flex-shrink-0">
              <img src="/icons/svg/10315 - Antivirus.svg" alt="chart success" class="rounded" style="max-width:  80px;">
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
          <span class="fs-4 fw-semibold d-block mb-1 ">Phishing Security</span>
          <div style="display: flex">
            <div style="flex: 80%;">
              <h3 class="card-title mb-2  fs-5">Shielding from latest phishing technique</h3>
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
      <div class="card" >
        <div class="card-body">
          <div class="card-title  align-items-start justify-content-between">
            <div class="flex-shrink-0">
              <img src="/icons/svg/10340 - Computer Security.svg" alt="chart success" class="rounded" style="max-width:  80px;">
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
          <span class="fs-4 fw-semibold d-block mb-1 ">PC Protection</span>
          <div style="display: flex">
            <div style="flex: 80%;">
              <h3 class="card-title mb-2  fs-5">Malware and Harmful Objects Protection</h3>
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
      <div class="card" >
        <div class="card-body">
          <div class="card-title  align-items-start justify-content-between">
            <div class="flex-shrink-0">
              <img src="\icons\svg\10345 - Phishing.svg" alt="chart success" class="rounded" style="max-width:  80px;">
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
          <span class="fs-4 fw-semibold d-block mb-1 ">Scam Shield</span>
          <div style="display: flex">
            <div style="flex: 80%;">
              <h3 class="card-title mb-2  fs-5">ScamShield: Strong Anti-Fraud Protection</h3>
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
      <div class="card" >
        <div class="card-body">
          <div class="card-title  align-items-start justify-content-between">
            <div class="flex-shrink-0">
              <img src="\icons\svg\10324 - Firewall.svg" alt="chart success" class="rounded" style="max-width:  80px;">
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
          <span class="fs-4 fw-semibold d-block mb-1 ">Firewall Config</span>
          <div style="display: flex">
            <div style="flex: 80%;">
              <h3 class="card-title mb-2  fs-5">Shielding from latest phishing technique</h3>
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
      <div class="card" >
        <div class="card-body">
          <div class="card-title  align-items-start justify-content-between">
            <div class="flex-shrink-0">
              <img src="\icons\svg\10340 - Computer Security.svg" alt="chart success" class="rounded" style="max-width:  80px;">
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
          <span class="fs-4 fw-semibold d-block mb-1 ">Disk Information</span>
          <div style="display: flex">
            <div style="flex: 80%;">
              <h3 class="card-title mb-2  fs-5">Malware and Harmful Objects Protection</h3>
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
      <div class="card" >
        <div class="card-body">
          <div class="card-title align-items-start justify-content-between">
            <div class="flex-shrink-0">
              <img src="\icons\svg\10345 - Phishing.svg" alt="chart success" class="rounded" style="max-width:  80px;">
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
          <span class="fs-4 fw-semibold d-block mb-1 ">Other Security</span>
          <div style="display: flex">
            <div style="flex: 80%;">
              <h3 class="card-title mb-2  fs-5">ScamShield: Strong Anti-Fraud Protection</h3>
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
      <div class="card-header align-items-center justify-content-between pb-0">
        <div class="card-title mb-0">
          <h5 class="m-0 me-2">Scans Statistics</h5>
          <small class="text-muted">42.82k Total Scans</small>
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
            <span>Total Files</span>
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
                <h6 class="mb-0">Application</h6>
                <small class="text-muted">exe,msi</small>
              </div>
              <div class="user-progress">
                <small class="fw-semibold">82.5k</small>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-warning"><i class='bx bx-error'></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">All Infections</h6>
                <small class="text-muted">Malware, Spyware,  Trojan</small>
              </div>
              <div class="user-progress">
                <small class="fw-semibold">23.8k</small>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-danger"><i class='bx bx-bug'></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Malicious Scan</h6>
                <small class="text-muted">Unknown vendor, Riskware</small>
              </div>
              <div class="user-progress">
                <small class="fw-semibold">849k</small>
              </div>
            </div>
          </li>
{{--           <li class="d-flex">
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
          </li> --}}
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