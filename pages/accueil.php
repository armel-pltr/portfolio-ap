<?php
$data = yaml_parse_file('data/accueil.yaml');

echo "<div class='container'>";
echo "<div class='content-wrapper'>";
echo "<h1>Accueil</h1>";  
echo "<img src='../images/".$data["photo1"]."' class='imagebvn' />";
echo "</div>";
echo "<p>".$data["prenom"]." ".$data["nom"]."</p>";
echo "<img src='../images/".$data["photo2"]."' class='imgmoi' />";
echo "<p>".$data["accroche"]."</p>";
echo "<p>".$data["presentation"]."</p>";
echo "</div>";

?>
