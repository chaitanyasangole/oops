<?php 
	/*
		Protected access specifier :    When we use protected specifier those members are not accessible outside
						the class. It can be accessible within same class & sub-classes.
	*/
	class ProtectedDemo
	{
		protected $name;
		protected $roll;

		public function demoMethod1($n,$r)
		{
			echo '<br>In Demo method1<br>';
			$this->demoMethod2($n,$r);
			$this->demoMethod3();
		}
		
		protected function demoMethod2($name,$roll)
		{
			echo 'In Demo method2<br>';
			$this->name=$name;
			$this->roll=$roll;
		}
		
		protected function demoMethod3()
		{
			echo 'In Demo method3<br>';
			echo "Name:".$this->name.",Roll:".$this->roll.'<br>';
		}
	}
	//	$obj->demoMethod2('cs',85); It cannot call because it is protected method	
	$obj=new ProtectedDemo();
	var_dump($obj);
	$obj->demoMethod1('chaitany',85);	
	var_dump($obj);

	echo '<br><br>';
	
	$obj2=new ProtectedDemo();
	var_dump($obj2);
	$obj2->demoMethod1('sangole',45);	
	var_dump($obj2);

?>
