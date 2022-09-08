<?php 
$monto = $_GET["monto"];
$cuarenta = (40 * $monto) / 100;
$treinta = (30 * $monto) / 100;



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 7</title>
</head>
<body>
    <div class="container text-center">
            <br>
            <br>
            <div class="row">
                <h1>Hospital 3000</h1>
                <h3>Presupuesto</h3>


                <table class="table table-success table-striped table-hover table-bordered table-sm table-responsive-sm d-block mx-auto" style=" width: auto;">
                <thead>
                    <tr>
                        <th scope="col">Monto del presupuesto</th>
                        <th scope="col"> <?php echo $monto?> </th>
                    </tr>
                </thead>
            </table>


            <table class="table table-secondary table-striped table-hover table-bordered table-sm table-responsive-sm">
                <thead>
                    <tr>
                        <th scope="col">Área</th>
                        <th scope="col">%</th>
                        <th scope="col">Monto correspondiente</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Ginecología</td>
                        <td>40%</td>
                        <td> <?php echo $cuarenta ?> </td>
                    </tr>
                    <tr>
                        <td>Traumatología</td>
                        <td>30%</td>
                        <td> <?php echo $treinta ?> </td>
                    </tr>
                    <tr>
                        <td>Pediatría</td>
                        <td>30%</td>
                        <td> <?php echo $treinta ?> </td>
                    </tr>
                </tbody>
            </table>




            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>