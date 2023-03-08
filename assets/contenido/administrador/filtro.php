<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtro</title>
    <?php require_once('../templates/header.php');?>
</head>

<body>
    <?php require_once('../templates/nav.php'); ?>
<div class="container">
    <h2 class="encabezado">Filtro de búsqueda</h2>
    <div class="card div-form">
        <form action="" id="form_capacitacion" class="form">
            <div class="input-container">
                <input required type="text" name="moderador" id="moderador" class="input_form" autocomplete="off" />
                <label class="label_form" for="moderador">Nombre Capacitación</label>
            </div>
            <div class="input-container">
                <button class="btn btn-primary" type="submit">Filtar</button>
            </div>
        </form>
    </div>

    <div>
        <!-- tabla-->
        <div>
            <div class="table">
                <div class="table-responsive">
                    <table class="table table-hover table-sm ">
                        <thead>
                            <th scope="col">No.Emplaedo</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">U. Operativa</th>
                            <th scope="col">Capacitación</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Duración</th>
                            <th scope="col">Acciones</th>

                        </thead>
                        <tbody>
                            <tr>
                            <tr>
                                <td scope="rol">MX0138500</td>
                                <td scope="rol">Jose Luis Reyes Morales</td>
                                <td scope="rol">Planta Ixtacomitán</td>
                                <td scope="rol">Calidad</td>
                                <td scope="rol">08/07/2022</td>
                                <td scope="rol">7hrs</td>
                                <td class="">
                                    <a onclick="" class="text-warning" style="font-size:25px; margin-left: 15px;"
                                        data-toggle="tooltip" data-placement="right" title="Actualizar">
                                        <i class="fa-sharp fa-solid fa-pen-to-square"></i>
                                    </a>
                                </td>
                            </tr>
                            </tr>
                            <tr>
                                <td scope="rol">MX0234569</td>
                                <td scope="rol">Jose De la Cruz Custodio</td>
                                <td scope="rol">Planta Ixtacomitán</td>
                                <td scope="rol">Calidad</td>
                                <td scope="rol">01/05/2023</td>
                                <td scope="rol">12hrs</td>
                                <td class="">
                                    <a onclick="" class="text-warning" style="font-size:25px; margin-left: 15px;"
                                        data-toggle="tooltip" data-placement="right" title="Actualizar">
                                        <i class="fa-sharp fa-solid fa-pen-to-square"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <!-- tabla-->


    </div>
    <div>
        <div class="table"></div>
    </div>
</div>
</body>
    <?php require_once('../templates/footer.php'); ?>
</html>