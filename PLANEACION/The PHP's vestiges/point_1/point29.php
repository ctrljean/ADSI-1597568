<?php
/**
 * la herencia es un principio de programación en que se establece que este principio afectara a muchas clases y objectos que se relacionen con otros 
 */

class Foo
{
    public function printItem($string)
    {
        echo 'Foo: ' . $string . PHP_EOL;
    }
    
    public function printPHP()
    {
        echo 'PHP is great.' . PHP_EOL;
    }
}

class bar extends Foo
{
    public function printItem($string)
    {
        echo 'Bar: ' . $string . PHP_EOL;
    }
}

$foo = new Foo();
$bar = new Bar();
$foo->printItem('baz'); // Salida: 'Foo: baz'
$foo->printPHP();       // Salida: 'PHP is great' 
$bar->printItem('baz'); // Salida: 'Bar: baz'
$bar->printPHP();       // Salida: 'PHP is great'

?>



