@extends('layouts.master')

@section('title')
    Gejala
@endsection

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Gejala</h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">Aplikasi SPDPS</h2>
            <p class="section-lead">
              Halaman Gejala
            </p>
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <a href="{{ route('gejala.create')}}" class="btn btn-success"><i class="fas fa-plus"></i> Tambah</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="biox" class="table table-striped" id="table_gejala">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID Gejala</th>
                                            <th>Nama Gejala</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($gejala as $data)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{$data->id_gejala}}</td>
                                            <td>{{$data->nama_gejala}}</td>
                                            <td>
                                                <a href="{{route('gejala.edit', $data->id_gejala)}}" class="btn btn-warning"><i class="fas fa-pen"></i></a>
                                                <a href="{{route('gejala.destroy', $data->id_gejala)}}" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus ?')"><i class="fas fa-trash-alt"></i></a>
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