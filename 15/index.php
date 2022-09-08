<?php
$tipocard = $_GET["tipocard"];
if ($tipocard == 1){
    $aumento = 25;
} elseif ($tipocard == 2){
    $aumento = 35;
}elseif ($tipocard == 3){
    $aumento = 40;
}elseif ($tipocard >= 4){
    $aumento = 50;
}
/* http://lab2.com:81/15/?tipocard=1 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 15</title>
</head>
<body>
        <div class="container text-center">
                <br>
                <br>
                <div class="row">
                <div class="card border-secondary d-block mx-auto" style=" width: auto;">
                    <div class="card-header">Pueblo desconocido</div>
                    <div class="card-body text-secundary">
                    <h5 class="card-title">Limite de crédito</h5>
                        <h5 class="card-title">Usted tendra un aumento del </h5>
                        <h3 class="card-text"> <?php echo $aumento . "%" ?> </h3>
                        <h5 class="card-text"> por portar una tarjeta de credito tipo <?php echo $tipocard?> </h5>
                    </div>
                </div>
                </div>
            </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>