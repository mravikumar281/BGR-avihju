<?php 
	class Feecom extends CI_Controller{
		public function index(){
			$this->load->view('fee_comm/home');
		}
		public function ann1(){
			$this->load->view('fee_comm/ann1');
		}
		public function ann2(){
			$this->load->view('fee_comm/ann2');
		}
		public function ann3(){
			$this->load->view('fee_comm/bootformtry');
		}
	}
	?>