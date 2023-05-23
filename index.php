<?PHP
$page = $_GET["page"];
$lang = $_GET["lang"];

$url = "leUrlDuSite";
$basename = "titreDuSite";

include("lang/" . $lang . ".php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Raphaël Mailhiot">
    <meta name="description" content="<?php echo $description ?>">
    <meta itemprop="description" content="<?php echo $description ?>">
    <meta name="keywords" content="<?php echo $keywords ?>"/>
    <title><?php echo $titre ?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?PHP echo $url ?>images/favicon.ico"/>

    <!-- AJOUTER LA GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@100&family=Source+Sans+Pro:wght@200;300;400&display=swap"
          rel="stylesheet">

    <!-- LES LINKS CSS ET JS -->
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/styles.css">

    <script src="scripts/script.js" defer></script>

    <!-- AUTRES -->

</head>
<body>
<div class="site_container">

    <?PHP if ($lang == "fr") {
        include("header.php");
    } else {
        include("header-en.php");
    } ?>

    <?PHP

    if ($page == "accueil") {
        if ($lang == "fr") {
            include("accueil.php");
        } else {
            include("accueil-en.php");
        }
    }

    ?>

    <?PHP if ($lang == "fr") {
        include("footer.php");
    } else {
        include("footer-en.php");
    } ?>

</div>
</body>
</html>