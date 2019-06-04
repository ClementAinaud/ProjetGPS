<?php

class Model_Etapes extends CI_Model{
    
    function getEtapes(){
        $sql = $this->db->query('SELECT * FROM etape');
        return $sql->result();
    }
   public function getLongueur() {
        $sql = $this->db->query('SELECT SUM(LONGUEUR_ETAPE) FROM `etape`');
                return $sql->result();
    }
}