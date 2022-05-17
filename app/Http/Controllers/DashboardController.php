<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konsumen;
use App\Models\Transaksi;
use App\Models\Aktifitas;

class DashboardController extends Controller
{
    public function index()
    {
       $title = 'clothes LOUNDRY';
       $konsumen = Konsumen::count();
       $aktifitas = Aktifitas::limit(5)->get();
       $transaksi = Transaksi::wheretanggal_masuk(date('d-m-Y'))->count();
       $pendapatanhariini = Transaksi::wheretanggal_masuk(date('d-m-Y'))->sum('total_bayar');
       $total = Transaksi::sum('total_bayar');
       return view('index', compact('title', 'konsumen', 'transaksi', 'pendapatanhariini', 'total', 'aktifitas'));
    }
}
