  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title></title>


      <?php
      session_start();

  

       ?>
    </head>
    <body>
        <h3> The login form </h3>
        <form class="phpform" action="page1.php" method="post">

          <p>Username : <input type="text" name="username" value="" /></p>
          <p> Password : <input type="password" name="password" value="" /> </p>

          <input type="submit" name="submit" value="Log on">

        </form>
    </body>
  </html>
