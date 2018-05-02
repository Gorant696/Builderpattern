<?php
namespace Test;


class AddressBuilder implements BuilderInterface
{
	public $street;
	public $town;

	public function __construct ($street, $town)
	{
		$this->street = $street;
		$this->town = $town;
	}


	public function setData() {
		echo "Hello! I live in ".$this->town." in street ".$this->street;
	}

	public function getData() {
		return $this->setData();
	}
}