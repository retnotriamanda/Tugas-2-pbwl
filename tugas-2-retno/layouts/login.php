<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo ASSET ?>css/auth.css">
    <title>Tugas 2 - Retno</title>
</head>
<?php
    require_once "config.php";

    $auth = new App\Auth();

    if (isset($_POST['submit'])) {
        $auth->login();
        header("location:index.php");
    }
?>
<body>
    <div class="container">
        <div class="box-login">
            <img src="<?php echo ASSET ?>/img/logo-uinsu.png" class="logo" alt="" srcset="">
            <div style="padding-top: 20px;">Login</div>
            <form method="POST">
                <input type="text" placeholder="Email" name="email">
                <input type="password" placeholder="Password" name="password">
                <button name="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>