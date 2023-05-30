

<?php include_once('conexBDyunai.php');?>


<!DOCTYPE html>
<head><title>Consultar alumno</title><meta http-equiv="content-type" content="text/html;charset=utf-8" /></head>
<body>

<h1>Consulta de Docente</h1>

<?php
$sql="SELECT * FROM talumne;";

// SQL query
$strSQL = "SELECT * FROM talumne" ;
$count = "SELECT COUNT(*) FROM talumne";
$count2 = "SELECT COUNT(*) FROM tdomicilio";
// Execute the query (the recordset $rs contains the result)
$rs = mysqli_query($conexion, $strSQL);
$rs2 = mysqli_query($conexion, $count);
$talumne = mysqli_fetch_all($rs2);

echo "Tabla 1";
echo "</br>"; 





$rs3 = mysqli_query($conexion, $count2);
$tdomicilio = mysqli_fetch_all($rs3, MYSQLI_ASSOC);


   


  print "
  <table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-  collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\"    id=\"AutoNumber2\" bgcolor=\"#C0C0C0\">
   <tr>
   <td width=100>ID:</td> 
  <td width=100>Nombre</td> 
  <td width=100>Apellidos</td> 
  <td width=100>DNI</td> 
  <td width=100>Foto</td>
  </tr>"; 

  
  
 while($row = mysqli_fetch_array($rs))
 { 
print "<tr>"; 
print "<td>" . $row['id'] . "</td>"; 
print "<td>" . $row['Nombre'] . "</td>"; 
print "<td>" . $row['Apellidos'] . "</td>"; 
print "<td>" . $row['DNI'] . "</td>";
print "<td><img src='" . $row['foto'] . "'></td>";
print "</tr>";
} 
print "</table>"; 

echo "El num total de filas es";
print_r($talumne);

echo "</br>";  

echo "</br>";  

echo "</br>";  

echo "Tabla 2";
echo "</br>";  





 // SQL query
$strSQL = "SELECT * FROM tdomicilio" ;

// Execute the query (the recordset $rs contains the result)
$rs = mysqli_query($conexion, $strSQL);

  print "
  <table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-  collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\"    id=\"AutoNumber2\" bgcolor=\"#C0C0C0\">
   <tr>
   <td width=100>IDDomicilio:</td> 
  <td width=100>Tipovia</td> 
  <td width=100>Direccion</td> 
  <td width=100>Portal</td> 
  <td width=100>CP</td>
  <td width=100>idAlumne</td>
  </tr>"; 
  
 while($row = mysqli_fetch_array($rs))
 { 
print "<tr>"; 
print "<td>" . $row['idDomicilio'] . "</td>"; 
print "<td>" . $row['tipovia'] . "</td>"; 
print "<td>" . $row['direccion'] . "</td>"; 
print "<td>" . $row['portal'] . "</td>";
print "<td>" . $row['CP'] . "</td>";
print "<td>" . $row['idAlumne'] . "</td>";
print "</tr>"; 
} 
print "</table>"; 

echo "El num total de filas es";
print_r($tdomicilio);


mysqli_close($conexion);

?>

</body>

</html>