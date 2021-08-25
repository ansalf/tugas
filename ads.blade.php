<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- styles -->
   <link rel="stylesheet" type="text/css" href="{{ url('assets/css/handbook.css') }}">
   <!-- Scripts -->
   <link rel="stylesheet" href="css/handbook.css"/>

</head>
@extends('layouts.main')
@section('title', 'Handbook')
@section('content')
<div class="slider">
   <background-color:#E5E5E5
</div>
</br>
<center>
   <img src="{{ url('assets/img/3.png') }}" alt="" style="max-height:100%;"/>
</center>
</div>
<div class="container"><button type="button" class="btn btn-outline-danger" style="font-color:red; background:light-grey; border:grey; border-radius:25px; margin-left:30px;">Our Intern Handbook</button>
</div>
<ul class="p-0" style="margih-top:15px;">
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
                        <h3 class="font-italic mb-4">Media & Ads</h3>
                        <p class="font-italic text-muted mb-2"><h8> Media merupakan bidang yang bertanggung jawab untuk menghimpun, mengelola dan mempublikasikan sebuah konten yang berisikan sebuah informasi dalam bentuk gambar, foto maupun video untuk mempromosikan sebuah produk, jasa, trend, news dan sebagainya melalui berbagai platform (digital/fisik) yang dikemas secara menarik sesuai dengan target audiens yang dituju.
                        </h8>
                        </p>
                        </br>
                        </br>
                        <h3> Skill Yang Dibutuhkan </h3>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                        <h8> Mampu mengembangkan ide secara komunikatif, strategis & inovatif</h8>
                        </br>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                        <h8> Memahami penggunaan social media terkini seperti Instagram, TikTok, You Tube, LinkedIn, dll</h8>
                        </br>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                        <h8> Memiliki analytical thinking dan problem solving yang baik</h8>
                        </br>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                        <h8> Mengetahui SEO/SEM</h8>
                        </br>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                        <h8> Mengetahui dan mampu menggunakan tools pendukung sesuai kebutuhan seperti Google Workspace, Trello, Web Analytics, SEO tools, dll</h8>
                        </br>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                        <h8> Memiliki salah satu skill yang dibutuhkan, antara lain Konten Kreator, Video Editing, Copywriting, atau Digital marketing Ads</h8>
                        </br>
                        <h3> Tanggung Jawab </h3>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                        <h8> Melakukan riset channel digital yang berpotensi sebagai media promosi potensial</h8>
                        </br>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                        <h8> Bekerja sama dengan tim dan klien terkait brainstorming konsep, design, distribusi</h8>
                        </br>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                        <h8> Menentukan campaign meliputi awareness,engagement,conversion,dll dengan tim operations sebagai implementer</h8>
                        </br>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                        <h8>Merencanakan dan membuat konten dengan memahami target audience</h8>
                        </br>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                        <h8> Brainstorming dengan team terkait konsep konten dan visualisasi</h8>
                        </br>
                        </br>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                        <h8> Menulis konten secara baik dan benar sesuai dengan pedoman pada aturan bahasa/standar</h8>
                        </br>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                        <h8> Memperluas wawasan dengan selalu update berita dan informasi terbaru</h8>
                        </br>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                        <h8> Mendokumentasikan setiap event kantor berupa foto dan video</h8>
                        </br>
                        </br>
                        <h3> Mentor </h3>
                        <h8>#GrowthTogether</h8>
                        <div class="container">
                        <div class="row justify-content-md-center">
                        <div class="col-md-auto">
                            <img src="{{ url('assets/img/Mentor Card 9.png') }}" style="width:200px; height:150px;">
                            <img src="{{ url('assets/img/Mentor Card 10.png') }}" style="width:200px; height:150px;">
                        </div>
                        </br>
                        </br>
                        <h3> Aplikasi Yang sering digunakan </h3>
                        <ul class="listings__grid" style="padding-left:5px;">
                        <li class="card" style="min-width: 40px;">
                           <img src="{{ url('assets/img/0.png') }}" alt="" class="card__logo" />
                           <div class="card__heading">Photoshop</div>
                           <h8>Software Gratis</h8>
                        </li>
                        <li class="card" style="min-width: 40px;">
                           <img src="{{ url('assets/img/0.png') }}" alt="" class="card__logo" />
                           <div class="card__heading">Canva</div>
                           <h8>Software Gratis</h8>
                        </li>
                        <li class="card" style="min-width: 40px;">
                           <img src="{{ url('assets/img/0.png') }}" alt="" class="card__logo" />
                           <div class="card__heading">Filmora</div>
                           <h8>Software Gratis</h8>
                        </li>
                        <li class="card" style="min-width: 40px;">
                           <img src="{{ url('assets/img/0.png') }}" alt="" class="card__logo" />
                           <div class="card__heading">Adobe Premiere</div>
                           <h8>Software Gratis</h8>
                        </li>
                        <li class="card" style="min-width: 40px;">
                           <img src="{{ url('assets/img/0.png') }}" alt="" class="card__logo" />
                           <div class="card__heading">Wordpress</div>
                           <h8>Software Gratis</h8>
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
</html>
@endsection