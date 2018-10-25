<?php 
	class Ravi extends CI_Controller{
		public function index(){
			echo "index function called !!!";
		}
		public function hello(){
			#echo "hello function is called !!!";
			$this->load->view('ravi');
		}
	}
	?>