 <?php
    // memanggil file koneksi.php untuk membuat koneksi
    require('../koneksi.php');

    // mengecek apakah di url ada nilai GET id
    if (isset($_GET['id'])) {
        // ambil nilai id dari url dan disimpan dalam variabel $id
        $id = ($_GET["id"]);

        // menampilkan data dari database yang mempunyai id=$id
        $query = "SELECT * FROM produk WHERE id='$id'";
        $result = mysqli_query($koneksi, $query);
        // jika data gagal diambil maka akan tampil error berikut
        if (!$result) {
            die("Query Error: " . mysqli_errno($koneksi) .
                " - " . mysqli_error($koneksi));
        }
        // mengambil data dari database
        $data = mysqli_fetch_assoc($result);
        // apabila data tidak ada pada database maka akan dijalankan perintah ini
        if (!count($data)) {
            echo "<script>alert('Data tidak ditemukan pada database');window.location='index.php';</script>";
        }
    } else {
        // apabila tidak ada data GET id pada akan di redirect ke index.php
        echo "<script>alert('Masukkan data id.');window.location='index.php';</script>";
    }
    ?>
  <?php
  // memanggil file koneksi.php untuk membuat koneksi
include '../koneksi.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM produk WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result){
      die ("Query Error: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
      // apabila data tidak ada pada database maka akan dijalankan perintah ini
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='index.php';</script>";
       }
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    echo "<script>alert('Masukkan data id.');window.location='index.php';</script>";
  }         
  ?>
<!DOCTYPE html>
<html>
  <head>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: blue;
      }
    button {
          background-color: blue;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: blue;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    </style>
  </head>
  <body>
      <center>
        <h1>Edit Jadwal <?php echo $data['nama_dokter']; ?></h1>
      <center>
      <form method="POST" action="proses_edit.php" enctype="multipart/form-data" >
      <section class="base">
        <!-- menampung nilai id produk yang akan di edit -->
        <input name="id" value="<?php echo $data['id']; ?>"  hidden />
        <div>
          <label>Nama Dokter</label>
         <input type="text" name="nama_dokter" value="<?php echo $data['nama_dokter']; ?>" />
        </div>
        <div>
          <label>Deskripsi Dokter</label>
         <input type="text" name="deskripsi" value="<?php echo $data['deskripsi']; ?>" />
        </div>
        <div>
          <label>Jam Operasional</label>
         <input type="text" name="jam_operasional" required="" value="<?php echo $data['jam_operasional']; ?>"/>
        </div>
        <div>
          <label>Foto Dokter</label>
          <img src="../assets/images/<?php echo $data['foto_dokter']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
          <input type="file" name="foto_dokter" />
          <i style="float: left;font-size: 11px;color: red">Abaikan jika tidak merubah Data</i>
        </div>
        <div>
         <button type="submit">Simpan Perubahan</button>
        <a href="index.php">back</a>
        </div>
        </section>
      </form>
  </body>
</html>
