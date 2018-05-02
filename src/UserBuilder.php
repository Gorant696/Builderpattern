<?php
namespace Test;


class UserBuilder implements BuilderInterface
{
	public $name;
	public $surname;

	public function __construct ($name, $surname)
	{
		$this->name = $name;
		$this->surname = $surname;
	}

	public function setData() {
		echo "Hello! My name is ".$this->name." and my surname is ".$this->surname;
	}

	public function getData() {
		return $this->setData();
	}
}