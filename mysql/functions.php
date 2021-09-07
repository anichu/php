<?php include 'db.php';

function updateLogin(){
  global $connection;
  if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query1 = "UPDATE users SET username = '$username',password = '$username' where id = $id";
    $result1 = mysqli_query($connection,$query1);
    if($result1){
      echo 'Updated successfully ! <br>';
    }
    else{
      echo 'failed updated <br>'.mysqli_error($connection);
    }
  }


  $query = "select * from users";
  $result = mysqli_query($connection,$query);
  if(!$result){
    die('Query failed'.mysqli_error($connection));
  }

  while($row = mysqli_fetch_assoc($result)){
    $id = $row['id'];
    echo "<option value='$id'>$id</option>";
  }
}

function readLogin(){
  global $connection;
  $query = "select * from users";
  $result = mysqli_query($connection,$query);
  if(!$result){
    die('Query failed'.mysqli_error($connection));
  }
  else{
    echo 'Read DB';
  }
}




function showData(){
  global $connection;
  $query = "select * from users";
  $result = mysqli_query($connection,$query);
  if(!$result){
    die('Query failed'.mysqli_error($connection));
  }

  while($row = mysqli_fetch_assoc($result)){
    ?>
     <div class="modal">
       <p><?php echo $row['id'] ?></p>
       <h1><?php echo $row['username'] ?></h1>

     </div>
    <?php
  }
}

function deleteLogin(){

  global $connection;
  if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query1 = "delete from users where id = $id ";
    $result1 = mysqli_query($connection,$query1);
    if($result1){
      echo 'delete successfully ! <br>';
    }
    else{
      echo 'failed updated <br>'.mysqli_error($connection);
    }
  }

}

function createLogin(){
  global $connection;
  if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $username = mysqli_real_escape_string($connection,$username);
    $password = mysqli_real_escape_string($connection,$password);

    $hashFormat = "$2y$10$";
    $salt = "iusesomecrazystrings22";
    $hashF_and_salt = $hashFormat . $salt;
    $password = crypt($password,$hashF_and_salt);

    $query = "insert into users(username,password) ";
    $query .= "values('$username','$password')";
  
    $result = mysqli_query($connection,$query);
    if(!$result){
      die('Query failed'.mysqli_error($connection));
    }
    else{
      echo 'Created successfully!';
    }
}
}
?>