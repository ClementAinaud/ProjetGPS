<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<?php
$radar = $_REQUEST['radar'];
$villeDepart=$_REQUEST['villeDepart'];
$villeArrivee=$_REQUEST['villeArrivee'];
$typeChemin=$_REQUEST['typeChemin'];
$vehicule=$_REQUEST['vehicule'];
echo "$villeDepart";
echo "$radar";
echo "$typeChemin";
echo "$vehicule";   
?>
<?php
$date = date("d-m-Y");
$heure = date("H:i");
Print("Nous sommes le $date et il est $heure");
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Suivi pendant trajet</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://localhost/GSB_Final-master/CSS/CSS.css"> 
         <!--<link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">-->
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
        
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script type="text/javascript" >
  function Smachine()  {
  if(document.getElementById('arrivee').checked) {
   
    document.getElementById('Arrivee').style.display='block';
    document.getElementById('Perdu').style.display='none';
   
  }
  if(document.getElementById('perdu').checked) {
    
    document.getElementById('Arrivee').style.display='none';
    document.getElementById('Perdu').style.display='block';
    
  }
 
}
    
  
  
  </script>
    </head>
    <body>
       
        <h1>Le trajet a debuté , voici l'itinéraire </h1>
        <br>   <br>   <br>   <br>   <br>   <br>
         <!--<h1>Tableau des visiteurs</h1>-->

    <table id="myTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
        
        <tr> 
            
              <th>troncon</th>
              <th>ville depart</th>
              <th>ville arrivée</th>
              <th>Nombres de kilomètres</th>
              <th>Vitesse moyenne</th>
              <th>Trajet touristique</th>
              <th>présence de radar</th>
              <th>Payant</th>
              <th>Station</th>
              <th>Consommation</th>
           
        </tr>    
       
        <?php 
        if($typeChemin =="court"){
        foreach($troncon as $ville){
            echo "<tr>";
           
            echo"<td>".$ville->ID_TRONCON."</td>";
               echo"<td>".$ville->VILLEDEDEPART_TRONCON."</td>";
                  echo"<td>".$ville->VILLEDARRIVEE_TRONCON."</td>";
                     echo"<td>".$ville->LONGUEUR_TRONCON."</td>";
                        echo"<td>".$ville->VITESSE_TRONCON."</td>";
                           echo"<td>".$ville->TOURISTIQUE_TRONCON."</td>";
                              echo"<td>".$ville->RADAR_TRONCON."</td>";
                                 echo"<td>".$ville->PAYANT_TRONCON."</td>";
                                    echo"<td>".$ville->STATIONSERVICE_TRONCON."</td>";
                                    echo "<td>".$ville->VITESSE_TRONCON.'+'.$ville->VITESSE_TRONCON."   </td>";
            
            
            echo "</tr>";
        }}else if($typeChemin =="rapide"){
            foreach($tronconR as $ville){
            echo "<tr>";
           
            echo"<td>".$ville->ID_TRONCON."</td>";
               echo"<td>".$ville->VILLEDEDEPART_TRONCON."</td>";
                  echo"<td>".$ville->VILLEDARRIVEE_TRONCON."</td>";
                     echo"<td>".$ville->LONGUEUR_TRONCON."</td>";
                        echo"<td>".$ville->VITESSE_TRONCON."</td>";
                           echo"<td>".$ville->TOURISTIQUE_TRONCON."</td>";
                              echo"<td>".$ville->RADAR_TRONCON."</td>";
                                 echo"<td>".$ville->PAYANT_TRONCON."</td>";
                                    echo"<td>".$ville->STATIONSERVICE_TRONCON."</td>";
            
            
            echo "</tr>";
        }
            
        } else  {
            echo "<script>alert(\"Pas de trajet dispo\")</script>";
}
        ?>
           
    </table> 
        
        
       
        
        <div id="NomMach"></div>
  <div id="Itype">
      <div class="radio">
          <label> <input name="Type" id="arrivee" type="radio" value="arrivee" checked="checked"  onclick="Smachine();" />Fin du trajet </label> <br>
      </div>
      <div class="radio">
          <label><input name="Type" id="perdu" type="radio" value="perdu"  onclick="Smachine();" /> Continuer le trajet</label>
    </div>
  </div>
  <div id="Arrivee" style="display:none;">
      <h1>Felicitaion vous etes arrivés a destination </h1>
      <a href="../Ctrl_Accueil/etapes"><input type="button" class="btn btn-info" name="recherche " value="recherche"/></a>  
  </div>
        
    <div id="Perdu" style="display:none;">
        
        <div class="col-sm-6"> 
        <form method="GET" action="suiviTrajet">
         
    <h1>Etape 1( choisir villes depart/arrivee  </h1>
     
  
    
            <div class="form-group row">
                         <div class="col-xs-6">
                        <label for="VilleDepart">Ville de depart</label>
                         <select  class="form-control" id="villeDepart" name="villeDepart">
                            <?php
                                            foreach ($lesVillesD as $ville) {
                                           ?>
                            <option name="<?php echo $ville->ID_VILLE;?>"
                                value="<?php echo $ville->ID_VILLE;?>"> <?php echo $ville->NOM_VILLE ;?></option>  
                                           
                            <?php
                                            } 
                           ?>  
                        </select> 
                    </div>
            </div> <br> 
   
                    <div class="form-group row">
                         <div class="col-xs-6">
                        <label for="VilleArrivee">Ville d'arrivée</label>
                         <select  class="form-control" id="villeArrivee" name="villeArrivee">
                            <?php
                                            foreach ($lesVillesA as $ville) {
                                                
                                           ?>
                             
                       
                             -//
                             <option name="<?php echo $ville->ID_VILLE;?>"
                                value="<?php echo $ville->ID_VILLE;?>"> <?php echo $ville->NOM_VILLE ;?></option>   
                                                 
                            <?php
                            }
                           ?>  
                        </select>     
                    </div>
                    </div>
    
      
    <h1>Etape 2 choisir le véhicule</h1>
     <div class="form-group row">
                         <div class="col-xs-6">
                        <label for="vehicule">vehicule</label>
                         <select  class="form-control" id="vehicule" name="vehicule">
                            <?php
                                            foreach ($lesvehicules as $vehicule) {
                                           ?>
                            <option value="<?php echo $vehicule->NOM_VEHICULE;?>"> <?php echo $vehicule->NOM_VEHICULE;?></option>   
                                                 
                            <?php
                                            } 
                           ?>  
                        </select>     
                         </div>
     </div>
    
    
      <h1>Etape 3 choisir les préférences </h1>
     <div class="form-group row">
       
                         <div class="col-xs-6">
                        <label for="TypeChemin">Type du chemin (menu déroulant court/rapide?</label>
                         <select  class="form-control" id="typeChemin" name="typeChemin">
                            <?php
                                            foreach ($lesPreferences as $preference) {
                                           ?>
                            <option value="<?php echo $preference->typeChemin;?>"> <?php echo $preference->typeChemin;?></option>   
                                                 
                            <?php
                                            } 
                           ?>  
                        </select>     
                    </div>
                    </div>
      
       <div class="form-group row"  >
       
                         <div class="col-xs-6" style="display:none;">
                        <label for="idTroncon">idTroncon</label>
                         <select  class="form-control" id="idTroncon" name="idTroncon">
                            <?php
                                            foreach ($toutTroncon as $troncon) {
                                           ?>
                            <option value="<?php echo $troncon->ID_TRONCON;?>"> <?php echo $troncon->ID_TRONCON;?></option>   
                                                 
                            <?php
                                            } 
                           ?>  
                        </select>     
                    </div>
                    </div>
      
       <div class="form-group row" >
       
                         <div class="col-xs-6"style="display:none;">
                        <label for="longueurTroncon">longueurTroncon</label>
                         <select  class="form-control" id="longueurTroncon" name="longueurTroncon">
                            <?php
                                            foreach ($toutTroncon as $troncon) {
                                           ?>
                            <option value="<?php echo $troncon->LONGUEUR_TRONCON;?>"> <?php echo $troncon->LONGUEUR_TRONCON;?></option>   
                                                 
                            <?php
                                            } 
                           ?>  
                        </select>     
                    </div>
                    </div>
      
       <div class="form-group row" >
       
                         <div class="col-xs-6" style="display:none;">
                        <label for="vitesseTroncon">vitesseTroncon</label>
                         <select  class="form-control" id="vitesseTroncon" name="vitesseTroncon">
                            <?php
                                            foreach ($toutTroncon as $troncon) {
                                           ?>
                            <option value="<?php echo $troncon->VITESSE_TRONCON;?>"> <?php echo $troncon->VITESSE_TRONCON;?></option>   
                                                 
                            <?php
                                            } 
                           ?>  
                        </select>     
                    </div>
                    </div>
      
     <div class="form-group row">
                         <div class="col-xs-6">
                        <label for="touristique">Touristique</label>
                        <select  class="form-control" id="touristique" name="touristique">
                            <?php
                                            foreach ($lesPreferences as $preference) {
                                           ?>
                            <option value="<?php echo $preference->touristique;?>"> <?php echo $preference->touristique;?></option>   
                                            
                            <?php
                                            } 
                           ?>  
                        </select>     
                    </div>
                    </div> 
   
   <div class="form-group row">
                         <div class="col-xs-6">
                        <label for="station">station</label>
                        <select  class="form-control" id="station" name="station">
                            <?php
                                            foreach ($lesPreferences as $preference) {
                                           ?>
                            <option value="<?php echo $preference->touristique;?>"> <?php echo $preference->touristique;?></option>   
                                            
                            <?php
                                            } 
                           ?>  
                        </select>     
                    </div>
                    </div>
    <div class="form-group row">
                         <div class="col-xs-6">
                        <label for="payant">Payant  ( menu déroulant oui/non?)</label>
                       <select  class="form-control" id="payant" name="payant">
                            <?php
                                            foreach ($lesPreferences as $preference) {
                                           ?>
                            <option value="<?php echo $preference->radar;?>"> <?php echo $preference->radar;?></option>   
                                                 
                            <?php
                                            } 
                           ?>  
                        </select>     
                    </div>
                    </div>
       <div class="form-group row">
                         <div class="col-xs-6">
                        <label for="radar">Radar  ( menu déroulant oui/non?)</label>
                       <select  class="form-control" id="radar" name="radar">
                            <?php
                                            foreach ($lesPreferences as $preference) {
                                           ?>
                            <option value="<?php echo $preference->radar;?>"> <?php echo $preference->radar;?></option>   
                                                 
                            <?php
                                            } 
                           ?>  
                        </select>     
                    </div>
                    </div>
    
          
    
 

   
      <input type="submit"  class="btn btn-info">
        </form>
            
        
     </div>
        
        <div class="col-sm-6"> 
        <form method="post">
         
    <h1>Etape 1( choisir villes depart/arrivee  </h1>
     
  
    
            <div class="form-group row">
                         <div class="col-xs-6">
                        <label for="VilleDepart">Ville de depart</label>
                         <select  class="form-control" id="villeDepart" name="villeDepart">
                            <?php
                                            foreach ($lesVillesD as $ville) {
                                           ?>
                            <option name="<?php echo $ville->ID_VILLE;?>"
                                value="<?php echo $ville->ID_VILLE;?>"> <?php echo $ville->NOM_VILLE ;?></option>  
                                           
                            <?php
                                            } 
                           ?>  
                        </select> 
                    </div>
            </div> <br> 
   
                    <div class="form-group row">
                         <div class="col-xs-6">
                        <label for="VilleArrivee">Ville d'arrivée</label>
                         <select  class="form-control" id="villeArrivee" name="villeArrivee">
                            <?php
                                            foreach ($lesVillesA as $ville) {
                                                
                                           ?>
                             
                       
                             -//
                             <option name="<?php echo $ville->ID_VILLE;?>"
                                value="<?php echo $ville->ID_VILLE;?>"> <?php echo $ville->NOM_VILLE ;?></option>   
                                                 
                            <?php
                            }
                           ?>  
                        </select>     
                    </div>
                    </div>
    
      
    <h1>Etape 2 choisir le véhicule</h1>
     <div class="form-group row">
                         <div class="col-xs-6">
                        <label for="vehicule">vehicule</label>
                         <select  class="form-control" id="vehicule" name="vehicule">
                            <?php
                                            foreach ($lesvehicules as $vehicule) {
                                           ?>
                            <option value="<?php echo $vehicule->NOM_VEHICULE;?>"> <?php echo $vehicule->NOM_VEHICULE;?></option>   
                                                 
                            <?php
                                            } 
                           ?>  
                        </select>     
                         </div>
     </div>
    
    
      <h1>Etape 3 choisir les préférences </h1>
     <div class="form-group row">
       
                         <div class="col-xs-6">
                        <label for="TypeChemin">Type du chemin (menu déroulant court/rapide?</label>
                         <select  class="form-control" id="typeChemin" name="typeChemin">
                            <?php
                                            foreach ($lesPreferences as $preference) {
                                           ?>
                            <option value="<?php echo $preference->typeChemin;?>"> <?php echo $preference->typeChemin;?></option>   
                                                 
                            <?php
                                            } 
                           ?>  
                        </select>     
                    </div>
                    </div>
      
       <div class="form-group row" >
       
                         <div class="col-xs-6">
                        <label for="idTroncon">idTroncon</label>
                         <select  class="form-control" id="idTroncon" name="idTroncon">
                            <?php
                                            foreach ($toutTroncon as $troncon) {
                                           ?>
                            <option value="<?php echo $troncon->ID_TRONCON;?>"> <?php echo $troncon->ID_TRONCON;?></option>   
                                                 
                            <?php
                                            } 
                           ?>  
                        </select>     
                    </div>
                    </div>
      
       <div class="form-group row" >
       
                         <div class="col-xs-6">
                        <label for="longueurTroncon">longueurTroncon</label>
                         <select  class="form-control" id="longueurTroncon" name="longueurTroncon">
                            <?php
                                            foreach ($toutTroncon as $troncon) {
                                           ?>
                            <option value="<?php echo $troncon->LONGUEUR_TRONCON;?>"> <?php echo $troncon->LONGUEUR_TRONCON;?></option>   
                                                 
                            <?php
                                            } 
                           ?>  
                        </select>     
                    </div>
                    </div>
      
       <div class="form-group row" >
       
                         <div class="col-xs-6">
                        <label for="vitesseTroncon">vitesseTroncon</label>
                         <select  class="form-control" id="vitesseTroncon" name="vitesseTroncon">
                            <?php
                                            foreach ($toutTroncon as $troncon) {
                                           ?>
                            <option value="<?php echo $troncon->VITESSE_TRONCON;?>"> <?php echo $troncon->VITESSE_TRONCON;?></option>   
                                                 
                            <?php
                                            } 
                           ?>  
                        </select>     
                    </div>
                    </div>
      
     <div class="form-group row">
                         <div class="col-xs-6">
                        <label for="touristique">Touristique</label>
                        <select  class="form-control" id="touristique" name="touristique">
                            <?php
                                            foreach ($lesPreferences as $preference) {
                                           ?>
                            <option value="<?php echo $preference->touristique;?>"> <?php echo $preference->touristique;?></option>   
                                            
                            <?php
                                            } 
                           ?>  
                        </select>     
                    </div>
                    </div> 
   
   <div class="form-group row">
                         <div class="col-xs-6">
                        <label for="station">station</label>
                        <select  class="form-control" id="station" name="station">
                            <?php
                                            foreach ($lesPreferences as $preference) {
                                           ?>
                            <option value="<?php echo $preference->touristique;?>"> <?php echo $preference->touristique;?></option>   
                                            
                            <?php
                                            } 
                           ?>  
                        </select>     
                    </div>
                    </div>
    <div class="form-group row">
                         <div class="col-xs-6">
                        <label for="payant">Payant  ( menu déroulant oui/non?)</label>
                       <select  class="form-control" id="payant" name="payant">
                            <?php
                                            foreach ($lesPreferences as $preference) {
                                           ?>
                            <option value="<?php echo $preference->radar;?>"> <?php echo $preference->radar;?></option>   
                                                 
                            <?php
                                            } 
                           ?>  
                        </select>     
                    </div>
                    </div>
       <div class="form-group row">
                         <div class="col-xs-6">
                        <label for="radar">Radar  ( menu déroulant oui/non?)</label>
                       <select  class="form-control" id="radar" name="radar">
                            <?php
                                            foreach ($lesPreferences as $preference) {
                                           ?>
                            <option value="<?php echo $preference->radar;?>"> <?php echo $preference->radar;?></option>   
                                                 
                            <?php
                                            } 
                           ?>  
                        </select>     
                    </div>
                         </div>
     
      <input type="submit" name="insert"  class="btn btn-info">

    
    
                    </div>
           
                    </div>
       
                    
      
      
    
          
 

   
      
        </form>
             
 <?php 
                
                if($this->input->post('insert') !=''){
                   $idTroncon = $this->input->post('idTroncon');
                   $villeDepart = $this->input->post('villeDepart'); 
                   $villeArrivee = $this->input->post('villeArrivee');
                   $longueurTroncon = $this->input->post('longueurTroncon');
                   $vitesseTroncon = $this->input->post('vitesseTroncon');
                   $touristique = $this->input->post('touristique');
                   $station = $this->input->post('station');
                   $payant = $this->input->post('payant');
                   $radar = $this->input->post('radar');
                
                   
                  
                   
                   $data = array(
                     'ID_ETAPE' => $idTroncon,
                     'VILLEDEDEPART_ETAPE' =>$villeDepart,
                     'VILLEDARRIVEE_ETAPE' =>$villeArrivee,
                     'LONGUEUR_ETAPE' =>$longueurTroncon,
                     'VITESSE_ETAPE' => $vitesseTroncon,
                     'RADAR_ETAPE' =>$radar,
                     'TOURISTIQUE_ETAPE' => $touristique, 
                     'PAYANT_ETAPE'=>$payant,
                     'STATIONSERVICE_ETAPE'=>$station,  
                     'RADAR_ETAPE' =>  $radar,
                       
                      
                   );
                   $this->db->insert('etape',$data);
                  
                }
                
                ?>
          <?php
                if($this->input->post('insert') !=''){
                   $idTroncon = $this->input->post('idTroncon');
                   $villeDepart = $this->input->post('villeDepart'); 
                   $villeArrivee = $this->input->post('villeArrivee');
                   $longueurTroncon = $this->input->post('longueurTroncon');
                   $vitesseTroncon = $this->input->post('vitesseTroncon');
                   $touristique = $this->input->post('touristique');
                   $station = $this->input->post('station');
                   $payant = $this->input->post('payant');
                   $radar = $this->input->post('radar');
                   
                   
                   
                   
                  
                   
                   $data = array(
                     'ID_HISTORIQUE' => $idTroncon,
                     'DATE_HISTORIQUE' =>$date,  
                     'HEURE_HISTORIQUE'=>$heure,  
                     'VILLEDEDEPART_HISTORIQUE' =>$villeDepart,
                     'VILLEARRIVEE_HISTORIQUE'=>$villeArrivee,
                     'LONGUEUR_HISTORIQUE' => $longueurTroncon,
                     'VITESSE_HISTORIQUE' =>$vitesseTroncon,
                     'TOURISTIQUE_HISTORIQUE' =>$touristique,
                     'RADAR_HISTORIQUE' =>$radar,
                     'PAYANT_HISTORIQUE' =>$payant,
                     'STATIONSERVICE_HISTORIQUE' =>$station,  
                       
                           
                     
                       
                      
                   );
                   $this->db->insert('historique',$data);
                  
                }
                ?>  
            
            
        
     </div>
        
        
        
        
        
        
        
 </div>
        

    </div>
    </body>
</html>
