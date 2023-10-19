<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index(){
		$data['besoin'] = $this->Besoin->selection();
		$data['content'] = 'front_office/home';
		$this->load->view('front_office/template', $data);
	}

	
}
