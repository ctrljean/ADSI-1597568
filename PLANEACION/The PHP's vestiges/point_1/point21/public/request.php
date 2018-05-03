<?php


   $message2 =NULL;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_REQUEST['fname']);
        if(empty($name)){          
            $message2= 'Name is  empety';
        
        } else {
        $message2 = $name;    
        }
    
    }

   
    
    require 'index.php';

?>
