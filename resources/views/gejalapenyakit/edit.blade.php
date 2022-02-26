@extends('layouts.master')

@section('title')
    Update Gejala Penyakit
@endsection

@section('content')

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Gejala Penyakit</h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">SPDPS</h2>
            <p class="section-lead">
              Halaman Edit Gejala Penyakit
            </p>
            <div class="row">
                <div class="col-12 ">
                    <div class="card card-primary">
                        <form method="post" action="{{route('gejalapenyakit.update', $gejalapenyakit->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            

                            <div class="card-body">
                              <div class="form-group">
                                    <label>Penyakit</label>
                                   <select name="id_penyakit" class="form-control">
                                        @foreach ($penyakit as $item)
                                            <option value="{{ $item->id_penyakit}}"
                                            @if($item->id_penyakit  == $gejalapenyakit->id_penyakit)
                                                selected
                                            @endif
                                            >{{ $item->id_penyakit}} - {{$item->nama_penyakit}}
                                            </option>
                                        @endforeach 
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Gejala</label>
                                   <select name="id_gejala" class="form-control">
                                        @foreach ($gejala as $item)
                                            <option value="{{ $item->id_gejala}}"
                                            @if($item->id_gejala  == $gejalapenyakit->id_gejala)
                                                selected
                                            @endif
                                            >{{ $item->id_gejala}} - {{$item->nama_gejala}}
                                            </option>
                                        @endforeach 
                                    </select>
                                </div>

                              


                                <div class="form-group">
                                    <button type="submit" class="btn btn-warning"><i class="fas fa-sync"></i>  Ubah</button>
                                    <a class="btn btn-primary" href="/gejalapenyakit"><i class="fas fa-times-circle"></i> Batal</a>
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