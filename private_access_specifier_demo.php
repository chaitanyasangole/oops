<?php 
	/*
		private access specifier: When we use private keyword to members
		It is accessible inside same class only.
	*/
	Class PrivateDemo
	{
		private $name;
		private $roll;
		
		function demoMethod1($n,$r)
		{
			echo '<br>In public Demo method<br>';
			
			$this->name=$n;
			$this->roll=$r;

			$this->demoMethod2($n,$r);
			$this->show();
		}
		
		private function demoMethod2()
		{			
			echo 'In private Demo method<br>';
			
		}
		private function show()
		{
			echo 'Name='.$this->name.', Roll='.$this->roll.'<br>';
		}
	}
	$obj=new PrivateDemo();
	$obj->demoMethod1('chaitany',45);	
	var_dump($obj);

	$obj1=new PrivateDemo();
	$obj1->demoMethod1('sangole',96);	
	var_dump($obj1);
	/*
	$obj->name='chaitany';
	$obj->roll=86
	*/
	
	
?>
