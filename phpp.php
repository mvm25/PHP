<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/lul.css">
</head>
<body>
<h1>Analizador de Frases Motivacionales</h1>

<form method="POST">
    <input type="text" name="frase" placeholder="Escribe tu frase motivacional" required>
    <br>
    <button type="submit">Analizar</button>
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $frase = strtolower(trim($_POST["frase"]));
    $nivelCringe = 0;
    $nivelCursi = 0;
    $nivelRandom = 0;

    $cantidadPalabras = str_word_count($frase);

    $nivelCringe += $cantidadPalabras;
    $nivelCursi += $cantidadPalabras;
    $nivelRandom += $cantidadPalabras;

    if(str_contains($frase, "exito")){
        $nivelCringe += 15;
        $nivelCursi += 15;
    }

    if(str_contains($frase, "meta")){
        $nivelCringe += 15;
        $nivelCursi += 15;
    }

    if(str_contains($frase, "sueños")){
        $nivelCringe += 15;
        $nivelCursi += 15;
    }

    if(str_contains($frase, "When")){
        $nivelCringe += 30;
    }

    if(str_contains($frase, "amor")){
        $nivelCursi += 20;
    }

    if(str_contains($frase, "Pov")){
        $nivelCringe += 15;
    }

    $numeroRandom = random_int(0,20);
    $nivelRandom += $numeroRandom;

    echo "<div class='resultado'>";
    echo "<h2>Resultados del análisis:</h2>";
    echo "<p><strong>Frase:</strong> $frase</p>";
    echo "<p><strong>Cantidad de palabras:</strong> $cantidadPalabras</p>";
    echo "<hr>";
    echo "<p>🔥 Nivel Cringe: $nivelCringe</p>";
    echo "<p>💖 Nivel Cursi: $nivelCursi</p>";
    echo "<p>🎲 Nivel Random: $nivelRandom</p>";
    echo "</div>";
}
?>
</body>
</html>