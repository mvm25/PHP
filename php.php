<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora IMC</title>
    <link rel="stylesheet" href="css/c.css">
</head>
<body>
    <h1>Calcula tu IMC</h1>
    <form action="" method="post">
        <input type="number" name="m" step="0.1" placeholder="Peso en kg" required>
        <input type="number" name="p" step="0.01" placeholder="Altura en metros" required>
        <input type="submit" value="Calcular">
    </form>

    <div class="respuestas">
        <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") { 
            $pe = $_POST["m"]; 
            $al = $_POST["p"]; 
            
            if ($al > 0) {
                $IMC = $pe / ($al * $al);
                echo "<h2>Su IMC es de: " . round($IMC, 2) . "</h2>";
            } else {
                echo "<h2>La altura debe ser mayor a 0</h2>";
            }
            if ($IMC<18.5) {
                echo "<h2>Su peso es muy bajo</h2>";
            }
            elseif (($IMC>=18.5) && ($IMC<24.9)) {
                echo "<h2>Su peso es promedio</h2>";
            }
            elseif (($IMC>=25) && ($IMC<29.9)) {
                echo "<h2>Tiene sobrepeso manteca</h2>";
            }
            else {
                echo "<h2>Tienes obesidad</h2>";
            }
        } 
        ?>
    </div>
</body>
</html>
