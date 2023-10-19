<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diplome extends CI_Model{
    //attributs.
    /*private $id=null;
    private $typeDiplome=null;
    private $niveau=0;
    private $coef=0;
    private $result=[];*/

    //encapsulations.
    /*public function setId($value){
      $this->id=$value;
    }
    public function setTypeDiplome($value){
      $this->typeDiplome=$value;
    }
    public function setNiveau($value){
      $this->niveau=$value;
    }
    public function setCoef($value){
      if($value<0){
        throw new \Exception("Exception:coeficient negative invalide", 1);
      }
      $this->coef=$value;
    }*/

    /*public function Id(){
      return $this->id;
    }
    public function TypeDiplome(){
      return $this->typeDiplome;
    }
    public function Niveau(){
      return $this->niveau;
    }
    public function Coef(){
      return $this->coef;
    }

    //functions.
    public function getDiplomes(){
      $query=null;
      $etat=0;
      try {
        $this->load->database();
        $query=$this->db->query("SELECT * FROM Diplome ORDER BY niveau DESC");
        $results=$query->result();
        foreach($results AS $result){
          $diplome=new Diplome();
          $diplome->constructor($result->id,$result->typediplome,0,$result->niveau);
          $this->result[]=$diplome;
        }
      } catch (\Exception $e) {
        throw $e;
      }finally{
        if($query!=null){
          $query->free_result();
          $this->db->close();
        }
      }
      return $this->result;
    }*/

    //constructor.
    /*public function constructor($id,$name,$coef,$niveau){
      try {
        $this->setId($id);
        $this->setTypeDiplome($name);
        $this->setCoef($coef);
        $this->setNiveau($niveau);
      } catch (\Exception $e) {
        throw $e;
      }
    }*/

    /*public function __construct(){
      parent::__construct();
    }*/

    public function selection(){
        $r = $this->db->query('select * from diplome');
        return $r->result();    
    }

    public function selectDesc($id){
        $r = $this->db->query("SELECT * FROM diplome ORDER BY niveau desc LIMIT '$id'");
        return $r->result();  
    }
  }

