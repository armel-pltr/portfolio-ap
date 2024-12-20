<?php
$data=yaml_parse_file('data/accueil.yaml');


echo "<div class='container'>";
echo "<div class='content-wrapper'>";
echo "<img src='../images/".$data["photo"]."' class='imagebvn' />";
echo "<p>".$data["prenom"]." ".$data["nom"]."</p>";
echo "<p>".$data["accroche"]."</p>";
echo "<p>".$data["presentation"]."</p>";
echo "</div>";
echo "</div>";



?>

