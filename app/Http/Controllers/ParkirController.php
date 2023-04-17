<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParkirController extends Controller
{
public function create(Request $request){
        
        $validated = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        
        
        \App\Models\Parkir::create($request->all());
        return redirect('/test')->with('sukses','Data berhasil diinput');
    }
}