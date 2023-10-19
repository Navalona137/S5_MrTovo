<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Criterediplome extends CI_Model {

    public function insertion($coefdiplome, $iddiplome, $idBesoin, $idService){
        $data=array(
            'coefdiplome' => $coefdiplome,
            'iddiplome' => $iddiplome,
            'idbesoin' => $idBesoin,
            'idservice' => $idService
        );
        $this->db->insert('criterediplome', $data);
    }
    
    public function selection(){
        $r = $this->db->query('select * from criterediplome');
        return $r->result();    
    }

}