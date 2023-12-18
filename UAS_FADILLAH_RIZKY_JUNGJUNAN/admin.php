    <?php
    include 'konek.php';
    if (!isset($_SESSION['admin'])) {
        header('location:index.php');
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <style>
            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                margin: 0;
                padding: 0;
                display: flex;
                flex-direction: column;
                min-height: 100vh;
                background-color: #f8f9fa;
            }

            header {
                background-color: #white;
                color: #ffffff;
                padding: 10px 0;
            }

            .container {
                text-align: center;
                margin: 20px 0;
            }

            nav ul {
                list-style: none;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
            }

            nav ul li {
                margin-right: 20px;
            }

            nav a {
                text-decoration: none;
                color: #343a40;
                font-size: 18px;
                position: relative;
            }

            nav a:hover::after {
                content: "";
                position: absolute;
                width: 100%;
                height: 2px;
                background-color: #343a40;
                bottom: -5px;
                left: 0;
            }

            .active {
                font-weight: bold;
            }

            .container section {
                padding: 20px;
            }

            footer {
                background-color: #343a40;
                color: #ffffff;
                padding: 10px 0;
                text-align: center;
            }
        </style>
        <title>
            <?php
            if (!isset($_GET['page'])) {
                echo "Home";
            } elseif ($_GET['page'] == 'home') {
                echo "Home";
            } elseif ($_GET['page'] == 'formulir') {
                echo "Formulir";
            } elseif ($_GET['page'] == 'tabel') {
                echo "Tabel";
            }
            ?>
        </title>
    </head>

    <body>
        <header>
            <div class="container">
                <nav>
                    <ul>
                        <li>
                            <a href="?page=home" class="<?php
                                if (!isset($_GET['page'])) {
                                    echo "active";
                                } elseif ($_GET['page'] == 'home') {
                                    echo "active";
                                }
                                ?>">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="?page=formulir" class="<?php
                                if (isset($_GET['page'])) {
                                    if ($_GET['page'] == 'formulir') {
                                        echo "active";
                                    }
                                }
                                ?>">
                                Formulir
                            </a>
                        </li>
                        <li>
                            <a href="?page=tabel" class="<?php
                                if (isset($_GET['page'])) {
                                    if ($_GET['page'] == 'tabel') {
                                        echo "active";
                                    }
                                }
                                ?>">
                                Tabel
                            </a>
                        </li>
                        <?php
                        if (isset($_SESSION['admin'])) {
                        ?>
                            <li>
                                <a href="logout.php">Logout</a>
                            </li>
                        <?php
                        } else {
                        ?>
                            <li>
                                <a href="login.php">Login</a>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                </nav>
            </div>
        </header>
        <section class="container">
            <?php
            $page = @$_GET['page'];
            if (file_exists($page . '.php')) {
                include $page . '.php';
            } else {
                include 'home.php';
            }
            ?>
        </section>
    </body>

    </html>
