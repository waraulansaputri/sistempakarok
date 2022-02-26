@extends('layout')
@section('content')

   <div class="breadcrumb-area shadow dark bg-fixed text-light" style="background-image: url({{url('front/assets/img/sapi.png')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Prediagnostic</h1>
                </div>
                <div class="col-md-6 text-right">
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">Prediagnostic</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="features-area default-padding bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12 appoinment">
                    <div class="appoinment-box">
                        <div class="heading">
                            <h4>Diagnosa Penyakit Pada Sapi</h4>
                            <h2>Pilih Gejala</h2>
                        </div>
                     
			<form action="{{ route('diagnosa.start') }}" method="POST">
				{{ csrf_field() }}
				{{ method_field('POST') }}
				
					@foreach($Gejala as $gejala)
					<div class="checkbox">
					
					<label for="nama_gejala" class="form-check-label">{!! Form::checkbox('id_gejala[]', $gejala->id_gejala, false, ['class' => 'form-check-input']) !!} {{ $gejala->nama_gejala }}</label>
					</div>
					@endforeach
				
				<button type="submit" class="btn btn-block btn-primary">Diagnosa</button>
			</form>
		
                </div>
                
            </div>
        </div>
    </div>
    </div>
	
@endsection