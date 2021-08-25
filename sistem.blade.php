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
                        <a class="one" data-toggle="pill" href="handbook" role="tab" aria-controls="v-pills-home" aria-selected="felse">
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
                        <a  class="one" data-toggle="pill" href="sistem" role="tab" aria-controls="v-pills-2" aria-selected="true">
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
                        <h3 class="font-italic mb-4">System Analys</h3>
                        <p class="font-italic text-muted mb-2"><h8> nalisis sistem merupakan bidang yang bertanggung jawab dalam mengidentifikasi masalah yang ada</br>pada sistem mencakup mengumpulkan data, membersihkan data, menganalisis data dan membuat </br>hipotesis/kesimpulan dari data yang sudah diolah. Fokus utama dari Data Analyst yaitu memecahkan</br>masalah/mencari insight dan memberikan informasi (data) kepada stakeholders untuk memahami</br>kebutuhan bisnis.
                        </h8>
                        </p>
                        </br>
                        </br>
                        <h3><b>Skill Yang Dibutuhkan</b></h3>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                            <h8> Memiliki kemampuan problem solving & komunikasi yang baik</h8> 
                        </br>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                            <h8> Memiliki pemahaman yang kuat tentang statistik dan matematika</h8> 
                        </br>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                            <h8> Memiliki pemahaman terkait model data, pengembangan design database, teknik</br>
                                data mining dan segmentasi</h8> 
                        </br>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                            <h8> Memiliki kemampuan dalam menyajikan informasi melalui bagan dan grafik dengan</br>
                                menggunakan tools seperti Tableau dan lain-lain</h8> 
                        </br>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                            <h8> Mampu menggunakan tools analisis seperti SQL, XML, JavaScript dan sebagainya</h8>
                        </br>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                            <h8> Pemahaman bahasa pemrograman menjadi nilai tambah</h8>

                        </br>
                        </br>
                        </br>
                        </br>
                        <h3><b>Tanggung Jawab</b></h3>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                                <h8> Mengumpulkan data dengan melakukan survei, melacak karakteristik pengunjung</br>
                                di situs web perusahaan dan lain-lain</h8> 
                        </br>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                                <h8> Menata dan mengatur ulang data yang sudah didapatkan, lalu diubah kedalam</br>
                                format yang mudah dibaca dan dipahami</h8> 
                        </br>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                                <h8> Menafsirkan data/membuat kesimpulan dari data yang sudah dikumpulkan dengan</br>
                                menggunakan alat statistik</h8> 
                        </br>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                                <h8> Menyiapkan laporan untuk stakeholder yang berisikan tentang tren, pola dan</br>
                                prediksi menggunakan data yang relevan</h8> 
                        </br>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                                <h8> Membuat dokumentasi yang sesuai untuk stakeholders dalam memahami </br>
                                langkah-langkah proses analisis data</h8>
                                </br>
                        <img src="{{ url('assets/img/Vector.png') }}" style="height:20px; width:20px;">
                                <h8> Bekerja sama dengan team yang relevan</h8>

                        </br>
                        </br>
                        </br>
                        </br>
                                <h3><b>Mentor</b></h3>
                                <h8>#GrowthTogether</h8>
                        </br>
                                <img src="{{ url('assets/img/Mentor Card 7.png') }}" style="width:200px; height:150px;">

                        </br>
                        </br>
                        </br>
                        </br>
                                <h3><b>Aplikasi Yang sering digunakan</b></h3>

                            <ul class="listings__grid" style="padding-left:5px;">
                            <li class="card">
                            <img src="{{ url('assets/img/0.png') }}" alt="" class="card__logo" />
                            <div class="card__heading">Google Analytic</div>
                            <h8>Software Gratis</h8>
                        
                            </li>
                            <li class="card">
                            <img src="{{ url('assets/img/0.png') }}" alt="" class="card__logo" />
                            <div class="card__heading">Google Workspace</div>
                            <h8>Software Gratis</h8>
                            
                            </li>
                            <li class="card">
                            <img src="{{ url('assets/img/0.png') }}" alt="" class="card__logo" />
                            <div class="card__heading">..........</div>
                            <h8>Software Gratis</h8>
                            </li>
                            
                        </div>
                        </br>
                        </br>
                                <h3><b>Kurikulum</b></h3>
                                <button type="button" class="btn btn-success">Download Kurikulum</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection