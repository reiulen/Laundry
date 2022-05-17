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
                  <h5 class="breadcrumbs-title">Entry Paket</h5>
                  <ol class="breadcrumbs">
                    <li><a href="index.html">Dashboard</a>
                    </li>
                    <li><a href="#html">Referensi</a>
                    </li>
                    <li class="active">Paket</li>
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

                        <form class="formValidate" id="formValidate" method="post" action="{{ route('refpaket.update', $data->id) }}">
                          @method('put')
                          @csrf
                          <div class="row">
                            <div class="input-field col s12">                              
                              <i class="mdi-toggle-check-box prefix"></i>
                              <input id="nomor_paket" type="text" value="{{ $data->no_paket }}" name="no_paket" class="validate" placeholder="CSR1" required>
                              <label for="nomor_paket" data-error="Silahkan masukan Nomor Paket.">Nomor Paket</label>                              
                              @error('no_paket')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                              @enderror
                            </div>
                          </div>   

                          <div class="row">
                            <div class="input-field col s6">
                              <i class="mdi-action-redeem prefix"></i>
                              <input id="nama_paket" name="nama_paket" value="{{ $data->nama_paket }}" type="text" class="validate" placeholder="Cuci + Setrika" required>
                              <label for="nama_paket" data-error="Silahkan masukan Nama Paket.">Nama Paket</label>
                                @error('nama_paket')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                            </div>
                          
                            <div class="input-field col s6">
                              <i class="mdi-action-shopping-basket prefix"></i>
                              <input id="jenis_paket" name="jenis_paket" type="text" value="{{ $data->jenis_paket }}" class="validate" placeholder="Regular" required>
                              <label for="jenis_paket" data-error="Silahkan masukan Jenis Paket.">Jenis Paket</label>
                               @error('jenis_paket')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                               @enderror
                            </div>
                          </div>     

                          <div class="row">
                            <div class="input-field col s6">
                              <i class="mdi-editor-insert-invitation prefix"></i>
                              <input id="jmlhari" type="text" name="jumlah_hari" value="{{ $data->jumlah_hari }}" class="validate" placeholder="1" required>
                              <label for="jmlhari">Jumlah Hari</label>
                               @error('jumlah_hari')
                                 <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                               @enderror
                            </div>
                          
                            <div class="input-field col s6">
                              <i class="mdi-editor-attach-money prefix"></i>
                              <input id="harga" name="harga" type="text" value="{{ $data->harga }}" class="validate" placeholder="70000" required>
                              <label for="harga">Harga</label>
                               @error('harga')
                                 <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                               @enderror
                            </div>
                          </div>     

                          <div class="row">
                            <div class="input-field col s12">
                              <select id="satuan" name="satuan" required>
                                @if(old('satuan'))
                                <option value="{{ old('satuan') }}" disabled selected>{{ old('satuan') }}</option>
                                  @else
                                  <option value="{{ $data->satuan }}" disabled selected>{{ $data->satuan }}</option>
                                @endif
                                <option value="1">Kg</option>
                                <option value="2">Meter</option>
                                <option value="3">Buah</option>
                              </select>
                              <label>Satuan</label>
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

  @section('script')
  <script type="text/javascript">
        $("#harga").keypress(function(e) {
            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                return false;
            }
        });

        $("#jmlhari").keypress(function(e) {
              if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                  return false;
              }
        });

        $('#currency-demo').formatter({
        'pattern': 'Rp {{999}}.{{999}}.{{999}},{{99}}',
         'persistent': true
        });
  </script>
  @endsection

@endsection