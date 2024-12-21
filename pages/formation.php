<?php
$data = yaml_parse_file('data/formation.yaml');

echo "<div class='wrapper'>";  
echo "<div class='container-formation'>";  

echo "<h1>Formations</h1>";  

foreach ($data as $formation) {
    echo "<h2>" . $formation["nom"] . "</h2>";
    echo "<div class='formation-details'>";
    echo "<p>Établissement :</strong> " . $formation["etablissement"] . "</p>";
    echo "<p>Début :</strong> " . $formation["debut"] . "</p>";
    echo "<p>Fin :</strong> " . $formation["fin"] . "</p>";
    echo "<p>Lieu :</strong> " . $formation["lieu"] . "</p>";
    echo "<p>Contenu :</strong> " . $formation["contenu"] . "</p>";
    echo "</div>";
}

echo "<a href='./images/cv.png' class='cv-link'><h2>Afficher le CV</h2></a>";

echo "</div>";  
echo "</div>";  
?>
