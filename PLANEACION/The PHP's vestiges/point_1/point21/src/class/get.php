<?php

namespace get;


class get 
{
    /**
     * This is the first calculator variable.
     * 
     * @var float
     */
    
    private $variable2;

  
    
    /**
     * Return the variable 2
     * 
     * @return float
     */
        public function setvariable2(float $variable2)
    {
        $this->variable2 = $variable2;
    }

    public function sum(): float
     {
       
        if ($this->variable2 != 0) {
            
            return $this->variable2 * $this->variable2;
        } else {
            throw new \Exception('The mult by zero does not exist. (º-º)', 332);
        }
    }
    
    
    /**
     * set the variable 2
     * 
     * @param float $variable2
     */

    
}