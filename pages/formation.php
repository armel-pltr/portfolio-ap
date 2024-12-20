<?php 
$data=yaml_parse_file('data/formation.yaml');

echo "<h1>Formation</h1>";  


foreach($data AS $formation){
    echo "<h2>".$formation["nom"]."</h2>";
    echo "<p>".$formation["etablissement"]."</p>";
    echo "<p>".$formation["debut"]."</p>";
    echo "<p>".$formation["fin"]."</p>";
    echo "<p>".$formation["lieu"]."</p>";
    echo "<p>".$formation["contenu"]."</p>";
}

?>


<a href="cv.pdf">CV</a>