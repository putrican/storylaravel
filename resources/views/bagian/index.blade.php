@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="py-4 d-flex justify-content-end align-items-center">
                    <h1 class="mr-auto">Tabel Bagian</h1>
                    {{-- @can('create', App\Bagian::class) --}}
                        <a href="{{ url('/bagians/create')}}" class="btn btn-primary">
                        Tambah Bagian
                        </a>
                    {{-- @endcan                        --}}
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
                            <th>Nama Bagian</th>
                            <th>Nama Supervisor</th>
                            <th>Jumlah Bagian</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($bagians as $bagian)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <a href="{{ url('/bagians/'. $bagian->id) }}">{{ $bagian->nama_bagian }}</a> 
                                </td>
                                <td>{{ $bagian->nama_supervisor }}</td>
                                <td>{{ $bagian->jumlah_bagian }}</td>
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

                   