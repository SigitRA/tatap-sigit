<!DOCTYPE html>
<html>
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>@yield('title',$title)</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{Asset('css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{Asset('css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{Asset('css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{Asset('images/fevicon.png')}}" type="image/gif" />
      <!-- font css -->
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{Asset('css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   </head>
   <body>

      <!-- header section start -->
      <div class="header_section">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="navbar-brand"href="{{route('home')}}" style="color:white;"><b>TATAP SIGIT</b></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <div class="navbar-nav w-100">
                    <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                    <a class="nav-link" href="{{ route('positions.index') }}">Position</a>
                    <a class="nav-link" href="{{ route('departements.index') }}">Departments</a>
                    <!-- @if(auth()->user()->position==1)
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                    @endif -->
                </div>
                  <form class="form-inline my-2 my-lg-0">
                     <div class="serach_icon"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                  </form>
               </div>
            </nav>
         </div>
      </div>
      <!-- header section end -->
<br><br>

            <div class="container-fluid">
                <div class="card">
                    <h1 class="card-header">@yield('title',$title)</h1>
                      <div class="card-body">
                        @yield('content')
                      </div>
                </div>
            </div>
<br><br>
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="footer_section_2">
               <div class="row">
                  <div class="col-lg-3">
                     <div class="footeer_logo"><img src="images/logo.png"></div>
                     <p class="lorem_text">tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea</p>
                  </div>
                  <div class="col-lg-3">
                     <h4 class="footer_taital">Discover</h4>
                     <div class="footer_menu">
                        <ul>
                           <li><a href="#">Discover</a></li>
                           <li><a href="index.html">Home</a></li>
                           <li><a href="#">Categories</a></li>
                           <li><a href="about.html">About Us</a></li>
                           <li><a href="contact.html">Contacts</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-3">
                     <h4 class="footer_taital">Contact Us</h4>
                     <p class="footer_text">Personal Info Cookie Policy Terms of Us Privacy Policy</p>
                  </div>
                  <div class="col-lg-3">
                     <h4 class="footer_taital">Newsletter</h4>
                     <div class="form-group">
                        <textarea class="update_mail" placeholder="Email" rows="5" id="comment" name="Email"></textarea>
                        <div class="subscribe_bt"><a href="#">Subscribe</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <p class="copyright_text">2023 All Rights Reserved. Design by <a href="https://html.design">Free Html Templates</a>  Distribution by <a href="https://themewagon.com">ThemeWagon</p>
               </div>
            </div>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="{{Asset('js/jquery.min.js')}}"></script>
      <script src="{{Asset('js/popper.min.js')}}"></script>
      <script src="{{Asset('js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{Asset('js/jquery-3.0.0.min.js')}}"></script>
      <script src="{{Asset('js/plugin.js')}}"></script>
      <!-- sidebar -->
      <script src="{{Asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{Asset('js/custom.js')}}"></script>
   </body>
</html>