<?php

/* 
 *Sessions are an easy way to store data for individual users using a unique 
 *session ID.
 */


    session_start();/*when returning to the index if there is a session, it will 
     * be destroyed, there are ways to keep it as with an if
     * (session_start()!= NULL). But at the moment for the example is not valid. 
     */
    session_destroy();/*The existing session is destroyed so that duplication is 
     * not allowed.
     */
?>
 
<html lang="es">
    <head>
            <title>Crear una sesión</title>
    </head>
 
    <body>
            <h1>Creación de una sesión</h1>
            <form action="./session.php" method="POST">
                    <p>
                            <label>Nombre de usuario en CodeJobs</label> <br />
                            <input type="text" name="username" />
                    </p>
 
                    <p>
                            <input type="submit" value="Crear sesión" />
                    </p>
            </form>
    </body>
</html>
 
    
    