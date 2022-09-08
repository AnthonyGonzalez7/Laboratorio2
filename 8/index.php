<?php 
$fundador1 = $_GET["fundador1"];
$fundador2 = $_GET["fundador2"];
$fundador3 = $_GET["fundador3"];

$montof1 = $_GET["montof1"];
$montof2 = $_GET["montof2"];
$montof3 = $_GET["montof3"];

$inversion = $montof1 + $montof2 + $montof3;

$porcentajef1 = ($montof1/$inversion)*100;
$porcentajef2 = ($montof2/$inversion)*100;
$porcentajef3 = ($montof3/$inversion)*100;

$totalinv = $porcentajef1 + $porcentajef2 + $porcentajef3;

/* http://lab2.com:81/8/?fundador1=Jose&montof1=5000&fundador2=Roman&montof2=7000&fundador3=Luis&montof3=3000 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 8</title>
</head>
<body>
<div class="container text-center">
            <br>
            <br>
            <div class="row">
                <h1>Acciones</h1>
                <h3>inversiones</h3>


                <table class="table table-success table-striped table-hover table-bordered table-sm table-responsive-sm d-block mx-auto" style=" width: auto;">
                <thead>
                    <tr>
                        <th scope="col">Accionistas</th>
                        <th scope="col">Presupuesto</th>
                        <th scope="col">Porcentaje</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> <?php echo $fundador1 ?> </td>
                        <td> <?php echo $montof1 ?> </td>
                        <td> <?php echo round($porcentajef1, 2) ."%"?> </td>
                    </tr>   
                    <tr>
                        <td> <?php echo $fundador2 ?> </td>
                        <td> <?php echo $montof2 ?> </td>
                        <td> <?php echo round($porcentajef2, 2) ."%"?> </td>
                    </tr>   
                    <tr>
                        <td> <?php echo $fundador3 ?> </td>
                        <td> <?php echo $montof3 ?> </td>
                        <td> <?php echo round($porcentajef3, 2) ."%"?> </td>
                    </tr>   
                    <tr>
                        <th scope="col">Total</th>
                        <th scope="col"> <?php echo $inversion ?></th>
                        <th scope="col"> <?php echo round($totalinv, 2) ."%"?> </th>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>