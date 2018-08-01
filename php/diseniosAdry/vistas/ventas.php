<?php
     session_start();
     if (isset($_SESSION['usuario'])) {
       # code...

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ventas</title>
	 <?php
	 require_once 'menu.php';
	 ?>
  </head>

  <body>
	  <div class="container">
		  <h1>Administrar Ventas</h1>
		  <div class="row">
			  <div class="col-sm-4">
				  <span class="btn btn-default" id="btnVentas">Vender Producto</span>
				  <span class="btn btn-default" id="btnMostrar">Ventas Hechas</span>
			  </div>
		  </div>

		  <div class="row">
			  <div class="col-sm-12">
				  <div id="idVentas"></div>
				  <div id="idMostrar"></div>
			  </div>
		  </div>
	  </div>
  </body>
</html>
 <?php
    }else {
      header('location:../index.php');
    }
  ?>
