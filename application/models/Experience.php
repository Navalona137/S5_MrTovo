<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Experience extends CI_Model {

    public function insertion($idPersonne, $diplome, $annee){
        $data=array(
            'idPersonne' => $idPersonne,
            'diplome' => $diplome,
            'annee' => $annee
        );
        $this->db->insert('experience', $data);
    }
    
    public function selection(){
        $r = $this->db->query('select * from experience');
        return $r->result();    
    }

}