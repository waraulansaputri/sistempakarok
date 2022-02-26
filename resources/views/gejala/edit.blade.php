@extends('layouts.master')

@section('title')
    Update Gejala
@endsection

@section('content')

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Gejala</h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">SPDPS</h2>
            <p class="section-lead">
              Halaman Edit Gejala
            </p>
            <div class="row">
                <div class="col-12 ">
                    <div class="card card-primary">
                        <form method="post" action="{{route('gejala.update', $gejala->id_gejala)}}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            

                            <div class="card-body">
                              <div class="form-group">
                                    <label>Nama Gejala</label>
                                    <input type="text" name="nama_gejala" value="{{$gejala->nama_gejala}}"  class="form-control" required="" placeholder="Masukkan Nama Gejala">
                                </div>

                              


                                <div class="form-group">
                                    <button type="submit" class="btn btn-warning"><i class="fas fa-sync"></i>  Ubah</button>
                                    <a class="btn btn-primary" href="/gejala"><i class="fas fa-times-circle"></i> Batal</a>
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