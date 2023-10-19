<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personne extends CI_Model {

    public function insertion($nom, $prenom, $dtn, $genre, $adresse, $situationmatrimonial, $nationalite){
        $data=array(
            'nom' => $nom,
            'prenom' => $prenom,
            'dtn' => $dtn,
            'genre' => $genre,
            'adresse' => $adresse,
            'situationmatrimonial' => $situationmatrimonial,
            'nationalite' => $nationalite
        );
        $this->db->insert('personne', $data);
    }
    
    public function selection(){
        $r = $this->db->query('select * from personne');
        return $r->result();    
    }

    public function idDern(){
        $r = $this->db->query('select id from personne order by id desc limit 1');
        return $r->row_array()['id'];
    }

    public function selectPersonne($id){
        $r = $this->db->query("select * from personne where id='$id'");
        return $r->row_array();
    }
}