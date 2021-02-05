<?php
use App\Classes\ItHandler;
use App\Classes\BhutHandler;
use App\Classes\BhutItHandler;
use App\Classes\NumberHandler;
use PHPUnit\Framework\TestCase;

final class NotMultipleOfThreeAndFiveTest extends TestCase {

    /**
     * @dataProvider validMultiples
     */
    public function testNotMultipleOfThreeAndFiveReturnsNumber($expected, $num)
    {
        $bhut = new BhutHandler();
        $it = new ItHandler();
        $bhutIt = new BhutItHandler();
        $number = new NumberHandler();

        $bhut
            ->setNext($it)
            ->setNext($bhutIt)
            ->setNext($number);

        echo $num . "\n";
        $this->assertEquals($expected, $bhut->handle($num));
    }

    public function validMultiples()
    {
        $multiples = [];

        for ( $i = 1; $i <= 100; $i++) { 
            if($i % 3 !== 0 AND $i % 5 !== 0) {
                array_push($multiples, [$i, $i]);
            }
        }
        
        return $multiples;
    }
}