     <?php
        $db_host = "am1shyeyqbxzy8gc.cbetxkdyhwsb.us-east-1.rds.amazonaws.com"; // 
        $db_name = "oeuqkddmrgiuzqck"; //nombre de base de datos
        $db_user = "i0bi71u3ms2d2x38"; //nombre de usuario
        $db_password = "sh5mrnuikcdrz6eh";  //contraseña 
    
      $connection = mysqli_connect('am1shyeyqbxzy8gc.cbetxkdyhwsb.us-east-1.rds.amazonaws.com', 'i0bi71u3ms2d2x38', 'sh5mrnuikcdrz6eh');
    
     mysqli_select_db($connection, $db_name) or die("Error al seleccionar la base de datos:".mysqli_error());
    @mysqli_query("SET NAMES 'utf8'");

   $sql_query = "SELECT * FROM productos";
    $result = mysqli_query($connection, $sql_query);
    $rows = array();
while($r = mysqli_fetch_assoc($result)) {
  $rows[] = $r;
}
print json_encode($rows);
?>
