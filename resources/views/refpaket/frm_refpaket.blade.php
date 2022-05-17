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
                <h5 class="breadcrumbs-title">Referensi Paket Loundry</h5>
                <ol class="breadcrumbs">
                  <li><a href="index.html">Dashboard</a>
                  </li>
                  <li><a href="#html">Referensi</a>
                  </li>
                  <li class="active">Paket Loundry</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->


        <!--start container-->
        <div class="container">
           <p><a href="{{ route('refpaket.create') }}" class="waves-effect waves-light btn-large"><i class="mdi-editor-border-color right"></i>Tambah Paket Loundry</a></p>
          <!--jsgrid-->
           <div class="card" style="padding-right:20px;">
                     <table id="karyawan" class="stripe" style="width: 100%">
                        <thead>
                          <tr>
                            <th>No Paket</th>
                            <th>Nama Paket</th>
                            <th>Jenis Paket</th>
                            <th>Jumlah Hari</th>
                            <th>Harga</th>
                            <th>Satuan</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($paket as $ky)
                          <tr>
                              <td>{{ $ky->no_paket }}</td>
                              <td>{{ $ky->nama_paket }}</td>
                              <td>{{ $ky->jenis_paket}}</td>
                              <td>{{ $ky->jumlah_hari }}</td>
                              <td>{{ $ky->harga }}</td>
                              <td>{{ $ky->satuan }}</td>
                              <td>
                                <form action="{{ route('refpaket.destroy',$ky->id) }}" method="POST">
                                    @method('delete')
                                    @csrf
                                   <button class="btn-floating waves-effect waves-light red" onclick="return confirm('Apakah yakin ingin menghapus data {{ $ky->nama_paket }}')"><i class="material-icons prefix">remove_circle</i></button>
                                </form>
                                <a class="btn-floating modal-trigger waves-effect waves-light green" href="#modal{{ $ky->id }}"><i class="material-icons prefix">remove_red_eye</i></a>
                                <a class="btn-floating waves-effect waves-light blue" href="{{ route('refpaket.edit', $ky->id) }}"><i class="material-icons prefix">mode_edit</i></a>
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

  @foreach($paket as $ky)
  <div id="modal{{ $ky->id }}" class="modal">
    <div class="modal-content">
      <h4>Detail Paket</h4>
      <table>
        <tr>
          <th>No Paket</th>
          <td>{{ $ky->no_paket }}</td>
        </tr>
        <tr>
          <th>Nama Paket</th>
          <td>{{ $ky->nama_paket }}</td>
        </tr>
        <tr>
          <th>Jenis Paket</th>
          <td>{{ $ky->jenis_paket }}</td>
        </tr>
        <tr>
          <th>Jumlah Hari</th>
          <td>{{ $ky->jumlah_hari}}</td>
        </tr>
        <tr>
          <th>Harga</th>
          <td>{{ $ky->harga }}</td>
        </tr>
        <tr>
          <th>Satuan</th>
          <td>{{ $ky->satuan }}</td>
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
    <script type="text/javascript" src="js/plugins/jsgrid/js/db_paket.js"></script> <!--data-->
    <script type="text/javascript" src="js/plugins/jsgrid/js/jsgrid.min.js"></script>
    <script type="text/javascript" src="js/plugins/jsgrid/js/jsgrid-script-paket.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#karyawan').DataTable();
    } );
    </script>
  @endsection

  @endsection