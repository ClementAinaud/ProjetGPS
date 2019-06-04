<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Etapes</title>
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

 <h1>Listes des etapes</h1>

    <table id="myTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
        
        <tr> 
            
              <th>Id de l'Etape</th>
              <th>Id du Troncon</th>
              <th>Ville d'arrivée</th>
              <th>Ville de depart </th>
              <th>Longueurde l' etape</th>
               <th>Id du vehicule</th>
               <th>consomation</th>
                 <th>Co2 émis</th>
                 
           
        </tr>    
       
        <?php 
        
        foreach($lesEtapes as $etape){
            echo "<tr>";
           
            echo"<td>".$etape->ID_ETAPE."</td>";
            echo"<td>".$etape->ID_TRONCON."</td>";
            echo"<td>".$etape->VILLEDEDEPART_ETAPE."</td>";
            echo"<td>".$etape->VILLEDARRIVEE_ETAPE."</td>";
            echo"<td>".$etape->LONGUEUR_ETAPE."</td>";
            echo"<td>".$etape->IDVEHICULE_ETAPE."</td>";
            echo"<td>".$etape->CONSOMATION_ETAPE."</td>";
             echo"<td>".$etape->CO2_ETAPE."</td>";
            
     
            
            
            echo "</tr>";
        }
        ?>
           
    </table> 
              
 <form action="" method="post">
     <div class="form-group row" style="display:none;">
                         <div class="col-xs-6">
                        <label for="idEtape">idEtape</label>
                   
                       
                         <select  class="form-control" id="idEtape" name="idEtape">
                            <?php
                                            foreach ($lesEtapes as $etape) {
                                           ?>
                            <option value="<?php echo $etape->ID_ETAPE;?>"> <?php echo $etape->ID_ETAPE;?></option>   
                                                 
                            <?php
                                            } 
                           ?>  
                        </select>     
                    </div>
                    </div>
                    
     
       
<div class="form-group row" id="delete">
               <div class="col-xs-4">
               <input  type="submit" name="delete" value="Supprimer" class="btn btn-danger btn-block" />
              
           </div>
</div>
     
 </form>
 
       <?php 
                
                if($this->input->post('delete') !=''){
                   
                 $idEtape = $this->input->post('idEtape'); 
                 $data = array(
                     'ID_ETAPE' => $idEtape,
                    
                    );
                 
                   $this->db->delete('etape', array('ID_ETAPE' => $idEtape));
                   header("refresh: 0;");
                }
                ?>  
   
           
     </div> 
 </div>
        
        
        <div id="partieGauche"> 
<!--        <div style="overflow:auto;height:570px;">-->

 <h1>Totaux</h1>

    <table id="myTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
        
        <tr> 
            
              <th>Longeurs total en Km </th>
          
         <?php
             foreach($LesLongueurs[0] as $value){
                  echo"<td>".$value."km</td>";
    
}   ?>
    </table>
 
  <table id="myTable" class="table table-striped table-bordered" cellspacing="0" width="50%">
        
        <tr> 
            
              <th>Consomation totale</th>
          
         <?php
             foreach($lesConsos[0] as $v){
                  echo"<td>".$v."</td>";
    
}   ?>
    </table>
        </div>
    </body>
</html>
