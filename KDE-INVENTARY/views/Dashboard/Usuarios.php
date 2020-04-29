<?php
require_once('../../core/helpers/TemplateDash.php');
$pagina = new page;
$pagina->headerTemplate('Usuarios');
?>


<div class="container">

<!--Area de los data table-->
<div class="d-flex justify-content-center">
        <h3 class="mt-5" id="TituloPag"><i class="fas fa-user-cog mr-3"></i>Usuarios</h3>
                    
            </div>
            <hr>
    <div class="row">
            <div class="row mt-3 ml-2 d-flex justify-content-start">
            <a class="btn btn btn-success" href="" role="button">Agregar</a>
            </div>
        <div class= "col-lg-12 mt-5">
        <table id="Productos" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Usuario</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Tipo</th>
                <th>Estado</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Kevin Oswaldo</td>
                <td>Alvarez Rosales</td>
                <td>Kev</td>
                <td>Kevin.3401@hotmail.com</td>
                <td>71307929</td>
                <td>Administrador</td>
                <td>Activo</td>
                <td class="d-flex justify-content-center">
                <a class="btn" role="button" data-toggle="modal" data-target="#ModalActualizar"><i class="fas fa-edit"></i></a>
                <a class="btn" role="button" data-toggle="modal" data-target="#Eliminar"><i class="fas fa-times"></i></a>
                </td>
            </tr>
        </tbody>
    </table>
        </div>
    </div>
</div>











<?php
 $pagina->footerTemplate();       
?>