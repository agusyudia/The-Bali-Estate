<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\pemilik;
use Illuminate\Http\Request;

class PemilikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemilik = pemilik::all();
        return view('pemilik/index', ['pemilik'=>$pemilik]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pemilik/form');
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
        'nama' => 'required',
        'alamat' => 'required',
        'no_tlp' => 'required',
        'email' => 'required|email',
        'nik' => 'required',
        ]);

        $pemilik = new pemilik();
        $pemilik->nama = $request->input('nama_pemilik');
        $pemilik->alamat = $request->input('alamat');
        $pemilik->no_tlp = $request->input('no_tlp');
        $pemilik->email = $request->input('email');
        $pemilik->nik = $request->input('nik');

        $pemilik->save();
        return redirect('/admin/pemilik')-> with('status', 'Data pemilik berhasil di input!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pemilik  $pemilik
     * @return \Illuminate\Http\Response
     */
    public function show(pemilik $pemilik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pemilik  $pemilik
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pemilik = pemilik::find($id);
        return view('pemilik/edit', compact('pemilik'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pemilik  $pemilik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        pemilik::find($id)->update($request->all());

        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('pemilik')
            ->with('status', 'Data pemilik Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pemilik  $pemilik
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pemilik = pemilik::findOrFail($id);
        $pemilik->delete();
        return redirect()->route('pemilikadmin')
            ->with('status', 'User Berhasil Dihapus');
    }
}
