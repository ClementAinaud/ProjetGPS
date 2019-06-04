<html>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<head>
<title>Registration form</title>
</head>
 
<body> 
  
    <h1>Crétation d'un nouveau véhicule</h1>
    <br> <br>
    <div class="col-sm-6"> 
          
 <form method="post">
 <table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr>
    <td width="230">Entrer Nom Vehicule </td>
    <td width="329"><input id ="NOM_VEHICULE"type="text" name="NOM_VEHICULE"/></td>
  </tr>
  <tr>
    <td>Entrer le type de carburant </td>
    <td><input type="text" name="TYPECARBURANT_VEHICULE"/></td>
  </tr>
  <tr>
    <td>Entrer la consomation annuele</td>
    <td><input type="text" name="CONSOMATION_VEHICULE"/></td>
  </tr>
  <tr>
    <td width="230">Entrer le co2 émis </td>
    <td width="329"><input type="text" name="CO2_VEHICULE"/></td>
  </tr>
  <tr>
    <td width="230">Entrer la classe du vehicle </td>
    <td width="329"><input type="text" name="CLASSE_VEHICULE"/></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" name="insert" value="Enregistrer"/></td>
  </tr>
</table>
 
 </form>
  
    
   
        <table id="myTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
        
        <tr> 
              <th>ID vehicule</th>
              <th>Nom Vehicule</th>
              <th>type de carburant</th>
              <th>consomation annuele</th>
              <th>co2 émis </th>
              <th>classe du vehicle</th>
           
        </tr>    
       
        <?php 
        
        foreach($leVehicule as $vehicule){
            echo "<tr>";
           
            echo"<td>".$vehicule->ID_VEHICULE."</td>";
            echo"<td>".$vehicule->NOM_VEHICULE."</td>";
            echo"<td>".$vehicule->TYPECARBURANT_VEHICULE."</td>";
            echo"<td>".$vehicule->CONSOMATION_VEHICULE."</td>";
            echo"<td>".$vehicule->CO2_VEHICULE."</td>";
            echo"<td>".$vehicule->CLASSE_VEHICULE."</td>";
     
            
            
            echo "</tr>";
        }
        ?>
           
    </table> 
        </div>  
    
    <h1>Creation d'une nouvelle route</h1>
   
    <div class="col-sm-6"> 
        <table id="myTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
        
        <tr> 
              <th>ID route</th>
              <th>Nom route</th>
              <th>type de route</th>
           
        </tr>    
       
        <?php 
        
        foreach($leRoute as $vehicule){
            echo "<tr>";
           
            echo"<td>".$vehicule->ID_ROUTE."</td>";
            echo"<td>".$vehicule->NOM_ROUTE."</td>";
            echo"<td>".$vehicule->TYPE_ROUTE."</td>";
     
            
            
            echo "</tr>";
        }
        ?>
           
    </table> 
        
   
    
 <form method="post">
 <table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr>
    <td width="230">Entrer nom route </td>
    <td width="329"><input id ="NOM_ROUTE"type="text" name="NOM_ROUTE"/></td>
  </tr>
  <tr>
    <td>Entrer le type de route </td>
    <td><input id ="TYPE_ROUTE" type="text" name="TYPE_ROUTE"/></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" name="insert2" value="Enregistrer"/></td>
  </tr>
</table>
 
 </form>
    </div>
</body>


                <?php 
                if($this->input->post('insert2') !=''){
                   $NOM_ROUTE  = $this->input->post('NOM_ROUTE'); 
                   $TYPE_ROUTE  = $this->input->post('TYPE_ROUTE');
                  
                   
                   $data = array(
                     
                     'NOM_ROUTE' => $NOM_ROUTE,
                     'TYPE_ROUTE' =>$TYPE_ROUTE,
                       
                      
                   );
                   $this->db->insert('route',$data);
                   header("refresh: 0;");
                }
                
                if($this->input->post('insert') !=''){
                   $NOM_VEHICULE  = $this->input->post('NOM_VEHICULE'); 
                   $TYPECARBURANT_VEHICULE  = $this->input->post('TYPECARBURANT_VEHICULE');
                   $CONSOMATION_VEHICULE  = $this->input->post('CONSOMATION_VEHICULE');
                   $CO2_VEHICULE  = $this->input->post('CO2_VEHICULE');
                   $CLASSE_VEHICULE  = $this->input->post('CLASSE_VEHICULE');
                  
                   
                   $data = array(
                     
                     'NOM_VEHICULE' => $NOM_VEHICULE,
                     'TYPECARBURANT_VEHICULE' =>$TYPECARBURANT_VEHICULE,
                     'CONSOMATION_VEHICULE' =>$CONSOMATION_VEHICULE,
                     'CO2_VEHICULE' =>$CO2_VEHICULE,
                     'CLASSE_VEHICULE' =>$CLASSE_VEHICULE,
                      
                   );
                   $this->db->insert('vehicule',$data);
                   header("refresh: 0;");
                }
                ?>


</html>