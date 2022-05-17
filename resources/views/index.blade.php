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
    <title>{{ $title }}</title>

    <!-- Favicons-->
    <link rel="icon" href="{{ asset('images/favicon/favicon-32x32.png') }}" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="{{ asset('images/favicon/apple-touch-icon-152x152.png') }}">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="{{ asset('images/favicon/mstile-144x144.png') }}">
    <!-- For Windows Phone -->


    <!-- CORE CSS-->    
    <link href="{{ asset('css/materialize.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ asset('css/style.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
    <link href="{{ asset('css/custom/custom.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection">


    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="{{ asset('js/plugins/perfect-scrollbar/perfect-scrollbar.css') }}" type="text/css" rel="stylesheet" media="screen,projection">


</head>

<body>
    
@include('partials.sidebar')

            <!-- START CONTENT -->
            <section id="content">

                <!--start container-->
                <div class="container">

                    <!--chart dashboard start-->
                    <div id="chart-dashboard">
                        <div class="row">

                        </div>
                    </div>
                    <!--chart dashboard end-->

                    <!-- //////////////////////////////////////////////////////////////////////////// -->

                    <!--card stats start-->
                    <div id="card-stats">
                        <div class="row">
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content  green white-text">
                                        <p class="card-stats-title"><i class="mdi-social-group-add"></i> Jumlah Konsumen</p>
                                        <h4 class="card-stats-number">{{ $konsumen }}</h4>
                                    </div>
                                    <div class="card-action  green darken-2">
                                        <div id="clients-bar" class="center-align"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content pink lighten-1 white-text">
                                        <p class="card-stats-title"><i class="mdi-editor-insert-drive-file"></i> Traksaksi Hari Ini</p>
                                        <h4 class="card-stats-number">{{  $transaksi  }}</h4>
                                    </div>
                                    <div class="card-action  pink darken-2">
                                        <div id="invoice-line" class="center-align"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content blue-grey white-text">
                                        <p class="card-stats-title"><i class="mdi-action-trending-up"></i> Pendapatan Hari Ini</p>
                                        <h4 class="card-stats-number">Rp. {{ $pendapatanhariini }}</h4>
                                    </div>
                                    <div class="card-action blue-grey darken-2">
                                        <div id="profit-tristate" class="center-align"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content purple white-text">
                                        <p class="card-stats-title"><i class="mdi-editor-attach-money"></i>Total Transaksi</p>
                                        <h4 class="card-stats-number">Rp. {{ $total }} </h4>
                                    </div>
                                    <div class="card-action purple darken-2">
                                        <div id="sales-compositebar" class="center-align"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--card stats end-->

                </div>
                <!--end container-->
            </section>
            <!-- END CONTENT -->

        </div>
        <!-- END WRAPPER -->

    </div>
    <!-- END MAIN -->


    <!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="{{ asset('js/plugins/jquery-1.11.2.min.js') }}"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="{{ asset('js/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

    <!-- sparkline -->
    <script type="text/javascript" src="{{ asset('js/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/sparkline/sparkline-script.js') }}"></script>  
   
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="{{ asset('js/plugins.min.js') }}"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="{{ asset('js/custom-script.js') }}"></script>
    <!-- Toast Notification -->

</body>

</html>