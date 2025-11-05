<?php

include __DIR__  . '/config/config.php';
include __DIR__  . '/includes/header.php';

echo "<h2>Page d'accueil de ".SITE_NAME ."</h2>" ; // nom du site ici
echo "<p>Version: ".SITE_VERSION."</p>"; // version du site ici 


include __DIR__ . '/includes/footer.php';

?>