<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="font/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/login_style.css">

    <title>Login Clothes</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-md-2">
          <!-- <img src="images/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid"> -->
          
            <div class="mb-4">
              <h3>Selamat datang di <strong style="color: #00bd8e;">clothes LOUNDRY</strong></h3>
              <p></p>
              <h2><p class="mb-4">Aplikasi ini berfungsi untuk mencatatkan data Transaksi Loundry, Pelanggan, Jenis Paket, dan Mencetak Laporan.</p></h2>
              <h2><p class="mb-4">Untuk mencatatkan data, masukan <strong>Nama Pengguna</strong> dan <strong>Password</strong> pada form disamping.</p></h2>
            </div>

        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <!--<div class="mb-4">-->
              <!--<h3>Masuk ke <strong>Apikasi</strong></h3>-->
              <!--<p class="mb-4">Untuk dapat menggunakan Aplikasi ini, masukan Nama Pengguna dan Password.</p>-->
              <!--</div>-->
              
           @if(session()->has('pesan'))
             <div class="alert alert-danger alert-dismissible fade show">
                  {{ session('pesan') }}
              </div>
           @endif
                
            <form action="{{ route('authLogin') }}" method="post">
              @csrf
              <div class="form-group first">
                <label for="username">Nama Pengguna</label>
                <input type="text" class="form-control" name="username" id="username" autofocus required>
              </div>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" autofocus required>
                
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Ingat Saya</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
              </div>

              <input type="submit" value="Masuk" class="btn text-white btn-block btn-primary">
              
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>