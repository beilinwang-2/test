<?php
class user
{
	
	protected $id;
	
	protected $name;
	
	protected $age;
	
	protected function __construct($id, $name, $age)
	{
		$this->id = $id;
		
		$this->name = $name;
		
		$this->age = $age;
	}
	
	protected function __set($name, $args)
	{
		
	}
}