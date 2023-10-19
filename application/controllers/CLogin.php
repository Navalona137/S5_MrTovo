<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CLogin extends CI_Controller {
	public function verification($idService=""){
		$email = $this->input->post('email');
        $mdp = $this->input->post('mdp');

        $membre = $this->Membre->selection();
        
        foreach($membre as $m) {
        	if($idService == $m->idservice){
        		if($email == $m->email && $mdp == $m->mdp){
		            $this->session->set_userdata('user', $m->id);
		            $this->session->set_userdata('service', $m->idservice); 
		            redirect(base_url('/cservice/home'));
		        }
        	}	        
        }
		redirect(base_url('/cservice'));
	}

	public function exit(){
		$this->session->unset_userdata('user');
		$this->session->unset_userdata('service');         
		redirect(base_url('/cservice'));		
	}
    
}
