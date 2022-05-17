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
                <h5 class="breadcrumbs-title">Referensi Status Loundry</h5>
                <ol class="breadcrumbs">
                  <li><a href="index.html">Dashboard</a>
                  </li>
                  <li><a href="#html">Referensi</a>
                  </li>
                  <li class="active">Status Loundry</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->


         <div class="container">
          <a class="modal-trigger waves-effect waves-light btn-large" href="#tambahjenis"><i class="mdi-editor-border-color right"></i>Tambah Status</a>
          <!--jsgrid-->
          <div class="card" style="padding:20px;">
                     <table id="jenis" class="stripe" style="width: 100%">
                        <thead>
                          <tr>
                            <th>Status</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($data as $ky)
                          <tr>
                              <td>{{ $ky->status}}</td>
                              <td>
                                <form action="{{ route('refstatus.destroy',$ky->id) }}" method="POST">
                                    @method('delete')
                                    @csrf
                                   <button class="btn-floating waves-effect waves-light red" onclick="return confirm('Apakah yakin ingin menghapus data {{ $ky->nama_paket }}')"><i class="material-icons prefix">remove_circle</i></button>
                                </form>
                                <a class="btn-floating waves-effect modal-trigger waves-light blue" href="#editjenis{{ $ky->id }}"><i class="material-icons prefix">mode_edit</i></a>
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

  @foreach($data as $rf)
   <div id="editjenis{{ $rf->id }}" class="modal">
    <div class="modal-content">
      <h4>Edit Status</h4>
      <form action="{{ route('refstatus.update', $rf->id) }}" method="POST">
        @method('put')
        @csrf
           <div class="input-field col s4">
                <input placeholder="Gopay" value="{{ $rf->status }}" name="status" id="kode_konsumen" type="text" class="validate" required>
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

  <div id="tambahjenis" class="modal">
    <div class="modal-content">
      <h4>Tambah Status</h4>
      <form action="{{ route('refstatus.store') }}" method="POST">
        @csrf
           <div class="input-field col s4">
                <input placeholder="Baru" name="status"  type="text" class="validate" required>
           </div>
           <div class="input-field col s4">
                <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Tambah Status
                <i class="mdi-content-send right"></i>
                </button>
           </div>
      </form>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close btn red waves-effect waves-left left">Batal</a>
    </div>
  </div>


  @section('script')
    <!--jsgrid-->
    <script type="text/javascript" src="js/plugins/jsgrid/js/db_statusloundry.js"></script> <!--data-->
    <script type="text/javascript" src="js/plugins/jsgrid/js/jsgrid.min.js"></script>
    <script type="text/javascript" src="js/plugins/jsgrid/js/jsgrid-script-status.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#jenis').DataTable();
     } );
     </script>
  @endsection


@endsection