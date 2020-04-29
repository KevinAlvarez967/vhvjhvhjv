<?php
class Page 
{
    public function headerTemplate($title) 
    {
        print
        ('
        <!DOCTYPE html>
<html lang="es">
  <head>
        <!-- conjunto de caracteres-->
        <meta charset="utf-8">
        <!-- Indica al navegador que la pagina web esta optimizada para dispositivos moviles-->
        <meta name="viewport" content="width= device-width, initial scale= 1.0">
        <!--Titulo de la pagina-->
        <title>'.$title.'</title>
  <!--Llamando una hoja de estilos-->
    <!-- CSS Dependencies -->
    <link rel="stylesheet" href="../../resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../resources/css/shards.min.css">
    <link rel="stylesheet" href="../../resources/icons/css/all.min.css">
  </head>
  <body>

            <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #e3f2fd;">
                <a class="navbar-brand" href="#">
                    <img src="../../resources/img/logo.png" width="40" height="40" class="d-inline-block align-top" alt="">
                </a>
                <a class="navbar-brand" href="#">Yesterday SV</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                        <li class="nav-item active">
                        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                        <a class="nav-link" href="#">Proveedores</a>
                        </li>
                        <li class="nav-item active">
                        <a class="nav-link" href="#">Productos</a>
                        </li> 
                        <li class="nav-item active">
                        <a class="nav-link" href="#">Pedidos</a>
                        </li>
                        <li class="nav-item active">
                        <a class="nav-link" href="#">Usuarios</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Reportes</a>
                        </li>
                </ul>
                </div>

                    
                    <i class="fas fa-user fa-2x"  class="d-inline-block align-top" alt=""></i>

                    <div class="dropdown ml-4 ">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Opciones
                        </a>
                    
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Empleados</a>
                        <a class="dropdown-item" href="#">Facturas</a>
                        <a class="dropdown-item" href="#">Cerrar sesion</a>
                        </div>
                    </div>
        
        
        
        ');
    }







    Public function footerTemplate()
    {
        print
        ('  
         </nav>



        <footer>
            <nav class="navbar navbar-expand-lg  fixed-bottom navbar-light bg-light">
                <a class="navbar-brand" href="#">Navbar w/ text</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Pricing</a>
                    </li>
                  </ul>
                  <span class="navbar-text">
                    Navbar text with an inline element
                  </span>
                </div>
              </nav>
        </footer>
            <!-- Optional JavaScript -->
            <!-- JavaScript Dependencies: jQuery, Popper.js, Bootstrap JS, Shards JS -->
            <script src="../../resources/js/jquery-3.4.1.min.js"></script>
            <script src="../../resources/js/bootstrap.min.js"></script>
            <script src="../../resources/js/shards.min.js"></script>
            </body>
            </html> 
            ');
    }

}   
        