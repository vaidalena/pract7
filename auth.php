<?php
    include 'set_session.php';
    const ADMIN_EMAIL = 'admin@admin.com';
    const ADMIN_PASSWORD = '111111';
    
    if (isset($_POST["knopa"]))
    {    
        if(!empty($_POST["email"]) && !empty($_POST["password"]))
        { 
            if((strcasecmp($_POST["email"], ADMIN_EMAIL)==0) && (strcasecmp($_POST["password"], ADMIN_PASSWORD)==0))
            {
                $_SESSION['auth']=true;
            }
            else
            {
                $_SESSION['auth']=false;
            }
            header('Location: adduser.php');
        }
    }
?>