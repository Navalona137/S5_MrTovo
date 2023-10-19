<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reponse extends CI_Model {

    public function insertion($idQuestion, $reponse){
        $data=array(
            'idquestion' => $idQuestion,
            'reponse' => $reponse
        );
        $this->db->insert('reponse', $data);
    }
    
    public function selection(){
        $r = $this->db->query('select * from reponse');
        return $r->result();    
    }

}