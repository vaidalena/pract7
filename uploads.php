<?php
    $target_dir = "public/images/";
    $isUploaded = false;
    $filePath="";
    
    if(isset($_FILES["photo"]))
    {
        $target_file = $target_dir . basename($_FILES["photo"]["name"]);
        
        if(!$_FILES["photo"]["name"])
        {
            $filePath="public/images/start.jpg";
        }
        else if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) 
        {
           $filePath = $target_dir . basename($_FILES["photo"]["name"]);
           $isUploaded = true;    
        }
    }
    return $filePath;
?>