@extends('layouts.master')

@section('title')
    Update Penyakit
@endsection

@section('content')

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Penyakit</h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">SPDPS</h2>
            <p class="section-lead">
              Halaman Edit Penyakit
            </p>
            <div class="row">
                <div class="col-12 ">
                    <div class="card card-primary">
                        <form method="post" action="{{route('penyakit.update', $penyakit->id_penyakit)}}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            

                            <div class="card-body">
                              <div class="form-group">
                                    <label>Nama Penyakit</label>
                                    <input type="text" name="nama_penyakit" value="{{$penyakit->nama_penyakit}}"  class="form-control" required="" placeholder="Masukkan Nama Penyakit">
                                </div>

                                
                                <div class="form-group">
                                    <label>Solusi</label>
                                    <textarea name="solusi" class="form-control" required>{{$penyakit->solusi}}</textarea>
                                </div>


                                <div class="form-group">
                                    <button type="submit" class="btn btn-warning"><i class="fas fa-sync"></i>  Ubah</button>
                                    <a class="btn btn-primary" href="/penyakit"><i class="fas fa-times-circle"></i> Batal</a>
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