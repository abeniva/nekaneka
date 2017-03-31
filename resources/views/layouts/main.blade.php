<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>NEKANEKA</title>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />
    <!-- mystyle -->
    <link rel="stylesheet" href="{{ URL::asset('css/nekastyle.css') }}" />
    <!-- font-awesome -->
    <link rel="stylesheet" href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}" />
  </head>
  <body>
    <nav class="navtop navbar navbar-inverse navbar-fixed-top">
      <div class="container">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">USD
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">USD</a></li>
            <li><a href="#">IDR</a></li>
          </ul>
        </li>
        
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">English
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Bahasa</a></li>
            <li><a href="#">English</a></li>
          </ul>
        </li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> (2) /</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-lock"></span> Sign In /</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-edit"></span> Register</a></li>
      </ul>
      </div>
    </nav>
    
    <nav class="navmenu navbar navbar-inverse">
      <div class="container contmenu">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">HOME</a></li>
        <li><a href="#">DESTINATIONS</a></li> 
        <li><a href="#">TRAVEL STYLES</a></li> 
        <li><a href="#">SPECIALS</a></li>
        <li><a href="#">BLOG</a></li> 
        <li><a href="#">CONTACT</a></li> 
      </ul>
      </div>
    </nav>
      @yield('content')
      <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <p class="titlecat"><b>CONTACT US</b></p><br /><br />
        <table class="footer-link" border="0">
          <tr>
            <td><li><i class="imgcnct fa fa-paper-plane fa-lg" aria-hidden="true"></i></li></td>
            <td><p class="txtcnct">19 Charlotte Street, Toronto, Ontario, M5V 2H5</p></td>
          </tr>
          
          <tr>
            <td><li><i class="imgcnct fa fa-envelope-o fa-lg" aria-hidden="true"></i></li></td>
            <td><p class="txtcnct">travel@gadventures.com</p></td>
          </tr>
        
          <tr>
            <td><li><span style="font-size:1.5em; padding: 5pt;" class="imgcnct glyphicon glyphicon-earphone "></span></li></td>
            <td><p class="txtcnct">+001 666 8989 55</p></td>
          </tr>
        </table>
      </div>
      <div class="col-sm-2">
        <p class="titlecat"><b>ABOUT US</b></p><br /><br />
        <ul class="footer-link">
          <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span> Why Us</a></li><br />
          <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span> Our trips</a></li><br />
          <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span> Responsible Business</a></li><br />
          <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span> Our History</a></li><br />
          <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span> Our Core Values</a></li><br />
        </ul>
      </div>
      <div class="col-sm-2">
        <p class="titlecat"><b>DESTINATIONS</b></p><br /><br />
        <ul class="footer-link">
          <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span> Africa</a></li><br />
          <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span> Asia</a></li><br />
          <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span> Central America</a></li><br />
          <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span> Europe</a></li><br />
          <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span> Middle East</a></li><br />
          <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span> North America</a></li><br />
          <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span> Oceania</a></li><br />
          <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span> South America</a></li><br />
        </ul>
      </div>
      <div class="col-sm-2">
        <p class="titlecat"><b>DESIGN THEMES</b></p><br /><br />
        <ul class="footer-link">
          <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span> Adventure</a></li><br />
          <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span> Hiking and Camping</a></li><br />
          <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span> Walking and Trekking</a></li><br />
          <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span> Safari Trip</a></li><br />
          <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span> Polar</a></li><br />
          <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span> Sailling</a></li><br />
          <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span> Climbing</a></li><br />
        </ul>
      </div>
      <div class="col-sm-3">
        <p class="titlecat"><b>LATEST TWEET</b></p><br /><br />
        <table class="footer-link" border="0">
          <tr>
            <td><li><i class="twitter fa fa-twitter fa-2x" aria-hidden="true"></i></li></td>
            <td><p class="txtcnct">@ThemeAdventures Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p></td>
          </tr>
          <tr>
            <td><li><i class="twitter fa fa-twitter fa-2x" aria-hidden="true"></i></li></td>
            <td><p class="txtcnct">@ThemeAdventures Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <ul class="footer-link" id="socicon">
          <li class="socmed-icon"><a href="#"><img src="facebook-logo.png" style="width:24px;height:24px;"></a></li>
          <li class="socmed-icon"><a href="#"><img src="twitter-logo.png" style="width:24px;height:24px;"></a></li>
          <li class="socmed-icon"><a href="#"><img src="google-logo.png" style="width:24px;height:24px;"></a></li>
          <li class="socmed-icon"><a href="#"><img src="linkedin-logo.png" style="width:24px;height:24px;"></a></li>
          <li class="socmed-icon"><a href="#"><img src="rss-logo.png" style="width:24px;height:24px;"></a></li>
        </ul>
      </div>
      
      <div class="col-sm-6 ccicon">
        <ul class="footer-link" id="socicon">
          <li class="payment-icon"><img src="americanexpress-logo.png" style="width:56px;height:56px;"></a></li>
          <li class="payment-icon"><img src="mastercard-logo.png" style="width:56px;height:56px;"></a></li>
          <li class="payment-icon"><img src="paypal-logo.png" style="width:56px;height:56px;"></a></li>
          <li class="payment-icon"><img src="visa-logo.png" style="width:56px;height:56px;"></a></li>
        </ul>
      </div>
    </div>
  </div>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    
  <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
  @yield('content-js')
  </body>
</html> 