<?php
    $n1='';
    $n2='';
    $por=0.0;
    $n1len=strlen($n1);
    $n2len=strlen($n2);

    if (isset($_POST["m"])){
        $n1 = trim($_POST["m"]);
    }
    if (isset($_POST["p"])){
        $n2 = trim($_POST["p"]);
    }
    $por=$n1len+$n2len;
    $por += random_int(0,30);
    for ($i=0; $i < $n1len; $i++) { 
    if (str_contains($n1,'a')) {
        $por+=15;
    }
    }
    for ($i=0; $i < $n2len; $i++) { 
    if (str_contains($n2,'a')) {
         $por+=15;
    }
    }
    if ($por>100) {
        $por=100;
    }
    $ali=strtoupper(substr($n1,0,2) . substr($n2,0,2));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/css.css">
</head>
<h1>Test de Comtabilidad</h1>
<body>
<div id="con">
    <div class="nombres">
        <form action="" method="post">
        <input type="text" name="m" placeholder="Nombre del hombre" required>
        <input type="text" name="p" placeholder="Nombre del mujer" required>
        <input type="submit" value="Enviar">
        </form>
    </div>
    <div class="respuestas">
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
    <div class="respuestas">
    <h2>Porcentaje: <?php echo $por; ?>%</h2>
    <p><b>Persona 1:</b> <?php echo $n1; ?></p>
    <p><b>Persona 2:</b> <?php echo $n2; ?></p>
    <p><b>Alias:</b> <?php echo $ali; ?></p>
    </div>
    <?php } ?>
</div>
</div>
</body>
</html>
