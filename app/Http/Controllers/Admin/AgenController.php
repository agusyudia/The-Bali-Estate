<?php

namespace App\Http\Controllers\Admin;

use App\Models\agen;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AgenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agen = agen::all();
        return view('agen/index', ['agen'=>$agen]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agen/form');
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
        'no_tlp' => 'required',
        'gender' => 'required',
        'lokasi' => 'required',
        'email' => 'required|email',
        'perusahaan' => 'required',
        'keterangan' => 'required',
        ]);

        $agen = new agen();
        $agen->nama = $request->input('nama_agen');
        $agen->no_tlp = $request->input('no_tlp');
        $agen->gender = $request->input('gender');
        $agen->lokasi = $request->input('lokasi');
        $agen->email = $request->input('email');
        $agen->perusahaan = $request->input('perusahaan');
        $agen->keterangan = $request->input('keterangan');
        
        if ($request -> hasfile('image')){
            $file = $request -> file('image');
            $extension = $file->getClientOriginalExtension();
            $filename=time(). '.' . $extension;
            $file->move('image/agen/',$filename);
            $agen->image= $filename;
        }else {
            return $request;
            $agen->image = '';
        }
        $agen->save();
        return redirect('/admin/agen')-> with('status', 'Data Agen berhasil di input!');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\agen  $agen
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\agen  $agen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $agen = agen::find($id);
        return view('agen/edit', compact('agen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\agen  $agen
     * @return \Illuminate\Http\Response
     */
    public function update(request $request,agen $agen, $id)
    {

        //fungsi eloquent untuk mengupdate data inputan kita
        $agen= agen::find($id);
            $agen->nama_agen = $request->input('nama_agen');
            $agen->no_tlp = $request->input('no_tlp');
            $agen->gender = $request->input('gender');
            $agen->lokasi = $request->input('lokasi');
            $agen->email = $request->input('email');
            $agen->perusahaan = $request->input('perusahaan');
            $agen->keterangan = $request->input('keterangan');

        $agen->update();
        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('agenadmin')
            ->with('status', 'Data Agen Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\agen  $agen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agen = agen::findOrFail($id);
        $agen->delete();
        return redirect()->route('agenadmin')
            ->with('status', 'User Berhasil Dihapus');
    }
}
