<!DOCTYPE html>
<head>
    <style>
        .btn{
            background: #fff;
            color: darkred
            padding: 10px;
            text-decoration: none;
        }

        .btn:hover{
            background-color: darkred;
            color: #fff;
        }
    </style>
</head>

<body></body>
</html>



<?php

include_once('conexBDyunai.php');


#Script para borrar alumnos:
if (isset($_POST['deletebtn'])) {
    $id = $_POST['id2'];
    $show = "SELECT * FROM `tdomicilio` WHERE `idDomicilio` = '$id' ";
    $sql = "DELETE FROM `tdomicilio` WHERE `idDomicilio` = '$id' ";
    $print_data = mysqli_query ($conexion, $show);
    #Vamos a imprimir los datos del alumno que va a ser eliminado, para mostrar el cliente el alumno que ha eliminado:
    
    echo "
        <table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-  collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\"    id=\"AutoNumber2\" bgcolor=\"#C0C0C0\">
        <tr>
        <td width=100>IDDomicilio:</td> 
        <td width=100>Tipovia</td> 
        <td width=100>Direccion</td> 
        <td width=100>Portal</td> 
        <td width=100>CP</td>
        <td width=100>idAlumne</td>
        </tr>";

        if (mysqli_num_rows($print_data) > 0) {
            
        print "<tr>"; 
         print "<td>" . $show_before_deletion ['idDomicilio'] . "</td>"; 
        print "<td>" . $show_before_deletion ['tipovia'] . "</td>"; 
         print "<td>" . $show_before_deletion ['direccion'] . "</td>"; 
        print "<td>" . $show_before_deletion ['portal'] . "</td>";
        print "<td>" . $show_before_deletion ['CP'] . "</td>";
        print "<td>" . $show_before_deletion ['idAlumne'] . "</td>";
        print "</tr>";        
        }
        
    print "</table>"; 





    #Y finalmente vamos a eliminar el alumno;
    $result2 = mysqli_query($conexion, $sql);
    if(!$result2) {
        die('Error deleting data: ' . mysqli_error($conexion));
    } else {
       $eliminadobien = 'yes';
    }
}






#Seleccionamos todos los datos de las dos tablas con las dos querys:
$consulta = 'SELECT * FROM tdomicilio';
$consulta2 = 'SELECT * FROM talumne';

#Hacemos dos conexiones para consultar las dos tablas:
$rs = mysqli_query($conexion, $consulta);
$rs2 = mysqli_query($conexion, $consulta2);

$resultat = mysqli_query($conexion, $consulta);

#----------------------------------------------------------------------------------------------------------------------------------

#imprimimos talumno:

print "
<table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-  collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\"    id=\"AutoNumber2\" bgcolor=\"#C0C0C0\">
 <tr>
 <td width=100>ID:</td> 
<td width=100>Nombre</td> 
<td width=100>Apellidos</td> 
<td width=100>DNI</td> 
<td width=100>Foto</td>
<td width=100>Operation</td>
</tr>"; 

while($row = mysqli_fetch_array($rs2)){ 
    print "<tr>"; 
    print "<td>" . $row['id'] . "</td>"; 
    print "<td>" . $row['Nombre'] . "</td>"; 
    print "<td>" . $row['Apellidos'] . "</td>"; 
    print "<td>" . $row['DNI'] . "</td>";
    print "<td>" . $row['foto'] . "</td>";
    print "<td>";
    print "<div class = 'btn-group'>";
    print "<a class='btn btn-danger' href='./delete.php?id= " .$row['id'] . "'>Edit</a> ";
    print "</div>";
    print "</td>";
    print "</tr>";
} 
print "</table>"; 


echo "<br>";





echo "</br>";

#imprimimos tdomicilio:

print "
<table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-  collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\"    id=\"AutoNumber2\" bgcolor=\"#C0C0C0\">
 <tr>
 <td width=100>IDDomicilio:</td> 
<td width=100>Tipovia</td> 
<td width=100>Direccion</td> 
<td width=100>Portal</td> 
<td width=100>CP</td>
<td width=100>idAlumne</td>
<td width=100>Operation</td>

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
    print "<td><form method='post'>
              <input type='hidden' name='id2' value='".$row['idDomicilio']."'>
              <button type='submit' name='deletebtn' class='btn btn-danger'>Delete</button>
          </form></td>";
      print "</tr>"; 
    } 
    print "</table>"; 
    
echo '<br>';


echo '</br>';
print "</table>"; 

    # Al eliminar ens dirà que s'ha eliminat el alumnes: (les seves dades)
    if (isset($eliminadobien) == 'yes') {
        $z=$_POST['id2'];

        echo "Se ha eliminado el alumno con la id $id. A continuación puedes ver los datos eliminados";

        $query_mostrar_deleted = "SELECT * FROM `tdomicilio` WHERE `idDomicilio` = '$z' " ;
        $exec_query_borrar = mysqli_query ($conexion, $query_mostrar_deleted);
        echo "
        <table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-  collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\"    id=\"AutoNumber2\" bgcolor=\"#C0C0C0\">
        <tr>
        <td width=100>IDDomicilio:</td> 
        <td width=100>Tipovia</td> 
        <td width=100>Direccion</td> 
        <td width=100>Portal</td> 
        <td width=100>CP</td>
        <td width=100>idAlumne</td>
        </tr>";

        while ( $array1 = mysqli_fetch_array($exec_query_borrar))
        { 
            print "<tr>"; 
            print "<td>" . $array1['idDomicilio'] . "</td>"; 
            print "<td>" . $array1['tipovia'] . "</td>"; 
            print "<td>" . $array1['direccion'] . "</td>"; 
            print "<td>" . $array1['portal'] . "</td>";
            print "<td>" . $array1['CP'] . "</td>";
            print "<td>" . $array1['idAlumne'] . "</td>";
            print "</tr>";        
        }
        print "</table>"; 

    }
    else{
        echo '';
    }
    
    echo '<br>';

    echo '</br>';

    #Si ens quedem sense dades ens dirà que no tenim dades a mostrar dels alumnes
    $row4 = mysqli_num_rows($rs);
    if ($row4 > 0) {
    echo ' ';
    } else {
    echo 'No hi ha mes alumnes per mostrar';
    }
    

?>
