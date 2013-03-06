<?
require_once "/usr/share/pear/PHPUnit/Autoload.php";
require_once "Integer.class.php";

/**
* PHPUnit Test
*
* Run this with phpunit unitTest.php 
*
* @copyright  Copyright (c) 2013 Lee V. Mangold
* @license    http://opensource.org/licenses/MIT
* @link       https://github.com/LeeMangold/TypesafePHP
*/


class Test extends PHPUnit_Framework_TestCase
{

    public function testInteger()
    {
        $a = new Integer(5);
        $this->assertInstanceOf('Integer', $a);
        $this->assertEquals($a->val(), 5);
        $this->assertEquals($a(), 5);
        $this->assertEquals("5", $a);
        
        $b = new Integer(6);
        $this->assertInstanceOf('Integer', $b);
        $this->assertEquals($b->val(), 6);
        $this->assertEquals($b(), 6);

        $this->assertEquals($a() + $b(), 11);

    }


}

