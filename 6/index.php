<?php 
$estnombre = $_GET["estnombre"];
$cal1 = $_GET["cal1"];
$cal2 = $_GET["cal2"];
$cal3 = $_GET["cal3"];
$promedio = ($cal1 + $cal2 + $cal3)/3;
$porcenparcial = $promedio * 55 / 100;
$examenf = $_GET["examenf"];
$porcenexa = ($examenf/100)*30;
$trabajof = $_GET["trabajof"];
$porcentrabajo = ($trabajof/100)*15;

$porcentajefinal = $porcenparcial + $porcenexa + $porcentrabajo;


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 6</title>
</head>
<body>
<div class="container text-center">
        <br>
        <br>
        <div class="row">
            <h1>Boletin Estudiantil</h1>
            <h3>Materia Algoritmos</h3>
        
        <!--Tabla de de notas-->
        <table class="table table-primary table-striped table-hover table-bordered table-sm table-responsive-sm d-block mx-auto" style=" width: auto;">
            <thead>
            <tr>
                    <th scope="col" colspan="3">Parciales 55%</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Parcial 1</td>
                    <td><?php echo $cal1 ?></td>
                </tr>
                <tr>
                    <td>Parcial 2</td>
                    <td><?php echo $cal2 ?></td>

                </tr>
                <tr>
                    <td>Parcial 3</td>
                    <td><?php echo $cal3 ?></td>
                </tr>
                <tr>
                    <th scope="col">Promedio</th>
                    <th scope="col"><?php echo round($promedio, 2)  ?></th>
                </tr>
                <tr>
                    <th scope="col">Porcentaje</th>
                    <th scope="col"><?php echo round($porcenparcial, 2)."%" ?></th>
                </tr>
            </tbody>
        </table>


        <!--Tabla de porcentajes-->
        <table class="table table-primary table-striped table-hover table-bordered table-sm table-responsive-sm d-block mx-auto" style=" width: auto;">
            <thead>
            <tr>
                    <th scope="col" colspan="3">Examen Final 30%</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Examen Semestral</td>
                    <td><?php echo $examenf ?></td>
                </tr>
                <tr>
                    <th scope="col">Promedio</th>
                    <th scope="col"><?php echo $examenf ?></th>
                </tr>
                <tr>
                    <th scope="col">Porcentaje</th>
                    <th scope="col"><?php echo round($porcenexa, 2) . "%"?></th>
                </tr>
            </tbody>
        </table>



        <!--Tabla de porcentajes-->
        <table class="table table-primary table-striped table-hover table-bordered table-sm table-responsive-sm d-block mx-auto" style=" width: auto;">
                    <thead>
                    <tr>
                            <th scope="col" colspan="3">Trabajo Final 15%</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Trabajo o Proyecto</td>
                            <td><?php echo $trabajof ?></td>
                        </tr>
                        <tr>
                            <th scope="col">Promedio</th>
                            <th scope="col"><?php echo $trabajof ?></th>
                        </tr>
                        <tr>
                            <th scope="col">Porcentaje</th>
                            <th scope="col"><?php echo round($porcentrabajo, 2) ?></th>
                        </tr>
                    </tbody>
                </table>



        </div>

        <div class="row">
                    <!--Tabla de porcentajes-->
        <table class="table table-primary table-striped table-hover table-bordered table-sm table-responsive-sm d-block mx-auto" style=" width: auto;">
                    <thead>
                    <tr>
                            <th scope="col" colspan="3">Promedio Final</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Parciales</td>
                            <td><?php echo round($porcenparcial, 2)."%" ?></td>
                        </tr>
                        <tr>
                            <td>Examen</td>
                            <td><?php echo round($porcenexa, 2) . "%" ?></td>
                        </tr>
                        <tr>
                            <td>Trabajo</td>
                            <td><?php echo round($porcentrabajo, 2). "%" ?></td>
                        </tr>
                        <tr>
                            <th scope="col">Promedio</th>
                            <th scope="col"><?php echo round($porcentajefinal, 2) ?></th>
                        </tr>
                        <tr>
                            <th scope="col">Porcentaje</th>
                            <th scope="col"><?php echo round($porcentajefinal, 2)."%" ?></th>
                        </tr>
                    </tbody>
                </table>
        </div>


    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>