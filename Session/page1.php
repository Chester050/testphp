<?php

session_start();

$username = "admin";
$password = "admin";




  if($_POST['username'] == $username && $_POST['password'] == $password ){

  $_SESSION['username'] = $_POST['username'];


    if(isset($_SESSION['username'])) {

      echo 'Welcome to the page 1 !';

      echo "<a href='pageWrong.php'> log out </a>";

    }
  }

  else {

  //  header('Location: session.php');

    echo "<script> alert('Incorrect information!'); </script>";
  //  echo "Wrong information!";
   // header('Location: session.php');
    echo "<script> location.href='session.php' </script>";



  }



if(isset($_POST['logOut'])) {

  session_destroy();
  echo "<script> location.href='session.php' </script>";
}


 ?>
