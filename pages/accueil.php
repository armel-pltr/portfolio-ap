<?php
$data = yaml_parse_file('data/accueil.yaml');

echo "<div class='container-accueil'>";
echo "<div class='content-wrapper'>";
echo "<img src='../images/".$data["photo1"]."' class='imagebvn' />";
echo "<h3>Accueil</h3>";  
echo "</div>";
echo "<div class='p-'>";
echo "<p>".$data["prenom"]." ".$data["nom"]."</p>";
echo "<img src='../images/".$data["photo2"]."' class='imgmoi' />";
echo "<p>".$data["accroche"]."</p>";
echo "<p>".$data["presentation"]."</p>";
echo "</div>";
echo "</div>";

?>
