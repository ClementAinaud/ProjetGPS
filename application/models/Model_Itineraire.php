<?php

class Model_Itineraire extends CI_Model{
    
    public function getLesVillesD(){
        $sql = $this->db->query('SELECT  * FROM `ville` ');
        return $sql->result();
    }
   public function getLesVillesA($villeDepart){
        $sql = $this->db->query("SELECT NOM_VILLE FROM `ville`,troncon 
                WHERE troncon.VILLEDEDEPART_TRONCON  = '".$villeDepart."'
AND ville.ID_VILLE = troncon.VILLEDARRIVEE_TRONCON");
        return $sql->result();
    }
    public function getTroncon($villeDepart,$villeArrivee){
        $sql = $this->db->query("SELECT * FROM troncon
                WHERE   VILLEDEDEPART_TRONCON = '".$villeDepart."'
        AND  VILLEDARRIVEE_TRONCON = '".$villeArrivee."'");
        return $sql->result();
    }
    public function getTronconRapide($villeDepart,$villeArrivee,$radar,$payant,$station){
        $sql = $this->db->query("SELECT * FROM troncon
WHERE   VILLEDEDEPART_TRONCON = '".$villeDepart."'
        AND  VILLEDARRIVEE_TRONCON = '".$villeArrivee."'
            AND RADAR_TRONCON = '".$radar."'
                AND PAYANT_TRONCON='".$payant."'
                        AND STATIONSERVICE_TRONCON  = '".$station."'
                            AND VITESSE_TRONCON = (SELECT MAX(VITESSE_TRONCON) FROM troncon
                            WHERE   VILLEDEDEPART_TRONCON = '".$villeDepart."'
        AND  VILLEDARRIVEE_TRONCON = '".$villeArrivee."'
)");
        return $sql->result();
    }   
    public function getTronconCourt($villeDepart,$villeArrivee,$radar,$payant,$station){
        $sql = $this->db->query("SELECT * FROM troncon
WHERE   VILLEDEDEPART_TRONCON = '".$villeDepart."'
        AND  VILLEDARRIVEE_TRONCON = '".$villeArrivee."'
            AND RADAR_TRONCON = '".$radar."'
                AND PAYANT_TRONCON='".$payant."'
                        AND STATIONSERVICE_TRONCON  = '".$station."'
                            AND LONGUEUR_TRONCON = (SELECT MIN(LONGUEUR_TRONCON) FROM troncon
                            WHERE   VILLEDEDEPART_TRONCON = '".$villeDepart."'
        AND  VILLEDARRIVEE_TRONCON = '".$villeArrivee."'
)");
        return $sql->result();
    } 
    
    function getLesVilles(){
        $sql = $this->db->query('SELECT * FROM troncon');
        return $sql->result();
    }
}
   

