<?php
require("constructor.php");
if(isset($_POST['mail']) && isset($_POST['psw'])) {

	$mail=$_POST['mail'];
	$psw=$_POST['psw'];

	$NewConn = new ConnecionMySQL();

	$NewConn->CreateConnection();

	$sql="SELECT * FROM usuarios WHERE mail='$mail' and contraseña='$psw'";

	$result = $NewConn->ExecuteQuery($sql);

	$filas = $NewConn->GetCountAffectedRows();
		if($filas = 1){
			session_start();
			$_SESSION = $NewConn->GetArray($result);
			header("location:index.php");
		}
		else{
			//header("location:index.php");
		}
	}
?>