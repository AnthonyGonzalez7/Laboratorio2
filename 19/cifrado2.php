<?php 
$n = $_GET["n"];

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Cifrado</title>
</head>
<body>
    
    <div class="container text-center">
    <br><br>
        <div class="row">
            
        <div class="card text-dark bg-light mb-3 d-block mx-auto" style=" width: auto;">
        <div class="card-header">Número Cifrado</div>
        <div class="card-body">
            <h5 class="card-title">El número <?php echo $n . " encriptado con MD5 es"?> </h5>
            <p class="card-text"><?php echo md5($n) ?></p>
        </div>
    </div>
        </div>
        
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>