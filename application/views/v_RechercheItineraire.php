<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>GPS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <div class="col-sm-6">
        <h3>Consulter historique ( menu déroulant peut-être)</h3>
        <br><br>
        
        
        <form method="GET" action="suiviTrajet">
  
    <h1>Etape 1( choisir villes depart/arrivee et vérification des villes choisies </h1>
     
  
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
                    </div>
    <?php
 
    
 
?>
    <h2>zzz</h2>   
  <?php
        {
 
                         
        }
        ?> 
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
                            <option value="<?php echo $vehicule->ID_VEHICULE;?>"> <?php echo $vehicule->NOM_VEHICULE;?></option>   
                                                 
                            <?php
                                            } 
                           ?>  
                        </select>     
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
    
                    
    <input type="submit" class="btn btn-info"  value="Demarer la navigation">
    
        </form>
        </div>
    
    
    
    
<!--        <div class="col-sm-4">  
            <br>  <br>  <br>  <br>
         <h1>Listes des villes</h1>

    <table id="myTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
        
        <tr> 
            
              <th>Numero ville</th>
              <th>Nom</th>
              <th>Type de ville</th>
              <th>Latitude</th>
              <th>Longitude</th>
           
        </tr>    
       
        <?php 
        
        foreach($laVille as $ville){
            echo "<tr>";
           
            echo"<td>".$ville->ID_VILLE."</td>";
            echo"<td>".$ville->NOM_VILLE."</td>";
            echo"<td>".$ville->TYPE_VILLE."</td>";
            echo"<td>".$ville->LATITUDE_VILLE."</td>";
            echo"<td>".$ville->LONGITUDE_VILLE."</td>";
     
            
            
            echo "</tr>";
        }
        ?>
           
    </table> 
        
        </div>
        -->
        
    </body>
</html>
