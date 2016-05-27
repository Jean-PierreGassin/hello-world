<?php

namespace Jean_PierreGassin\HelloWorld;

/**
 * A class to say hello
 */
class HelloWorld
{
	/** @var string $name Who to say hello to */
	protected $name;

	/**
	 * Create a new hello world class
	 *
	 * @param string $name Who to say hello to, defaults to 'world'
	 */
	public function __construct($name = 'world')
	{
		$this->setName($name);
	}

	/**
	 * Get name
	 *
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Set name
	 *
	 * @param string $name Set name of who we are saying hello to
	 * @return void
	 */
	public function setName($name)
	{
		$this->name = $name;
	}

	/**
	 * Say Hello to name
	 *
	 * @return void
	 */
	public function say()
	{
		echo "Hello $this->name!";
	}
}
