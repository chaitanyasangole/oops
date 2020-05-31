<?php 
/*	
	There are three access specifiers available :
	1) public : It is the default access specifiers. It allows members to access from outside of the class.
	2) private : It is the access specifier which allows access members only inside class.
	3) protected : It is the access specifier which allows access members from inside class & from sub-classes.

*/
	Class DefaultAccessSpecifier
	{
		var $name;
		var $roll;
		
		function __construct($name='chaitany',$roll=36)
		{
			$this->name=$name;
			$this->roll=$roll;
		
		}
		function demoMethod1()
		{
			echo 'In Demo method 1';
		}		
		
		function demoMethod2()
		{
			echo 'In Demo method 2';
		}

	}
	
	$obj=new DefaultAccessSpecifier();

	$obj->name='chaitany';
	$obj->roll=48;

	var_dump($obj);
	echo '<br>Name='.$obj->name	.' & Roll='.$obj->roll.'<br>';

	$obj1=new DefaultAccessSpecifier();
	
	$obj->demoMethod1();
	$obj->demoMethod2();

	$obj1->name='jitu';
	$obj1->roll=52;

	var_dump($obj1);
	echo '<br>Name='.$obj1->name.' & Roll='.$obj1->roll.'<br>';
?>
