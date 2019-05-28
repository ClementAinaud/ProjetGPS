<?php
class Ctrl_Accueil extends CI_Controller{
    
    function index(){
        $this->load->view("v_Accueil");
                
    }
    function rechercheItineraire(){
    
      $this->load->model('Model_Itineraire');
       $data['lesVilles'] = $this->Model_Itineraire->getLesVilles();
        
        $this->load->model('Model_Preferences');
        $data['lesPreferences'] = $this->Model_Preferences->getPreferences();
        $this->load->view("v_RechercheItineraire",$data);
        
    }
    function suiviTrajet(){
        $this->load->view("v_SuiviTrajet");
    }
}