<?php 
$clientes = $_GET["clientes"];

if ($clientes < 200){
    $precio = 95.00;
}

if ($clientes > 200 & $clientes <= 300){
    $precio = 85.00;
}

if ($clientes > 300){
    $precio = 75.00;
}

/* http://lab2.com:81/13/?clientes=250 */

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Title</title>
</head>
<body>
    <div class="container text-center">
        <br>
        <br>
        <div class="row">
        <div class="card border-secondary d-block mx-auto" style=" width: auto;">
            <div class="card-header">La langosta ahumada</div>
            <div class="card-body text-secundary">
                <h5 class="card-title">Tarifa de platillo</h5>
                <h3 class="card-text"> <?php echo $precio ?> </h3>
            </div>
        </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>