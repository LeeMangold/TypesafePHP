<?php

/**
* Boolean Class
*
* @copyright  Copyright (c) 2013 Lee V. Mangold
* @license    http://opensource.org/licenses/MIT
* @link       https://github.com/LeeMangold/TypesafePHP
*/
class Boolean {

    /** @var bool The Boolean value being stored */
    public $booleanValue; 


    /**
    * Default Boolean Constructor
    *
    * @param mixed $input The initial value to set the Boolean with 
    */
    function __construct( $input  ) 
    {
        
        if ( is_null($input) ) throw new Exception('Boolean constructor requires one(1) arg');

        /**
        * note: PHP 5.5.0 or greater only for boolval
        */
        //$this->booleanValue = boolval($input); 

        if (!empty($input) && ($input > 0 || strtoupper($input) == "TRUE")) 
        {
            $this->booleanValue = 1;
        }
        else
        {
            $this->booleanValue = 0;
        }

    }

    /**
    * Compare two Boolean objects
    *
    * @param mixed $comparison The Boolean object to compare thisBoolean to
    * @return bool If $comparison is the same, true is returned.
    */
    public function compareTo( Boolean $comparison ) 
    {
    
        return $this->booleanValue === $comparison();
    
    }

    /**
    * Get the value of the Boolean 
    *
    * Using this invoke method allows the developer to access the bool value of an
    * Boolean without making a longer and more explicit call. This is useful where
    * long arithmatic strings are required.
    *
    * @return bool return the value of the Boolean as a bool.
    */
    public function __invoke() 
    {
    
        return (bool)$this->booleanValue;
    
    }
    
    /**
    * Get the value of the Boolean
    *
    * @return bool return the value of the Boolean as a bool.
    */
    public function val() {
        return (bool)$this->booleanValue;
    }
    
    /**
    * Get the value of the Boolean as a String 
    *
    * @return string return the value of the Boolean as a bool.
    */
    public function __toString() {
        return (string)$this->booleanValue;
    }

}
