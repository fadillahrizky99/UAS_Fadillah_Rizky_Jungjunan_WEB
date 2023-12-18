<?php
include 'konek.php';
if (isset($_SESSION['admin'])) {
  header('location:admin.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            overflow: hidden;
            background-size: cover;
            background-position: center;
            transition: background-image 1s ease-in-out;
        }

        .container {
            text-align: center;
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            animation: fadeIn 0.8s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .login-btn {
            padding: 12px 24px;
            font-size: 18px;
            text-decoration: none;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            animation: scaleIn 0.5s ease-in-out;
        }

        .login-btn:hover {
            background-color: #0056b3;
        }

        @keyframes scaleIn {
            from {
                transform: scale(0.8);
            }
            to {
                transform: scale(1);
            }
        }

        h1 {
            color: #343a40;
            animation: slideInDown 0.8s ease-in-out;
        }

        @keyframes slideInDown {
            from {
                transform: translateY(-50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        p {
            color: #6c757d;
            font-size: 16px;
            margin-top: 20px;
            margin-bottom: 30px;
            animation: fadeInUp 0.8s ease-in-out;
        }

        @keyframes fadeInUp {
            from {
                transform: translateY(50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
    <title>Login</title>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Random image from Unsplash
            fetch('https://source.unsplash.com/random')
                .then(response => {
                    // background image
                    document.body.style.backgroundImage = `url(${response.url})`;
                });
        });
    </script>
</head>
<body>
    <div class="container">
        <div class="login-container">
            <h1>Selamat Datang di Website Fadillah Rizky Jungjunan</h1>
            <p>Explore Fitur CRM Pelanggan Sederhana. Login untuk memulai!</p>
            <?php
            if (isset($_SESSION['admin'])) {
            ?>
                <p>You are already logged in, <?php echo $_SESSION['admin']; ?>!</p>
                <a href="logout.php" class="login-btn">Logout</a>
            <?php
            } else {
            ?>
                <a href="login.php" class="login-btn">Login</a>
            <?php
            }
            ?>
        </div>
    </div>
</body>
</html>
