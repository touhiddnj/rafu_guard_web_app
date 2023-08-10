<!-- BEGIN: Vendor JS-->
<script src="{{ asset(mix('assets/vendor/libs/jquery/jquery.js')) }}"></script>
<script src="{{ asset(mix('assets/vendor/libs/popper/popper.js')) }}"></script>
<script src="{{ asset(mix('assets/vendor/js/bootstrap.js')) }}"></script>
<script src="{{ asset(mix('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')) }}"></script>
<script src="{{ asset(mix('assets/vendor/js/menu.js')) }}"></script>
@yield('vendor-script')
<!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
<script src="{{ asset(mix('assets/js/main.js')) }}"></script>

<!-- END: Theme JS-->
<!-- Pricing Modal JS-->
@stack('pricing-script')
<!-- END: Pricing Modal JS-->
<!-- BEGIN: Page JS-->
@yield('page-script')
<!-- END: Page JS-->

<script>
    $(document).ready(function() {
          // Show the modal when the button is clicked
          $("#licenseBtn").click(function() {
              $("#pricingModal").modal("show");
          });
          $("#docBtn").click(function() {
              $("#docModal").modal("show");
          });
          $("#supportBtn").click(function() {
              $("#supportModal").modal("show");
          });

          
      });
  
  </script>
