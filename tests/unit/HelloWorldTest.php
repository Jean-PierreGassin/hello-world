<?php

use Jean_PierreGassin\HelloWorld\HelloWorld;

class HelloWorldTest extends PHPUnit_Framework_TestCase
{
	public function testSayPrintsHelloWorld()
	{
		$this->expectOutputString('Hello world!');
		(new HelloWorld())->say();
	}

	public function testConstructorSetsName()
	{
		$name = 'name';
		$helloWorld = new HelloWorld($name);

		$this->assertAttributeEquals($name, 'name', $helloWorld);
	}

	public function testSetNameSetsName()
	{
		$name = 'name';
		$helloWorld = new HelloWorld();

		$helloWorld->setName($name);
		$this->assertAttributeEquals($name, 'name', $helloWorld);
	}

	public function testGetNameGetsName()
	{
		$name = 'world';
		$helloWorld = new HelloWorld($name);

		$this->assertEquals($name, $helloWorld->getName());
	}
}
