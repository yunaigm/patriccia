
<?php include_once('conexBDyunai.php');?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Database</title>
</head>
<body>
    <h1>Search Database</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="search-type">Search by:</label>
        <select id="search-type" name="search-type">
            <option value="name">Name</option>
            <option value="id">ID</option>
        </select>
        <br><br>
       <?php
    
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
            $search_type = $_POST["search-type"];
            $search_term = $_POST["search-term"];

          
            if ($search_type == "name") {
                $sql = "SELECT * FROM talumne WHERE Nombre LIKE '%".$search_term."%'";
            } else {
                $sql = "SELECT * FROM talumne WHERE id = ".$search_term;
            }

        
            $result = $conexion->query($sql);

         
            if ($result->num_rows > 0) {
                echo "<table>";
                echo "<tr><th>ID</th><th>Name</th><th>Apellidos</th><th>DNI</th><th>Foto</th></tr>";
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$row["id"]."</td>";
                    echo "<td>".$row["Nombre"]."</td>";
                    echo "<td>".$row["Apellidos"]."</td>";
                    echo "<td>".$row["DNI"]."</td>";
                    echo "<td>".$row["foto"]."</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "No results found.";
            }
        }





        mysqli_close($conexion);
        ?>
        <br><br>
        <label for="search-term">Search term:</label>
        <input type="text" id="search-term" name="search-term">
        <br><br>
        <input type="submit" value="Search">
    </form>
</body>
</html>