<?php 
$valor = $_GET["valor"];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Tabla de multiplicar</title>
</head>
<body>
    <div class="container text-center">
            <br>
            <br>
            <div class="row">
        <h1>Tabla de multiplicar del <?php echo $valor ?></h1>
            <table class="table table-secondary table-striped table-hover table-bordered table-sm table-responsive-sm d-block mx-auto" style=" width: auto;">
                <thead>
                <tr>
                        <th>Operación</th>
                        <th>Resultado</th>
                    </tr>
                </thead>
                <tbody>
                <?php for($i=0; $i<=12; $i++) {
                    $res=$valor*$i;
                    ?>
                    <tr>
                        <td><?php echo $valor . " X " . $i ?></td>
                        <td><?php echo $res?></td>
                        <?php }?>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>