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

?><!DOCTYPE html>

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
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
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
  $VILLEDEDEPART_TRONCON =(document.getElementById("myTable2").rows[1].cells.item(0).innerHTML);
  $Detail = $DOM->getElementsByTagName('td');
}
  
</script>

    </head>
    <body>
       <form method="post">
        <h1>Le trajet a debuté , voici l'itinéraire </h1>
        <br>   <br>   <br>   <br>   <br>   <br>
         <!--<h1>Tableau des visiteurs</h1>-->

         <table id="myTable" class="table table-striped table-bordered" cellspacing="0" width="100%">

         
       <tr> 
            
              <th id='idvehicule'>Id vehicule</th>
              <th id='nomvehicule'>Nom vehicule</th>
              <th id='typecarburant'>type carburant</th>
              <th id='conso'>Consomation</th>
              <th id='co2'> Co2</th>
           
        </tr>   
         
       
         <?php 
         
         foreach($levehiculeid as $vehiculeid){
            echo "<tr>";
           $IDVEHICULE_ETAPE = $vehiculeid->ID_VEHICULE;
            echo"<td>".$vehiculeid->ID_VEHICULE."</td>";
               echo"<td>".$vehiculeid->NOM_VEHICULE ."</td>";
                  echo"<td>".$vehiculeid->TYPECARBURANT_VEHICULE."</td>";
                     echo"<td>".$vehiculeid->CONSOMATION_VEHICULE."</td>";
                     echo "<td>".$vehiculeid->CO2_VEHICULE."</td>";
            echo "</tr>";
        }
         
         
         
         ?>
          </table>
         ----
    <table id="myTable2" class="table table-striped table-bordered" cellspacing="0" width="100%">
        
        <tr> 
            
        <div id="ID_TRONCON" <th id="ID_TRONCON">troncon</th> </div>
              <th id="VILLEDEDEPART_TRONCON">ville depart</th>
              <th id="VILLEDARRIVEE_TRONCON">ville arrivée</th>
              <th id="ID_TRONCON">Nombres de kilomètres</th>
              <th id="VITESSE_TRONCON">Vitesse moyenne</th>
              <th id="">Trajet touristique</th>
              <th id="">présence de radar</th>
              <th id="">Payant</th>
              <th id="">Station</th>
              <th id="co22">Emission co2</th>
              <th id="conso2">consommation </th>
           
        </tr>    
       
        <?php 
        if($typeChemin =="court"){
        foreach($troncon as $ville){
            echo "<tr>";
            $ID_TRONCON= $ville->ID_TRONCON;
           $VILLEDEDEPART_TRONCON = $ville->VILLEDEDEPART_TRONCON;
           $VILLEDARRIVEE_TRONCON = $ville->VILLEDARRIVEE_TRONCON;
           $LONGUEUR_ETAPE = $ville->LONGUEUR_TRONCON;
           $CONSOMATION_ETAPE = $ville->LONGUEUR_TRONCON * ($vehiculeid->CONSOMATION_VEHICULE/ 100);
           $CO2_ETAPE = ($ville->LONGUEUR_TRONCON * $vehiculeid->CO2_VEHICULE )/1000 ;
            echo"<td name ='ID_TRONCON'>".$ville->ID_TRONCON."</td>";
               echo"<td>".$ville->VILLEDEDEPART_TRONCON."</td>";
                  echo"<td>".$ville->VILLEDARRIVEE_TRONCON."</td>";
                     echo"<td>".$ville->LONGUEUR_TRONCON."</td>";
                        echo"<td>".$ville->VITESSE_TRONCON."</td>";
                           echo"<td>".$ville->TOURISTIQUE_TRONCON."</td>";
                              echo"<td>".$ville->RADAR_TRONCON."</td>";
                                 echo"<td>".$ville->PAYANT_TRONCON."</td>";
                                    echo"<td>".$ville->STATIONSERVICE_TRONCON."</td>";
                                         echo"<td>".($ville->LONGUEUR_TRONCON *$co2)/1000 .'kg'. "</td>";
                                            echo"<td>".$ville->LONGUEUR_TRONCON * ($conso / 100 )  .'L'. "</td>";
            
            
            echo "</tr>";
        }}else if($typeChemin =="rapide"){
            foreach($tronconR as $ville){
            echo "<tr>";
//            VILLEDEDEPART_ETAPE' =>$VILLEDEDEPART_TRONCON,
//                     'VILLEDARRIVEE_ETAPE' =>$villeArrivee,
//                     'LONGUEUR_ETAPE' =>$longueurTroncon, 
//                     'IDVEHICULE_ETAPE'=> $vehicule,
//                       'CONSOMATION_ETAPE '=>$conso,
//                       'CO2_ETAPE'=>$co2,
//                           
           $ID_TRONCON= $ville->ID_TRONCON;
           $VILLEDEDEPART_TRONCON = $ville->VILLEDEDEPART_TRONCON;
           $VILLEDARRIVEE_TRONCON = $ville->VILLEDARRIVEE_TRONCON;
           $LONGUEUR_ETAPE = $ville->LONGUEUR_TRONCON;
           $CONSOMATION_ETAPE = $ville->LONGUEUR_TRONCON * ($vehiculeid->CONSOMATION_VEHICULE/ 100);
           $CO2_ETAPE = ($ville->LONGUEUR_TRONCON * $vehiculeid->CO2_VEHICULE )/1000 ;
            echo"<td'>".$ville->ID_TRONCON."</td>";
               echo"<td>".$ville->VILLEDEDEPART_TRONCON."</td>";
                  echo"<td>".$ville->VILLEDARRIVEE_TRONCON."</td>";
                     echo"<td>".$ville->LONGUEUR_TRONCON."</td>";
                        echo"<td>".$ville->VITESSE_TRONCON."</td>";
                           echo"<td>".$ville->TOURISTIQUE_TRONCON."</td>";
                              echo"<td>".$ville->RADAR_TRONCON."</td>";
                                 echo"<td>".$ville->PAYANT_TRONCON."</td>";
                                    echo"<td>".$ville->STATIONSERVICE_TRONCON."</td>";
                                         echo"<td>".($ville->LONGUEUR_TRONCON * $vehiculeid->CO2_VEHICULE )/1000 .'kg'. "</td>";
                                            echo"<td>".$ville->LONGUEUR_TRONCON * ($vehiculeid->CONSOMATION_VEHICULE/ 100 )  .'L'. "</td>";
            
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
                      <a href="rechercheItineraire"><input type="button" class="btn btn-info" name="insert " value="CONTINUER"/></a>  

    </div>
  </div>
  <div id="Arrivee" style="display:none;">
      <h1>Felicitaion vous etes arrivés a destination </h1>
      <a href="../Ctrl_Accueil/etapes"><input type="button" class="btn btn-info" name="recherche " value="recherche"/></a>  
  </div>
        
    <div id="Perdu" style="display:none;">
        
        <div class="col-sm-6"> 
        <form method="GET" action="suiviTrajet">
    
  
      <a href="rechercheItineraire"><input type="submit" name="insert"  class="btn btn-info"></a>

    
    
                    </div>
           
                    </div>
       
                    
      
      
    
          
            <td><input type="submit" name="insert" value="Save Data"/></td>

   
      
        </form>
            
            
           
            
            
            
 <?php 
                
              
 
                if($this->input->post('insert') !=''){
                    $idTroncon = $this->input->post('ID_TRONCON');
                   $villeDepart = $this->input->post('VILLEDEDEPART_TRONCON'); 
                   $villeArrivee = $this->input->post('VILLEDARRIVEE_TRONCON');
                   $longueurTroncon = $this->input->post('LONGUEUR_TRONCON');
                   $idVehicule = $this->input->post('idVehicule');
                   $conso = $this->input->post('conso2');
                   $co2 = $this->input->post ('co22');
          
                   $data = array(
                     'ID_TRONCON ' => $ID_TRONCON,
                     'VILLEDEDEPART_ETAPE' =>$VILLEDEDEPART_TRONCON,
                     'VILLEDARRIVEE_ETAPE' =>$VILLEDARRIVEE_TRONCON,
                     'LONGUEUR_ETAPE' =>$LONGUEUR_ETAPE, 
                     'IDVEHICULE_ETAPE'=> $vehicule,
                       'CONSOMATION_ETAPE '=>$CONSOMATION_ETAPE,
                       'CO2_ETAPE'=>$CO2_ETAPE,
                     
                       
                      
                   );
                   $this->db->insert('etape',$data);
                  
                }
                
                ?>
          <?php
                if($this->input->post('insert') !=''){
                   $idTroncon = $this->input->post('ID_TRONCON');
                   $villeDepart = $this->input->post('VILLEDEDEPART_TRONCON'); 
                   $villeArrivee = $this->input->post('VILLEDARRIVEE_TRONCON');
                   $longueurTroncon = $this->input->post('LONGUEUR_TRONCON');
                   $conso = $this->input->post('conso2');
                   $co2 = $this->input->post ('co22');
                   
                   
                  
                   
                   $data = array(
                     'ID_TRONCON' => $ID_TRONCON,
                     'DATE_HISTORIQUE' =>$date,  
                     'HEURE_HISTORIQUE'=>$heure,  
                     'VILLEDEDEPART_HISTORIQUE' =>$VILLEDEDEPART_TRONCON,
                     'VILLEARRIVEE_HISTORIQUE'=>$VILLEDARRIVEE_TRONCON,
                     'LONGUEUR_HISTORIQUE' => $LONGUEUR_ETAPE,
                       'ID_VEHICULE'=> $vehicule,
                     'CONSOMATION_HISTORIQUE' =>$CONSOMATION_ETAPE,
                     'CO2_HISTORIQUE'=>$CO2_ETAPE,
                           
                     
                       
                      
                   );
                   $this->db->insert('historique',$data);
                  
                }
                ?>  
            
            
        
     </div>
        
        
        
        
        
        
        
 </div>
        
<table id=maTable>
<tr>
<th>Identifiant</th>
<th>Resultat</th>
</tr>
<tr>
<td>123</td>
<td>55</td>
</tr>
</table>
        
        
        
        
        
        
        
        
        
        
        
        </div>
    </body>
</html>
