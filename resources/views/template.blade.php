<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Portfolio</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->
  <link rel="stylesheet" href="{{asset('scss/style.scss')}}">

  <link rel="stylesheet" href="{{asset('style.scss')}}">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{asset('plugins/bootstrap/bootstrap.min.css')}}">
  <!-- slick slider -->
  <link rel="stylesheet" href="{{asset('plugins/slick/slick.css')}}">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="{{asset('plugins/themify-icons/themify-icons.css')}}">

  <!-- Main Stylesheet -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
  <link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">

</head>

<body>

  <div>
    @show
    @section('header')
    @include('header')
    @show

    @yield('content')

    @show
    @section('footer')
    @include('footer')
    @show

  </div>

  <!-- <div id="consent-popup" class="hidden" style="color: #ffffff; font-size: 16px; position: fixed;">
        <p>
          By using this site you agree to our 
            <a href="tnc.html">Terms and Conditions
              <img src="images/sales_qualifications.png" width="300" height="200" hidden="hidden">
            </a>.
            Please <a id="accept" href="#">Accept</a> these before using the site.
        </p>
    </div> -->

  <script src="{{asset('app.js')}}"></script>
  <!-- jQuery -->
  <script src="{{asset('plugins/jQuery/jquery.min.js')}}"></script>
  <!-- Bootstrap JS -->
  <script src="{{asset('plugins/bootstrap/bootstrap.min.js')}}"></script>
  <!-- slick slider -->
  <script src="{{asset('plugins/slick/slick.min.js')}}"></script>
  <!-- filter -->
  <script src="{{asset('plugins/shuffle/shuffle.min.js')}}"></script>

  <!-- Main Script -->
  <script src="{{asset('js/script.js')}}"></script>
</body>


</html>