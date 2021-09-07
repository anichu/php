<?php

  $connection = mysqli_connect('localhost','root','','loginapp');
  if(!$connection){
    echo 'failed Connected !' . mysqli_connect_errno();
  }

?>