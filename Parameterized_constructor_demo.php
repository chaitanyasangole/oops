<?php
	/*
		Through parameterized constructor you can give 
		different values to different objects.
	*/
	class ConstructorDiffValueToObject
	{
		protected $name;
		protected $roll;
		protected $per;
		
		function __construct($name,$roll,$per)
		{
			$this->name=$name;
			$this->roll=$roll;
			$this->per=$per;
		}
	}
	$obj1=new ConstructorDiffValueToObject('cs',36,54.28);
	$obj2=new ConstructorDiffValueToObject('sc',34,45.20);
	$obj3=new ConstructorDiffValueToObject('bc',67,78.65);

	var_dump($obj1);
	var_dump($obj2);
	var_dump($obj3);
?>
