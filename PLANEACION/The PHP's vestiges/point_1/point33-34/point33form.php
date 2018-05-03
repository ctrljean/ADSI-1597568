<?php

namespace sumation;

class point33form {
  
  private $element =5;
  
  private $element2 =5;
  
  

  
  function getElement() {
    return $this->element;
  }

  function getElement2() {
    return $this->element2;
  }

  function setElement($element) {
    $this->element = $element;
  }

  function setElement2($element2) {
    $this->element2 = $element2;
  }

  public function suma()
  {
    return $this->element + $this->element2;
  }


  
}

$sum = new point33form;

