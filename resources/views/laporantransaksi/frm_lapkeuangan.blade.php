@extends('layout.main')

  @section('content')

      <!-- START CONTENT -->
      <section id="content">

        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper">
            <!-- Search for small screen -->
            <div class="header-search-wrapper grey hide-on-large-only">
                <i class="mdi-action-search active"></i>
                <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
            </div>
            <div class="container">
              <div class="row">
                <div class="col s12 m12 l12">
                  <h5 class="breadcrumbs-title">Laporan Keuangan</h5>
                  <ol class="breadcrumbs">
                    <li><a href="index.html">Dashboard</a>
                    </li>
                    <li><a href="#html">Laporan</a>
                    </li>
                    <li class="active">Keuangan</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!--breadcrumbs end-->


          <!--start container-->
          <div class="container">
              <div id="jqueryvalidation" class="section">
                <!--Form Advance-->          
                <div class="row">
                  <div class="col s12 m12 l12">
                    <div class="card-panel">

                        <form class="formValidate" id="formValidate" method="get" action="">
                          <div class="row">
                            <div class="input-field col s3">                              
                              <div id="datepicker0" class="input-group date" data-date-format="mm-dd-yyyy">   
                                <i class="mdi-action-event prefix"></i>                             
                                <input class="form-control custom-input" type="text" value="20-01-2021" id="dari"/>      
                                <span class="input-group-addon bg-white"></span>    
                                <label for="dari">Dari Tanggal</label>                        
                              </div>
                            </div>
                            <div class="input-field col s3">                              
                              <div id="datepicker1" class="input-group date" data-date-format="mm-dd-yyyy">         
                                <i class="mdi-action-event prefix"></i>                       
                                <input class="form-control custom-input" type="text" value="27-01-2021" id="sampai"/>      
                                <span class="input-group-addon bg-white"></span>   
                                <label for="sampai">Sampai Tanggal</label>                     
                              </div>
                            </div>
                            <div class="input-field col s6">                
                              <button class="btn cyan waves-effect waves-light left" type="submit" name="action">Cetak Laporan
                                <i class="mdi-action-print right"></i>
                              </button>
                            </div>
                          </div>        
                        </form>

                    </div>
                  </div>
                </div>
            </div>     
      </div>
        <!--end container-->

      </section>
      <!-- END CONTENT -->

      <!-- LEFT RIGHT SIDEBAR NAV-->

    </div>
    <!-- END WRAPPER -->

  </div>
  <!-- END MAIN -->


@section('script')
    <!--jsgrid-->
    <script type="text/javascript" src="js/plugins/jsgrid/js/db.js"></script> <!--data-->
    <script type="text/javascript" src="js/plugins/jsgrid/js/jsgrid.min.js"></script>
    <script type="text/javascript" src="js/plugins/jsgrid/js/jsgrid-script.js"></script>
    
    <!--custom-script.js - Add your own theme datepicker JS-->
    <script type="text/javascript" src='js/bootstrap-datepicker.js'></script>

    <script>
      $(function () {
        $("#datepicker0").datepicker({ 
              autoclose: true, 
              todayHighlight: true
        }).datepicker('update', new Date());
        $("#datepicker1").datepicker({ 
              autoclose: true, 
              todayHighlight: true
        }).datepicker('update', new Date());
      });
    </script>
@endsection

@endsection