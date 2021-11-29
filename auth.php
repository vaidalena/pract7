<?php
    session_start();
    const ADMIN_EMAIL = 'admin@admin.com';
    const ADMIN_PASSWORD = '111111';
       
    if(!empty($_POST["email"]) && !empty($_POST["password"]))
    { 
        if((strcasecmp($_POST["email"], ADMIN_EMAIL)==0) && (strcasecmp($_POST["password"], ADMIN_PASSWORD)==0))
        {
            $_SESSION['auth']=true;
            header('Location: views/addUser.php');
        }
        else
        {
            $_SESSION['auth']=false;
            header('Location: views/home.php');
        }
    }
?>