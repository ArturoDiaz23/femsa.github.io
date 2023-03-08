<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Perfil</title>
    <?php require_once('../templates/header.php'); ?>
</head>

<body>
    <?php require_once('../templates/nav.php'); ?>
    <div class="container">
        <h2 class="encabezado">Mi Perfil</h2>
        <div class="mb-5 card_info">
            <div class="p-4 card_data card">
                <h6 class="">Información</h6>
                <hr>
                <p><b>No. Empleado: </b><span id="num_empleado">5074658</span></p>
                <p><b>Nombre completo: </b><span></span></p>
                <p><b>Sexo: </b><span>Hombre</span></p>
                <p><b>Departamento: </b><span></span></p>
                <p><b>Puesto: </b><span>Maniobras generales</span></p>
                <p><b>U. Operativa: </b><span>Planta Ixtacomitán</span></p>

            </div>
            <div class="p-4 card_form card">
                <h6 class="">Cambiar contraseña</h6>
                <hr>
                <form class="form cf_db" id="form_Ucontrasenia">
                    <div class="cf_di input-container">
                        <input required type="password" name="contrasenia" id="contrasenia" class="input_form"
                            autocomplete="off" />
                        <label class="label_form" for="contrasenia">Contraseña</label>
                    </div>
                    <div class=" cf_di input-container">
                        <input required type="password" name="R_contrasenia" id="R_contrasenia" class="input_form"
                            autocomplete="off" />
                        <label class="label_form" for="R_contrasenia">Repetir Contraseña</label>
                    </div>
                </form>
                <button class="btn btn-warning m-3"><i class="fa-solid fa-rotate-right"></i> Actualizar</button>
            </div>
        </div>
        <div class="card p-4 mb-5">
            <h6 class="encabezado">QR Checkin</h6>
            <div class="contenedorQR" id="contenedorQR"></div>
        </div>

    </div>

</body>
<?php require_once('../templates/footer.php'); ?>
<script src="../../js/qrcode.min.js"></script>
<script src="../../js/QR.js"></script>
<script defer>
    let codigo = document.getElementById("num_empleado").innerHTML;
    const contenedorQR = document.getElementById("contenedorQR");
    QR(contenedorQR, codigo);
</script>

</html>