@extends('layouts.master')

@section('title')
    Update Pakar
@endsection

@section('content')

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Pakar</h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">SPDPS</h2>
            <p class="section-lead">
              Halaman Edit Pakar
            </p>
            <div class="row">
                <div class="col-12 ">
                    <div class="card card-primary">
                        <form method="post" action="{{route('pakar.update', $pakar->id_pakar)}}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            

                            <div class="card-body">
                              <div class="form-group">
                                    <label>Nama Pakar</label>
                                    <input type="text" name="nama" class="form-control" value="{{$pakar->nama}}"  required="" placeholder="Masukkan Nama Pakar">
                                </div>

                                <div class="form-group">
                                    <label>No HP (Wajib Format : 628xxxxxxxx)</label>
                                    <input type="text" name="no_hp" class="form-control" value="{{$pakar->no_hp}}"  required="" placeholder="Masukkan No HP">
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" name="alamat" class="form-control" value="{{$pakar->alamat}}"  required="" placeholder="Masukkan Alamat">
                                </div>
                                <div class="form-group">
                                <label>Upload Foto</label>
                                <input type="file" name="foto" class="form-control" >
                                <input type="hidden" name="foto2" value="{{$pakar->foto}}" class="form-control" >
                            </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-warning"><i class="fas fa-sync"></i>  Ubah</button>
                                    <a class="btn btn-primary" href="/pakar"><i class="fas fa-times-circle"></i> Batal</a>
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