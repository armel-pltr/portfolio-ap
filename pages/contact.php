<?php
$data = yaml_parse_file('data/contact.yaml');

$recaptcha_site_key = '6Lf9ZqIqAAAAAD3T_c_3-4ovMZ315oDyAvxc96TK';
$recaptcha_secret_key = '6Lf9ZqIqAAAAAMQm6sLyr3b1MOX0zs2GrlsmtHoC';



echo "<div class='wrapper'>";
echo "<div class='container-contact'>";
echo "<h1>Contact</h1>";

echo "<form method='POST' action=''>";

echo "<label for='nom'>Nom :</label>";
echo "<input type='text' id='nom' name='nom' placeholder='" . $data[0]['nom'] . "' required>";

echo "<label for='adresse'>Adresse e-mail :</label>";
echo "<input type='email' id='adresse' name='adresse' placeholder='" . $data[0]['adresse'] . "' required>";

echo "<label for='objet'>Objet :</label>";
echo "<input type='text' id='objet' name='objet' placeholder='" . $data[0]['objet'] . "' required>";

echo "<label for='contenu-message'>Message :</label>";
echo "<textarea id='contenu-message' name='contenu-message' placeholder='" . $data[0]['contenu-message'] . "' required></textarea>";

echo "<div class='g-recaptcha' data-sitekey='" . $recaptcha_site_key . "'></div>";

echo "<button type='submit'>Envoyer</button>";
echo "</form>";

echo "</div>";
echo "</div>";
?>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>