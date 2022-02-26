@extends('layout')
@section('content')

   <div class="breadcrumb-area shadow dark bg-fixed text-light" style="background-image: url({{url('front/assets/img/sapi.png')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Hasil Diagnosa</h1>
                </div>
                <div class="col-md-6 text-right">
                    <ul class="breadcrumb">
                        <li><a href="/"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">Hasil Diagnosa</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
   
    <div class="features-area default-padding bg-gray">
        <div class="container">
         <input type="button" class="btn btn-primary pull-right" onclick="printDiv('printableArea')" value="CETAK" />
<div id="printableArea">
            <div class="row">
                <div class="col-md-12 appoinment">
                    <div class="appoinment-box">
                        <div class="heading">
                            <h4>Diagnosa Penyakit Pada Sapi</h4>
                            <h2>Hasil Diagnosa</h2>
                        </div>
	<p>Nama : {{ Auth::guard('rekammedik')->user()->nama }}<br>
	No HP : {{ Auth::guard('rekammedik')->user()->no_hp }}<br>
	Tanggal Konsultasi : {{ date("d-m-Y") }}
	</p>
		<table class="table table-hover">
			<thead>
				<tr>
					<th class="col-4">Nama Penyakit</th>
					<th class="col-2">Presentasi Terindikasi</th>
					<th class="col-4">Solusi</th>
				</tr>
			</thead>
			<tbody>
				@foreach($diagnosa as $diagnosa)
				@if($diagnosa['skor']>=25)
				<tr>
					<td>{{ $diagnosa['nama_penyakit'] }}</td>
					<td>{{ round($diagnosa['skor'],2) }}%</td>
					<td>{{ $diagnosa['solusi'] }}</td>
				</tr>
				@endif
				@endforeach
			</tbody>
		</table>
		</div>
                
            </div>
        </div>
    </div>
    </div>
    </div>
<script>

function printDiv(divName) {

     var printContents = document.getElementById(divName).innerHTML;

     var originalContents = document.body.innerHTML;



     document.body.innerHTML = printContents;



     window.print();



     document.body.innerHTML = originalContents;

}

</script>
	
@endsection