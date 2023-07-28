@extends('layouts/contentNavbarLayout')

@section('title', 'Custom Blocking')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Dashboard/</span> Custom Blocking
</h4>

<!-- Basic Bootstrap Table -->
<div class="card">
  <h5 class="card-header">Custom Blocking</h5>
  <div class="table-responsive text-nowrap">
    <table class="table" id="blocked-url-list">
      <thead>
        <tr>
          <th>#</th>
          <th>URL</th>
          <th>Domain</th>
          <th>Reason</th>
          <th>Status</th>
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
              <tr>
                <td>{{ $sl; }}</td>
                <td>{{ $row->url }}</td>
                <td></td>
                <td>{{ $row->reason }}</td>
                <td>{{ $row->status == 1 ? 'Enabled': 'Disabled' }}</td>
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
              <label class="form-check-label" for="domainCheckbox">
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

  });
</script>
@endsection
