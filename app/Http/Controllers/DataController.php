<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konsumen;
use App\Models\JenisPaket;

class DataController extends Controller
{
    public function konsumen($id)
    {
        $konsumen = Konsumen::findorFail($id);
        return response()->json([
            'no_konsumen' => $konsumen->no_konsumen,
            'no_telepon' => $konsumen->no_telepon
        ], 200); 
    }

    public function paket(JenisPaket $jenispaket){
        $paket = $jenispaket;
        return response()->json([
            'nama_paket' => $paket->nama_paket,
            'jenis_paket' => $paket->jenis_paket,
            'estimasi' => $paket->jumlah_hari,
            'harga' => $paket->harga,
            'satuan' => $paket->satuan
        ]);
    }
}
