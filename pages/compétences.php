<?php
$data=yaml_parse_file('data/compétences.yaml');

foreach($data AS $domaine){
    echo "<h1>".$domaine["nom"]."</h1>";
    foreach($domaine["items"] AS $item){
        echo "<p>".$item["nom"]."</p>"; 
        echo "<p class='barre' style='width: ".$item["niveau"]."%'>".$item["niveau"]." %</p>"; 
    }
}

?>