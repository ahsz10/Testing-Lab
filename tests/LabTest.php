<?php

use PHPUnit\Framework\TestCase;

require "./src/Lab.php";

class LabTest extends TestCase{
    
    public function testFactorial() {
        $math = new Lab2();

        $this->assertEquals(1, $math->factorial(0));
        $this->assertEquals(1, $math->factorial(1));
        $this->assertEquals(120, $math->factorial(5));
        $this->assertEquals(24, $math->factorial(4));
        $this->assertEquals(null, $math->factorial(1.5));
        $this->assertEquals(null, $math->factorial(-3));
        $this->assertEquals(null, $math->factorial(false));
        $this->assertEquals(null, $math->factorial('abc'));

    }
}

?>