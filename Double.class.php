<?php

/**
* Double Class
*
* @copyright  Copyright (c) 2013 Lee V. Mangold
* @license    http://opensource.org/licenses/MIT
* @link       https://github.com/LeeMangold/TypesafePHP
*/
class Double {

    /** @var doubleValue The Double value being stored */
    public $doubleValue; 

    /**
    * Default Double Constructor
    *
    * @param mixed $input The initial value to set the Double with
    */
    function __construct( $input  ) 
    {
    
        if ( is_null($input) ) throw new Exception('Double constructor requires one(1) arg');
    
        $this->doubleValue = doubleval($input);
    
    }

    /**
    * Compare two Double objects
    *
    * @param mixed $comparison The Double object to compare this Double to
    * @return bool If $comparison is the same, true is returned.
    */
    public function compareTo( Double $comparison ) 
    {
    
        return $this->doubleValue === $comparison();
    
    }

    /**
    * Get the value of the Double
    *
    * Using this invoke method allows the developer to access the double value of an
    * Double without making a longer and more explicit call. This is useful where
    * long arithmatic strings are required.
    *
    * @return double return the value of the Double as a double.
    */
    public function __invoke() 
    {
    
        return (double)$this->doubleValue;
    
    }
    
    /**
    * Get\Set the value of the Double
    *
    * @param mixed $input The setter value
    * @return double return the value of the Double as an double.
    */
    public function val( $input = null ) 
    {

        if ( $input == null ) {

            return (double)$this->doubleValue;

        } else {

            $this->doubleValue = $input;

        }
    
    
    }
    
    /**
    * Get the value of the Double as a string
    *
    * @return string return the value of the Double as an string/
    */
    public function __toString() 
    {
    
        return (string)$this->doubleValue;
    
    }

}



