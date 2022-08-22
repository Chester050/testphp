<?php

  function check_login($conn){

    if(isset($_SESSION['username'])) {
      
      $username = $SESSION['username'];

      $query = "select * from userdata where username = '$username'";

      $result = mysqli_query($conn, $query);

      if($result && mysqli_num_rows($result) > 0){

        $userinfo = mysqli_fetch_assoc($result);
        return $username;
      }
    }



  }

 ?>
