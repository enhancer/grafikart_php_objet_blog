<?php

require '..\App\Autoloader.php';

\App\Autoloader::register();


If (isset($_GET['p']))
{
    $p = $_GET['p'];
}
 else {
     $p = 'home';
}

// Initialisation des objets

$db = new App\Database('grafikart_blog');
ob_start();


If ($p === 'home')
{
    echo "home";
    require '../pages/home.php';
}
elseif ($p === 'article')
{
    require '../pages/single.php';
}

$content = ob_get_clean();

require '../pages/templates/default.php';