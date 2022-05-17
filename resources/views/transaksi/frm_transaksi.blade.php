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
                <h5 class="breadcrumbs-title">Pencatatan Loundry</h5>
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
      <div class="container">
        <p><a href="{{ route('transaksi.create') }}" class="waves-effect waves-light btn-large"><i class="mdi-editor-border-color right"></i>Tambah Transaksi</a></p>
            <div class="card" style="padding-right:20px;">
                     <table id="transaksi" class="stripe" style="width: 100%">
                        <thead>
                          <tr>
                            <th>No Order</th>
                            <th>No Konsumen</th>
                            <th>Paket</th>
                            <th>Waktu</th>
                            <th>Tgl Selesai</th>
                            <th>Status Bayar</th>
                            <th>Status Order</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($transaksi as $ky)
                          <tr>
                              <td>{{ $ky->no_transaksi }}</td>
                              <td>{{ $ky->nama_konsumen }}</td>
                              <td>{{ $ky->jenis_paket}}</td>
                              <td>{{ $ky->estimasi }} Hari</td>
                              <td>{{ $ky->tanggal_selesai }}</td>
                              <td>{{ $ky->status_bayar }}</td>
                              <td>{{ $ky->status_order }}</td>
                              <td>
                                <form action="{{ route('transaksi.destroy',$ky->id) }}" method="POST">
                                    @method('delete')
                                    @csrf
                                   <button class="btn-floating waves-effect waves-light red" onclick="return confirm('Apakah yakin ingin menghapus data {{ $ky->nama_konsumen }}')"><i class="material-icons prefix">remove_circle</i></button>
                                </form>
                                <a class="btn-floating modal-trigger waves-effect waves-light green" href="#modal{{ $ky->id }}"><i class="material-icons prefix">remove_red_eye</i></a>
                                <a class="btn-floating waves-effect modal-trigger waves-light blue" href="#edit{{ $ky->id }}"><i class="material-icons prefix">mode_edit</i></a>
                              </td>
                          </tr>
                          @endforeach
                        </tbody>
                     </table>
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

@foreach($transaksi as $rf)
   <div id="edit{{ $rf->id }}" class="modal">
    <div class="modal-content">
      <h4>Edit Status Order</h4>
      <form action="{{ route('transaksi.update', $rf->id) }}" method="POST">
        @method('put')
        @csrf
        <div class="input-field col s4">
            <select id="statusbayar" name="status_order">
                <option value="{{ $rf->status_bayar }}" disabled selected>{{ $rf->status_bayar }}</option>
                @foreach($status as $st)
                  <option value="{{ $st->status }}">{{ $st->status }}</option>
                @endforeach
            </select>
            <label>Edit Status Order</label>
        </div> 
        <div class="input-field col s4">
            <select id="statusorder" name="status_bayar">
                <option value="{{ $rf->status_order }}" disabled selected>{{ $rf->status_order }}</option>
                <option value="Lunas">Lunas</option>
                <option value="Belum Lunas">Belum Lunas</option>
            </select>
            <label>Edit Status Bayar</label>
        </div> 
           <div class="input-field col s4">
                <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Edit Status
                <i class="mdi-content-send right"></i>
                </button>
           </div>
      </form>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close btn red waves-effect waves-left left">Batal</a>
    </div>
  </div>
@endforeach

@foreach($transaksi as $ky)
  <div id="modal{{ $ky->id }}" class="modal">
    <div class="modal-content">
      <h4>Detail Transaksi</h4>
      <table>
        <tr>
          <th>No Transaksi</th>
          <td>{{ $ky->no_transaksi }}</td>
        </tr>
        <tr>
          <th>Nama Konsumen</th>
          <td>{{ $ky->nama_konsumen }}</td>
        </tr>
        <tr>
          <th>No Telepon</th>
          <td>{{ $ky->no_telepon }}</td>
        </tr>
        <tr>
          <th>Kode Paket</th>
          <td>{{ $ky->kode_paket}}</td>
        </tr>
        <tr>
          <th>Nama Paket</th>
          <td>{{ $ky->nama_paket}}</td>
        </tr>
        <tr>
          <th>Jenis Paket</th>
          <td>{{ $ky->jenis_paket}}</td>
        </tr>
        <tr>
          <th>Estimasi</th>
          <td>{{ $ky->estimasi}}</td>
        </tr>
        <tr>
          <th>Harga</th>
          <td>{{ $ky->harga}}</td>
        </tr>
        <tr>
          <th>Satuan</th>
          <td>{{ $ky->satuan }}</td>
        </tr>
        <tr>
          <th>Jumlah</th>
          <td>{{ $ky->jumlah }}</td>
        </tr>
        <tr>
          <th>Tanggal Masuk</th>
          <td>{{ $ky->tanggal_masuk }}</td>
        </tr>
        <tr>
          <th>Tanggal Selesai</th>
          <td>{{ $ky->satuan }}</td>
        </tr>
        <tr>
          <th>Jenis Pembayaran</th>
          <td>{{ $ky->jenis_pembayaran }}</td>
        </tr>
        <tr>
          <th>Status Bayar</th>
          <td>{{ $ky->status_bayar }}</td>
          <tr>
          <th>Status Order</th>
          <td>{{ $ky->status_order }}</td>
        </tr>
        </tr>
        <tr>
          <th>Total Bayar</th>
          <td>{{ $ky->total_bayar}}</td>
        </tr>
        <tr>
          <th>Keterangan</th>
          <td>{{ $ky->keterangan }}</td>
        </tr>
      </table>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>
  @endforeach

  @section('script')
    <!--jsgrid-->
    <script type="text/javascript" src="js/plugins/jsgrid/js/db_transaksi.js"></script> <!--data-->
    <script type="text/javascript" src="js/plugins/jsgrid/js/jsgrid.min.js"></script>
    <script type="text/javascript" src="js/plugins/jsgrid/js/jsgrid-script-transaksi.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#transaksi').DataTable();
    } );
    </script>
  @endsection

@endsection