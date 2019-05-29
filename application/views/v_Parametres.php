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
      <div class="col-sm-6">
        <div id="partieGauche"> 
<!--        <div style="overflow:auto;height:570px;">-->
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
            echo"<td>".$ville->TOURISTIQUE_VILLE."</td>";
            echo"<td>".$ville->LATITUDE_VILLE."</td>";
            echo"<td>".$ville->LONGITUDE_VILLE."</td>";
     
            
            
            echo "</tr>";
        }
        ?>
           
    </table> 
              
 
        
        
        <br> <br>   
       
       <ul class="pager">
  <li class="previous"><a href="http://localhost/ProjetGPS/">Revenir a l'acceuil GPS</a></li>
  
</ul>
   
        <br> <br>
           
     </div> 
 </div>
        <div class="col-sm-4">   
           
            
         
            
            <h2>Formulaire d'ajout d'une ville</h2>
            
            
            
            
            
            <form method="post">
         
               

 
           <!-- creation des text box et bouton -->
                    <div class="form-group row">
                        <div class="col-xs-6">
                        <label for="idVille">ID Ville</label>
                        <input type="text" class="form-control" id="idVille" name="idVille">
                        </div>
                    </div>
           <div class="form-group row">
                        <div class="col-xs-6">
                        <label for="nomVille">nomVille</label>
                        <input type="text" class="form-control" id="nomVille" name="nomVille">
                        </div>
                    </div>
           <div class="form-group row">
                        <div class="col-xs-6">
                        <label for="typeVille">typeVille</label>
                        <input type="text" class="form-control" id="typeVille" name="typeVille">
                        </div>
                    </div>
            <div class="form-group row">
                        <div class="col-xs-6">
                        <label for="touristique">touristique</label>
                        <input type="text" class="form-control" id="touristique" name="touristique">
                        </div>
                    </div>
            <div class="form-group row">
                        <div class="col-xs-6">
                        <label for="latitudeVille">latitudeVille</label>
                        <input type="text" class="form-control" id="latitudeVille" name="latitudeVille">
                        </div>
                    </div>
            <div class="form-group row">
                        <div class="col-xs-6">
                        <label for="longitudeVille">longitudeVille</label>
                        <input type="text" class="form-control" id="longitudeVille" name="longitudeVille">
                        </div>
                    </div>
           
             <div class="container">      
      
           
            <div class="form-group row" id="ajouter"> 
                <div class="col-xs-2">
                <input type="submit" name="insert" value="Creer" class="btn btn-primary btn-block" />
                </div>
            </div>
           
   
             </div>
            </form>
            
           
                <?php 
                
                if($this->input->post('insert') !=''){
                   $idVille = $this->input->post('idVille'); 
                   $nomVille = $this->input->post('nomVille');
                   $typeVille = $this->input->post('typeVille');
                   $touristique = $this->input->post('touristique');
                   $latitudeVille = $this->input->post('latitudeVille');
                   $longitudeVille = $this->input->post('longitudeVille');
                  
                   
                   $data = array(
                     'ID_VILLE' => $idVille,
                     'NOM_VILLE' =>$nomVille,
                     'TYPE_VILLE' =>$typeVille,
                     'TOURISTIQUE_VILLE' =>$touristique,
                     'LATITUDE_VILLE' =>$latitudeVille,
                     'LONGITUDE_VILLE' =>$longitudeVille,
                      
                   );
                   $this->db->insert('ville',$data);
                   header("refresh: 0;");
                }
                ?>
            
        </div>
        </for
    </body>
</html>
