<?php 
/*
	Constructor :- 
			It is a member function which gets called implicitly.
			Use : It is used for giving values to objects.
*/ 
	Class ConstructorDemo
	{		
		function __construct()
		{
			static $i=0;
			$i++;
			echo "Constructor Call $i<br>" ;
		}
	}
	$obj1=new ConstructorDemo();
	
	$obj2=new ConstructorDemo();
?>
