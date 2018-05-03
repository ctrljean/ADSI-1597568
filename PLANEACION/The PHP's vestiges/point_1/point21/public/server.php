<?php

# se utilizan estos .            

 $message3= $_SERVER['PHP_SELF'] ."<br>".
            $_SERVER['SERVER_NAME'] . "<br>".
            $_SERVER['HTTP_HOST']."<br>".
            $_SERVER['HTTP_USER_AGENT']."<br>".
            $_SERVER['SCRIPT_NAME'];        
            
            echo $message3;
            exit()
  ?>