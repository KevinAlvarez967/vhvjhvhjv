<?php
require_once('../../core/helpers/TemplateDash.php');
$pagina = new page;
$pagina->headerTemplate('Detalle Compras');
?>

<div class="container">

<!--Area de los data table-->
            <div class="d-flex justify-content-center">
            <h3 class="mt-5" id="TituloPag"><i class="fad fa-bags-shopping mr-3"></i>Detalle de la compra</h3>
            </div>
            <hr>    
                <div class="row mt-3 ml-2 d-flex justify-content-start">
                <a class="btn btn btn-success" href="" role="button" data-toggle="modal" data-target="#ModalAgregar">Agregar</a>
                </div>
    <div class="row">
        <div class= "col-lg-6 mt-5">
                    <table id="DetCompra" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Fecha de la compra</th>
                            <th>Total de la compra</th>
                            <th>Proveedor</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>12/15/2020</td>
                            <td>$20.50</td>
                            <td>Kevin Oswaldo Alvarez</td>
                            <td class="d-flex justify-content-center">
                            <a class="btn" role="button" href="DetalleCompras.php"><i class="far fa-align-justify"></i></a>   
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
