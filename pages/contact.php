<?php
$data=yaml_parse_file('data/contact.yaml');

foreach($data AS $contact){

echo "<h1>".$contact["nom"]."</H1>";
echo "<p>".$contact["adresse"]."</p>";
echo "<p>".$contact["objet"]."</p>";
echo "<p>".$contact["contenu-message"]."</p>";
echo "<p>".$contact["captcha"]."</p>";
}


?>
