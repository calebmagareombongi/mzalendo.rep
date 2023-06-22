<!DOCTYPE html>
<html lang="en">

<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>M~zalendo</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <!-- style css -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <!-- Responsive-->
  <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
  <!-- fevicon -->
  <link rel="icon" href="{{ asset('images/fevicon.png') }}" type="image/gif" />
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <!-- owl stylesheets -->
  <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
    media="screen">
</head>
<!-- body -->

<body>
  <!-- header section start -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="logo"><a href="index.html"><img src="images/logo.png" width="50" height="50"></a></div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link" href="index.php">Home</a>
        <a class="nav-item nav-link" href="#about_main">About</a>
        <a class="nav-item nav-link" href="#jobs">Jobs</a>
        <a class="nav-item nav-link" href="#announcements">Announcements</a>
        <a class="nav-item nav-link" href="#projects">Projects</a>

        <a class="nav-item nav-link" href="#contactus">E-services</a>

        <a class="nav-item nav-link" href="#contactus">Contact us</a>
    @if(auth()->check())
  <a class="nav-item nav-link" href="{{ route('dashboard') }}">Dashboard</a>

<form  class="nav-item nav-link" method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="nav-item nav-link">Logout</button>
</form>


  <span class="nav-item nav-link">Welcome, {{ auth()->user()->name }}</span>
@else
  <a class="nav-item nav-link" href="{{ route('login') }}">Login</a>
  <a class="nav-item nav-link" href="{{ route('register') }}">Register</a>
@endif

      </div>
    </div>
  </nav>
  <!-- header section end -->
  <!-- banner section start -->
  <div class="banner_section layout_padding">
    <div class="container">
      <section class="slide-wrapper">
        <div class="container">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <h1 class="yoga_text">M~zalendo</h1>
                <h1 class="body_text">Tranparency:</h1>
                <p class="contrary_text"> "Transparency is not about restoring trust in institutions. Transparency is the politics of managing mistrust." - Ivan Krastev
                   </p>
                <div class="contact_bt"><a href="#">Contact Us</a></div>
              </div>
              <div class="carousel-item">
                <h1 class="yoga_text"> M~zalendo </h1>
                <h1 class="body_text">Citizenship:</h1>
                <p class="contrary_text"> "The price of freedom is eternal vigilance." - Thomas Jefferson
                   </p>
                <div class="contact_bt"><a href="#">Contact Us</a></div>
              </div>
              <div class="carousel-item">
                <h1 class="yoga_text"> M~zalendo </h1>
                <h1 class="body_text">Credibility:</h1>
                <p class="contrary_text"> "If you have integrity, nothing else matters. If you don't have integrity, nothing else matters." - Alan K. Simpson
                   </p>
                <div class="contact_bt"><a href="#">Contact Us</a></div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
    </div><!-- about section start -->
<div class="about_section layout_padding">
  <div class="container" id="about_main">
    <div class="about_main">
      <h1 class="about_text">About Us</h1>
      <p class="ipsum_text">
        <span id="short_text">Nairobi is a county in Kenya, and it is divided into administrative units starting from the highest level down to the smallest ward.</span>
        <span id="more_text" style="display: none;">
          Here is the exact breakdown of Nairobi County's administrative structure, starting from the highest level down to the smallest ward:


          3. Ward - Each constituency in Nairobi County is further divided into several wards, which are represented in the County Assembly by a Ward Representative (MCA). Nairobi County has a total of 85 wards, which are responsible for providing basic services to their residents, such as healthcare, education, and sanitation.

          Overall, the administrative structure of Nairobi County is designed to ensure that the needs of its residents are met at all levels of government. The county government works closely with the national government to implement policies and programs that benefit its citizens, while the constituencies and wards provide a direct link between the people and their elected representatives.
        </span>
      </p>
    </div>
    <div class="about_bt_main">
      <div class="about_bt"><a href="#" onclick="toggleText();">About More</a></div>

@section("conent")

<script>
  function toggleText() {
    var shortText = document.getElementById("short_text");
    var moreText = document.getElementById("more_text");
    var buttonText = document.querySelector(".about_bt a");

    if (moreText.style.display === "none") {
      shortText.style.display = "none";
      moreText.style.display = "inline";
      buttonText.textContent = "About Less";
    } else {
      shortText.style.display = "inline";
      moreText.style.display = "none";
      buttonText.textContent = "About More";
    }
  }
</script>

@endsection


    </div>
  </div>
</div>
<!-- about section end -->


 <!-- JOBS AND PROJECTS section START -->
<div class="pricing_section layout_padding">
  <div class="container" id="projects">
    <h1 class="pricing_taital">More</h1>
    <div class="pricing_section_2">
      <div class="row">
        <div class="col-md-6">
          <div class="plane_section">
            <h1 class="starter_text">PROJECTS</h1>
            <div class="number_text">
              <img src="images/prologo.webp" alt="Projects" width="100" height="100">
            </div>
            <p class="lorem_amet_text"><a href="Projects.php">CLICK FOR MORE</a></p>
          </div>
        </div>
        <div class="col-md-6" id="jobs">
          <div class="plane_section">
            <h1 class="starter_text">JOBS</h1>
            <div class="number_text">
              <img src="images/jobslogo.jpg" alt="Jobs" width="100" height="100">
            </div>
            <p class="lorem_amet_text"><a href="Jobs.php">CLICK FOR MORE</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  <!-- JOBS AND PROJECTS section end -->


