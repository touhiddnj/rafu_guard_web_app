@extends('layouts/contentNavbarLayout')

@section('title', 'Custom Blocking')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Dashboard/</span> Custom Blocking
</h4>

<!-- Basic Bootstrap Table -->
<div class="card">
  <h5 class="card-header">Safeguarding Against Malicious Browser Extensions</h5>
  <div class="card-body">
    <div class="row">
      <div class="col-md-4">
        <div class="card mb-4">
          <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <div class="card-subtitle text-muted mb-3">Card subtitle</div>
          <p class="card-text">
          Some quick example text to build on the card title and make up the bulk of the card's content.
          </p>
          <a href="javascript:void(0)" class="card-link">Card link</a>
          <a href="javascript:void(0)" class="card-link">Another link</a>
          </div>
          </div>
      </div>
    </div>
  </div>
 
 
</div>
<!--/ Basic Bootstrap Table -->

<hr class="my-5">


@endsection

@section('customScript')
<script>
  $(document).ready(function(){
   
  });
</script>
@endsection
