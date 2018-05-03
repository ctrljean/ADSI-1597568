
<?php
/**
 *in this case is 3-dimensional. Here is the example:
 */
$datos = array(
              array(array(0, 0, 0),
                    array(0, 0, 1),
                    array(0, 0, 2) 
                    ),
              array(array(0, 1, 0),
                    array(0, 1, 1),
                    array(0, 1, 2) 
                    ),
              array(array(0, 2, 0),
                    array(0, 2, 1),
                    array(0, 2, 2) 
                    )
    );
    
    foreach($datos as $datos2)
 	{
 	foreach($datos2 as $datos3)
 		{
 		foreach($datos3 as $dato)
 			{
 			echo "$dato ";
 			}
 		echo "<br>";
 		}
 	echo "<br>";
 	}
/**
 * in the example matrix there is a depth of 3 arrays, i.e. the first one contains a second and the second one a third one.
 */
        ?>

