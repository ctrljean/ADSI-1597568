<?php
require '../src/class/get.php';

use get\get;


try {
$variable2=(float) $_GET ['variable2'];
$Operation=(int) $_GET ['Operation'];
$message= null;
$sum = new get();
$sum->setvariable2($variable2);
 switch ($Operation){
 case 0:
     $message='Please select an option.';
     break;
     case 1:
         $message = 'The mult between  and '.$variable2.' is = '.$sum->sum();
         break;
         
 }
 
} catch (Exception $exc) {
if ($exc->getCode() === 332) {
        $message = $exc->getMessage();
    } else {
        echo 'I\'m sorry, we have a problem<br>';
        echo $exc->getMessage();
        echo '<br>';
        echo $exc->getTraceAsString();
    }  
}
 finally {
    if ($message !== null) {
        require 'index.php';
    }
}
  
