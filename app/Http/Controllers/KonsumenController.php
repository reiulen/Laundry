<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konsumen;
use App\Models\Aktifitas;

class KonsumenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Konsumen';
        $konsumen = Konsumen::all();
        $aktifitas = Aktifitas::limit(5)->get();
        return view('konsumen.frm_konsumen', compact('title', 'konsumen', 'aktifitas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Entry Konsumen';
        $id = 'KON'. (Konsumen::max('id')+1);
        $aktifitas = Aktifitas::limit(5)->get();
        return view('konsumen.frm_entrykonsumen', compact('title', 'id', 'aktifitas'));
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
            'no_telepon' => 'required|numeric'
        ]);

        $data = ([
            'no_konsumen' => 'KON'.Konsumen::max('id')+1,
            'nama_konsumen' => $request->nama_konsumen,
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon
        ]);

        Konsumen::create($data);
        return redirect('konsumen');
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
        $title = 'Edit Konsumen';
        $data = Konsumen::findorFail($id);
        $aktifitas = Aktifitas::limit(5)->get();
        return view('konsumen.edit', compact('title', 'data', 'aktifitas'));
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
        Konsumen::find($id)->update($request->all());
        return redirect('konsumen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Konsumen::find($id)->delete();
        return redirect('konsumen');
    }
}
