<?php
		session_start();
		if (isset($_SESSION['usuario'])) {

 ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Inicio</title>
	</head>

	<body>
		<?php require_once "menu.php"; ?>
		<div class="container">
			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-8">

					<h2>BIENBENIDO(A)
						<h2>
							<?php
							echo $_SESSION['nomb'];
							echo " ";
							echo $_SESSION['ape'];
							echo " A:"; ?>
						</h2>
					 </h2>

					<h2>DISEÑOS ADRY </h2>

					<h6>SISTEMA DE VENTAS</h6>

				</div>
			</div>
		</div>
	</body>
</html>
<?php
}else{
	header('location:../index.php');
}

 ?>
