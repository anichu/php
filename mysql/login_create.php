<?php include 'db.php';
include 'functions.php';
createLogin();
?>


<?php include 'includes/header.php' ?>


  <h1>Create</h1>
  <form action="login_create.php" method="POST">
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
  <?php include 'includes/footer.php' ?>
