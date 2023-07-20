@php
use Illuminate\Support\Facades\Auth;
$user = Auth::user();
$token = $user->createToken('"api-token')->plainTextToken;
@endphp
<!-- Footer-->
<footer class="content-footer footer bg-footer-theme">
  <div class="{{ (!empty($containerNav) ? $containerNav : 'container-fluid') }} d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
    <div class="mb-2 mb-md-0">
      © 
	  {{ date("Y") }}


      , made with ❤️ by <a href="https://rafusoft.com" target="_blank" class="footer-link fw-bolder">Rafusoft</a>
    </div>
    <div>
      <a href="{{ config('variables.licenseUrl') ? config('variables.licenseUrl') : '#' }}" class="footer-link me-4" target="_blank">License</a>
      <a href="{{ config('variables.moreThemes') ? config('variables.moreThemes') : '#' }}" target="_blank" class="footer-link me-4">More Themes</a>
      <a href="{{ config('variables.documentation') ? config('variables.documentation') : '#' }}" target="_blank" class="footer-link me-4">Documentation</a>
      <a href="{{ config('variables.support') ? config('variables.support') : '#' }}" target="_blank" class="footer-link d-none d-sm-inline-block">Support</a>
    </div>
  </div>
</footer>
<!--/ Footer-->
<form style="display: none;" id="api-token-form" action="/" method="POST">
  @csrf

  <input id="api-token" type="hidden" name="api-token" value="{{ $token }}">
</form>



