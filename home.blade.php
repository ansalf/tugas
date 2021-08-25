<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>home</title>

	<!-- style -->
	<link rel="stylesheet" type="text/css" href="{{ url('assets/css/home.css') }}">

	<!-- font -->
	<href="https://fonts.googleapis.com/css?family=TTCommons">
</head>
<body>
	@extends('layouts.main')
	@section('title','home')
	@section('content')
	<div class="slider"> 
		@include ('home.slider')
	</div>
	<!-- hero dan txt -->
	<div class="row" >
		<div class="col-lg-6 col-md-12 col-sm-12">
			<div class="row p-5" >
			<span><h1>Tingkatkan Skill anda di InagataHub</h1>
</br>
				<h6> <b>Kami mencari pahlawan super seperti kalian!</b> Dapatkan pengalaman bekerja di perusahaan teknologi bersama-sama membentuk masa depan yang lebih baik</h6></span>
</br>
				<button type="button" style="width:40%; margin-top: 20px; border:red; " class="btn-outline-danger">Daftar Sekarang Juga</button>
			</div>
		</div>
			<div class="col-lg-6 col-md-12 col-sm-12"><img src="{{ url('assets/img/Herro Image.png') }}" class="img-fluid">
			</div>
	</div>
	<!-- galery logo -->
<!-- txt atas career -->
		<div class="row p-5" style="margin-left:25px; margin-bottom:-20px;">
			<div class="col-lg-6 col-md-12 col-sm-12">
				<b><h3>Temukan <i>Passion</i> kamu</br> Berdasarkan Kategori Yang Kami</br> Sediakan</h3></b>
				<span style="opacity: 75%;"><font color="black" font-size="10px">Pilihan lengkap membangun karir dimasa depan yang lebih baik</font></span>
			</div>
		</div>
	<!-- card career -->
	<div class="row p-5" style="margin-left:25px; margin-top:-20px;">
		<!-- frotend -->
		<div class="col-lg-3 col-md-6 col-sm-12">
			<div class="card" style="padding-left: 20px;margin-top: 20px; padding-right: 20px;">
			<img src="{{ url('assets/img/karir1.png') }}" style="position:static; width:63px; height:67,5px; left:10px; top:7px;">
			<div class="card_heading"> Frontend Developer
			</div>
</br>
			<button type="button" class="btn_download">Download Kurikulum</button>
			</br>
			<button type="button" class="btn btn-success" style="background-color:#F2F2F2; color:#747474; border:#F2F2F2;">Lihat detail</button>
			</div>
		</div>
<!-- backend -->
		<div class="col-lg-3 col-md-6 col-sm-12">
			<div class="card" style="padding-left: 20px;margin-top: 20px; padding-right: 20px;">
			<img src="{{ url('assets/img/karir2.png') }}" style="position:static; width:63px; height:67,5px; left:10px; top:7px;">
			<div class="card_heading"> Backend Developer
			</div>
</br>
			<button type="button" class="btn_download">Download Kurikulum</button>
			</br>
			<button type="button" class="btn btn-success" style="background-color:#F2F2F2; color:#747474; border:#F2F2F2;">Lihat detail</button>
			</div>
		</div>
<!-- mobile -->
		<div class="col-lg-3 col-md-6 col-sm-12">
			<div class="card" style="padding-left: 20px;margin-top: 20px; padding-right: 20px;">
			<img src="{{ url('assets/img/karir3.png') }}" style="position:static; width:63px; height:67,5px; left:10px; top:7px;">
			<div class="card_heading"> Mobile Developer
			</div>
</br>
			<button type="button" class="btn_download">Download Kurikulum</button>
			</br>
			<button type="button" class="btn btn-success" style="background-color:#F2F2F2; color:#747474; border:#F2F2F2;">Lihat detail</button>
			</div>
		</div>
<!-- ui/ux -->
		<div class="col-lg-3 col-md-6 col-sm-12">
			<div class="card" style="padding-left: 20px;margin-top: 20px; padding-right: 20px;">
			<img src="{{ url('assets/img/karir4.png') }}" style="position:static; width:63px; height:67,5px; left:10px; top:7px;">
			<div class="card_heading"> UI/UX Developer
			</div>
</br>
			<button type="button" class="btn_download">Download Kurikulum</button>
</br>
			<button type="button" class="btn btn-success" style="background-color:#F2F2F2; color:#747474; border:#F2F2F2;">Lihat detail</button>
			</div>
		</div>
	</div>
