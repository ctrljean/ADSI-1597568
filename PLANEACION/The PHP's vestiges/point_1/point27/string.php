<?php
/**
 * this method allows us to decide how to buy against a string so return this method must be a string 
 */
class TestClass
{
    public $foo;

    public function __construct($foo)
    {
        $this->foo = $foo;
    }

    public function __toString()
    {
        return $this->foo;
    }
}

$class = new TestClass('Hola Mundo');
echo $class;
?>
