<?php



class Model_Vehicule extends CI_Model{
    
    function getVehicule(){
        $sql = $this->db->query('SELECT * FROM vehicule ');
        return $sql->result();
    }
    function getVehiculeinfo($vehicule){
        $sql = $this->db->query("SELECT * FROM vehicule WHERE ID_VEHICULE = '".$vehicule."'" );
        return $sql->result();
    }
    function addVehicule($data){
         $this->db->insert("vehicule",$data);
    }
}
