<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: aliceblue;
            font-family: 'Courier New', Courier, monospace;
        }
        table {
            margin: 30px auto; /* Centra la tabla en la pantalla */
            border: 2px solid gray;
            border-collapse: collapse;
            color: black;
            font-size: 24px;
            background-color: white;
        }
        td, th {
            border: 2px solid gray;
            padding: 10px 20px;
            text-align: center;
        }
        th {
            background-color: blue;
            color: white;
        }
        h1 {
            margin-top: 40px;
            margin-left: 15px auto; /* Centra la tabla en la pantalla */
            margin-bottom: 25px;
            font-family: 'Courier New', Courier, monospace;
            color: blue;
            font-size: 50px;
            text-align: center;
        }
        form {
            margin-left: 26%;
            color: red;
            font-size: 30px;
            font-family: 'Courier New', Courier, monospace;
        }
        #lablnum {
            margin-left: 26%;
            margin-top: 15px;
            border: 2px solid gray;
            background-color: bisque;
            width: 250px;
            height: 70px;
            font-size: 60px;
            font-family: 'Courier New', Courier, monospace;
        }
        #button {
            margin-left: 26%;
            background-color: gray;
            color: white;
            width: 200px;
            height: 60px;
            font-size: 30px;
            
        }
        .mensaje {
            margin-left: 26%;
            margin-top: 20px;
            font-size: 24px;
            color: blue;
        }
    </style>
</head>
<body>
    <h1>Tabla de Multiplicar</h1>
    <form action="" method="POST">
        <label for="lablnum">Introduce un numero para hacer su tabla de multiplicar<br></label>
        <input id="lablnum" type="number" name="numero" required /><br>
        <input id="button" type="submit" value="Enviar"><br>
    </form>

    <?php
    // comprobamos recepcion del numero
    if (isset($_POST["numero"])) {
        
        $num = intval($_POST["numero"]); //pasamos ha entero
        
        echo "<p class='mensaje'>Este es el numero elegido: $num </p>";

        // Dibujamos la tabla de multiplicar completa
        echo "<table>";
        echo "<thead><tr><th colspan='2'>Tabla del $num</th></tr></thead>";
        echo "<tbody>";
        
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $num * $i;
            echo "<tr>";
            echo "<td>$num x $i</td>";
            echo "<td>$resultado</td>";
            echo "</tr>";
        }
        
        echo "</tbody>";
        echo "</table>";
    }
    ?>   

</body>
</html>