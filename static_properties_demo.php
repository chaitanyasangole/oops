<?php 
	/*
		Class can have static & non-static properties & methods.

		Static Property :-
		static property declared with static keyword.
		Static property can be access without creating an instance of class.
		static property share with all objects.
		
		syntax : classname::$staticpropertyname;
		e.g. : StaticPropertyDemo::$name;
	
		We can access static properties in same class using self keyword.
		Syntax : self::$staticpropertyname;
		e.g. : self::$name;
	*/

	class StaticPropertyDemo
	{
		static $name='chaitany';
		static $roll=56;
		static $class='MCA';
		
/*		function giveValue($name,$roll)
		{
			$self::name=$name;
			$self::roll=$roll;
		}
*/
		function getValue()
		{
			return self::$name;
		}
	}
	echo 'Access Static properties without instance: <br>';
	echo 'Static ='.StaticPropertyDemo::$class.'<br>';
	$obj=new StaticPropertyDemo;
//	$obj->giveValue('chaitany',34);
	echo 'name='.StaticPropertyDemo::$name.'<br>';
	echo 'value='.StaticPropertyDemo::$roll.'<br>';
	
	echo 'Access Static properties with instance: <br>';
	$obj1=new StaticPropertyDemo;
	echo $obj1->getValue();
?>
