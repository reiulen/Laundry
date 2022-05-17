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
                  <h5 class="breadcrumbs-title">Entry Konsumen</h5>
                  <ol class="breadcrumbs">
                    <li><a href="index.html">Dashboard</a>
                    </li>
                    <li class="active">Konsumen</li>
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

                        <form class="formValidate" id="formValidate" method="post" action="{{ route('konsumen.store') }}">
                          @csrf
                          <div class="row">
                            <div class="input-field col s6">                              
                              <i class="mdi-toggle-check-box prefix"></i>
                              <input disabled value="{{ $id }}" id="no_konsumen" type="text" class="validate">
                              <label for="nomor_konsumen" data-error="Silahkan masukan Nomor Konsumen.">Nomor Konsumen</label>                              
                            </div>
                            <div class="input-field col s6">
                              <i class="mdi-social-person prefix"></i>
                              <input id="nama_konsumen" name="nama_konsumen" type="text" class="validate" placeholder="Andri Udiartomo">
                              <label for="nama_konsumen" data-error="Silahkan masukan Nama Konsumen.">Nama Konsumen</label>
                            </div>
                          </div>

                          <div class="row">
                            <div class="input-field col s6">
                              <i class="mdi-action-room prefix"></i>
                              <input id="alamat" type="text" name="alamat" class="validate" placeholder="Jln. Gandasari kav. 3 Arcamanik Bandung">
                              <label for="alamat" data-error="Silahkan masukan Alamat.">Alamat</label>
                            </div>
                          
                            <div class="input-field col s6">
                              <i class="mdi-communication-phone prefix"></i>
                              <input id="telepon" type="text" name="no_telepon" class="validate" placeholder="0811123456">
                              <label for="telepon" data-error="Silahkan masukan Telepon.">Telepon</label>
                              @error('no_telepon')
                              <div class="invalid-feedback">
                                  {{ $message }}  
                              </div>
                              @enderror
                            </div>
                          </div>           
                            <div class="row">
                              <div class="input-field col s12">                
                                <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Simpan
                                  <i class="mdi-content-send right"></i>
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

@endsection