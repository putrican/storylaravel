@extends('layouts.master')
@section('title','Halaman Show')
@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="py-4 d-flex justify-content-end align-items-center">
                    <h1 class="mr-auto">Info Mahasiswa {{ $mahasiswa->nama }}</h1>
                    <a href="{{ url('/mahasiswas/'.$mahasiswa->id.'/edit')}}" class="btn btn-info">Edit</a>
                
                        <form action="{{ url('/mahasiswas/'.$mahasiswa->id)  }}" method="POST">
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
                    <a href="{{ url('/mahasiswas')}}" class="btn btn-info">Kembali</a>               
                </div>
            </div>
        </div>
    </div>
    
@endsection