<!-- card career2 -->
	<div class="row p-5" style="margin-top:-60px; margin-left:25px;">
	<!-- system analys -->
		<div class="col-lg-3 col-md-6 col-sm-12">
			<div class="card" style="padding-left: 20px;margin-top: 20px; padding-right: 20px;">
				<img src="{{ url('assets/img/karir5.png') }}" style="position:static; width:63px; height:67,5px; left:10px; top:7px;">
				<div class="card_heading"> System Analys 
				</div>
</br>
				<button type="button" class="btn_download">Download Kurikulum</button>
</br>
				<button type="button" class="btn btn-success" style="background-color:#F2F2F2; color:#747474; border:#F2F2F2;">Lihat detail</button>
			</div>
		</div>
		<!-- management -->
		<div class="col-lg-3 col-md-6 col-sm-12">
			<div class="card" style="padding-left: 20px;margin-top: 20px; padding-right: 20px;">
				<img src="{{ url('assets/img/karir6.png') }}" style="position:static; width:63px; height:67,5px; left:10px; top:7px;">
				<div class="card_heading"> Management
				</div>
</br>
				<button type="button" class="btn_download">Download Kurikulum</button>
</br>
				<button type="button" class="btn btn-success" style="background-color:#F2F2F2; color:#747474; border:#F2F2F2;">Lihat detail</button>
			</div>
		</div>
		<!-- media& ads -->
		<div class="col-lg-3 col-md-6 col-sm-12">
			<div class="card" style="padding-left: 20px;margin-top: 20px; padding-right: 20px;">
				<img src="{{ url('assets/img/karir7.png') }}" style="position:static; width:63px; height:67,5px; left:10px; top:7px;">
				<div class="card_heading"> Media & Ads
				</div>
</br>
				<button type="button" class="btn_download">Download Kurikulum</button>
</br>
				<button type="button" class="btn btn-success" style="background-color:#F2F2F2; color:#747474; border:#F2F2F2;">Lihat detail</button>
			</div>
		</div>
		<!-- icon & ilustration -->
		<div class="col-lg-3 col-md-6 col-sm-12">
			<div class="card"style="padding-left: 20px; margin-top:20px; padding-right:20px">
				<img src="{{ url('assets/img/karir8.png') }}" style="position:static; width:83px; height:87,5px; left:10px; top:7px;">
				<div class="card_heading"> Icon  Illustration
				</div>
</br>
					<button type="button" class="btn_download">Download Kurikulum</button>
</br>
					<button type="button" class="btn btn-success" style="background-color:#F2F2F2; color:#747474; border:#F2F2F2;">Lihat detail</button>
			</div>
		</div>
	</div>
	<!--txt atas intern & cpd -->
	<div class="row p-5" style="margin-left:25px; margin-bottom:-20px;">
			<div class="col-lg-6 col-md-12 col-sm-12">
				<b><h3>Platform Belajar & Kolaborasi</br>berbasis(real project)</h3></b>
				<span style="opacity: 75%;"><font-color="black" font-size="10px">Yuk Upgrade kemampuanmu bersama team dan mentor di inagata hub yang berpengalaman di bidangnya dengan 2 program pilihan!</font></span>
			</div>
	</div>
	<!-- intern -->
		<div class="row p-5" style="margin-left:25px;">
			<div class="col-lg-6 col-md-12 col-sm-12">
			<img class="w-100 shadow-1-strong rounded" src="{{ url('assets/img/image_internship.png') }}" alt="" title="">
			</div>
			<div class="col-lg-6 col-md-12 col-sm-12" style="">	
				<div class="txt">
					<p class="text-danger">Beginner Stage</p>
					<span><h4>Internship</h4>
					<span style="opacity: 50%;"><font-color="black" font-size="20px;">Pengembangan kompetensi diri dibidang teknologi & digital kreatif dengan bimbingan para mentor  berpengalaman dibidangnya.</font></span>
	</br>
	</br>
					<img style="float:left; height:80px; width:80px; top:-21px; right 0:px; blend:Pass through; border: 0px solid red;" src="{{ url('assets/img/Group 28.png') }}"/>
					</h6><i>* Mahasiswa Universitas minimal 3 bulan </br>  Siswa SMK minimal 4 bulan</h6>
				</div>	
			</div>
		</div>
		<!-- cpd -->
		<div class="row p-5" style="margin-right:25px;">
			<div class="col-lg-6 col-md-12 col-sm-12" style="">	
				<div class="txt">
					<p class="text-danger">Beginner Stage</p>
					<span><h4>Internship</h4>
					<span style="opacity: 50%; font-color:black; font-size:20px;">Pengembangan kompetensi diri dibidang teknologi & digital kreatif dengan bimbingan para mentor  berpengalaman dibidangnya.</font></span>
	</br>
	</br>
				</div>
			</div>	
					<img style="float:left; height:80px; width:80px; top:-21px; right 0:px; blend:Pass through; border: 0px solid red;" src="{{ url('assets/img/Group 28.png') }}"/>
					</h6><i>* Mahasiswa Universitas minimal 3 bulan </br>  Siswa SMK minimal 4 bulan</h6>
					<div class="col-lg-6 col-md-12 col-sm-12">
					<img class="w-100 shadow-1-strong rounded" src="{{ url('assets/img/image_cpd.png') }}" alt="" title="">
			</div>
		</div>
		<!-- txt atas seleksi -->
		<div class="row p-5" style="margin-left:25px; margin-bottom:-20px;">
			<div class="col-lg-6 col-md-12 col-sm-12">
				<b><h3>Proses Seleksi & Perekrutan</h3></b>
				<span style="opacity: 75%;"><font-color="black" font-size="10px">Menarapkan <b>Quality Control</b> yang ketat sesuai standar yang telah kami tentukan</font></span>
			</div>
		</div>
		<!-- seleksi -->
