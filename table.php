<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <style>
       body{
           padding-top: 1rem;
       }
       .container {
           width: 400px;
       }
   </style>
</head>
<body>
    <table class="table" width=100%>

    <div class="container">         
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Photo</th>
        </tr>
        </thead>
        <tbody>
    <?php
        if (file_exists('database/users.csv')){ $run=true; }
        else { $run=false; }
        if($run==true)
        {
            $file=file_get_contents('database/users.csv');
            $users;
            if(!empty($file))
            {
                $arr=explode("\n", $file);
            
                foreach($arr as $el)
                {
                    if(!empty($el))
                    {
                        $users=explode(",", $el); 
                        echo "<tr><td>" . $users[0] . "</td><td>" . $users[1] . "</td><td>" . $users[2] . "</td><td>" . "<img src='" . $users[3] . "' width='120' height='120'></td></tr><br>";
                    }
                } 
                unset($el);
            }
        }
        else echo "В файле нету данных!";
        ?>
        </tbody>
    </table>
    <hr>
    <a class="btn" href="adduser.php">return back</a>
    </div>
</body>