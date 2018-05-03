<?php
abstract class ClaseAbstracta
{
    // Force the class extension to define this method
    abstract protected function getValor();
    abstract protected function valorPrefijo($prefijo);

    // Common method that prints the string value
    public function imprimir() {
        print $this->getValor() . "\n";
    }
}
//You create a class and assign it an extension of the specific class.//
class ClaseConcreta1 extends ClaseAbstracta
{
    //an example is made protecting the function of the class and a string is returned to it
    protected function getValor() {
        return "jean1";
    }
    //The same example is done by forcing the extension of the class and assigning it a variable that returns a string.
    public function valorPrefijo($prefijo) {
        return "{$prefijo}jean1";
    }
}
//You create a class and assign it an extension of the specific class.//
class ClaseConcreta2 extends ClaseAbstracta
{
    //Another example is made with a public function that returns a string
    public function getValor() {
        return "jean2";
    }
   //Another example is made with a public function with the abstract method that returns a stringg
    public function valorPrefijo($prefijo) {
        return "{$prefijo}jean2";
    }
}
//is called a variable that is the value of the new particular class
$clase1 = new ClaseConcreta1;
//The value of the variable we create is printed 
$clase1->imprimir();
echo '<br>';
//The value of the variable is printed by forcing it with the abstract method
echo $clase1->valorPrefijo('FOO_') ."\n";
echo '<br>';
$clase2 = new ClaseConcreta2;
$clase2->imprimir();
echo '<br>';
echo $clase2->valorPrefijo('FOO_') ."\n";
?>