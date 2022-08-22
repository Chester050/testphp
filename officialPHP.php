            <?php
            $f_name = "Chester";
            $l_name = "Jie";
            $hey = "Hello World!";
             ?>


          <!doctype html>
          <html lang="en">
              <head>
                  <!-- Required meta tags -->
                  <meta charset="utf-8">
                  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

                  <!-- Bootstrap CSS -->
                  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

                  <title>Hello, world!</title>
              </head>
              <body>

                <div class="container">
              <h2 class="text-center text-danger"><?php
              echo $hey ?>
            </h2>
          </div>

              <div class="container">
              <p class="text-center bg-primary lead">

              <?php

                echo "My name is: " . $f_name . " " . $l_name ;
                ?>
              </p>
            </div>

              <form class="form-inline" action="officialPHP.php" method="get">
                <div class="container">
                <div class="row my-1">
                <div class="form-group col-5 mr-2">
                  <label for="name" class="sr-only"> Your name </label>
                  <input type="text" name="name" id="name" class="form-control" placeholder="Enter name...">
                </div>

                <div class="form-group col-5 mr-2">
                  <label for="email" class="sr-only"> Your email </label>
                  <input type="email" name="email" id="email" class="form-control" value="" placeholder="Enter email...">

                </div>
              </div>

              <div class="row mt-3">

                <div class="form-group col-3">
                  <label for="num1" class="sr-only"> Number 1:</label>
                  <input type="number" name="num1" class="form-control" id="num1" placeholder="Input number">
                </div>

                <div class="form-group col-3">
                  <label for="operator" class="sr-only"> Select your operator </label>
                  <input type="text" name="OP" id="OP" class="form-control" placeholder="Key in operator">
                </div>

                <div class="form-group col-3">
                  <label for="num2" class="sr-only"> Number 2:</label>
                  <input type="number" name="num2" id="num2" class="form-control" placeholder="Key in Number">
                </div>




              </div>
              <div class="row  mt-2">
              <button type="submit" name="button" class="btn btn-success m-auto" > Click to calculate ! </button>
            </div>
            </div>

            </div>
              </form>
              <div class="container">
                <?php

                echo "<div class='jumbotron'>
                  <h1 class='display-3'>Hi there it's $f_name</h1>
                  <br>
                  <hr>
                  <p class='lead'> It's the paragraph</p>
                </div>";


                $num1 = $_GET['num1'];
                $OP = $_GET['OP'];
                $num2 = $_GET['num2'];
                $result;
                $info ;
                switch($OP){
                  case "+":
                 $result = $num1 + $num2;
                  break;
                  case "-";
                  $result = $num1 - $num2;
                  break;
                  case "*":
                  $result = $num1 * $num2 ;
                  break;
                  case "/":
                  $result = $num1 / $num2 ;
                  break;
                  default:
                  $result = "Can't recoznize operator";
                }

                if(($result > 1) && ($result <= 20)) {
                  $info = "Your number is within 20";
                }
                else {
                  $info = "Can't calculate the number";
                }


                 ?>
               </div>



                 <div class="container">

                 <div class="alert alert-success my-2" role="alert">
                   Your result is :
                   <strong>
                     <?php echo $result; ?>
                   </strong>
                   <p class="text-right"> It's the : <?php echo $info ?> </p>
                 </div>




                  <?php
                  $age = 20;
                  $can_vote = ($age >= 18) ? "Can vote" : "Can't vote";

                  echo "Can you vote? <br>" . $can_vote;
                  ?>


                  <?php  phpinfo();
                  ?>

                </div>
                  <!-- Optional JavaScript -->
                  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
                  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
                  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
            </body>
          </html>
