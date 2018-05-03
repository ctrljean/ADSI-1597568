<!DOCTYPE html>
<?php
$cookie_name = "user";
$cookie_value = "Rammstein";

setcookie($cookie_name,$cookie_value, time()+(86400 * 30),"/"); //86400 = un dia.
?>
<html>
    <body>
        <?php
        if(!isset($_COOKIE[$cookie_name])){
            echo "Cookie named '" . $cookie_name ."'nunca a ingresado";
        }else{
            echo "Cookie '" .$cookie_name. "'si ingreso<br>";
            echo "Valor es".$_COOKIE[$cookie_name];
        }
        ?>
        <p> <b> Nota:</b> tiene que recargar la pagina para el valor de la cookie.
                
            </b>
    </body>
</html>

