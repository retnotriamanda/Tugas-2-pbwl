<?php
    require_once "config.php";

    if (isset($_SESSION['email'])) 
        require_once "layouts/dashboard.php";
    else
        require_once "layouts/login.php";
        
