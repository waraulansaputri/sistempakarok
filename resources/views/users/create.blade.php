@extends('layouts.master')

@section('title')
    Create User
@endsection

@section('content')

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah User</h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">SPDPS</h2>
            <p class="section-lead">
              Halaman Tambah Data User
            </p>
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <form method="post" action="{{route('users.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                               
                                <div class="form-group">
                                    <label>Nama User</label>
                                    <input type="text" name="name" class="form-control" required="" placeholder="Masukkan Nama User">
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control" required="" placeholder="Masukkan Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" required="" placeholder="Masukkan Password">
                                </div>

                                

                                
                                <div class="form-group">
                                <label>Upload Foto</label>
                                <input type="file" name="foto" class="form-control" required="" required>
                            	</div>
                               
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Tambah</button>
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