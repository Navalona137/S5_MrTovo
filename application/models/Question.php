<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Question extends CI_Model {

    public function insertion($question, $coeff){
        $data=array(
            'question' => $question,
            'coeff' => $coeff
        );
        $this->db->insert('question', $data);
    }
    
    public function selection(){
        $r = $this->db->query('select * from question');
        return $r->result();    
    }

}