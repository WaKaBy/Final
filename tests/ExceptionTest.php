<?php
//Šis testas tikrina, ar tinkamai apdorojami išimtys,
//kai išimtis sukelia \InvalidArgumentException.
use PHPUnit\Framework\TestCase;

class ExceptionTest extends TestCase
{
    /**
     * @test
     */
    public function testExceptionHandling()
    {
        $this->expectException(\InvalidArgumentException::class);
        throw new \InvalidArgumentException('Test exception');
    }
}
