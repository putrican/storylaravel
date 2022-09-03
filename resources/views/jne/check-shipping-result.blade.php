@extends('layouts.admin')

@section('title', 'HALAMAN UTAMA MAHASISWA')
    
@section('content')
<div class="container mt-3">
  <div class="row">
      <div class="col-md-12">
          <div class="py-4 ">
              {{-- <h1>Tabel Data Mahasiswa</h1>
                  <a href="{{ url('/mahasiswas/create')}}" class="btn btn-primary">
                  Tambah Mahasiswa
                  </a> --}}

                  <h1>Raja ongkir</h1>
                  <h2>Dari : <b>{{ $origin }}</b></h2>
                  <h2>Ke : <b>{{ $destination }}</b></h2>

          </div>
          @if (session()->has('pesan'))
          <div class="alert alert-success" role="alert">
              {{ session()->get('pesan') }}
          </div>
          @endif
          <table class="table table-stripped">
              <thead>
                  <tr>
                      
                      <th>Nama Layanan</th>
                      <th>Tarif</th>
                      <th>Estimasi</th>
                     
                  </tr>
              </thead>
              <tbody>
                @for ($i = 0; $i < count($array_result["rajaongkir"]["results"][0]["costs"]) ; $i++)
                    <tr>
                      <td>{{ $array_result["rajaongkir"]["results"][0]["costs"][$i]["service"] }}</td>
                      <td>{{ $array_result["rajaongkir"]["results"][0]["costs"][$i]["cost"][0]["value"] }}</td>
                      <td>{{ $array_result["rajaongkir"]["results"][0]["costs"][$i]["cost"][0]["etd"] }}</td>
                    <tr>

                    
                @endfor
              </tbody>
          </table>
      </div>
  </div>
</div>

    
@endsection

