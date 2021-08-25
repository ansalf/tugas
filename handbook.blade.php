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
   <background-color:#FCFCFC
</div> 
</br>
<center>
   <img src="{{ url('assets/img/3.png') }}" alt="" style="max-height:100%;"/>
</center>
</div>
<div class="container"><button type="button"  class="btn btn-outline-danger" style="font-color:red; background:light-grey; border:grey; border-radius:25px; margin-left:30px;">Our Intern Handbook</button>
</div>
<ul class="p-0" style="margih-top:15px;">
   <!-- Demo header-->
<section class="py-5 header">
    <div class="container py-4">    
        <div class="row p-5">
            <div class="col-md-3">
                <!-- Tabs nav -->
                <!--<a class="one">--> 
                    <div id="v-pills-tab" role="tablist" aria-orientation="vertical" class="mCustomScrollbar _mCS_1 mCS-autoHide">
                        <a class="one" data-toggle="pills" href="handbook" role="tab" aria-controls="v-pills-home" aria-selected="true">
                            <span class="font-weight-bold small text-uppercase">Frontend Development</span></a>
    </br>
    </br>
                        <a  class="one" data-toggle="pills" href="backend" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                            <span class="font-weight-bold small text-uppercase">Backend Development</span></a>
    </br>
    </br>
                        <a  class="one" data-toggle="collapse" href="mobile" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                            <span class="font-weight-bold small text-uppercase">Mobile Development</span></a>
    </br>
    </br>
                        <a  class="one" data-toggle="pills" href="ux" role="tab" aria-controls="v-pills-1" aria-selected="false">
                            <span class="font-weight-bold small text-uppercase">UI/UX Development</span></a>
    </br>
    </br>
                        <a  class="one" data-toggle="pills" href="sistem" role="tab" aria-controls="v-pills-2" aria-selected="false">
                            <span class="font-weight-bold small text-uppercase">System Analys</span></a>
    </br>
    </br>
                        <a class="one" data-toggle="pills" href="managament" role="tab" aria-controls="v-pills-4" aria-selected="false">
                            <span class="font-weight-bold small text-uppercase">Management</span></a>
    </br>
    </br>
                        <a  class="one" data-toggle="pills" href="ads" role="tab" aria-controls="v-pills-3" aria-selected="false">
                            <span class="font-weight-bold small text-uppercase" type:>Media & Ads</span></a>
    </br>
    </br>
                        <a  class="one" data-toggle="pills" href="icon" role="tab" aria-controls="v-pills-4" aria-selected="false">
                            <span class="font-weight-bold small text-uppercase">Icon & Illustration</span></a>
                        </div>
                  <!--  </a> -->
                 </div>


            <div class="col-md-9">
                <!-- Tabs content -->
                <div class="tab-content" id="v-pills-tabContent">
                    <div class= "tab-pane fade shadow rounded bg-Bright-White show active p-5" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <h3 class="font-italic mb-4">Frontend Development</h3>
                        <p class="font-italic text-muted mb-2"><h8> Front-End Developer merupakan bidang yang memiliki tanggung jawabdalam pembuatan tampilan dari sebuah wesite.Fokus utama seorang Front-End Developer yakni, memastikan bahwa setiap
                           bagian dari website dapat di lihat dan berinteraksi secara langsung dnegan pengguna(User). Pekerjaan
                           ini mencakup tata letak design web, hingga bagaimana perilaku dari pengalaman seorang perngguna.Hal
                           yang perlu dipahami oleh Front-End Developer yaitu pemahaman, HTML,CSS dan JavaScript.
                        </h8>
                        </p>
                        </br>
                        </br>
                        <h3> Skill Yang Dibutuhkan </h3>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                        <h8> Memahami HTML,CSS, dan JavaScript</h8>
                        </br>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                        <h8> Memahami cara menggunakan control versi seperti git</h8>
                        </br>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                        <h8> Memahami konsep REST API</h8>
                        </br>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                        <h8> Memahami beberapa framework yang sering digunakan seperti Taliwind </br> Boostrap, VeuJS atau ReacJS</h8>
                        </br>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                        <h8> Memahami proses pembuatan website dengan menggunakan metode responsive</br> web design</h8>
                        </br>
                        </br>
                        <h3> Tanggung Jawab </h3>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                        <h8> Kooordinasi dengan team Back-End Developer dalam hal maintance atau </br> troubleshooting</h8>
                        </br>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                        <h8> Memastikan website dapat di akses, baik melalui dekstop atau mobile</h8>
                        </br>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                        <h8> Memastikan optimasi design website yang mampu memaksimalkan user </br> experiance(UX)</h8>
                        </br>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                        <h8> Mampu implementasi konsep design website ke dalam sebuah kode </br> dengan dukungan bahasa pemrograman dan <i> framework</i> yang dikuasai</h8>
                        </br>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                        <h8> Merancang kerangka website yang sesuai dengan design yang sudah ada</h8>
                        </br>
                        </br>
                        <h3> Mentor </h3>
                        <h8>#GrowthTogether</h8>
                        </br>
                        <img src="{{ url('assets/img/Mentor Card.png') }}" style="width:200px; height:150px;">
                        </br>
                        </br>
                        <h3> Aplikasi Yang sering digunakan </h3>
                            <ul class="listings__grid" style="padding-left:5px;">
                            <li class="card" style="min-width: 30px;">
                            <img src="{{ url('assets/img/0.png') }}" alt="" class="card__logo" />
                            <div class="card__heading">Visual Studi Code</div>
                            <h8>Software Gratis</h8>
                            </li>
                            <li class="card" style="min-width: 30px;">
                            <img src="{{ url('assets/img/0.png') }}" alt="" class="card__logo" />
                            <div class="card__heading">Postman API</div>
                            <h8>Software Gratis</h8>
                            </li>
                            <li class="card" style="min-width: 30px;">
                            <img src="{{ url('assets/img/0.png') }}" alt="" class="card__logo" />
                            <div class="card__heading">Figma</div>
                            <h8>Software Gratis</h8>
                            </li>
                            <li class="card" style="min-width: 30px;">
                            <img src="{{ url('assets/img/0.png') }}" alt="" class="card__logo" />
                            <div class="card__heading">Github</div>
                            <h8>Software Gratis</h8>
                            </li>
                            <li class="card" style="min-width: 30px;">
                            <img src="{{ url('assets/img/0.png') }}" alt="" class="card__logo" />
                            <div class="card__heading">Chrome Dev Tools</div>
                            <h8>Software Gratis</h8>
                            </li>
                            <li class="card" style="min-width: 30px;">
                            <img src="{{ url('assets/img/0.png') }}" alt="" class="card__logo" />
                            <div class="card__heading">Google Font API</div>
                            <h8>Software Gratis </h8>
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

    </div>
</section>
</html>
@endsection