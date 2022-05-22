<?php
$conn=new mysqli("127.0.0.1",'root','','test');
if(isset($_POST["chercher"])){$l=$_POST["chercher"];}
echo '<table id="t">';
$query = $conn->query("select* from `student` where ID=$l ;");
while($row = $query->fetch_assoc()) {

    foreach($row as $field => $value) {
        echo '<tr><td>' . htmlentities($field) . '</td><td>' . htmlentities($value) . '</td></tr>';
    }
    echo '<tr><td colspan="3">&nbsp;</td></tr>';
}
echo '</table>';
echo '<table id="t">';
$query = $conn->query("SELECT `annee`,`etablissement`,`classe`,`section`,`diplome` FROM `etud-sup` where `nom-prenom`=(select `nom-prenom` from `student` where ID=$l) ;");
while($row = $query->fetch_assoc()) {

    foreach($row as $field => $value) {
        echo '<tr><td>' . htmlentities($field) . '</td><td>' . htmlentities($value) . '</td></tr>';
    }
    echo '<tr><td colspan="3">&nbsp;</td></tr>';
}
echo '</table>';
?>