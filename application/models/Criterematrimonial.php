<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Criterematrimonial extends CI_Model {

    public function insertion($coefMatrimonial, $idMatrimonial, $idBesoin, $idService){
        $data=array(
            'coefmatrimonial' => $coefMatrimonial,
            'idmatrimonial' => $idMatrimonial,
            'idbesoin' => $idBesoin,
            'idservice' => $idService
        );
        $this->db->insert('criterematrimonial', $data);
    }
    
    public function selection(){
        $r = $this->db->query('select * from criterematrimonial');
        return $r->result();    
    }

}