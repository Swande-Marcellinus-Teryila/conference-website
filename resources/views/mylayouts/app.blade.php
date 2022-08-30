<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>
<link rel="icon" type="image/png" href="images/indeximg/logo.png" class="img-responsive">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Apostolic Ministers Conference">
<meta name="keyword" content="html,javascript">
<meta name="author" content="Apostolic Ministers Conference is a HOLYGHOST anchored Assembly that was birthed in 2015 to address the following issues. Borne out of a vision received by God's Servant,<strong> Rev. Gabriel Amedu </strong>in 2014,<br>

 the Conference focuses on bringing Ministers together across non-denominational lines so as to:
 Set them ablaze for greater exploits amc">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/theme.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/custom.css') }}">


<link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
   />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
   
<link rel="stylesheet" href="{{ asset('css/app.css') }}" >

<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body> 
     <div id="preloader">
        <div id="status">
          <center><i class="fa fa-spinner fa-spin fa-4x"></i></center></div>
      </div>
      <div id="main">
      <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
      <header id="header">
        <nav class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
              <a class="navbar-brand" href="index.html"><img src="images/indeximg/logo.png" alt="" width="80" height="50"></a></div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav custom_nav">
       <li> <a href="{{ url('/') }}">HOME</a></li>
                <li class="dropdown">
               <li><a href="{{ url('about') }}" >ABOUT US</a></li>
               <li><a href="{{ url('contact') }}">CONTACT US</a></li>
                
                <!--incase of dropdown add it here -->
                
      
                <li><a href="{{ route('conference_impact') }}">CONFERENCE IMPACTS</a></li>
                   <!--li><a href="#">DEPARTMENTS</a></li-->
                  <!--li><a href="mediaresources.php">MEDIA/RESOURCES</a></li-->              <!-- in case of drop down add here -->
                  @if (!auth()->user())
                         
                  <li><a href="{{ route('register') }}">REGISTER</a></li>
                  <li><a href="{{ route('login') }}">LOGIN</a></li>
                  @else
                    <li>
                      @if (auth()->user()->userlevel==1)
                      <li><a href="{{ route('admin/') }}">Dashboard</a></li>
                     @else
                      <li><a href="{{ route('register') }}">Dashboard</a></li>
                      @endif
                      <form method="post" action="{{ route('logout') }}"> 
                      @csrf
                    <button type="submit" style="background:skyblue; color:red; font-size:18px">Logout <i class="fa fa-signout"></i></i></button>
                    </form>
                    </li>
                
                  @endif
    
              
              </ul>
            </div>
           
          </div>
        </nav>
      </header>
      <!-- end of head links-->
<div style="height:55px; width:100%; background-color:white"></div>

  @yield('content')

  <footer style="margin-top: 50px; ">
      
    @if (Route::currentRouteName()!='dashboard')
  

    
    <div style="background-color:rgb(206, 206, 238)">
      <div style="text-align: center; background-color:rgb(206, 206, 238)" >
        <a href="https://web.facebook.com/search/top?q=apostolic%20ministers%27%20conference"><i class="fa fa-facebook-square fa-3x text text-primary"></i> </a>
       <a href="https://twitter.com/Apostolicminis1?t=7-_0moe3tuGgbnPgGJJPDg&s=09"><li class="fa fa-twitter-square fa-3x text text-primary"></li></a> 
        <a href="https://www.youtube.com/channel/UC44MsS-pQqHQM5UpmZ0dQIA"><li class="fa fa-youtube-square fa-3x text text-danger"></li></a>
      </div>
        <p style="text-align: center;">Copyright &copy; {{ date("Y") }}
        <a href="{{ url('/') }}">Apostolic Ministers Conference </a> </p>
        <br>
          </div>
          
          <div  style="background-color:rgb(237, 237, 238); text-align:center; color:blue">
          <p>&nbsp;<br></p>
          <i><a  href="https://web.facebook.com/MarcConnect-Technologies-111190170232803" style="text-align:center">developed by:Marcconnect &</a> &nbsp;&nbsp;
        <a  href="https://web.facebook.com/errandconnect" >Errandconnect</a> </i>
          </div>
          <p>&nbsp;<br></p>
  
          @endif
  </footer>
  </div>
  <script src="{{ asset('assets/js/jquery.min.js') }}"></script> 
  <script src="{{ asset('assets/js/wow.min.js') }}"></script> 
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script> 
  <script src="{{ asset('assets/js/slick.min.js') }}"></script> 
  <script src="{{ asset('assets/js/custom.js') }}"></script>

  @yield('js_section')