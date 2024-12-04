<?php 
$data=yaml_parse_file('data/formation.yaml');

foreach($data AS $formation){
    echo "<h1>".$formation["nom"]."</h1>";
    echo "<p>".$formation["etablissement"]."</p>";
    echo "<p>".$formation["debut"]."</p>";
    echo "<p>".$formation["fin"]."</p>";
    echo "<p>".$formation["lieu"]."</p>";
    echo "<p>".$formation["contenu"]."</p>";
}

?>


<a href="cv.pdf">CV</a>