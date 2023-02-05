<?php
require("koneksi.php");

if (isset($_POST['login'])) {

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM users WHERE username='$username' OR email='$username'";
    $user = mysqli_query($koneksi, $sql);
    $row = mysqli_fetch_assoc($user);

    // jika user terdaftar
    if ($row) {
        // verifikasi password
        if (password_verify($password, $row["password"])) {
            // buat Session
            session_start();
            $_SESSION["user"] = $row["username"];
            $_SESSION["email"] = $row["email"];
        
            // login sukses, alihkan ke halaman timeline
            header("Location: user_2.php");
        }
    }

    else{
        $list_user = [
            [
                'username' => 'john',
                'password' => '123456'
            ],
            [
                'username' => 'ya33',
                'password' => 'ya33'
            ]
        ];
        
        
        //dapatkan data user dari form
        $user = [
            'username' => $_POST['username'],
            'password' => $_POST['password'],
        ];
        
    
        // login sukses, alihkan ke halaman timeline
        header("Location: indexv2.php");
    
}
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Rumah Sakit RAIS</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>

<body class="bg-light">


    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">

               

                
                    
<center>
                <form action="" method="POST">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                    <div class="bg-login">
                        <div id="box-login">
                            <h1>Login</h1>
                            <br>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input class="form-control" type="text" name="username" placeholder="Username atau email" />
                            </div>


                            <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control" type="password" name="password" placeholder="Password" />
                            </div>
                            <br>

                            <input type="submit" class="btn btn-success btn-block" name="login" value="Masuk" />
                            <p>Jika Belum Punya Akun Daftar Terlebih Dahulu</p>
                    <a href="register.php">Daftar di sini</a>
                </form>
                </center>
            </div>
        </div>
    </div>

    

    <div class="col-md-6">
        <!-- isi dengan sesuatu di sini -->
    </div>

    </div>
    </div>

</body>

</html>
<style>
    * {
        padding: 0;
        margin: 0;
        font-family: 'Times New Roman', Times, serif;
    }

    body {
        background-color: whitesmoke;
        
    }

    .bg-login {
        display: flex;
        height: 100px;
        justify-content: center;
        align-items: center;
    }

    #box-login {
        justify-content: center;
        width: 300px;
        min-height: 200px;
        border: 5px solid;
        background-color: lightblue;
        padding: 15px;
        box-sizing: border-box;
    }
    
    
</style>
