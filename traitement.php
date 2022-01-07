<div id="container-content">
    <?php
    $navBar = $_GET['navBar'] ?? "identite";
    switch ($navBar) {
        case 'accueil':
            include "accueil.php";
            break;
        case 'identite':
            include "identite.php";
            break;
        case 'experience':
            include "experience.php";
            break;
        case 'formation':
            include "formation.php";
            break;
        case 'langue':
            include "langue.php";
            break;
        case 'information':
            include "information.php";
            break;
        case 'divers':
            include "divers.php";
            break;
        default:
            include "accueil.php";
            break;
    }
    ?>
</div>