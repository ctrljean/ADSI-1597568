<?php
/**
 * destructive method will be called as soon as there are no other references to a particular object, or in any other circumstances of termination.
 */
class MyDestructableClass {
   function __construct() {
       print "En el constructor\n";
       $this->name = "MyDestructableClass";
   }

   function __destruct() {
       print "Destruyendo " . $this->name . "\n";
   }
}

$obj = new MyDestructableClass();
?>
