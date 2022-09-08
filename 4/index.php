<?php 
$horast= $_GET["horast"];
$pphora = $_GET["pphora"];
$salariobruto = $horast * $pphora;
$descuento = 0.2 * $salariobruto;
$salarioneto = $salariobruto - $descuento;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 4</title>
</head>
<body>
    <div class="container text-center">
        <br>
        <br>
        <div class="row">
            <h1>Planilla</h1>
        <table class="table table-secondary table-striped table-hover table-bordered table-sm table-responsive-sm">
            <thead>
                <tr>
                    <th scope="col">Salario Bruto</th>
                    <th scope="col">Descuento</th>
                    <th scope="col">Salario Neto</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $salariobruto ?></td>
                    <td><?php echo $descuento ?></td>
                    <td><?php echo $salarioneto ?></td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>