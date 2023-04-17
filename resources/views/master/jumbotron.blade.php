
@extends('layouts.master')
    <style>
        .btn {
            
        }
        .btn:hover {
            background-color:#444654;
            color:white;
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 500px 0 rgba(0,0,0,0.19);
            transition-duration: 1s;
        }
    </style>

    @if (Auth::user()->role=='Admin')
    <div class="box" style="width:1400px; margin:auto; margin-top:50px; background-color:cream; border-radius:10px">
      <h1 class="display-4" style="margin-left:10px">Selamat datang, Admin</h1>
      <hr class="my-4">
      <p style="margin-left:10px"></p>
    </div>

    <div class="box" style="width:1400px; margin:auto; margin-top:30px; border-radius:10px">
        <div class="boxMall" style="width:650px; display:inline-block">
            <button class="btn" style="width:650px; height:150px; border-radius:10px; border: 2px solid black">
            <a class="display-4" style="margin-left:10px; color:black; text-decoration:none" href="/pegawai">Data Petugas</a>
            </button>
            <hr class="my-4">
        </div>
        <div class="boxMall" style="width:650px; display:inline-block; margin-left:60px">
        <form action="/logout" method="post">
            @csrf
            
          
            <button class="btn" style="width:650px; height:150px; border-radius:10px; background-color:#ec5453; border: 2px solid black">
            <i class="bi bi-box-arrow-left" style="margin-right: 5px; font-size: 53px"></i><a class="display-4" style="margin-left:10px; color:white; text-decoration:none">Logout</a>
            </button>
            </form>
            <hr class="my-4">
            
        </div>
    </div>

    <div class="box" style="width:1400px; margin:auto; margin-top:30px; background-color:cream; border-radius:10px">
        <div class="boxMall" style="width:400px; display:inline-block">
            <button class="btn" style="width:400px; height:150px; background-color:white; border-radius:10px; border: 2px solid black">
            <a class="display-4" style="margin-left:10px; color:black; text-decoration:none" href="/mall1">Mall 1</a>
            </button>
            <hr class="my-4">
        </div>
        <div class="boxMall" style="width:400px; display:inline-block; margin-left:67px">
            <button class="btn" style="width:400px; height:150px; background-color:white; border-radius:10px; border: 2px solid black">
            <a class="display-4" style="margin-left:10px; color:black; text-decoration:none" href="/mall2">Mall 2</a>
            </button>
            <hr class="my-4">
        </div>
        <div class="boxMall" style="width:400px; display:inline-block; margin-left:67px">
            <button class="btn" style="width:400px; height:150px; background-color:white; border-radius:10px; border: 2px solid black">
            <a class="display-4" style="margin-left:10px; color:black; text-decoration:none" href="/mall3">Mall 3</a>
            </button>
            <hr class="my-4">
        </div> 
    </div>

    <div class="box" style="width:1400px; margin:auto; margin-top:30px; background-color:cream; border-radius:10px">
        <div class="boxMall" style="width:1400px; display:inline-block">
            <button class="btn" style="width:1400px; height:150px; background-color:white; border-radius:10px; border: 2px solid black">
            <a class="display-4" style="margin-left:10px; color:black; text-decoration:none" href="/keuangan">Laporan Keuangan</a>
            </button>
            <hr class="my-4">
        </div>
</div>
@endif