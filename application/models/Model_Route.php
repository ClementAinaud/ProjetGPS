<?php

class Model_Route extends CI_Model{
    
    function getRoute(){
        $sql = $this->db->query('SELECT * FROM route');
        return $sql->result();
    }
   
}