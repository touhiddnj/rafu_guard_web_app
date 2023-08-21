<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Landing - Rafu Guard</title>

  <link rel="apple-touch-icon" sizes="180x180" href="/themes/lander/assets/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/themes/lander/assets/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/themes/lander/assets/favicon/favicon-16x16.png">
  <link rel="manifest" href="/themes/lander/assets/favicon/site.webmanifest">

  <!--stylesheet-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;1,700&display=swap">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="/themes/lander/assets/css/style.css">
</head>

<body>

  <!--preloader start-->
  <div class="preloader">
    <svg class="preloader__svg" width="307" height="47" viewBox="0 0 307 47" fill="none"
      xmlns="http://www.w3.org/2000/svg">
      <path class="preloader__svg-path" d="M0.311996 1.2H10.68V37.552H33.144V46H0.311996V1.2Z" stroke="white"
        stroke-width="2" />
      <path class="preloader__svg-path"
        d="M59.883 46.768C55.2323 46.768 51.0297 45.7653 47.275 43.76C43.563 41.7547 40.6403 39.0027 38.507 35.504C36.4163 31.9627 35.371 27.9947 35.371 23.6C35.371 19.2053 36.4163 15.2587 38.507 11.76C40.6403 8.21866 43.563 5.44533 47.275 3.44C51.0297 1.43467 55.2323 0.431999 59.883 0.431999C64.5337 0.431999 68.715 1.43467 72.427 3.44C76.139 5.44533 79.0617 8.21866 81.195 11.76C83.3283 15.2587 84.395 19.2053 84.395 23.6C84.395 27.9947 83.3283 31.9627 81.195 35.504C79.0617 39.0027 76.139 41.7547 72.427 43.76C68.715 45.7653 64.5337 46.768 59.883 46.768ZM59.883 37.936C62.5283 37.936 64.9177 37.3387 67.051 36.144C69.1843 34.9067 70.8483 33.2 72.043 31.024C73.2803 28.848 73.899 26.3733 73.899 23.6C73.899 20.8267 73.2803 18.352 72.043 16.176C70.8483 14 69.1843 12.3147 67.051 11.12C64.9177 9.88267 62.5283 9.264 59.883 9.264C57.2377 9.264 54.8483 9.88267 52.715 11.12C50.5817 12.3147 48.8963 14 47.659 16.176C46.4643 18.352 45.867 20.8267 45.867 23.6C45.867 26.3733 46.4643 28.848 47.659 31.024C48.8963 33.2 50.5817 34.9067 52.715 36.144C54.8483 37.3387 57.2377 37.936 59.883 37.936Z"
        stroke="white" stroke-width="2" />
      <path class="preloader__svg-path"
        d="M121.066 36.4H100.266L96.298 46H85.674L105.642 1.2H115.882L135.914 46H125.034L121.066 36.4ZM117.802 28.528L110.698 11.376L103.594 28.528H117.802Z"
        stroke="white" stroke-width="2" />
      <path class="preloader__svg-path"
        d="M140.562 1.2H160.914C165.778 1.2 170.066 2.13866 173.778 4.016C177.533 5.85066 180.434 8.45333 182.482 11.824C184.573 15.1947 185.618 19.12 185.618 23.6C185.618 28.08 184.573 32.0053 182.482 35.376C180.434 38.7467 177.533 41.3707 173.778 43.248C170.066 45.0827 165.778 46 160.914 46H140.562V1.2ZM160.402 37.488C164.882 37.488 168.445 36.2507 171.09 33.776C173.778 31.2587 175.122 27.8667 175.122 23.6C175.122 19.3333 173.778 15.9627 171.09 13.488C168.445 10.9707 164.882 9.712 160.402 9.712H150.93V37.488H160.402Z"
        stroke="white" stroke-width="2" />
      <path class="preloader__svg-path" d="M193.437 1.2H203.805V46H193.437V1.2Z" stroke="white" stroke-width="2" />
      <path class="preloader__svg-path"
        d="M255.525 1.2V46H247.013L224.677 18.8V46H214.437V1.2H223.013L245.285 28.4V1.2H255.525Z" stroke="white"
        stroke-width="2" />
      <path class="preloader__svg-path"
        d="M296.396 22.896H305.868V41.072C303.436 42.9067 300.62 44.3147 297.42 45.296C294.22 46.2773 290.999 46.768 287.756 46.768C283.106 46.768 278.924 45.7867 275.212 43.824C271.5 41.8187 268.578 39.0667 266.444 35.568C264.354 32.0267 263.308 28.0373 263.308 23.6C263.308 19.1627 264.354 15.1947 266.444 11.696C268.578 8.15467 271.522 5.40267 275.276 3.44C279.031 1.43467 283.255 0.431999 287.948 0.431999C291.874 0.431999 295.436 1.09333 298.636 2.416C301.836 3.73866 304.524 5.65866 306.7 8.176L300.044 14.32C296.844 10.9493 292.983 9.264 288.46 9.264C285.602 9.264 283.063 9.86133 280.844 11.056C278.626 12.2507 276.898 13.936 275.66 16.112C274.423 18.288 273.804 20.784 273.804 23.6C273.804 26.3733 274.423 28.848 275.66 31.024C276.898 33.2 278.604 34.9067 280.78 36.144C282.999 37.3387 285.516 37.936 288.332 37.936C291.319 37.936 294.007 37.296 296.396 36.016V22.896Z"
        stroke="white" stroke-width="2" />
    </svg>
  </div>
  <!--preloader end-->

  <!--header section start-->
  <header class="header">
    <div class="container">
      <div class="header__wrapper">
        <div class="header__logo">
          <a href="index.html">
            <img src="/themes/lander/assets/images/logo.png" alt="logo">
          </a>
        </div>
        <div class="header__nav">
          <ul class="header__nav-primary">
            <li><a href="#">Solutions</a></li>
            <li><a href="#">Integrations</a></li>
            <li><a href="#">Pricing</a></li>
            <li><a href="#">Resources</a></li>
          </ul>
          <ul class="header__nav-secondary">
            <li><a href="#" class="button">Schedule Demo</a></li>
          </ul>
          <span><i class="fas fa-times"></i></span>
        </div>
        <div class="header__bars">
          <div class="header__bars-bar header__bars-bar-1"></div>
          <div class="header__bars-bar header__bars-bar-2"></div>
          <div class="header__bars-bar header__bars-bar-3"></div>
        </div>
      </div>
    </div>
  </header>
  <!--header section end-->

  <!--hero section start-->
  <section class="hero">
    <div class="hero__wrapper">
      <div class="hero__image">
        <img src="/themes/lander/assets/images/imac.png" alt="image">
      </div>
      <div class="hero__info">
        <h1 class="main-heading main-heading-white">Online accounting software for your small business!</h1>
        <a href="{{ url('auth/google') }}" class="button" style="background: #C84130;color: #ffffff; border-color: #C84130;">Login with Google</a>
        &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
        <a href="#" class="button">Login</a>
      </div>
    </div>
    <div class="footer__bottom-social">
      <h6>Follow us<span>-</span></h6>
      <ul>
        <li><a href="#">Linkedin</a></li>
        <li><a href="#">Twitter</a></li>
        <li><a href="#">Youtube</a></li>
      </ul>
    </div>
  </section>
  <!--hero section end-->

  <!--about section start-->
  <section class="about">
    <div class="container">
      <div class="row">
        <div class="about__info">
          <h1 class="main-heading main-heading-dark">Turn expense reports into a strategic resource</h1>
          <p class="main-paragraph main-paragraph-light">The Digital Asset Platform delivers flexible infrastructure for
            regulated financial institutions to share processes and data securely, on a need-to-know basis, without the
            need for reconciliation. It combines a permissioned Distributed Ledger with a powerful financial modeling
            language to ensure that each institution operates from a single source of truth.</p>
        </div>
      </div>
    </div>
  </section>
  <!--about section end-->

  <!--service section start-->
  <section class="service">
    <div class="service__single">
      <div class="service__single-image service__single-image-1"></div>
      <div class="service__single-info">
        <div class="service__single-info-wrapper service__single-info-wrapper-2">
          <h2 class="secondary-heading">Be confident in your decisions</h2>
          <p class="main-paragraph main-paragraph-light2">Accurate, real time information helps you make more confident
            decisions when
            approving expenses, or analyzing company spend, budgets, and return on investment.</p>
        </div>
      </div>
    </div>
    <div class="service__single">
      <div class="service__single-image service__single-image-2"></div>
      <div class="service__single-info service__single-info-2">
        <div class="service__single-info-wrapper service__single-info-wrapper-1">
          <h2 class="secondary-heading">Give expenses the time they deserve</h2>
          <p class="main-paragraph main-paragraph-light2">Increase your efficiency by focusing your time on expenses
            with exceptions.
            GFXPARTNER separates out expenses that violate policy, approaching budget, contain errors, or are
            fraudulent.</p>
        </div>
      </div>
    </div>
    <div class="swiper-container testimonial__slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="service__single testimonial__slider-slide testimonial__slider-slide-1">
            <div class="service__single-image"></div>
            <div class="service__single-info">
              <div class="service__single-info-wrapper service__single-info-wrapper-2">
                <p>A simple interface that helps our employees submit accurate expenses in real time, and powerful
                  rule-based automation that we can customize to our policy so expenses are auto-approved or sent to the
                  best person to review and approve.</p>
                <h5>Daniel Niccum,<span>CFO, Substation Services</span></h5>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="service__single testimonial__slider-slide testimonial__slider-slide-2">
            <div class="service__single-image"></div>
            <div class="service__single-info">
              <div class="service__single-info-wrapper service__single-info-wrapper-2">
                <p>A simple interface that helps our employees submit accurate expenses in real time, and powerful
                  rule-based automation that we can customize to our policy so expenses are auto-approved or sent to the
                  best person to review and approve.</p>
                <h5>Daniel Niccum,<span>CFO, Substation Services</span></h5>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="arrow-button">
        <div class="arrow-button-prev"><i class="fas fa-angle-left"></i></div>
        <div class="arrow-button-next"><i class="fas fa-angle-right"></i></div>
      </div>
    </div>
  </section>
  <!--service section end-->

  <!--features section start-->
  <section class="features">
    <h1 class="main-heading main-heading-dark">The Most Efficient Way To Manage Expenses</h1>
    <div class="features__wrapper">
      <div class="features__feature">
        <div class="features_feature-image">
          <img src="/themes/lander/assets/images/feature-img-1.png" alt="image">
        </div>
        <h1 class="secondary-heading">Capture accurate expense data from employees</h1>
        <a href="#" class="button">read more</a>
      </div>
      <div class="features__feature">
        <div class="features_feature-image">
          <img src="/themes/lander/assets/images/feature-img-2.png" alt="image">
        </div>
        <h1 class="secondary-heading">Automate your expense policy and approval hierarchy</h1>
        <a href="#" class="button">read more</a>
      </div>
      <div class="features__feature">
        <div class="features_feature-image">
          <img src="/themes/lander/assets/images/feature-img-3.png" alt="image">
        </div>
        <h1 class="secondary-heading">Instant visibility into spending and budgets</h1>
        <a href="#" class="button">read more</a>
      </div>
      <div class="features__feature">
        <div class="features_feature-image">
          <img src="/themes/lander/assets/images/feature-img-4.png" alt="image">
        </div>
        <h1 class="secondary-heading">Snap a picture of your receipt then throw it out</h1>
        <a href="#" class="button">read more</a>
      </div>
    </div>
  </section>
  <!--features section end-->

  <!--clients section start-->
  <div class="clients">
    <div class="container">
      <div class="clients__wrapper">
        <div class="swiper-container clients__slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="clients__client">
                <a href="#"><img src="/themes/lander/assets/images/client-logo.png" alt="client"></a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="clients__client">
                <a href="#"><img src="/themes/lander/assets/images/client-logo.png" alt="client"></a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="clients__client">
                <a href="#"><img src="/themes/lander/assets/images/client-logo.png" alt="client"></a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="clients__client">
                <a href="#"><img src="/themes/lander/assets/images/client-logo.png" alt="client"></a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="clients__client">
                <a href="#"><img src="/themes/lander/assets/images/client-logo.png" alt="client"></a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="clients__client">
                <a href="#"><img src="/themes/lander/assets/images/client-logo.png" alt="client"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--clients section end-->

  <!--cta section start-->
  <section class="cta">
    <div class="container">
      <div class="row">
        <div class="cta__info">
          <h1 class="main-heading main-heading-white">Turn expense reports into a strategic resource</h1>
          <p class="main-paragraph main-paragraph-light">The Digital Asset Platform delivers flexible infrastructure for
            regulated financial institutions to share processes and data securely, on a need-to-know basis, without the
            need for reconciliation. It combines a permissioned Distributed Ledger with a powerful financial modeling
            language to ensure that each institution operates from a single source of truth.</p>
          <a href="#" class="button">Schedule Demo</a>
        </div>
      </div>
    </div>
  </section>
  <!--cta section end-->

  <footer class="footer">
    <div class="container">
      <div class="footer__links">
        <div class="row">
          <div class="col-lg-3 col-sm-6">
            <div class="footer__links-single">
              <h6>solutions</h6>
              <ul>
                <li><a href="#">Features</a></li>
                <li><a href="#">Recruiters</a></li>
                <li><a href="#">Real Time Insights</a></li>
                <li><a href="#">Security</a></li>
                <li><a href="#">iOS App</a></li>
                <li><a href="#">Android App</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="footer__links-single">
              <h6>integrations</h6>
              <ul>
                <li><a href="#">QuickBooks</a></li>
                <li><a href="#">Netsuite</a></li>
                <li><a href="#">Intact</a></li>
                <li><a href="#">Salesforce</a></li>
                <li><a href="#">Zenefits</a></li>
                <li><a href="#">Lever</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="footer__links-single">
              <h6>resources</h6>
              <ul>
                <li><a href="#">Pinterest</a></li>
                <li><a href="#">Betterment</a></li>
                <li><a href="#">Flexport</a></li>
                <li><a href="#">VTS</a></li>
                <li><a href="#">Movable Ink</a></li>
                <li><a href="#">Expense Policy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="footer__links-single">
              <h6>company</h6>
              <ul>
                <li><a href="#">Blog</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Press</a></li>
                <li><a href="#">Support</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="footer__bottom">
            <div class="footer__bottom-copy">
              <h6>&copy; 2020 GFXPARTNER</h6>
            </div>
            <div class="footer__bottom-social">
              <h6>Follow us<span>-</span></h6>
              <ul>
                <li><a href="#">Linkedin</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Youtube</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script>
    $(window).on('load', function () {
      $("body").addClass("loaded");
    });
  </script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="/themes/lander/assets/js/script.js"></script>
</body>

</html>