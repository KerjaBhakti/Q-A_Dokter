<?php
require('../koneksi.php');

$sql = 'SELECT * FROM produk';
$query = mysqli_query($koneksi, $sql);
$products = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" crossorigin="anonymous">
    <title>Tampilan_Dokter</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Konsultasi dengan Dokter dan membuat janji dengan dokter </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
               <!-- <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>-->
                <!--<li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>-->
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="../index.php">keluar</a></button>
            </form>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col">
                <hr>
                <h3 class="text-center">Jadwal Dokter</h1>
                    <hr>
            </div>
        </div>
        <div class="row">
            <?php foreach ($products as $product) : ?>
                <div class="col-md-3">
                    <div class="card" style="width: auto;">
                        <img src="../assets/images/<?php echo $product['foto_dokter'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product['nama_dokter'] ?></h5>
                            <p class="card-text"><?php echo $product['deskripsi'] ?></p>
                            <p class="card-text"><?php echo($product['jam_operasional']);?></p>
                            <a class="btn btn-primary" href="chat.php" role="button">Chat Dokter</a>
                            <a class="btn btn-primary" href="janji.php" role="button">Buat Janji</a>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.js" crossorigin="anonymous"></script>
</body>

</html>
