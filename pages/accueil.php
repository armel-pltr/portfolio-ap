<?php
$data=yaml_parse_file('data/accueil.yaml');

echo "<p>".$data["prenom"]." ".$data["nom"]."</p>";
echo "<p>".$data["accroche"]."</p>";
echo "<p>".$data["presentation"]."</p>";
echo "<img src='../images/".$data["photo"]."' />";



?>

