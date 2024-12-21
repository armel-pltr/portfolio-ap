<?php
$data=yaml_parse_file('data/contact.yaml');

echo "<div class='wrapper'>";  

echo "<div class='container-contact'>"; 

foreach($data AS $contact){

echo "<h1>Contact</h1>";  


echo "<h2>".$contact["nom"]."</h2>";
echo "<p>".$contact["adresse"]."</p>";
echo "<p>".$contact["objet"]."</p>";
echo "<p>".$contact["contenu-message"]."</p>";
echo "<p>".$contact["captcha"]."</p>";

echo "</div>";
echo "</div>";

}


?>
