<?php
    define('TITLE', 'Mentions légales - Communauté apprenante de la communication digitale');
    // echo $_GET['url'];
    require_once('init.php');
    require_once('private/view/head.php');
    require_once 'private/view/nav.php';
    require_once 'private/view/blog.php';
    require_once('private/view/footer.php');
?>
<?php
define('WP_USE_THEMES', false); // aucun besoin d'utiliser le thème actif donc on le désactive
require('http://blog.mpaw.xyz/wp-load.php'); // on include le "moteur" wordpress
?>