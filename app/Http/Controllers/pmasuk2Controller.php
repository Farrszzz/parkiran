<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class pmasuk2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_parkir = \App\Models\parkir2::all();
        return view('pmasuk2.index', ['data_parkir' => $data_parkir]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {

        
    $database = DB::table('parkir2');
    $platNomor = $request->platNomor;
    $ruangParkir = $request->ruangParkir;
    $sudah_masuk = $request->sudah_masuk;

    $data = $database->where('platNomor', $platNomor)->first();
    if ($data) {
        $pernah_masuk = $data->pernah_masuk + 1;
        $database->where('platNomor', $platNomor)->update([
            'ruangParkir' => $ruangParkir,
            'sudah_masuk' => $sudah_masuk == 1,
            'pernah_masuk' => $pernah_masuk,
        ]);

        return redirect()->route('pmasuk2')->with('success', 'Plat Nomor berhasil ditambahkan');
    } else {
        $database->insert([
            'platNomor' => $request->platNomor,
            'sudah_masuk' => $request->sudah_masuk,
            'pernah_masuk' => 1,
        ]);

        return redirect()->route('pmasuk2')->with('success', 'Plat Nomor berhasil ditambahkan');
    }
        
    }
}