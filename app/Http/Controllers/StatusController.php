<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;
use App\Models\Aktifitas;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Ref. Status Loundry';
        $data = Status::all();
        $aktifitas = Aktifitas::limit(5)->get();
        return view('frm_refstatus', compact('title', 'data', 'aktifitas'));
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
            'status' => 'required|unique:statuses',
            'aktifitas' => Aktifitas::limit(5)->get()
        ]);
        
        Status::create($request->all());
        return redirect('refstatus');
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
        Status::find($id)->update($request->all());
        return redirect('refstatus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Status::find($id)->delete($id);
        return redirect('refstatus');
    }
}
