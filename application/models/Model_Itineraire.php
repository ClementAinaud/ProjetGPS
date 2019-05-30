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
    public function getTronconRapide($villeDepart,$villeArrivee,$radar,$touristique,$payant,$station){
        $sql = $this->db->query("SELECT * FROM troncon
WHERE   VILLEDEDEPART_TRONCON = '".$villeDepart."'
        AND  VILLEDARRIVEE_TRONCON = '".$villeArrivee."'
            AND RADAR_TRONCON = '".$radar."'
                AND PAYANT_TRONCON='".$payant."'
                    AND TOURISTIQUE_TRONCON = '".$touristique."'
                        AND STATIONSERVICE_TRONCON  = '".$station."'
                            AND VITESSE_TRONCON = (SELECT MAX(VITESSE_TRONCON) FROM troncon)");
        return $sql->result();
    }
    }
    function getLesVilles(){
        $sql = $this->db->query('SELECT * FROM troncon');
        return $sql->result();
    }
   

