    <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title></title>
      </head>
      <body>
          <?php
          function countValue($quantity , $price){
            return $quantity * $price;

          }

           ?>
        <form class="" action="function.php" method="post">

          <p> Enter quantity : <input type="number" name="quantity" value="" /> </p>
          <p> Enter price : <input type="number" name="price" value=""> </p>
          <p> Enter name: <input type="text" name="name" value=""> </p>
          <input type="submit" name="" value="GO!">
        </form>

      <?php
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(is_numeric($_POST['quantity']) && is_numeric($_POST['price'])){
          $totalPrice = countValue($_POST['quantity'],$_POST['price']);
          echo $totalPrice;
        }

      }else{
        echo "Please enter valid input";
      }

      echo $_GET['name'];
       ?>

      </body>
    </html>
