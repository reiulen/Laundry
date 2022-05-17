<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Aktifitas;
use PDF;

class CetakController extends Controller
{
    public function laporantransaksi()
    {
        $title = 'Cetak Laporan';
        $aktifitas = Aktifitas::limit(5)->get();
        return view('laporantransaksi.frm_laptransaksi', compact('title','aktifitas'));
    }

    public function laporankeuangan()
    {
        $title = 'Cetak Laporan Keuangan';
        $aktifitas = Aktifitas::limit(5)->get();
        return view('laporantransaksi.frm_lapkeuangan', compact('title','aktifitas'));
    }

    public function Transaksi(Request $request)
    {
        $transaksi = Transaksi::whereBetween('tanggal_masuk', [$request->daritanggal, $request->sampaitanggal])->get();
        $total = $transaksi->sum('total_bayar');
        if($transaksi){
            $dari = date("d F Y" ,strtotime($request->daritanggal));
            $sampai = date("d F Y" ,strtotime($request->sampaitanggal));
            $pdf = PDF::loadview('laporantransaksi.cetaklap', compact('transaksi', 'dari', 'sampai', 'total'));
            Aktifitas::create(['aktifitas' => 'Laporan Transaksi Dicetak']);
            return $pdf->setPaper('a4', 'landscape')->stream('laporantransaksiclotheslaundry.pdf');
        }
        return redirect('laporan-transaksi')->with('pesan', 'Laporan tanggal tersebut tidak ditemukan!');
    }
}
