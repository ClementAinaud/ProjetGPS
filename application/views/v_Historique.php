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
   
            <div class="col-sm-10">
        
<!--        <div style="overflow:auto;height:570px;">-->
 <h1>Listes de l'historique</h1>

    <table id="myTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
        
        <tr> 
            
              <th>Id Historique</th>
             <th>Id Troncon</th>
              <th>Date</th>
              <th>Heure</th>
              <th>Ville de depart</th>
              <th>Ville d'arrivee</th>
              <th>Longueur</th>
              <th>Id du vehicule</th>
               <th>Consomation historique</th>
                <th>Co2 emis</th>
                
             
           
        </tr>    
       
        <?php 
        
        foreach($lesHistoriques as $historique){
            echo "<tr>";
           
            echo"<td>".$historique->ID_HISTORIQUE."</td>";
            echo"<td>".$historique->ID_TRONCON."</td>";
            echo"<td>".$historique->DATE_HISTORIQUE."</td>";
            echo"<td>".$historique->HEURE_HISTORIQUE."</td>";
            echo"<td>".$historique->VILLEDEDEPART_HISTORIQUE."</td>";
            echo"<td>".$historique->VILLEARRIVEE_HISTORIQUE."</td>";
            echo"<td>".$historique->LONGUEUR_HISTORIQUE."</td>";
            echo"<td>".$historique->ID_VEHICULE."</td>";
            echo"<td>".$historique->CONSOMATION_HISTORIQUE."</td>";
            echo"<td>".$historique->CO2_HISTORIQUE."</td>";
            
     
            
            
            echo "</tr>";
        }
        ?>
           
    </table> 
              
 <form action="rechercheItineraire" method="post">
     <div class="form-group row" style="display:none;">
                         <div class="col-xs-6">
                        <label for="idHistorique">idHistorique</label>
                   
                       
                         <select  class="form-control" id="idHistorique" name="idHistorique">
                            <?php
                                            foreach ($lesHistoriques as $h) {
                                           ?>
                            <option value="<?php echo $h->ID_HISTORIQUE;?>"> <?php echo $h->ID_HISTORIQUE;?></option>   
                                                 
                            <?php
                                            } 
                           ?>  
                        </select>     
                    </div>
                    </div>
                    
     
       
<div class="form-group row" id="delete">
               <div class="col-xs-2">
               <input  type="submit" name="delete" value="Supprimer" class="btn btn-danger btn-block" />
              
           </div>
</div>
     
 </form>
 <?php 
                
                if($this->input->post('delete') !=''){
                   
                 $idHistorique = $this->input->post('idHistorique'); 
                 $data = array(
                     'ID_HISTORIQUE' => $idHistorique,
                    
                    );
                 
                   $this->db->delete('historique', array('ID_HISTORIQUE' => $idHistorique));
                   header("refresh: 0;");
                }
                ?>  
        
        
        <br> <br>   
        <?php
             foreach($LesLongueurs[0] as $value){
    echo $value. "<br>";
}   ?>
    </body>
</html>
