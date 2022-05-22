<?php
session_start();
$conn=new mysqli("127.0.0.1",'root','','test');
$error = "Il faut remplir tous les champs !!";
if(isset($_POST["n-p"])){$n_p=$_POST["n-p"];}
if(isset($_POST["d-n"])){$d_n=$_POST["d-n"];}
if(isset($_POST["country"])){$c=$_POST["country"];}
if(isset($_POST["city"])){$v=$_POST["city"];}
if(isset($_POST["tel"])){$t=$_POST["tel"];}
if(isset($_POST["adresse"])){$a=$_POST["adresse"];}


if(isset($_POST["f-work"])){$f_w=$_POST["f-work"];}
if(isset($_POST["f-tel"])){$f_t=$_POST["f-tel"];}
if(isset($_POST["f-mail"])){$f_m=$_POST["f-mail"];}
if(isset($_POST["m-work"])){$m_w=$_POST["m-work"];}
if(isset($_POST["m-tel"])){$m_t=$_POST["m-tel"];}
if(isset($_POST["m-mail"])){$m_m=$_POST["m-mail"];}

if(isset($_POST["level"])){$l=$_POST["level"];}
if(isset($_POST["b-y"])){$b_y=$_POST["b-y"];}
if(isset($_POST["school"])){$s=$_POST["school"];}
if(isset($_POST["p"])){$p=$_POST["p"];}
if(isset($_POST["mention"])){$m=$_POST["mention"];}



if(isset($_POST["qst"])){$qt=$_POST["qst"];}

if(isset($_POST["a"])){$an=$_POST["a"];}
if(isset($_POST["e"])){$et=$_POST["e"];}
if(isset($_POST["c"])){$cl=$_POST["c"];}
if(isset($_POST["s"])){$sec=$_POST["s"];}
if(isset($_POST["d"])){$dip=$_POST["d"];}


if(($n_p && $v && $l && $s )&&($a && $t)){
	$qu="INSERT INTO `student` (`ID`, `nom-prenom`, `date-naissance`, `pays`, `ville`, `serie-bac`, `lycee`, `tel`, `email`, `date`, `profession-pere`, `tel-pere`, `email-pere`, `profession-mere`, `tel-mere`, `email-mere`, `annee-bac`, `prive-public`, `mention`, `reponse`) VALUES (NULL,'$n_p','$d_n','$c','$v','$l','$s','$t','$a',current_timestamp(),'$f_w','$f_t','$f_m','$m_w','$m_t','$m_m','$b_y','$p','$m','$qt'); ";
$res=$conn->query($qu);
    if($an){
		foreach($an as $key => $value){
	$sup="INSERT INTO `etud-sup` (`sup-id`, `annee`, `etablissement`, `classe`, `section`, `diplome`, `nom-prenom`) VALUES (NULL,'$value','$et[$key]','$cl[$key]','$sec[$key]','$dip[$key]','$n_p');";
	$result=$conn->query($sup);
		}
	}
	header("location: index.php");
}
else {
	$_SESSION["error"] = $error;
    header("location: form.php");
 }
?>
