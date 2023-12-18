<?php
include "konek.php";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = sha1($_POST['password']);

    if (empty($username) || empty($password)) {
        echo "<script>alert('Jangan kosongkan form input, silahkan login ulang'); document.location = 'login.php';</script>";
    } elseif (empty($username)) {
        echo "<script>alert('Jangan kosongkan username, silahkan login ulang'); document.location = 'login.php';</script>";
    } elseif (empty($password)) {
        echo "<script>alert('Jangan kosongkan password, silahkan login ulang'); document.location = 'login.php';</script>";
    } else {
        $login = mysqli_query($konek, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
        if (mysqli_num_rows($login) > 0) {
            session_start();
            $_SESSION['admin'] = mysqli_fetch_array($login);
            echo "<script>alert('Login berhasil'); document.location = 'index.php';</script>";
        } else {
            echo "<script>alert('Username atau password yang Anda masukkan salah, silahkan coba lagi'); document.location = 'login.php';</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <section class="wrapper">
        <div class="form signup">
            <header>Login</header>
            <form method="post" enctype="multipart/form-data">
                <input type="text" name="username" placeholder="Username" required />
                <input type="password" name="password" placeholder="Password" required />
                <input type="submit" value="Register" name="login" />
                <a href="register.php" style="border: 1px solid #4070f4; font-size: 14px;">Belum Punya Akun?</a>
            </form>
        </div>
    </section>
</body>

</html>
