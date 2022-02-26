@extends('layouts.master')

@section('title')
    Pakar
@endsection

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Pakar</h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">Aplikasi SPDPS</h2>
            <p class="section-lead">
              Halaman Pakar
            </p>
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <a href="{{ route('pakar.create')}}" class="btn btn-success"><i class="fas fa-plus"></i> Tambah</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="biox" class="table table-striped" id="table_pakar">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Foto</th>
                                            <th>Nama</th>
                                            <th>No HP</th>
                                            <th>Alamat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($pakar as $data)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td><img src="{{ URL::asset("foto/{$data->foto}") }}" width="100px"> </td>
                                            <td>{{$data->nama}}</td>
                                            <td>{{$data->no_hp}}</td>
                                            <td>{{$data->alamat}}</td>
                                            <td>
                                                <a href="{{route('pakar.edit', $data->id_pakar)}}" class="btn btn-warning"><i class="fas fa-pen"></i></a>
                                                <a href="{{route('pakar.destroy', $data->id_pakar)}}" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus ?')"><i class="fas fa-trash-alt"></i></a>
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