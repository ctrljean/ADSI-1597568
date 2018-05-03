<?php
class Person{
  //The different encapsulations are worked on in public, private and protection.  
  //public = It can be accessed in any way, 
  //private =When you put the property age in private you will only let us access it from the same class
  //protected = will not let us access the property unless it is by methods of the same kind, inheritance or parent.

  public $name;  
      public $lastname;
      public $age; // Public variable type integer
      //We use the constructor method to work with the different variables
      public function __construct($nom, $ape, $e){
           $this->name = $nom;
           $this->lastname= $ape;
           $this->age = $e;
     }
     //We print the age variable and return its value
     public function imprimir(){
         echo '<br>';
         return $this->age;
     }
     
     }
 //we create a new variable called person and give it a new value 
 $persona = new Person('Pepito','Perez',14);
 //We print what the person variable contains again 
  echo $persona->age;
  echo $persona->imprimir();




  