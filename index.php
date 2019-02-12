<?php
// Inclusion des fichiers principaux
include_once 'app/_config/config.php';

include_once APP.'_functions/functions.php';
include_once APP.'_classes/Autoloader.php';


Autoloader::register();

include_once APP.'_config/db.php';


// Définition de la page courante
if (isset($_GET['page']) AND !empty($_GET['page'])) {
    $page = trim(strtolower($_GET['page']));
    if ( isset($_GET['q-nan']) AND !empty($_GET['q-nan'])){
        $idquiz = trim(strtolower($_GET['q-nan'])) ;
    }
}
else {
    $page = 'acceuil';
}

// Array contenant toutes les pages
$allPages = scandir(APP.'controllers/');

// Vérification de l'existence de la page
if (in_array($page.'_controller.php', $allPages)) {

    // Inclusion de la page
    include_once APP.'models/'.$page.'_model.php';
    include_once APP.'controllers/'.$page.'_controller.php';

    include_once APP.'views/'.$page.'_view.php';


} else {

    echo 'Erreur 404';

}

Database::disconnect();

?>