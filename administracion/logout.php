<?php 
session_start();
unset($_SESSION['user_name']) ;   
unset($_SESSION['name']);            	
unset($_SESSION['id']);            	
unset($_SESSION['idRol']);				
unset($_SESSION['Descripcion']);				
session_unset();
session_destroy();

header("Location: index.php");