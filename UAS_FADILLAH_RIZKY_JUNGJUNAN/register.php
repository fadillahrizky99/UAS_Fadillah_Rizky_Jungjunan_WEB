<?php
include "konek.php";
if (isset($_POST['signup'])) {
    $nama= $_POST['nama'];
    $username= $_POST['username'];
    $password= sha1($_POST['password']);

    $admin = mysqli_query($konek,"SELECT * FROM admin");
    $data = mysqli_fetch_array($admin);


    if ($nama == "" || $username == "" || $password == "") {
        echo"<script>alert('jangan konsongkan form input silahkan login ulang');</script>";
    }else{
        if ($username != $data['username']) {
        mysqli_query($konek, "INSERT INTO admin(nama, username, password) VALUES ('$nama','$username','$password')");
        echo"<script>alert('Registrasi Akun Berhasil'); document.location = 'login.php';</script>";
        
        }else {
            echo"<script>alert('username sudah digunakan silahkan registrasi ulang'); document.location = 'login.php';</script>";
        }
    }


    
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/register.css">
  </head>
  <body>
        <section class="wrapper">
            <div class="form register">
                <header>Register</header>
                    <form method="post" enctype="multipart/form-data">
                    <input type="text" name="nama" placeholder="Full name" required />
                    <input type="text" name="username" placeholder="Username" required />
                    <input type="password" name="password" placeholder="Password" required />
                    <input type="submit" value="Signup" name="signup" />
                    <a href="login.php" style="border: 1px solid #4070f4; font-size: 14px;">sudah punya akun?</a>
                    </form>
                </div>
            <script src="script/register.js"></script>
        </div>
    </section>
  </body>
</html>