<?php 
$data = yaml_parse_file('data/formation.yaml');

echo "<div class='wrapper'>";  
echo "<div class='container-formation'>"; 

echo "<h1>Formation</h1>";  

foreach ($data as $formation) {
    echo "<h2>" . $formation["nom"] . "</h2>";
    echo "<p>" . $formation["etablissement"] . "</p>";
    echo "<p>" . $formation["debut"] . "</p>";
    echo "<p>" . $formation["fin"] . "</p>";
    echo "<p>" . $formation["lieu"] . "</p>";
    echo "<p>" . $formation["contenu"] . "</p>";
}

echo "<a href='./images/cv.png' class='cv-link'>Afficher le CV</a>";


echo "</div>";
echo "</div>";

?>
