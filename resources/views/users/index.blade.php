@extends('layouts.master')

@section('title')
    User
@endsection

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>User</h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">Aplikasi SPDPS</h2>
            <p class="section-lead">
              Halaman User
            </p>
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <a href="{{ route('users.create')}}" class="btn btn-success"><i class="fas fa-plus"></i> Tambah</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table_users">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Foto</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($users as $data)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td><img src="{{ URL::asset("foto/{$data->foto}") }}" width="100px"> </td>
                                            <td>{{$data->name}}</td>
                                            <td>{{$data->email}}</td>
                                            <td>
                                                <a href="{{route('users.edit', $data->id)}}" class="btn btn-warning"><i class="fas fa-pen"></i></a>
                                                <a href="{{route('users.destroy', $data->id)}}" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus ?')"><i class="fas fa-trash-alt"></i></a>
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