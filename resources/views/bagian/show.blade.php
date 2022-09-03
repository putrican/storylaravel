@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="py-4 d-flex justify-content-end align-items-center">
                    <h1 class="mr-auto">Info Bagian {{ $bagian->nama_bagian }}</h1>
                    <a href="{{ url('/bagians/'.$bagian->id.'/edit')}}" class="btn btn-info">Edit</a>
                
                        <form action="{{ url('/bagians/'.$bagian->id)  }}" method="POST">
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
                    <li>Nama Bagian : {{ $bagian->nama_bagian }}</li>
                    <li>Nama Supervisor : {{ $bagian->nama_supervisor }}</li>
                    <li>Jumlah Bagian : {{ $bagian->jumlah_bagian }}</li>
                </ul>
            </div>
        </div>
    </div>
@endsection

                   