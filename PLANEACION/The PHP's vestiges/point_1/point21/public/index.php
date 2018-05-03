<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ejercicie 21</title>
    </head>
    <body>
        <h1> Metodo Get</h1>
        <form action="sum.php" method="get">
            <br>
            <select name="Operation">
                <option value="">Select a operation</option>
                <option value="1">n^2</option>
            </select>
            <br>
            <input type="number" name="variable2">
            <br>
            <button type="submit">Operate</button>
        </form>
         <p><?php if (isset($message)=== true):?>
            <?php echo $message ?>
            <?php endif ?>
        </p>
        <p>
            Sirve para traer datos de un formulario .
            
        </p>
        <h1>Metodo Request</h1>
        <form method="post" action="request.php">
             
             NAME: <input type='text' name='fname'>
            <input type="submit">
        </form>
        <p>
            <?php if (isset($message2)=== true):?>
            <?php echo $message2 ?>
            <?php endif ?>

        </p>
        <p>
        <h1>Metodo Server </h1>
            Requiere y toma los datos de un formulario.
        </p>
        <p> Nos muestra la direccion del servidor y de los elementos. <br>
            <a href="server.php">links</a>
            se utiliza:<br>
            $_SERVER['PHP_SELF']<br>
            $_SERVER['SERVER_NAME']<br>
            $_SERVER['HTTP_HOST']<br>
            $_SERVER['HTTP_REFERER']<br>
            $_SERVER['HTTP_USER_AGENT']<br>
            $_SERVER['HTTP_NAME']<br>
        </p>
        <h1> Metodo Post</h1>
        <form method="post" action="post.php">
             
             NAME: <input type='text' name='fname'>
            <input type="submit">
        </form>
        <p>
            <?php if (isset($me)=== true):?>
            <?php echo $me ?>
            <?php endif ?>

        </p>
        
     
    </body>
</html>