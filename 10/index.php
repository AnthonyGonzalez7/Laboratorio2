<?php 
$horas = $_GET["horas"];
$minutos = $_GET["minutos"];
$segundos = $_GET["segundos"];

$horasenseg = $horas * 3600;
$minenseg = $minutos * 60;

$total = $horasenseg + $minenseg + $segundos;

$precio = $total * 0.25;

/* http://lab2.com:81/10/?horas=5&minutos=30&segundos=20 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 10</title>
</head>
<body>
<div class="container text-center">
    <br>
    <br>
    <div class="row">
    <div class="card border-secondary d-block mx-auto" style=" width: auto;">
        <div class="card-header">Problema 10</div>
        <div class="card-body text-secundary">
            <h5 class="card-title">El coste de un trabajo con una duración de <?php echo $horas . " horas ". $minutos ." minutos y " . $segundos ." segundos"?> es de </h5>
            <h1 class="card-text"> <?php echo $precio ."$" ?> </h1>
        </div>
    </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>