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
            array('I', 1),
            array('II', 2),
            array('III', 3),
            array('IV', 4),
            array('V', 5),
            array('VI', 6),
            array('VII', 7),
            array('VIII', 8),
            array('IX', 9),
            array('XXV', 25),
            array('XVII', 17),
            array('XIV', 14),
            array('XII', 12),
            array('XIX', 19),
            array('XXXIV', 34),
            array('XXXIX', 39),
        );
    }
}
?>

