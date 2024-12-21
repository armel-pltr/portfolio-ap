<?php

$data = yaml_parse_file('data/réalisations.yaml');

echo "<div class='wrapper'>";  
echo "<div class='container-realisation'>"; 

echo "<h1>Réalisations en SLAM</h1>";  

foreach($data as $realisation) {
    echo "<h2>".$realisation["titre"]."</h2>";
    

    
    // Description du portfolio
    echo "<p>".$realisation["description"]."</p>";

    // Lien cliquable vers l'illustration (image du portfolio)
    echo "<a href='".$realisation["illustration"]."' target='_blank' class='portfolio-link'>";
    echo "<p>Voir l'illustration du Portfolio</p></a>";
    
}

echo "</div>";
echo "</div>";
?>
