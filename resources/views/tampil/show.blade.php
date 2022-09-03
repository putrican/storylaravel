@extends('layouts.admin')

@section('title', 'HALAMAN UTAMA MAHASISWA')
    
@section('content')

<div class="container mt-3">
  <div class="row">
      <div class="col-md-12">
          <div class="py-4 d-flex justify-content-end align-items-center">
              <h1 class="mr-auto">Info Mahasiswa {{ $mahasiswa->nama }}</h1>
              <a href="{{ url('/admin/'.$mahasiswa->id.'/edit')}}" class="btn btn-info">Edit</a>
          
                  <form action="{{ url('/admin/'.$mahasiswa->id)  }}" method="HEAD">
                      @method('DELETE')
                      @csrf
                      <button type="submit" class="btn btn-danger">Hapus</button>
                  </form>                  
          </div>
          <hr>
          @if (session()->has('pesan'))
          <div class="alert alert-success" role="alert">
              {{ session()->get('pesan') }}
          </div>
          @endif
          <ul>
            <li>Nik : {{ $mahasiswa->nik }}</li>
            <li>Nama : {{ $mahasiswa->nama }}</li>
            <li>Nomor Telepon : {{$mahasiswa->telepon->nomor_telepon }}</li>
            <li>Jenis Kelamin : {{ $mahasiswa->jenis_kelamin == 'P' ? 'Perempuan' : 'Laki-laki'  }}</li>
            <li>Bagian : {{ $mahasiswa->bagian->nama_bagian }}</li>
            <li>Alamat : {{ $mahasiswa->alamat }}</li>
            <li>Hobi :
                @foreach ($mahasiswa->hobi as $item)
                    {{ "$item->nama_hobi,"}}
                @endforeach
            </li>
        </ul>
          <div class="py-4 ">
              <a href="{{ url('/admin')}}" class="btn btn-info">Kembali</a>               
          </div>
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
                      <th>Bagian</th>
                      <th>Alamat</th>
                      <th>Hobi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <ul>
                          
                            <td>Nik : {{ $mahasiswa->nik }}</td>
                            <td>Nama : {{ $mahasiswa->nama }}</td>
                            <td>Nomor Telepon : {{ $mahasiswa->telepon->nomor_telepon }}</td> 
                            <td>Jenis Kelamin : {{ $mahasiswa->jenis_kelamin == 'P' ? 'Perempuan' : 'Laki-laki'  }}</td>
                            <td>Bagian : {{ $mahasiswa->bagian->nama_bagian }}</td>
                            <td>Alamat : {{ $mahasiswa->alamat }}</td>
                            <td>Hobi :
                                @foreach ($mahasiswa->hobi as $item)
                                    {{ "$item->nama_hobi,"}}
                                @endforeach
                            </td>
                        </ul>
                    </tr>
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