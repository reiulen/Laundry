<!DOCTYPE html>
<html lang="en">

<!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 3.1
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
  <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
  <title> {{ $title }} | clothes LOUNDRY</title>

  
  <!-- Favicons-->
  <link rel="icon" href="{{ asset('images/favicon/favicon-32x32.png') }}" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="{{ asset('images/favicon/apple-touch-icon-152x152.png') }}">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="{{ asset('images/favicon/mstile-144x144.png') }}">
  <!-- For Windows Phone -->

  <!--datepicker css-->
  <link href="{{ asset('css/bootstrap-datepicker.css') }}" type="text/css" rel="stylesheet" media="screen,projection">

  <!-- CORE CSS-->
  <link href="{{ asset('css/materialize.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="{{ asset('css/style.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Custome CSS-->    
  <link href="{{ asset('css/custom/custom.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection">

  <!--Data Table Css-->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="{{ asset('js/plugins/prism/prism.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="{{ asset('js/plugins/perfect-scrollbar/perfect-scrollbar.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="{{ asset('js/plugins/chartist-js/chartist.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
  <!--jsgrid css-->
  <link href="{{ asset('js/plugins/jsgrid/css/jsgrid.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="{{ asset('js/plugins/jsgrid/css/jsgrid-theme.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
  
  
</head>

<body>

    @include('partials.sidebar')

    @yield('content')
  
    <!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="{{ asset('js/plugins/jquery-1.11.2.min.js') }}"></script>    
    <!--angularjs-->
    <script type="text/javascript" src="{{ asset('js/plugins/angular.min.js') }}"></script>
    <!--materialize js-->
    <script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
    <!--prism -->
    <script type="text/javascript" src="{{ asset('js/plugins/prism/prism.js') }}"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="{{ asset('js/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <!-- chartist -->
    <script type="text/javascript" src="{{ asset('js/plugins/chartist-js/chartist.min.js') }}"></script>   
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="{{ asset('js/plugins.min.js') }}"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="{{ asset('js/custom-script.js') }}"></script>

    @yield('script')

</body>

</html>