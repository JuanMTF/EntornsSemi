<!-- Crea un formulari que permeta seleccionar un departament.
Segons el departament seleccionat , indicarà un missatge personalitzat amb el
pressupost del departament. Els pressupostos dels diferents departaments son:
• El departament d’informàtica té un pressupost de 500 €.
• El departament de Llengua té un pressupost de 300€.
• El departament de Matemàtiques té un pressupost de 600 €.
• El departament d’Anglès té un pressupost de 200 €. -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departaments</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            color: #333;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        select {
            padding: 10px;
            margin-bottom: 20px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <!-- formulario p1ara seleccionar un departamento -->
    <h1>Pressupostos dels departaments</h1> 
    <form action="" method="POST">
        <label for="departament">Selecciona un departament:</label><br>
        <select id="departament" name="departament" required>
            <option value="">--Selecciona--</option>
            <option value="informatica">Informàtica</option>
            <option value="llengua">Llengua</option>
            <option value="matematiques">Matemàtiques</option>
            <option value="angles">Anglès</option>
        </select>
        <input type="submit" value="Enviar">
    <?php
       /* Comprovar si s'ha enviat el formulari i mostrar el pressupost corresponent */
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $departament = $_POST["departament"];
            
            switch ($departament) {
                case "informatica":
                    echo "<p> El departament d’informàtica té un pressupost de 500 €</p>";
                    break;
                case "llengua":
                    echo "<p> El departament de Llengua té un pressupost de 300€.</p>";
                    break;
                case "matematiques":
                    echo "<p> El departament de Matemàtiques té un pressupost de 600 €.</p>";
                    break;
                case "angles":
                    echo "<p> El departament d’Anglès té un pressupost de 200 €.</p>";
                    break;
                default:
                    echo "<p>Departament no vàlid.</p>";
                    exit();
            }
        }
    ?>
    </body>
</html>
