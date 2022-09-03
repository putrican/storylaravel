@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-8 col-md-6">
                <h1>Edit Bagian</h1>
                <hr>
                <form action="{{ url('/bagians/'.$bagian->id) }}" method="POST">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label for="nama_bagian">Nama Bagian</label>
                        <input type="text" class="form-control @error('nama_bagian') is-invalid @enderror" id="nama_bagian" name="nama_bagian" value="{{ old('nama_bagian') ?? $bagian->nama_bagian}} ">   
                        @error('nama_bagian')
                            <div class="text-danger">{{ $messsage }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama_supervisor">Nama Supervisor</label>
                        <input type="text" class="form-control @error('nama_supervisor') is-invalid @enderror" id="nama_supervisor" name="nama_supervisor" value="{{ old('nama_supervisor') ?? $bagian->nama_supervisor }}">   
                        @error('nama_supervisor')
                            <div class="text-danger">{{ $messsage }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jumlah_bagian">Jumlah Bagian</label>
                        <input type="text" class="form-control @error('jumlah_bagian') is-invalid @enderror" id="jumlah_bagian" name="jumlah_bagian" value="{{ old('jumlah_bagian') ?? $bagian->jumlah_bagian}}">   
                        @error('jumlah_bagian')
                            <div class="text-danger">{{ $messsage }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>              
                </form>
            </div>
        </div>
    </div>
@endsection

                   