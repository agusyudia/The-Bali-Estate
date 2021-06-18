<?php

namespace App\Http\Controllers\Admin;

use App\Models\pembeli;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $pembeli = pembeli::all();
        return view('pembeli/index', ['pembeli'=>$pembeli]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pembeli  $pembeli
     * @return \Illuminate\Http\Response
     */
    public function show(pembeli $pembeli)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pembeli  $pembeli
     * @return \Illuminate\Http\Response
     */
    public function edit(pembeli $pembeli)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pembeli  $pembeli
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pembeli  $pembeli
     * @return \Illuminate\Http\Response
     */
    public function destroy(pembeli $pembeli)
    {
        //
    }
}
