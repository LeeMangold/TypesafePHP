<?php

/**
* Float Class
*
* @copyright  Copyright (c) 2013 Lee V. Mangold
* @license    http://opensource.org/licenses/MIT
* @link       https://github.com/LeeMangold/TypesafePHP
*/
class Float {

    /** @var floatValue The Float value being stored */
    public $floatValue = 0; 

    /**
    * Default Float Constructor
    *
    * @param mixed $input The initial value to set the Float with
    */
    function __construct( $input  ) 
    {
        if ( is_null($input) ) throw new Exception('Float constructor requires one(1) arg');
    
        $this->floatValue = floatval($input);
    
    }

    /**
    * Compare two Float objects
    *
    * @param mixed $comparison The Float object to compare this Float to
    * @return bool If $comparison is the same, true is returned.
    */
    public function compareTo( Float $comparison ) 
    {
    
        return $this->floatValue === $comparison();
    
    }

    /**
    * Get the value of the Float
    *
    * Using this invoke method allows the developer to access the float value of an
    * Float without making a longer and more explicit call. This is useful where
    * long arithmatic strings are required.
    *
    * @return float return the value of the Float as a float.
    */
    public function __invoke() 
    {
    
        return (float)$this->floatValue;
    
    }
    
    /**
    * Get\Set the value of the Float
    *
    * @param mixed $input The setter value
    * @return float return the value of the floateger as an float.
    */
    public function val( $input = null ) 
    {
    
        if ( $input == null ) {

            return (float)$this->floatValue;

        } else {

            $this->floatValue = $input;

        }
                                                   
    
    }
    
    /**
    * Get the value of the Float as a string
    *
    * @return string return the value of the floateger as an string/
    */   
    public function __toString() 
    {
    
        return (string)$this->floatValue;
    
    }

}



