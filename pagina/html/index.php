<html>
<head>
   <title>Ejemplo de conexión a base de datos</title>
</head>
<body>

    <!DOCTYPE html>
    <html>
    <head>
      <title>Tabla </title>
    </head>
    <body>
    
    <?php
    
    // Establece la conexión a la base de datos
$conn = mysqli_connect("localhost", "root", "admin", "Prueba1");
    
    $result = mysqli_query($conn, "SELECT * FROM Prueba1");
    
    echo "<table>";
    
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['sueldo1'] . "</td>";
        echo "<td>" . $row['sueldo2'] . "</td>";
        echo "<td>" . $row['sueldo3'] . "</td>";
        echo "</tr>";
    }
    
    // Cierra la tabla HTML
    echo "</table>";
    
    // Cierra la conexión a la base de datos
    mysqli_close($conn);
    
    ?>
    
    </body>
    </html>

</body>
</html>