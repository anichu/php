<?php include 'db.php'; 
 include 'functions.php';

  deleteLogin();
  $query = "select * from users";
  $result = mysqli_query($connection,$query);
  if(!$result){
    die('Query failed'.mysqli_error($connection));
  }


?>

 <?php include 'includes/header.php' ?>


  <h1>Delete</h1>
  <form action="login_delete.php" method="POST">
    <div class="form-group">
      <label for="name">Your Name</label>
      <input type="text" id="name" name="username" >
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" id="password" name="password" >
    </div>
    <div class="form-group">
      <select name="id" id=""  style="cursor: pointer; padding: .5em 1em;">
       
        
          <?php 
            while($row = mysqli_fetch_assoc($result)){
              $id = $row['id'];
              echo "<option value='$id'>$id</option>";
            }
          ?>


      </select>
    </div>
    <button type="submit" name="submit">Login</button>
  </form>
  <?php include 'includes/footer.php' ?>
