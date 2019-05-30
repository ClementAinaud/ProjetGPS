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
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://localhost/GSB_Final-master/CSS/CSS.css"> 
         <!--<link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">-->
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
        
 
  
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
              <th>présence de tation service</th>
              
           
        </tr>    
       
        <?php 
        
        foreach($lesVilles as $ville){
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
        ?>
           
    </table> 
        
        
        <input type="button"  value="Je suuis bien arrivée a destination " class="btn btn-success btn-block" />
        <input type="button"  value="Je me suis perdu " class="btn btn-success btn-block" />
        
        
        
        <div id="NomMach"></div>
  <div id="Itype">
      <div class="col-xs-6">
    <h1>Reussite</h1>  <input name="Type" id="arrivee" type="radio" value="arrivee" checked="checked"  onclick="Smachine();" /> <br>
      </div>
      <div class="col-xs-6">
     <h1>Echec</h1> <input name="Type" id="perdu" type="radio" value="perdu"  onclick="Smachine();" />
    </div>
  </div>
  <div id="Arrivee" style="display:none;">
      <h1>Felicitation </h1>
  </div>
        
        
        
        
        
  <div id="Perdu" style="display:none;">
   
        
        
        
        <form method="post">
  
    <h1>Etape 1( choisir villes depart/arrivee et vérification des villes choisies </h1>
     
  
            <div class="form-group row">
                         <div class="col-xs-6">
                        <label for="VilleDepart">Ville de depart</label>
                         <select  class="form-control" id="villeDepart" name="villeDepart">
                            <?php
                                            foreach ($lesVilles as $ville) {
                                           ?>
                            <option value="<?php echo $ville->VILLEDEDEPART_TRONCON;?>"> <?php echo $ville->VILLEDEDEPART_TRONCON;?></option>   
                                                 
                            <?php
                                            } 
                           ?>  
                        </select>     
                    </div>
                    </div>
                    <div class="form-group row">
                         <div class="col-xs-6">
                        <label for="VilleArrivee">Ville d'arrivée</label>
                         <select  class="form-control" id="villeArrivee" name="villeArrivee">
                            <?php
                                            foreach ($lesVilles as $ville) {
                                           ?>
                            <option value="<?php echo $ville->VILLEDARRIVEE_TRONCON;?>"> <?php echo $ville->VILLEDARRIVEE_TRONCON;?></option>   
                                                 
                            <?php
                                            } 
                           ?>  
                        </select>     
                    </div>
                    </div>
    
      
    
    <h1>Etape 2 choisir les préférences </h1>
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
       <a href="http://localhost/ProjetGPS/index.php/Ctrl_Accueil/suiviTrajet"><input type="button" class="btn btn-info" name="demarer " value="Demarer la navigation"/></a> 
    </form>
        </div>
    
  </div>
 
        
        
        
        
    </body>
</html>
