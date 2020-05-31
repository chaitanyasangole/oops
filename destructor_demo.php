<?php 
	/*
		Destructor : 
				Destructor method is function which call automatically 
				when object is destructed or script ends. 

				We can call explicitly by assigning null value to object.
	*/

	Class DestructorDemo
	{
		protected $name;
		protected $roll;
		
		function __construct()
		{
			static $count=0;
			$count++;
			echo "Constructor Called $count<br>";
		}

		function __destruct()
		{
			static $count=0;
			$count++;
			echo "Destructor Called $count<br>";
		}
	}
	
	$obj1=new DestructorDemo();
	$obj1=null;
	$obj2=new DestructorDemo();
?>
