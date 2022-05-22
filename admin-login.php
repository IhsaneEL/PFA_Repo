<?php
session_start();
?>
<html>
<head>
<title> Admin </title>
</head>

<body>
<form action="admin-log-verif.php" method="post" >
<label for="login">Identifiant:</label>
<input type="text" id="login" name="login"><br>
<label for="pw">Mot de passe:</label>
<input type="password" id="pw" name="pw"><br>
<input type="submit"value="se-connecter" name="valider">
<input type="reset" value="annuler"><br>
<p style="color:red;"><?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span>$error</span>";
                    }
                ?>  </p>
</form>
<a href="firstpage.php" id="f-p-ref" role="button" > Precedent</a>
</body>
</html>
<?php
    unset($_SESSION["error"]);
?>