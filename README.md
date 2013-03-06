TypesafePHP
===========

Typesafety library for PHP primitives

I created this fot two primary reasons:
1. PHP has come a long way, and it appears there are plans to add the option for
primitive type-safety. However, that is not yet reality. 
2. I wanted to start a GitHub project and get some experience with Git.

##EXAMPLE: 

```php

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

```

This approach is not without its limitations. Most notably, the use of these
classes involves the loading of another file on the file system, and the memory
overhead associated with instantiating another object.   
