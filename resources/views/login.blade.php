@extends('layout')
@section('content')

   <div class="breadcrumb-area shadow dark bg-fixed text-light" style="background-image: url({{url('front/assets/img/sapi.png')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Login</h1>
                </div>
                <div class="col-md-6 text-right">
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">Login</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Top Entry
    ============================================= -->
    <div class="features-area default-padding bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-6 appoinment">
                    <div class="appoinment-box">
                        <div class="heading">
                            <h4>Anda Harus Login Untuk Melakukan Konsultasi</h4>
                            <h2>Silahkan Login!</h2>
                        </div>
                        @if ($message = Session::get('success'))
			      <div class="alert alert-success alert-block">
			        <button type="button" class="close" data-dismiss="alert">×</button>    
			          <strong>{{ $message }}</strong>
			      </div>
			    @endif
			     @if ($message = Session::get('loginError'))
			      <div class="alert alert-danger alert-block">
			        <button type="button" class="close" data-dismiss="alert">×</button>    
			          <strong>{{ $message }}</strong>
			      </div>
			    @endif
                        <form action="{{route('diagnosa.login_post')}}" method="post">
                        @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" id="f-name" name="username" placeholder="Username" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" id="l-lname" name="password" placeholder="Password" type="text">
                                    </div>
                                </div>
                              
                                <div class="col-md-12">
                                    <button type="submit" name="submit" id="submit">
                                        Login <i class="fa fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <p>Belum register? <a href="registrasi">Daftar Sekarang</a></p>
                    </div>
                </div>
                <div class="col-md-6 features-items">
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="flaticon-tooth"></i>
                            </div>
                            <div class="info">
                                <h4>Advanced Technology</h4>
                                <p>
                                    Principle oh explained excellent do my suspected conveying in. Excellent you did therefore perfectly supposing described. 
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="flaticon-medicine"></i>
                            </div>
                            <div class="info">
                                <h4>Healthcare Solutions</h4>
                                <p>
                                    Principle oh explained excellent do my suspected conveying in. Excellent you did therefore perfectly supposing described. 
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="flaticon-24-hours"></i>
                            </div>
                            <div class="info">
                                <h4>24/7 Availability </h4>
                                <p>
                                    Principle oh explained excellent do my suspected conveying in. Excellent you did therefore perfectly supposing described. 
                                </p>
                            </div>
                        </li>
                    </ul>
                    <div class="bottom">
                        <div class="video">
                            <a href="https://www.youtube.com/watch?v=5vY-D42NFP4" class="popup-youtube relative theme video-play-button item-center">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                        <div class="content">
                            <h4>Let’s see our intro video</h4>
                            <p>
                                If your smile is not becoming to you, then you should be coming to me!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Features -->
    <!-- End Why Chose Us -->
    @endsection