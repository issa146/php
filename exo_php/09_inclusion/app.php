<?php

include __DIR__  . '/config/config.php';
include __DIR__  . '/includes/header.php';
include __DIR__  . '/settings/settings.php';


if($debugMode == true) {
    echo "le mode debug est activé";
} else {
    echo "le mode debug est déactivé";
}

include __DIR__ . '/includes/footer.php';
/* 
    Ici c'est la page qui gère les paramètres et qui vérifie si le mode debug est activé ou non 
*/
?>
