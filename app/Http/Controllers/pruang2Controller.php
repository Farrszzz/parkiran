<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class pruang2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_parkir = \App\Models\parkir2::all();
        return view('pruang2.index', ['data_parkir' => $data_parkir]);
    }

    public function edit($id){
        $data_parkir = \App\Models\parkir2::find($id);
        $data_ruang = \App\Models\ruang::all();
        $ruangan1 = array('A1', 'A2', 'A3', 'A4', 'A5', 'A6', 'A7', 'A8', 'A9', 'A10');
        $ruangan2 = array('B1', 'B2', 'B3', 'B4', 'B5', 'B6', 'B7', 'B8', 'B9', 'B10');
        $ruangan3 = array('C1', 'C2', 'C3', 'C4', 'C5', 'C6', 'C7', 'C8', 'C9', 'C10');
        return view('editRuang2.index', compact('data_parkir', 'data_ruang', 'ruangan1', 'ruangan2', 'ruangan3'));
    }

    public function update(Request $request,$id) {
        $data_parkir = \App\Models\parkir2::find($id);
        // $data_ruang = \App\Models\ruang::find($id);
        // $data_ruang->update($request->all());
        $data_parkir->update($request->all());
        return redirect('/pruang2')->with('sukses','Data berhasil diupdate');
    }
}