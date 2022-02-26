@extends('layouts.master')

@section('title')
    Create Gejala
@endsection

@section('content')

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Gejala</h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">SPDPS</h2>
            <p class="section-lead">
              Halaman Tambah Data Gejala
            </p>
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <form method="post" action="{{route('gejala.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                               <div class="form-group">
                                    <label>ID Gejala</label>
                                    <input type="text" name="id_gejala" class="form-control" required="" placeholder="Masukkan ID Gejala">
                                </div>
                                <div class="form-group">
                                    <label>Nama Gejala</label>
                                    <input type="text" name="nama_gejala" class="form-control" required="" placeholder="Masukkan Nama Gejala">
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