<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resultat extends CI_Model {

    public function insertion($nom, $prenom, $score){
        $data=array(
            'nom' => $nom,
            'prenom' => $prenom,
            'score' => $score
        );
        $this->db->insert('resultat', $data);
    }
    
    public function selection(){
        $r = $this->db->query('select * from resultat');
        return $r->result();    
    }

}