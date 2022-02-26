@extends('layouts.master')

@section('title')
    Create Gejala Penyakit
@endsection

@section('content')

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Gejala Penyakit</h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">SPDPS</h2>
            <p class="section-lead">
              Halaman Tambah Data Gejala Penyakit
            </p>
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <form method="post" action="{{route('gejalapenyakit.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                               <div class="form-group">
                                    <label>Penyakit </label>
                                     <select name="id_penyakit" class="form-control">
                                        <option >--Pilih--</option>
                                        @foreach ($penyakit as $item)
                                            <option value="{{ $item->id_penyakit}}">{{ $item->id_penyakit}} - {{$item->nama_penyakit }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Gejala</label>
                                     <select name="id_gejala" class="form-control">
                                        <option >--Pilih--</option>
                                        @foreach ($gejala as $item)
                                            <option value="{{ $item->id_gejala}}">{{ $item->id_gejala}} - {{$item->nama_gejala }}</option>
                                        @endforeach
                                    </select>
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