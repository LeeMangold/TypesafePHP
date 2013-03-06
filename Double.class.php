<?php

class Double {

    public $doubleValue; 

    function __construct( $input  ) {
        if ( is_null($input) ) throw new Exception('Double constructor requires one(1) arg');
        $this->doubleValue = doubleval($input);
    }

    public function compareTo( Double $comparison ) {
        return $this->doubleValue === $comparison();
    }

    public function __invoke() {
        return (double)$this->doubleValue;
    }
    
    public function val() {
        return (double)$this->doubleValue;
    }
    
    public function __toString() {
        return (string)$this->doubleValue;
    }

}



