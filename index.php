<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- Registrar empleado -->

                <h2 class ="mt-3">Registrar Empleado</h2>
                <form class ="mt-4" id="registrarEmpleado">
                    <div class="mb-3">
                        <label for="nombreEmpleado" class="form-label">Nombre del Empleado</label>
                        <input type="tex" class="form-control" id="inputNombreEmpleado" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <label for="inputIdHuella" class="form-label">ID Huella</label>
                            <div class="col">
                                
                                <input type="text" class="form-control" id="inputIdHuella">

                            </div>       
                            <div class="col">
                                <input type="button" class='btn btn-primary btnCargaId ' value="Cargar">
                            </div>                           
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Guardar</button>
                </form>
                <br>
                <hr>
                <br>
                <!-- Consultar empleado -->

                <h2 class ="mt-3">Consultar Empleado</h2>
                <form class ="mt-4" id="consultaEmpleado">
                    <div class="mb-3">
                        <input type="button" class='btn btn-primary btnBuscar mb-3' value="Consultar">

                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" id="inputConsultaNombre" placeholder="Nombre Empleado">
                            </div>       
                            <div class="col">
                                <input type="text" class="form-control" id="inputConsulttaIdHuella" placeholder="ID Huella Empleado">
                            </div>                           
                        </div>
                    </div>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
    </div>
</body>
<!-- JavaScript  -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/index.js" defer></script>
</html>