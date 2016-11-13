<?php

require '..\app\Autoloader.php';

\App\Autoloader::register();

If (isset($_GET['p']))
{
    $p = $_GET['p'];
}
 else {
     $p = 'home';
}


ob_start();


If ($p === 'home')
{
    require '../pages/home.php';
}
elseif ($p === 'single')
{
    require '../pages/single.php';
}

$content = ob_get_clean();

require '../pages/templates/default.php';