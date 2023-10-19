<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CRecrutement extends CI_Controller {
	public function home(){
		$data['nationalite'] = $this->Nationalite->selection();
		$data['content'] = 'front_office/recrutement';
		$this->load->view('front_office/template', $data);
	}

	public function insertion(){
		$nom = $this->input->post('nom');
		$prenom = $this->input->post('prenom');
		$dtn = $this->input->post('dtn');
		$genre = $this->input->post('genre');
		$adresse = $this->input->post('adresse');
		$situation = $this->input->post('situation');
		$nationalite = $this->input->post('nationalite');
		$this->Personne->insertion($nom, $prenom, $dtn, $genre, $adresse, $situation, $nationalite);
		$data['content'] = 'front_office/experience';
		$this->load->view('front_office/template', $data);	
	}

	public function insertion2(){
		$annee = $this->input->post('annee');
		$diplome = $this->input->post('diplome');
		$idPersonne = $this->Personne->idDern();
		$this->Experience->insertion($idPersonne, $diplome, $annee);
		$data['content'] = 'front_office/home';
		$this->load->view('front_office/template', $data);
	}
}
