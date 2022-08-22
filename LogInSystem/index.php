

 <?php

  session_start();

  require_once 'function.php';
  // $userID = $_SESSION['theuserid'];

  if(isset($_SESSION['theuserid'])) {

    echo "Hello" . $_SESSION['theuserid'] . " Welcome!";

    include('C:\xampp\htdocs\Myphp\phptesting.php');
  }
  else{

    echo "<script> alert('User is not specified!') </script>";
    print_r($_SESSION);

  }

  ?>
