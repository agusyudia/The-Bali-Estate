<?php

namespace App\Http\Controllers\Admin\property;

use App\Models\rumah;
use App\Models\addimage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RumahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {    
        $rumah = rumah::select('*');
        $rumah->where('jenis_property', '=', $request->jenis_property);

        return view('property/rumah/index', ['rumah'=>$rumah->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('property/rumah/form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rumah = new rumah();
        $rumah->nama_penjual = $request->input('nama_penjual');
        $rumah->judul = $request->input('judul');
        $rumah->jenis_property = $request->input('jenis_property');
        $rumah->sertifikat = $request->input('sertifikat');
        $rumah->imb = $request->input('imb');
        $rumah->lokasi = $request->input('lokasi');
        $rumah->luas = $request->input('luas');
        $rumah->surat_tanah = $request->input('surat_tanah');
        $rumah->jml_kamar = $request->input('jml_kamar');
        $rumah->jml_wc = $request->input('jml_wc');
        $rumah->ket_produk = $request->input('ket_produk');
        $rumah->status = $request->input('status');
        $rumah->harga = $request->input('harga');
        $rumah->id_rumah = $request->input('id_rumah');
        
        if ($request -> hasfile('image')){
            $file = $request -> file('image');
            foreach ($file as $file) {
                $extension = $file->getClientOriginalExtension();
                $filename=time().rand(1,999999). '.' . $extension;
                $file->move('image/rumah/',$filename);
                $rumah->image= $filename;
            }
        }else {
            return $request;
            $rumah->image = '';
        }
        $rumah->save();
        return redirect()->route('rumah')-> with('status', 'Data Rumah berhasil di input!');
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
        $rumah = rumah::find($id);
        return view('property/rumah/edit', compact('rumah'));
    }

    public function imageadd($id)
    {
        $rumah = rumah::find($id);
        return view('property/rumah/addimage', compact('rumah'));
    }

    public function updateimage(Request $request)
    {
        //dd($request->all());

        $addimage = new addimage();
        $addimage ->id_produk = $request->input('id_produk');


        $files = $request -> file('image');
        if ($request -> hasfile('image')){            
            foreach ($files as $file) {
                $extension = $file->getClientOriginalExtension();
                $filename=time().rand(1,999999). '.' . $extension;
                $file->move('image/rumah/image', $filename);
                $addimage->image= $filename;

            }
                $addimage -> save();
        }
         
        
        return redirect()->route('rumah')
            ->with('status', 'Data rumah Berhasil Diupdate');
    }

    public function update(Request $request, $id)
    {
        $rumah= rumah::find($id);
        $rumah->judul = $request->input('judul');
        $rumah->sertifikat = $request->input('sertifikat');
        $rumah->imb = $request->input('imb');
        $rumah->lokasi = $request->input('lokasi');
        $rumah->luas = $request->input('luas');
        $rumah->surat_tanah = $request->input('surat_tanah');
        $rumah->jml_kamar = $request->input('jml_kamar');
        $rumah->jml_wc = $request->input('jml_wc');
        $rumah->ket_produk = $request->input('ket_produk');
        $rumah->status = $request->input('status');
        $rumah->harga = $request->input('harga');

        $rumah->update();
        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('rumah')
            ->with('status', 'Data rumah Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rumah = rumah::findOrFail($id);
        $rumah->delete();
        return redirect()->route('rumah')
            ->with('status', 'User Berhasil Dihapus');
    }
}
