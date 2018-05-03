<?php
/**
 * Those that have a building method will invoke it in each new object created, making it suitable for any initialization that the object may need before it is used.
 */
class BaseClass {
   function __construct() {
       print "En el constructor BaseClass\n";
   }
   }