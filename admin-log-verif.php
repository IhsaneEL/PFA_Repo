<?php

session_start();
$m=new mysqli("127.0.0.1",'root','','test');
$error = "Identifiant/Mot de passe incorrect";

if(isset($_POST["login"]))
{$a_login=$_POST["login"];}

if(isset($_POST["pw"])){$a_pw=$_POST["pw"];}

$req=$m->query("select * from admin where adminID='".$a_login."' AND password='".$a_pw."' limit 1");

	if($req->num_rows==1) {header("location: admin.php"); }
	else {
	$_SESSION["error"] = $error;
    header("location: login.php"); 
	}
    
	

?>