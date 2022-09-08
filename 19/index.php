<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 19</title>
</head>
<body>
    <div class="container text-center">
                <br>
                <br>
                <div class="row">
                <h1>Números del 0 al 100</h1>
                <table class="table table-secondary table-striped table-hover table-bordered table-sm table-responsive-sm d-block mx-auto" style=" width: auto;">
                    <thead>
                    <tr>
                            <th>Número</th>
                            <th>Cifrado</th>
                            <th>Ver</th>
                            <th>Modal</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php for($i=0; $i<=100; $i++) {?>
                        <tr>
                            <td><?php echo $i ?></td>
                            <td><?php $cif=md5($i); echo $cif ?></td>
                            <td> <div class="d-grid gap-2 d-md-block">
                            <a href="cifrado2.php?n=<?php echo $i ?>"><button  class="btn btn-primary" type="button">Enlace</button> </a>
                            </div></td>
                            <td><!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Ver Modal
                            </button>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Encriptación número <?php echo $i ?></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        <?php echo $cif ?>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
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