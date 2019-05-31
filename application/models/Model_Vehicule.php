<?php



class Model_Vehicule extends CI_Model{
    
    function getVehicule(){
        $sql = $this->db->query('SELECT * FROM vehicule ');
        return $sql->result();
    }
}