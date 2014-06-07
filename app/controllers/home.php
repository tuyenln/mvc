<?php
	
	/**
	* 
	*/
	class Home extends Controller
	{
		
		function __construct()
		{
			
		}

		public function index()
		{
			// echo "home/index";
			$x = $this->model('user');
			//echo $x->test();
			$data['ten'] = 'lol';
			$this->view('home/tst',$data);
		}
	}
?>