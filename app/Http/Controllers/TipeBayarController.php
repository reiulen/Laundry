<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipeBayar;
use App\Models\Aktifitas;

class TipeBayarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Ref. Tipe Bayar';
        $data = TipeBayar::all();
        $aktifitas = Aktifitas::limit(5)->get();
        return view('frm_refjenis', compact('title', 'data', 'aktifitas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'tipe_bayar' => 'required|unique:tipe_bayars'
        ]);
        TipeBayar::create($request->all());
        return redirect('refjenis');
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
        TipeBayar::find($id)->update($request->all());
        return redirect('refjenis');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TipeBayar::find($id)->delete($id);
        return redirect('refjenis');
    }
}
