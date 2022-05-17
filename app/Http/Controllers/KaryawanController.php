<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Aktifitas;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('karyawan.frm_karyawan',[
            'title' => 'Karyawan',
            'karyawan' => User::where(['role' => 'karyawan'])->latest()->get(),
            'aktifitas' => Aktifitas::limit(5)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('karyawan.frm_entrykaryawan',[
            'title' => 'Entry Karyawan',
            'no' => 'KRY'. (User::max('id')+1),
            'aktifitas' => Aktifitas::limit(5)->get()
        ]);
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
            'nama_karyawan'=>'required',
            'username'=> 'required|unique:Users|min:6|max:15',
            'password'=> 'required|min:6|max:12',
            'alamat'=> 'required',
            'no_telepon' => 'required|unique:users|numeric',
            'role'=>'required'
        ]);

        $data=([
            'no_karyawan' => 'KRY'.User::max('id')+1,
            'nama' => $request->nama_karyawan,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'alamat' => $request->alamat, 
            'no_telepon' => $request->no_telepon,
            'role'=> $request->role
        ]);

        user::create($data);
        return redirect('karyawan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::findorFail($id);
        $no = 'KRY'.User::max('id')+1;
        $title = 'Edit Karyawan';
        $aktifitas = Aktifitas::limit(5)->get();
        return view('karyawan.edit', compact('data', 'title', 'no', 'aktifitas'));
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
        // $request->validate([
        //     'nama_karyawan'=>'required',
        //     'username'=> 'required|min:6|max:15',
        //     'alamat'=> 'required',
        //     'no_telepon' => 'required|numeric',
        //     'role'=>'required'
        // ]);
    
        User::find($id)->update($request->all());
        return redirect('karyawan')->with('pesan', 'Data berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        
        session()->flash('pesan', 'Selamat');
        return redirect('/karyawan');
    }
}
