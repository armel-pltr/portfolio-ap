<?php

$data=yaml_parse_file('data/réalisations.yaml');


foreach($data AS $realisation){

    echo "<h1>".$realisation["titre"]."</h1>";
    echo "<p>".$realisation["description"]."</p>";
    echo "<p>".$realisation["illustration"]."</p>";
    foreach($realisation['documents'] as $document){
        echo $document."<br>";
    }
}



?>