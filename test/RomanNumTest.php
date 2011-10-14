<?php
require_once '../RomanNum.php';
require_once 'PHPUnit/Framework/TestCase.php';

class RomanNumTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider provider
     */
    public function testToInt($numeral, $int)
    {
        $roman = new RomanNum();
        $this->assertEquals($int, (int) $roman->toInt($numeral));
    }
 
    public function provider()
    {
        return array(
          array('X', 10),
        );
    }
}
?>

