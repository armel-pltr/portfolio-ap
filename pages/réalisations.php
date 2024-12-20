<?php

$data=yaml_parse_file('data/réalisations.yaml');


echo "<h1>Réalisations</h1>";  


foreach($data AS $realisation){

    echo "<h2>".$realisation["titre"]."</h2>";
    echo "<p>".$realisation["description"]."</p>";
    echo "<p>".$realisation["illustration"]."</p>";
    foreach($realisation['documents'] as $document){
        echo $document."<br>";
    }
}



?>