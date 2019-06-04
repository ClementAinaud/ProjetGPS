<?php

class Model_SommeConso extends CI_Model{
    

    function getSommeConso(){
     $sql = $this->db->query('SELECT ID_ETAPE, SUM(CONSOMATION_ETAPE) FROM etape');
     return $sql->result();
    }
   
}