<?php

use PHPUnit\Framework\TestCase;

class ParameterizedTest extends TestCase
{
    /**
     * @test
     * @dataProvider additionProvider
     */
    public function testAdd($a, $b, $expected)
    {
        $this->assertEquals($expected, $a + $b);
    }

    public function additionProvider()
    {
        return [
            [1, 2, 3],
            [0, 0, 0],
            [-1, 1, 0],
            [10, 5, 15],
            [100, -50, 50],
        ];
    }
}
