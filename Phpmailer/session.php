  <?php
  session_start();
    $_SESSION['email'] = $_POST['email'];
    $password = $_POST['password'];
    $username = '';
    $_SESSION['logging'] = date('h:i.a');

      if($_SESSION['email'] == 'chester0505@outlook.com'){
        $username = "Chester";
      }
      echo "<h1> Welcome $username !  </h1>";
      echo "<h1> You have logged on at " . $_SESSION['logging'] . "</h1>";
      echo "<p> What can we do to assist you? </p>";
      print_r($_SESSION);
    ?>
