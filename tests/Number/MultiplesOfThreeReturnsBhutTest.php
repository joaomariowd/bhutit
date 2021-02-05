<?php
use PHPUnit\Framework\TestCase;
use App\Services\ChainOfHandlers;

final class MultiplesOfThreeReturnsBhutTest extends TestCase {

    /**
     * @dataProvider validMultiples
     */
    public function testMultipleOfThreeReturnsBhut($expected, $num)
    {
        $chain = ChainOfHandlers::get();

        echo $num . "\n";
        $this->assertEquals($expected, $chain->handle($num));
    }

    public function validMultiples()
    {
        $multiples = [];

        for ( $i = 1; $i <= 100; $i++) { 
            if($i % 3 === 0 AND $i % 5 !== 0) {
                array_push($multiples, ['BHUT', $i]);
            }
        }
        
        return $multiples;
    }

}