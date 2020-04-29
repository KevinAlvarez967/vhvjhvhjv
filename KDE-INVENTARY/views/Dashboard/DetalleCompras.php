<?php
require_once('../../core/helpers/TemplateDash.php');
$pagina = new page;
$pagina->headerTemplate('Detalle Compras');
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="mt-5 text-center" id="TituloPag"><i class="fad fa-bags-shopping mr-3"></i>Detalle de la compra</h3>
            <hr>
        </div>
        <div class="col-lg-6">
            <table id="Pedidos" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Pedido</th>
                        <th>Mesa</th>
                        <th>Fecha y Hora</th>
                        <th>Estado</th>
                        <th>Usuario</th>
                        <th>Total a pagar</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>12/12/2020</td>
                        <td>En cocina</td>
                        <td>Guillermo Cartagena</td>
                        <td>$10.43</td>
                        <td class="d-flex justify-content-center">
                            <a class="btn btn-outline-info" href=".php" role="button" data-toggle="modal" data-target="#Moreinfo">Ver mas</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>3</td>
                        <td>12/12/2020</td>
                        <td>Entregado</td>
                        <td>Kevin Oswaldo</td>
                        <td>$5.21</td>
                        <td class="d-flex justify-content-center">
                            <a class="btn btn-outline-info" href=".php" role="button" data-toggle="modal" data-target="#Moreinfo">Ver mas</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>4</td>
                        <td>12/12/2020</td>
                        <td>En cocina</td>
                        <td>Juan Anaya</td>
                        <td>$13.03</td>
                        <td class="d-flex justify-content-center">
                            <a class="btn btn-outline-info" href=".php" role="button" data-toggle="modal" data-target="#Moreinfo">Ver mas</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-lg-6">
            
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>


<?php
$pagina->footerTemplate();
?>