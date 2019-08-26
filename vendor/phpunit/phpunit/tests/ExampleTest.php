<?php
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
	public function testHello() {
        $this->assertEquals('Hello', 'Hell' . 'o');
    }



}