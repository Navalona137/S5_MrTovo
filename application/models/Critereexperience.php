<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Critereexperience extends CI_Model {

    public function insertion($coefexp, $idexperience, $idBesoin, $idService){
        $data=array(
            'coefexp' => $coefexp,
            'idexprience' => $idexperience,
            'idbesoin' => $idBesoin,
            'idservice' => $idService
        );
        $this->db->insert('critereexperience', $data);
    }
    
    public function selection(){
        $r = $this->db->query('select * from critereexperience');
        return $r->result();    
    }

}