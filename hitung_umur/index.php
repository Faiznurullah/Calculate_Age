<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow&family=Bebas+Neue&family=Crete+Round&family=New+Tegomin&family=Play:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <title>Hitung Umur</title>
    <link rel="shortcut icon" href="./img/favicon.png">
  </head>
  <style>
  .font {
    font-family: 'Archivo Narrow', sans-serif;

font-family: 'Bebas Neue', cursive;

font-family: 'Crete Round', serif;

font-family: 'New Tegomin', serif;

font-family: 'Play', sans-serif;
  }
  </style>
  <body>

    <!--- Ini Navbar -->

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-danger ">
  <div class="container-fluid">
    <a class="navbar-brand" href=""><h3><b style="font-family: sans-serif;">Calculate Age</b></h3></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto" style="font-family: fantasy;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#home"><b>Home</b></a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#hitung"><b>Hitung</b></a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#contact"><b>Contact</b></a>
        </li>

      </ul>
    </div>
  </div>
 </nav>
 <!--- Ini Akhir Navbar -->


 <!-- Ini Konten Awal -->
 <section id="home" style="padding-top: 5rem;">

   <div class="row mt-5">

   <div class="col-md-1"></div>

     <div class="col-md-4 mt-1" style="padding-top: 5rem;">
       <div class="shadow p-3 mb-5 bg-body rounded font">
   <h1 class="text-center fg">Cale</h1>
   <p><h5 class="text-center">Cale Adalah Aplikasi Penghitung Umur Menggunakan Tanggal Lahir, Ayo Hitung Umur Kamu Sekarang Juga.</h5></p>
   <div class="d-grid gap-2 col-6 mx-auto">
   <a class="btn btn-danger text-white text-center" aria-current="page"  href="#hitung" type="submit"><b>Ayo Hitung</b></a>
 </div>
 </div>
     </div>

       <div class="col-md-1"></div>


   <div class="col-md-5 mt-1" style="padding-top: 5rem;">
         <img src="./img/pict.svg" class="d-block w-100" alt="Pict" width="450px" height="400px">
 </div>


  </div>

 </section>
 <!-- Ini Akhir Konten Awal -->





 <!-- Ini Konten Hitung -->
 <section id="hitung" style="padding-top: 5rem;">
   <h2 class="text-center mt-5 fg">Ayo Hitung</h2>

   <div class="row mt-5">

 <div class="col-md-7">
  <div class="d-grid gap-2 col-10 mx-auto">
    <div class="shadow-lg p-3 mb-5 bg-body rounded">
   <div class="card">
     <div class="card-body">
   <form method="post">
       <div class="form-floating">
      <center><input class="form-control" type="date" name="date"  required></center>
   <div class="d-grid gap-2 col-7 mx-auto">
   <button class="btn btn-danger text-white text-center mt-4" type="submit" name="kirim"><b>Kirim</b></button>
 </div>
 </div>
 </form>


     </div>
   </div>

 </div>

 </div>
 </div>

<?php

if(isset($_POST['kirim'])){
 date_default_timezone_set('Asia/Jakarta');
  $date = $_POST['date'];
  $tanggal = date_create($date);
  $now = date_create();
  $diff  = date_diff( $tanggal, $now);
  $umur_detail = $diff->y." Tahun, ".$diff->m." Bulan, ".$diff->d." Hari";
  $umur_jam = $diff->days * 24;




?>


 <div class="col-md-4">

<div class="d-grid gap-2 col-10 mx-auto">
    <div class="shadow-lg p-3 mb-2 bg-body rounded">
   <div class="card">
     <div class="card-body pt-1">
    <h2 class="text-center mt-2 font">Hasil Hitungan</h2>

 <p class="text-center"><b>Tanggal Lahir Kamu: <?php   echo date('d F Y', strtotime($date));; ?> </b></p>
 <p class="text-center"><b>Sudah Hidup (Hari): <?php echo   number_format($diff->days)." Hari" ?></b></p>
 <p class="text-center"><b>Sudah Hidup (Jam): <?php echo number_format($umur_jam)." Jam" ?></b></p>
 <p class="text-center"><b>Detail : <?php echo  $umur_detail; ?></b></p>

 <div class="d-grid gap-2 col-8 mx-auto">
 <a class="btn btn-danger text-white text-center mt-4" href="" type="button"><b>Refresh</b></a>
</div>


     </div>
   </div>
 </div>
 </div>

 </div>

<?php

}else{


}
 ?>


 <div class="col-md-1"></div>

 </div>



 </section>
 <!-- Ini Akhir Konten Hitung -->



 <!-- Ini Contact -->
 <section id="contact" class="jumbotron jumbotron-fluid" style="background-color: #ffff; padding-top: 5rem;">
 <h2 class="text-center mt-5 fg">Contact</h2>

   <div class="row mt-5">


     <div class="col-md-2"></div>

     <div class="col-md-8">
      <div class="d-grid gap-2 col-10 mx-auto">
 <div class="shadow p-3 mb-5 bg-body rounded">
       <div class="card">
         <div class="card-body">

 <div class="row">
             <div class="col-md-6">
    <input class="form-control mt-5" type="text" placeholder="Full Name" aria-label="default input example" required>
             </div>

             <div class="col-md-6">
   <input type="email" class="form-control mt-5" id="exampleFormControlInput1" placeholder="Email Address" required>
             </div>

 </div>

  <textarea class="form-control mt-5" id="exampleFormControlTextarea1"  placeholder="Your Message" rows="3" required></textarea><br>
  <div class="d-grid gap-2 col-7 mx-auto">
  <button class="btn btn-danger text-white text-center mt-4" type="submit"><b>Kirim</b></button>
 </div>


 </div>
 </div>
 </div>
 </div>
 </div>



 </div>

 </section>
 <!-- Ini Akhir Contact -->




 <!-- Ini Footer-->
 <footer class="footer mt-auto py-3 bg-danger">
   <div class="container">
     <p class="text-center text-white fg mt-3">Made With <i class="bi bi-heart-fill mt-5" style="color: #8c0000;"></i>&nbsp;By&nbsp; <b><a href="https://github.com/Faiznurullah" class="link-sos pl-3" style="text-decoration: none; font-family: sans-serif; color: white;"><b>Faiz Nurullah</b></a></b></p>
   </div>
 </footer>
 <!-- Ini Akhir Footer-->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


  </body>
</html>
