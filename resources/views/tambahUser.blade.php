<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>

<div class="row">
            <div class="col-6">
                <h1>DATA SISWA</h1>
            </div>
            <div class="col-6">
                <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
                Tambah data siswa
                </button>

            </div>
            <table class="table table-hover">
                <tr>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Mall</th>
                    <th>Id</th>
                </tr>
                @foreach($data_pegawai as $pegawai)
                <tr>
                    <td>{{$pegawai->username}}</td>
                    <td>{{$pegawai->role}}</td>
                    <td>{{$pegawai->mall}}</td>
                    <td>{{$pegawai->id_user}}</td>
                    <td>
                        <a href="/pegawai/{{$pegawai->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                        <a href="/pegawai/{{$pegawai->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm
                        ('Apakah anda yakin ingin menghapus?')">Delete</a>
                    </td>

                </tr>
                @endforeach
            </table>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="/pegawai/create" method="POST">
            {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Username"
                    value="{{old('username')}}">
                    @error('username')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                <label for="exampleFormControlSelect1">Role</label>
                <select class="form-control" name="role" id="role">
                    <option value="Masuk">Pegawai Masuk</option>
                    <option value="Ruang">Pegawai Ruang</option>
                    <option value="Keluar">Pegawai Keluar</option>
                </select>
                </div>
                <div class="form-group">
                <label for="exampleFormControlSelect1">Mall</label>
                <select class="form-control" name="mall" id="mall">
                    <option value="Maall 1">Mall 1</option>
                    <option value="Mall 2">Mall 2</option>
                    <option value="Mall 3">Mall 3</option>
                </select>
                </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        </div>
    </div>