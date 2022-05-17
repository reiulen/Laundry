<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cetak Transaksi Tanggal {{  $dari }} Sampai {{ $sampai }}</title>
  </head>
  <body>
      <style>
        table{
            width: 100%;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        table, th, td{
            border: 1px solid;
            border-collapse: collapse;
            text-align: center;
            align-items: center;
            justify-content: center;
        }
      </style>
        <div class="judul" style="align-items:center; justify-content:center; text-align:center;">
            <h1 style="">Laporan Transaksi Clothes Laundry</h1>
            <h3> Tanggal {{ $dari }} - {{ $sampai }}</h3>
        </div>
        <table>
            <tr style="background-color: bisque"> 
                <th>No Transaksi</th>
                <th>Nama Konsumen</th> 
                <th>No Telepon</th>
                <th>Kode Paket</th>
                <th>Nama Paket</th>
                <th>Jenis Paket</th>
                <th>Harga</th>
                <th>Satuan</th>
                <th>Jumlah</th>
                <th>Tanggal Masuk</th>
                <th>Tanggal Selesai</th>
                <th>Jenis Pembayaran</th>
                <th>Status Bayar</th>
                <th>Total Bayar</th>
                <th>Keterangan</th>

            </tr>
            @foreach($transaksi as $tr)
            <tr> 
                <td>{{ $tr->no_transaksi }}</td>
                <td>{{ $tr->nama_konsumen }}</td> 
                <td>{{ $tr->no_telepon }}</td> 
                <td>{{ $tr->kode_paket }}</td>
                <td>{{ $tr->nama_paket }}</td>
                <td>{{ $tr->jenis_paket }}</td>
                <td>{{ $tr->harga }}</td>
                <td>{{ $tr->satuan}}</td>
                <td>{{ $tr->jumlah}}</td>
                <td>{{ date("d F Y",strtotime($tr->tanggal_masuk)) }}</td>
                <td>{{ date("d F Y",strtotime($tr->tanggal_selesai)) }}</td>
                <td>{{ $tr->jenis_pembayaran}}</td>
                <td>{{ $tr->status_bayar}}</td>
                <td>{{ $tr->total_bayar }}</td>
                <td>{{ $tr->keterangan }}</td>
            </tr>
            @endforeach
        </table> 
        
        <h3 style="float:right; margin:20px;">Total Pendapatan : {{ $total }}</h3>

    
  </body>
</html>