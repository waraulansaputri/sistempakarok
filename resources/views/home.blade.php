@extends('layouts.master')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Selamat Datang Di Aplikasi SPDPS</h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">Pengenalan Sistem Pakar Diagnosa Penyakit Sapi</h2>
            <p class="section-lead">
              
            </p>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> </div>
                <div class="card-body">
                    <p>Sistem Pakar Diagnosa Penyakit Sapi ini merupakan sebuah aplikasi yang dapat membantu peternak sapi, dengan membahas 18 penyakit dan memili 74 gejala penyakit sapi. </p>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <table class="table table-hover">
                <thead>
                    <td>
                          
                            <a href="{{ route('penyakit.index') }}" class="btn btn-primary">Daftar Penyakit</a>
                        </td>
                </thead>
               
            </table>
        </div>
    </div>
    </div>
    </section>
</div>

@endsection
