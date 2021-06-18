<?php

namespace App\Http\Controllers;

use App\Models\rumah;
use App\Models\agen;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('layout');
    }

    public function home()
    {
    	$rumah = rumah::all();
        return view('home/index', ['rumah'=>$rumah]);
    }

    public function property()
    {
        $rumah = rumah::all();
        return view('home/property', ['rumah'=>$rumah]);
    }

    public function property2()
    {
        $rumah = rumah::all();
        return view('home/property-baru', ['rumah'=>$rumah]);
    }

    public function detailproperty()
    {
        return view('home/detail-property');
    }

    public function agen()
    {
        $agen = agen::all();
        return view('home/agen', compact('agen'));
    }
    public function agendetail(agen $agen, $id)
    {
        $agen = agen::find($id);
        return view('home/agen-detail', compact('agen'));
    }

    public function kontak()
    {
        return view('home/kontak');
    }

}
