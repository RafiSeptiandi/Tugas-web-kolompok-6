@extends('layout.template')
        <!-- START DATA -->
@section('konten')
@if(session('terhapus'))
  <div class="alert alert-danger mt-3" role="alert">
  {{session('terhapus')}}
</div>  
@endif
  <div class="my-3 p-3 bg-secondary rounded shadow-sm">
                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                    <div class="pb-3">
                        <div class="bg-dark text-white text-center p-3 fs-3 mx-auto">
                          Table Dosen
                        </div>
                      </div>
                </div>

                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3 bg-secondary">
                  <a href="{{ url('dosen/create') }}" class="btn btn-primary">+ Tambah Data</a>
                </div>

                <table class="table table-striped text-white">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-3">NIDN</th>
                            <th class="col-md-4">Nama</th>
                            <th class="col-md-2">Jabatan</th>
                            <th class="col-md-2">---------Aksi------</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td class="text-white">{{ $loop->iteration }}</td>
                            <td class="text-white">{{ $item->nidn }}</td>
                            <td class="text-white">{{ $item->nama }}</td>
                            <td class="text-white">{{ $item->jabatan }}</td>
                            <td>
                              <div class="d-flex mx-3">

                                <a href="{{ url('dosen/'.$item->nidn.'/edit')}}" class="btn btn-warning btn-sm mx-3 p-2">Edit</a>
                                <form onsubmit ="return confirm('Yakin Akan menghapus data ?')" action="{{ url('dosen/'.$item->id) }}" method="post">
                                  @csrf
                                  @method('delete')
                                  <button type="submit" name="submit" class="btn btn-danger btn-sm p-2">Del</button>
                                </form>
                              </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

          </div>
          <!-- AKHIR DATA -->
@endsection
