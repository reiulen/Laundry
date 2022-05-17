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
                  <h5 class="breadcrumbs-title">Entry Karyawan</h5>
                  <ol class="breadcrumbs">
                    <li><a href="index.html">Dashboard</a>
                    </li>
                    <li class="active">Karyawan</li>
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

                        <form class="formValidate" id="formValidate" method="POST" action="{{ route('karyawan.update', ['karyawan' => $data->id]) }}">
                          @csrf
                          @method('put')
                          <div class="row">
                            <div class="input-field col s6">                              
                              <i class="mdi-toggle-check-box prefix"></i>
                              <input disabled value="{{ $data->no_karyawan }}" name="no_karyawan" id="no_karyawan" type="text" class="validate" required>
                              <label for="no_karyawan" data-error="Silahkan masukan Nomor Karyawan.">Nomor Karyawan</label>                              
                            </div>

                            <div class="input-field col s6">
                              <i class="mdi-action-account-circle prefix"></i>
                              <input id="nama_karyawan" type="text" name="nama" value="{{ $data->nama }}" class="validate" placeholder="Andri Udiartomo" required>
                              <label for="nama_karyawan"  data-error="Silahkan masukan Nama Karyawan.">Nama Karyawan</label>
                              @error('nama_karyawan')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                              @enderror
                            </div>                        
                          </div>

                          <div class="row">
                            <div class="input-field col s6">
                              <i class="mdi-social-person prefix"></i>
                              <input id="username" type="text" name="username" value="{{ $data->username }}"  class="validate" placeholder="Andri_Udiartomo" required>
                              <label for="username"  data-error="Silahkan masukan Username.">User Name</label>
                              @error('username')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                              @enderror
                            </div>

                            <div class="input-field col s6">
                              <i class="mdi-action-room prefix"></i>
                              <input id="alamat" type="text" name="alamat" value="{{ $data->alamat }}" class="validate" placeholder="Jln. Gandasari kav. 3 Arcamanik Bandung" required>
                              <label for="alamat"  data-error="Silahkan masukan Alamat.">Alamat</label>
                              @error('alamat')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                              @enderror
                            </div>
                          
                          </div>
                          <div class="row">
                            <div class="input-field col s6">
                              <i class="mdi-communication-phone prefix"></i>
                              <input id="telepon" type="text" name="no_telepon" value="{{ $data->no_telepon }}" class="validate" placeholder="0811123456" required>
                              <label for="telepon"  data-error="Silahkan masukan Telepon.">Telepon</label>
                              @error('no_telepon')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                              @enderror
                            </div>
                          </div>

                          <div class="row">
                            <div class="col s12">
                              <label for="crole">Role </label>
                              
                              <select class="error browser-default" id="crole" name="role" data-error=".errorTxt6" required>
                                @if(old('role'))
                                  <option value="{{ old('role') }}">{{ old('role') }}</option>
                                  @else
                                  <option value="{{ $data->role }}" name="role" disabled selected>{{ $data->role }}</option>
                                @endif
                                <option value="Admin">Admin</option>
                                <option value="Karyawan">Karyawan</option>
                              </select>
                            <div class="input-field">
                                <div class="errorTxt6"></div>
                            </div>
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