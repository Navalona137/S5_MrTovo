<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Criteregenre extends CI_Model {

    public function insertion($coefgenre, $idgenre, $idBesoin, $idService){
        $data=array(
            'coefgenre' => $coefgenre,
            'idgenre' => $idgenre,
            'idbesoin' => $idBesoin,
            'idservice' => $idService
        );
        $this->db->insert('criteregenre', $data);
    }
    
    public function selection(){
        $r = $this->db->query('select * from criteregenre');
        return $r->result();    
    }

}