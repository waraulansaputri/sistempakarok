@extends('layout')
@section('content')

   <div class="breadcrumb-area shadow dark bg-fixed text-light" style="background-image: url({{url('front/assets/img/sapi.png')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Tentang</h1>
                </div>
                <div class="col-md-6 text-right">
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">Tentang</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Top Entry
    ============================================= -->
    <div class="chose-us-area default-padding item-half">
        <div class="container">
            <div class="row">
                <div class="col-md-6 info">
                    <div class="heading">
                        <h2>SISTEM PAKAR DIAGNOSA PENYAKIT SAPI</h2>
                        <p>
                           Aplikasi SPDPS atau Sistem Pakar Diagnosa Penyakit Sapi merupakan sebuah sistem yang dapat digunakan oleh peternak sapi dalam mendiagnosa penyakit sapi. Aplikasi ini dapat membantu peternak dalam mendiagnosa penyakit ang dialami sapi.
                        </p>
                    </div>
                    <ul>
                        <li>
                            <div class="info">
                                <h4>SAPI POTONG</h4>
                                <p>
                                    Sapi potong merupakan salah satu sumberdaya penghasil bahan makanan berupa daging yang memiliki nilai ekonomi tinggi dan penting artinya dalam kehidupan masyarakat. Sapi potong adalah hewan sapi ternak yang dipelihara atau dikembangkan bertujuan untuk memproduksi daging. Sapi tipe pedaging bercirikan laju pertumbuhannya cepat hingga mencapai dewasa dan efisiensi pakannya tinggi.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="info">
                                <h4>SISTEM PAKAR</h4>
                                <p>
                                    Sistem pakar adalah suatu program komputer atau sistem informasi yang mengandung beberapa pengetahuan dari satu atau lebih pakar manusia terkait suatu bidang yang cenderung spesifik.
                            </div>
                        </li>
                        <li>
                            <div class="info">
                                <h4>Pakar</h4>
                                <p>
                                    Terhubung dengan beberapa pakar atau Dokter Hewan yang dapat dihubungi melalu media Whatshap yang telah disediakan didalam web.
                                </p>
                            </div>
                        </li>
                        {{-- <li>
                            <div class="info">
                                <h4>24/7 Emergency</h4>
                                <p>
                                    Consider may dwelling old him her surprise finished families graceful. Gave led past poor met fine was new. 
                                </p>
                            </div>
                        </li> --}}
                    </ul>
                </div>
                {{-- <!-- Start Faq -->
                <div class="col-md-6 faq-area">
                    <div class="heading">
                        <h2>Answer & Questions</h2>
                    </div>
                    <div class="acd-items acd-arrow">
                        <div class="panel-group symb" id="accordion">

                            <!-- Single Item -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#ac1">
                                            Do I need a business plan?
                                        </a>
                                    </h4>
                                </div>
                                <div id="ac1" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <p>
                                            Removing welcomed civility or hastened is. Justice elderly but perhaps expense six her are another passage. Full her ten open fond walk not down.For request general express unknown are.
                                        </p>
                                        <p>
                                             He in just mr door body held john down he. So journey greatly or garrets. Draw door kept do so come on open mean. Estimating stimulated how reasonably precaution diminution she simplicity sir but.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->

                            <!-- Single Item -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#ac2">
                                            How long should a business plan be? 
                                        </a>
                                    </h4>
                                </div>
                                <div id="ac2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>
                                            Removing welcomed civility or hastened is. Justice elderly but perhaps expense six her are another passage. Full her ten open fond walk not down.For request general express unknown are.
                                        </p>
                                        <p>
                                             He in just mr door body held john down he. So journey greatly or garrets. Draw door kept do so come on open mean. Estimating stimulated how reasonably precaution diminution she simplicity sir but.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->

                            <!-- Single Item -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#ac3">
                                            What goes into a business plan?
                                        </a>
                                    </h4>
                                </div>
                                <div id="ac3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>
                                            Removing welcomed civility or hastened is. Justice elderly but perhaps expense six her are another passage. Full her ten open fond walk not down.For request general express unknown are.
                                        </p>
                                        <p>
                                             He in just mr door body held john down he. So journey greatly or garrets. Draw door kept do so come on open mean. Estimating stimulated how reasonably precaution diminution she simplicity sir but.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->

                            <!-- Single Item -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#ac4">
                                            Where do I start? 
                                        </a>
                                    </h4>
                                </div>
                                <div id="ac4" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>
                                            Removing welcomed civility or hastened is. Justice elderly but perhaps expense six her are another passage. Full her ten open fond walk not down.For request general express unknown are.
                                        </p>
                                        <p>
                                             He in just mr door body held john down he. So journey greatly or garrets. Draw door kept do so come on open mean. Estimating stimulated how reasonably precaution diminution she simplicity sir but.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Item -->
                        </div>
                    </div>
                </div> --}}
                <!-- End Faq -->
            </div>
        </div>
    </div>
    <!-- End Why Chose Us -->
    @endsection