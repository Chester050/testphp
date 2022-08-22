<?php

if(isset($_POST['submit'])){
  echo 'It worked!';

  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];

  require_once 'database.php';
  require_once 'function.php';

  if(emptyInputSignup($username, $password) !== false){
    header('location: signup.php?error=emptyinput');
    exit();
  }



  if(invalidId($username) !== false){
    header('location: signup.php?error=emptyinput');
    exit();
  }

  if(invalidEmail($email) !== false){
    header('location: signup.php?error=emptyinput');
    exit();
  }



  if( uidExists($conn, $username) !== false){
    header('location: signup.php?error=Userexit!');
    exit();
  }
/*  if(invalidpw($password) !== false){
    header('location: signup.php?error=emptyinput');
    exit();
  } */

  /* if(uidExist($conn, $username, $email) !== false){
    header('location: signup.php?error=emptyinput');
    exit();
  } */

createUser($conn, $username, $password, $email);

}

else {

  header("location: signup.php");
  exit();
}



 ?>
