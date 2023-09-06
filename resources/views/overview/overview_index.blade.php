@extends('layouts/contentNavbarLayout')

@section('title', 'Overview')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}">
@endsection

@section('vendor-script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
{{-- <script src="{{asset('assets/vendor/libs/moment.min.js')}}"></script> --}}
{{-- <script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script> --}}
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


  .box .apexcharts-xaxistooltip {
  background: #fff;
  color: #000;
}

.content-area {
  max-width: 1280px;
  margin: 0 auto;
}

.box {
  /* background-color: #262D47; */
  padding: 0px 15px; 
  border-radius: 4px; 
}

.columnbox {
  padding-right: 15px;
}
.radialbox {
  max-height: 333px;
  margin-bottom: 60px;
}

.apexcharts-legend-series tspan:nth-child(3) {
  font-weight: bold;
  font-size: 20px;
}

.edit-on-codepen {
  text-align: right;
  width: 100%;
  padding: 0 20px 40px;
  position: relative;
  top: -30px;
  cursor: pointer;
}
   
    </style>
  
<div class="row">
  <div class="col-lg-6 mb-4 order-0">
    <div class="card p-4" >
      <div class="container">
        <div class="row align-items-center" style="height:auto">
          <div class="col-md-2 text-center">
           <img id="agent-status-img" style="max-width: 80px;" src="/icons/custom/rafuguard_Agent_deactive_logo.svg"/>
            {{-- <img src="https://placehold.co/600x400"  alt="Your Image" style="max-width: 80px;"> --}}
          </div>
          <div class="col-md-10 text-center mt-3">
            <h3 style="color: #ff0000" id="agent-status" class="">Agent is not found!</h3>
            <div id="agent-version"></div>
            {{-- <a target="_blank" href="Installer.msi">Download Agent</a> --}}
          </div>
        </div>
      </div>
      
    </div>
  </div>

  <div class="col-lg-6 mb-4 order-0">
    <div class="card p-4" >
      <div class="container">
        <div class="row align-items-center" style="height:auto">
          <div class="col-md-2 text-center">
           <img id="agent-status-img" style="max-width: 80px;" src="/icons/custom/rafuguard_Agent_deactive_logo.svg"/>
            {{-- <img src="https://placehold.co/600x400"  alt="Your Image" style="max-width: 80px;"> --}}
          </div>
          <div class="col-md-10 text-center mt-3">
            <h3 style="color: #ff0000" id="ext-status" class="">Extension not found!</h3>
            <div id="agent-version"></div>
            {{-- <a target="_blank" href="Installer.msi">Download Agent</a> --}}
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
              <button style=" float: right; " type="button" class="btn btn-toggle btn-sm text-right ext-depend" data-toggle="button" aria-pressed="false" autocomplete="off">
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
              <button style=" float: right; " type="button" class="btn btn-toggle btn-sm  text-right agent-depend" data-toggle="button" aria-pressed="false" autocomplete="off">
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
              <button style=" float: right; " type="button" class="btn btn-toggle btn-sm text-right ext-depend" data-toggle="button" aria-pressed="false" autocomplete="off">
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
              <button style=" float: right; " type="button" class="btn btn-toggle btn-sm text-right agent-depend" data-toggle="button" aria-pressed="false" autocomplete="off">
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
              <h3 class="card-title mb-2  fs-5">Disk information with visualization</h3>
            </div>
            <div style="flex: 20%;">
              <button style=" float: right; " type="button" class="btn btn-toggle btn-sm  text-right agent-depend" data-toggle="button" aria-pressed="false" autocomplete="off">
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
              <img src="\icons\custom\rafuguard_ai_engine.svg" alt="chart success" class="rounded" style="max-width:  80px; max-height: 60px;">
            </div>

          </div>
          <span class="fs-4 fw-semibold d-block mb-1 ">AI + CLAM Engine</span>
          <div style="display: flex">
            <div style="flex: 80%;">
              <h3 class="card-title mb-2  fs-5">Complex engine combination.</h3>
            </div>
            <div style="flex: 20%;">
              <button style=" float: right; " type="button" class="btn btn-toggle btn-sm  text-right agent-depend" data-toggle="button" aria-pressed="false" autocomplete="off">
                <div class="handle"></div>
              </button>
            </div>
          </div>
         
         
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
          {{-- <small class="text-muted">42.82k Total Scans</small> --}}
        </div>

      </div>
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <div class="d-flex flex-column align-items-center gap-1">
            <h2 id="total-file-count" class="mb-2">---</h2>
            <span>Total Files</span>
          </div>
          <div id="fileStatisticsChart"></div>
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
                <small class="text-muted">Exe, Msi, Etc</small>
              </div>
              <div class="user-progress">
                <small class="fw-semibold" id="total-app-count">---</small>
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
                <h6 class="mb-0">Phishy</h6>
                <small class="text-muted">Malware, Spyware, Etc</small>
              </div>
              <div class="user-progress">
                <small id="total-phishy" class="fw-semibold">---</small>
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
                <h6 class="mb-0">Malicious</h6>
                <small class="text-muted">Unknown, Riskware, Etc</small>
              </div>
              <div class="user-progress">
                <small id="total-malicious" class="fw-semibold">---</small>
              </div>
            </div>
          </li>

                   <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-danger">
                {{-- <i class='bx bx-bug'></i> --}}
                <img src="/icons/custom/rafuguard_ok.svg">
              </span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Other</h6>
                <small class="text-muted">Files consider as safe</small>
              </div>
              <div class="user-progress">
                <small id="other-files" class="fw-semibold">---</small>
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
          <h5 class="m-0 me-2">App Analysis</h5>
          {{-- <small class="text-muted">42.82k Total Scans</small> --}}
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

            <div class="box">
              <div id="linechart"> </div>
            </div>
            {{-- <div id="incomeChart"></div> --}}

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
                <h6 title="Connected" class="mb-0"><i class="bx bxs-check-circle text-success"></i></h6> 
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
                <h6 title="Connected" class="mb-0"><i class="bx bxs-check-circle text-success"></i></h6> 
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
                <h6 title="Connected" class="mb-0"><i class="bx bxs-check-circle text-success"></i></h6> 
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
                <h6 title="Connected" class="mb-0"><i class="bx bxs-check-circle text-success"></i></h6> 
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
                <h6 title="Connected" class="mb-0"><i class="bx bxs-check-circle text-success"></i></h6> 
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
                <h6 title="Connected" class="mb-0"><i class="bx bxs-check-circle text-success"></i></h6> 
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Transactions -->
</div>


{{-- 
<div id="wrapper">

  <div class="content-area">
    <div class="container-fluid">
      <div class="main">

        
        <div class="row mt-4">
          <div class="col-md-5">

          </div>
          <div class="col-md-7">
              <div class="box  mt-4">
                <div id="linechart"> </div>
              </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-5">
              <div class="box radialbox mt-4">
                  <div id="circlechart"> </div>
                </div>
          </div>
          <div class="col-md-7">
              <div class="box mt-4">
                <div class="mt-4">
                  <div id="progress1"></div>
                </div>
                <div class="mt-4">
                  <div id="progress2"></div>
                </div>
                <div class="mt-4">
                  <div id="progress3"></div>
                </div>
              </div>
          </div>
        </div>

        <div class="row">
          <div class="float-right edit-on-codepen">
            
          </div>
        </div>
      </div>

    </div>
  </div>
</div> --}}

@endsection

@section('customScript')
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
<script>

(function () {

});
    let cardColor, headingColor, axisColor, shadeColor, borderColor;

cardColor = config.colors.white;
headingColor = config.colors.headingColor;
axisColor = config.colors.axisColor;
borderColor = config.colors.borderColor;
   // Order Statistics Chart
  // --------------------------------------------------------------------
  var fileStatisticsChart = document.querySelector('#fileStatisticsChart'),
    fileChartConfig = {
      chart: {
        height: 165,
        width: 130,
        type: 'donut'
      },
      labels: ['Application', 'Phishy', 'Malicious','Other'],
      series: [0, 0, 0,0],
      colors: [config.colors.primary, config.colors.secondary, '#0b4a6b', '#757575'],
      stroke: {
        width: 5,
        colors: cardColor
      },
      dataLabels: {
        enabled: false,
        formatter: function (val, opt) {
          return parseInt(val) + '%';
        }
      },
      legend: {
        show: false
      },
      grid: {
        padding: {
          top: 0,
          bottom: 0,
          right: 15
        }
      },
      plotOptions: {
        pie: {
          donut: {
            size: '75%',
            labels: {
              show: true,
              value: {
                fontSize: '1.5rem',
                fontFamily: 'Public Sans',
                color: headingColor,
                offsetY: -15,
                formatter: function (val) {
                  return parseInt(val) + '%';
                }
              },
              name: {
                offsetY: 20,
                fontFamily: 'Public Sans'
              },
              total: {
                show: true,
                fontSize: '0.8125rem',
                color: axisColor,
                label: 'Loading',
                formatter: function (w) {
                  return '0%';
                }
              }
            }
          }
        }
      }
    };
    var statisticsChart2 = null;;
  if (typeof fileStatisticsChart !== undefined && fileStatisticsChart !== null) {
     statisticsChart2 = new ApexCharts(fileStatisticsChart, fileChartConfig);
    statisticsChart2.render();
  }

  /* fileStatisticsChart end */





  window.Apex = {
  chart: {
    foreColor: "#000",
    toolbar: {
      show: false
    }
  },
  colors: ["#FCCF31", "#17ead9", "#f02fc2"],
  stroke: {
    width: 3
  },
  dataLabels: {
    enabled: false
  },
  grid: {
    borderColor: "#40475D"
  },
  xaxis: {
    axisTicks: {
      color: "#333"
    },
    axisBorder: {
      color: "#333"
    }
  },
  fill: {
    type: "gradient",
    gradient: {
      gradientToColors: ["#F55555", "#6078ea", "#6094ea"]
    }
  },
  tooltip: {
    theme: "light",
    x: {
      formatter: function (val) {
        return moment(new Date(val)).format("HH:mm:ss");
      }
    }
  },
  yaxis: {
    decimalsInFloat: 2,
    opposite: true,
    labels: {
      offsetX: -10
    }
  }
};

var trigoStrength = 3;
var iteration = 11;

function getRandom() {
  var i = iteration;
  return (
    (Math.sin(i / trigoStrength) * (i / trigoStrength) +
      i / trigoStrength +
      1) *
    (trigoStrength * 2)
  );
}

function getRangeRandom(yrange) {
  return Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;
}

function generateMinuteWiseTimeSeries(baseval, count, yrange) {
  var i = 0;
  var series = [];
  while (i < count) {
    var x = baseval;
    var y =
      (Math.sin(i / trigoStrength) * (i / trigoStrength) +
        i / trigoStrength +
        1) *
      (trigoStrength * 2);

    series.push([x, y]);
    baseval += 300000;
    i++;
  }
  return series;
}

function getNewData(baseval, yrange) {
  var newTime = baseval + 300000;
  return {
    x: newTime,
    y: Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min
  };
}

var optionsColumn = {
  chart: {
    height: 350,
    type: "bar",
    animations: {
      enabled: false
    },
    events: {
      animationEnd: function (chartCtx) {
        const newData = chartCtx.w.config.series[0].data.slice();
        newData.shift();
        window.setTimeout(function () {
          chartCtx.updateOptions(
            {
              series: [
                {
                  data: newData
                }
              ],
              xaxis: {
                min: chartCtx.minX,
                max: chartCtx.maxX
              },
              subtitle: {
                text:
                  parseInt(getRangeRandom({ min: 1, max: 20 })).toString() + "%"
              }
            },
            false,
            false
          );
        }, 300);
      }
    },
    toolbar: {
      show: false
    },
    zoom: {
      enabled: false
    }
  },
  dataLabels: {
    enabled: false
  },
  stroke: {
    width: 0
  },
  series: [
    {
      name: "Load Average",
      data: generateMinuteWiseTimeSeries(
        new Date("12/12/2016 00:20:00").getTime(),
        12,
        {
          min: 10,
          max: 110
        }
      )
    }
  ],
  title: {
    text: "Load Average",
    align: "left",
    style: {
      fontSize: "12px"
    }
  },
  subtitle: {
    text: "20%",
    floating: true,
    align: "right",
    offsetY: 0,
    style: {
      fontSize: "22px"
    }
  },
  fill: {
    type: "gradient",
    gradient: {
      shade: "dark",
      type: "vertical",
      shadeIntensity: 0.5,
      inverseColors: false,
      opacityFrom: 1,
      opacityTo: 0.8,
      stops: [0, 100]
    }
  },
  xaxis: {
    type: "datetime",
    range: 2700000
  },
  legend: {
    show: true
  }
};

var chartColumn = new ApexCharts(
  document.querySelector("#columnchart"),
  optionsColumn
);
chartColumn.render();

var optionsLine = {
  chart: {
    height: 350,
    type: "line",
    stacked: true,
    animations: {
      enabled: true,
      easing: "linear",
      dynamicAnimation: {
        speed: 1000
      }
    },
    dropShadow: {
      enabled: false,
      opacity: 0.3,
      blur: 5,
      left: -7,
      top: 22
    },
    events: {
      animationEnd: function (chartCtx) {
        const newData1 = chartCtx.w.config.series[0].data.slice();
        newData1.shift();
        const newData2 = chartCtx.w.config.series[1].data.slice();
        newData2.shift();
        window.setTimeout(function () {
          chartCtx.updateOptions(
            {
              series: [
                {
                  data: newData1
                },
                {
                  data: newData2
                }
              ],
              subtitle: {
                text: ''
              }
            },
            false,
            false
          );
        }, 300);
      }
    },
    toolbar: {
      show: false
    },
    zoom: {
      enabled: false
    }
  },
  dataLabels: {
    enabled: false
  },
  stroke: {
    colors: ['#3a2d63','#039bec'],
    curve: "straight",
    width: 2
  },
  grid: {
    padding: {
      left: 0,
      right: 0
    }
  },
  markers: {
    size: 0,
    hover: {
      size: 0
    }
  },
  series: [
    {
      name: "Running",
      data: generateMinuteWiseTimeSeries(
        new Date("12/12/2016 00:20:00").getTime(),
        12,
        {
          min: 30,
          max: 110
        }
      )
    },
    {
      name: "Waiting",
      data: generateMinuteWiseTimeSeries(
        new Date("12/12/2016 00:20:00").getTime(),
        12,
        {
          min: 30,
          max: 110
        }
      )
    }
  ],
  xaxis: {
    type: "datetime",
    range: 2700000
  },
  title: {
    text: "",
    align: "left",
    style: {
      fontSize: "12px"
    }
  },
  subtitle: {
    text: "20",
    floating: true,
    align: "right",
    offsetY: 0,
    style: {
      fontSize: "22px"
    }
  },
  legend: {
    show: false,
    floating: true,
    horizontalAlign: "left",
    onItemClick: {
      toggleDataSeries: false
    },
    position: "top",
    offsetY: -33,
    offsetX: 60
  }
};

var chartLine = new ApexCharts(
  document.querySelector("#linechart"),
  optionsLine
);
chartLine.render();



window.setInterval(function () {
  iteration++;

  chartColumn.updateSeries([
    {
      data: [
        ...chartColumn.w.config.series[0].data,
        [chartColumn.w.globals.maxX + 300000, getRandom()]
      ]
    }
  ]);





  var p3Data = getRangeRandom({ min: 10, max: 100 });
  chartProgress3.updateOptions({
    series: [
      {
        data: [p3Data]
      }
    ],
    subtitle: {
      text: p3Data + "%"
    }
  });
}, 3000);

var extStatusSelector = document.getElementById('ext-status');
// Usage
let lastResponse = new Date('2023-09-01T10:00:00Z');  // Replace this with your old time value
$(document).ready(function(){

  let agentButtons = $(".agent-depend");
      agentButtons.removeClass("active");
      agentButtons.attr("aria-pressed", "false");
  
      window.addEventListener('fromContentScript', function(event) {
      console.log("from content script: ", event);
      if(event.detail != "undefined"){
        lastResponse = new Date();
        extStatusSelector.style.color = '#006700';
        extStatusSelector.textContent = "Extension Active";
          console.log('Received data:', event.detail);

          let agentButtons = $(".ext-depend");
                agentButtons.addClass("active");
                agentButtons.attr("aria-pressed", "true");
      }else{
        extStatusSelector.style.color = '#00ffff';
        extStatusSelector.textContent = "Extension Inactive";
          console.log('Received data:', event.detail);

          let agentButtons = $(".ext-depend");
                agentButtons.removeClass("active");
                agentButtons.attr("aria-pressed", "false");
      }

 /*          fileChartConfig.plotOptions.pie.donut.labels.total.label = 'Other';
      fileChartConfig.plotOptions.pie.donut.labels.total.formatter = function(w) {
        return event.detail.fileStatSeries[3];
      };

      statisticsChart2.updateOptions(fileChartConfig);
          statisticsChart2.updateSeries(event.detail.fileStatSeries); */





    });







});




setInterval(function(){
          console.log("Interval is working...");
          const currentTime = new Date();
          if(isOlderByTenSeconds(lastResponse, currentTime)){
            extStatusSelector.style.color = '#ff0000';
                  extStatusSelector.textContent = "Extension not found!";
                  let extButtons = $(".ext-depend");
                  extButtons.removeClass("active");
                  extButtons.attr("aria-pressed", "false");
          }

          // Usage example:
          const wsURL = 'ws://127.0.0.1:8090/';

          checkWebSocketConnection(wsURL)
              .then(() => {
                  console.log('WebSocket is connectable');
  
              })
              .catch(err => {
                  console.error('WebSocket is not connectable:', err);
                  let status = document.getElementById("agent-status");
                let img = document.getElementById("agent-status-img");
                status.style.color = "#FF0000";
                status.textContent = "Agent is not found!";
                img.setAttribute(
                  "src",
                  "/icons/custom/rafuguard_Agent_deactive_logo.svg"
                );
              });


}, 3000);



function isOlderByTenSeconds(oldTime, currentTime) {
    let differenceInSeconds = (currentTime - oldTime) / 1000;

    if (differenceInSeconds > 10) {
        console.log("The old time is more than 10 seconds older than the current time.");
        return true;
    } else {
        console.log("The old time is within the last 10 seconds or is in the future compared to the current time.");
        return false;
    }
}

function checkWebSocketConnection(wsURL, timeout = 5000) {
    return new Promise((resolve, reject) => {
        const socket = new WebSocket(wsURL);
        
        const timeoutId = setTimeout(() => {
            socket.close();
            reject(new Error('Connection timeout'));
        }, timeout);

        socket.onopen = () => {
            clearTimeout(timeoutId);
            socket.close();
            resolve(true);
        };

        socket.onerror = (err) => {
            clearTimeout(timeoutId);
            reject(err);
        };
    });
}


const WebSocketReconnect = (url) => {
  let ws = null;
  let reconnectInterval = 1000; // 1 second
  let maxReconnectInterval = 30000; // 30 seconds
  let reconnectTimeout = null;

  const connect = () => {
    ws = new WebSocket(url);

    ws.onopen = () => {
      console.log("WebSocket connection established");
      clearTimeout(reconnectTimeout);
    };

    ws.onclose = (event) => {
      console.log(`WebSocket connection closed with code: ${event.code}`);
      if (!event.wasClean) {
        reconnect();
      }
    };

    ws.onerror = (error) => {
      console.error("WebSocket error:", error);
    };

    ws.onmessage = (event) => {
      handleMessage(event);
      // console.log("Received message:", event.data);
      // Handle the received message
      
    };
  };

  const reconnect = () => {
    const nextInterval = Math.min(reconnectInterval * 2, maxReconnectInterval);
    console.log(`Reconnecting in ${nextInterval / 1000} seconds...`);
    reconnectTimeout = setTimeout(() => {
      connect();
    }, nextInterval);
  };

  connect(); // Initial connection

  return {
    send: (data) => {
      if (ws && ws.readyState === WebSocket.OPEN) {
        ws.send(data);
      } else {
        console.error("WebSocket is not open. Message not sent.");
      }
    },

    close: () => {
      if (ws) {
        clearTimeout(reconnectTimeout);
        ws.close();
      }
    },
  };
};

// Usage
const socket = WebSocketReconnect("ws://127.0.0.1:8090/");

setInterval(function(){
// Sending data
socket.send(JSON.stringify({cmd: 'get-version'}));
socket.send(JSON.stringify({cmd: 'total-file-count'}));
},3000);


// Closing the socket
// socket.close();

function handleMessage(event){
  const response = JSON.parse(event.data);
    if(response.cmd == 'get-version-response'){
      let status = document.getElementById("agent-status");
                let img = document.getElementById("agent-status-img");
                // let version = agentVersion.split(".").slice(0, 2).join(".");
                let version = response.totalCount.slice(0, -2);
                status.style.color = "#006700";
                status.textContent = "Agent is connected: " + version;
                img.setAttribute("src", "/icons/custom/rafuguard_Agent_Active_logo.svg");

                console.log("agent is connected");

                let agentButtons = $(".agent-depend");
                agentButtons.addClass("active");
                agentButtons.attr("aria-pressed", "true");
    }

    if(response.cmd == "total-file-count-response"){
        console.log(response);

        const statistics = JSON.parse(response.totalCount);
        const totalFileSelector = document.getElementById("total-file-count");
        const totalAppsSelector = document.getElementById("total-app-count");
        const totalPhishySelector = document.getElementById("total-phishy");
        const totalMaliciousSelector = document.getElementById("total-malicious");
        const otherFileSelector = document.getElementById("other-files");
        const otherFiles = Number(statistics.total_files) - ( Number(statistics.total_apps) + Number(statistics.total_phishy) + Number(statistics.total_malicious) ) ;
        totalFileSelector.textContent = statistics.total_files;
        totalAppsSelector.textContent = statistics.total_apps;
        totalPhishySelector.textContent = statistics.total_phishy;
        totalMaliciousSelector.textContent = statistics.total_malicious;
        otherFileSelector.textContent = otherFiles;


  /*   let applicationPercentage = (application / total) * 100;
  let phishyPercentage = (phishy / total) * 100;
  let maliciousPercentage = (malicious / total) * 100;
  let otherPercentage = (other / total) * 100; */

  let applicationPercentage = parseFloat(
    ((statistics.total_apps / statistics.total_files) * 100).toFixed(2)
  );
  let phishyPercentage = parseFloat(((statistics.total_phishy / statistics.total_files) * 100).toFixed(2));
  let maliciousPercentage = parseFloat(((statistics.total_malicious / statistics.total_files) * 100).toFixed(2));
  let otherPercentage = parseFloat(((otherFiles / statistics.total_files) * 100).toFixed(2));

  let series = [
    applicationPercentage,
    phishyPercentage,
    maliciousPercentage,
    otherPercentage,
  ];

  console.log("series: ", series);
  lastResponse = new Date();
      //  extStatusSelector.style.color = '#006700';
       // extStatusSelector.textContent = "Extension Active";
          console.log('Received data:', event.detail);
          fileChartConfig.plotOptions.pie.donut.labels.total.label = 'Other';
      fileChartConfig.plotOptions.pie.donut.labels.total.formatter = function(w) {
        return series[3];
      };

      statisticsChart2.updateOptions(fileChartConfig);
          statisticsChart2.updateSeries(series);



    }
}


/* 
let socket = null; // Declare the socket variable outside the function
agentConnector();

function agentConnector() {
  // Create a WebSocket connection
   socket = new WebSocket("ws://127.0.0.1:8090/");

  // Connection opened
  socket.addEventListener("open", (event) => {
    console.log("WebSocket connection opened:", event);

    // Send a message to the server once connected
    socket.send("Hello Server!");
    socket.send(JSON.stringify({cmd: 'get-version'}));
    socket.send(JSON.stringify({cmd: 'total-file-count'}));
  });

  // Listen for messages from the server
  socket.addEventListener("message", (event) => {
   // console.log("Message from server:", event.data);
    const response = JSON.parse(event.data);
    if(response.cmd == 'get-version-response'){
      let status = document.getElementById("agent-status");
                let img = document.getElementById("agent-status-img");
                // let version = agentVersion.split(".").slice(0, 2).join(".");
                let version = response.totalCount.slice(0, -2);
                status.style.color = "#006700";
                status.textContent = "Agent is connected: " + version;
                img.setAttribute("src", "/icons/custom/rafuguard_Agent_Active_logo.svg");

                console.log("agent is connected");

                let agentButtons = $(".agent-depend");
                agentButtons.addClass("active");
                agentButtons.attr("aria-pressed", "true");
    }

    if(response.cmd == "total-file-count-response"){
        console.log(response);

        const statistics = JSON.parse(response.totalCount);
        const totalFileSelector = document.getElementById("total-file-count");
        const totalAppsSelector = document.getElementById("total-app-count");
        const totalPhishySelector = document.getElementById("total-phishy");
        const totalMaliciousSelector = document.getElementById("total-malicious");
        const otherFileSelector = document.getElementById("other-files");
        const otherFiles = Number(statistics.total_files) - ( Number(statistics.total_apps) + Number(statistics.total_phishy) + Number(statistics.total_malicious) ) ;
        totalFileSelector.textContent = statistics.total_files;
        totalAppsSelector.textContent = statistics.total_apps;
        totalPhishySelector.textContent = statistics.total_phishy;
        totalMaliciousSelector.textContent = statistics.total_malicious;
        otherFileSelector.textContent = otherFiles;
    }

  });

  // Handle any errors that occur.
  socket.addEventListener("error", (error) => {
    console.error("WebSocket Error:", error);
  });

  // Listen for the WebSocket connection to close.
  socket.addEventListener("close", (event) => {
    if (event.wasClean) {
      console.log(`Closed cleanly, code=${event.code}, reason=${event.reason}`);
    } else {
      console.warn("Connection died");
    }
  });

  // Close the WebSocket connection when done.
  // socket.close();
}

 */

</script>
@endsection