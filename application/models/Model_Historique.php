
<?php

class Model_Historique extends CI_Model{
    
    function getHistorique(){
        $sql = $this->db->query('SELECT * FROM historique');
        return $sql->result();
    }
    public function getLongueur() {
        $sql = $this->db->query('SELECT SUM(LONGUEUR_HISTORIQUE) FROM `historique`');
                return $sql->result();
    }
   
}