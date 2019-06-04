<?php

class Model_Somme extends CI_Model{
    
    function getSommeEtape(){
        $sql = $this->db->query('SELECT ID_ETAPE, SUM(LONGUEUR_ETAPE) FROM etape');
        return $sql->result();
    }
    
    function getSommeCoso(){
     $sql = $this->db->query('SELECT ID_ETAPE, SUM(CONSOMATION_ETAPE) FROM etape');
     return $sql->result();
    }
   
}