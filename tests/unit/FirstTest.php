<?php

use PHPUnit\Framework\TestCase;

/**
 * Test case
 */
class FirstTest extends TestCase
{
    /**
     * Multiplication of two
     * 
     * @test
     */
    public function multiplication_of_two_number()
    {
    	$a = 4;

    	$b = 5;

    	$c = $a * $b;

    	$this->assertEquals($c, 20);

    	// $this->assertTrue(true);
        
    }
}