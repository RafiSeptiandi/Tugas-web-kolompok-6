@extends('layout.template')
<!-- START FORM -->
@section('konten')

<form action="{{url('mahasiswa/'.$data->nim) }}" method='post'>
    @csrf
    @method('PUT')
        <div class="my-3 p-3 bg-secondary text-white rounded shadow-sm">
        <h1 class="text-center text-dark mb-2">Edit Data Mahasiswa</h1>
            <a href="{{ url('mahasiswa') }}" class="btn btn-dark"><< kembali</a>
            <div class="mb-3 row">
                <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                   {{ $data->nim }}
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nama' value="{{ $data->nama }}"
                     id="nama">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jurusan_id" class="col-sm-2 col-form-label">Jurusan</label>
                <div class="col-sm-10">
                    <select class="form-control" name="jurusan_id" aria-label="Default select example">
                    @foreach($jurusan as $item)
                        <option class="form-control" selected value="{{ $item->id}}">{{$item->name}}</option>
                    @endforeach
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jurusan" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
        </div>
    </form>
        <!-- AKHIR FORM -->
        @endsection
