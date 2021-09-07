<?php include 'db.php'; 
 include 'functions.php';



?>

<?php include 'includes/header.php' ?>

  <h1>Update</h1>
  <form action="login_update.php" method="POST">
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
        
  updateLogin();
        ?>


      </select>
    </div>
    <button type="submit" name="submit">Login</button>
  </form>
<?php include 'includes/footer.php' ?>
