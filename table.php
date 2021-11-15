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
        require 'db.php';
        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) 
        {
           // output data of each row
           while($row = $result->fetch_assoc()) 
           {
                echo "<tr><td>" . $row['name'] . "</td><td>" . $row['email'] . "</td><td>" . $row['gender'] . "</td><td>" . "<img src='" . $row['path_to_img'] . "' width='120' height='120'></td></tr><br>";
           }
        }        
        ?>
        </tbody>
    </table>
    <hr>
    <a class="btn" href="adduser.php">return back</a>
    </div>
</body>