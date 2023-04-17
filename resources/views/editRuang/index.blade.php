@extends('layouts.master')

@section('content')
    <h1>Edit Ruang Parkir</h1>
    @if(session('sukses'))
        <div class="alert alert-success" role="alert">
        {{session('sukses')}}
        </div>
    @endif
        <div class="row">
        <div class="col lg-12">
        <form action="/pruang1/{{$data_parkir->id}}/update" method="POST">
            {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Plat Nomor</label>
                    <input type="text" name="platNomor" class="form-control" id="exampleInputEmail1" aria-describedby
                    ="emailHelp" placeholder="{{$data_parkir->platNomor}}" value="{{$data_parkir->platNomor}}" readonly>
                </div>
                
                <div class="form-group">
                <label for="exampleFormControlSelect1">Plat Nomor yang tersedia</label>
                <select class="form-control" name="ruangParkir" id="exampleFormControlSelect1">
                    
                    <option value="" disabled selected>Lantai 1...</option>
                    @for ($i = 0; $i < count($ruangan1); $i++)
                        <option value="{{$ruangan1[$i]}}">{{$ruangan1[$i]}}</option>
                    @endfor

                    <option value="" disabled selected>Lantai 2...</option>
                    @for ($i = 0; $i < count($ruangan2); $i++)
                        <option value="{{$ruangan2[$i]}}">{{$ruangan2[$i]}}</option>
                    @endfor

                    <option value="" disabled selected>Lantai 3...</option>
                    @for ($i = 0; $i < count($ruangan3); $i++)
                        <option value="{{$ruangan3[$i]}}">{{$ruangan3[$i]}}</option>
                    @endfor
                    
                </select>
                </div>
                <div class="form-group" hidden>
                <label for="exampleFormControlSelect1">Plat Nomor yang tersedia</label>
                <select class="form-control" name="sudah_masuk" id="exampleFormControlSelect1">
                    
                    <option value="1">1</option>
                    
                </select>
                </div>
                <div class="form-group" hidden>
                <label for="exampleFormControlSelect1">Plat Nomor yang tersedia</label>
                <select class="form-control" name="pernah_masuk" id="exampleFormControlSelect1">
                    
                    <option value="{{$data_parkir->pernah_masuk+=1}}">1</option>
                    
                </select>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
        </form>
        </div>
        </div>
@endsection