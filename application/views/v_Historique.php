<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Historique</title>
        <meta charset="UTF-8">
       <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://localhost/GSB_Final-master/CSS/CSS.css"> 
         <!--<link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">-->
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    </head>
    <body>
   <body>
   
            <div class="col-sm-6">
        <div id="partieGauche"> 
<!--        <div style="overflow:auto;height:570px;">-->
 <h1>Listes de l'historique</h1>

    <table id="myTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
        
        <tr> 
            
              <th>Id Historique</th>
              <th>Date</th>
              <th>Heure</th>
              <th>Ville de depart</th>
              <th>Ville d'arrivee</th>
              <th>Longueur</th>
              <th>vitesse</th>
               <th>Touristique</th>
                <th>Radar</th>
                 <th>Payant</th>
                  <th>sation service</th>
           
        </tr>    
       
        <?php 
        
        foreach($lesHistoriques as $historique){
            echo "<tr>";
           
            echo"<td>".$historique->ID_HISTORIQUE."</td>";
            echo"<td>".$historique->DATE_HISTORIQUE."</td>";
            echo"<td>".$historique->HEURE_HISTORIQUE."</td>";
            echo"<td>".$historique->VILLEDEDEPART_HISTORIQUE."</td>";
            echo"<td>".$historique->VILLEARRIVEE_HISTORIQUE."</td>";
            echo"<td>".$historique->LONGUEUR_HISTORIQUE."</td>";
            echo"<td>".$historique->VITESSE_HISTORIQUE."</td>";
            echo"<td>".$historique->TOURISTIQUE_HISTORIQUE."</td>";
            echo"<td>".$historique->RADAR_HISTORIQUE."</td>";
            echo"<td>".$historique->PAYANT_HISTORIQUE."</td>";
            echo"<td>".$historique->STATIONSERVICE_HISTORIQUE."</td>";
     
            
            
            echo "</tr>";
        }
        ?>
           
    </table> 
              
 
        
        
        <br> <br>   
    </body>
</html>
