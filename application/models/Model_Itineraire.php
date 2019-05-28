<?php

class Model_Itineraire extends CI_Model{
    
    function getLesVilles(){
        $sql = $this->db->query('select * from ville');
        return $sql->result();
    }
}