<?php 

class Products extends CI_Controller{

public function index(){
		$data['name'] = "Mike";
		//Load Views
		$data['main_content'] = 'products';
		$this->load->view('/layouts/main', $data);
	}






}