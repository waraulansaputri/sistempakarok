@extends('layout')
@section('content')
    <!-- Start Banner 
    ============================================= -->
    <div class="banner-area heading-exchange text-dark">
        <div id="bootcarousel" class="carousel transparent-nav inc-top-heading slide carousel-fade animate_text" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner carousel-zoom">
                <div class="item active">
                    <div class="slider-thumb bg-cover" style="background-image: url(front/assets/img/sapi.png);"></div>
                    <div class="box-table">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="content">
                                            <h1 data-animation="animated slideInLeft">Sistem Pakar <span>Diagnosa</span> Pada Penyakit Sapi</h1>
                                            <p data-animation="animated slideInUp">
                                                Sistem yang dibangun untuk membantu peternak sapi dalam menangani beberapa penyakit sapi.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
            <!-- End Wrapper for slides -->

            <!-- Left and right controls -->
          <!--  <a class="left carousel-control" href="#bootcarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#bootcarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
                <span class="sr-only">Next</span>
            </a>-->
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Top Entry
    ============================================= -->
    <div class="top-entry-area text-center">
        <div class="container">
            <div class="row">
                <div class="item-box">
                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <i class="flaticon-ambulance-1"></i>
                            <h4>Lokasi</h4>
                            <p>
                               Puskeswan terdekat : Pancaukan, Barumun, Kabupaten Padang Lawas, Sumatera Utara 22763
                            </p>
                            
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <i class="flaticon-24-hours"></i>
                            <h4>Waktu Konsultasi</h4>
                            
                            <ul>
                                <li> <span> Mon - Tues :  </span>
                                  <div class="pull-right"> 6.00 am - 10.00 pm </div>
                                </li>
                                <li> <span> Wednes - Thurs :</span>
                                  <div class="pull-right"> 8.00 am - 6.00 pm </div>
                                </li>
                                <li> <span> Sun : </span>
                                  <div class="pull-right closed"> Closed </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <i class="flaticon-department"></i>
                            <h4>Kontak Pakar</h4>
                           <ul>
                           @foreach($pakar as $pakar)
				<li> <center><img src="{{ URL::asset("foto/{$pakar['foto']}") }}" width="40px"></center><br><span> {{ $pakar['nama'] }} :  </span>
                                  <div class="pull-right"><a href="https://wa.me/{{ $pakar['no_hp'] }}" style="margin-top: 0px" target="_blank">{{ $pakar['no_hp'] }}</a> </div><br>
                                  <span>Alamat :  </span><div class="pull-right">{{ $pakar['alamat'] }}</div>
                                </li>
				
				@endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Entry -->

 @endsection