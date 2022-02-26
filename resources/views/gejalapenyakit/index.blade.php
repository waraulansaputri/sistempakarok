@extends('layouts.master')

@section('title')
    Gejala Penyakit
@endsection

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Gejala Penyakit</h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">Aplikasi SPDPS</h2>
            <p class="section-lead">
              Halaman Gejala Penyakit
            </p>
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <a href="{{ route('gejalapenyakit.create')}}" class="btn btn-success"><i class="fas fa-plus"></i> Tambah</a>
                        </div>
                        <div class="card-body">
                        @if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
                            <div class="table-responsive">
                                <table id="biox" class="table table-striped" id="table_gejalapenyakit">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Penyakit</th>
                                             <th>Gejala</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                  
                                        @forelse ($gejalapenyakit as $data)
                                         
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{$data->id_penyakit}} - {{$data->penyakit->nama_penyakit}}</td>
                                            <td>{{$data->id_gejala}} - {{$data->gejala->nama_gejala}}</td>
                                            <td>
                                                <a href="{{route('gejalapenyakit.edit', $data->id)}}" class="btn btn-warning"><i class="fas fa-pen"></i></a>
                                                <a href="{{route('gejalapenyakit.destroy', $data->id)}}" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus ?')"><i class="fas fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="6" class="text-center">Tidak ada data</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection