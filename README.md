TypesafePHP
===========

Typesafety library for PHP primitives

EXAMPLE: 

<?php

require_once "Integer.class.php";

//Initialize an Integer with an int
$intA = new Integer(5);

//Initialize and Integer with a string
$intB = new Integer("5");

//Call integers with invoke
/*
Note: there are two ways to access the int value of an integer. The first is
using the invoke method. In this case, rather than trying to access the int like
$a * $b, you would use $a() * $b(), like you see below. The other methods is to
call $a->val(). Oveloading invoke is a bit hackish, but then, so is the lack of
type safety.
*/
$intC = new Integer($intA() * $intB());

//Echo an integer 
echo $intC;
