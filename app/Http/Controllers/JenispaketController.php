<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisPaket;
use App\Models\Aktifitas;

class JenispaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Ref. Paket Loundry';
        $aktifitas = Aktifitas::limit(5)->get();
        $paket = JenisPaket::all();
        return view('refpaket.frm_refpaket', compact('title', 'paket', 'aktifitas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Entry Paket';
        $aktifitas = Aktifitas::limit(5)->get();
        return view('refpaket.frm_entrypaket', compact('title', 'aktifitas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'no_paket' => 'required|unique:jenis_pakets|max:5',
            'nama_paket' => 'required|unique:jenis_pakets',
            'jenis_paket' => 'required',
            'jumlah_hari' => 'required|numeric',
            'harga' => 'required|numeric',
            'satuan' => 'required'
        ]);
        
        JenisPaket::create($request->all());
        
        return redirect('refpaket');
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
        $title = 'Edit Paket';
        $data = JenisPaket::findorFail($id);
        $aktifitas = Aktifitas::limit(5)->get();
        return view('refpaket.edit', compact('title','data', 'aktifitas'));
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
        JenisPaket::find($id)->update($request->all());
        return redirect('refpaket');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        JenisPaket::find($id)->delete($id);
        return redirect('refpaket');
    }
}
