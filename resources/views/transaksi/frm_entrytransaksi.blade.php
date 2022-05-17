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
                  <h5 class="breadcrumbs-title">Entry Transaksi</h5>
                  <ol class="breadcrumbs">
                    <li><a href="index.html">Dashboard</a>
                    </li>
                    <li class="active">Transaksi</li>
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

                        <form class="formValidate" id="formValidate" method="post" action="{{ route('transaksi.store') }}">
                          @csrf
                          <h4 class="header2">Pilih Konsumen</h4>
                          <div class="row">
                            <div class="input-field col s4">
                              <select onchange="konsumen(this.value)" id="nama_konsumen" name="nama_konsumen" required>
                                <option value="" disabled selected>pilih konsumen</option>
                                @foreach($konsumen as $k)
                                  <option value="{{ $k->id }}">{{ $k->nama_konsumen}}</option>
                                @endforeach
                              </select>
                              <label>Nama Konsumen</label>
                              @error('nama_konsumen')
                                {{ $message }}
                              @enderror
                            </div>
                            <div class="input-field col s4">
                              <i class="mdi-action-account-circle prefix"></i>
                              <input placeholder="KON001" name="no_konsumen" id="no_konsumen" type="text" class="validate" readonly required>
                              <label for="kode_konsumen">Kode Konsumen</label>
                              @error('no_konsumen')
                                {{ $message }}
                               @enderror
                            </div>
                            <div class="input-field col s4">
                              <i class="mdi-communication-phone prefix"></i>
                              <input placeholder="081123456" name="no_telepon" id="telepon" type="text" class="validate" readonly required>
                              <label for="telepon">Telepon</label>
                            </div>
                            @error('telepon')
                              {{ $message }}
                            @enderror
                          </div>
                          <br>
                          <h4 class="header2">Pilih Paket Loundry</h4>
                          <div class="row">
                              <div class="input-field col s2">
                                <select id="kode_paket" onchange="paket(this.value)"  name="kode_paket">
                                  <option disabled selected>pilih paket</option>
                                  @foreach($paket as $p)
                                    <option value="{{ $p->no_paket }}">{{ $p->no_paket }}</option>
                                  @endforeach
                                </select>
                                <label>Kode Paket</label>
                                @error('kode_paket')
                                  {{ $message }}
                                @enderror
                              </div> 
                              <div class="input-field col s2">
                                <input placeholder="Cuci Setrika" id="nama_paket" name="nama_paket" type="text" class="validate" required readonly>
                                <label for="nama_paket">Nama Paket</label>
                              </div>
                              <div class="input-field col s2">
                                <input placeholder="Regular" id="jenis" name="jenis_paket" type="text" class="validate" readonly>
                                <label for="jenis">Jenis</label>
                              </div>
                              <div class="input-field col s2">
                                <input placeholder="3" id="estimasi" name="estimasi" type="text" class="validate" readonly>
                                <label for="estimasi">Estimasi Hari</label>
                              </div>
                              <div class="input-field col s2">
                                <input placeholder="70000" id="harga" name="harga" type="text" class="validate" readonly>
                                <label for="harga">Harga</label>
                              </div>
                              <div class="input-field col s2">
                                <input placeholder="Kg" id="satuan" name="satuan" type="text" class="validate" readonly>
                                <label for="satuan">Satuan</label>
                              </div>
                          </div>
                          <div class="row">
                            <div class="input-field col s4">
                              <input placeholder="Minimal 5 Kg" name="jumlah" id="jumlah" type="text" class="validate">
                              <label for="jmlhari">Jumlah</label>
                            </div>
                            <div class="input-field col s4">
                              <div id="datepicker0" class="input-group date" data-date-format="dd-mm-yyyy">   
                                <i class="mdi-action-event prefix"></i>                             
                                <input class="form-control custom-input" name="tanggal_masuk" type="text" value="{{ date('dd-mm-yyyy') }}" id="dari"/>      
                                <span class="input-group-addon bg-white"></span>    
                                <label for="dari">Tanggal Masuk</label>                        
                              </div>
                            </div>
                            <div class="input-field col s4">                          
                              <div id="datepicker1" class="input-group date" data-date-format="dd-mm-yyyy">         
                                <i class="mdi-action-event prefix"></i>                       
                                <input class="form-control custom-input" name="tanggal_selesai" type="text" value="{{ date('dd-mm-yyyy') }}" id="sampai"/>      
                                <span class="input-group-addon bg-white"></span>   
                                <label for="sampai">Tanggal Selesai</label>                     
                              </div>
                            </div>                                                  
                          </div>
                          
                          <div class="row">
                            <div class="input-field col s4">
                              <select id="jenisbayar" name="jenis_pembayaran">
                                <option value="" disabled selected>Pilih pembayaran</option>
                                @foreach($jenis as $j)
                                  <option value="{{ $j->tipe_bayar }}">{{ $j->tipe_bayar }}</option>
                                @endforeach
                              </select>
                              <label>Jenis Bayar</label>
                              @error('jenis_pembayaran')
                                {{ $message }}
                               @enderror
                            </div>
                            <div class="input-field col s4">
                              <select id="status" name="status_bayar">
                                <option disabled selected>Status bayar</option>
                                <option value="Lunas">Lunas</option>
                                <option value="Belum Lunas">Belum Lunas</option>
                              </select>
                              <label>Status Bayar</label>
                            </div>    
                            <div class="input-field col s4">
                              <select id="statusorder" name="status_order">
                                <option value="" disabled selected>Pilih status order</option>
                                @foreach($status as $s)
                                  <option value="{{ $s->status }}">{{ $s->status }}</option>
                                @endforeach
                              </select>
                              <label>Status Order</label>
                            </div> 
                          </div>
                          <div class="row">
                            <div class="input-field col s4">                              
                              <i class="mdi-toggle-check-box prefix"></i>
                              <input  value="TRK{{ date('Ymd') .$transaksi+1 }}" name="no_transaksi" id="no_transaksi" type="text" class="validate" readonly>
                              <label for="no_transaksi" data-error="Silahkan masukan Nomor Transasksi.">Nomor Transaksi</label>                              
                            </div>
                            <div class="input-field col s4">
                              <input placeholder="10000" id="disc" value="0" type="text" class="validate">
                              <label for="disc">Discount</label>
                            </div>
                            <div class="input-field col s4">                              
                              <i class="mdi-editor-attach-money prefix"></i>
                              <input value="350000" name="total_bayar" id="total" type="text" class="validate">
                              <label for="total" data-error="Silahkan masukan Total Bayar.">Total Bayar</label>                              
                            </div>
                          </div>

                          <div class="row">
                            <div class="input-field col s8">
                              <i class="mdi-editor-insert-comment prefix"></i>
                              <input placeholder="Pelunasan saat barang di ambil" name="keterangan" id="keterangan" type="text" class="validate" required>
                              <label for="keterangan">Keterangan</label>
                            </div>
                            <div class="input-field col s4">
                              <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Buat Transaksi
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
  <script type="text/javascript" src='{{ asset('js/bootstrap-datepicker.js') }}'></script>
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

    function konsumen(id) {
    if (id == '') {
            $("#no_konsumen").val('');
            $("#telepon").val('');
        }else{
            $.getJSON('/getkonsumen/'+id,
                function(data){
                  $("#no_konsumen").val(data.no_konsumen);
                  $("#telepon").val(data.no_telepon);
            });
        }
    }

    function paket(id) {
    if (id == '') {
            $("#nama_paket").val('');
            $("#jenis").val('');
            $("#estimasi").val('');
            $("#harga").val('');
            $("#satuan").val('');
        }else{
            $.getJSON('/getpaket/'+id,
                function(data){
                  $("#nama_paket").val(data.nama_paket);
                  $("#jenis").val(data.jenis_paket);
                  $("#estimasi").val(data.estimasi);
                  $("#harga").val(data.harga);
                  $("#satuan").val(data.satuan);
            });
        }
    }
    $(".container").keyup(function(){
      var harga = parseInt($("#harga").val())
      var jumlah = parseInt($("#jumlah").val())
      var dis = parseInt($("#disc").val())

      var total = harga * jumlah - dis;
      $("#total").attr("value", total)
    });

     $("#jumlah").keypress(function(e) {
          if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
            return false;
          }
        });

     

        
  </script>
  @endsection

@endsection