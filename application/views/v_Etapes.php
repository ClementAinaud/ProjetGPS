<!DOCTYPE html>
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
         <link rel="stylesheet" href="http://localhost/GSB_Final-master/CSS/CSS.css"> 
         <!--<link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">-->
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
        
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
  
    </head>
    <body>
        <div>TODO write content</div>
            <div class="col-sm-6">
        <div id="partieGauche"> 
<!--        <div style="overflow:auto;height:570px;">-->
 <h1>Listes des etapes</h1>

    <table id="myTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
        
        <tr> 
            
              <th>Id Etape</th>
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
        
        foreach($lesEtapes as $etape){
            echo "<tr>";
           
            echo"<td>".$etape->ID_ETAPE."</td>";
            echo"<td>".$etape->VILLEDEDEPART_ETAPE."</td>";
            echo"<td>".$etape->VILLEDARRIVEE_ETAPE."</td>";
            echo"<td>".$etape->LONGUEUR_ETAPE."</td>";
            echo"<td>".$etape->VITESSE_ETAPE."</td>";
            echo"<td>".$etape->TOURISTIQUE_ETAPE."</td>";
            echo"<td>".$etape->RADAR_ETAPE."</td>";
            echo"<td>".$etape->PAYANT_ETAPE."</td>";
            echo"<td>".$etape->STATIONSERVICE_ETAPE."</td>";
     
            
            
            echo "</tr>";
        }
        ?>
           
    </table> 
              
 
        
        
        <br> <br>   
       
       <ul class="pager">
  <li class="previous"><a href="http://localhost/ProjetGPSFinal/">Revenir a l'acceuil GPS</a></li>
  
</ul>
   
        <br> <br>
           
     </div> 
 </div>
    </body>
</html>
