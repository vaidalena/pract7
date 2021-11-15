<?php
   // code with validation will be here and saving user will be here
   $name = $email = $gender = "";
   $err= "Invalid Data";
   if (isset($_POST["knopa"]))
   {
      if(!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["gender"]))
      { 
         $name=$_POST["name"];
         $email=$_POST["email"];
         $gender=$_POST["gender"];
         require 'db.php';
         $filePath = include 'uploads.php';
         
         // id можно не вказувати, тому що auto increment
         // пароль будемо встановлювати всім однаковий
         $sql = "INSERT INTO users (email, name, gender, password, path_to_img)
         VALUES ('$email', '$name','$gender', '11111', '$filePath')";
         echo $sql;
         $res = mysqli_query($conn, $sql);
         if ($res) 
         {
            $valid = true;
         }
      }
   }
?>
<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <style>
       .container {
           width: 400px;
       }
       .error { color: #FF0000; }
   </style>
</head>
<body style="padding-top: 3rem;">
<div class="container">
<?php if(!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["gender"])){ ?>
   User Added <?php echo $_POST["name"]; ?><br>
   Email <?php echo $_POST["email"]; ?><br>
   Gender <?php echo $_POST["gender"]; ?><br>
<?php }
else {?>
   <span class="error"><?php echo $err;?></span>
<?php }?>
   <hr>
   <a class="btn" href="adduser.php">return back</a>
   <a class="btn" href="table.php">view list</a>
</div>
</body>
</html>
