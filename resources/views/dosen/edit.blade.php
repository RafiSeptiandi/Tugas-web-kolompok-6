@extends('layout.template')
<!-- START FORM -->
@section('konten')

<form action="{{url('dosen/'.$data->nidn) }}" method='post'>
@csrf
@method('patch')
    <div class="my-3 p-3 bg-secondary text-white fs-5 rounded shadow-sm">
    <h1 class="text-center mb-2">Edit Data Dosen</h1>
        <a href="{{ url('dosen')}}" class="btn btn-dark"><< kembali</a>
        <div class="mb-3 row">
            <label for="nidn" class="col-sm-2 col-form-label">Nidn</label>
            <div class="col-sm-10">
               {{ $data->nidn }}
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama' value="{{ $data->nama }}" id="nama">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='jabatan' value="{{ $data->jabatan }}" id="jabatan">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>
</div>
</form>
    <!-- AKHIR FORM -->
@endsection
