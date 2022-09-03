@extends('layouts.admin')

@section('title', 'HALAMAN UTAMA MAHASISWA')
    
@section('content')
<div class="container mt-3">
  <div class="row">
      <div class="col-md-12">
          <div class="py-4 ">
              <h1>Tabel Data Mahasiswa</h1>
                  <a href="{{ url('/mahasiswas/create')}}" class="btn btn-primary">
                  Tambah Mahasiswa
                  </a>
          </div>
          @if (session()->has('pesan'))
          <div class="alert alert-success" role="alert">
              {{ session()->get('pesan') }}
          </div>
          @endif
          <table class="table table-stripped">
              <thead>
                  <tr>
                      <th>#</th>
                      <th>Nik</th>
                      <th>Nama</th>
                      <th>Nomor Telepon</th>
                      <th>Jenis Kelamin</th>
                      <th>Bagian</th>
                      <th>Alamat</th>
                      <th>Hobi</th>
                  </tr>
              </thead>
              <tbody>
                  @forelse ($mahasiswas as $mahasiswa)
                      <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>
                            <a href="{{ url('/admin/'. $mahasiswa->id) }}">{{ $mahasiswa->nik }}</a>
                          </td>
                          <td>{{ $mahasiswa->nama }}</td>
                          <td>{{ $mahasiswa->telepon->nomor_telepon }}</td>
                          <td>{{ $mahasiswa->jenis_kelamin == 'P' ? 'Perempuan' : 'Laki-laki' }}</td>
                          <td>{{ $mahasiswa->bagian->nama_bagian }}</td>
                          <td>{{ $mahasiswa->alamat }}</td>
                          <td>
                              @foreach ($mahasiswa->hobi as $item)
                                  {{ "$item->nama_hobi," }} 
                              @endforeach
                          </td>
                      </tr>
                  @empty
                      <td colspan="6" class="text-center">Data Kosong</td>
                  @endforelse
              </tbody>
          </table>
      </div>
  </div>
</div>
  <!-- Main content -->
  {{-- <section class="content">
    <div class="container-fluid">
      <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Responsive Hover Table</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nik</th>
                      <th>Nama</th>
                      <th>Jenis kelamin</th>
                      <th>Nomor Telepon</th>
                      <th>Bagian</th>
                      <th>Alamat</th>
                      <th>Hobi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($mahasiswas as $mahasiswa)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><a href="{{ url('/admin/'. $mahasiswa->id) }}">{{ $mahasiswa->nik }}</a></td>
                            <td>{{ $mahasiswa->nama}}</td>
                            <td>{{ $mahasiswa->jenis_kelamin == 'P' ? 'Perempuan' : 'Laki-laki' }}</td>
                            <td>{{ $mahasiswa->bagian->nama_bagian}}</td>
                            <td>{{ $mahasiswa->alamat}}</td>
                            <td>
                                @foreach ($mahasiswa->hobi as $item)
                                    {{ "$item->nama_hobi," }} 
                                @endforeach
                            </td>
                        </tr>
                        
                    @empty
                        <td colspan="6" class="text-center">Data Kosong</td>
                    @endforelse
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
    </div><!-- /.container-fluid -->
  </section> --}}
  <!-- /.content -->
    
@endsection