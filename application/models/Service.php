<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Model {

    public function insertion($nom){
        $data=array(
            'nom' => $nom
        );
        $this->db->insert('service', $data);
    }
    
    public function selection(){
        $r = $this->db->query('select * from service');
        return $r->result();    
    }

}