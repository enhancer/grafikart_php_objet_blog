<h1>Single</h1>

<?php

    $post = $db->prepare('SELECT * FROM article WHERE id = ?',array($_GET['id']), 'App\Table\Article' , true);
    
?>

<h1><?php echo $post->titre; ?></h1>

<p><?php echo $post->contenu; ?></p>


