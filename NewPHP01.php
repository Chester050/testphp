<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <title>Hello, world!</title>

        <style>
        p::selection{
          background-color: purple;
          color:white;
        }
        </style>
    </head>
    <body>


      <p style="text-align:center;">
    <?php
      echo "Hello there";
    ?>
  </p>

    <p style="text-align:center;">
      This is created by:
    <?php
    print "<span style=\"font-weight:bold;text-align:center;\">
    Hello World! </span>";
    ?>
  </p>



      <form action="NewPHP01.php" method="POST">
          <p> Name: <select name="title">
            <option value="Mr"> Mr </option>
              <option value="Miss"> Miss </option>
              </select>
                <input type="text" name="name" />
              </p>
              <p> How did you feel?
                <input type="radio" name="experience" value="Very Good" /> Very Good
                <input type="radio" name="experience" value="Very Bad" /> Very Bad
              </p>
              <p>Your comment:
                <textarea row="2" col="20" name="comment">
                </textarea>
              </p>
              <br />
              <input type="submit" value="Submit!" />
    </form>

      <?php
      $title = $_POST["title"];
      $name = $_POST["name"];
      $experience = $_POST["experience"];
      $comment = $_POST["comment"];

      echo "Thank you $name for sharing. Your experience is $experience. \n Your comment is <br /> $comment ";

      ?>

        <?php
        phpinfo()
          ?>


    </body>
  </html>
