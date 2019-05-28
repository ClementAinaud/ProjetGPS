<?php



class Model_Preferences extends CI_Model{
    
    function getPreferences(){
        $sql = $this->db->query('SELECT * FROM preferences ');
        return $sql->result();
    }
}