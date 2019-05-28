<?php

class Model_Itineraire extends CI_Model{
    
    function getLesVilles(){
        $sql = $this->db->query('SELECT * FROM troncon');
        return $sql->result();
    }
   
}