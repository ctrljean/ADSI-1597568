<?php

namespace MyFirstProject;

class message1_and_message2 {

  public function message1() {
    echo '1. Hello, My name is: Jean Carlo Castaño Millan.';
    echo '<br>';
  }
  public function message2() {
    echo '2. This is my second message in PHP through object-oriented programming.';
  }
}
  use MyFirstProject\message1_and_message2;

$message1_and_message2 = new message1_and_message2();
$message1_and_message2->message1();
$message1_and_message2->message2();

/*
 * To create a class, use the reserved word class and then the name of the class.
  The class definition is put between the opening and closing keys. The name of the class begins with a capital letter.
 */
