<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        $data_user = \App\Models\pegawai::all();
        return view('viewUser.index', ['data_user' => $data_user]);
    }

    public function create(Request $request){
        $user = DB::table('users')->get();
        $password = bcrypt($request->password);
        DB::table('users')->insert(['username'=>$request->username,
        'password'=>$password,
        'role'=>$request->role,
        'mall'=>$request->mall]);
        return redirect('/pegawai');
        
        \App\Models\pegawai::create($request->all());
        return redirect('/pegawai')->with('sukses','Data berhasil diinput');
    }

    public function edit($id){
        $user = \App\Models\pegawai::find($id);
        return view('editUser.index', ['user' => $user]);
    }

    public function update(Request $request,$id){
        $user = \App\Models\pegawai::find($id);
        $user->update($request->all());
        return redirect('/pegawai')->with('sukses','Data berhasil diupdate');
    }

    public function delete($id){
        $user = \App\Models\pegawai::find($id);
        $user->delete($user);
        return redirect('/pegawai')->with('sukses','Data berhasil dihapus');
    }
}
