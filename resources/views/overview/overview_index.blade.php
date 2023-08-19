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
           <img id="agent-status-img" style="max-width: 80px;" src="/icons/svg/10347 - Window Error.svg"/>
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
    <div class="card" style="padding: 31px 10px 31px 10px">
      <div class="container">
        <div class="row align-items-center " style="height: auto">
          <div class="col-md-4 text-center">
           <img style="max-width: 80px" src="/icons/custom/rafuguard_ai_engine.svg"/>
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
              <img src="/icons/custom/rafuguard_phishing_logo.svg" alt="chart success" class="rounded" style="max-width:  80px;">
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
      <div class="card">
        <div class="card-body">
          <div class="card-title  align-items-start justify-content-between">
            <div class="flex-shrink-0">
              <img src="/icons/custom/rafuguard_rafuguard_logo.svg" alt="chart success" class="rounded" style="max-width:  80px;">
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
      {{-- <div class="card" style="height: 27.70vh"> --}}
      <div class="card">
        <div class="card-body">
          <div class="card-title  align-items-start justify-content-between">
            <div class="flex-shrink-0">
              <img src="\icons\custom\rafuguard_scam guard.svg" alt="chart success" class="rounded" style="max-width:  80px;">
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
              <img src="\icons\custom\rafuguard_firewall.svg" alt="chart success" class="rounded" style="max-width:  80px;">
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
              <img src="\icons\custom\rafuguard_diskinfo.svg" alt="chart success" class="rounded" style="max-width:  80px;">
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
              <img src="\icons\custom\rafuguard_others security_logo.svg" alt="chart success" class="rounded" style="max-width:  80px;">
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
          <h5 class="m-0 me-2">Scan Statistics</h5>
          <small class="text-muted">42.82k Total Scans</small>
        </div>

      </div>
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <div class="d-flex flex-column align-items-center gap-1">
            <h2 id="total-file-count" class="mb-2">---</h2>
            <span>Total Files</span>
          </div>
          <div id="orderStatisticsChart"></div>
        </div>
        <ul class="p-0 m-0">
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-primary">
                {{-- <i class='bx bx-mobile-alt'></i></span> --}}
                <img width="32" src="/icons/custom/rafuguard_app.svg">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Application</h6>
                <small class="text-muted">exe,msi</small>
              </div>
              <div class="user-progress">
                <small class="fw-semibold" id="total-app-count">82.5k</small>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-warning">
                {{-- <i class='bx bx-error'></i> --}}
                <img src="/icons/custom/rafuguard_unknown.svg">
              </span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Fishy</h6>
                <small class="text-muted">Malware, Spyware,  Trojan</small>
              </div>
              <div class="user-progress">
                <small class="fw-semibold">23.8k</small>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-danger">
                {{-- <i class='bx bx-bug'></i> --}}
                <img src="/icons/custom/rafuguard_warn.svg">
              </span>
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
        <div class="card-title mb-0">
          <h5 class="m-0 me-2">Scan Statistics</h5>
          <small class="text-muted">42.82k Total Scans</small>
        </div>
        {{-- <ul class="nav nav-pills" role="tablist">
          <li class="nav-item">
            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-tabs-line-card-income" aria-controls="navs-tabs-line-card-income" aria-selected="true">Income</button>
          </li>
          <li class="nav-item">
            <button type="button" class="nav-link" role="tab">Expenses</button>
          </li>
          <li class="nav-item">
            <button type="button" class="nav-link" role="tab">Profit</button>
          </li>
        </ul> --}}
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
        <h5 class="card-title m-0 me-2">Vendors</h5>
{{--         <div class="dropdown">
          <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-dots-vertical-rounded"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
          </div>
        </div> --}}
      </div>
      <div class="card-body">
        <ul class="p-0 m-0">
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <img src="https://rafusoft.com//assets/frontend/img/favicon/apple-icon-57x57.png" alt="User" class="rounded">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Rafusoft Vault</h6>
                <small class="text-muted d-block mb-1">Malware Analysis</small>
               
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <h6 class="mb-0">+82</h6> <span class="text-muted">★</span>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <img src="https://www.virustotal.com/gui/images/manifest/icon-192x192.png" alt="User" class="rounded">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Virus Total</h6>
                <small class="text-muted d-block mb-1">Threat Intelligence</small>

              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <h6 class="mb-0">+80</h6> <span class="text-muted">★</span>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <img src="https://seeklogo.com/images/T/talos-logo-ACBB21661C-seeklogo.com.png" alt="User" class="rounded">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">CISCO TALOS</h6>
                <small class="text-muted d-block mb-1">Threat Intelligence</small>

              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <h6 class="mb-0">+75</h6> <span class="text-muted">★</span>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <img src="https://threatconnect.com/apple-touch-icon.png" alt="User" class="rounded">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">ThreatConnect</h6>
                <small class="text-muted d-block mb-1">Threat Intelligence</small>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <h6 class="mb-0">+70</h6> <span class="text-muted">★</span>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <img src="https://www.paloaltonetworks.com/etc/clientlibs/pan/img/favicons2020/android-chrome-192x192.png" alt="User" class="rounded">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Palo Alto Network</h6>
                <small class="text-muted d-block mb-1">Threat Intelligence</small>

              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <h6 class="mb-0">+80</h6> <span class="text-muted">★</span>
              </div>
            </div>
          </li>
          <li class="d-flex">
            <div class="avatar flex-shrink-0 me-3">
              <img src="https://mc-e5b0d581-4409-4340-bc8b-9266-cdn-endpoint.azureedge.net/-/media/project/nuernberg-messe/it-sa/itsa365/companies/c/crowdstrike-gmbh/2211880.png?rev=eb05f1d0afc148f38f27749ce6cc47c5" alt="User" class="rounded">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small class="text-muted d-block mb-1">Threat Intelligence</small>
                <h6 class="mb-0">CrowdStrike</h6>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <h6 class="mb-0">+65</h6> <span class="text-muted">★</span>
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
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script> --}}
@endsection