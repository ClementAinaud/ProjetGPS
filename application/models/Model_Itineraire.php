<?php

class Model_Itineraire extends CI_Model{
    
    public function getLesVillesD(){
        $sql = $this->db->query('SELECT  * FROM `ville` ');
        return $sql->result();
    }
   public function getLesVillesA(){
        $sql = $this->db->query('SELECT NOM_VILLE FROM `ville`,troncon WHERE VILLEDEDEPART_TRONCON = troncon.VILLEDEDEPART_TRONCON 
AND ville.ID_VILLE = troncon.VILLEDARRIVEE_TRONCON');
        return $sql->result();
    }
    public function getTroncon($villeDepart,$villeArrivee){
        $sql = $this->db->query("SELECT * FROM troncon
WHERE   VILLEDEDEPART_TRONCON = '".$villeDepart."'
        AND  VILLEDARRIVEE_TRONCON = '".$villeArrivee."'");
        return $sql->result();
    }
    
    }