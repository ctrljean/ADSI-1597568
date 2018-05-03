<?php

echo preg_replace_callback('~-([a-z])~', function ($coincidencia) {
    return strtoupper($coincidencia[1]);
}, 'hola-mundo');
/*
 * Anonymous functions, also known as closures, allow the creation of functions that do not have a specified name.
 */
