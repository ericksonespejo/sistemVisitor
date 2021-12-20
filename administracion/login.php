<?php 
session_start(); 
include "../includes/config/conexion.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: index.php?error=Necesitamos el nombre de usuario");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=No te olvides de la contraseña");
	    exit();
	}else{
		// hashing the password
        $pass = md5($pass);

        
		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
				$_SESSION['rol'] = $row['rol'];
				if ($_SESSION['rol']==1) {
					header("Location: admin/index.php");
		        	exit();
				} else {
					header("Location: user/index.php");
		        	exit();
				}
				
            	
            }else{
				header("Location: index.php?error=El usuario o la contraseña no son correctos");
		        exit();
			}
		}else{
			header("Location: index.php?error=El usuario o la contraseña no son correctos");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}