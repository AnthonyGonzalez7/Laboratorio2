<?php 
$ca = $_GET["ca"];

if ($ca == 1 ){
    $bono = 100;
}
else if ($ca == 2 ){
    $bono = 200;
}
else if ($ca == 3 ){
    $bono = 300;
}
else if ($ca == 4 ){
    $bono = 400;
}
else if ($ca == 5 ){
    $bono = 500;
}
else if ($ca >= 5 ){
    $bono = 1000;
}


/* http://lab2.com:81/14/?ca=5 */

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 14</title>
</head>
<body>
    <div class="container text-center">
            <br>
            <br>
            <div class="row">
            <div class="card border-secondary d-block mx-auto" style=" width: auto;">
                <div class="card-header">Control de bonos</div>
                <div class="card-body text-secundary">
                    <h5 class="card-title">Usted tendra un bono de </h5>
                    <h3 class="card-text"> <?php echo $bono . "$" ?> </h3>
                    <h5 class="card-text"> por laborar <?php echo $ca . " años en la empresa"?> </h5>
                </div>
            </div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>