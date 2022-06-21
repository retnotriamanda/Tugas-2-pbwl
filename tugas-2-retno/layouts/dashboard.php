<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo ASSET; ?>css/style.css">
    <link rel="stylesheet" href="<?php echo ASSET; ?>plugin/bootstrap/css/bootstrap.min.css">
    <title>Tugas 2 - Retno</title>
</head>

<?php
     require_once "config.php";

     if (isset($_POST['logout'])) {
         $auth = new App\Auth();
         $auth->logout();
        header("location:index.php");

     }
?>

<body>
    <nav class="navbar navbar-expand-lg custom-navbar-bg">
        <div class="container">
            <a class="navbar-brand" href="#">Tugas 2 - Retno</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php?page=dashboard">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=index_golongan">Golongan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: white" href="index.php?page=index_pelanggan">Pelanggan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=index_pengguna">Pengguna</a>
                </li>
                <li class="nav-item">
                    <form method="POST">
                        <button name="logout" class="nav-link" style="border: 0px; background: transparent">Logout</button>
                    </form>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <section class="main">
        <?php
            if (isset($_GET['page'])) 
                include 'pages/'. $_GET['page'] . ".php";
            else
                include "pages/dashboard.php";            
        ?>
    </section>

    <footer>
        <div class="container">
            &copy; Copyright Retno | Tugas 2 PMD
        </div>
    </footer>

    <script src="<?php echo ASSET; ?>plugin/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
