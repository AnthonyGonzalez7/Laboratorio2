<?php 
$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
$ressuma = $num1 + $num2;
$resresta = $num1 - $num2;
$resmulti = $num1 * $num2;
$resdiv = $num1 / $num2;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 2</title>
</head>
<body>
<div class="container text-center">
    <br>
    <br>
    <div class="row">
    <div class="card border-secondary d-block mx-auto" style=" width: auto;">
        <div class="card-header">Problema 2</div>
        <div class="card-body text-secundary">
            <h5 class="card-title">La suma de <?php echo "" .$num1 . " + " .$num2 . " es igual a"; ?> : </h5>
            <p class="card-text"> <?php echo $ressuma ?> </p>
        </div>
    </div>
    <br>
    <div class="card border-secondary d-block mx-auto" style=" width: auto;">
        <div class="card-header">Problema 2</div>
        <div class="card-body text-secundary">
            <h5 class="card-title">La resta de <?php echo "" .$num1 . " - " .$num2 . " es igual a"; ?> : </h5>
            <p class="card-text"> <?php echo $resresta ?> </p>
        </div>
    </div>
    <br>

    <div class="card border-secondary d-block mx-auto" style=" width: auto;">
        <div class="card-header">Problema 2</div>
        <div class="card-body text-secundary">
            <h5 class="card-title">La división de <?php echo "" .$num1 . " / " .$num2 . " es igual a"; ?> : </h5>
            <p class="card-text"> <?php echo $resdiv ?> </p>
        </div>
    </div>
    </div>

    <br>
    <div class="row">
    <div class="card border-secondary d-block mx-auto" style=" width: auto;">
        <div class="card-header">Problema 2</div>
        <div class="card-body text-secundary">
            <h5 class="card-title">La multiplicación de <?php echo "" .$num1 . " * " .$num2 . " es igual a"; ?> : </h5>
            <p class="card-text"> <?php echo $resmulti ?> </p>
        </div>
    </div>
    </div>

    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>