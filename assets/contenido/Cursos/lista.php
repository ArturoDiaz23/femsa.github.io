<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
    <?php require_once('../templates/header.php'); ?>
</head>

<body>
    <div class="container m-5">
        <h2>Lista de Asitencia</h2>
        <div class="card_info">
            <div class="video">
            <video id="preview"></video>
        </div>
        <div>
            <p>No. Empleado: <span id="codigo"></span></p>
        </div>
        </div>
      <!-- tabla-->
      <div class="card mt-5 mb-5">
        <div class="table">
        <div class="table-responsive">
                <table class="table table-hover table-sm ">
                    <thead>
                        <th scope="col">No. Empleado</th>
                        <th scope="col">Nombre Completo</th>
                        <th scope="col">Departamento</th>
                        <th scope="col">Puesto</th>
                        <th scope="col">Área</th>
                        <th scope="col">U. Operativa</th>                   
                    </thead>
                    <tbody>
                            <tr>
                                <td scope="rol">0234569</td>
                                <td scope="rol">Jose De la Cruz Custodio</td>
                                <td scope="rol"></td>
                                <td scope="rol">Operador</td>
                                <td scope="rol">Linea 2</td>
                                <td scope="rol">Planta Ixtacomitán</td>
                            </tr>                        
                    </tbody>
                </table>
            </div>

        </div>
      </div>
      <!-- tabla-->
      </div>
</body>
<?php require_once('../templates/footer.php'); ?>
<script src="../../js/instascan.min.js"></script>
<script>
    let sonido = new Audio("../../img/barcode.wav");
    let scanner = new Instascan.Scanner({
        video: document.getElementById('preview'),
        scanPeriod: 5,
        mirror: true
    });

    Instascan.Camera.getCameras().then(function(cameras){
      if (cameras.length>0) {
         scanner.start(cameras[0]);
      } else {
         alert('No se encontraron camaras');
      }
    }).catch(function(e) {
      alert('Error: '+ e);
    });

    scanner.addListener('scan', function(resp) {
        sonido.play();
        console.log(resp);
        let codigo = document.getElementById('codigo')
        codigo.innerHTML = resp;
    })
</script>

</html>