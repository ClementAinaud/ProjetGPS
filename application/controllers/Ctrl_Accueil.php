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
        
        $this->load->model('Model_Vehicule');
        $data['lesvehicules'] = $this->Model_Vehicule->getVehicule();
        
        $this->load->view("v_RechercheItineraire",$data);
        
    }
    public function suiviTrajet(){
        $villeDepart = $_GET['villeDepart'];
        $villeArrivee = $_GET['villeArrivee'];
        $radar = $_GET ['radar'];
        $touristique = $_GET ['touristique'];
        $payant = $_GET ['payant'];
        $station = $_GET ['station'];
        $vehicule = $_GET ['vehicule'];
         $this->load->model('Model_Itineraire');
         
         $data['lesVillesD'] = $this->Model_Itineraire->getLesVillesD();
       $data['lesVillesA'] = $this->Model_Itineraire->getLesVillesD();
         
        $data['lesVilles'] = $this->Model_Itineraire->getLesVillesD();
        $this->load->model('Model_Vehicule');
        $data['lesvehicules'] = $this->Model_Vehicule->getVehicule();
        
       $data['troncon'] = $this->Model_Itineraire->getTronconRapide("$villeDepart","$villeArrivee",
               "$radar","$touristique","$payant","$station");
       $data['tronconR'] = $this->Model_Itineraire->getTronconCourt("$villeDepart","$villeArrivee",
               "$radar","$touristique","$payant","$station");
    
      $this->load->model('Model_Itineraire');
      $data['toutTroncon']= $this->Model_Itineraire->getLesVilles();
              
      
       
       $this->load->model('Model_Ville');
       $data['laVille'] = $this->Model_Ville->getVille();
        
        $this->load->model('Model_Preferences');
        $data['lesPreferences'] = $this->Model_Preferences->getPreferences();
       $this->load->model('Model_Vehicule');
        $data['lesvehicules'] = $this->Model_Vehicule->getVehicule();
        
        $this->load->model('Model_Vehicule');
        $data['levehiculeid'] = $this->Model_Vehicule->getVehiculeinfo($vehicule);
        
         $this->load->view("v_SuiviTrajet",$data);
       
        
       
     
 

        

    }
    
 public   function parametres(){
       $this->load->model('Model_Ville');
       $data['laVille'] = $this->Model_Ville->getVille();
       
        $this->load->model('Model_Itineraire');
      $data['lesTroncons']=$this->Model_Itineraire->getLesVilles();
      
      $this->load->model('Model_Route');
      $data['laRoute'] = $this->Model_Route->getRoute();
        $this->load->view("v_Parametres",$data);
    }
    
  public   function etapes(){
      $this->load->model('Model_Etapes');
      $data['lesEtapes'] = $this->Model_Etapes->getEtapes();
      
      $this->load->model('Model_Somme');
      $data['lesSommes'] = $this->Model_Somme->getSommeEtape();
      
      $this->load->model('Model_SommeConso');
      $data['lesSommesConso'] = $this->Model_SommeConso->getSommeConso();
     
      $this->load->view("v_Etapes",$data);
      
      
    }
    
   public function historique(){
      $this->load->model('Model_Historique');
      $data['lesHistoriques'] = $this->Model_Historique->getHistorique();
      $this->load->view("v_Historique",$data);
    }
    function ajoutvehicule(){
        $this->load->model('Model_Vehicule');
       $data['leVehicule'] = $this->Model_Vehicule->getVehicule();
        $this->load->view("v_ajoutvehicule",$data);
    }
}
