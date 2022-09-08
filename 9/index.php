<?php 
$halum = $_GET["halum"];
$malum = $_GET["malum"];

$totalalumnos = $halum + $malum;

$porcentajeh = ($halum/$totalalumnos)*100;
$porcentajem = ($malum/$totalalumnos)*100;

/* http://lab2.com:81/9/?halum=24&malum=30 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 9</title>
</head>
<body>
    <div class="container text-center">
            <br>
            <br>
            <div class="row">
                <h1>Alumnos</h1>
            <table class="table table-secondary table-striped table-hover table-bordered table-sm table-responsive-sm">
                <thead>
                    <tr>
                        <th scope="col">Alumnos</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">%</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Femenino</td>
                        <td><?php echo $malum ?></td>
                        <td><?php echo round($porcentajem, 2) ."%" ?></td>
                    </tr>
                    <tr>
                        <td>Masculino</td>
                        <td><?php echo $halum ?></td>
                        <td><?php echo round($porcentajeh, 2)."%" ?></td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>