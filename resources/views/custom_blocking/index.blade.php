@extends('layouts/contentNavbarLayout')

@section('title', 'Custom Blocking')

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
  <span class="text-muted fw-light">Dashboard/</span> Custom Blocking
</h4>

<!-- Basic Bootstrap Table -->
<div class="card p-4">
  {{-- <h5 class="card-header">Custom Blocking</h5> --}}
  <div class="row">
		<div class="col-md-8 mb-4" style="padding-top: 100px;">
			<h3>Custom Blocking</h3>
			<p>With Rafu Guard, your browsing environment is constantly safeguarded as it proactively scans every site, page, and service you access, ensuring comprehensive protection.</p>
			
			<div class="border border-success rounded p-2 d-flex justify-content-between align-items-center" style="max-width: 300px;">
				<div>Real-Time Protection</div>
				<button type="button" class="btn btn-toggle btn-sm active" data-toggle="button" aria-pressed="true" autocomplete="off">
					<div class="handle"></div>
				</button>
			</div>
		</div>
		<div class="col-md-4">
			<img src="https://cdn.guard.io/src/GUARDIO_APP1_fervent_ninetales_342de/assets/browsing.d78547ef10.svg">
		</div>
	</div>

  <div class="table-responsive text-nowrap">
    <table class="table" id="blocked-url-list">
      <thead>
        <tr>
          <th>#</th>
          <th>URL</th>
          <th>Domain</th>
          <th>Reason</th>
          <th>Active</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">

        @empty($customBlockList)
        <tr><td style="text-align: center" colspan="5"><strong>No Data</strong></td></tr>

        @else

          @php
          $sl = 1;
          @endphp
          @foreach($customBlockList as $row)
              <tr data-id="{{ $row->id }}">
                <td>{{ $sl; }}</td>
                <td>{{ $row->url }}</td>
                <td><button type="button" class="btn btn-sm btn-secondary btn-toggle domain-toggle{{ $row->domain == true ? ' active' : '' }}" data-toggle="button" aria-pressed="{{ $row->domain == true ? 'true' : 'false' }}" autocomplete="off">
                  <div class="handle"></div>
                  </button></td>
                <td>{{ $row->reason }}</td>
                <td>
                  <button type="button" class="btn btn-sm btn-secondary btn-toggle status-toggle{{ $row->status == 1 ? ' active': '' }}" data-toggle="button" aria-pressed="{{ $row->status == 1 ? 'true': 'false' }}" autocomplete="off">
                    <div class="handle"></div>
                    </button>
                 </td>
                <td><a class="btn btn-danger btn-sm" href="/custom-blocking/delete/{{ $row->id }}">Remove</a></td>
              </tr>

              @php
              $sl++;
              @endphp
          @endforeach
       
        @endempty
        
       {{--  <tr>
          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong></td>
          <td>Albert Cook</td>
          <td>
            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">
                <img src="{{asset('assets/img/avatars/5.png')}}" alt="Avatar" class="rounded-circle">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">
                <img src="{{asset('assets/img/avatars/6.png')}}" alt="Avatar" class="rounded-circle">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">
                <img src="{{asset('assets/img/avatars/7.png')}}" alt="Avatar" class="rounded-circle">
              </li>
            </ul>
          </td>
          <td><span class="badge bg-label-primary me-1">Active</span></td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>React Project</strong></td>
          <td>Barry Hunter</td>
          <td>
            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">
                <img src="{{asset('assets/img/avatars/5.png')}}" alt="Avatar" class="rounded-circle">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">
                <img src="{{asset('assets/img/avatars/6.png')}}" alt="Avatar" class="rounded-circle">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">
                <img src="{{asset('assets/img/avatars/7.png')}}" alt="Avatar" class="rounded-circle">
              </li>
            </ul>
          </td>
          <td><span class="badge bg-label-success me-1">Completed</span></td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-2"></i> Edit</a>
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-2"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>VueJs Project</strong></td>
          <td>Trevor Baker</td>
          <td>
            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">
                <img src="{{asset('assets/img/avatars/5.png')}}" alt="Avatar" class="rounded-circle">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">
                <img src="{{asset('assets/img/avatars/6.png')}}" alt="Avatar" class="rounded-circle">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">
                <img src="{{asset('assets/img/avatars/7.png')}}" alt="Avatar" class="rounded-circle">
              </li>
            </ul>
          </td>
          <td><span class="badge bg-label-info me-1">Scheduled</span></td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-2"></i> Edit</a>
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-2"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td><i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Bootstrap Project</strong></td>
          <td>Jerry Milton</td>
          <td>
            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">
                <img src="{{asset('assets/img/avatars/5.png')}}" alt="Avatar" class="rounded-circle">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">
                <img src="{{asset('assets/img/avatars/6.png')}}" alt="Avatar" class="rounded-circle">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">
                <img src="{{asset('assets/img/avatars/7.png')}}" alt="Avatar" class="rounded-circle">
              </li>
            </ul>
          </td>
          <td><span class="badge bg-label-warning me-1">Pending</span></td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-2"></i> Edit</a>
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-2"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr> --}}
        
      </tbody>
      <tfoot>
        <form id="url-blocking-form" action="/CustomBlockAdd" method="POST">
          @csrf
        <tr>
          <td>#</td>
          <td>
           
            <input id="url" class="form-control form-control-sm" type="text" name="url" placeholder="Enter URL">

          </td>
          <td>
            <div class="form-check form-check-inline">
              <input class="form-check-input form-check-input-sm" type="checkbox" value="true" id="domainCheckbox" name="domain">
              <label class="form-check-label fw-bold" for="domainCheckbox">
                Yes
              </label>
            </div>
          </td>
          <td>
            <input id="reason" class="form-control form-control-sm" type="text" name="reason" placeholder="Enter Reason">
          </td>
          <td>
            
            <select id="statusSelect" class="form-select form-select-sm" name="status">
              <option value="">Select status</option>
              <option value="1" selected="selected">Enabled</option>
              <option value="0">Disabled</option>
              </select>
          </td>
          <td>
            <button id="addBtn" type="button" class="btn btn-sm btn-primary">Add URL</button>
          </td>
        </tr>
      </form>
      </tfoot>
    </table>
  </div>
</div>
<!--/ Basic Bootstrap Table -->

<hr class="my-5">


@endsection





@section('customScript')
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>

<script>
  $(document).ready(function(){
    $('#addBtn').click(function(){
      console.log('add button clicked');
      $('#url-blocking-form').submit();
    });

    //url-blocking-form

    $('#url-blocking-form').submit(function(event) {
    event.preventDefault(); // Prevent the default form submission

    // Perform any additional validations or actions before submission

    // Submit the form using AJAX
    $.ajax({
      url: '/url-blocking-add', // Replace with your actual submit URL
      type: 'POST', // or 'GET', depending on your form requirements
      data: $(this).serialize(), // Serialize the form data
      success: function(response) {
        console.log(response);
        // Handle the successful form submission
        console.log('Form submitted successfully');
        // Additional actions after successful submission
        if(response.success == true){
          location.reload();
        }
      },
      error: function(error) {
        // Handle the form submission error
        console.error('Form submission error:', error);
        // Additional error handling if needed
      }
    });
  });

   // Add a click event listener to the button
   $('.domain-toggle').on('click', function() {
    // let id = $(this).closest('tr').find('td:first-child').text();
    let id = $(this).closest('tr').data('id');
    // Toggle the 'aria-pressed' attribute on the button
    $(this).attr('aria-pressed', function(index, value) {
      // Convert the current 'aria-pressed' value to a boolean
      const isPressed = value === 'true';

      // Toggle the boolean value
      const newPressedValue = !isPressed;

      // Perform any action you want based on the button state
      if (newPressedValue) {
        console.log('Button is now enabled');
        enableDomain(id);
        // Add your custom logic for enabling the feature here
      } else {
        console.log('Button is now disabled');
        disableDomain(id);
        // Add your custom logic for disabling the feature here
      }

      // Return the new 'aria-pressed' attribute value (as a string)
      return newPressedValue.toString();
    });
  });

     // Add a click event listener to the button
     $('.status-toggle').on('click', function() {
      let id = $(this).closest('tr').data('id');
    // Toggle the 'aria-pressed' attribute on the button
    $(this).attr('aria-pressed', function(index, value) {
      // Convert the current 'aria-pressed' value to a boolean
      const isPressed = value === 'true';

      // Toggle the boolean value
      const newPressedValue = !isPressed;

      // Perform any action you want based on the button state
      if (newPressedValue) {
        enableStatus(id);
        console.log('Button is now enabled');
        // Add your custom logic for enabling the feature here
       
      } else {
        console.log('Button is now disabled');
        disableStatus(id);
        // Add your custom logic for disabling the feature here

      }

      // Return the new 'aria-pressed' attribute value (as a string)
      return newPressedValue.toString();
    });
  });

  });


  // Function to perform the AJAX GET request
  function enableDomain(id) {
    // Endpoint URL
    var url = "/custom-blocking/domain-enable/" + id;

    // Perform the AJAX GET request
    $.ajax({
      type: "GET",
      url: url,
      dataType: "json", // Change the data type based on your server's response
      success: function(data) {
        // This function will be executed if the request succeeds
        console.log("Domain enabled successfully.");
        console.log(data); // Assuming the server returns some data in JSON format
      },
      error: function(xhr, status, error) {
        // This function will be executed if there's an error with the request
        console.error("Error enabling domain:", status, error);
      }
    });
  }


    // Function to perform the AJAX GET request
    function disableDomain(id) {
    // Endpoint URL
    var url = "/custom-blocking/domain-disable/" + id;

    // Perform the AJAX GET request
    $.ajax({
      type: "GET",
      url: url,
      dataType: "json", // Change the data type based on your server's response
      success: function(data) {
        // This function will be executed if the request succeeds
        console.log("Domain disabled successfully.");
        console.log(data); // Assuming the server returns some data in JSON format
      },
      error: function(xhr, status, error) {
        // This function will be executed if there's an error with the request
        console.error("Error enabling domain:", status, error);
      }
    });
  }

      // Function to perform the AJAX GET request
      function enableStatus(id) {
    // Endpoint URL
    var url = "/custom-blocking/enable-status/" + id;

    // Perform the AJAX GET request
    $.ajax({
      type: "GET",
      url: url,
      dataType: "json", // Change the data type based on your server's response
      success: function(data) {
        // This function will be executed if the request succeeds
        console.log("Custom blocking enabled successfully.");
        console.log(data); // Assuming the server returns some data in JSON format
      },
      error: function(xhr, status, error) {
        // This function will be executed if there's an error with the request
        console.error("Error enabling domain:", status, error);
      }
    });
  }

        // Function to perform the AJAX GET request
        function disableStatus(id) {
    // Endpoint URL
    var url = "/custom-blocking/disable-status/" + id;

    // Perform the AJAX GET request
    $.ajax({
      type: "GET",
      url: url,
      dataType: "json", // Change the data type based on your server's response
      success: function(data) {
        // This function will be executed if the request succeeds
        console.log("Custom blocking disabled successfully.");
        console.log(data); // Assuming the server returns some data in JSON format
      },
      error: function(xhr, status, error) {
        // This function will be executed if there's an error with the request
        console.error("Error enabling domain:", status, error);
      }
    });
  }







</script>
@endsection
