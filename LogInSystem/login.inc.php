<?php

  if(isset($_POST['submit'])) {

    $userId = $_POST['userId'];
    $userPw = $_POST['userPw'];
    $userEmail = $_POST['email'];
    require_once 'database.php';
    require_once 'function.php';

  loginUser($conn, $userId, $userPw, $userEmail);

  }





 ?>
