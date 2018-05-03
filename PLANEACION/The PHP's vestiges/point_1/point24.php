<?php
class A
{
    function foo()
    {
        if (isset($this)) {
            echo '$this está definida (';
            echo get_class($this);
            echo ")\n";
        } else {
            echo "\$this no está definida.\n";
        }
    }
}

class B
{
    function bar()
    {
        A::foo();
    }
}

$a = new A();
$a->foo();
 echo "<br>";
A::foo();
 echo "<br>";
$b = new B();
$b->bar();
 echo "<br>";
B::bar();


/* 
The basic definition of a class begins with the reserved word class, followed by a class name, and continues with a pair of keys 
containing the definitions of the properties and methods belonging to that class.
 */

