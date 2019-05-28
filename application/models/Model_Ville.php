<?php

class Model_Ville extends CI_Model{
    
    function getVille(){
        $sql = $this->db->query('SELECT * FROM ville');
        return $sql->result();
    }
   
}