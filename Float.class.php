<?php

class Float {

    public $floatValue; 

    function __construct( $input  ) {
        if ( is_null($input) ) throw new Exception('Float constructor requires one(1) arg');
        $this->floatValue = floatval($input);
    }

    public function compareTo( Float $comparison ) {
        return $this->floatValue === $comparison();
    }

    public function __invoke() {
        return (float)$this->floatValue;
    }
    
    public function val() {
        return (float)$this->floatValue;
    }
    
    public function __toString() {
        return (string)$this->floatValue;
    }

}