<!-- announcements section start -->
<div class="client_section layout_padding">
  <div class="container" id="announcements">
    <h1 class="costomer_taital">Announcements</h1>
    <div id="main_slider" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        @php
          $announcements = \DB::table('Annoucements')->select('Tittle', 'Announcements', 'Date_added')->limit(30)->get();
          $active_indicator = "active";
          for ($i = 0; $i < count($announcements); $i += 3) {
            $indicator_class = ($i == 0) ? $active_indicator : '';
        @endphp
            <li data-target="#main_slider" data-slide-to="{{ $i/3 }}" class="{{ $indicator_class }}"></li>
        @php
          }
        @endphp
      </ol>
      <div class="carousel-inner">
        @php
          if (count($announcements) > 0) {
            $count = 1;
            $active_class = 'active';
            foreach ($announcements as $announcement) {
              if ($count % 3 == 1) {
                $active_class = ($count == 1) ? 'active' : '';
        @endphp
                <div class="carousel-item {{ $active_class }}">
                  <div class="client_section_2">
                    <div class="row">
        @php
              }
        @endphp
                      <div class="col-md-6">
                        <div class="client_icon">
                          <div class="client_left">
                            <div class="client_icon"><img src="images/client-icon.png"></div>
                          </div>
                          <div class="client_right">
                            <h1 class="carklo_text">{{ $announcement->Tittle }}</h1>
                            <p class="lorem_dolar_text">Announcements {{ $count }}</p>
                          </div>
                        </div>
                        <div class="lorem_main">
                          <div class="top_arrow"><img src="images/top-arrow-icon.png"></div>
                          <p class="ipsum_dolor_text">{{ $announcement->Announcements }}</p><br>
                           <p class="ipsum_dolor_text">{{ $announcement->Date_added }}</p>
                        </div>
                       
                      </div>
        @php
              if ($count % 3 == 0 || $count == count($announcements)) {
        @endphp
                    </div>
                  </div>
                </div>
        @php
              }
              $count++;
            }
          }
        @endphp
      </div>
    </div>
  </div>
</div>
<!-- announcements section end -->








  <!-- contact us section start -->
  <div class="contact_us_section layout_padding" id="contactus">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="contact_us_taital">Contact Us</h1>
          <div class="contact_detail">
            <div class="img_container">
              <img src="images/location_icon.png">
              <span class="detail">Location</span>
            </div>
            <p class="address"></p>
          </div>
          <div class="contact_detail">
            <div class="img_container">
              <img src="images/call_icon.png">
              <span class="detail">Phone</span>
            </div>
            <p class="address">+02002020</p>
          </div>
          <div class="contact_detail">
            <div class="img_container">
              <img src="images/mail_icon.png">
              <span class="detail">Email</span>
            </div>
            <p class="address">nairobicounty@gmail.com</p>
          </div>
          <div class="contact_detail">
            <div class="img_container">
              <img src="images/twitter_icon.png">
              <span class="detail">Twitter</span>
            </div>
            <p class="address">twitter.com/demo</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form_container">
            <form action="#">
              <h1 class="join_taital">Join us to get latest news</h1>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter Your Name" required>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Enter Your Email" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Phone Number" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" rows="5" id="comment" placeholder="Message" required></textarea>
              </div>
              <div class="submit_bt"><button type="submit">Submit</button></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- contact us section end -->
  <!-- footer section start -->
  <div class="footer_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h1 class="useful_text">Useful Links</h1>
          <div class="footer_menu">
            <ul>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Terms of Use</a></li>
              <li><a href="#">Disclaimer</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <h1 class="useful_text">Newsletter</h1>
          <div class="newsletter_form">
            <form action="#">
              <input type="text" placeholder="Enter Your Email" required>
              <button>Subscribe</button>
            </form>
          </div>
        </div>
        <div class="col-md-4">
          <h1 class="useful_text">Contact Us</h1>
          <div class="contact_detail">
            <div class="img_container">
              <img src="images/location_icon.png">
              <span class="detail">Location</span>
            </div>
            
          </div>
          <div class="contact_detail">
            <div class="img_container">
              <img src="images/call_icon.png">
              <span class="detail">Phone</span>
            </div>
            <p class="address">+020001020</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- footer section end -->
  <!-- jQury -->
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <!-- carousel js-->
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
  <script src="{{ asset('js/scrollbar.js') }}"></script>
  <!-- first script-->
  <script src="{{ asset('js/script.js') }}"></script>
  <!-- second script -->
  <script src="{{ asset('js/slick.js') }}"></script>
</body>

</html>
