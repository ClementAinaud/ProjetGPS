<?php
class Ctrl_Accueil extends CI_Controller{
    
    function index(){
        $this->load->view("v_Accueil");
                
    }
    function rechercheItineraire(){
      
      $this->load->model('Model_Itineraire');
       $data['lesVillesD'] = $this->Model_Itineraire->getLesVillesD();
       
       $data['lesVillesA'] = $this->Model_Itineraire->getLesVillesD();
       
       $this->load->model('Model_Ville');
       $data['laVille'] = $this->Model_Ville->getVille();
        
        $this->load->model('Model_Preferences');
        $data['lesPreferences'] = $this->Model_Preferences->getPreferences();
        
        $this->load->view("v_RechercheItineraire",$data);
        
    }
    public function suiviTrajet(){
        $villeDepart = $_GET['villeDepart'];
        $villeArrivee = $_GET['villeArrivee'];
        $radar = $_GET ['radar'];
         $this->load->model('Model_Itineraire');
       $data['lesVilles'] = $this->Model_Itineraire->getLesVillesD();
       $data['troncon'] = $this->Model_Itineraire->getTroncon("$villeDepart","$villeArrivee");
        $this->load->view("v_SuiviTrajet",$data);
    
      $this->load->model('Model_Itineraire');
       $data['lesVilles'] = $this->Model_Itineraire->getLesVilles();
       
       $this->load->model('Model_Ville');
       $data['laVille'] = $this->Model_Ville->getVille();
        
        $this->load->model('Model_Preferences');
        $data['lesPreferences'] = $this->Model_Preferences->getPreferences();
        $this->load->view("v_RechercheItineraire",$data);
        
    }
    function suiviTrajet(){
         $this->load->model('Model_Itineraire');
       $data['lesVilles'] = $this->Model_Itineraire->getLesVilles();
       
       $this->load->model('Model_Ville');
       $data['laVille'] = $this->Model_Ville->getVille();
        
        $this->load->model('Model_Preferences');
        $data['lesPreferences'] = $this->Model_Preferences->getPreferences();
        $this->load->view("v_SuiviTrajet",$data);
    }
    
    function parametres(){
       $this->load->model('Model_Ville');
       $data['laVille'] = $this->Model_Ville->getVille();
        $this->load->view("v_Parametres",$data);
    }
}
