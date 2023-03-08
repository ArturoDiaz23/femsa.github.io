   <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Operativo</title>
    <?php require_once('../templates/header.php');?>
</head>

<body>
    <?php require_once('../templates/nav.php'); ?>
   <div class="container">
      <h2  class="encabezado">Personal operativo</h2>
      <!--Formulario de personal-->
        <div class="card div-form">
            <form action="" id="form" class="form">
                <div class="input-container">
                    <input required type="text" name="id" id="id" class="input_form" autocomplete="off"/>
                    <label class="label_form" for="id">No. Emplado</label>
                    <span></span>
                </div>
                <div class="input-container">
                    <input required type="text" name="nombre" id="nombre" class="input_form" autocomplete="off"/>
                    <label class="label_form" for="nombre">Nombre(s)</label>
                </div>
                <div class="input-container">
                    <input required type="text" name="paterno" id="paterno" class="input_form" autocomplete="off"/>
                    <label class="label_form" for="paterno">Apellido Paterno</label>
                </div>
                <div class="input-container">
                    <input required type="text" name="materno" id="materno" class="input_form" autocomplete="off"/>
                    <label class="label_form" for="materno">Apellido Materno</label>
                </div>  
                <div class="input-container">
                    <input required type="text" name="operativa" id="operativa" class="input_form" autocomplete="off" value="Planta Manufactura Ixtacomitán"/>
                    <label class="label_form" for="operativa">Área Operativa</label>
                </div>    
                <div class="input-container">
                    <input required type="text" list="Option_dep" name="departamento" id="departamento" class="input_form" autocomplete="off"/>
                    <label class="label_form" for="departamento">Departamento</label>
                    <datalist id="Option_dep" >
                        <option value="Linea 1"/>
                        <option value="Linea 2"/>
                        <option value="Linea 3"/>
                        <option value="Linea 4"/>
                    </datalist>
                </div>
                <div class="input-container">
                    <input required type="text" list="Option_puesto" name="puesto" id="puesto" class="input_form" autocomplete="off"/>
                    <label class="label_form" for="puesto">Puesto</label>
                    <datalist id="Option_puesto" >
                        <option value="Puesto 1"/>
                        <option value="Puesto 2"/>
                    </datalist>
                </div>
            </form>
            <div class="btn_form">
                <button class="btn btn-primary" id="submit_personal" type="submit">Guardar</button>
            </div>
        </div>
            
        <div class="card form">
            <h6 class="encabezado">Subir Archivo Excel</h6>
            <input type="file" name="file" id="file">
        </div>
      <!--Formulario de personal-->
      <!--Carga de datos excel-->

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
                        <th scope="col">Acciones</th>                        
                    </thead>
                    <tbody>
                            <tr>
                                <td scope="rol">MX0234569</td>
                                <td scope="rol">Jose De la Cruz Custodio</td>
                                <td scope="rol"></td>
                                <td scope="rol">Operador</td>
                                <td scope="rol">Linea 2</td>
                                <td scope="rol">Planta Ixtacomitán</td>
                                <td class="">
                                    <a onclick="" class="text-danger" style="font-size:25px;"
                                    data-toggle="tooltip" data-placement="right" title="Eliminar">
                                    <i class="fa-solid fa-trash"></i>  
                                    </a>
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
    </body>
    <?php require_once('../templates/footer.php'); ?>
</html>