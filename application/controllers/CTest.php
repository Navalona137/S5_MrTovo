<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CTest extends CI_Controller {
	public function home(){
		$data['questions'] = $this->Question->selection();
		$data['reponses'] = $this->Reponse->selection();
		$data['content'] = 'front_office/test';
		$this->load->view('front_office/template', $data);
	}

	public function verification(){
		$numero = $this->input->post('numero');
		$questions = $this->Question->selection();
		$score = 0;
		foreach($questions as $q) {
			$name = $this->input->post($q->id);
			if($name == 1){
				$score = $score + $q->coeff;
			}
		}
		$personne = $this->Personne->selectPersonne($numero);
		$this->Resultat->insertion($personne['nom'], $personne['prenom'], $score);
		$data['content'] = 'front_office/home';
		$this->load->view('front_office/template', $data);
	}	

	public function resultat(){
		$data['resultat'] = $this->Resultat->selection();
		$data['content'] = 'front_office/resultat';
		$this->load->view('front_office/template', $data);	
	}
}
