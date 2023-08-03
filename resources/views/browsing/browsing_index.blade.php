@extends('layouts/contentNavbarLayout')

@section('title', 'Extensions')

@section('content')
<style>
 body {
	 font-family: "Montserrat", "Lato", "Open Sans", "Helvetica Neue", Helvetica, Calibri, Arial, sans-serif;
	 color: #6b7381;
	 background: #f2f2f2;
}
 .jumbotron {
	 background: #6b7381;
	 color: #bdc1c8;
}
 .jumbotron h1 {
	 color: #fff;
}
 .example {
	 margin: 4rem auto;
}
 .example > .row {
	 margin-top: 2rem;
	 height: 5rem;
	 vertical-align: middle;
	 text-align: center;
	 border: 1px solid rgba(189,193,200,0.5);
}
 .example > .row:first-of-type {
	 border: none;
	 height: auto;
	 text-align: left;
}
 .example h3 {
	 font-weight: 400;
}
 .example h3 > small {
	 font-weight: 200;
	 font-size: 0.75em;
	 color: #939aa5;
}
 .example h6 {
	 font-weight: 700;
	 font-size: 0.65rem;
	 letter-spacing: 3.32px;
	 text-transform: uppercase;
	 color: #bdc1c8;
	 margin: 0;
	 line-height: 5rem;
}
 .example .btn-toggle {
	 top: 50%;
	 transform: translateY(-50%);
}
 .btn-toggle {
	 margin: 0 4rem;
	 padding: 0;
	 position: relative;
	 border: none;
	 height: 1.5rem;
	 width: 3rem;
	 border-radius: 1.5rem;
	 color: #6b7381;
	 background: #bdc1c8;
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
	 background-color: #29b5a8;
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
	 background: #bdc1c8;
}
 .btn-toggle.btn-secondary:before, .btn-toggle.btn-secondary:after {
	 color: #6b7381;
}
 .btn-toggle.btn-secondary.active {
	 background-color: #ff8300;
}
 

  </style>
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Dashboard/</span> Browsing
</h4>

<!-- Basic Bootstrap Table -->
<div class="card">
  {{-- <h5 class="card-header">Browsing Setting</h5> --}}
  <div class="card-body">

	<div class="row">
		<div class="col-md-8 mb-4">
			<h3>Browsing Protection</h3>
			<p>With Rafu Guard, your browsing environment is constantly safeguarded as it proactively scans every site, page, and service you access, ensuring comprehensive protection.</p>
			
			<div class="border border-success rounded p-2" style="max-width: 400px;">
				Real-Time Protection
				<button type="button" class="btn btn-toggle active" data-toggle="button" aria-pressed="true" autocomplete="off">
					<div class="handle"></div>
				  </button>
			</div>
		</div>
		<div class="col-md-4">
			<img src="https://cdn.guard.io/src/GUARDIO_APP1_fervent_ninetales_342de/assets/browsing.d78547ef10.svg">
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<div class="card mb-3">
				<div class="row g-0">
				  <div class="col-md-10">
					<div class="card-body">
					  <h5 class="card-title">Harmful Site Blocks</h5>
					  <p class="card-text">
						Advanced anti-phishing protection from emails and web pages that attempt to steal personal or payment information.
					  </p>
					  {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
					</div>
				  </div>
				  <div class="col-md-2 mt-4">
					<button type="button" class="btn btn-sm btn-toggle active" data-toggle="button" aria-pressed="true" autocomplete="off">
						<div class="handle"></div>
					  </button>
				  </div>
				</div>
			  </div>
		</div>
		<div class="col-md-6">
			<div class="row g-0">
				<div class="col-md-10">
				  <div class="card-body">
					<h5 class="card-title">Dangerous Download Blocks</h5>
					<p class="card-text">
						Block downloads designed to cause damage before they get to your computer.
					</p>
					{{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
				  </div>
				</div>
				<div class="col-md-2 mt-4">
				  <button type="button" class="btn btn-sm btn-toggle active" data-toggle="button" aria-pressed="true" autocomplete="off">
					  <div class="handle"></div>
					</button>
				</div>
			  </div>
			</div>

			<div class="col-md-6">
				<div class="row g-0">
					<div class="col-md-10">
					  <div class="card-body">
						<h5 class="card-title">Suspicious Site Alerts</h5>
						<p class="card-text">
							Know when to take extra care when visiting sites that have low credibility.
						</p>
						{{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
					  </div>
					</div>
					<div class="col-md-2 mt-4">
					  <button type="button" class="btn btn-sm btn-toggle active" data-toggle="button" aria-pressed="true" autocomplete="off">
						  <div class="handle"></div>
						</button>
					</div>
				  </div>
				</div>

				<div class="col-md-6">
					<div class="row g-0">
						<div class="col-md-10">
						  <div class="card-body">
							<h5 class="card-title">Webcam & Microphone Alerts</h5>
							<p class="card-text">
								Maintain privacy and get notified when access to your camera and microphone are still enabled on an open tab.
							</p>
							{{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
						  </div>
						</div>
						<div class="col-md-2 mt-4">
						  <button type="button" class="btn btn-sm btn-toggle active" data-toggle="button" aria-pressed="true" autocomplete="off">
							  <div class="handle"></div>
							</button>
						</div>
					  </div>
					</div>


		</div>
	</div>
	
	<div class="row">
{{--       <div class="col-md-4">
        <div class="card mb-4">
          <div class="card-body">
          <h5 class="card-title ext-title">Volume Booster</h5>
          <div class="card-subtitle text-muted mb-3 ext-short-title">Volume Booster</div>
          <p class="card-text ext description">
            Improve your writing with Grammarly's communicatio…heck, grammar check, punctuation check, and more..
          </p>
          <button type="button" class="btn btn-sm btn-secondary btn-toggle ext-enable" data-toggle="button" aria-pressed="false" autocomplete="off">
            <div class="handle"></div>
          </button>
          <a href="javascript:void(0)" class="card-danger text-danger ext-remove">Remove</a>
          </div>
          </div>
      </div> --}}
{{-- 	  <div class="col-md-4">Phishing site blocking:</div>
	  <div class="col-md-4"><button type="button" class="btn btn-sm btn-secondary btn-toggle ext-enable active" data-toggle="button" aria-pressed="false" autocomplete="off">
		<div class="handle"></div>
	  </button></div> --}}
    </div>
  </div>
 
 
</div>
<!--/ Basic Bootstrap Table -->

<hr class="my-5">


@endsection

@section('customScript')
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
<script>
   $(document).ready(function() {

    });


</script>
@endsection
