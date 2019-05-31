<?php

class Model_Etapes extends CI_Model{
    
    function getEtapes(){
        $sql = $this->db->query('SELECT * FROM etape');
        return $sql->result();
    }
   
}