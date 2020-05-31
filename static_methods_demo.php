<?php 
	/*
		Static Methods : static methods can be called directly without instance of class.		
		By using static keyword you can create the static method.

		We can access static methods in same class using self keyword.
		Syntax : self::staticmethodname;
		e.g. : self::welcome();
	*/

	Class StaticMethods
	{
		static function getStaticMethods()
		{
			echo 'IN static methods';
		}
	}
	
	StaticMethods::getStaticMethods();
?>
