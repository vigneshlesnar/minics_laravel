<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="{{asset('images/fevicon.png')}}" type="image/gif" />
  <meta name="keywords" content="minics, shop, bags " />
  <meta name="description" content="We offer a wide range of polyethylene & polypropylene based packaging materials that are recognized across the industries for their superior quality." />
  <meta name="author" content="" />

  <title>Minics</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet"> <!-- range slider -->

  <!-- font awesome style -->
  <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <link href="{{asset('css/responsive.css')}}" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid">
          <div class="top_nav_container">
            <div class="contact_nav">
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>&nbsp;
                <span>
                 <a href="tel:+91 9003227719">9003227719</a> 
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;
                <span>
                  <a href="mailto:">demo@gmail.com</a>
                  
                </span>
              </a>
            </div>
           
          </div>

        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="{{url('/')}}">
              <span>
                Minics
              </span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav {{Request::is('/')?'active':''}}">
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/')}}">Home </span></a>
                </li>
                <li class="nav-item {{Request::is('about')?'active':''}}">
                  <a class="nav-link" href="{{url('about')}}"> About</a>
                </li>
                <li class="nav-item {{Request::is('products')?'active':''}}">
                  <a class="nav-link" href="{{url('products')}}">Products</a>
                </li>
                <li class="nav-item {{Request::is('why-us')?'active':''}}">
                  <a class="nav-link" href="{{url('why-us')}}">Why Us</a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" href="testimonial.html">Testimonial</a>
                </li> -->
                <li class="nav-item {{Request::is('contact')?'active':''}}">
                  <a class="nav-link" href="{{url('contact')}}">Contact Us</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
   {{-- ///////////////////////////////////// Content ////////////////////////////////////// --}}

        @yield('content')

   {{-- ///////////////////////////////////// Content End ////////////////////////////////////// --}}

  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_contact">
            <h5>
              <a href="{{url('/')}}" class="navbar-brand">
                <span>
                  Minics
                </span>
              </a>
            </h5>
            <p>
              <i class="fa fa-map-marker" aria-hidden="true"></i></i>&nbsp;
              Hudco Police Station Backside, Bathalapalli,Hosur-635 109
            </p>
            <p>
              <i class="fa fa-phone" aria-hidden="true"></i>&nbsp;
              <a href="tel:+91 9003227719" style="color:white">9003227719</a>
              <br>
              &nbsp;&nbsp;&nbsp;&nbsp;
              <a href="tel:+91 9443910302" style="color:white">9443910302</a>
              
            </p>
            <p>
              <i class="fa fa-envelope" aria-hidden="true"></i></i>&nbsp;
              <a href="mailto:demo@gmail.com" style="color:white"> demo@gmail.com</a>
             
            </p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="info_info">
            <h5>
              Information
            </h5>
            <p>
            Incorporated in 1990 in Hosur with a vision to become a global leader in Packaging Industry, Mr-Ecomart is a reputed name serving multinational dynamic clients with professionalism, perfection and customization.
            </p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_links">
            <h5>
              Useful Link
            </h5>
            <ul>
              <li>
                <a href="{{url('/')}}">
                  Home
                </a>
              </li>
              <li>
                <a href="{{url('about')}}">
                  About
                </a>
              </li>
              <li>
                <a href="{{url('products')}}">
                  Products
                </a>
              </li>
              <li>
                <a href="{{url('why-us')}}">
                  Why Us
                </a>
              </li>
              <li>
                <a href="{{url('contact')}}">
                  Contact Us
                </a>
              </li>
           
            </ul>
          </div>
        </div>
        
      </div>
    </div>
  </section>

  <!-- end info_section -->


  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved by
        <a href="https://esbeytechnology.com/">Esbay Technology</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
  <!-- bootstrap js -->
  <script src="{{asset('js/bootstrap.js')}}"></script>
  <!-- custom js -->
  <script src="{{asset('js/custom.js')}}"></script>


</body>

</html>