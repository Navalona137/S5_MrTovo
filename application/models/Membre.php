<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Membre extends CI_Model {

    public function insertion($idService, $nom, $prenom, $dtn, $genre, $email, $mdp){
        $data=array(
            'idservice' => $idService,
            'nom' => $nom,
            'prenom' => $prenom,
            'dtn' => $dtn,
            'genre' => $genre,
            'email' => $email,
            'mdp' => $mdp
        );
        $this->db->insert('membre', $data);
    }
    
    public function selection(){
        $r = $this->db->query('select * from membre');
        return $r->result();    
    }

    public function selectMembre($id){
        $r = $this->db->query("select * from membre where id='$id'");
        return $r->row_array();
    }
}