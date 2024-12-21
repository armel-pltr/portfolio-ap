<?php  require_once("yaml/yaml.php"); ?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Portfolio Armel PLANTIER</title>
        <link rel="stylesheet" href="style/style.css">
    </head>

    <body>
        <nav>
            <ul>
                <li><a href="#accueil">Accueil</a></li>
                <li><a href="#competences">Compétences</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#formation">Formation</a></li>
                <li><a href="#realisations">Réalisations</a></li>
            </ul>
        </nav>

        <div id="accueil">
            <?php include("pages/accueil.php"); ?>
        </div>

        <div id="competences">
            <?php include("pages/compétences.php"); ?>
        </div>

        <div id="contact">
            <?php include("pages/contact.php"); ?>
        </div>

        <div id="formation">
            <?php include("pages/formation.php"); ?>
        </div>

        <div id="realisations">
            <?php include("pages/réalisations.php"); ?>
        </div>

        <!-- Add the footer here -->
        <footer>
            <p>&copy; 2024 Armel PLANTIER. Tous droits réservés.</p>
        </footer>
    </body>
</html>
