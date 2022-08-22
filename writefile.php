       <!DOCTYPE html>
       <html lang="en" dir="ltr">
         <head>
           <meta charset="utf-8">
           <title></title>
         </head>
         <body>
             <h3> The login form </h3>
             <form class="phpform" action="writefile.php" method="post">

               <p>Email address : <input type="email" name="email" value="" /></p>
               <p> Password : <input type="password" name="password" value="" /> </p>

               <input type="file" name="picture" value="" />

               <input type="submit" name="submit" value="Log on" />

             </form>
         </body>
       </html>

       <?php
       $file = 'C:\Test\trythis2.txt';
       $date = date("y-d-m,h:i:sa" );
       $email = $_POST['email'];
       $password = $_POST['password'];
       $picture = $_POST['picture'];
       $data = "User : " . $email  . " \nPassword : ". $password . "\n" . "Logged on time: " . $date . "\n";
       $userinfo = $email . $password;
       $allData = array($userinfo);






         file_put_contents($file,$data . PHP_EOL , FILE_APPEND);

         touch('C:\Test\Heythere.txt');



        ?>

      
