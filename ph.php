<?php
$edad = trim($_POST["k"]);
$dias=$edad*365;
$meses=$edad*12;
$week=$dias/7;
$hg=$dias*3;
$horas=$dias*24;
$minutes=$horas*60;
$seg=$minutes*60;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/cs.css">
</head>
<body>
    <h1>Cuantos dias has vivido?</h1>
    <div id="conte">
        <div class="eda">
        <form action="" method="post">
        <input type="number" name="k" placeholder="Su edad y te daremos todos los dias que has vivido" required>
        <input type="submit" value="Enviar">
        </form>
        </div>
        <div class="respuestas">
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
        <div class="respuestas">
        <h2>Toda su informacion de tiempo vivido es:</h2>
        <p><b>Años:</b> <?php echo $edad; ?> años</p>
        <p><b>Meses:</b> <?php echo $meses; ?> meses</p>
        <p><b>Semanas:</b> <?php echo round($week,2); ?> semanas</p>
        <p><b>Dias:</b> <?php echo $dias; ?> dias</p>
        <p><b>Horas:</b> <?php echo $horas; ?> horas</p>
        <p><b>Minutos:</b> <?php echo $minutes; ?> minutos</p>
        <p><b>Segundos en este momento:</b> <?php echo $seg; ?> seguntos</p>
        <h2>Informacion extra:</h2>
        <p><b>Horas pasadas con un dispositivo movil:</b> <?php echo $hg; ?> horas</p>
        </div>
    <?php } ?>
        </div>
    </div>
</body>
</html>