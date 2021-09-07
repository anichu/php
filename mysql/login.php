<?php
if(isset($_POST['submit'])){

  $username = $_POST['username'];
  $password = $_POST['password'];

  $connection = mysqli_connect('localhost','root','','loginapp');
  if($connection){
    echo 'We are connected!';
  }
  else{
    echo 'failed Connected !' . mysqli_connect_errno();
  }
  $query = "insert into users(username,password) ";
  $query .= "values('$username','$password')";

  $result = mysqli_query($connection,$query);
  if(!$result){
    die('Query failed'.mysqli_error($connection));
  }

 
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles.css">
  <title>Login</title>
</head>
<body>

<div class="container">
  <form action="login.php" method="POST">
    <div class="form-group">
      <label for="name">Your Name</label>
      <input type="text" id="name" name="username" >
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" id="password" name="password" >
    </div>
    <button type="submit" name="submit">Login</button>
  </form>
</div>
  
</body>
</html>