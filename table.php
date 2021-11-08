<?php
    $file=file_get_contents('database/users.csv');
    $users;     

    $arr=explode("\n", $file);
    foreach($arr as $el)
    {
        $users=explode(",", $el);
        echo "Name: " . $users[0] . " - Email: " . $users[1] . " - Gender: " . $users[2] . "<br>";
    }
?>
