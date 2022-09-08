<?php 
$estnombre = $_GET["estnombre"];
$cal1 = $_GET["cal1"];
$cal2 = $_GET["cal2"];
$cal3 = $_GET["cal3"];
$cal4 = $_GET["cal4"];
$cal5 = $_GET["cal5"];
$promedio = ($cal1 + $cal2 + $cal3 + $cal4 + $cal5)/5;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 5</title>
</head>
<body>
    <div class="container text-center">
        <br>
        <br>
        <div class="row">
            <h1>Boletin estudiantil</h1>
            <h3>Materia 1</h3>
        <table class="table table-secondary table-striped table-hover table-bordered table-sm table-responsive-sm d-block mx-auto" style=" width: auto;">
            <thead>
            <tr>
                    <th scope="col" colspan="3">Estudiante</th>
                </tr>
                <tr>
                    <th scope="col" colspan="3"><?php echo $estnombre ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nota 1</td>
                    <td><?php echo $cal1 ?></td>
                </tr>
                <tr>
                    <td>Nota 2</td>
                    <td><?php echo $cal2 ?></td>

                </tr>
                <tr>
                    <td>Nota 3</td>
                    <td><?php echo $cal3 ?></td>
                </tr>
                <tr>
                    <td>Nota 4</td>
                    <td><?php echo $cal4 ?></td>
                </tr>
                <tr>
                    <td>Nota 5</td>
                    <td><?php echo $cal5 ?></td>
                </tr>
                <tr>
                    <th scope="col">Promedio</th>
                    <th scope="col"><?php echo $promedio ?></th>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>