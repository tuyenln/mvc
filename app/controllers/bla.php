<?php
 /**
 	* 
 	*/
 	class Bla extends Controller
 	{
 		
 		function __construct()
 		{
 			# code...
 		}

 		public function index()
 		{
 			echo 'bla/index';
 		}

 		public function test($p1,$p2)
 		{
 			echo $p1 . $p2;
 		}
 	}	
?>