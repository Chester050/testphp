<?php

class MyClass {

   public $bar = 'something';

   public function foo() {
     echo "Here! <br>";
   }

}
$foobar = new MyClass();
$foobar->foo();
echo $foobar->bar;
 ?>
