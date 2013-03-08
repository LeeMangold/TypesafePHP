<?php

/**
* Integer Class 
*
* @copyright  Copyright (c) 2013 Lee V. Mangold 
* @license    http://opensource.org/licenses/MIT 
* @link       https://github.com/LeeMangold/TypesafePHP 
*/
class Integer {

    /** @var int The Integer value being stored */
    private $integerValue = 0; 


    /**
    * Default Integer Constructor 
    *
    * @param mixed $input The initial value to set the Integer with 
    */
    function __construct( $input ) 
    {
    
        if ( is_null($input) ) throw new Exception('Integer constructor requires one(1) arg');

        $this->integerValue = intval($input);
    
    }

    /**
    * Compare two Integer objects 
    *
    * @param mixed $comparison The Integer object to compare this Integer to 
    * @return bool If $comparison is the same, true is returned.
    */
    public function compareTo( Integer $comparison ) 
    {
    
        return $this->integerValue === $comparison();
    
    }

    /**
    * Get the value of the Integer
    *
    * Using this invoke method allows the developer to access the int value of an
    * Integer without making a longer and more explicit call. This is useful where
    * long arithmatic strings are required. 
    *
    * @return int return the value of the integer as an int. 
    */
    public function __invoke() 
    {
    
        return (int)$this->integerValue;
    
    }
    
    /**
    * Get\Set the value of the Integer
    *
    * @param mixed $input The setter value 
    * @return int return the value of the integer as an int. 
    */
    public function val( $input = null ) 
    {
    
        if ( $input == null ) {
            
            return (int)$this->integerValue;

        } else {

           $this->integerValue = $input;

        }
    
    }
    
    /**
    * Get the value of the Integer as a string
    *
    * @return string return the value of the integer as an string/
    */
    public function __toString() 
    {
    
        return (string)$this->integerValue;
    
    }

}
