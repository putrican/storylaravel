@extends('layouts.master')
@section('title','Halaman Index')
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
                                <td><a href="{{ url('/mahasiswas/'. $mahasiswa->id) }}">{{ $mahasiswa->nik }}</a></td>
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
    
@endsection