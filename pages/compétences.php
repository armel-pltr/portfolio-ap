<?php
$data=yaml_parse_file('data/compétences.yaml');

echo "<h1>Compétences</h1>";  

foreach($data AS $domaine){
    echo "<h2>".$domaine["nom"]."</h2>";
    foreach($domaine["items"] AS $item){
        echo "<p>".$item["nom"]."</p>"; 
        echo "<p class='barre' style='width: ".$item["niveau"]."%'>".$item["niveau"]." %</p>"; 
    }
}

?>