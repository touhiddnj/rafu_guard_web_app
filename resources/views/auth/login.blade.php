<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Rafu Guard - Be Secure</title>

  <!-- CSS -->

  <link rel="stylesheet" href="https://tailwind-cdn.netlify.app/css/internal.css" />
  <link rel="stylesheet" href="css/external.css" />

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <!-- Header -->
  <header class="header" id="header">
    <div class="content">
      <a class="logo" title="Home" href="./">
        <img src="/themes/bs/images/logo.png" class="w-14" alt="" />
        <div class="text_logo ml-2 text-white">RafuGuard</div>
      </a>

      <button id="toggle_header_nav" title="Open Mobile Nav" class="px-4 py-2 rounded lg:hidden text-2xl">
        <i class="fa-solid fa-bars"></i>
      </button>
      <nav id="header_nav">
        <a href="/">Home</a>
        <a href="#pricing">Pricing</a>
        <a href="#features">Features</a>
        <a href="#features">Support</a>

        <div class="group">
          <a href="#">
            Pages <i class="fa-solid fa-chevron-down text-xs"></i>
          </a>

          <div class="hidden group-hover:flex">
            <a href="#">SubMenu Option 1</a>
            <a href="#">SubMenu Option 2</a>
            <a href="#">SubMenu Option 3</a>
            <a href="#">SubMenu Option 4</a>
            <a href="#">SubMenu Option 5</a>
          </div>
        </div>

        <div class="flex gap-6 lg:pl-4 relative" style="z-index: -0">
          <button  class="show_multiple_form show_multiple_login border border-[#03e9f4] hover:bg-[#03e9f4] hover:text-gray-900 px-4 py-2 flex items-center gap-2 rounded transition-all">
            <i class="fa-solid fa-lock"></i>
            Login
          </button>

          <button  class="show_multiple_form show_multiple_register border border-[#03e9f4] hover:bg-[#03e9f4] hover:text-gray-900 px-4 py-2 flex items-center gap-2 rounded transition-all">
            <i class="fa-solid fa-user"></i>
            Register
          </button>
        </div>
      </nav>
    </div>
  </header>
  <!-- Header -->

  <!-- Popup Forms -->
  <div id="multiple_form_overlay" class="remove_multiple_form hidden fixed inset-0 m-auto w-full h-screen bg-black bg-opacity-50 z-[99992]"></div>
  <div class="showLogin h-fit fixed z-[99999] inset-0 m-auto w-full hidden items-center justify-center" id="multiple_form">
    <div class="bg-[#000000d8] border border-[#03e9f4] text-white rounded-lg shadow dark:border md:mt-0 w-[96%] sm:w-[500px]">
      <div class="grid grid-cols-2">
        <button class="show_multiple_form show_multiple_login px-4 text-center py-3">
          <i class="fa-solid fa-lock"></i> Login
        </button>
        <button class="show_multiple_form show_multiple_register px-4 text-center py-3">
          <i class="fa-solid fa-user"></i> Register
        </button>
      </div>

      <!-- Login Content -->
      <div class="multiple_login p-6 space-y-4 md:space-y-6 sm:p-8">
        <h1 class="text-xl font-bold leading-tight tracking-tight md:text-2xl">
          <i class="fa-solid fa-lock"></i> Login
        </h1>
        <form class="space-y-4 md:space-y-6" action="#">
          <div>
            <label for="email" class="block mb-2 text-sm font-medium">Your email</label>

            <input type="email" name="email" id="email" class="input" placeholder="name@company.com" required="" />
          </div>
          <div>
            <label for="password" class="block mb-2 text-sm font-medium">Password</label>
            <input type="password" name="password" id="password" placeholder="••••••••" class="input" required="" />
          </div>
          <div class="flex items-center justify-between">
            <div class="flex items-start">
              <div class="flex items-center h-5">
                <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required="" />
              </div>
              <div class="ml-3 text-sm">
                <label for="remember" class="text-gray-500 dark:text-gray-300">Remember me</label>
              </div>
            </div>
            <a href="#" class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">Forgot password?</a>
          </div>

          <div class="grid grid-cols-1 gap-4">
            <a class="anim-btn block w-full group" href="#">
              <span></span>
              <span></span>
              <span></span>
              <span></span> <i class="fa-brands fa-google"></i>
              Login
            </a>

            <a class="anim-btn block w-full group" href="{{ url('auth/google') }}">
              <span></span>
              <span></span>
              <span></span>
              <span></span> <i class="fa-brands fa-google"></i>
              Signin with google
            </a>
          </div>
        </form>
      </div>

      <!-- Register Content -->
      <div class="multiple_register p-6 space-y-4 md:space-y-6 sm:p-8">
        <h1 class="text-xl font-bold leading-tight tracking-tight md:text-2xl">
          <i class="fa-solid fa-user"></i> Register
        </h1>
        <form class="space-y-4 md:space-y-6" action="#">
          <div>
            <label for="name" class="block mb-2 text-sm font-medium">Your Name</label>

            <input type="text" name="name" id="name" class="input" placeholder="Your Name" required="" />
          </div>
          <div>
            <label for="email" class="block mb-2 text-sm font-medium">Your email</label>

            <input type="email" name="email" id="email" class="input" placeholder="name@company.com" required="" />
          </div>

          <div>
            <label for="phone" class="block mb-2 text-sm font-medium">Your Name</label>

            <input type="text" name="phone" id="phone" class="input" placeholder="Phone number" required="" />
          </div>

          <div>
            <label for="password" class="block mb-2 text-sm font-medium">Password</label>
            <input type="password" name="password" id="password" placeholder="••••••••" class="input" required="" />
          </div>

          <div class="grid grid-cols-1 gap-4">
            <a class="anim-btn block w-full group" href="#">
              <span></span>
              <span></span>
              <span></span>
              <span></span> <i class="fa-brands fa-google"></i>
              Register
            </a>

            <a class="anim-btn block w-full group" href="{{ url('auth/google') }}">
              <span></span>
              <span></span>
              <span></span>
              <span></span> <i class="fa-brands fa-google"></i>
              Signup with google
            </a>
          </div>
        </form>
      </div>

      <div class="w-fit ml-auto p-4">
        <button id="close_multiple_form" type="button" class="remove_multiple_form btn bg-red-500 text-white w-fit">
          Close
        </button>
      </div>
    </div>
  </div>
  <!-- Popup Forms -->

  <!-- Hero Section -->
  <section>
    <!-- Hero Video -->
    <div class="hero_video relative h-[700px] overflow-hidden">
      <video style="width: 100%; width: 100%; overflow: hidden" class="transform scale-[7] sm:scale-[3] lg:scale-[1.5]" autoplay muted loop id="myVideo">
        <source src="/themes/bs/./videos/hero-bg.mp4" type="video/mp4" />
      </video>

      <div class="hero_content min-h-full text-white flex items-center justify-between">
        <div class="content">
          <div class="space-y-5">
            <h2 class="text-[36px] lg:text-[46px] font-bold tracking-normal pt-20 sm:pt-0">
              RafuGuard: Your Ultimate Web and PC Security Solution!
            </h2>

            <p class="font-normal text-gray-100 text-lg tracking-wider">
              Safeguarding your online world and computer with advanced
              protection against threats, all bundled seamlessly into
              RafuGuard. Explore worry-free browsing and computing today!
            </p>

            <div class="flex flex-col sm:flex-row sm:items-center gap-2 sm:gap-4 relative z-[99999]">
              <div>
                <a class="anim-btn group" href="#">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                  <i class="fa-brands fa-windows"></i>
                  Download Agent
                </a>
              </div>

              <div>
                <a class="anim-btn group" href="#">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                  <i class="fa-brands fa-chrome"></i>
                  Add to Chrome
                </a>
              </div>

              <div class="lg:flex items-center gap-x-5 ml-auto -mt-4 hidden">
                <div class="w-fit p-5 rounded bg-[#23395300]">
                  <img class="max-w-[100px]" src="/themes/bs/./images/a2i.png" alt="" />
                </div>
                <div class="w-fit p-5 rounded">
                  <img class="max-w-[100px]" src="/themes/bs/./images/eicar-small.jpg" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div style="bottom: -2px" class="absolute inset-x-0 mx-auto grid grid-cols-2 w-full z-50">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path fill="#000000" fill-opacity="1" d="M0,320L1440,128L1440,320L0,320Z"></path>
        </svg>

        <svg style="transform: rotateY(180deg)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path fill="#000000" fill-opacity="1" d="M0,320L1440,128L1440,320L0,320Z"></path>
        </svg>
      </div>
    </div>
  </section>
  <!-- Hero Section -->

  <!-- Features -->
  <section id="features" class="flex flex-col gap-y-32">
    <div class="flex items-center justify-center w-full relative lg:-mt-[90px]">
      <div id="switch" class="switch relative z-[9999]">
        <input title="#" type="checkbox" name="toggle" id="switchCheckbox" />
        <label for="toggle" id="test"><i></i></label>
        <span></span>
      </div>

      <!-- Switch Popup Form -->
      <div id="close_popup_form" class="close_popup_form_overlay hidden fixed inset-0 m-auto w-full h-screen bg-black bg-opacity-50 z-[99992]"></div>
      <div class="min-h-fi absolute z-[99999] inset-0 m-auto w-full flex items-center justify-center" id="popup_form">
        <div class="bg-gray-900 bg-opacity-60 border border-[#03e9f4] text-white rounded-lg shadow dark:border md:mt-0 w-[96%] sm:w-[500px]">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
            <div class="flex justify-between">
              <h1 class="text-xl font-bold leading-tight tracking-tight md:text-2xl">
                <i class="fa-solid fa-lock"></i> Login
              </h1>
              <button id="close_popup_form" type="button">
                <i class="fa-solid fa-xmark"></i>
              </button>
            </div>
            <form class="space-y-4 md:space-y-6" action="#">
              <div>
                <label for="email" class="block mb-2 text-sm font-medium">Email</label>

                <input type="email" name="email" id="email" class="input" placeholder="mail@domain.com" required="" />
              </div>
              <div>
                <label for="password" class="block mb-2 text-sm font-medium">Password</label>
                <input type="password" name="password" id="password" placeholder="••••••••" class="input" required="" />
              </div>

              <a class="anim-btn block w-full text-center group" href="#">
                <span></span>
                <span></span>
                <span></span>
                <span></span><i class="fa-solid fa-right-to-bracket"></i>
                Client Area
              </a>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- kt total security -->
    <div class="content text-white">
      <div class="grid grid-cols-1 gap-10 lg:gap-0 lg:grid-cols-2 place-items-center">
        <div class="flex justify-end items-center">
          <div class="relative w-fit h-fit">
            <img class="md:max-w-[80%] mx-auto" src="/themes/bs/./images/cobra-av-box.png" alt="" />

            <div class="absolute bottom-0 inset-x-0 mx-auto">
              <div class="ninja">
                <div class="sword"></div>
                <div class="pants">
                  <div class="leg1">
                    <div class="legTop leg1Top"></div>
                    <div class="legBottom leg1Bottom">
                      <div class="feet foot1"></div>
                      <div class="legBottomSleeve"></div>
                    </div>
                  </div>
                  <div class="leg2">
                    <div class="legTop leg2Top"></div>
                    <div class="legBottom leg2Bottom">
                      <div class="feet foot2"></div>
                      <div class="legBottomSleeve"></div>
                    </div>
                  </div>
                </div>
                <div class="torso">
                  <div class="arms">
                    <div class="arm1">
                      <div class="armTop arm1Top"></div>
                      <div class="armBottom arm1Bottom">
                        <div class="hand hand1"></div>
                        <div class="armBottomSleeve"></div>
                      </div>
                    </div>
                    <div class="arm2">
                      <div class="armTop arm2Top"></div>
                      <div class="armBottom arm2Bottom">
                        <div class="star"></div>
                        <div class="hand hand2"></div>
                        <div class="armBottomSleeve"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="headBandWrap">
                  <div class="headBand headBand1"></div>
                  <div class="headBand headBand2"></div>
                </div>
                <div class="noggin">
                  <div class="eyeHole">
                    <div class="eyeWrap">
                      <div class="eye eyeLeft"></div>
                      <div class="eye eyeRight"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="space-y-6">
          <div class="w-full flex justify-start items-center">
            <h2 class="section_title w-fit">RafuGuard</h2>
          </div>
          <p>Your Premier Web and PC Security Solution!</p>

          <select class="pl-2 py-2 w-full sm:max-w-[300px] border-r-[8px] bg-[#000000] border-[#000000] text-white ring-1 rounded overflow-hidden ring-[#03e8f479]">
            <option value="op1">Option</option>
            <option value="op1">Option</option>
            <option value="op1">Option</option>
            <option value="op1">Option</option>
          </select>

          <h2 class="text-3xl font-semibold">BDT 10,193</h2>

          <button id="animTrigger" class="border border-[#03e9f4] hover:bg-[#03e9f4] hover:text-gray-900 px-16 py-2.5 flex items-center gap-2 rounded transition-all focus:ring focus:ring-offset-1">
            Subscribe
          </button>
        </div>
      </div>
    </div>

    <!-- System Requirements -->
    <div class="content text-white">
      <div class="w-full flex items-center pb-20">
        <div class="title_line_left"></div>
        <h2 class="section_title w-fit whitespace-nowrap">
          <span class="text-[#03e9f4]"> [ </span>
          System Requirements
          <span class="text-[#03e9f4]"> ] </span>
        </h2>

        <div class="title_line_right"></div>
      </div>

      <ul class="grid grid-cols-1 lg:grid-cols-2 gap-x-12 gap-y-4 font-semibold tracking-wide">
        <li>
          <i class="fa-solid fa-hashtag text-[#03e9f4]"></i>
          Windows 11, 10, 8.1
        </li>
        <li>
          <i class="fa-solid fa-hashtag text-[#03e9f4]"></i>
          1GB/2GB RAM (32/64-bit), &lt;250MB disk.
        </li>
        <li>
          <i class="fa-solid fa-hashtag text-[#03e9f4]"></i> Internet needed
          for activation/updates.
        </li>
        <li>
          <i class="fa-solid fa-hashtag text-[#03e9f4]"></i>
          Administrator rights required to install the software
        </li>
      </ul>
    </div>

    <!-- Stars -->
    <div class="content">
      <div class="text-white flex flex-wrap gap-10 items-center justify-between w-full">
        <div class="space-y-3">
          <div class="flex items-center gap-2 text-xl">
            <i class="fa-solid fa-star text-[#03e9f4]"></i>
            <i class="fa-solid fa-star text-[#03e9f4]"></i>
            <i class="fa-solid fa-star text-[#03e9f4]"></i>
            <i class="fa-solid fa-star text-[#03e9f4]"></i>
            <i class="fa-solid fa-star text-[#03e9f4]"></i>
          </div>
          <h2 class="text-3xl font-normal tracking-wider">
            Best Performance
          </h2>
        </div>

        <div class="space-y-3">
          <div class="flex items-center gap-2 text-xl">
            <i class="fa-solid fa-star text-[#03e9f4]"></i>
            <i class="fa-solid fa-star text-[#03e9f4]"></i>
            <i class="fa-solid fa-star text-[#03e9f4]"></i>
            <i class="fa-solid fa-star text-[#03e9f4]"></i>
            <i class="fa-solid fa-star text-[#03e9f4]"></i>
          </div>
          <h2 class="text-3xl font-normal tracking-wider">Best Protection</h2>
        </div>

        <div class="space-y-3">
          <div class="flex items-center gap-2 text-xl">
            <i class="fa-solid fa-star text-[#03e9f4]"></i>
            <i class="fa-solid fa-star text-[#03e9f4]"></i>
            <i class="fa-solid fa-star text-[#03e9f4]"></i>
            <i class="fa-solid fa-star text-[#03e9f4]"></i>
            <i class="fa-solid fa-star text-[#03e9f4]"></i>
          </div>
          <h2 class="text-3xl font-normal tracking-wider">Fast Scan</h2>
        </div>
      </div>
    </div>

    <div class="content">
      <div class="features_boxes">
        <!-- Box -->
        <div class="group">
          <img src="/themes/bs/./images/rafuguard_ai_engine.svg" alt="" />
          <h3>AI Engine</h3>
          <p>
            Utilizes advanced artificial intelligence algorithms for improved
            threat detection and response.
          </p>
          <div class="line group-hover:w-[100%]"></div>
        </div>
        <!-- Box -->
        <div class="group">
          <img src="/themes/bs/./images/SECURE BROWSER.svg" />
          <h3>Powerful Browser Protection</h3>
          <p>
            Provides comprehensive defense against malicious sites,
            extensions, and phishing attempts.
          </p>
          <div class="line group-hover:w-[100%]"></div>
        </div>
        <!-- Box -->
        <div class="group">
          <img src="/themes/bs/./images/PROTECTION TARGET.svg" />
          <h3>Privacy Protection</h3>
          <p>Ensures personal and sensitive data remains secure.</p>

          <div class="line group-hover:w-[100%]"></div>
        </div>
        <!-- Box -->
        <div class="group">
          <img src="/themes/bs/./images/PASSWORD PHISHING.svg" />
          <h3>Phishing Security</h3>
          <p>
            Shielding from the latest phishing techniques, ensuring online
            credentials and sensitive data remain safe.
          </p>
          <div class="line group-hover:w-[100%]"></div>
        </div>
        <!-- Box -->
        <div class="group">
          <img src="/themes/bs/./images/rafuguard_Agent_Active_logo.svg" />
          <h3>PC Protection</h3>
          <p>
            Offers robust protection against malware and other harmful objects
            that might compromise system integrity.
          </p>
          <div class="line group-hover:w-[100%]"></div>
        </div>
        <!-- Box -->
        <div class="group">
          <img src="/themes/bs/./images/rafuguard_ok.svg" />
          <h3>Scam Shield</h3>

          <p>added layer against deceptive tactics.</p>
          <div class="line group-hover:w-[100%]"></div>
        </div>
        <!-- Box -->
        <div class="group">
          <img src="/themes/bs/./images/rafuguard_firewall.svg" />
          <h3>Firewall Config</h3>
          <p>
            Enhanced configuration options to safeguard against phishing and
            malicious web traffic.
          </p>
          <div class="line group-hover:w-[100%]"></div>
        </div>
        <!-- Box -->
        <div class="group">
          <img src="/themes/bs/./images/ANONYMOUS INFORMATION.svg" />
          <h3>Disk Information</h3>
          <p>
            Ensures your storage devices are free from malware and other
            harmful entities
          </p>
          <div class="line group-hover:w-[100%]"></div>
        </div>

        <!-- Box -->
        <div class="group">
          <img src="/themes/bs/./images/SCRIPT BLOCKER.svg" />
          <h3>Real-time Threat Blocking</h3>

          <p>Proactively stops malicious activities in their tracks.</p>
          <div class="line group-hover:w-[100%]"></div>
        </div>
      </div>
    </div>
  </section>
  <!-- Features -->

  <!-- Two Boxes -->
  <section class="py-24 bg-gray-50 satisfaction_boxes" style="
        background: url('./images/maxresdefault.jpg');
        background-size: cover;
        background-repeat: no-repeat;
      ">
    <div class="content large_boxes">
      <div class="large_box">
        <h2>What is antivirus?</h2>
        <p>
          Antivirus software scans, detects and defends against any virus or
          malicious program like worms, trojans, adware and more that might
          cause damage to your devices. Antivirus is critical because it helps
          protect computers, laptops, tablets, smartphones and other digital
          devices from becoming infected.
        </p>

        <p>
          Reliable antivirus software also helps protect your precious
          memories, music, photos and important documents from being lost or
          damaged.
        </p>
      </div>

      <div class="large_box">
        <h2>Why is not free virus protection better?</h2>
        <p>
          Often, free antivirus uses your personal information and may do more
          harm than good. Purchasing reliable antivirus means you're securing
          your devices without question. When protecting you and your family,
          you get what you pay for.
        </p>
      </div>
    </div>
  </section>

  <!-- Social Hackers -->
  <section id="cyber_counter" class="flex flex-col border-t-[2px] border-t-[#03e9f4] py-24 lg:py-0">
    <div class="content">
      <div class="grid grid-cols-1 lg:grid-cols-2 place-items-center">
        <div class="banner">
          <h3 class="name tracking-wider" style="font-family: Space Mono">
            SOCIAL HACKERS
          </h3>
          <div class="zoom">
            <div class="mid">
              <div class="avatar">
                <div class="hairBase">
                  <div class="head">
                    <div class="bang right"></div>
                    <div class="face">
                      <div class="eyes"></div>
                    </div>
                  </div>
                </div>
                <div class="neck"></div>
                <div class="turtle-neck"></div>
                <div class="body"></div>
              </div>
            </div>
          </div>
        </div>

        <div class="h-full flex items-center mt-[180px] lg:mt-0 lg:py-40 relative overflow-hidden">
          <div class="large_box">
            <h2 class="text-2xl">Guard Young Minds</h2>
            <p>
              In the vast digital world, social hackers prey on unsuspecting
              children. This space offers comprehensive tools and strategies,
              ensuring our young ones remain protected from these lurking
              cyber threats.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Faq -->
  <section id="faq" class="bg-[#233953] overflow-hidden">
    <div class="content">
      <h2 class="section_title text-white mb-20">
        Frequently Asked Questions
      </h2>
      <div class="tabs">
        <div class="tab">
          <input class="fixed -z-50" type="radio" id="rd1" name="rd" />
          <label class="tab-label" for="rd1">Does Your System Offer Automated Threat Remediation?</label>
          <div class="tab-content">
            RafuGuard boasts multiple capabilities that enable automatic
            threat response. With set parameters, it combats unknown threats
            round-the-clock, eliminating reliance on human teams that might
            lack certain insights.
          </div>
        </div>

        <div class="tab">
          <input class="fixed -z-50" type="radio" id="rd2" name="rd" />
          <label class="tab-label" for="rd2">Does RafuGuard include a vulnerability scanning feature?</label>
          <div class="tab-content">
            RafuGuard can identify over 11,000 CVE vulnerabilities, uncovering
            potential blind spots like machines susceptible due to outdated
            Java engines, Adobe Reader, or Flash installations in "legacy"
            mode. Deploy RafuGuard to assess your IT infrastructure
            efficiently, without heavy resource use, ensuring asset compliance
            through patch management strategies and risk avoidance measures.
          </div>
        </div>

        <div class="tab">
          <input class="fixed -z-50" type="radio" id="rd3" name="rd" />
          <label class="tab-label" for="rd3">Does RafuGuard offer an application policy-based prevention
            feature?</label>
          <div class="tab-content">
            RafuGuard provides multiple layers of defense against ransomware:
            our CTI's blacklists that enhance decision-making, security
            policies for applications to permit only designated actions,
            Honeytokens strategies using decoy files which, when targeted by
            ransomware, trigger detection, and several behavior-based
            mechanisms such as monitoring specific hard disk access points.
          </div>
        </div>

        <div class="tab">
          <input class="fixed -z-50" type="radio" id="rd4" name="rd" />
          <label class="tab-label" for="rd4">Does RafuGuard provide defense against lateral attacks?</label>
          <div class="tab-content">
            RafuGuard employs multiple methods to thwart lateral attacks. It
            can analyze local operating system logs to discern if there's any
            remote activity attempt. This local, tactical SIEM capability
            distinguishes between interactive and non-interactive sessions, as
            well as remote and local ones, ensuring precise tracking of such
            attacks.
          </div>
        </div>

        <div class="tab">
          <input class="fixed -z-50" type="radio" id="rd5" name="rd" />
          <label class="tab-label" for="rd5">Does RafuGuard offer protection against unauthorized Powershells
            in environments where RafuGuard is employed for system
            administration?</label>
          <div class="tab-content">
            RafuGuard incorporates an advanced analysis engine, adept at
            distinguishing between authorized and unauthorized PowerShell
            actions. It evaluates the code executed in real-time, ensuring
            detection of even the most contemporary and covert attacks.
          </div>
        </div>

        <div class="tab">
          <input class="fixed -z-50" type="radio" id="rd6" name="rd" />
          <label class="tab-label" for="rd6">Does RafuGuard feature a self-protection mechanism against
            unauthorized uninstallation or bypass attempts?</label>
          <div class="tab-content">
            RafuGuard ensures its self-defense by integrating layers directly
            into the Windows kernel via a low-level driver. This setup ensures
            that the agent can't be uninstalled without an authorized central
            directive. Removal of the agent is effectively prevented.
          </div>
        </div>

        <div class="tab">
          <input class="fixed -z-50" type="radio" id="rd7" name="rd" />
          <label class="tab-label" for="rd7">
            How is Artificial Intelligence Integrated into RafuGuard?</label>
          <div class="tab-content">
            RafuGuard incorporates various artificial intelligence components
            and automated procedures tailored for cybersecurity. In its
            machine learning mode, RafuGuard learns from all processes within
            your infrastructure to identify anomalies and recognize the
            persistence methods hackers use to withstand reboots or
            reconnections. Leveraging deep learning, RafuGuard features a
            compact neural network-driven engine to discern if software is
            malicious. This same engine powers RafuGuard's CTI. Notably, our
            CTI was the first French product endorsed by Google for its free
            VirusTotal service, where a public, non-commercial version
            constantly searches for undiscovered malware.
          </div>
        </div>

        <div class="tab">
          <input class="fixed -z-50" type="radio" id="rd8" name="rd" />
          <label class="tab-label" for="rd8">
            What operating systems do you support?</label>
          <div class="tab-content">
            RafuGuard is compatible with Linux, Apple macOS, and Windows.
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Faq -->

  <!-- Contact -->
  <section id="contact" class="bg-black py-24">
    <div class="w-full flex items-center pb-20 text-white">
      <div class="title_line_left"></div>
      <h2 class="section_title w-fit whitespace-nowrap">
        <span class="text-[#03e9f4]"> [ </span>
        Contact
        <span class="text-[#03e9f4]"> ] </span>
      </h2>

      <div class="title_line_right"></div>
    </div>

    <div class="content grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-20">
      <!-- Left contact page -->

      <form class="grid grid-cols-1 gap-5 w-full">
        <input class="px-4 py-3 rounded-sm bg-black border focus:ring-1" type="text" placeholder="NAME" />
        <input class="px-4 py-3 rounded-sm bg-black border focus:ring-1" type="email" placeholder="EMAIL" />
        <textarea class="px-4 py-3 rounded-sm bg-black border focus:ring-1 min-w-full w-full block min-h-[120px]" placeholder="MESSAGE"></textarea>

        <button class="w-full block py-2 bg-[#337AB7] text-white rounded focus:ring" type="submit">
          <i class="fa-solid fa-paper-plane"></i>
        </button>
      </form>

      <!-- Left contact page -->

      <div class="direct-contact-container">
        <ul class="flex flex-col gap-6">
          <li class="text-[#aaa] flex items-center">
            <i class="fa fa-map-marker fa-2x"></i>
            <a class="pl-5" href="tel:1-212-555-5555" title="Give me a call">City, State</a>
          </li>

          <li class="text-[#aaa] flex items-center">
            <i class="fa fa-phone fa-2x"></i>
            <a class="pl-5" href="tel:1-212-555-5555" title="Give me a call">(212) 555-2368</a>
          </li>

          <li class="text-[#aaa] flex items-center">
            <i class="fa fa-envelope fa-2x"></i>
            <a class="pl-5 h-fit" href="mailto:#" title="Send me an email" title="Send mail">hitmeup@gmail.com</a>
          </li>
        </ul>

        <hr class="my-5" />
        <ul class="social-media-list">
          <li>
            <a href="https://www.facebook.com/rafusoft" target="_blank" class="contact-icon">
              <i class="fab fa-facebook" aria-hidden="true"></i></a>
          </li>

          <li>
            <a href="https://twitter.com/rafusoft" target="_blank" class="contact-icon">
              <i class="fab fa-twitter" aria-hidden="true"></i></a>
          </li>
          <li>
            <a href="https://www.instagram.com/rafusoft" target="_blank" class="contact-icon">
              <i class="fab fa-instagram" aria-hidden="true"></i></a>
          </li>
          <li>
            <a href="https://www.youtube.com/rafusoft" target="_blank" class="contact-icon">
              <i class="fab fa-youtube" aria-hidden="true"></i></a>
          </li>

          <li>
            <a href="https://www.linkedin.com/in/rafusoft/" target="_blank" class="contact-icon">
              <i class="fab fa-linkedin" aria-hidden="true"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- Contact -->

  <!-- Footer -->
  <footer class="footer">
    <div class="content flex flex-wrap gap-5 justify-between">
      <div class="flex items-center">
        <div>
          <a href="./index.html" class="flex items-center">
            <img src="/themes/bs/images/logo.png" class="h-8 mr-3" alt="RafuGuard Logo" />
            <div class="text_logo">
              <p class="text-white">RafuGuard</p>
            </div>
          </a>
          <p class="text-xs pl-11">Security Solution Provider</p>
        </div>
      </div>

      <div>
        <div class="flex items-center gap-3">
          <a href="mailto:info@rafusoft.com">
            <i class="fa-solid fa-envelope"></i> info@rafusoft.com</a>
        </div>

        <div class="flex items-center gap-3">
          <p>
            <i class="fa-solid fa-map-marker"></i> NIMNAGAR-BALUBARI
            DINAJPUR-5200
          </p>
        </div>
      </div>

      <div class="flex items-center gap-3">
        <a class="block text-2xl text-[#1877f2] transform hover:scale-105 transition-all" href="https://www.facebook.com/rafusoft">
          <i class="fab fa-facebook"></i>
        </a>

        <a class="block text-2xl text-[#1da1f2] transform hover:scale-105 transition-all" href="https://twitter.com/rafusoft">
          <i class="fab fa-twitter"></i>
        </a>

        <a class="block text-2xl text-[#f77737] transform hover:scale-105 transition-all" href="https://www.instagram.com/rafusoft/">
          <i class="fab fa-instagram"></i>
        </a>
      </div>
    </div>
    <div class="content">
      <hr class="h-[1px] bg-white bg-opacity-50 my-3" />
    </div>
    <div class="content">
      <p>© 2023 Rafusoft.com | Trade License: 525</p>
    </div>
  </footer>
  <!-- Footer -->

  <script src="/themes/bs/js/app.js"></script>
</body>

</html>