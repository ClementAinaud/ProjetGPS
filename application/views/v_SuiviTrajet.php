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
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://localhost/GSB_Final-master/CSS/CSS.css"> 
         <!--<link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">-->
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
        
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   
    </head>
    <body>
        <h1>Le trajet a debuté , voici l'itinéraire </h1>
        <br>   <br>   <br>   <br>   <br>   <br>
         <!--<h1>Tableau des visiteurs</h1>-->
         <table id="myTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
levehiculeid
         
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
              <th>Emission co2</th>
              <th>consommation </th>
           
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
                                         echo"<td>".($ville->LONGUEUR_TRONCON *$co2)/1000 .'kg'. "</td>";
                                            echo"<td>".$ville->LONGUEUR_TRONCON * ($conso / 100 )  .'L'. "</td>";
            
            
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
                                         echo"<td>".($ville->LONGUEUR_TRONCON * $vehiculeid->CO2_VEHICULE )/1000 .'kg'. "</td>";
                                            echo"<td>".$ville->LONGUEUR_TRONCON * ($vehiculeid->CONSOMATION_VEHICULE/ 100 )  .'L'. "</td>";
            
            echo "</tr>";
        }
            
        } else  {
            echo "<script>alert(\"Pas de trajet dispo\")</script>";
}
        ?>
           
    </table> 
        
        <input type="button"  value="Je suuis bien arrivée a destination " class="btn btn-success btn-block" />
        <input type="button"  value="Je me suis perdu " class="btn btn-success btn-block" />
    </body>
</html>
