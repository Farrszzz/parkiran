<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pkeluar1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_parkir = \App\Models\parkir::all();
        $total_tarif = \App\Models\parkir::sum('tarif');
        return view('pkeluar1.index', ['data_parkir' => $data_parkir, 'total_tarif' => $total_tarif]);
    }

    public function edit($id){
        $data_parkir = \App\Models\parkir::find($id);
        $total_tarif = \App\Models\parkir::sum('tarif');
        $data_ruang = \App\Models\ruang::all();
        return view('editKeluar.index', compact('data_parkir', 'total_tarif', 'data_ruang'));
    }

    public function update(Request $request,$id) {
        $data_parkir = \App\Models\parkir::find($id);
        // $data_ruang = \App\Models\ruang::find($id);
        // $data_ruang->update($request->all());
        $data_parkir->update($request->all());
        return redirect('/pkeluar1')->with('sukses','Data berhasil diupdate');
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
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
