<html>
<head>
<title>Registration form</title>
</head>
 
<body>
 <form method="post">
 <table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr>
    <td width="230">Enter Your Name </td>
    <td width="329"><input id ="NOM_VEHICULE"type="text" name="NOM_VEHICULE"/></td>
  </tr>
  <tr>
    <td>Enter Your Type </td>
    <td><input type="text" name="TYPECARBURANT_VEHICULE"/></td>
  </tr>
  <tr>
    <td>Enter Your Conso </td>
    <td><input type="text" name="CONSOMATION_VEHICULE"/></td>
  </tr>
  <tr>
    <td width="230">Enter Your Co2 </td>
    <td width="329"><input type="text" name="CO2_VEHICULE"/></td>
  </tr>
  <tr>
    <td width="230">Enter Your classe </td>
    <td width="329"><input type="text" name="CLASSE_VEHICULE"/></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" name="insert" value="Save Data"/></td>
  </tr>
</table>
 
 </form>
</body>


                <?php 
                
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