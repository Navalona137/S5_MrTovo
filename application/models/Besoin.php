<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Besoin extends CI_Model {

    public function insertion($nbrRecruter, $experienceMin, $heureDeTravail, $description, $date, $diplomeMin, $idService){
        $data=array(
            'nbrrecruter' => $nbrRecruter,
            'experiencemin' => $experienceMin,
            'heuredetravail' => $heureDeTravail,
            'description' => $description,
            'dates' => $date,
            'diplomemin' => $diplomeMin,
            'idservice' => $idService
        );
        $this->db->insert('besoin', $data);
    }
    
    public function selection(){
        $r = $this->db->query('select * from besoin');
        return $r->result();    
    }

    public function idDern(){
        $r = $this->db->query('select id from besoin order by id desc limit 1');
        return $r->row_array()['id'];
    }
}