<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pkeluar3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_parkir = \App\Models\parkir3::all();
        $total_tarif = \App\Models\parkir3::sum('tarif');
        return view('pkeluar3.index', ['data_parkir' => $data_parkir, 'total_tarif' => $total_tarif]);
    }

    public function edit($id){
        $data_parkir = \App\Models\parkir3::find($id);
        $total_tarif = \App\Models\parkir3::sum('tarif');
        $data_ruang = \App\Models\ruang::all();
        return view('editKeluar3.index', compact('data_parkir', 'total_tarif', 'data_ruang'));
    }

    public function update(Request $request,$id) {
        $data_parkir = \App\Models\parkir3::find($id);
        // $data_ruang = \App\Models\ruang::find($id);
        // $data_ruang->update($request->all());
        $data_parkir->update($request->all());
        return redirect('/pkeluar3')->with('sukses','Data berhasil diupdate');
    }
}