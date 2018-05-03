<?php

/*
 * The visibility of a property or method can be defined by prefixing the declaration with the keywords:
 *  public, protected or private.
 * Public declared items can be accessed everywhere.
 * Protected limits access to inherited and parent classes (and to the class that defines the item).
 * Private limits visibility only to the class that defines the item.
 */

class MyClass {

  public $public = 'Public';
  protected $protected = 'Protected';
  private $private = 'Private';

  function printHello() {
    echo $this->public;
    echo $this->protected;
    echo $this->private;
  }

}

$obj = new MyClass();
echo $obj->public;    // Funciona bien
echo $obj->protected; // Error Fatal
echo $obj->private;   // Error Fatal
$obj->printHello();   // Muestra Public, Protected y Private

/**
 * Definición de MyClass2
 */
class MyClass2 extends MyClass {

  // Se pueden redeclarar las propiedades pública y protegida, pero no la privada
  public $public = 'Public2';
  protected $protected = 'Protected2';

  function printHello() {
    echo $this->public;
    echo $this->protected;
    echo $this->private;
  }

}

$obj2 = new MyClass2();
echo $obj2->public;    // Funciona bien
echo $obj2->protected; // Error Fatal
echo $obj2->private;   // Undefined
$obj2->printHello();   // Muestra Public2, Protected2, Undefined

/*
 * ABSTRACT
 * Any class that contains at least one abstract method must also be abstract.
 * Methods defined as abstract simply declare the method's signature they cannot define the implementation.
 *
 * When inheriting from an abstract class, all methods marked abstract in the parent's class declaration
 * must be defined by the child; additionally, these methods must be defined with the same (or weaker) visibillity.
 *
 * For example, if the abstract method is defined as protected, the function
 * implementation must be defined as either protected or public.
 */

echo '<br>';

abstract class AbstractClass {

  // Force Extending class to define this method
  abstract protected function getValue();

  abstract protected function prefixValue($prefix);

  // Common method
  public function printOut() {
    print $this->getValue() . "\n";
  }

}

class ConcreteClass1 extends AbstractClass {

  protected function getValue() {
    return "ConcreteClass1";
  }

  public function prefixValue($prefix) {
    return "{$prefix}ConcreteClass1";
  }

}

class ConcreteClass2 extends AbstractClass {

  public function getValue() {
    return "ConcreteClass2";
  }

  public function prefixValue($prefix) {
    return "{$prefix}ConcreteClass2";
  }

}

$class1 = new ConcreteClass1;
$class1->printOut();
echo $class1->prefixValue('FOO_') . "\n";

$class2 = new ConcreteClass2;
$class2->printOut();
echo $class2->prefixValue('FOO_') . "\n";

