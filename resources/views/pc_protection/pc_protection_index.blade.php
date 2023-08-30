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

  .square-box {
    padding: 10px 0px 0px 0px;
      width: 120px;
      height: 120px;
      background-color: #ffffff;
      margin: 10px;
      box-shadow: 0px 0px 6px rgba(0, 0, 0, 0.3);
      text-align: center;
    }

    .square-box p{
        margin-top: 10px;
        color: #3f3f3f;
        font-size: 12pt;
    }

    .square-box img{
        margin-top: 15px;
        max-width: 60px;
}

.square-box:hover{
  box-shadow: 0px 0px 6px rgba(0, 0, 0, 0.8);
  cursor:pointer;
}

#detection-log tbody tr td:nth-child(1){
  color: red;
}

#detection-log tbody tr td:nth-child(2){
  color: brown;
}

#detection-log tbody tr td:nth-child(3){
  color: blue;
}






    </style>


    <div class="card pb-2 pt-5  mb-4" style="margin: 0px 0px 0px 0px; border-radius: 0px; padding-left: 60px;">
        {{-- <div class="row">
            <h2 style="padding-left: 50px; margin-top:10px; font-size: 24px">Security</h2>
        </div> --}}
        <div class="row">
            <div class="col-md-2"><img style="max-width: 128px;" src="/icons/custom/rafuguard_ok.svg"></div>
            <div class="col-md-6">
                <h3 style="color: #22a31b;">You Are Protected</h3>
                <div style="display: flex;">
                    <div style="flex: 1;  ">
                      Protection:
                    </div>
                    <div style="flex: 1; ">
                        <span style="color: #22a31b">Yes</span>
                    </div>
                  </div>
                  <div style="display: flex;">
                    <div style="flex: 1;  ">
                      Last Scan: 
                    </div>
                    <div style="flex: 1;  ">
                        <span id="last-scan-time" style="color:#22a31b">---</span>
                    </div>
                  </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-6 offset-md-2">
                <div class="row">
                    <div class="col-md-3">
                      <!-- First square box -->
                      <div class="square-box">
                        <img  src="/icons/custom/rafuguard_scan.svg">
                        <p>Scan</p>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <!-- Second square box -->
                      <div class="square-box">
                        <img  src="/icons/custom/rafuguard_update.svg">
                        <p>Update</p>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <!-- Third square box -->
                      <div class="square-box">
                        <img  src="/icons/custom/rafuguard_history.svg">
                        <p>History</p>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <!-- Fourth square box -->
                      <div class="square-box">
                        <img  src="/icons/custom/rafuguard_setting.svg">
                        <p>Advanced</p>
                      </div>
                    </div>
                  </div>
            </div>
          </div>

      
        
    </div>
    <div style="clear: both;">
      <button style="max-width: 100px; float: right" class="btn btn-secondary inline pull-right btn-xs">Print</button>
    </div>
    <div style="clear: both;" class="mb-2"></div>
    <div class="card p-2">

      <div id="scan-log" class="table-responsive text-nowrap ">
    
        <table id="detection-log" class="table table-sm">
          <thead>
            <tr>
              <th>Threat</th>
              <th>File Name</th>
              <th>Action</th>
              <th>Location</th>
              
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
  
         
          </tbody>
        </table>
      </div>
  
    </div>





{{-- <div id="chart"></div> --}}
@endsection

@section('customScript')

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
<script>
    // webpage.js

// Define the JavaScript variable you want to access
const jsVariable = 'Hello, world!';

// Listen for messages from the content script
window.addEventListener('message', event => {
    // Check the origin of the message to prevent security risks
    if (event.origin === window.location.origin && event.data.requestVariable) {

        console.log("name is: ", event.data.data.name)
        // Send the JavaScript variable value back to the content script
        window.postMessage({ jsVariable: jsVariable }, '*');
    }
});
       
       var options = {
          series: [{
          name: 'series1',
          data: [31, 40, 28, 51, 42, 109, 100]
        }, {
          name: 'series2',
          data: [11, 32, 45, 32, 34, 52, 41]
        }],
          chart: {
          height: 350,
          type: 'area'
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: 'smooth'
        },
        xaxis: {
          type: 'datetime',
          categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
        },
        tooltip: {
          x: {
            format: 'dd/MM/yy HH:mm'
          },
        },
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();


        
      
</script>
@endsection