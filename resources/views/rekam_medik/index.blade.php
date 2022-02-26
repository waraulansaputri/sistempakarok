@extends('layouts.master')

@section('title')
    Rekam Medik
@endsection

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Rekam Medik</h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">Aplikasi SPDPS</h2>
            <p class="section-lead">
              Halaman Rekam Medik
            </p>
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                      
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="biox" class="table table-striped" id="table_rekam_medik">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>No HP</th>
                                            <th>Alamat</th>
                                            <th>Tanggal Konsultasi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($rekam_medik as $data)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{$data->nama}}</td>
                                            <td>{{$data->no_hp}}</td>
                                            <td>{{$data->alamat}}</td>
                                            <td>{{$data->tanggal_konsultasi}}</td>
                                            <td>
                                                <a href="{{route('rekam_medik.destroy', $data->id_rekam_medik)}}" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus ?')"><i class="fas fa-trash-alt"></i></a>
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