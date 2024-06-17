<?php
//Šis testas tikrina, ar testuojama funkcija grąžina rezultatą,
//kuris yra didesnis arba lygus 100, ir jis yra žymimas kaip @group performance.


use PHPUnit\Framework\TestCase;

class PerformanceTest extends TestCase
{
    /**
     * @test
     * @group performance
     */
    public function testPerformance()
    {
        $this->assertGreaterThanOrEqual(100, $this->runPerformanceTest());
    }

    private function runPerformanceTest()
    {
        // Simulate a time-consuming operation
        usleep(200000); // 200ms
        return 150; // Mocked performance value
    }
}
