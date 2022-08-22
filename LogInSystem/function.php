  <?php


  function emptyInputSignup($username, $password){
    $result;
    if(empty($username) && empty($password)){
      $result = true;

    }
    else{
      $result = false;
    }

    return $result;
  }

  function invalidId($username){
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
      $result = true;
    }
    else{
      $result = false;
    }
    return $result;
  }


  function invalidEmail($email){
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $result = true;
    }
    else{
      $result = false;
    }
    return $result;
  }

/*
function uidExist($conn, $username, $email){
  $sql = "SELECT * FROM newusers WHERE username = ? OR email =?;" ;

  //Initialize a new prepared statement
  $stmt = mysqli_stmt_init($conn);

  if(!mysqli_stmt_prepare($stmt, $sql)){
    header('location: signup.php?error=emptyinput');
    exit();

  }
  // Type of data submitting
  mysqli_stmt_bind_param($stmt, 'ss', $username, $email);

  mysqli_stmt_execute($stmt);

  // Get the result from the prapared statement
  $resultData = mysqli_stmt_get_result($stmt);

  // Fetching data in associative array
  if($row = mysqli_fetch_assoc($resultData))//If the data is inside the database, grab the data.
  {
    return $row;

  }
  else{
    $result = false;
    return $result;

  }
  mysqli_close($stmt);
} */

  // CREATE USER

  function createUser($conn, $username, $password, $email){

    //SQL query
      $sql = "INSERT INTO userinfo (username, userpassword, email) VALUES ( ?, ?, ?);";

      //Initialize / assign $conn variable into $stmt
      $stmt = mysqli_stmt_init($conn);

      //mysqli_query($conn, $sql);
      //Access the database and pass in the query
        mysqli_stmt_prepare($stmt, $sql);

    /* if(!mysqli_stmt_prepare($stmt, $sql)){
        header('location: signup.php?error=none');
        exit();

      } */
      // Hashed password is to generate the gibberish to outsiders when they try to see other users' password
  //    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
      // Type of data submitting

      // Bind the parameters into SQL query
       mysqli_stmt_bind_param($stmt, 'sss', $username, $password, $email);

       //Execute the query
      mysqli_stmt_execute($stmt);

      mysqli_stmt_close($stmt);

      header('location: signup.php?error=none');

      exit();



    }

    function uidExists($conn, $userId){
      $sql = "SELECT * FROM userinfo WHERE username = ?;";
      // Initialize stmt, passing the database into stmt
      $stmt = mysqli_stmt_init($conn);
      // Access the database and pass the query
      mysqli_stmt_prepare($stmt, $sql);
      // Binding the parameters to SQL query
      mysqli_stmt_bind_param($stmt, 's', $userId);

      mysqli_stmt_execute($stmt);

      // Return the data
      $resultData = mysqli_stmt_get_result($stmt);

      // Fetch the data
        if($row = mysqli_fetch_assoc($resultData)) {
          return $row;
        }
        else{
          $result = false;
          return $result;
        }


    }




// User Log In

    function loginUser($conn, $userId, $userPw, $userEmail) {

      $uId = uidExists($conn, $userId);


     if($uId === false){
        header('location: login.php?error=WrongID');

        exit();
      }
      else{
        header('location: index.php');

      }


      $uPw = $uId['userpassword'];
      $dbEmail = $uId['email'];

      if ($userPw !== $uPw) {
        header('location: login.php?error=WrongPassword');

        exit();
      }


      if($userEmail !== $dbEmail){
        header('location: login.php?error=WrongEmail');
        exit();
      }

      else if($userPw === $uPw){
          session_start();

        $_SESSION['theuserid'] = $userId;

        header('location: index.php');

      }
    }
