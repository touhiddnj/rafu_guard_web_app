@php
use Illuminate\Support\Facades\Auth;
// $user = Auth::user();
// $token = $user->createToken('"api-token')->plainTextToken;
// Check if the user has a valid API token
// Check if the user has a valid API token
// var_dump(Auth::user()); exit();
$user = auth()->user();

$accessToken = $user->token();
if ($accessToken && !$accessToken->expired()) {
    // Use the existing access token
    $token = $accessToken->accessToken;
} else {
    // Generate a new access token
    $token = $user->createToken('api-token')->accessToken;
}
@endphp

<!-- Modal -->
<div class="modal fade" id="pricingModal" tabindex="-1" aria-labelledby="pricingModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="pricingModalLabel">Rafu Guard Pricing</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-md-6">
                      <div class="card mb-4">
                          <div class="card-header">
                              Free Package
                          </div>
                          <div class="card-body">
                              <h5 class="card-title">$0/month</h5>
                              <ul class="list-unstyled">
                                  <li>Malware Protection</li>
                                  <li>Privacy Protection</li>
                                  <li>PC Health Monitoring</li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="card mb-4">
                          <div class="card-header">
                              Premium Package
                          </div>
                          <div class="card-body">
                              <h5 class="card-title">$5/month</h5>
                              <ul class="list-unstyled">
                                  <li>Malware Protection</li>
                                  <li>Privacy Protection</li>
                                  <li>PC Health Monitoring</li>
                                  <li>24/7 Customer Support</li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
      </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="docModal" tabindex="-1" aria-labelledby="docModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
          <div class="modal-header">
              <h2 class="modal-title" id="docModalLabel">Documentation Coming Soon</h2>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <p>We're currently working on creating the documentation for this feature. Please check back later for more information.</p>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
      </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="supportModal" tabindex="-1" aria-labelledby="supportModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title" id="supportModalLabel">Contact Support</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body text-center">
              <img src="https://www.cdnlogo.com/logos/w/29/whatsapp-icon.svg" alt="WhatsApp Logo" class="mb-3" style="max-width: 50px;">
              <h2 class="mb-4">Contact us on WhatsApp</h2>
              <p class="lead mb-4">For assistance, questions, or inquiries, you can message us on WhatsApp:</p>
              <p class="h1">
                  <a href="https://wa.me/+8801712552009" target="_blank" class="text-success">
                      <span class="me-2"><img src="https://www.cdnlogo.com/logos/w/29/whatsapp-icon.svg" alt="WhatsApp Icon" style="width: 40px;"></span>
                      +880 1712 55 2009
                  </a>
              </p>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
      </div>
  </div>
</div>


<!-- Footer-->
<footer class="content-footer footer bg-footer-theme">
  <div class="{{ (!empty($containerNav) ? $containerNav : 'container-fluid') }} d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
    <div class="mb-2 mb-md-0">
      © 
	  {{ date("Y") }}


      , made with ❤️ by <a href="https://rafusoft.com" target="_blank" class="footer-link fw-bolder">Rafusoft</a>
    </div>
    <div>

      <a id="licenseBtn" href="javascript:void(0)" class="footer-link me-4">License</a>
      {{-- <a href="{{ config('variables.moreThemes') ? config('variables.moreThemes') : '#' }}" target="_blank" class="footer-link me-4">More Themes</a> --}}
      <a id="docBtn" href="javascript:void(0)"  class="footer-link me-4">Documentation</a>
      <a id="supportBtn" href="javascript: void(0)"  class="footer-link d-none d-sm-inline-block">Support</a>
    </div>
  </div>
</footer>


<!--/ Footer-->
<form style="display: none;" id="api-token-form" action="/" method="POST">
  @csrf

  <input id="api-token" type="hidden" name="api-token" value="{{ $token }}">
</form>



