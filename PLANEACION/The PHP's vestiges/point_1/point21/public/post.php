<?php

$me =NULL;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $naame = htmlspecialchars($_POST['fname']);
        if(empty($naame)){          
            $me= 'Name is  empety';
        
        } else {
        $me= $naame;    
        }
    
    }
    
   
    
    require 'index.php';
