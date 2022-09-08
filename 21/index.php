<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 21</title>
</head>
<body>
<div class="container text-center">
                <br>
                <br>
                <div class="row">
                <h1>Números con Progress Bar</h1>
                <table class="table table-secondary table-striped table-hover table-bordered table-sm table-responsive-sm d-block mx-auto" style=" width: auto;">
                    <thead>
                    <tr>
                            <th>Número</th>
                            <th>Cifrado</th>
                            <th>Grafico utilizando ProgressBar</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php for($i=0; $i<=10; $i++) {?>
                        <tr>
                            <td><?php echo $i ?></td>
                            <td><?php echo $numerorand = rand(1, 100) ?></td>
                            <?php if($numerorand < 61){
                                $color="secundary";
                                }elseif($numerorand >= 61 & $numerorand <= 70){
                                    $color="danger";
                                    }elseif($numerorand >= 71 & $numerorand <=80){
                                        $color="warning";
                                        }elseif($numerorand >= 81 & $numerorand <=90){
                                            $color="info";
                                            }elseif($numerorand > 90){
                                                $color="success";
                                                }else ?>
                            <td> <div class="progress">
                                <div class="progress-bar bg-<?php echo $color?> progress-bar-striped progress-bar-animated" role="progressbar" style="width: <?php echo $numerorand ?>%;" aria-valuenow="<?php echo $numerorand ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $numerorand ?>%</div>
                            </div></td>
                        <?php }?>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>