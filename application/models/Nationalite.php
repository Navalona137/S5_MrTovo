<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nationalite extends CI_Model {

    public function insertion($nom){
        $data=array(
            'nom' => $nom
        );
        $this->db->insert('nationalite', $data);
    }
    
    public function selection(){
        $r = $this->db->query('select * from nationalite');
        return $r->result();    
    }

}