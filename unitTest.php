<?
require_once "/usr/share/pear/PHPUnit/Autoload.php";
require_once "Integer.class.php";
require_once "Boolean.class.php";
require_once "Float.class.php";
require_once "Double.class.php";

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

        $b->val(5);
        $this->assertEquals($a() + $b(), 10);


    }

    public function testBoolean() 
    {

        $a = new Boolean(true);
        $this->assertTrue($a());

        $a->val(false);
        $this->assertFalse($a());
    
        $b = new Boolean(false);
        $this->assertFalse( $a->compareTo( $b ) );

    }

    public function testFloat() 
    {

        $a = new Float(1.2);
        $this->assertEquals($a(), 1.2);
        $a->val(1.5);
        $this->assertEquals($a(), 1.5);

        $b = new Float(1.5);
        $this->assertTrue( $a->compareTo($b) );
        $b->val(1.2);
        $this->assertFalse( $a->compareTo($b) );

    }

    public function testDouble() 
    {

        $a = new Double(1.2);
        $this->assertEquals($a(), 1.2);
        $a->val(1.5);
        $this->assertEquals($a(), 1.5);

        $b = new Double(1.5);
        $this->assertTrue( $a->compareTo($b) );
        $b->val(1.2);
        $this->assertFalse( $a->compareTo($b) );

    }

}

