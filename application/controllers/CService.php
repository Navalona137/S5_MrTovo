<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CService extends CI_Controller {
	public function index(){
		$data['services'] = $this->Service->selection();
		$this->load->view('back_office/index', $data);
	}

	public function login($id=""){
		$data['idservice'] = $id;
		$this->load->view('v_login', $data);
	}

	public function home(){
		$id = $_SESSION["user"];
		$data['membre'] = $this->Membre->selectMembre($id);
		$data['idService'] = $_SESSION["service"];
		$data['content'] = 'back_office/home';
		$this->load->view('back_office/template', $data);
	}
}
