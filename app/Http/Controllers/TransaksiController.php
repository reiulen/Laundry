<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konsumen;
use App\Models\JenisPaket;
use App\Models\TipeBayar;
use App\Models\Status;
use App\Models\Transaksi;
use App\Models\Aktifitas;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Transaksi';
        $transaksi = Transaksi::all();
        $status = Status::all();
        $aktifitas = Aktifitas::limit(5)->get();
        return view('transaksi.frm_transaksi', compact('title', 'transaksi', 'status','aktifitas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Entry Transaksi';
        $konsumen = Konsumen::all();
        $paket = JenisPaket::all();
        $jenis = TipeBayar::all();
        $status = Status::all();
        $aktifitas = Aktifitas::limit(5)->get();
        $transaksi = Transaksi::max('id');
        return view('transaksi.frm_entrytransaksi', compact('title', 'konsumen', 'paket', 'jenis', 'status', 'transaksi','aktifitas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $konsumen = Konsumen::find($request->nama_konsumen);
        $request->validate([
            'no_transaksi' => 'required',
            'nama_konsumen' => 'required',
            'no_telepon' => 'required',
            'kode_paket' => 'required', 
            'nama_paket' => 'required',
            'jenis_paket' => 'required',
            'estimasi' => 'required',
            'harga' => 'required',
            'satuan' => 'required',
            'jumlah' => 'required',
            'tanggal_masuk' => 'required',
            'tanggal_selesai' => 'required',
            'jenis_pembayaran' => 'required',
            'status_bayar' => 'required',
            'total_bayar' => 'required',
            'keterangan' => 'required',
            'status_order' =>'required'
        ]);
        $data = ([
            'no_transaksi' => $request->no_transaksi,
            'nama_konsumen' => $konsumen->nama_konsumen,
            'no_telepon' => $request->no_telepon,
            'kode_paket' => $request->kode_paket, 
            'nama_paket' => $request->nama_paket,
            'jenis_paket' => $request->jenis_paket,
            'estimasi' => $request->estimasi,
            'harga' => $request->harga,
            'satuan' => $request->satuan,
            'jumlah' => $request->jumlah,
            'tanggal_masuk' => $request->tanggal_masuk,
            'tanggal_selesai' => $request->tanggal_selesai,
            'jenis_pembayaran' => $request->jenis_pembayaran,
            'status_bayar' => $request->status_bayar,
            'total_bayar' => $request->total_bayar,
            'keterangan' => $request->keterangan,
            'status_order' => $request->status_order
        ]);

        Aktifitas::create(['aktifitas' => 'Transaksi ' .$request->status_order]);
        Transaksi::create($data);
        return redirect('transaksi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->status_order){
            Aktifitas::create(['aktifitas' => 'Transaksi ' .$request->status_order]);
        }
        if($request->status_bayar){
            Aktifitas::create(['aktifitas' => 'Pembayaran ' .$request->status_bayar]);
        }
        Transaksi::find($id)->update($request->all());
        return redirect('transaksi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Aktifitas::create(['aktifitas' => 'Transaksi Dihapus']);
        Transaksi::find($id)->delete($id);
        return redirect('transaksi');
    }

}
