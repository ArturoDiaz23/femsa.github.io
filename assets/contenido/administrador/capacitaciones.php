<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario</title>
    <?php require_once('../templates/header.php');?>
</head>

<body>
    <?php require_once('../templates/nav.php'); ?>
    <div class="container">
        <h2 class="encabezado">Capacitaciones</h2>
        <div>
            <!--Formulario de capacitacion-->
            <div class="card div-form">
                <form action="" id="form_capacitacion" class="form">
                    <div class="input-container">
                        <input required type="text" name="nombre_evevto" id="nombre_evevto" class="input_form"
                            autocomplete="off" />
                        <label class="label_form" for="nombre_evevto">Nombre evento</label>
                    </div>
                    <div class="input-container">
                        <input required type="text" name="moderador" id="moderador" class="input_form"
                            autocomplete="off" />
                        <label class="label_form" for="moderador">Nombre Moderador</label>
                    </div>
                    <div class="input-container">
                        <input required type="text" list="Option_proveedor" name="proveedor" id="proveedor"
                            class="input_form" autocomplete="off" />
                        <label class="label_form" for="proveedor">Proveedor</label>
                        <datalist id="Option_proveedor">
                            <option value="Proveedor 1" />
                            <option value="Proveedor 2" />
                        </datalist>
                    </div>
                    <div class="input-container">
                        <input required type="text" name="sede" id="sede" class="input_form" autocomplete="off" />
                        <label class="label_form" for="sede">Sede</label>
                    </div>
                    <div class="input-container">
                        <input type="date" class="input_form" name="fecha_inicio" id="fecha_inicio">
                        <label for="fecha_inicio" class="label_form">Fecha de inicio</label>
                    </div>
                    <div class="input-container">
                        <input class="input_form" type="date" name="fecha_fin" id="fecha_fin">
                        <label class="label_form" for="fecha_fin">Fecha de fin</label>
                    </div>
                    <!--<div class="input-container">
                    <input required class="input_form" type="text" name="duracion" id="duracion">
                    <label class="label_form" for="duracion">Duración</label>
                </div>-->
                    <div class="input-container">
                        <input class="input_form" type="time" name="horario_Inicio" id="horario_Inicio">
                        <label class="label_form" for="horario_Inicio">Horario Inicio</label>
                    </div>
                    <div class="input-container">
                        <input class="input_form" type="time" name="horario_fin" id="horario_fin">
                        <label class="label_form" for="horario_fin">Horario fin</label>
                    </div>

                </form>
                <div class="btn_form">
                    <button class="btn btn-primary" type="submit" id="btn_capacitacion">Guardar</button>
                </div>
            </div>

            <!-- tabla-->
            <div>
                <div class="table">
                    <div class="table-responsive">
                        <table class="table table-hover table-sm ">
                            <thead>
                                <th scope="col">Evento</th>
                                <th scope="col">Moderador</th>
                                <th scope="col">Proveedor</th>
                                <th scope="col">Sede</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Horario</th>
                                <th scope="col">Acciones</th>

                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="rol">Calidad</td>
                                    <td scope="rol">Jose luis Reyes Velazques</td>
                                    <td scope="rol">...</td>
                                    <td scope="rol">Planta Ixtacomitán</td>
                                    <td scope="rol">01/03/2023</td>
                                    <td scope="rol">9am - 4pm</td>
                                    <td class="">
                                        <a onclick="" class="text-danger" style="font-size:25px;" data-toggle="tooltip"
                                            data-placement="right" title="Eliminar">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                        <a onclick="" class="text-warning" style="font-size:25px; margin-left: 15px;"
                                            data-toggle="tooltip" data-placement="right" title="Actualizar">
                                            <i class="fa-sharp fa-solid fa-pen-to-square"></i>
                                        </a>
                                    </td>
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