<head>
   <link rel="stylesheet" type="text/css" href="{{ url('assets/css/handbook.css') }}">
   <script src="https://kit.fontawesome.com/b4f8842075.js" crossorigin="anonymous"></script>
   <meta name=”viewport” content=”width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1″ />
</head>
   @extends('layouts.main')
@section('title', 'Handbook')
@section('content')
<div class="slider">
   <background-color:#E5E5E5
</div>
</br>
<center>
   <img src="{{ url('assets/img/3.png') }}" alt="" style="max-height:100%; margin-bottom:10px;"/>
</center>
</div>
<div class="container"><button type="button" class="btn btn-outline-danger" style="font-color:red; background:light-grey; border:grey; border-radius:25px; margin-left:30px;">Our Intern Handbook</button>
</div>
<ul class="p-0" style="margih-top:20px;">
   <!-- Demo header-->
<section class="py-5 header">
    <div class="container py-4">    
        <div class="row p-5">
            <div class="col-md-3">
                <!-- Tabs nav -->
                <!--<a class="one">-->
                <div id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="one" data-toggle="pill" href="handbook" role="tab" aria-controls="v-pills-home" aria-selected="true">
                            <span class="font-weight-bold small text-uppercase">Frontend Development</span></a>
    </br>
    </br>
                        <a  class="one" data-toggle="pill" href="backend" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                            <span class="font-weight-bold small text-uppercase">Backend Development</span></a>
    </br>
    </br>
                        <a  class="one" data-toggle="pill" href="mobile" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                            <span class="font-weight-bold small text-uppercase">Mobile Development</span></a>
    </br>
    </br>
                        <a  class="one" data-toggle="pill" href="ux" role="tab" aria-controls="v-pills-1" aria-selected="false">
                            <span class="font-weight-bold small text-uppercase">UI/UX Development</span></a>
    </br>
    </br>
                        <a  class="one" data-toggle="pill" href="sistem" role="tab" aria-controls="v-pills-2" aria-selected="false">
                            <span class="font-weight-bold small text-uppercase">System Analys</span></a>
    </br>
    </br>
                        <a class="one" data-toggle="pill" href="managament" role="tab" aria-controls="v-pills-4" aria-selected="false">
                            <span class="font-weight-bold small text-uppercase">Management</span></a>
    </br>
    </br>
                        <a  class="one" data-toggle="pill" href="ads" role="tab" aria-controls="v-pills-3" aria-selected="false">
                            <span class="font-weight-bold small text-uppercase" type:>Media & Ads</span></a>
    </br>
    </br>
                        <a  class="one" data-toggle="pill" href="icon" role="tab" aria-controls="v-pills-4" aria-selected="false">
                            <span class="font-weight-bold small text-uppercase">Icon & Illustration</span></a>
                        </div>
                  <!--  </a> -->
                 </div>


            <div class="col-md-9">
                <!-- Tabs content -->
                <div class="tab-content" id="v-pills-tabContent">
                    <div class= "tab-pane fade shadow rounded bg-Bright-White show active p-5" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <h3 class="font-italic mb-4">Backend Development</h3>
                        <p class="font-italic text-muted mb-2"><h8>Back-End developer merupakan bidang yang bertanggung jawab dalam pengembangan sebuah website.
                            Back-End Developer bertugas untuk merancang perangkat lunak dari sisi server yang berhubungan
                            dengan logika dan database dengan menggunakan bahasa pemrograman khusus agar fungsi dan sistem 
                            website dapat berjalan. Bidang ini beroperasi pada website yang mencakup  server, database, keamanan 
                            dan arsitektur website. Secara umum, bahasa pemrograman yang digunakan pada Back-End yaitu PHP,
                            Javascript, dll.
                          </h8>
                        </br>
                        </br>
                        <h3>Skill Yang Dibutuhkan</h3>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                        <h8> Memiliki pengetahuan yang luas dalam arsitektur software.</h8>
                        </br>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                        <h8> Memahami cara deployment ke server menjadi nilai tambah.</h8>
                        </br>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                        <h8> Memahami penggunaan kontrol versi seperti Git.</h8>
                        </br>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                        <h8> Memiliki pengetahuan tentang functional dan object oriented programming.</h8>
                        </br>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                        <h8> Memahami bahasa pemrograman  seperti PHP, dan NodeJS.</h8>
                        </br>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                        <h8> Memahami Sql database.</h8>
                        </br>
                        </br>
                        <h3>Tanggung Jawab</h3>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                        <h8> Menganalisis masalah dan memperbaiki kelemahan pada website</h8>
                        </br>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                        <h8> Menciptakan, mempertahankan, mengelola dan meningkatkan performa website</h8>
                        </br>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                        <h8> Merancang dan membuat keamanan pada website</h8>
                        </br>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                        <h8> Mengimplementasikan rancangan struktur data ke dalam kode dengan bahasa </br>pemrograman yang dikuasai</h8>
                        </br>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                        <h8> Merancang struktur model data dengan pemikiran skalabilitas</h8>
                        </br>
                        </br>
                        <h3>Mentor</h3>
                        <h8>#GrowthTogether</h8>
                        </br>
                        <div class="container">
                        <div class="row justify-content-md-center">
                        <div class="col-md-auto">
                            <img src="{{ url('assets/img/Mentor Card 1.png') }}" style="width:200px; height:150px;">
                            <img src="{{ url('assets/img/Mentor Card 2.png') }}" style="width:200px; height:150px;">
                            <img src="{{ url('assets/img/Mentor Card 3.png') }}" style="width:200px; height:150px;">
                            <img src="{{ url('assets/img/Mentor Card 4.png') }}" style="width:200px; height:150px;">
                        </div>
                        </br>
                        </br>
                        <h3>Aplikasi Yang sering digunakan</h3>
                        <ul class="listings__grid" style="padding-left:5px;">
                        <li class="card">
                              <img src="{{ url('assets/img/0.png') }}" alt="" class="card__logo"/>
                              <div class="card__heading">CI</div>
                              <h8>Software Gratis</h8>
                          
                        </li>
                        <li class="card">
                              <img src="{{ url('assets/img/0.png') }}" alt="" class="card__logo" />
                              <div class="card__heading">Laravel</div>
                              <h8>Software Gratis</h8>
                              
                            </li>
                            <li class="card">
                              <img src="{{ url('assets/img/0.png') }}" alt="" class="card__logo"/>
                              <div class="card__heading">Node JS</div>
                              <h8>Software Gratis</h8>
                              
                            </li>
                            <li class="card">
                              <img src="{{ url('assets/img/0.png') }}" alt="" class="card__logo"/>
                              <div class="card__heading">Java Script</div>
                              <h8>Software Gratis</h8>
                           </br>
                           </br>
                        </li>
                        </div>
                        <h3 style="margin-top: 20px;"><b>Kurikulum</b></h3>
                     <button type="button" class="btn btn-success" style="margin-top: 10px;">Download Kurikulum</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection