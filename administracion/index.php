<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="core/css/sistemaLogin.css">
	<link rel="stylesheet" href="assets/alertas/css/alertify.min.css">
	<script src="core/js/sistemaLogin.js"></script>
	<script src="assets/alertas/alertify.min.js"></script>
</head>
<body>
	<div class="login-page">
		<div class="form">
			<form action="login.php" method="post">
				<h2 class="text-color-white ">Sistema de Visitas</h2>
				<?php if (isset($_GET['error'])) { ?>
					<script> 
						alertify.alert('Municipalidad Distrital de Aquia', '<?php echo $_GET['error']; ?>', function(){ alertify.success('Ok'); });
					</script>
				<?php } ?>
				<!-- <label>Nombre de usuario</label> -->
				<input type="text" name="uname" placeholder="Nombre de usuario"><br>

				<!-- <label>Contraseña</label> -->
				<input type="password" name="password" placeholder="Contraseña"><br>

				<button type="submit">Ingresar</button><br>
				

			</form>
			<div class="mt-13 text-small ">
					<span class="text-color-white text-center mt-4">Municipalidad Distrital de Aquia</span>
				</div>
		</div>
    </div>
</body>
</html>