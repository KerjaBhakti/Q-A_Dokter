<?php

require("koneksi.php");

if (isset($_POST['register'])) {

    // filter data yang diinputkan
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    // enkripsi password
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


    // menyiapkan query
    $sql = "INSERT INTO users (name, username, email, password) 
            VALUES ('$name', '$username', '$email', '$password')";
    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        // jika berhasil tampilkan pesan berhasil insert
        header("Location: index.php");
    } else {
        // jika gagal tampilkan pesan kesalahan
        die("Gagal menyimpan perubahan...");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Daftar</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>

<body class="bg-light">

    <div class="container mt-5">
    <p>&larr; <a href="index.php">Keluar</a>
        <div class="row">
            <div class="col-md-6">

            

        
                

                <form action="" method="POST">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <div id="box-daftar">
                    <center>
                <h1>Daftar</h1>
                </center>
                <br>
                    <div class="form-group">
                        <label for="name">Nama Lengkap</label>
                        <input class="form-control" type="text" name="name" placeholder="Nama kamu" />
                    </div>

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input class="form-control" type="text" name="username" placeholder="Username" />
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" type="email" name="email" placeholder="Alamat Email" />
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control" type="password" name="password" placeholder="Password" />
                    </div>
                    <br>
                    <center>

                    <input type="submit" class="btn btn-success btn-block" name="register" value="Selesai" />
                    </center>

                </form>
        </div>
            </div>

        </div>
    </div>

</body>

<style>
    * {
        padding: 0;
        margin: 0;
        font-family: 'Times New Roman', Times, serif;
    }

    body {
        background-color: whitesmoke;
        
    }

    .row {
        display: flex;
        height: 100px;
        justify-content: center;
        align-items: center;
    }

    #box-daftar {
        justify-content: center;
        width: 300px;
        min-height: 200px;
        border: 5px solid;
        background-color: lightblue;
        padding: 50px;
        box-sizing: border-box;
    }
    
    
</style>

</html>