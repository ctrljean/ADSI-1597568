<?php

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
echo '<br>';
echo $class1->prefixValue('FOO_') . "\n";

echo '<br>';
echo '<br>';

$class2 = new ConcreteClass2;
$class2->printOut();
echo '<br>';
echo $class2->prefixValue('FOO_') . "\n";
