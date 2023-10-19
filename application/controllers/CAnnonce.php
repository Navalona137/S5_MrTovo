<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CAnnonce extends CI_Controller {
	public function new($idService=""){
		$id = $_SESSION["user"];
		$data['idService'] = $idService;
		$data['diplomes'] = $this->Diplome->selection();
		$data['membre'] = $this->Membre->selectMembre($id);
		$data['content'] = 'back_office/formBesoin';
		$this->load->view('back_office/template', $data);
	}

    public function insertion($idService=""){
    	$id = $_SESSION["user"];
    	$nbrePersonne = $this->input->post('nbrePersonne');
		$diplome = $this->input->post('diplome');
		$nbreExperience = $this->input->post('nbreExperience');
		$nbreHeure = $this->input->post('nbreHeure');
		$description = $this->input->post('description');
		$date = $this->input->post('dates');
		$this->Besoin->insertion($nbrePersonne, $nbreExperience, $nbreHeure, $description, $date, $diplome, $idService);
		$besoin = $this->Besoin->idDern();
		$data['idService'] = $idService;
		$data['idBesoin'] = $besoin;
		$data['diplomes'] = $this->Diplome->selection();
		$data['nationalite'] = $this->Nationalite->selection();
		$data['membre'] = $this->Membre->selectMembre($id);
		$data['content'] = 'back_office/formCritere';
		$this->load->view('back_office/template', $data);
    }

    public function insertionCritere($idService="", $idBesoin=""){
    	$doctorat = $this->input->post('doctorat');
		$master = $this->input->post('master');
		$licence = $this->input->post('licence');
		$bacc = $this->input->post('bacc');
		$bepc = $this->input->post('bepc');
		$cepe = $this->input->post('cepe');

		$this->Criterediplome->insertion($doctorat, 1, $idBesoin, $idService);
		$this->Criterediplome->insertion($master, 2, $idBesoin, $idService);
		$this->Criterediplome->insertion($licence, 3, $idBesoin, $idService);
		$this->Criterediplome->insertion($bacc, 4, $idBesoin, $idService);
		$this->Criterediplome->insertion($bepc, 5, $idBesoin, $idService);
		$this->Criterediplome->insertion($cepe, 6, $idBesoin, $idService);
		
		$homme = $this->input->post('homme');
		$femme = $this->input->post('femme');

		$this->Criteregenre->insertion($homme, 1, $idBesoin, $idService);
		$this->Criteregenre->insertion($femme, 2, $idBesoin, $idService);

		$cinqans = $this->input->post('5ans');
		$unans = $this->input->post('1ans');
		$pasexperience = $this->input->post('pasexperience');

		$this->Critereexperience->insertion($cinqans, 1, $idBesoin, $idService);
		$this->Critereexperience->insertion($unans, 2, $idBesoin, $idService);
		$this->Critereexperience->insertion($pasexperience, 3, $idBesoin, $idService);

		$malagasy = $this->input->post('Malagasy');
		$francais = $this->input->post('Francais');
		$americain = $this->input->post('Americain');
		$coreen = $this->input->post('Coreen');
		$chinois = $this->input->post('Chinois');
		
		$this->Criterenationalite->insertion($malagasy, 1, $idBesoin, $idService);
		$this->Criterenationalite->insertion($francais, 2, $idBesoin, $idService);
		$this->Criterenationalite->insertion($americain, 3, $idBesoin, $idService);
		$this->Criterenationalite->insertion($coreen, 4, $idBesoin, $idService);
		$this->Criterenationalite->insertion($chinois, 5, $idBesoin, $idService);

		$marie = $this->input->post('marie');
		$celibataire = $this->input->post('celibataire');

		$this->Criterematrimonial->insertion($marie, 1, $idBesoin, $idService);
		$this->Criterematrimonial->insertion($celibataire, 2, $idBesoin, $idService);

		$id = $_SESSION["user"];
		$data['idService'] = $idService;
		$data['diplomes'] = $this->Diplome->selection();
		$data['membre'] = $this->Membre->selectMembre($id);
		$data['content'] = 'back_office/formBesoin';
		$this->load->view('back_office/template', $data);	
    }
}
