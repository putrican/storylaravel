@extends('layouts.master')
@section('title','Halaman Create')
@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-8 col-md-6">
                <h1>Tambah Mahasiswa</h1>
                <hr>
                <form action="{{ url('/mahasiswas') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nik">Nik</label>
                        <input type="text" name="nik" id="nik" class="form-control @error('nik') is-invalid @enderror" value="{{ old('nik') }}">
                        @error('nik')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama')}}">   
                        @error('nama')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nomor_telepon">Nomor Telepon</label>
                        <input type="text" class="form-control @error('nomor_telepon') is-invalid @enderror" id="nomor_telepon" name="nomor_telepon" value="{{ old('nomor_telepon')}}">   
                        @error('nomor_telepon')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-chech-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L" {{ old('jenis_kelamin') == 'L' ? 'checked' : '' }}>
                        <label for="laki_laki" class="form-check-label">Laki-laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-chech-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P" {{ old('jenis_kelamin') == 'P' ? 'checked' : '' }}>
                        <label for="perempuan" class="form-check-label">Perempuan</label>
                    </div>
                    @error('jenis_kelamin')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="bagian_id">Bagian</label>
                        <select class="form-control" id="bagian_id" name="bagian_id">
                            @foreach ($bagians as $bagian)
                                <option value="{{ $bagian->id }}" {{ old('bagian_id') == "$bagian->nama_bagian" ? 'selected' : '' }}>
                                    {{ $bagian->nama_bagian}}
                                </option>
                            @endforeach
                        </select>   
                        @error('bagian_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" rows="3" class="form-control @error('alamat') is-invalid @enderror" {{ old('alamat')}}></textarea>
                        @error('alamat')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="hobi">Pilih Hobi</label>
                        <select class="js-example-placeholder-multiple js-states form-control" multiple="multiple" id="hobi" name="hobi[]">
                            @foreach ($daftar_hobi as $hobi)
                                <option value="{{ $hobi->id }}">{{ $hobi->nama_hobi }}</option>
                            @endforeach

                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>              
                </form>
            </div>
        </div>
    </div>
@endsection
    

    
    