<main class="container">
	 <div class="row p-5">
		<!-- seleksi 1 -->
            <div class="col-lg-3 col-md-12 col-sm-12"> 
				<div class="card" style="padding-left: 20px;margin-top: 20px; padding-right: 20px;">
                  	<img src="{{ url('assets/img/01.png') }}" style="position:static; width:50px; height:45px; left:0px; top:0px;"/><br>
					<br>
					<img src="{{ url('assets/img/1a.png') }}" style="position:static; width:60px; height:55px; left:0px; top:0px;"/>
					<br>
					<p><b>Mengisi form registrasi</b>
					<br> Calon peserta magang wajib mengisi formulir pendaftaran yang sudah tercantum di Website Inagata</p>
                </div>
			</div>
		<!-- seleski 2 -->
            <div class="col-lg-3 col-md-12 col-sm-12">
			    <div class="card" style="padding-left: 20px;margin-top: 20px; padding-right: 20px;">
					<img src="{{ url('assets/img/02.png') }}" style="position:static; width:50px; height:45px; left:0px; top:0px;"/><br>
					<br>
					<img src="{{ url('assets/img/2a.png') }}" style="position:static; width:60px; height:55px; left:0px; top:0px;"/>
					<br>
					<p><b>Seleksi Administrasi & Tes Kualifikasi Skill</b>
					<br> Peserta akan dikonfirmasi melalui email yang terdaftar. Agar selanjutnya bisa mengikuti Tes Administrasi dan mengerjakan soal Tes Teknik yang sudah disediakan oleh panitia penerimaan magang.</p>
     	        </div>
            </div>
	 	 <!-- seleksi 3 -->
     	<div class="col-lg-3 col-md-12 col-sm-12">
			<div class="card" style="padding-left: 20px;margin-top: 20px; padding-right: 20px;">
					<img src="{{ url('assets/img/03.png') }}" style="position:static; width:50px; height:45px; left:0px; top:0px;"/><br>
					<br>
					<img src="{{ url('assets/img/3a.png') }}" style="position:static; width:60px; height:55px; left:0px; top:0px;"/>
					<br>
				<p><b>Wawancara bersama HRD & calon mentor</b>
				<br> Peserta yang lolos tahap seleksi administrasi dan skill, kemudian melakukan sesi interview. Jadwal Interview akan kami informasikan pada masing-masing Email yang telah terdaftar. </p>
            </div>
   		</div>
   		<!-- seleksi 4 -->
  		<div class="col-lg-3 col-md-12 col-sm-12">
			<div class="card" style="padding-left: 20px;margin-top: 20px; padding-right: 20px;">
					<img src="{{ url('assets/img/04.png') }}" style="position:static; width:50px; height:45px; left:0px; top:0px;"/><br>
					<br>
					<img src="{{ url('assets/img/4a.png') }}" style="position:static; width:60px; height:55px; left:0px; top:0px;"/>
					<br>
				<p><b>Pengumuman</b>
				<br> Kami akan menginformasikan hasil akhir kepada para peserta yang telah mengikuti  semua tahapan melalui masing-masing email dan nomor HP yang terdaftar. Peserta yang lolos, kemudian dinyatakan berhak dan resmi untuk mengikuti program Inagata Hub</p>
  			</div>
         </div>
	</div>
</main>

</body>
</html>
@endsection