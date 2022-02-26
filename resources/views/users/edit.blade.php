@extends('layouts.master')

@section('title')
    Update User
@endsection

@section('content')

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit User</h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">SPDPS</h2>
            <p class="section-lead">
              Halaman Edit User
            </p>
            <div class="row">
                <div class="col-12 ">
                    <div class="card card-primary">
                        <form method="post" action="{{route('users.update', $users->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            

                            <div class="card-body">
                              <div class="form-group">
                                    <label>Nama User</label>
                                    <input type="text" name="name" class="form-control" value="{{$users->name}}"  required="" placeholder="Masukkan Nama User">
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control" value="{{$users->email}}"  required="" placeholder="Masukkan Email">
                                </div>
                                <div class="form-group">
                                <label>Upload Foto</label>
                                <input type="file" name="foto" class="form-control" >
                                <input type="hidden" name="foto2" value="{{$users->foto}}" class="form-control" >
                            </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-warning"><i class="fas fa-sync"></i>  Ubah</button>
                                    <a class="btn btn-primary" href="/users"><i class="fas fa-times-circle"></i> Batal</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection