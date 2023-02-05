<?php
require('../koneksi.php');
?><!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Janji Dokter</title>
  </head>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/63c256e8c2f1ac1e202d62a7/1gmni70p3';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

  <body>
    <h1>Silakan Anda Bisa Membuat Janji Dengan Dokter Setelah Melakukan Kesepakatan Dengan Dokter</h1>
    <Center>
    <img src="konsultasi.jpeg" alt="" srcset="">
    </Center>
    <p> 1. Anda bisa mengisi data diri anda untuk melakukan pemeriksaan setelah melakukan kesepakatan dengan dokter </p>
    <p> 2. Anda bisa membuat janji dengan dokter pada fitur live chat disebelah kanan </p>

    <br>
    <br>
    <br>
<left>
    <form method="POST" action="crud_janji/proses_janji.php" enctype="multipart/form-data" >
      <section class="base">
        <div id="box-login">
        <div class="form-group">
          <label>Nama Depan</label>
         <input type="varchar" name="nama_depan" />
        </div>
        <div>
        <div class="form-group">
          <label>Nama Belakang</label>
         <input type="varchar" name="nama_belakang" />
        </div>
        <div class="form-group">
          <label>Umur</label>
         <input type="int" name="umur" />
        </div>
        <div class="form-group">
          <label>Alamat</label>
         <input type="text" name="alamat" />
        </div>
        <div class="form-group">
          <label>hari</label>
         <input type="varchar" name="hari" required="" />
        </div>
      <div class="form-group">
          <label>Dokter</label>
         <input type="varchar" name="dokter" required="" />
        </div>
        <div class="form-group">
          <label>Keluhan</label>
         <input type="varchar" name="keluhan" required="" />
        </div>
        <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Ceklis jika data anda sudah lengkap
      </label>
    </div>
    
        <div>
         <button type="submit">Selesai</button>
        </div>
        </div>
        </section>
      </form>
      </left>


  </body>
 <style>
  #box-login {
        justify-content: center;
        width: 500px;
        min-height: 200px;
        border: 5px solid;
        background-color: lightblue;
        padding: 30px;
        box-sizing: border-box;
    }
    label {
    float: left;
    width: 200px;
    padding-right: 24px;
}
 </style>

</html>
