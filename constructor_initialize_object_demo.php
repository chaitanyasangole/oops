<?php 
/*
	Constructor can give default values for objects when object is created.
*/
	class ConstructorDefaultInitializeObject
	{
		protected $name;
		protected $roll;
		protected $per;

		public function __construct()
		{
			$this->name='chaitany';
			$this->roll=25;
			$this->per=75.80;
		}
		
	}
	$obj1=new ConstructorDefaultInitializeObject();
	$obj2=new ConstructorDefaultInitializeObject();
	$obj3=new ConstructorDefaultInitializeObject();
	var_dump($obj1);
	var_dump($obj2);
	var_dump($obj3);
?>
