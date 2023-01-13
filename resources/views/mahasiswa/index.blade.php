@extends('layout.template')
        <!-- START DATA -->
        @section('konten')
        <div class="my-3 p-3 bg-secondary rounded shadow-sm">
                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                    <div class="pb-3">
                        <div class="bg-dark text-white text-center p-3 fs-3 mx-auto">
                          Table Mahasiswa
                        </div>
                      </div>
                </div>

                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                  <a href="{{ url('mahasiswa/create')}}" class="btn btn-primary">+ Tambah Data</a>
                </div>

                <table class="table table-striped text-white">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-3">NIM</th>
                            <th class="col-md-4">Nama</th>
                            <th class="col-md-2">Jurusan</th>
                            <th class="col-md-2">Dosen</th>
                            <th class="col-md-2">-------Aksi-------</th>
                        </tr>
                    </thead>
                        @foreach ($data as $item)
                        <tr>
                            <td class="text-white">{{$item->id}}</td>
                            <td class="text-white">{{$item->nim}}</td>
                            <td class="text-white">{{$item->nama}}</td>
                            <td class="text-white">{{$item->jurusan->name}}</td>
                            <td class="text-white">{{$item->dosen->nama}}</td>
                            <td>
                                <div class="d-flex mx-2">
                                    <a href="{{'mahasiswa/'.$item->nim.'/edit'}}" class="btn
                                        btn-warning btn-sm mx-3 p-2">Edit</a>
                                    <form onsubmit ="return confirm('Yakin Akan menghapus data ?')"
                                    class='d-inline'action="{{ url('mahasiswa/'.$item->nim) }}"
                                        method="post">
                                        @csrf
                                        @method('DELETE')
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
