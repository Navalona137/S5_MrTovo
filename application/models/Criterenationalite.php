<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Criterenationalite extends CI_Model {

    public function insertion($coefnationalite, $idnationalite, $idBesoin, $idService){
        $data=array(
            'coefnationalite' => $coefnationalite,
            'idnationnalite' => $idnationalite,
            'idbesoin' => $idBesoin,
            'idservice' => $idService
        );
        $this->db->insert('criterenationalite', $data);
    }
    
    public function selection(){
        $r = $this->db->query('select * from criterenationalite');
        return $r->result();    
    }

}