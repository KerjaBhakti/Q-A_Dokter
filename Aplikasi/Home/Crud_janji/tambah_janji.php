<?php
require('../koneksi.php');

?>
<!DOCTYPE html>
<html>

<head>
    <title>Q&A Dokter</title>
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
      outline-color: salmon;
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
        <h1>Tambah Data</h1>
      <center>
      <form method="POST" action="proses_tambah.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>Nama Dokter</label>
         <input type="text" name="nama_produk" />
        </div>
        <div>
          <label>Jam Operasional</label>
         <input type="text" name="harga_jual" required="" />
        </div>
        <div>
          <label>Foto Dokter</label>
         <input type="file" name="gambar_produk" required="" />
        </div>
        <div>
         <button type="submit">Simpan Perubahan</button>
        </div>
        </section>
      </form>
</body>

</html>
