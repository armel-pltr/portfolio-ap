<?php
$data = yaml_parse_file('data/contact.yaml');

// Clés reCAPTCHA
$recaptcha_site_key = '6Le3XJIqAAAAAGiQ35ZJnjrL1LS08TgQmx25PP9';
$recaptcha_secret_key = '6Le3XJIqAAAAANjWl8FPXX86NX-PRlB9sfNVC2-8';

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = htmlspecialchars($_POST['nom']);
    $adresse = htmlspecialchars($_POST['adresse']);
    $objet = htmlspecialchars($_POST['objet']);
    $contenu = htmlspecialchars($_POST['contenu-message']);
    $recaptcha_response = $_POST['g-recaptcha-response'];

    // Validation du reCAPTCHA côté serveur
    $api_url = 'https://www.google.com/recaptcha/api/siteverify';
    $response = file_get_contents($api_url . '?secret=' . $recaptcha_secret_key . '&response=' . $recaptcha_response);
    $response_keys = json_decode($response, true);

    if ($response_keys["success"]) {
        // Succès de la validation reCAPTCHA
        echo "<p class='success'>Merci, votre message a été envoyé avec succès.</p>";
        // Vous pouvez ici envoyer un email ou enregistrer les données
    } else {
        // Échec de la validation
        echo "<p class='error'>Erreur : La validation reCAPTCHA a échoué. Veuillez réessayer.</p>";
    }
}

// Afficher le formulaire
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

<!-- Ajouter le script reCAPTCHA -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
