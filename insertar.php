<?php
##Inserim les dades obtingudes pel formulari:
include_once('conexBDyunai.php');
?>
<DOCTYPE html>

    <head></head>
        
        <!--INSERTAR ALUMNOS TALUMNO-->
        <h1>Insertar alumnos en la tabla talumno:</h1>
        <form action="insertar.php" method="post" name="form1">
            <table border = "1">
                <tr>
                    <td>ID</td><td><input name='id1' type='varchar' value = " " required/> </td>
                </tr>
                <tr>
                    <td>Nombre</td><td><input name='nombre1' type= 'varchar' value=" " required/> </td>
                </tr>
                <tr>
                    <td>Apellidos</td><td><input name= 'apellidos1' type='varchar' value="" required/></td>
                </tr>
                <tr>
                    <td>DNI</td><td><input name= 'dni1' type= 'varchar' value= "" required/></td>
                </tr>
                <tr>
                    <td>Foto</td><td><input name='foto1' type='file' value="" required/></td>
                </tr>
            
            </table>
            <input name="enviat" type="hidden" value="1" />
            <input name="enviar1" type="submit" value="inserir" />
            <input name="Enviar" type="reset" value="reset" />
        </form>            
            

        <!--Vamos a comprobar si el alumno existe en la BBDD-->
        <?php
        if (isset($_POST["enviar1"])){
            $result= $_POST["id1"];
            $data= "SELECT * FROM `talumne` WHERE `id` = '$result'  ";
            $getdata= mysqli_query($conexion, $data);
            
            #Si el alumno no existe:
            if (mysqli_num_rows($getdata) == 0) {
                echo "Alumno insertado correctamente. Puedes ver los datos insertados a continuación. ";
                $inyectar = "INSERT INTO `talumne` (`id`, `Nombre`, `Apellidos`, `DNI`, `foto`) 
                VALUES ('".$_POST['id1']."','".$_POST['nombre1']."','".$_POST['apellidos1']."','".$_POST['dni1']."','".$_POST['foto1']."')";
                $query1 = mysqli_query($conexion, $inyectar);
                echo '<br>';

                $data= "SELECT * FROM `talumne` WHERE `id` = '$result'  ";
                $getdata= mysqli_query($conexion, $data);
                
                echo "
                <table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-  collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\"    id=\"AutoNumber2\" bgcolor=\"#C0C0C0\">
                <tr>
                <td width=100>Id:</td> 
                <td width=100>Nombre</td> 
                <td width=100>Apellidos</td> 
                <td width=100>DNI</td> 
                <td width=100>Foto</td>
                </tr>";

                while ( $array1 = mysqli_fetch_array($getdata))
                { 
                    print "<tr>"; 
                    print "<td>" . $array1['id'] . "</td>"; 
                    print "<td>" . $array1['Nombre'] . "</td>"; 
                    print "<td>" . $array1['Apellidos'] . "</td>"; 
                    print "<td>" . $array1['DNI'] . "</td>";
                    print "<td>" . $array1['foto'] . "</td>";
                    print "</tr>"; 
                    print "</table>"; 
                }

            #Si el alumno ya existe:
            }else {
                echo "Este alumno ya existe. Puedes comprobar sus datos a continuación :";
                
                echo '<br>';
            
                echo '</br>';

                #Query para mostrar datos del alumno ya existent
                $data= "SELECT * FROM `talumne` WHERE `id` = '$result'  ";
                $getdata= mysqli_query($conexion, $data);
                
                 
                echo "
                <table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-  collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\"    id=\"AutoNumber2\" bgcolor=\"#C0C0C0\">
                <tr>
                <td width=100>Id:</td> 
                <td width=100>Nombre</td> 
                <td width=100>Apellidos</td> 
                <td width=100>DNI</td> 
                <td width=100>Foto</td>
                </tr>";

                while ( $array1 = mysqli_fetch_array($getdata))
                { 
                    print "<tr>"; 
                    print "<td>" . $array1['id'] . "</td>"; 
                    print "<td>" . $array1['Nombre'] . "</td>"; 
                    print "<td>" . $array1['Apellidos'] . "</td>"; 
                    print "<td>" . $array1['DNI'] . "</td>";
                    print "<td>" . $array1['foto'] . "</td>";
                    print "</tr>"; 
                    print "</table>"; 
                }
                echo '<br>';

                echo " <a href='insertar.php'> Haz click aqui para volver a insertar un alumno nuevo </a>";
                }
        }
        ?>








        <br>


        </br>











            
    <!--INSERTAR ALUMNOS TDOMICILIO-->
    <h1>Insertar alumnos en la tabla tdomicilio:</h1>
        <form action="insertar.php" method="post" name="form1">
            <table border = "1">
                <tr>
                    <td>idDomicilio</td><td><input name='iddom' type='varchar' value = " " required/> </td>
                </tr>
                <tr>
                    <td>tipovia</td><td><input name='via' type= 'varchar' value=" " required/> </td>
                </tr>
                <tr>
                    <td>direccion</td><td><input name= 'direcc' type='varchar' value="" required/></td>
                </tr>
                <tr>
                    <td>portal</td><td><input name= 'portal1' type= 'varchar' value= "" required/></td>
                </tr>
                <tr>
                    <td>CP</td><td><input name='codigop' type='varchar' value="" required/></td>
                </tr>
                <tr>
                    <td>idAlumne</td><td><input name='idalumne' type='varchar' value="" required/></td>
                </tr>

            </table>
            <input name="enviat" type="hidden" value="1" />
            <input name="enviar" type="submit" value="inserir" />
            <input name="Enviar" type="reset" value="reset" />
        </form>            
            

        <!--Vamos a comprobar si el alumno existe en la BBDD-->
        <?php
        if (isset($_POST["enviar"])){
            $result= $_POST["iddom"];
            $data= "SELECT * FROM `tdomicilio` WHERE `idDomicilio` = '$result'  ";
            $getdata= mysqli_query($conexion, $data);
            
            #Si el alumno no existe:
            if (mysqli_num_rows($getdata) == 0) {
                echo "Alumno insertado correctamente. Puedes ver los datos insertados a continuación. ";
                $inyectar = "INSERT INTO `tdomicilio` (`idDomicilio`, `tipovia`, `direccion`, `portal`, `CP`, `idAlumne`) 
                VALUES ('".$_POST['iddom']."','".$_POST['via']."','".$_POST['direcc']."','".$_POST['portal1']."','".$_POST['codigop']."','".$_POST['idalumne']."')";
                $query1 = mysqli_query($conexion, $inyectar);
                echo '<br>';

                $data= "SELECT * FROM `tdomicilio` WHERE `idDomicilio` = '$result'  ";
                $getdata= mysqli_query($conexion, $data);
                
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

                while ( $array1 = mysqli_fetch_array($getdata))
                { 
                    print "<tr>"; 
                    print "<td>" . $array1['idDomicilio'] . "</td>"; 
                    print "<td>" . $array1['tipovia'] . "</td>"; 
                    print "<td>" . $array1['direccion'] . "</td>"; 
                    print "<td>" . $array1['portal'] . "</td>";
                    print "<td>" . $array1['CP'] . "</td>";
                    print "<td>" . $array1['idAlumne'] . "</td>";
                    print "</tr>"; 
                    print "</table>"; 
                }

            #Si el alumno ya existe:
            }else {
                echo "Este alumno ya existe. Puedes comprobar sus datos a continuación :";
                
                echo '<br>';
            
                echo '</br>';

                #Query para mostrar datos del alumno ya existent
                $data= "SELECT * FROM `tdomicilio` WHERE `idDomicilio` = '$result'  ";
                $getdata= mysqli_query($conexion, $data);
                
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

                while ( $array1 = mysqli_fetch_array($getdata))
                { 
                    print "<tr>"; 
                    print "<td>" . $array1['idDomicilio'] . "</td>"; 
                    print "<td>" . $array1['tipovia'] . "</td>"; 
                    print "<td>" . $array1['direccion'] . "</td>"; 
                    print "<td>" . $array1['portal'] . "</td>";
                    print "<td>" . $array1['CP'] . "</td>";
                    print "<td>" . $array1['idAlumne'] . "</td>";
                    print "</tr>"; 
                    print "</table>"; 
                }
                echo '<br>';

                echo " <a href='insertar.php'> Haz click aqui para volver a insertar un alumno nuevo </a>";
                }
        }

        ?>


    </body>
    </html>