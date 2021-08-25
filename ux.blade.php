<head>
   <link rel="stylesheet" type="text/css" href="{{ url('assets/css/handbook.css') }}">
   <script src="https://kit.fontawesome.com/b4f8842075.js" crossorigin="anonymous"></script>
   <meta name=”viewport” content=”width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1″ />
   <script src ="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script>
<script src ="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"> </script>
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
                    <h3> UI/UX Development </h3>
                        <h8>Secara umum pada dunia profesional, User Experience Designer (UXD) & User Interface Design merupakan dua bidang berbeda secara tugas, namun sangat berdampingan dan dapat dilakukan secara bersamaan. Tugas dari UI/UX Designer adalah bertanggung jawab dalam menganalisis, meningkatkan produktivitas sebuah aplikasi mobile atau website dengan cara membuat rancangan produk yang bermanfaat dan membangun sebuah tampilan antarmuka aplikasi mobile atau website (UI) yang interaktif berdasarkan prinsip UX sehingga mudah digunakan dan dapat memberikan pengalaman terbaik kepada pengguna atau user. Fokus utama bagi UI/UX Designer adalah menciptakan kepuasan user terhadap aplikasi yang diterjemahkan dalam UI yang menarik dan mudah diterima oleh user.
                          </h8>
                        </br>
                        </br>
                        <h3> Skill Yang Dibutuhkan </h3>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                        <h8> Melakukan riset untuk user experience yang baik.</h8>
                        </br>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                        <h8> Memahami perilaku android dan iOS dan Web.</h8>
                        </br>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                        <h8> Kompeten dalam pembuatan user flow pada sebuah aplikasi.</h8>
                        </br>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                        <h8> Membuat solusi desain dengan memerhatikan fungsional, keindahan, dan interaktif.</h8>
                        </br>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                        <h8> Familiar dan bisa menggunakan design tools seperti Figma, Sketch, Adobe XD.</h8>
                        </br>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                        <h8> Melakukan usability testing & mempresentasikan hasil test design kepada stakeholder.</h8>
                        </br>
                        </br>
                        <h3> Tanggung Jawab </h3>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                        <h8> Menganalisis kebutuhan dan pengalaman user terhadap produk yang akan dibuat.</h8>
                        </br>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                        <h8> Melakukan kerjasama dengan Front-End Developer dalam mengembangkan UI</h8>
                        </br>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                        <h8> Membuat wireframe, storyboard, sitemaps dan screen flows</h8>
                        </br>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                        <h8> Membuat visual design dan layout sesuai dengan prinsip design</h8>
                        </br>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                        <h8> Membuat design element untuk aplikasi.</h8>
                        </br>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                        <h8> Mengimplementasikan semua bagian design ke dalam mockup</h8>
                        </br>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                        <h8> Membuat mockup untuk mengembangkan persona dan skenario user</h8>
                        </br>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                        <h8> Melakukan testing produk kepada user untuk mendapatkan feedback dan mengevaluasi pengalaman penggunaan</h8>
                        </br>
                        </br>
                        <h3> Mentor </h3>
                        <h8>#GrowthTogether</h8>
                        </br>
                        <div class="container">
                        <div class="row justify-content-md-center">
                        <div class="col-md-auto">
                            <img src="{{ url('assets/img/Mentor Card 6.png') }}" style="width:200px; height:150px;">
                        </div>
                        </br>
                        </br>
                        <h3> Aplikasi Yang sering digunakan </h3>
                        <ul class="listings__grid" style="padding-left:5px;">
                        <li class="card">
                              <img src="{{ url('assets/img/0.png') }}" alt="" class="card__logo"/>
                              <div class="card__heading">Figma</div>
                              <h8>Software Gratis</h8>
                          
                        </li>
                        <li class="card">
                              <img src="{{ url('assets/img/0.png') }}" alt="" class="card__logo" />
                              <div class="card__heading">Adobe XD</div>
                              <h8>Software Gratis</h8>
                              
                            </li>
                            <li class="card">
                              <img src="{{ url('assets/img/0.png') }}" alt="" class="card__logo"/>
                              <div class="card__heading">Framer</div>
                              <h8>Software Gratis</h8>
                              
                            </li>
                            <li class="card">
                              <img src="{{ url('assets/img/0.png') }}" alt="" class="card__logo"/>
                              <div class="card__heading">Whimsical</div>
                              <h8>Software Gratis</h8>
                           </br>
                           </br>
                        </li>
                        </div>
                        <h3 style="margin-top: 20px;"> Kurikulum </h3>
                     <button type="button" class="btn btn-success" style="margin-top: 10px;">Download Kurikulum</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection