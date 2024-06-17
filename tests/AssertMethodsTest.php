<?php
//Šis testas naudoja skirtingus assert metodus,
//tokius kaip assertTrue, assertFalse, assertEquals,
// assertGreaterThan, assertLessThan ir assertArrayHasKey.
use PHPUnit\Framework\TestCase;

class AssertMethodsTest extends TestCase
{
    /**
     * @test
     */
    public function testAssertMethods()
    {
        // assertTrue and assertFalse
        $this->assertTrue(true);
        $this->assertFalse(false);

        // assertEquals
        $this->assertEquals(5, 2 + 3);

        // assertGreaterThan and assertLessThan
        $this->assertGreaterThan(10, 15);
        $this->assertLessThan(20, 10 + 5);

        // assertArrayHasKey
        $array = ['key' => 'value'];
        $this->assertArrayHasKey('key', $array);
    }
}
