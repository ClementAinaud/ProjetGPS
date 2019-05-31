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
        $touristique = $_GET ['touristique'];
        $payant = $_GET ['payant'];
        $station = $_GET ['station'];
         $this->load->model('Model_Itineraire');
       $data['lesVilles'] = $this->Model_Itineraire->getLesVillesD();
       $data['troncon'] = $this->Model_Itineraire->getTronconRapide("$villeDepart","$villeArrivee",
               "$radar","$payant","$station");
       $data['tronconR'] = $this->Model_Itineraire->getTronconCourt("$villeDepart","$villeArrivee",
               "$radar","$payant","$station");
        $this->load->view("v_SuiviTrajet",$data);
    
      $this->load->model('Model_Itineraire');
       $data['lesVilles'] = $this->Model_Itineraire->getLesVillesD();
       
       $this->load->model('Model_Ville');
       $data['laVille'] = $this->Model_Ville->getVille();
        
        $this->load->model('Model_Preferences');
        $data['lesPreferences'] = $this->Model_Preferences->getPreferences();
        $this->load->view("v_RechercheItineraire",$data);
        
    }
    
    function parametres(){
       $this->load->model('Model_Ville');
       $data['laVille'] = $this->Model_Ville->getVille();
        $this->load->view("v_Parametres",$data);
    }
}
