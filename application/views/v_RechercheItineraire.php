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
        <h3>Consulter historique ( menu déroulant peut-être)</h3>
        <br><br>
        
        
        <form method="post">
  
    <h1>Etape 1( choisir villes depart/arrivee et vérification des villes choisies </h1>
     
  
            
                    <div class="form-group row">
                         <div class="col-xs-6">
                        <label for="VilleArrivee">Ville d'arrivée</label>
                        <input type="text" class="form-control" id="villeArrivee" name="villeArrivee">
                    </div>
                    </div>
    
    <h1>Etape 2 choisir les préférences </h1>
     <div class="form-group row">
                         <div class="col-xs-6">
                        <label for="TypeChemin">Type du chemin (menu déroulant court/rapide?</label>
                        <input type="text" class="form-control" id="typeChemin" name="typeChemin">
                    </div>
                    </div>
     <div class="form-group row">
                         <div class="col-xs-6">
                        <label for="StationService">Station service(menu déroulant oui/non ?</label>
                        <input type="text" class="form-control" id="stationService" name="stationService">
                    </div>
                    </div>
   
    <div class="form-group row">
                         <div class="col-xs-6">
                        <label for="radar">Radar  ( menu déroulant oui/non?)</label>
                        <input type="text" class="form-control" id="radar" name="radar">
                    </div>
                    </div>
       <a href="index.php/Ctrl_General/AfficherPracticiens"><input type="button" class="btn btn-info" name="demarer " value="Demarer la navigation"/></a> 
    </form>
        
        
    </body>
</html>
